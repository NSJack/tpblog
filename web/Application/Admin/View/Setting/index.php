<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>系统设置</title>
	<link rel="stylesheet" href="/Public/bootstrap/css/bootstrap.min.css" type="text/css"/>
    <script src="/Public/js/jquery.min.js" ></script> 
    <script src="/Public/bootstrap/js/bootstrap.min.js" ></script> 
</head>
<body>
<div class="container">
	<?php include( THEME_PATH . "nav.php" );?>
	<div class="page-header">
		<h1>系统设置</h1>
	</div>
	
	<div class="panel-body">
		<form action="<?php echo U('Admin/Setting/save');?>" method="post" class="form-horizontal">
		<?php foreach ($setting as $k => $v):?>
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label"><?php echo $k;?></label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="<?php echo $k;?>" value="<?php echo $v;?>">
				</div>
			</div>
		<?php endforeach;?>	
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