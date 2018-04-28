<?php
class Rooms_model extends CI_Model{
    
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    // get all rooms info
    // function get_all_rooms($hotelid = null,$userid = null){
    // $data = array();

    // $this->db->select('hotels.hotel_id,hotels.hotel_owned_by,hotels.hotel_title,hotels.hotel_slug,pt_rooms.room_title,pt_rooms.room_hotel,pt_rooms.room_id,pt_rooms.room_type,pt_rooms.room_status,pt_rooms.room_added_on,pt_rooms.room_order');

    // if(!empty($hotelid)){
    //  $this->db->where('pt_rooms.room_hotel',$hotelid);
    // }

    // if(!empty($userid)){
    //  $this->db->where('hotels.hotel_owned_by',$userid);
    // }

    // $this->db->order_by('pt_rooms.room_id','desc');
    // $this->db->join('hotels','pt_rooms.room_hotel = hotels.hotel_id','left');

    // $query =  $this->db->get('pt_rooms');
    // $data['all'] = $query->result();
    // $data['nums'] = $query->num_rows();

    // return $data;

    // }


        // get all data of single Room by id
    function getRoomData($roomid){

    $this->db->select('hotels.hotel_id,hotels.hotel_title,rooms.*');
    $this->db->where('rooms.room_id',$roomid);
    $this->db->join('hotels','rooms.room_hotel = hotels.hotel_id');
    return $this->db->get('rooms')->result();


    }

}