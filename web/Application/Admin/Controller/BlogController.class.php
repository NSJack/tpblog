<?php
namespace Admin\Controller;

class BlogController extends AdmController {
	/**
	 * @Author    刘林
	 * @DateTime  2017-06-15
	 * @param     博客管理
	 * @copyright [copyright]
	 * @license   [license]
	 * @version   [version]
	 * @return    [type]      [description]
	 */
    public function index(){
 		
 		$b = D("blog");
        $setting = D("setting");
        $cfg = $setting->getAll();

 		$count      = $b->count();
 		$page = new \Think\Page($count,$cfg['blog_pages']);

 		$blog = $b->order('bid desc')->limit($page->firstRow.','.$page->listRows)->select();
 		$this->assign('show',$page->show() );
    	$this->assign('blog',$blog );
 		$this->display();
    }

    public function add(){

    	$bid = I("get.bid");
        $b = D("blog");
        $user = array(
                'bid' => 0,
                'title' => '',
                'author' => '',
                'content' => ''
            );
        if( $bid>0 ){
            $blog = $b->where( array( 'bid' => $bid ) )->find();
        }
        $this->assign("blog",$blog);

    	$this->display();
    }

    public function delete(){
        $bid = I("get.bid");
        D("blog")->where( array( 'bid' => $bid ) )->delete();
        return $this->redirect("/Admin/Blog");
    }

    public function save(){


    	$bid = I("get.bid");
    	$b = D("blog");
    	if ( IS_POST ) {
    		$title = I("post.title");
    		$author = I("post.author");
    		$content = I("post.content");

    		$rule = array(
    				array("title","require","标题不能为空"),
    				array("author","require","作者不能为空"),
    				array("content","require","正文不能为空"),
    			);
    		if ( !$b->validate( $rule )->create() ) {
    			return $this->error( $b->getError(),"/Admin/Blog/add" );
    		}

    		$insert = array(
    				"title" => $title,
    				"author"=> $author,
    				"content"=>$content,
    			);

    		if( $bid>0 ){
    			$insert['uptime'] = time();
    			$b->where( array('bid'=>$bid) )->save( $insert );
    		}else{
    			$insert['intime'] = time();
    			$b->add($insert);
    		}

            return $this->success( "操作成功","/Admin/Blog/index" );
            
    	}
    }

    public function upload(){

    	$result = array();
    	$result['msg'] = '';
    	$result['success'] = false;
    	$result['file_path'] = '';

    	$upload = new \Think\Upload();// 实例化上传类
	    $upload->maxSize   =     3145728 ;// 设置附件上传大小
	    $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
	    $upload->rootPath  =     './Uploads/'; // 设置附件上传根目录
	    $upload->savePath  =     ''; // 设置附件上传（子）目录
	    // 上传文件 
	    $info   =   $upload->uploadOne( $_FILES['file1'] );
	    if(!$info) {// 上传错误提示错误信息
	        $result['msg'] = $upload->getError();
	    }else{
	    	// 上传成功
	        $url = '/Uploads/'.$info['savepath'].$info['savename'];
	        $result['file_path'] = $url;
	        $result['success'] = true;
	    }
	    //将数组转换成json格式
	    $this->ajaxReturn( $result );
    }


}