<?php



class RolesLib{
    protected $ci;
    private $id = 0;
    private $name;
    private $permissions;

    public function __construct(){
        $this->ci = & get_instance();
//        $this->ci->load->library('form_validation');
        $this->ci->load->database();
//        $this->ci->load->helper("lib_date");
//        $this->set_validation_rules();
    }



}