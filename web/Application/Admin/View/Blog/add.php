<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>博客管理</title>
	<link rel="stylesheet" href="/Public/bootstrap/css/bootstrap.min.css" type="text/css"/>
    <script src="/Public/js/jquery.min.js" ></script> 
    <script src="/Public/bootstrap/js/bootstrap.min.js" ></script> 

    <link rel="stylesheet" type="text/css" href="/Public/simditor/styles/simditor.css" />

	<script type="text/javascript" src="/Public/simditor/scripts/module.js"></script>
	<script type="text/javascript" src="/Public/simditor/scripts/hotkeys.js"></script>
	<script type="text/javascript" src="/Public/simditor/scripts/uploader.js"></script>
	<script type="text/javascript" src="/Public/simditor/scripts/simditor.js"></script>
</head>
<body>
<div class="container">
	<?php include( THEME_PATH . "nav.php" );?>
	<div class="page-header">
		<h1>
			博客添加 
			<small class="pull-right">
				<a href="<?php echo U("/Admin/Blog/index");?>" class="btn btn-default">返回</a>
			</small>
		</h1>
	</div>
	
	<div class="panel-body">
		<form action="<?php echo U('Admin/Blog/save');?>?bid=<?php echo $blog['bid'];?>" method="post" class="form-horizontal">
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">标题</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="title" value="<?php echo $blog['title'];?>">
				</div>
			</div>

			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">作者</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="author" value="<?php echo $blog['author'];?>">
				</div>
			</div>

			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label" >正文</label>
				<div class="col-sm-10">
					<textarea name="content" id="content" class="form-control" style="height: 400px"><?php echo $blog['content'];?></textarea>
					
					<script>
						var editor = new Simditor({
						  textarea: $('#content'),
						  upload:{
						  	url:"<?php echo U('/Admin/Blog/upload');?>",
						  	fileKey:"file1",
						  }
						});
					</script>

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