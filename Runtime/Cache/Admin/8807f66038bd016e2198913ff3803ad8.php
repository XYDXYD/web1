<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" type="text/css" href="__PUBLIC__/bootstrap/css/bootstrap.min.css" />
	</head>
	
	<body>
	    <div class="container">
	        <div class="span3 offset4">
	            <h1 class="form-signin-heading">后台管理</h1>
	            <form class="form-signin" method="post" action="__URL__/authenticate">
	                <label for="username">用户名</label>
	                <input type="text" name="username" id="username"/>
	                <label for="password">密码</label>
	                <input type="password" name="password" id="password" />
	                <input type="submit" class="btn btn-primary" value="登录" />
	            </form>
	        </div>
	    </div>
	    <script type="text/javascript" src="__PUBLIC__/bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>