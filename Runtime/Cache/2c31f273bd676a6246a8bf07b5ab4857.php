<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	</head>
	
	<body>
	    <form method="post" action="__URL__/check">
	        用户：<input type="text" name="username" /><br />
	        密码：<input type="password" name="password" /><br />
	        <input type="submit" value="登录" />
	    </form>
	</body>
</html>