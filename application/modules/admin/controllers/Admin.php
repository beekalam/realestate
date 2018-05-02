<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends MX_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model("Settings_model");
		$this->load->helper("utils");
//		pre($_SESSION);
		$this->checkAuth();
	}

	public function index() {
	    pc("in index");
        $this->load->library('PropertyLib');
        $data = $this->propertylib->property_stats();
        $data["active_menu"] = "m-dashboard";
//        pre($data);
        $this->view("index",$data);
	}

	public function add_client(){
        $this->load->library('ClientLib');
        $this->load->helper(array('form','url'));
        $data["post_back"] = base_url("admin/add_client");
        if($this->is_get_request()) {
            $this->view("add_client",$data);
            return;
        }
        pc("in admin");
        //post request validation
        if($this->clientlib->is_valid() == false){
            $this->view('add_client',$data);
            return;
        }else{
            $this->clientlib->init_from_post();
            if($this->clientlib->save()){
                $this->success_msg();
                redirect("admin/index");
            }else{
                $this->err_msg();
            }
        }
    }

    public function edit_client()
    {
        $this->load->library('ClientLib');
        $this->load->helper(array('form','url'));
        $id =$this->get("GET.id");
        if($this->is_get_request()) {
            $res = $this->clientlib->find_by_id($id);
            $res["post_back"] = base_url("admin/edit_client?id=$id");
            $this->view("add_client",$res);
            return;
        }

        if($this->clientlib->is_valid() == false){
            $this->view('add_client',array("post_back"=>base_url("admin/edit_client")));
            return;
        }else{
            $this->clientlib->init_from_post();
            if($this->clientlib->update()){
                $this->success_msg();
            }else{
                $this->err_msg();
            }
            redirect("admin/index");
        }
    }

    public function edit_property(){
        $this->load->library('PropertyLib',array("property_type"=>'',"deal_type"=>''));
        $this->load->helper(array('form','url'));
        $id = $this->get("GET.id");
        if($this->is_get_request()){
            $res = $this->propertylib->find_by_id($id);
            $res["post_back"] = base_url("admin/edit_property");
            $res["pt"] = $this->propertylib->get_property_type();
            $res["dt"] = $this->propertylib->get_deal_type();
            $this->view('add_property',$res);
            return;
        }

        $this->propertylib->init_from_post();
        if($this->propertylib->is_valid() == false){
            $data["pt"] = $this->propertylib->get_property_type();
            $data["dt"] =  $this->propertylib->get_deal_type();
            $data["post_back"] = base_url("admin/edit_property");
            $this->view('add_property',$data);
            return;
        }else{
            if($this->propertylib->update()){
                $this->success_msg();
            }else{
                $this->err_msg();
            }
            redirect("admin/index");
        }
    }

    public function add_property(){
        $property_type = $_REQUEST['pt'];
        $deal_type = $_REQUEST['dt'];
//        pre($_REQUEST);
        $this->load->library('PropertyLib',array("property_type"=>$property_type,"deal_type"=>$deal_type));
        $this->load->helper(array('form','url'));
        if($this->is_get_request()) {
            $this->view("add_property",array("pt"=>$property_type,"dt"=>$deal_type,
                             "post_back"=>base_url("admin/add_property?pt=$property_type&dt=$deal_type")));
            return;
        }

        //post request validation
        if($this->propertylib->is_valid() == false){
            $this->view('add_property',array("pt"=>$property_type,"dt"=>$deal_type,
                            "post_back"=>base_url("admin/add_property?pt=$property_type&dt=$deal_type")));
            return;
        }else{
            $this->propertylib->init_from_post();
            if($this->propertylib->save()){
                $this->success_msg();
                redirect("admin/index");
            }else{
                die("error");
            }
        }
    }

    public function properties(){
        $start = $this->input->get("start");
        $length = $this->input->get("length");

        if(!$start) $start = 0;
        if(!$length) $length = 10;

        $total  = count($this->db->get("properties")->result());
        $data   = $this->db->get("properties",$length,$start)->result();

        ejson(array("data" => $data,
            "recordsTotal" => $total,
            "draw" => $this->input->get("draw"),
            "recordsFiltered"=> $total));
    }

    public function clients(){
        $this->view("clients",["active_menu"=>"m-clients"]);
    }

    public function clients_list()
    {
        $start  = $this->input->get("start");
        $length = $this->input->get("length");
        if(!$start) $start = 0;
        if(!$length) $length = 10;
        $total  = count($this->db->get("clients")->result());
        $data   = $this->db->get("clients",$length,$start)->result();
        pc("start:$start, length:$length, total:$total,dataLength:".count($data));
        ejson(array("data" => $data,
                    "recordsTotal" => $total,
                    "draw" => $this->input->get("draw"),
                    "recordsFiltered"=> $total));
    }

    public function find_client_modal()
    {
      $this->load->view("find_client_modal");
    }

    public function find_client(){
        $this->load->library('ClientLib');
        $res = $this->clientlib->search(["limit"=>10]);
        echo json_encode($res);
    }

    public function users(){
            $this->set_data("active_menu","m-manage-users")
                 ->set_data('users',$this->db->get('users')->result_array())
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
        redirect("admin/roles");
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
        redirect('admin/roles');
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

        redirect('admin/users');
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
                redirect("admin/users");
            }else{
                $this->session->set_flashdata("msg","خطا در تغییر پسورد");
                redirect("admin/users");
            }
        }

        $this->session->set_flashdata("msg","خطا در تغییر پسورد");
        redirect("admin/users");
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
            "password" => $this->input->post('password'),
            "role_id" => $this->input->post('role_type'),
            "super_admin" => false));

        if($res){
            $this->session->set_flashdata("msg","کاربر جدید ثبت شد");
            redirect("admin/users");
        }

        $this->session->set_flashdata("msg","خطا در ثبت کاربر جدید");
        redirect("admin/users");
    }

}
