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
        $this->load->library('form_validation');
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

    public function test()
    {
        $html_page = function ($content) {
            return "<html><head></head><body>$content</body></html>";
        };

        $this->load->library('calendar');
        echo $html_page($this->calendar->generate());
    }

    public function test_function()
    {
        $q   = "select properties.* from properties inner join on properties.property_feature_id on property_features.id";
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
            $res              = $this->clientlib->find_by_id($id);
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
        $this->propertylib->set_validation_rules($this->form_validation);
        $property = $this->propertylib;
        $id       = $this->input->get_post("id");
        if (is_null($id)) throw new Exception("Property id is not set");

        //<editor-fold desc="handle get request">
        if ($this->is_get_request()) {

            $res              = $this->propertylib->find_by_id($id, true);
            $res["post_back"] = base_url("admin/edit_property?id=" . $id);
            $res["pt"]        = $this->propertylib->get_property_type();
            $res["dt"]        = $this->propertylib->get_deal_type();
            $res["id"]        = $id;
//            pre($res);
            $this->view('add_property', $res);
            return;
        }
        //</editor-fold>

        //<editor-fold desc="handle post request">

//        $data = $this->propertylib->find_by_id($id, true);
//        pre($this->propertylib);
        $property->find_by_id($id, true);
        if (!$property->has_deal_type() || $this->form_validation->run() == false) {
            $this->form_validation->run();
            if (!$property->has_deal_type()) {
                $data["show_rent"] = $property->for_rent == 'yes';
                $data["show_rahn"] = $property->for_rahn == 'yes';
                $this->set_msg("error", "نوع معامله مشخص نشده است.");
            }
            $data["pt"]        = $property->get_property_type();
            $data["dt"]        = $property->get_deal_type();
            $data["post_back"] = base_url("admin/edit_property?id=" . $id);

            $this->view('add_property', $data);
            return;
        } else {
            $property->init_from_post();
            if ($property->update()) {
                $this->success_msg();
            } else {
                $this->err_msg();
            }
            redirect("admin/index");
        }
        //</editor-fold>
    }

    public function add_property()
    {
        $this->addcomponent("inputmask");
        $property_type = $_REQUEST['pt'];
        $deal_type     = $_REQUEST['dt'];

        $this->load->library('PropertyLib', array("property_type" => $property_type, "deal_type" => $deal_type));
        $this->propertylib->set_validation_rules($this->form_validation);
        $property = $this->propertylib;

        //<editor-fold desc="handle get request">
        if ($this->is_get_request()) {
            $this->view("add_property", array(
                    "pt"            => $property_type,
                    "dt"            => $deal_type,
                    "property_type" => $property_type,
                    "post_back"     => base_url("admin/add_property?pt=$property_type&dt=$deal_type")
                )
            );
            return;
        }
        //</editor-fold>

        //<editor-fold desc="handle post request">
        if (!$property->has_deal_type() || $this->form_validation->run() == false) {
            $this->form_validation->run();
            if (!$property->has_deal_type()) {
                $this->set_msg("error", "نوع معامله مشخص نشده است.");
            }
            $data = array(
                "pt"            => $property_type,
                "dt"            => $deal_type,
                "property_type" => $property_type,
                "post_back"     => base_url("admin/add_property?pt=$property_type&dt=$deal_type")
            );

            $this->view('add_property', $data);
            return;
        } else {
//                    pre($_POST);
            $property->init_from_post();
//            pre($property);
            if ($property->save()) {
                $this->success_msg();
                redirect("admin/index");
            } else {
                die("error");
            }
        }
        //</editor-fold>
    }

    public function set_property_location()
    {
        include APPPATH . "modules/admin/libraries/Fa_Calendar.php";


//        $this->addcomponent("gmap");
//        $this->view('set_propety_location',array());
//        $this->load->view('set_propety_location',array());
    }

    public function owner_name_check($str)
    {
        $this->form_validation->set_message('owner_name_check', 'owner_name');
        $this->form_validation->set_message('owner_name', 'xxxx');
        return false;
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

    public function property_position()
    {
        $this->addcomponent("gmap");
        $property_id = $this->get("GET.id");
        $this->load->model('Properties_model');
        $property = $this->Properties_model->find_by_id($property_id);
        if (is_null($property)) throw new Exception("Wrong property id.");
//        $this->load->view('property_position');
//        return;
        $this->view('property_position', compact("property_id", "property"));
    }

    public function update_property_pos()
    {
        /** @var $property_id string
         * @var $lat string
         * @var $lng string
         */
        extract($this->gpost('property_id', 'lat', 'lng'));
        $this->load->model('Properties_model');
        $property = $this->Properties_model->find_by_id($property_id);
        if (is_null($property)) throw new Exception('wrong proeprty id or not set');
        $this->Properties_model->set_property_position($property_id, $lat, $lng);
        redirect("admin/property_position?id=" . $property_id);
    }

    public function delete_property_file()
    {
        $this->load->model('Properties_model');
        $id          = $this->get("POST.id");
        $property_id = $this->get("POST.property_id");
//        pr("id:" . $id);
//        pr("pid:" . $property_id);
        if ($id && $property_id) {
            $file_path = path_join(PROPERTY_FILES_REAL_PATH, $this->Properties_model->property_file($id)["file_name"]);
            $res       = unlink($file_path);
            $res       = $this->Properties_model->delete_file($id);
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

        $config['upload_path']   = './' . PROPERTY_FILES_PATH;
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']      = 2000;
        $config['max_width']     = 1024;
        $config['max_height']    = 768;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('property_file')) {
            $this->set_msg("error", $this->upload->display_errors());
            redirect('admin/property_files?id=' . $property_id);
        } else {
            $this->Properties_model->add_property_file($property_id, $this->upload->data()["file_name"]);
            $this->success_msg();
            redirect('admin/property_files?id=' . $property_id);
        }

    }

    public function properties()
    {
        $start  = $this->input->get("start");
        $length = $this->input->get("length");

        if (!$start) $start = 0;
        if (!$length) $length = 10;

        $total = count($this->db->get("properties")->result());
        $data  = $this->db->get("properties", $length, $start)->result();

        ejson(array("data"            => $data,
                    "recordsTotal"    => $total,
                    "draw"            => $this->input->get("draw"),
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
        $start  = $this->input->get("start");
        $length = $this->input->get("length");
        if (!$start) $start = 0;
        if (!$length) $length = 10;
        $total = count($this->db->get("clients")->result());
        $data  = $this->db->get("clients", $length, $start)->result();
//        pc("start:$start, length:$length, total:$total,dataLength:" . count($data));
        ejson(array("data"            => $data,
                    "recordsTotal"    => $total,
                    "draw"            => $this->input->get("draw"),
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

    public function map()
    {
        $this->addcomponent("gmap");
        $res = $this->db->select("id,lat,lng")
            ->from('properties')
            ->where('(lat IS NOT NULL AND lng IS NOT NULL)')
            ->get()
            ->result_array();

        $this->view("map", compact('res'));
    }

    public function property_summary()
    {
        $this->load->library('table');
        $this->load->model('Properties_model');
        $id       = $this->get('GET.id');
        $table    = $this->table;
        $p        = $this->Properties_model->find_with_features($id);
        $template = array(
            'table_open' => '<table border="1" cellpadding="2" cellspacing="1" class="table table-responsive table-bordered table-striped table-hover">'
        );
//        $template = array(
//            'table_open' => '<table border="1" cellpadding="2" cellspacing="1" class="table table-responsive table-striped table-hover">'
//        );

        $table->set_heading(array('', ''));
        $table->add_row("آدرس", $p["zone"] . $p["street"] . " " . $p["alley"]);
        $table->add_row("نوع ملک", $this->property_type_persian($p["property_type"]));
        if ($p["for_rent"] == 'yes') {
            $table->add_row("مبلغ اجاره", $this->span_nf($p["rent_amount"]));
        }

        if ($p["for_rahn"] == 'yes') {
            $table->add_row("مبلغ رهن", $this->span_nf($p["rahn_amount"]));
        }

        if ($p['for_sale'] == 'yes') {
            $table->add_row("مبلغ فروش", $this->span_nf($p["price_total"]));
            $table->add_row("مبلغ به متر مربع", $this->span_nf($p["price_per_square_meter"]));
        }

        $table->add_row('مالک', $p['owner_name'] . " " . $p["owner_family"]);
        if ($p['anbari'] == 'yes') {
            $str = 'دارد ';
            $str .= 'تعداد ' . $p['anbari_count'];
            $str .= ' مساحت ' . $p['anbari_area'];
            $table->add_row('انباری', $str);
        }

        if ($p['parking'] == 'yes') {
            $str = 'دارد ';
            $str .= 'تعداد ' . $p['parking_count'];
            $str .= ' مساحت ' . $p['parking_area'];
            $table->add_row('پارکینگ', $str);
        }
        if (!empty($p['age'])) {
            $table->add_row('سن بنا', $p['age']);
        }

        if ($p['property_type'] == 'store') {
            if ($p['parvane'] == 'yes')
                $table->add_row('پروانه', 'دارد');

            $str = '';
            foreach (array("electricity" => "برق",
                           "water"       => "آب",
                           "gas"         => "گاز",
                           "telephone"   => "تلفن",
                           "decoration"  => "دکوراسیون"
                     ) as $k => $v) {
                if ($p[$k] == '1') {
                    $str .= "$v ";
                }
            }
            $table->add_row('امکانات', $str);
        }

        if ($p['property_type'] == 'apartment') {
            $str = '';
            foreach (array("elevator"     => "آسانسور",
                           "package"      => "پکیج",
                           "iphone"       => "آیفون",
                           "shomine"      => "شومینه",
                           "parde"        => "پرده",
                           "noor_pardazi" => "نور پردازی",
                           "komod_divari" => "کمد دیواری",
                           "sona"         => "سونا",
                           "jakozi"       => "جکوزی") as $k => $v) {
                if ($p[$k] == '1') {
                    $str .= "$v ";
                }
            }
            $table->add_row('امکانات', $str);
        }

//        foreach ($property as $k=>$v) {
//            $table->add_row($k,$v);
//        }
        $table->set_template($template);
        echo $table->generate();
//        echo $this->load->view('property_summary',compact("property"));
    }

    public function property_type_persian($val)
    {
        switch ($val) {
            case "apartment":
                return "آپارتمان";
            case"store":
                return "مغازه";
            case "land":
                return "زمین یا خانه کلنگی";
            default:
                return $val;
        }
    }

    private function span_nf($item)
    {
        return "<span class='persian-number'>" . number_format($item) . "</span>";
    }
}