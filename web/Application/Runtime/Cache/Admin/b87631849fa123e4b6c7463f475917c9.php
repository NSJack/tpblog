<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>管理员管理</title>
	<link rel="stylesheet" href="/Public/bootstrap/css/bootstrap.min.css" type="text/css"/>
    <script src="/Public/js/jquery.min.js" ></script> 
    <script src="/Public/bootstrap/js/bootstrap.min.js" ></script> 
</head>
<body>
<div class="container">
	<?php include( THEME_PATH . "nav.php" );?>
	<div class="page-header">
		<h1>
			管理员添加 
			<small class="pull-right">
				<a href="<?php echo U("/Admin/Auser/index");?>" class="btn btn-default">返回</a>
			</small>
		</h1>
	</div>
	
	<div class="panel-body">
		<form action="<?php echo U('Admin/Auser/save');?>?auid=<?php echo $user['auid'];?>" method="post" class="form-horizontal">
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">用户名</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="auname" value="<?php echo $user['auname'];?>">
				</div>
			</div>
			<div class="form-group">
				<label for="inputPassword3" class="col-sm-2 control-label">密&nbsp;&nbsp;&nbsp;&nbsp;码</label>
				<div class="col-sm-10">
					<input type="password" class="form-control" name="passwd" value="<?php echo $user['passwd'];?>">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-default">提交</button>
				</div>
			</div>
		</form>
	</div>

</div>


</body>
</html>