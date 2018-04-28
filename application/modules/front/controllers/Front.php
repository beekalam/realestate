<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use Ramsey\Uuid\Uuid;

class Front extends MX_Controller {

	function __construct(){
		parent::__construct();

	}

	public function  index(){
	    echo "in front controller";
	    exit;
    }

}