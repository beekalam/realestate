<?php
class Events_model extends CI_Model {

    private $params;
    function __construct() {
        parent :: __construct();
        $this->params = array();
        $this->params["userid"] = $_SESSION["userid"];
        $this->params["user_name"] = $_SESSION["username"] ?? ""; //fixme
    }

    public function set($name,$value){
            $this->params[$name]=$value;
            return $this;
    }

    public function update_event($params=array()){
        $params["action"] = "update";
        $this->_event($params);
    }

    public function add_event($params = array()){
        $params["action"] = "add";
        $this->_event($params);
    }

    public function delete_event($params=array()){
        $params["action"] = "delete";
        $this->_event($params);
    }

    private function _event($params=array()){
        $params = array_merge($this->params,$params);
        $res = $this->db->insert("events",$params);
        return $res;
    }
}