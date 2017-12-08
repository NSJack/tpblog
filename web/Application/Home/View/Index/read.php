<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $cfg['web_name'];?></title>
	<link rel="stylesheet" href="/Public/bootstrap/css/bootstrap.min.css" type="text/css"/>
    <script src="/Public/js/jquery.min.js" ></script> 
    <script src="/Public/bootstrap/js/bootstrap.min.js" ></script> 
</head>
<body>
	<div class="container">
		<div class="jumbotron">
			<h1><?php echo $cfg['web_name'];?></h1>
			<p><?php echo $cfg['intro'];?></p>
		</div>
		<ol class="breadcrumb">
			<li><a href="/">Home</a></li>
			<li><?php echo $blogs['title'];?></li>
		</ol>

		<div class="col-md-9">
			<div class="panel panel-default">
				<div class="panel-heading">
					<?php echo $blogs['title'];?>
				</div>
				<div class="panel-body">
					<?php echo html_entity_decode($blogs['content']);?>
				</div>
			</div>
		</div>

		<div class="col-md-3">
			<div class="panel panel-default">
				<div class="panel-heading">作者简介</div>
				<div class="panel-body">
					so simple
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading">统计数据</div>
				<div class="panel-body">
					so simple
				</div>
			</div>
		</div>
	</div>


</body>
</html>