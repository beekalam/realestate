<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

/** load the CI class for Modular Extensions **/
require dirname(__FILE__).'/Base.php';

/**
 * Modular Extensions - HMVC
 *
 * Adapted from the CodeIgniter Core Classes
 * @link	http://codeigniter.com
 *
 * Description:
 * This library replaces the CodeIgniter Controller class
 * and adds features allowing use of modules and the HMVC design pattern.
 *
 * Install this file as application/third_party/MX/Controller.php
 *
 * @copyright	Copyright (c) 2015 Wiredesignz
 * @version 	5.5
 * 
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 * 
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 * 
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 **/
class MX_Controller 
{
	public $autoload = array();
	protected $render_header = true;
	protected $render_footer = true;
	protected $render_section_main = true;
	protected $body_class = '';
	protected $page_title = "";
	private $data = array();
	protected $settings = array();
	public function __construct() 
	{
		$class = str_replace(CI::$APP->config->item('controller_suffix'), '', get_class($this));
		log_message('debug', $class." MX_Controller Initialized");
		Modules::$registry[strtolower($class)] = $this;	
		
		/* copy a loader instance and initialize */
		$this->load = clone load_class('Loader');
		$this->load->initialize($this);	
		
		/* autoload module items */
		$this->load->_autoloader($this->autoload);
	}
	

	protected function checkAuth(){
		if($this->session->userdata('login_in')==false){
			redirect('login');
		}
	}

	public function __get($class){
		return CI::$APP->$class;
	}
    public function adminView($view,$data=array()){
        if($this->session->has_userdata('msg')) {
            $msg = $this->session->userdata('msg');
            $this->session->unset_userdata('msg');
            $msg_type = "success";

            if($msg and strpos($msg,"|") != false)
            {
                list($type,$message) = explode("|", $msg);
                $msg_type = $type;
                $msg = $message;
            }
            $data['msg'] = $msg;
            $data['msg_type'] = $msg_type;
        }

        $data['footer'] =  "By<a href='#'> FANACMP </a>" . "@". date('Y');

        $this->load->view("header",$data);
        $this->load->view($view,$data);
        $this->load->view("footer",$data);

    }
	public function view($view,$data=array()) {
		if($this->session->has_userdata('msg'))
		{
			 $msg = $this->session->userdata('msg');
			 $this->session->unset_userdata('msg');
			 $msg_type = "success";

			 if($msg and strpos($msg,"|") != false)
			 {
			 	list($type,$message) = explode("|", $msg);
			 	$msg_type = $type;
			 	$msg = $message;
			 }
			 $data['msg'] = $msg;
			 $data['msg_type'] = $msg_type;
		}

		$data['footer'] =  "By<a href='#'> FANACMP </a>" . "@". date('Y');
		
		// $data['isadmin']	=  $this->is_admin();
		// if(file_exists(APPPATH.'views/header.php'))
		// 	pre("file_exists");
		//pre(file_get_contents(APPPATH.'views/header.php'));
		$data["theme"]  = $this->get('SESSION.theme') OR "default";
		$data["render_section_main"] = $this->render_section_main;
		$data["body_class"] = $this->body_class;
		$data["page_title"] = $this->page_title;
		$data["settings"] = $this->settings;

		if($this->render_header) {
            if(isset($_SESSION["lang"]) && $_SESSION["lang"] == "en")
                $this->load->view("en_header",$data);
            else
                $this->load->view('fa_header', $data);
        }

		$this->load->view($view,$data);

		if($this->render_footer) {
            if(isset($_SESSION["lang"]) && $_SESSION["lang"] == "en")
                $this->load->view("en_footer",$data);
            else
                $this->load->view('fa_footer', $data);
        }
	}

	public function set_title($page_title){
		$this->$page_title = $page_title;
	}
	public function msg($msg){
		$this->session->set_userdata("msg",$msg);
	}
	public function success_msg(){
		$this->msg("عملیات با موفقیت انجام شدم");
	}
	public function err_msg(){
		$this->msg("خطا در ذخیره سازی");
	}

	public function set_settings($s){
		$this->settings = $s;
	}
	public function get($in){
		list($arr,$key) = explode(".",$in);
		if(empty($arr) || empty($key)) return null;
		$arr = strtolower($arr);
		if($arr == "get"){
			if($_SERVER['REQUEST_METHOD']!="GET") return null;
			if(isset($_GET[$key])) return $this->input->get($key);
		}else if($arr == "post"){
			if($_SERVER['REQUEST_METHOD']!="POST") return null;
			if(isset($_POST[$key])) return $this->input->post($key);
		}else if($arr == "session"){
			if(isset($_SESSION[$key])) return $this->session->userdata($key);
		}
		return null;
	}

	public function set($in,$val){
		list($arr,$key) = explode(".",$in);
		$arr = strtolower($arr);
		if($arr =="session"){
			$this->session->set_userdata($key,$val);
		}
	}
	
}
