<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title>Table</title>
		<link rel="stylesheet" href="/Public/plugins/layui/css/layui.css" media="all" />
		<link rel="stylesheet" href="/Public/css/global.css" media="all">
		<link rel="stylesheet" href="/Public/plugins/font-awesome/css/font-awesome.min.css">
	</head>

	<body>
	<form method="POST" action=""  enctype="multipart/form-data">
	<center>优惠券名称:<input type='text' name='mtitle' value="<?php echo ($res["mtitle"]); ?>"></center>	
	&nbsp;&nbsp;&nbsp;&nbsp;	
	<center>优惠券折数:<input type='text' name='val' value="<?php echo ($res["val"]); ?>"></center>	
	&nbsp;&nbsp;&nbsp;&nbsp;	
	<center>优惠券图片:<img width="50px" height="50px" src="<?php echo $res['mstyle'];?>"><input type='file' name='mcontent' value=""></center>
	<input type="hidden" name="id" value="<?php echo I('get.id');?>">
	<div class="layui-input-block">
      <button class="layui-btn" lay-submit >立即提交</button>
    </div>	
		</form>	
	</body>

</html>