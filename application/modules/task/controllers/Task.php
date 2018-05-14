<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Task extends MX_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model("Settings_model");
        $this->load->helper("utils");
        $this->load->helper(array('form', 'url'));
        $this->checkAuth();
    }

    public function index()
    {
      $tasks = $this->db->get('tasks')->result_array();
      pre($tasks);
    }

    public function assign_to_user()
    {
        function assign_to_user($user_name,$property_id,$client_id)
        {
            $users = $this->db->get_where('users', ['user_name' => $user_name])->result_array();
            $clients = $this->db->get_where('clients', ['id' => $property_id])->result_array();
            $properties = $this->db->get_where('properties', ['id' => $client_id])->result_array();
        }


        assign_to_user('moh',1,200);

    }
}