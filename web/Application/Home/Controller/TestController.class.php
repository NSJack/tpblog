<?php

namespace Home\Controller;

use Think\Controller;

class TestController extends Controller{
	function index(){
		$d = D("adminuser");
		$auname = $d -> getfield("auname");

		$this ->assign('auname',$auname);
		$this ->display();
	}
	function a(){
		echo 'a';
	}
}

?>