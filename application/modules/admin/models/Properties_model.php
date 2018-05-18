<?php

class Properties_model extends CI_Model
{

    function __construct()
    {
        parent:: __construct();
    }

    public function property_files($id)
    {
        $res = $this->db->get_where("property_files", array("property_id" => $id))->result_array();
        return $res;
    }

    public function property_file($id)
    {
        $res = $this->db->get_where('property_files', array('id' => $id))->row(0, "array");
        return $res;
    }

    public function delete_file($id)
    {
        return $this->db->delete('property_files', array('id' => $id));
    }

    public function add_property_file($property_id, $file_name)
    {
        return $this->db->insert("property_files", compact("property_id", "file_name"));
    }

    public function find_by_id($id)
    {
        return $this->db->get_where('properties', array("id" => $id))->row(0, "array");
    }

    public function find_with_features($id)
    {
        return $this->db->select('properties.*')
            ->select('property_features.*')
            ->from('properties')
            ->join('property_features','properties.fk_property_feature_id = property_features.property_feature_id')
            ->where('properties.id',$id)
            ->get()
            ->row(0,"array");
    }

    public function set_property_position($id, $lat, $lng)
    {
        return $this->db->set('lat', $lat)
            ->set('lng', $lng)
            ->where('id', $id)
            ->update('properties');
    }

}