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
	<center>优惠券名称:<input type='text' name='mtitle' value=""></center>	
	&nbsp;&nbsp;&nbsp;&nbsp;	
	<center>优惠券折数:<input type='text' name='val' value=""></center>	
	&nbsp;&nbsp;&nbsp;&nbsp;	
	<center>优惠券图片:<input type='file' name='mcontent' value=""></center>
	<div class="layui-input-block">
      <button class="layui-btn" lay-submit >立即提交</button>
    </div>	
		</form>	
	</body>

</html>