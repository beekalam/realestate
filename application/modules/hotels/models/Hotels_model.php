<?php

class Hotels_model extends CI_Model {

	function __construct(){
		parent :: __construct();
	}

// Get all hotels id and names only
		function all_hotels_names($id = null) {
				$this->db->select('hotel_id,hotel_title,hotel_slug');
				if (!empty ($id)) {
						$this->db->where('hotel_owned_by', $id);
				}
				$this->db->order_by('hotel_id', 'desc');
				return $this->db->get('hotels')->result();
		}

// Get all hotels for extras
		function all_hotels($id = null) {
				$this->db->select('hotel_id as id,hotel_title as title');
				if (!empty ($id)) {
						$this->db->where('hotel_owned_by', $id);
				}
				$this->db->order_by('hotel_id', 'desc');
				return $this->db->get('hotels')->result();
		}
// get all data of single hotel by slug
		function get_hotel_data($hotelslug) {
				$this->db->select('hotels.*');
				$this->db->where('hotels.hotel_slug', $hotelslug);
/* $this->db->where('pt_hotel_images.himg_type','default');

$this->db->join('pt_hotel_images','pt_hotels.hotel_id = pt_hotel_images.himg_hotel_id','left');*/
				return $this->db->get('hotels')->result();
		}
}