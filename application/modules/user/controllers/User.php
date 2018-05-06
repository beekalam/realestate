<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User extends MX_Controller {
    //fixme user role does not show in change role drop down
    //fixme user type pill not right in user list
    //fixme checkperm is not implemented yet
    function __construct(){
        parent::__construct();
        $this->load->model("Settings_model");
        $this->load->helper("utils");
        $this->checkAuth();
    }

    public function users(){

        $users = $this->db
                      ->query("select users.*,roles.name as role_name from users join roles on users.role_id = roles.id")
                      ->result_array();
//        pre($users);
        $this->set_data("active_menu","m-manage-users")
            ->set_data('users',$users)
            ->set_data('roles',$this->db->get('roles')->result_array())
            ->view('users',[]);
    }

    public function roles(){
        $this->set_data("active_menu","m-manage-users")
            ->set_data('roles',$this->db->get('roles')->result_array())
            ->set_data("roles_descriptions",$this->perm_descriptions())
            ->view('roles',[]);
    }

    public function add_role(){
        $msg = "عملیات با موفقیت انجام شد";

        if(isset($_POST['role_name']) && !empty($_POST['role_name']))
        {
            $role_name = $this->input->post('role_name');
            //fixme check for unique role
            $res = $this->db->get_where('roles',array('name'=>$role_name))->result();
            if(count($res)!=0){
                $msg = "این نام دسته قبلا استفاده شده";
            }else{
                $res = $this->db->insert('roles',array('name'=>$role_name,'permissions'=>json_encode($this->perm_list())));
                if(!$res){
                    $msg = "خطا در ذخیره سازی رول";
                }
            }
        }else{
            $msg = "نام رول وارد شده معتبر نمی باشد.";
        }

        $this->session->set_flashdata("msg",$msg);
        redirect("user/roles");
    }


    public function delete_role() {
        if(!$this->is_admin()) return;
        if(!$this->is_post_request()) return;
        // pre("in dleete role");
        $role_id = $this->input->post('role_id');

        $msg = "";
        $users_with_role = $this->db->get_where('users',array('role_id' => $role_id))->result();

        if(count($users_with_role)!=0){
            $msg = "error|" . "کاربرانی با این رول وجود دارند.";
        }else{

            $res = $this->db->delete('roles',array('id' => $role_id));
            if($res){
                $msg = "عملیات با موفقیت انجام شد";
            }
        }
        $this->session->set_flashdata("msg",$msg);
        redirect('user/roles');
    }


    public function change_role()
    {
        $ok = isset($_POST['role_type']) && !empty($_POST['role_type']);
        $ok = $ok && isset($_POST['user_id']) && !empty($_POST['user_id']);

        if($ok)
        {
            $role_id = $this->input->post('role_type');
            $user_id = $this->input->post('user_id');
            $this->db->set('role_id',$role_id);
            $this->db->where('id',$user_id);
            $ok = $this->db->update('users');
            if(!$ok){
                $this->session->set_flashdata("msg","error|" . "خطا در ذخیره سازی");
            }
            else
                $this->session->set_flashdata("msg","success|" . "اطلاعات با موفقیت ثبت شد");
        }else{
            $this->session->set_flashdata("msg","error|" . "مقدار نامعتبر");
        }

        redirect('user/users');
    }



    public function user_change_password(){
        if(!$this->is_post_request()) return;

        $id = $this->input->post('id');
        $old_password = $this->input->post('previous_password');
        $new_password = $this->input->post('new_password');
        $repeat_password = $this->input->post('repeat_password');

        // pre([$id,$old_password,$new_password,$repeat_password]);

        $row = $this->db->get_where('users',array('id'=>$id))->result();

        if(count($row) > 0) {
            $row = $row[0];
            if(sha1($old_password) != $row->password) {
                $this->session->set_flashdata('msg','پسورد قدیمی اشتباه وارد شده است.');
                redirect("users/profile?id={$id}");
            }

            if(empty($new_password) || $repeat_password != $new_password) {
                $this->session->set_flashdata('msg','پسورد و تکرار آن مشابه نمیباشند');
                redirect("users/profile?id={$id}");
            }

            $this->db->set('password',sha1($new_password));
            $this->db->where('id',$id);
            if($this->db->update('users')) {
                $this->session->set_flashdata('msg','پسورد با موفقیت تغییر یافت');
                redirect("users/profile?id={$id}");
            }else{
                $this->session->set_flashdata('msg','خطا در تغییر پسورد');
                redirect("users/profile?id={$id}");
            }

        }
    }

    public function change_password(){
//        if(!$this->is_post_request()) return;

        if(isset($_POST['new-password']) && isset($_POST['user-id'])) {
            $this->db->set('password', sha1($this->input->post('new-password')) );
            $this->db->where('id',$this->input->post('user-id'));
            if($this->db->update('users')){
                $this->session->set_flashdata("msg","پسورد با موفقیت تغییر یافت");
                redirect("user/users");
            }else{
                $this->session->set_flashdata("msg","خطا در تغییر پسورد");
                redirect("user/users");
            }
        }

        $this->session->set_flashdata("msg","خطا در تغییر پسورد");
        redirect("user/users");
    }

    public function delete_user() {
        if(!$this->is_post_request()) return;
//        if(!$this->check_perm('delete_user')) return;

        $res = $this->db->delete('users',array("id" => $this->input->post('what')));
        if($res){
            $this->session->set_flashdata('msg',"کاربر با موفقیت حذف شد");
            return ejson(array('success'=>'true'));
        }else{
            return ejson(array('success'=>'false','error'=>'خطا در حذف کاربر'));
        }
    }


    public function new_user() {
        if(!$this->is_post_request()) return;
//        if(!$this->check_perm('add_user')) return;

        $res = $this->db->insert('users',array(
            "first_name" => $this->input->post('first_name'),
            "last_name" => $this->input->post('last_name'),
            "user_name" => $this->input->post('username'),
            "password" => sha1($this->input->post('password')),
            "role_id" => $this->input->post('role_type'),
            "super_admin" => false));

        if($res){
            $this->session->set_flashdata("msg","کاربر جدید ثبت شد");
            redirect("user/users");
        }

        $this->session->set_flashdata("msg","خطا در ثبت کاربر جدید");
        redirect("user/users");
    }

    public function update_role() {
//        pre($_POST);
        $p = $this->perm_list();

        foreach($p as $k=>&$v){
            $v = false;
            if(isset($_POST[$k]) && $_POST[$k] == true) {
                $v=true;
            }
        }

        $this->db->set("permissions",json_encode($p));
        $this->db->where('id',$_POST['role_id']);
        $res = $this->db->update('roles');
        if($res){
            $this->session->set_flashdata('msg','عملیات با موفقیت انجام شد');
            redirect('user/roles/');
        }
    }

}
