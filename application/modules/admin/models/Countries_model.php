<?php


class Countries_model extends CI_Model {

		function __construct() {
// Call the Model constructor
				parent :: __construct();
		}

		public function country_details($country){
			$result= new stdClass;
			$c = $this->get_country($country);
			if(count($c)){
				$locations 	= $this->country_locations($country);
				$loc_ids =  array_column($locations, "id");
			}
			$result->country = $c;
			$result->locations = $locations;
			$result->locations_ids = $loc_ids;
			return $result;
		}
		
		public function get_all_countries(){
			return $this->db->get('country')->result_array();
		}


		public function country_locations($country){
			$this->db->where('country',$country);
			return $this->db->get('locations')->result();
		}

		public function get_country($country){
			$this->db->where('name',strtoupper($country));
			return $this->db->get('country')->result();
		}
}