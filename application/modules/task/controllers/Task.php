<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Task extends MX_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model("Settings_model");
        $this->load->helper("utils");
        $this->load->helper(array('form', 'url','html'));
        $this->load->library('table');
        $this->checkAuth();
    }

    public function index()
    {
        $tasks = $this->db->select('tasks.*')
            ->select('users.user_name,users.first_name,users.last_name')
            ->from('tasks')
            ->where('tasks.status', 'open')
            ->join('users', 'users.id=tasks.assigned_user_id')
            ->get()->result_array();
        foreach($tasks as &$task){
            $task['history'] = '<a href="'. base_url('task/task_history?id='.$task['id']) .'">'.$task['id'].'</a>';
            $task['add_new'] = anchor(base_url('task/task_action?id='.$task['id']),'add_new');
        }
//        pre($tasks);
        $template = array(
            'table_open' => '<table border="1" cellpadding="2" cellspacing="1" class="table table-responsive table-bordered table-striped">'
        );

        $this->table->set_template($template);
        $this->table->set_heading(array_keys($tasks[0]));
//        pre($tasks);
        $this->set_data("tasks", $tasks)
            ->view('tasks');
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
        $task_id = $this->get('GET.id');
//        $res = $this->add_task_action($task_id, "task description " . uniqid());
//        pre($res);
        if($this->is_get_request()) {
            $this->view('task_action',array("task_id"=>$task_id));
            return;
        }

        $res = $this->add_task_action($this->get('POST.task_id'),$this->get('POST.description'));
        echo $res;
    }

    public function task_history()
    {
        $task_id = $this->get('GET.id');
        $task_history = $this->db->query("select task_history.* from task_history join users on users.id=task_history.user_id where task_history.task_id=" . $task_id)->result_array();
        $task_history = $this->db->select('task_history.*')
            ->select('users.first_name,users.last_name')
            ->from('task_history')
            ->join('users','users.id=task_history.user_id')
            ->where('task_history.task_id',$task_id)
            ->order_by('updated_at','desc')
            ->get()->result_array();
//        pre($task_history);
        foreach($task_history as &$task){
//            $task['history'] = '<a href="'. base_url('task/task_history?id='.$task['id']) .'">'.$task['id'].'</a>';
        }
//        pre($tasks);
        $template = array(
            'table_open' => '<table border="1" cellpadding="2" cellspacing="1" class="table table-responsive table-bordered table-striped">'
        );

        $this->table->set_template($template);
        $this->table->set_heading(array_keys($task_history[0]));
        $this->set_data("task_history",$task_history)->view("task_history");
    }


}
