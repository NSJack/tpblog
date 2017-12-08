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
			管理员管理 
			<small class="pull-right">
				<a href="<?php echo U("/Admin/Auser/add");?>" class="btn btn-default">添加</a>
			</small>
		</h1>
	</div>

	<div class="bs-example" data-example-id="striped-table">
		<table class="table table-striped">
			<thead>
				<tr>
				<th>auid</th>
				<th>用户名</th>
				<th>按钮</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach( $data['users'] as $users ): ?>
				<tr>
					<th><?php echo $users['auid'];?></th>
					<td><?php echo $users['auname'];?></td>
					<td>
						<a href="<?php echo U("/Admin/Auser/add");?>?auid=<?php echo $users['auid'];?>" class="btn btn-primary btn-xs">编辑</a>
						<a href="<?php echo U("/Admin/Auser/delete");?>?auid=<?php echo $users['auid'];?>" class="btn btn-danger btn-xs">删除</a>	
					</td>
				</tr>
				<?php endforeach;?>
			</tbody>
		</table>
	</div>


</div>


</body>
</html>