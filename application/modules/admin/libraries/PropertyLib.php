<?php


class PropertyLib
{
    protected $ci;
    private $id = 0;
    private $property_name;
    private $property_description;
    private $price_min;
    private $price_max;
    private $room_count;
    private $parking = 'no';
    private $owner_name;
    private $owner_family;
    private $owner_tel;
    private $owner_mobile;
    private $zone;
    private $street;
    private $alley;
    private $parking_area;
    private $parking_count;
    private $anbari = 'no';
    private $anbari_count;
    private $property_type;
    private $date_on_market;   //زمان تحویل
    private $age;  //سن بنا
    private $num_stories;  //تعداد طبقات
    private $unit_per_story;   //تعداد واحد در هر طبقه
    private $anbari_area;
    private $rent_amount;
    private $rahn_amount;   //مبلغ رهن
    private $rent_preconditions;
    private $rahn_preconditions;
    private $pardakht_method;
    private $price_per_square_meter;
    private $price_total;
    private $sanad_type;
    private $agent_name;
    private $zabete;
    private $karbari;
    private $aghab_neshini;   //عقب نشینی
    private $parvane;
    private $parvane_description;
    private $deal_type;
    private $area;
    private $renovation_age;   //سن بازسازی
    private $sell_conditions; //شرایط فروش
    private $renovated; //بازی سازی شده

    public function __construct($params = array())
    {
        $this->ci = & get_instance();
        $this->ci->load->library('form_validation');
        $this->ci->load->database();
        $this->ci->load->helper("lib_date");
        $this->property_type = $params["property_type"];
        $this->deal_type = $params["deal_type"];
        $this->set_validation_rules();
    }

    public function init_from_post(){
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
        $this->pardakht_method      = $p->post('pardakht_method');
        $this->price_per_square_meter = $p->post('price_per_square_meter');
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
        if(isset($_POST["id"]))
            $this->id = $p->post("id");
        if(isset($_POST["deal_type"]))
            $this->deal_type = $p->post("deal_type");
        if(isset($_POST["property_type"]))
            $this->property_type = $p->post("property_type");
    }

    public function set_validation_rules(){
        $fv = $this->ci->form_validation;
        $err = array( "required" =>"مقداری برای %s وارد نشده است");
        $fv->set_rules('owner_name','نام','required',$err);
        $fv->set_rules('owner_family','نام خانوادگی','required',$err);
        $fv->set_rules('owner_tel','شماره تلفن','required',$err);
        $fv->set_rules('owner_mobile','موبایل','required',$err);
        if($this->property_type == 'apartment'){

        }else if($this->property_type == 'land'){

        }else if($this->property_type == 'store'){

        }
    }

    public function is_valid(){
        return $this->ci->form_validation->run();
    }

    public function property_types(){
        $res = array(
            "apartment"=>"آپارتمان",
            "land"=>"زمین",
            "store"=>"مغازه"
        );
        return $res;
    }

    public function build_insert_array(){
        if(is_null($this->parking) || empty($this->parking)){
            $this->parking = "no";
        }
        if(is_null($this->anbari) || empty($this->anbari)){
            $this->anbari = "no";
        }

        $ret = array(
            "property_name"  =>"",
            "property_description"=>"",
            "owner_name"    => $this->owner_name,
            "owner_family"  => $this->owner_family,
            "owner_tel"     => $this->owner_tel,
            "owner_mobile"  => $this->owner_mobile,
            "zone"          => $this->zone,
            "street"        => $this->street,
            "alley"         => $this->alley,
            "parking"       => $this->parking,
            "parking_count" => $this->parking_count,
            "anbari"        => $this->anbari,
            "room_count"    => $this->room_count,
            "anbari_count"  => $this->anbari_count,
            "property_type" => $this->property_type,
        );
        $keys = array();
        if($this->property_type == 'apartment') {
            $keys = array_merge($keys,
                array("parking_area", "area", "anbari_area",
                "room_count", "age", "num_stories", "unit_per_story",
                'pardakht_method', 'price_per_square_meter', 'price_total',
                'sanad_type'));
        }
        if($this->deal_type == 'rahn'){
            $keys = array_merge($keys,array("rahn_preconditions","rahn_amount"));
        }else if($this->deal_type == 'rent'){
            $keys = array_merge($keys,array("rent_amount","rent_preconditions"));
        }

        foreach($keys as $k){
            $ret[$k] = $this->{$k};
        }
        return $ret;
    }

    public function save(){
//        for($i=1; $i < 100; $i++){
//            $res = $this->build_insert_array();
//            $res["owner_name"] .= strval($i);
//            $res["owner_family"] .= strval($i);
//            $res = $this->ci->db->insert("properties",$this->build_insert_array());
//        }
        $res = $this->build_insert_array();

        $res = $this->ci->db->insert("properties",$this->build_insert_array());
        return $res;
    }

    public function init_from_db($rec){
        $this->property_name        = $rec['property_name'];
        $this->property_description = $rec['property_description'];
        $this->price_min            = $rec['price_min'];
        $this->price_max            = $rec['price_max'];
        $this->room_count           = $rec['room_count'];
        $this->parking              = $rec['parking'];
        $this->owner_name           = $rec['owner_name'];
        $this->owner_family         = $rec['owner_family'];
        $this->owner_tel            = $rec['owner_tel'];
        $this->owner_mobile         = $rec['owner_mobile'];
        $this->zone                 = $rec['zone'];
        $this->street               = $rec['street'];
        $this->alley                = $rec['alley'];
        $this->parking_area         = $rec['parking_area'];
        $this->parking_count        = $rec['parking_count'];
        $this->anbari               = $rec['anbari'];
        $this->anbari_count         = $rec['anbari_count'];
        $this->property_type        = $rec['property_type'];
        $this->date_on_market       = $rec['date_on_market'];
        $this->age                  = $rec['age'];
        $this->num_stories          = $rec['num_stories'];
        $this->unit_per_story       = $rec['unit_per_story'];
        $this->anbari_area          = $rec['anbari_area'];
        $this->rent_amount          = $rec['rent_amount'];
        $this->rent_preconditions   = $rec['rent_preconditions'];
        $this->rahn_amount          = $rec['rahn_amount'];
        $this->rahn_preconditions   = $rec['rahn_preconditions'];
        $this->pardakht_method      = $rec['pardakht_method'];
        $this->price_per_square_meter = $rec['price_per_square_meter'];
        $this->price_total          = $rec['price_total'];
        $this->sanad_type           = $rec['sanad_type'];
        $this->zabete               = $rec['zabete'];
        $this->karbari              = $rec['karbari'];
        $this->aghab_neshini        = $rec['aghab_neshini'];
        $this->parvane              = $rec['parvane'];
        $this->parvane_description  = $rec['parvane_description'];
        $this->area                 = $rec['area'];
        $this->renovation_age       = $rec['renovation_age'];
        $this->sell_conditions      = $rec['sell_conditions'];
        $this->renovated            = $rec['renovated'];
        $this->property_type        = $rec["property_type"];
        $this->deal_type            = $rec["deal_type"];
    }

    public function find_by_id($id){
        $res =  $this->ci->db->get_where("properties",array("id"=>$id))->result_array();
        $this->init_from_db($res[0]);
        return $res[0];
    }

    public function get_property_type(){
        return $this->property_type;
    }

    public function get_deal_type(){
        return $this->deal_type;
    }

    public function update(){
        $this->ci->db->where('id',$this->id);
        $res = $this->ci->db->update('properties',$this->build_insert_array());
        return $res;
    }

}