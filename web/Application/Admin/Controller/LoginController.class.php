<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {

	/**
	* 后台登录页面
	* @Author    刘林
	* @DateTime  2017-06-11
	* @copyright [copyright]
	* @license   [license]
	* @version   [version]
	* @return    [type]
	*/
    public function index(){

    	$do = I("get.do");
    	if( $do=='check' ){
    		$auname = I("post.auname");
    		$passwd = I("post.passwd");
    		$adminuser = D('adminuser');
            $where = array(
                'auname' => $auname,
                'passwd' => $passwd,
                );
            $user = $adminuser->where( $where )->find();
            if ( !$user ) {
                return $this->error("用户名或密码错误","Admin/Login/index");
            }
            session("auid",$user['auid']);
            return $this->success("登录成功","/Admin/Index/index");
    	}
 		$this -> display();
    }
}