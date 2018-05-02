<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// require_once (APPPATH.'helpers/perms_map.php');

class Login extends MX_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("Users_model");
		$this->load->helper("utils");
	}

	public function index()
	{
		if($this->session->userdata('login_in')==true && $this->session->userdata("isadmin")==true)
			redirect('admin');

        if($this->session->userdata('login_in')==true)
            redirect('front/index');


        //handle post request
		if($this->input->post()){
			$username = $this->input->post('username');
			$password = $this->input->post('password');
//			$row 	  = $this->Users_model->get_user($username,$password);
			$row = $this->db->get_where('users',array("user_name"=>$username,"password"=>$password))->result_array();
			// pc("username: " . $username);
			// pc("password: " . $password);
			if(count($row)!=0){
			    $row = $row[0];
				$this->session->set_userdata('login_in',true);
				if($row["super_admin"]=="yes")
					$this->session->set_userdata('isadmin',true);
				else
					$this->session->set_userdata('isadmin',false);
				
				$this->session->set_userdata('name', $row["first_name"] . " " . $row["last_name"] );
				$this->session->set_userdata('userid', $row["id"] );
				$this->session->set_userdata("username",$row["username"]);

				
				// $this->session->set_userdata("perms",$perms);
//				$perms = $this->Users_model->get_user_permissions($row["role_id"]);
				
//				$this->session->set_userdata("perms",$perms);
				
				// $this->session->set_userdata("profile_img",
				// 		val($row["img"],base_url()."/assets/layouts/layout2/img/avatar.png"));

				$this->session->set_userdata("profile_img",base_url()."/assets/layouts/layout2/img/avatar.png");
				if($row["super_admin"]=="yes"){
                    redirect('admin/index');
                }else{
				    redirect("admin/index");
                }
			}else{
				redirect('login');
			}
		}

		//handle get request
		$data['footer'] =  "By<a href='#'> FANACMP </a>" . "@". date('Y');
		$this->load->view('login',$data);
	}

	public function logout() {
	    $is_admin = $this->session->userdata("isadmin");
		$this->session->set_userdata('login_in',false);
		$this->session->set_userdata('isadmin',false);
		$this->session->unset_userdata("userid");
		$this->session->sess_destroy();
		if($is_admin)
		    redirect('login');
		else
		    redirect('login/index');
	}
}
