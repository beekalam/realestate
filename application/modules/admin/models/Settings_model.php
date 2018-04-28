<?php

class Settings_model extends CI_Model {

		function __construct() {
// Call the Model constructor
				parent :: __construct();
		}

		function get_settings_data() {
				$q = $this->db->get('app_settings')->result_array();
				return count($q) ? $q[0] : array();
		}
}