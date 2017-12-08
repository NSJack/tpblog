<?php

namespace Admin\Controller;
use Think\Controller;
class AdmController extends Controller {
	function __construct(){
		parent::__construct();
		$this->auid = session('auid');
		//判断SESSION中的auid是否存在
        if( $this->auid<1 ){
            return $this->error("用户名或密码错误","/Admin/Login");
        }

        $this->user = D("adminuser")->where( array('auid'=>$this->auid) )->find();
        if( !$this->user ){
        	return $this->error("用户名无效","/Admin/Login");
        }

        //var_dump($this->user);
	}
}

?> 