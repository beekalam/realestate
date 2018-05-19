<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Property extends MX_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model("Settings_model");
        $this->load->helper("utils");
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->model('admin/Properties_model');
        $this->checkAuth();
    }

    public function map()
    {
        $this->load->helper('property');
        $this->addcomponent("gmap");
        $res = $this->db->select("id,lat,lng,property_type")
            ->from('properties')
            ->where('(lat IS NOT NULL AND lng IS NOT NULL)')
            ->get()
            ->result_array();
//        pre($res);
        $this->view("map", compact('res'));
    }

    public function property_summary()
    {
        $this->load->library('table');
        $this->load->helper('property');
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
        $table->add_row('مالک', $p['owner_name'] . " " . $p["owner_family"]);
        $table->add_row('اطلاعات تماس', span_badge($p['owner_tel']) . span_badge($p['owner_mobile']));
        $table->add_row("آدرس", $p["zone"] . $p["street"] . " " . $p["alley"]);
        $table->add_row("نوع ملک", property_type_persian($p["property_type"]));
        if ($p["for_rent"] == 'yes') {
            $table->add_row("مبلغ اجاره", span_nf($p["rent_amount"]));
        }

        if ($p["for_rahn"] == 'yes') {
            $table->add_row("مبلغ رهن", span_nf($p["rahn_amount"]));
        }

        if ($p['for_sale'] == 'yes') {
            $table->add_row("مبلغ فروش", span_nf($p["price_total"]));
            $table->add_row("مبلغ به متر مربع", span_nf($p["price_per_square_meter"]));
        }


        if ($p['anbari'] == 'yes') {
            $str = span_badge('دارد ');
            $str .= span_badge('تعداد ' . $p['anbari_count'], 'badge-secondary');
            $str .= span_badge(' مساحت ' . $p['anbari_area'], 'badge-success');
            $table->add_row('انباری', $str);
        }

        if ($p['parking'] == 'yes') {
            $str = span_badge('دارد ');
            $str .= span_badge('تعداد ' . $p['parking_count'], 'badge-secondary');
            $str .= span_badge(' مساحت ' . $p['parking_area'], 'badge-success');
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
                    $str .= span_badge("$v ");
                }
            }
            $table->add_row('امکانات', $str);
            $table->add_row('تعداد دهنه', span_badge($p['tedad_dahane']) . span_badge('arze_dahane'));
            $table->add_row('متراژ بالکن', $p['metraj_balkon']);
            $table->add_row('تعداد خط تلفن', $p['telephone_line_count']);
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
                    $str .= span_badge("$v ");
                }
            }
            $table->add_row('امکانات', $str);
            if (isset($p['room_count'])) {
                $table->add_row('تعداد اتاق', $p['room_count']);
            }

        }
        if ($p['property_type'] == 'land') {
            $table->add_row('نوع زمین', $p['land_type']);
            $table->add_row('سن بازسازی', $p['renovation_age']);
            if (!is_null($p['house_entry']) || !empty($p['house_entry']))
                $table->add_row('house_entry', $p['house_entry']);
            $table->add_row('وضعیت تخلیه', $p['takhlie']);
        }

        if ($p['property_type'] == 'apartment' || $p['property_type'] == 'land') {
            foreach (array(
                         'garmayesh' => 'گرمایش',
                         'sarmayesh' => 'سرمایش',
                         'divar'     => 'دیوار',
                         'floor'     => 'کف') as $k => $v) {
                if (!is_null($p[$k]) && !empty($p[$k])) {
                    $table->add_row("$v", $p[$k]);
                }
            }
        }

        $table->add_row('وضعیت سند', $p['sanad_type'] == 'melki' ? 'ملکی' : 'اوقاف');
        $table->add_row("مشاهده ملک", anchor(base_url('admin/edit_property?id=' . $p['id']), "view"));
        $table->add_row("مشاهده تصاویر", anchor(base_url('admin/property_files?id=' . $p['id']), "view pictures"));
//            '<a href="'. base_url('admin/property?id='.$p['id']) .'">'.$p['id'].'</a>');
//        $table->add_row("مشاهده تصاویر",'<a href="'. base_url('admin/property_files?id='.$p['id']) .'">'.$p['id'].'</a>');
//        foreach ($property as $k=>$v) {
//            $table->add_row($k,$v);
//        }
        $table->set_template($template);
        echo $table->generate();
//        echo $this->load->view('property_summary',compact("property"));
    }


}