<?php

class PropertyLib
{
    protected $ci;
    private   $id              = 0;
    private   $property_name;
    private   $property_description;
    private   $price_min;
    private   $price_max;
    private   $room_count;
    private   $parking         = 'no';
    private   $owner_name;
    private   $owner_family;
    private   $owner_tel;
    private   $owner_mobile;
    private   $zone;
    private   $street;
    private   $alley;
    private   $parking_area;
    private   $parking_count;
    private   $anbari          = 'no';
    private   $anbari_count;
    private   $property_type;
    private   $date_on_market;   //زمان تحویل
    private   $age;  //سن بنا
    private   $num_stories;  //تعداد طبقات
    private   $unit_per_story;   //تعداد واحد در هر طبقه
    private   $anbari_area;
    private   $rent_amount;
    private   $rahn_amount;   //مبلغ رهن
    private   $rent_preconditions;
    private   $rahn_preconditions;
    private   $pardakht_method = 'test';
    private   $price_per_square_meter;
    private   $price_total;
    private   $sanad_type;
    private   $agent_name;
    private   $zabete;
    private   $karbari;
    private   $aghab_neshini;   //عقب نشینی
    private   $parvane;
    private   $parvane_description;
    private   $deal_type;
    private   $area;
    private   $renovation_age;   //سن بازسازی
    private   $sell_conditions; //شرایط فروش
    private   $renovated; //بازی سازی شده
    private   $user_id;
    public   $for_rent;
    public   $for_rahn;
    public   $for_sale;
    //property features
    private $elevator;
    private $package;
    private $iphone;
    private $shomine;
    private $parde;
    private $noor_pardazi;
    private $komod_divari;
    private $sona;
    private $jakozi;
    private $fk_property_feature_id = 0;
    private $dbg_str                = "";
    //store property features
    private $electricity;
    private $water;
    private $gas;
    private $telephone;
    private $decoration;
    private $metraj_balkon; //متراژ بالکن
    private $tedad_dahane;  // تعداد دهنه
    private $arze_dahane;  // عرض دهنه
    private $ertefa_tejari; // ارتفاع تجاری
    private $telephone_line_count;
    private $garmayesh;
    private $sarmayesh;
    private $divar;
    private $floor;
    //apartment features
    private $khab;
    private $takhlie;
    private $payane_kar;
    private $tahvil_date;
    private $source;
    private $kabinet;
    //land  and old house features
    private $land_type;
    private $house_entry;

    private $property_images = array();

    public $validation_errors = array();

    public function __construct($params = array())
    {
        $this->ci = &get_instance();
        $this->ci->load->database();
        $this->ci->load->helper("lib_date");
        $this->ci->load->model("event/Events_model");


        $this->property_type = $params["property_type"];
        $this->deal_type     = $params["deal_type"];
//        $this->set_validation_rules();
    }

    private function sanitize_inputs()
    {
        $this->rahn_amount            = str_replace(",", "", $this->rahn_amount);
        $this->rahn_amount            = en_num($this->rahn_amount);
        $this->rent_amount            = str_replace(",", "", $this->rent_amount);
        $this->rent_amount            = en_num($this->rent_amount);
        $this->price_per_square_meter = str_replace(",", "", $this->price_per_square_meter);
        $this->price_per_square_meter = en_num($this->price_per_square_meter);
        $this->price_total            = str_replace(",", "", $this->price_total);
        $this->price_total            = en_num($this->price_total);
    }

    public function init_from_post()
    {
        $p                          = &$this->ci->input;
        $this->property_name        = $p->post('property_name');
        $this->property_description = $p->post('property_description');
        $this->price_min            = $p->post('price_min');
        $this->price_max            = $p->post('price_max');
        $this->room_count           = $p->post('room_count');
        $this->parking              = $p->post('parking');
        $this->owner_name           = $p->post('owner_name');
        $this->owner_family         = $p->post('owner_family');
        $this->owner_tel            = $p->post('owner_tel');
        $this->owner_mobile         = $p->post('owner_mobile');
        $this->zone                 = $p->post('zone');
        $this->street               = $p->post('street');
        $this->alley                = $p->post('alley');
        $this->parking_area         = $p->post('parking_area');
        $this->parking_count        = $p->post('parking_count');
        $this->anbari               = $p->post('anbari');
        $this->anbari_count         = $p->post('anbari_count');
        $this->property_type        = $p->post('property_type');
        $this->date_on_market       = $p->post("date_on_market");
        $this->age                  = $p->post('age');
        $this->num_stories          = $p->post('num_stories');
        $this->unit_per_story       = $p->post('unit_per_story');
        $this->anbari_area          = $p->post('anbari_area');
        $this->rent_amount          = $p->post('rent_amount');
        $this->rent_preconditions   = $p->post('rent_preconditions');
        $this->rahn_amount          = $p->post('rahn_amount');
        $this->rahn_preconditions   = $p->post('rahn_preconditions');
        $this->pardakht_method      = $p->post('pardakht_method') ?? '';
        $this->price_total          = $p->post('price_total');
        $this->sanad_type           = $p->post('sanad_type');
        $this->zabete               = $p->post('zabete');
        $this->karbari              = $p->post('karbari');
        $this->aghab_neshini        = $p->post('aghab_neshini');
        $this->parvane              = $p->post('parvane');
        $this->parvane_description  = $p->post('parvane_description');
        $this->area                 = $p->post('area');
        $this->renovation_age       = $p->post('renovation_age');
        $this->sell_conditions      = $p->post('sell_conditions');
        $this->renovated            = $p->post('renovated');
        $this->for_rahn             = isset($_POST['for_rahn']) ? $p->post('for_rahn') : 'no';
        $this->for_rent             = isset($_POST['for_rent']) ? $p->post('for_rent') : 'no';
        //property features
//        pr("before pre");
//        prpostifpost();
//        preifpost($p->post('elevator')=='on');
        $this->elevator     = $p->post('elevator') == 'on' ? '1' : '0';
        $this->package      = $p->post('package') == 'on' ? '1' : '0';
        $this->iphone       = $p->post('iphone') == 'on' ? '1' : '0';
        $this->shomine      = $p->post('shomine') == 'on' ? '1' : '0';
        $this->parde        = $p->post('parde') == 'on' ? '1' : '0';
        $this->noor_pardazi = $p->post('noor_pardazi') == 'on' ? '1' : '0';
        $this->komod_divari = $p->post('komod_divari') == 'on' ? '1' : '0';
        $this->sona         = $p->post('sona') == 'on' ? '1' : '0';
        $this->jakozi       = $p->post('jakozi') == 'on' ? '1' : '0';

        // store property features
        $this->electricity   = $p->post('electricity') == 'on' ? '1' : '0';
        $this->water         = $p->post('water') == 'on' ? '1' : '0';
        $this->gas           = $p->post('gas') == 'on' ? '1' : '0';
        $this->telephone     = $p->post('telephone') == 'on' ? '1' : '0';
        $this->decoration    = $p->post('decoration') == 'on' ? '1' : '0';
        $this->metraj_balkon = $p->post("metraj_balkon");
        $this->tedad_dahane  = $p->post("tedad_dahane");
        $this->arze_dahane   = $p->post("arze_dahane");
        $this->ertefa_tejari = $p->post("ertefa_tejari");
//
        $this->telephone_line_count = $p->post('telephone_line_count');
        $this->garmayesh            = $p->post('garmayesh');
        $this->sarmayesh            = $p->post('sarmayesh');
        $this->divar                = $p->post('divar');
        $this->floor                = $p->post('floor');

        //apartment features
        $this->khab        = $p->post('khab');
        $this->takhlie     = $p->post('takhlie');
        $this->payane_kar  = $p->post('payane_kar');
        $this->tahvil_date = $p->post('tahvil_date');
        $this->source      = $p->post('source');
        $this->kabinet     = $p->post('kabinet');

        //land and old house features
        $this->land_type   = $p->post('land_type');
        $this->house_entry = $p->post('house_entry');

        $this->sanitize_inputs();
        if (isset($_POST["id"])) {
            $this->id                     = $p->post("id");
            $rec                          = $this->find_by_id($this->id, false);
            $this->fk_property_feature_id = $rec["fk_property_feature_id"];
//            die($this->fk_property_feature_id);
        }

        if (isset($_POST["deal_type"]))
            $this->deal_type = $p->post("deal_type");
        if (isset($_POST["property_type"]))
            $this->property_type = $p->post("property_type");
//        pre($_POST);
//        pc("in init from post");
    }

    public function set_validation_rules(&$fv)
    {
        //$fv  = $this->ci->form_validation;
        $err = array("required" => "مقداری برای %s وارد نشده است");
        $fv->set_rules('owner_name', 'نام', 'required', $err);
//        $fv->set_rules('owner_name', 'نام', 'required', $err);
//        $fv->set_rules('owner_name', 'xxxxxx','dealtype_selected');
        $fv->set_rules('owner_family', 'نام خانوادگی', 'required', $err);
        $fv->set_rules('owner_tel', 'شماره تلفن', 'required', $err);
        $fv->set_rules('owner_mobile', 'موبایل', 'required', $err);
    }

    public function is_valid()
    {
//        if ($this->property_type == 'apartment') {
//
//        } else if ($this->property_type == 'land') {
//
//        } else if ($this->property_type == 'store') {
//
//        }
//        return $this->ci->form_validation->run();
//        $fvr = $this->ci->form_validation->run();
//        $has_deal_type = isset($_POST['for_rahn']) && $_POST['for_rahn'] == 'yes';
//        $has_deal_type = $has_deal_type || (isset($_POST['for_rent']) && $_POST['for_rent'] == 'yes');
//        $has_deal_type = $has_deal_type || (isset($_POST['for_sale']) && $_POST['for_sale'] == 'yes');
////        pre($has_deal_type);
//        if ($has_deal_type) {
//        } else {
//            $this->validation_errors[] = "نوع معامله مشخص نشده است.";
//            return false;
////            $this->ci->form_validation->set_message('', 'نوع معامله مشخص نشده است.(رهن اجاره یا فروش)');
//        }
//        pre(".............");
//        return $fvr;
    }

    public function property_types()
    {
        $res = array(
            "apartment" => "آپارتمان",
            "land"      => "زمین",
            "store"     => "مغازه"
        );
        return $res;
    }

    public function build_insert_array()
    {
        if (is_null($this->parking) || empty($this->parking)) {
            $this->parking = "no";
        }
        if (is_null($this->anbari) || empty($this->anbari)) {
            $this->anbari = "no";
        }

        $ret  = array(
            "property_name"        => "",
            "property_description" => "",
            "owner_name"           => $this->owner_name,
            "owner_family"         => $this->owner_family,
            "owner_tel"            => $this->owner_tel,
            "owner_mobile"         => $this->owner_mobile,
            "zone"                 => $this->zone,
            "street"               => $this->street,
            "alley"                => $this->alley,
            "parking"              => $this->parking,
            "parking_count"        => $this->parking_count,
            "anbari"               => $this->anbari,
            "room_count"           => $this->room_count,
            "anbari_count"         => $this->anbari_count,
            "property_type"        => $this->property_type,
            "for_rent"             => $this->for_rent,
            "for_rahn"             => $this->for_rahn
        );
        $keys = array();
        if ($this->property_type == 'apartment') {
            $keys = array_merge($keys,
                array("parking_area", "area", "anbari_area",
                    "room_count", "age", "num_stories", "unit_per_story",
                    'pardakht_method', 'price_per_square_meter', 'price_total',
                    'sanad_type'));
        }


        if ($this->deal_type == 'rahn' || $this->for_rahn == 'yes') {
            $keys = array_merge($keys, array("rahn_preconditions", "rahn_amount"));
        }
        if ($this->deal_type == 'rent' || $this->for_rent == 'yes') {
            $keys = array_merge($keys, array("rent_amount", "rent_preconditions"));
        }

        foreach ($keys as $k) {
            $ret[$k] = $this->{$k};
        }
//        pr("build insert array");
//        pr($ret);
        return $ret;
    }

    public function build_features_array()
    {
        $ret = array(
            "elevator"     => $this->elevator,
            "package"      => $this->package,
            "iphone"       => $this->iphone,
            "shomine"      => $this->shomine,
            "parde"        => $this->parde,
            "noor_pardazi" => $this->noor_pardazi,
            "komod_divari" => $this->komod_divari,
            "sona"         => $this->sona,
            "jakozi"       => $this->jakozi
        );
        if ($this->get_property_type() == "apartment") {
            $tmp = array("khab"        => $this->khab,
                         "takhlie"     => $this->takhlie,
                         "payane_kar"  => $this->payane_kar,
                         "tahvil_date" => $this->tahvil_date,
                         "source"      => $this->source,
                         "kabinet"     => $this->kabinet);
            $ret = array_merge($ret, $tmp);
        }
        if ($this->get_property_type() == "land") {
            $tmp = array("land_type"   => $this->land_type,
                         "house_entry" => $this->house_entry);
            $ret = array_merge($ret, $tmp);
        }
        if ($this->property_type == "store") {
            $tmp = array(
                "electricity"          => $this->electricity,
                "water"                => $this->water,
                "gas"                  => $this->gas,
                "telephone"            => $this->telephone,
                "decoration"           => $this->decoration,
                "metraj_balkon"        => $this->metraj_balkon,
                "tedad_dahane"         => $this->tedad_dahane,
                "arze_dahane"          => $this->arze_dahane,
                "ertefa_tejari"        => $this->ertefa_tejari,
                "telephone_line_count" => $this->telephone_line_count,
                "garmayesh"            => $this->garmayesh,
                "sarmayesh"            => $this->sarmayesh,
                "divar"                => $this->divar,
                "floor"                => $this->floor);
            $ret = array_merge($ret, $tmp);
        }
//        if($this->fk_property_feature_id!=0)
//            $ret["property_feature_id"] = $this->fk_property_feature_id;
//        pr($this->get_property_type());
//        pre($ret);
        return $ret;
    }

    public function save()
    {
        $db              = $this->ci->db;
        $data            = $this->build_insert_array();
        $data["user_id"] = $_SESSION["userid"];
//        pre($this->build_features_array());

        $db->trans_start();
        //insert property
        $res = $db->insert("properties", $data);
        if ($this->get_property_type() == "apartment" ||
            $this->get_property_type() == "store" ||
            $this->get_property_type() == "land") {
            if (!$res) $this->dbg("db error:", $db->error());

            // insert proprty features
            $property_id  = $db->insert_id();
            $res_features = $db->insert('property_features', $this->build_features_array());
            if ($res_features) $this->dbg("db error:", $db->error());

            //update
            $property_feature_id = $db->insert_id();
            $db->set('fk_property_feature_id', $property_feature_id);
            $db->where('id', $property_id);
            $db->update('properties');
        }
        $db->trans_complete();

        $this->ci->Events_model->set('event_table', 'properties')->add_event();
        return $db->trans_status();
    }

    public function init_from_db($rec)
    {
        $this->property_name          = $rec['property_name'];
        $this->property_description   = $rec['property_description'];
        $this->price_min              = $rec['price_min'];
        $this->price_max              = $rec['price_max'];
        $this->room_count             = $rec['room_count'];
        $this->parking                = $rec['parking'];
        $this->owner_name             = $rec['owner_name'];
        $this->owner_family           = $rec['owner_family'];
        $this->owner_tel              = $rec['owner_tel'];
        $this->owner_mobile           = $rec['owner_mobile'];
        $this->zone                   = $rec['zone'];
        $this->street                 = $rec['street'];
        $this->alley                  = $rec['alley'];
        $this->parking_area           = $rec['parking_area'];
        $this->parking_count          = $rec['parking_count'];
        $this->anbari                 = $rec['anbari'];
        $this->anbari_count           = $rec['anbari_count'];
        $this->property_type          = $rec['property_type'];
        $this->date_on_market         = $rec['date_on_market'];
        $this->age                    = $rec['age'];
        $this->num_stories            = $rec['num_stories'];
        $this->unit_per_story         = $rec['unit_per_story'];
        $this->anbari_area            = $rec['anbari_area'];
        $this->rent_amount            = $rec['rent_amount'];
        $this->rent_preconditions     = $rec['rent_preconditions'];
        $this->rahn_amount            = $rec['rahn_amount'];
        $this->rahn_preconditions     = $rec['rahn_preconditions'];
        $this->pardakht_method        = $rec['pardakht_method'];
        $this->price_per_square_meter = $rec['price_per_square_meter'];
        $this->price_total            = $rec['price_total'];
        $this->sanad_type             = $rec['sanad_type'];
        $this->zabete                 = $rec['zabete'];
        $this->karbari                = $rec['karbari'];
        $this->aghab_neshini          = $rec['aghab_neshini'];
        $this->parvane                = $rec['parvane'];
        $this->parvane_description    = $rec['parvane_description'];
        $this->area                   = $rec['area'];
        $this->renovation_age         = $rec['renovation_age'];
        $this->sell_conditions        = $rec['sell_conditions'];
        $this->renovated              = $rec['renovated'];
        $this->property_type          = $rec["property_type"];
        $this->deal_type              = $rec["deal_type"];
        $this->for_rahn               = $rec['for_rahn'];
        $this->for_rent               = $rec['for_rent'];
        //property features
        $this->elevator     = $rec['elevator'] ?? 0;
        $this->package      = $rec['package'] ?? 0;
        $this->iphone       = $rec['iphone'] ?? 0;
        $this->shomine      = $rec['shomine'] ?? 0;
        $this->parde        = $rec['parde'] ?? 0;
        $this->noor_pardazi = $rec['noor_pardazi'] ?? 0;
        $this->komod_divari = $rec['komod_divari'] ?? 0;
        $this->sona         = $rec['sona'] ?? 0;
        $this->jakozi       = $rec['jakozi'] ?? 0;
        $this->electricity  = $rec['electricity'] ?? 0;
        $this->water        = $rec['water'] ?? 0;
        $this->gas          = $rec['gas'] ?? 0;
        $this->telephone    = $rec['telephone'] ?? 0;
        $this->decoration   = $rec['decoration'] ?? 0;
        $this->khab         = $rec["khab"];
        $this->takhlie      = $rec['takhlie'];
        $this->payane_kar   = $rec['payane_kar'];
        $this->tahvil_date  = $rec['tahvil_date'];
        $this->source       = $rec["source"];
        $this->kabinet      = $rec['kabinet'];
        // store features
        $this->metraj_balkon        = $rec["metraj_balkon"] ?? 0;
        $this->tedad_dahane         = $rec["tedad_dahane"] ?? 0;
        $this->arze_dahane          = $rec["arze_dahane"] ?? 0;
        $this->ertefa_tejari        = $rec["ertefa_tejari"] ?? 0;
        $this->telephone_line_count = $rec['telephone_line_count'] ?? 0;
        $this->garmayesh            = $rec['garmayesh'];
        $this->sarmayesh            = $rec['sarmayesh'];
        $this->divar                = $rec['divar'];
        //land features
        $this->land_type   = $rec['land_type'];
        $this->house_entry = $rec['house_entry'];

        $this->fk_property_feature_id = $rec['fk_property_feature_id'] ?? 0;
        if (isset($rec["user_id"]))
            $this->user_id = $rec["user_id"];
    }

    public function find_by_id($id, $init = true)
    {
        $db = $this->ci->db;
        //$res =  $this->ci->db->get_where("properties",array("id"=>$id))->result_array();
        $q   = "select properties.*,property_features.*
                from properties
                join property_features on properties.fk_property_feature_id = property_features.property_feature_id
                where properties.id = " . $id;
        $res = $this->ci->db->query($q)->result_array();
//        pre($res);
//        $res = $db->get_where("properties", array("id" => $id))->result_array();

        if ($init)
            $this->init_from_db($res[0]);
        return $res[0];
    }

    public function get_property_type()
    {
        return $this->property_type;
    }

    public function get_deal_type()
    {
        return $this->deal_type;
    }

    public function update()
    {
//        echo "in update";
//        die("in update");
        $db = $this->ci->db;

        $db->trans_start();
        $db->where('id', $this->id);
        $db->set($this->build_insert_array());
        $res = $db->update('properties');
//        pr($res);
        if ($this->get_property_type() == "apartment" || $this->get_property_type() == "store") {
            if (!$res) $this->dbg('error updating:', $db->error());
            $db->where('property_feature_id', $this->fk_property_feature_id);
            $db->set($this->build_features_array());
            $res_featuers = $db->update('property_features');

//            pr($res_featuers);
            if (!$res_featuers) $this->dbg('error updating features:', $db->error());
        }
        $db->trans_complete();
        $this->ci->Events_model->set('event_table', 'properties')->update_event();
        return $db->trans_status();
    }

    public function property_stats()
    {
        $res = $this->ci->db->query("select property_type,count(*) as num from properties GROUP BY property_type")->result_array();

        foreach ($res as &$row) {
            if ($row["property_type"] == "land") {
                $row["fa_property_type"] = "زمین";
                $row["fa_description"]   = "زمین ثبت شده";
            } else if ($row["property_type"] == "store") {
                $row["fa_property_type"] = "مغاز";
                $row["fa_description"]   = "مغازه ثبت شده";
            } else if ($row["property_type"] == "apartment") {
                $row["fa_property_type"] = "آپارتمان و پیش فروش";
                $row["fa_description"]   = "آپارتمان و پیش فروش ثبت شده";
            }
        }
        $ret["property_stats"] = $res;
        $ret["property_count"] = $this->ci->db->count_all("properties");
        return $ret;
    }

    public function property_images($id)
    {

        $res = $this->ci->db->get_where('property_files', array("property_id" => $id))->result_array();
        if (!empty($res)) {
            $this->property_files = array_column($res, "file_name");
        }

        return $this->property_files;
    }

    private function dbg($tag, $value)
    {
        if (is_array($value) || is_object($value)) {
            $value = print_r($value, true);
        }
        $this->dbg_str .= "$tag: $value";
    }

    private function gdbg()
    {
        return $this->dbg_str;
    }

    public function has_deal_type(){
        $has_deal_type = isset($_POST['for_rahn']) && $_POST['for_rahn'] == 'yes';
        $has_deal_type = $has_deal_type || (isset($_POST['for_rent']) && $_POST['for_rent'] == 'yes');
        $has_deal_type = $has_deal_type || (isset($_POST['for_sale']) && $_POST['for_sale'] == 'yes');
        return $has_deal_type;
    }
}
