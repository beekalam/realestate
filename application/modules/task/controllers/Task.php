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

    private $errors = [];

    public function assign_to_user_($user_name, $property_id, $client_id)
    {
        $users = $this->db->get_where('users', ['user_name' => $user_name])->row(0, 'array');
        $clients = $this->db->get_where('clients', ['id' => $property_id])->row(0, 'array');
        $properties = $this->db->get_where('properties', ['id' => $client_id])->row(0, 'array');
        if (is_null($users)) throw new Exception('User does not exist');
        if (is_null($clients)) throw new Exception('Client does not exist.');
        if (is_null($properties)) throw new Exception('property does not exist');

        $assigned = $this->db->get_where('tasks',
            array('assigned_user_id' => $users['id'],
                "property_id" => $properties['id']
            )
        )->result_array();

        if (!empty($assigned)) throw new Exception('User already assigned to the task.');

//        pre($users, $clients, $properties);

        $res = $this->db->insert("tasks",
            array(
                'property_id' => $properties['id'],
                'assigned_user_id' => $users['id'],
                'status' => 'open'
            )
        );

    }

    public function task_by_id($id)
    {
        $res = $this->db->query("select tasks.* from tasks join properties on properties.id = tasks.property_id where tasks.id=" . $id)->row(0, 'array');
        return $res;
    }

    public function task_by_uid($uid)
    {
        $res = $this->db->query("select tasks.* from tasks join properties on properties.id = tasks.property_id where tasks.assigned_user_id=" . $uid)->row(0, 'array');
        return $res;
    }

    public function task_by_property_id($pid)
    {
        $res = $this->db->query("select tasks.* from tasks join properties on properties.id = tasks.property_id where tasks.property_id=" . $pid)->row(0, 'array');
        return $res;
    }

    public function assign_to_user()
    {
        try {
//            $this->assign_to_user_('moh', 175, 200);
            $this->task_by_id(1);
        } catch (Exception $e) {
            echo $e->getMessage();
        }

    }

    public function assigned_to()
    {
        $uid = 8;
        $res = $this->task_by_uid($uid);
        pre($res);
        $pid = 200;
        $res = $this->task_by_property_id($pid);
        pre($res);
    }

    public function add_task_action($task_id, $description)
    {
        $task = $this->task_by_id($task_id);
        // pre($task);
        $res = $this->db->insert('task_history',
            array(
                "task_id" => $task_id,
                "user_id" => $task['assigned_user_id'],
                'description' => $description
            )
        );
        return $res;
    }

    public function task_action()
    {
        $task_id = 1;
        $res = $this->add_task_action($task_id, "task description " . uniqid());
        pre($res);
    }

    public function task_history()
    {
        $task_id = 1;
        $res = $this->db->query("select task_history.* from task_history join users on users.id=task_history.user_id where task_history.task_id=" . $task_id)->result_array();
        pre($res);
    }


}
