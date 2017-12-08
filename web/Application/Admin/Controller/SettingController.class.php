<?php
namespace Admin\Controller;
use Think\Controller;
class SettingController extends Controller {
    public function index(){

    	$setting = D("Setting");

    	$this->assign('setting',$setting->getAll());
 		$this->display();
    }

    public function save(){
    	$post = I("post.");
    	$setting = D("Setting");
    	foreach ($post as $k => $v) {
    		$setting->where( array( 'k'=> $k ) )->save( array( 'v'=>$v ) );
    	}

    	$this->redirect("/Admin/Setting/index");
    }


}