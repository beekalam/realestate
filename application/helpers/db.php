<?php
require_once  APPPATH."config/database.php";

class db{
	private $con=null;

	function __construct(){
//        $this->con = mysqli_connect("localhost","tripz_root","tripz@098","tripz_tour");
        $this->con = mysqli_connect("localhost","root","","tour");
		if(mysqli_connect_errno())
		 	die("failed to connect to db");
	}

	public function get_all_proxies($bad_count=0){
		$sql = "select * from proxies";
		if($bad_count!=0)
			$sql = "select * from proxies where bad_count < $bad_count";
		
		$result = mysqli_query($this->con,$sql);
		$rows = mysqli_fetch_all($result,MYSQLI_ASSOC);
		return $rows;
	}

  public function delete_proxy($arr){
  	if(isset($arr["id"])) {
  		$sql = "delete from proxies where id='".$arr["id"]."'";
  		$result = mysqli_query($this->con,$sql);
  		return $result === TRUE;
  	}

  	if(isset($arr["address"])){
  		$sql = "delete from proxies where address='".$arr["address"]."'";
  		$result = mysqli_query($this->con,$sql);
  		return $result === TRUE;
  	}
  }

  public function add_proxy($add){
  	$sql ="insert into proxies(address)values('" . $add . "')";
  	$result = $this->con->query($sql);
  	return $result === TRUE;
  }

  public function proxy_exist($proxy){
  	$sql = "select * from proxies where address='".$proxy."'";
  	$result = mysqli_query($this->con,$sql);
  	$result = mysqli_fetch_all($result,MYSQLI_ASSOC);
  	return count($result) == 1;
  }

  public function flag_as_bad_proxy($proxy){
  	$sql = "select * from proxies where address='".$proxy."'";
  	$r = mysqli_query($this->con,$sql);
  	$row = $r->fetch_assoc();
  	$row["bad_count"]++;
  	$update = "update proxies set bad_count='".$row["bad_count"]."' where address='".$proxy."'";
  	$r = mysqli_query($this->con,$update);
  }

  public function flag_as_good_proxy($proxy) {
  	$sql = "update proxies set bad_count=0 where address='".$proxy."'";
  	$r = mysqli_query($this->con,$sql);
  	return $r;
  }

	function __destruct(){
		mysqli_close($this->con);	
	}
}
