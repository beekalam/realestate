<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

/** load the CI class for Modular Extensions **/
require dirname(__FILE__) . '/Base.php';

/**
 * Modular Extensions - HMVC
 *
 * Adapted from the CodeIgniter Core Classes
 * @link    http://codeigniter.com
 *
 * Description:
 * This library replaces the CodeIgniter Controller class
 * and adds features allowing use of modules and the HMVC design pattern.
 *
 * Install this file as application/third_party/MX/Controller.php
 *
 * @copyright    Copyright (c) 2015 Wiredesignz
 * @version    5.5
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
    public    $autoload            = array();
    protected $render_header       = true;
    protected $render_footer       = true;
    protected $render_section_main = true;
    protected $body_class          = '';
    protected $page_title          = "";
    private   $data                = array();
    protected $settings            = array();

    public function __construct()
    {
        $class = str_replace(CI::$APP->config->item('controller_suffix'), '', get_class($this));
//		log_message('debug', $class." MX_Controller Initialized");
        Modules::$registry[strtolower($class)] = $this;

        /* copy a loader instance and initialize */
        $this->load = clone load_class('Loader');
        $this->load->initialize($this);

        /* autoload module items */
        $this->load->_autoloader($this->autoload);
        $res            = $this->Settings_model->get_settings_data();
        $this->settings = $res;
    }


    protected function checkAuth()
    {
        if ($this->session->userdata('login_in') == false) {
            redirect('login');
        }
    }

    public function __get($class)
    {
        return CI::$APP->$class;
    }

    public function view($view, $data = array())
    {
        if ($this->session->has_userdata('msg')) {
            $msg = $this->session->userdata('msg');
            $this->session->unset_userdata('msg');
            $msg_type = "success";

            if ($msg and strpos($msg, "|") != false) {
                list($type, $message) = explode("|", $msg);
                $msg_type = $type;
                $msg      = $message;
            }
            $data['msg']      = $msg;
            $data['msg_type'] = $msg_type;
        }

        $data['footer'] = "By<a href='#'> FANACMP </a>" . "@" . date('Y');

        // $data['isadmin']	=  $this->is_admin();
        // if(file_exists(APPPATH.'views/header.php'))
        // 	pre("file_exists");
        //pre(file_get_contents(APPPATH.'views/header.php'));
        $data["isadmin"] = $_SESSION["isadmin"];
        $data["theme"] = $this->get('SESSION.theme') OR "default";
        $data["render_section_main"] = $this->render_section_main;
        $data["body_class"]          = $this->body_class;
        $data["page_title"]          = $this->page_title;
        $data["settings"]            = $this->settings;

        $data = array_merge($data, $this->data);

        if ($this->render_header)
            $this->load->view("header", $data);

        $this->load->view($view, $data);

        if ($this->render_footer) ;
        $this->load->view('footer', $data);

    }

    public function set_title($page_title)
    {
        $this->$page_title = $page_title;
    }

    public function set_msg($msg, $type)
    {
        $this->session->set_userdata("msg", $msg . "|" . $type);
    }

    public function msg($msg)
    {
        $this->session->set_userdata("msg", $msg);
    }

    public function success_msg()
    {
        $this->msg("عملیات با موفقیت انجام شدم");
    }

    public function err_msg()
    {
        $this->msg("خطا در ذخیره سازی");
    }

    public function set_settings($s)
    {
        $this->settings = $s;
    }

    public function get($in)
    {
        list($arr, $key) = explode(".", $in);
        if (empty($arr) || empty($key)) return null;
        $arr = strtolower($arr);
        if ($arr == "get") {
            if ($_SERVER['REQUEST_METHOD'] != "GET") return null;
            if (isset($_GET[$key])) return $this->input->get($key);
        } else if ($arr == "post") {
            if ($_SERVER['REQUEST_METHOD'] != "POST") return null;
            if (isset($_POST[$key])) return $this->input->post($key);
        } else if ($arr == "session") {
            if (isset($_SESSION[$key])) return $this->session->userdata($key);
        }
        return null;
    }

    public function gpost()
    {
        $et   = array();
        $args = func_get_args();
        foreach ($args as $arg) {
            if (isset($_POST[$arg])) {
                $ret[$arg] = $this->input->post($arg);
            } else {
                $ret[$arg] = null;
            }
        }
        return $ret;
    }

    public function set($in, $val)
    {
        list($arr, $key) = explode(".", $in);
        $arr = strtolower($arr);
        if ($arr == "session") {
            $this->session->set_userdata($key, $val);
        }
    }

    public function is_ajax()
    {
        return (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] == "XMLHttpRequest");
    }

    public function is_ajax_post()
    {
        return $this->is_ajax() && $this->is_post_request();
    }

    public function is_post_request()
    {
        return $_SERVER['REQUEST_METHOD'] === 'POST';
    }

    public function is_get_request()
    {
        return $_SERVER['REQUEST_METHOD'] === 'GET';
    }

    protected function set_data($k, $v)
    {
        if ($k) {
            $this->data[$k] = $v;
        }
        return $this;
    }

    protected function set_from_array($arr)
    {
        $this->data = array_merge($this->data, $arr);
        return $this;
    }

    protected function pr()
    {
        pr($this->data);
        return $this;
    }

    protected function pre()
    {
        pre($this->data);
    }

    protected function perm_list()
    {

        $perms = array(
            'add_customer'         => false,
            'view_users'           => false,
            'change_user_password' => false,
            'rent_apartment'       => false,
            'rent_store'           => false,
            'sell_apartment'       => false,
            'sell_store'           => false,
            'sell_land'            => false
        );
        return $perms;
    }

    protected function perm_descriptions()
    {

        $perms_descriptions = array(
            'add_customer'         => 'افزودن مشتری',
            'view_users'           => 'مشاهده کاربران',
            'change_user_password' => 'تغییر پسورد کاربران',
            'rent_apartment'       => 'اجاره آپارتمان',
            'rent_store'           => 'اجاره مغازه',
            'sell_apartment'       => 'فروش آپارتمان',
            'sell_store'           => 'اجاره مغازه',
            'sell_land'            => 'اجاره زمین'
        );
        return $perms_descriptions;
    }

    protected function test_function()
    {
        die("in test function");
    }

    public function is_admin()
    {
        return $_SESSION["isadmin"];
    }

    protected function addjs($js_path)
    {
        $this->data['js_files'][] = $js_path;
        return $this;
    }

    protected function addcss($css_path)
    {
        $this->data['css_files'][] = $css_path;
        return $this;
    }

    protected function addcomponent($name)
    {
        $map = [
            "inputmask" => [
                "js" => [base_url('assets/global/plugins/jquery-inputmask/jquery.inputmask.bundle.min.js')]
            ],
            "gmap"      => [
                'js' => [
                    "https://maps.googleapis.com/maps/api/js?key=AIzaSyDr0QlYmeaq-rAB-nvpcJ9fPx5ea7j2OnU",
                    base_url('assets/global/plugins/gmaps/gmaps.min.js')
                ]
            ]
        ];
        if ($map[$name] && $map[$name]["js"]) {
            foreach ($map[$name]["js"] as $p) {
                $this->addjs($p);
            }
        }
        if ($map[$name] && $map[$name]["css"]) {
            foreach ($map[$name]["css"] as $p) {
                $this->addcss($p);
            }
        }
        return $this;
    }
}
