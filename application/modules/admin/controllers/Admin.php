<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MX_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model("Settings_model");
        $this->load->helper("utils");
        $this->load->helper(array('form', 'url'));
//		pre($_SESSION);
        $this->checkAuth();
    }

    public function index()
    {
        $task_stats = $this->db->select("count(tasks.id) as num_open_tasks")
            ->select("assigned_user_id as user_id")
            ->select("concat(users.first_name,' ',users.last_name) as name")
            ->from('tasks')
            ->join('users', 'users.id = tasks.assigned_user_id')
            ->where('status', 'open')
            ->group_by('assigned_user_id')
//            ->get_compiled_select();
            ->get()->result_array();
//    pre($task_stats);
//	    pc("in index");
        $this->load->library('PropertyLib');
        $property_stats = $this->propertylib->property_stats();

        $this->set_data("active_menu", "m-dashboard")
            ->set_from_array($property_stats)
            ->set_data("task_stats", $task_stats)
            ->view('index', $property_stats);

//        $this->view("index",$data);
    }

    public function test_function()
    {
        $q = "select properties.* from properties inner join on properties.property_feature_id on property_features.id";
        $res = $this->db->query($q)->result_array();
        pre($res);
        die("...............");
    }

    public function add_client()
    {
        $this->addcomponent("inputmask")->set_data("active_menu", "m-add-client");
        $this->load->library('ClientLib');
        $data["post_back"] = base_url("admin/add_client");
        if ($this->is_get_request()) {
            $this->view("add_client", $data);
            return;
        }

        //post request validation
        if ($this->clientlib->is_valid() == false) {
            $this->view('add_client', $data);
            return;
        } else {
            $this->clientlib->init_from_post();
            if ($this->clientlib->save()) {
                $this->success_msg();
                redirect("admin/index");
            } else {
                $this->err_msg();
            }
        }
    }

    public function edit_client()
    {
        $this->addcomponent("inputmask")
            ->set_data("active_menu", "m-add-client")
            ->set_data("form_title", "تغییر مشخصات");
        $this->load->library('ClientLib');
        $id = $this->get("GET.id");
        if ($this->is_get_request()) {
            $res = $this->clientlib->find_by_id($id);
            $res["post_back"] = base_url("admin/edit_client?id=$id");
            $this->view("add_client", $res);
            return;
        }

        if ($this->clientlib->is_valid() == false) {
            $this->view('add_client', array("post_back" => base_url("admin/edit_client")));
            return;
        } else {
            $this->clientlib->init_from_post();
            if ($this->clientlib->update()) {
                $this->success_msg();
            } else {
                $this->err_msg();
            }
            redirect("admin/index");
        }
    }

    public function edit_property()
    {
        $this->addcomponent('inputmask');
        $this->load->library('PropertyLib', array("property_type" => '', "deal_type" => ''));
        $id = $this->get("GET.id");
        if ($this->is_get_request()) {
            $res = $this->propertylib->find_by_id($id);
//            pre($res);
            $res["post_back"] = base_url("admin/edit_property");
            $res["pt"] = $this->propertylib->get_property_type();
            $res["dt"] = $this->propertylib->get_deal_type();
            $res["id"] = $id;
            $this->view('add_property', $res);
            return;
        }

        $this->propertylib->init_from_post();
        if ($this->propertylib->is_valid() == false) {
            $data["pt"] = $this->propertylib->get_property_type();
            $data["dt"] = $this->propertylib->get_deal_type();
            $data["post_back"] = base_url("admin/edit_property");
            $this->view('add_property', $data);
            return;
        } else {
            if ($this->propertylib->update()) {
                $this->success_msg();
            } else {
                $this->err_msg();
            }
            redirect("admin/index");
        }
    }

    public function add_property()
    {
        $this->addcomponent("inputmask");
        $property_type = $_REQUEST['pt'];
        $deal_type = $_REQUEST['dt'];
//        pre($_REQUEST);
        $this->load->library('PropertyLib', array("property_type" => $property_type, "deal_type" => $deal_type));


        if ($this->is_get_request()) {
            $this->view("add_property", array("pt" => $property_type, "dt" => $deal_type,
                "property_type" => $property_type,
                "post_back" => base_url("admin/add_property?pt=$property_type&dt=$deal_type")));
            return;
        }

        //post request validation
        if ($this->propertylib->is_valid() == false) {
            $data = array(
                "pt" => $property_type,
                "dt" => $deal_type,
                "property_type" => $property_type,
                "post_back" => base_url("admin/add_property?pt=$property_type&dt=$deal_type")
            );
            if (!empty($this->propertylib->validation_errors)) {
                $data['msg'] = join('<br>', $this->propertylib->validation_errors);
            }
            $this->view('add_property', $data);
            return;
        } else {
//                    pre($_POST);
            $this->propertylib->init_from_post();
//            pre($this->propertylib);
            if ($this->propertylib->save()) {
                $this->success_msg();
                redirect("admin/index");
            } else {
                die("error");
            }
        }
    }

    public function property_files()
    {
        $id = $this->get("GET.id");
        $this->load->model('Properties_model');
        $files = array_column($this->Properties_model->property_files($id), "file_name", "id");
        array_walk($files, function (&$item, $key, $base) {
            $item = $base . "/" . $item;
        }, base_url(PROPERTY_FILES_PATH));

        $this->set_data("files", $files)
            ->set_data("property_id", $id)
            ->view('property_files');
    }

    public function delete_property_file()
    {
        $id = $this->get("POST.id");
        $this->load->model('Properties_model');
        $property_id = $this->get("POST.property_id");
//        pr("id:" . $id);
//        pr("pid:" . $property_id);
        if ($id && $property_id) {
            $file_path = path_join(PROPERTY_FILES_REAL_PATH, $this->Properties_model->property_file($id)["file_name"]);
            $res = unlink($file_path);
            $res = $this->Properties_model->delete_file($id);
        }
        redirect('admin/property_files?id=' . $property_id);
    }

    public function upload_property_file()
    {
        $id = $this->get("POST.id");
        $this->load->model('Properties_model');
        $this->load->helper('file');
        $property_id = $this->get("POST.property_id");
        if (!$property_id) throw new Exception("Property id is not set.");

        $config['upload_path'] = './' . PROPERTY_FILES_PATH;
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 2000;
        $config['max_width'] = 1024;
        $config['max_height'] = 768;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('property_file')) {
            $this->set_msg("error", $this->upload->display_errors());
            redirect('admin/property_files?id=' . $property_id);
        } else {
            $this->Properties_model->add_property_file($property_id,$this->upload->data()["file_name"]);
            $this->success_msg();
            redirect('admin/property_files?id=' . $property_id);
        }

    }


    public function properties()
    {
        $start = $this->input->get("start");
        $length = $this->input->get("length");

        if (!$start) $start = 0;
        if (!$length) $length = 10;

        $total = count($this->db->get("properties")->result());
        $data = $this->db->get("properties", $length, $start)->result();

        ejson(array("data" => $data,
            "recordsTotal" => $total,
            "draw" => $this->input->get("draw"),
            "recordsFiltered" => $total));
    }

    public function property_list()
    {
        $this->set_data("active_menu", "m-property-list")
            ->view("properties");
    }

    public function clients()
    {
        $this->view("clients", ["active_menu" => "m-clients"]);
    }

    public function clients_list()
    {
        $start = $this->input->get("start");
        $length = $this->input->get("length");
        if (!$start) $start = 0;
        if (!$length) $length = 10;
        $total = count($this->db->get("clients")->result());
        $data = $this->db->get("clients", $length, $start)->result();
//        pc("start:$start, length:$length, total:$total,dataLength:" . count($data));
        ejson(array("data" => $data,
            "recordsTotal" => $total,
            "draw" => $this->input->get("draw"),
            "recordsFiltered" => $total));
    }

    public function find_client_modal()
    {
        $this->load->view("find_client_modal");
    }

    public function find_client()
    {
        $this->load->library('ClientLib');
        $res = $this->clientlib->search(["limit" => 10]);
        echo json_encode($res);
    }

}
