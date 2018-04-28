<?php


class User_model extends CI_Model {

    function __construct() {
// Call the Model constructor
        parent :: __construct();
    }

    public function changePassword($user_name,$old_pass,$new_pass){
        //check old password is correct
        $res = $this->db->get_where("users",array("username"=>$user_name,"password"=>sha1($old_pass)))->result_array();
        if(count($res) == 0) {
            return array("res" => false, "error" => "old password is wrong");
        }

        $this->db->set("password",sha1($new_pass));
        $this->db->where("username",$user_name);
        $res = $this->db->update("users");
        return array("res"=>$res,"error"=>"");
    }

}