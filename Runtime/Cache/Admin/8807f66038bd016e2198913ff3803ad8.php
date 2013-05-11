<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>登录后台管理系统</title>
		<link rel="stylesheet" type="text/css" href="__PUBLIC__/bootstrap/css/bootstrap.min.css" />
	</head>
	
	<body>
	    <div class="container">
	    <div class="row">
	        <div class="span4 offset3">
	            <form class="form-horizontal" action="__URL__/authenticate" method="post">
	                <fieldset>
	                <legend>后台管理系统登录</legend>
	                    <div class="control-group">
	                        <label class="control-label" for="username">用户名</label>
	                        <div class="controls">
	                            <input type="text" name="username" id="username"/>
	                        </div>
	                    </div>
	                    <div class="control-group">
	                        <label class="control-label" for="password">密码</label>
	                        <div class="controls">
	                            <input type="password" name="password" id="password" />
	                        </div>
	                    </div>
	                    <div class=>
	                    <div class="controls">
	                        <input type="submit" class="btn btn-primary" value="登录" />
	                    </div>
	                </fieldset>
	            </form>
	        </div>
	    </div>
	    </div>
	</body>
</html>