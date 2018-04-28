<?php

class Settings_model extends CI_Model {

		function __construct() {
				parent :: __construct();
		}

		function get_settings_data() {
				$q = $this->db->get('settings')->result_array();
				$res = array();
				foreach($q as $item){
				    $res[$item["key"]] = $item["value"];
                }
                return $res;
		}
}