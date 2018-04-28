<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Search_cache extends CI_Model {

	private $found = false;
	public $value = null;
	private $key = null;

	public function get_by_key($scode,$dcode,$from_date){
		$h = md5($scode.$dcode.$from_date);
		$res = new static();
		$r = $this->db->get_where("search_cache",array("key"=>$h))->result_array();
		// pre($r);
		// pre(unserialize(base64_decode($r[0]["value"])));
		if(count($r))
			$res->set_found(true)->set_value(($r[0]["value"]));
		
		// pre(unserialize(base64_decode($res->value)));
		// pre($res->get_value());
		return $res;
	}


	private function set_found($v){
		$this->found = $v;
		return $this;
	}

	public function found(){ return $this->found; }

	public function set_value($v){
		$this->value = serialize(base64_encode($v));
		return $this;
	}

	public function get_value(){
		return unserialize(base64_decode($this->value));
	}

	public function set_key($scode,$dcode,$from_date){
		$this->key = md5($scode.$dcode.$from_date);
		return $this;
	}

	public function save(){
		$res = $this->db->insert("search_cache",array("key"=>$this->key,"value"=>$this->value,"lastupdate"=>time()));
		return $res;
	}
}
