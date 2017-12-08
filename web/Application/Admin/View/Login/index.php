<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>管理员登录</title>
	<link rel="stylesheet" href="/Public/bootstrap/css/bootstrap.min.css" type="text/css"/>
    <script src="/Public/js/jquery.min.js" ></script> 
    <script src="/Public/bootstrap/js/bootstrap.min.js" ></script> 
</head>
<body>
<div class="container">
	<div class="col-md-6 col-md-offset-3">
		<div class="panel panel-primary" style="margin-top: 200px;">
			<div class="panel-heading">
				<h3 class="panel-title">管理员登录</h3>
			</div>
			<div class="panel-body">
				<form action="<?php echo U('Admin/Login/index?do=check'); ?>" method="post" class="form-horizontal">
					<div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label">用户名</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="auname" id="auname" placeholder="用户名">
						</div>
					</div>
					<div class="form-group">
						<label for="inputPassword3" class="col-sm-2 control-label">密&nbsp;&nbsp;&nbsp;&nbsp;码</label>
						<div class="col-sm-10">
							<input type="password" class="form-control" name="passwd" id="password" placeholder="密码">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
							<button type="submit" class="btn btn-default">登录</button>
						</div>
					</div>
				</form>
			</div>
			<div class="panel-footer" style="text-align: right;">版权所有 盗版必究</div>
		</div>
	</div>
</div>


</body>
</html>