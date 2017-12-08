<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    
    function __construct(){
    	parent::__construct();
    	$this->setting = D("Admin/Setting");
    	$this->cfg = $this->setting->getAll();
    }

    public function index(){

    	$b = D("blog");

    	$this->assign('blog',$b->order('bid desc')->limit(0,10)->select());
    	$this->assign('cfg', $this->cfg);
    	$this->display();
    }

    public function read(){

    	$bid = I("get.bid");
    	$b = D("blog");
    	$blogs = $b->where( array( 'bid'=>$bid ) )->find();

    	$this->assign('blogs',$blogs);
    	$this->assign('cfg', $this->cfg);
    	$this->display();
    }
}