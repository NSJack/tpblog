<?php

namespace Admin\Controller;

class AuserController extends AdmController {
    /**
     * @Author    刘林
     * @DateTime  2017-06-13
     * @param     管理员管理
     * @copyright [copyright]
     * @license   [license]
     * @version   [version]
     * @return    [type]      [description]
     */
    public function index(){
        
        $adminuser = D("adminuser"); 
        $users = $adminuser->select();
        $data = array();

        $data['users'] = $users;
        $this->assign("data",$data);
        $this->display();
    }

    public function add(){

        $auid = I("get.auid");
        $adminuser = D("adminuser");
        $user = array(
                'auid' => 0,
                'auname' => '',
                'passwd' => ''
            );
        if( $auid>0 ){
            $user = $adminuser->where( array( 'auid' => $auid ) )->find();
        }
        $this->assign("user",$user);

        $this->display();
    }
    
    public function delete(){
        $auid = I("get.auid");
        D("adminuser")->where( array( 'auid' => $auid ) )->delete();
        return $this->redirect("/Admin/Auser");
    }

    public function _edit( $auid ){
        $adminuser = D("adminuser");

        if( IS_POST ){
            $auname = I("post.auname");
            $passwd = I("post.passwd");
            //验证表单的合法性
            $rule = array(
                    array('auname','require',"用户名不能为空"),
                    array('passwd','require',"密码不能为空"),
                );
            if ( !$adminuser->validate( $rule )->create() ) {
                return $this->error( $adminuser->getError(),"/Admin/Auser/add" );

            }
            //用户名是否唯一
            $where = array();
            $where['auname'] = $auname;
            $where['auid']  = array('NEQ',$auid);
            $isArr = $adminuser->where( $where )->find();
            if( $isArr ){
                return $this->error( "用户名已存在","/Admin/Auser/add" );
            }
            //插入数据
            $insert = array(
                    'auname' => $auname,
                    'passwd' => $passwd,
                );
            $is = $adminuser->where( array( 'auid'=>$auid ) )->save( $insert );
            return $this->success( "成功修改{$is}条数据","/Admin/Auser/index" );
        }
    }

    public function save(){

        $auid = I("get.auid");
        if( $auid>0 ){
            return $this->_edit( $auid );
        }

        $adminuser = D("adminuser");

        if( IS_POST ){
            $auname = I("post.auname");
            $passwd = I("post.passwd");
            //验证表单的合法性
            $rule = array(
                    array('auname','require',"用户名不能为空"),
                    array('passwd','require',"密码不能为空"),
                );
            if ( !$adminuser->validate( $rule )->create() ) {
                return $this->error( $adminuser->getError(),"/Admin/Auser/add" );

            }
            //用户名是否唯一
            $where = array();
            $where['auname'] = $auname;
            $isArr = $adminuser->where( $where )->find();
            if( $isArr ){
                return $this->error( "用户名已存在","/Admin/Auser/add" );
            }
            //插入数据
            $insert = array(
                    'auname' => $auname,
                    'passwd' => $passwd,
                );
            $auid = $adminuser->add( $insert );
            if( $auid ){
                return $this->success( "操作成功","/Admin/Auser/index" );
            }else{
                return $this->error( "操作失败","/Admin/Auser/add" );
            }
        }

    }
    //退出登录
    public function logout(){

        session('auid',null); // 删除auid
        return $this->error( "退出成功","/Admin/Login/index" );
    }


}