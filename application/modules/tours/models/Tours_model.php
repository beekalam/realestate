<?php

class Tours_model extends CI_Model {
	function __construct() {
// Call the Model constructor
				parent :: __construct();
		}


// Get all enabled tours short info
		function shortInfo($id = null) {
				$result = array();
				$this->db->select('tour_id,tour_title,tour_slug');
				if (!empty ($id)) {
						$this->db->where('tour_owned_by', $id);
				}
				$this->db->where('tour_status', 'Yes');
				$this->db->order_by('tour_id', 'desc');
				$tours = $this->db->get('tours')->result();
				foreach($tours as $tour){
					$result[] = (object)array('id' => $tour->tour_id, 'title' => $tour->tour_title, 'slug' => $tour->tour_slug);
				}

				return $result;
		}

// Get all tours id and names only
		function all_tours_names($id = null) {
				$this->db->select('tour_id,tour_title');
				if (!empty ($id)) {
						$this->db->where('tour_owned_by', $id);
				}
				$this->db->order_by('tour_id', 'desc');
				return $this->db->get('tours')->result();
		}

		// Get all tours for extras
		function all_tours($id = null) {
				$this->db->select('tour_id as id,tour_title as title');
				if (!empty ($id)) {
						$this->db->where('tour_owned_by', $id);
				}
				$this->db->order_by('tour_id', 'desc');
				return $this->db->get('tours')->result();
		}
// get all data of single tour by slug
		function get_tour_data($tourname) {
				$this->db->select('tours.*');
				$this->db->where('tours.tour_slug', $tourname);

				return $this->db->get('tours')->result();
		}
		

}