<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>博客管理</title>
	<link rel="stylesheet" href="/Public/bootstrap/css/bootstrap.min.css" type="text/css"/>
    <script src="/Public/js/jquery.min.js" ></script> 
    <script src="/Public/bootstrap/js/bootstrap.min.js" ></script> 
</head>
<body>
<div class="container">
	<?php include( THEME_PATH . "nav.php" );?>
	<div class="page-header">
		<h1>
			博客管理 
			<small class="pull-right">
				<a href="<?php echo U("/Admin/Blog/add");?>" class="btn btn-default">添加</a>
			</small>
		</h1>
	</div>

	<div class="bs-example" data-example-id="striped-table">
		<table class="table table-striped">
			<thead>
				<tr>
				<th>bid</th>
				<th>标题</th>
				<th>作者</th>
				<th>添加时间</th>
				<th>修改时间</th>
				<th>管理</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach( $blog as $blogs ): ?>
				<tr>
					<th><?php echo $blogs['bid'];?></th>
					<td><?php echo $blogs['title'];?></td>
					<td><?php echo $blogs['author'];?></td>
					<td><?php echo date("Y-m-d H:i:s",$blogs['intime']);?></td>
					<td><?php echo date("Y-m-d H:i:s",$blogs['uptime']);?></td>
					<td>
						<a href="<?php echo U("/Admin/Blog/add");?>?bid=<?php echo $blogs['bid'];?>" class="btn btn-primary btn-xs">编辑</a>
						<a href="<?php echo U("/Admin/Blog/delete");?>?bid=<?php echo $blogs['bid'];?>" class="btn btn-danger btn-xs">删除</a>	
					</td>
				</tr>
				<?php endforeach;?>
			</tbody>
		</table>
		<?php echo $show;?>
	</div>


</div>


</body>
</html>