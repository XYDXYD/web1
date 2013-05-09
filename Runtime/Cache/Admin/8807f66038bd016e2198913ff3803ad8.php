<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>登录后台管理系统</title>
		<link rel="stylesheet" type="text/css" href="__PUBLIC__/bootstrap/css/bootstrap.min.css" />
	</head>
	
	<body>
	    <div class="container-fluid">
	    <div class="row-fluid">
	        <div class="row-fluid">
	            <div class="span12 text-center">
	                <h2>后台管理系统</h2>
	            </div>
	        </div>
	        
	        <div class="row-fluid">
	            <div class="well span6 offset3">
	                <form class="form-horizontal" action="__URL__/authenticate" method="post">
	                    <div class="control-group">
	                        <label class="control-label" for="username">用户名</label>
	                        <div class="controls">
	                            <input class="" type="text" name="username" id="username"/>
	                        </div>
	                    </div>
	                    <div class="control-group">
	                        <label class="control-label" for="password">密码</label>
	                        <div class="controls">
	                            <input class="input-large" type="password" name="password" id="password" />
	                        </div>
	                    </div>
	                    <div class=>
	                    <div class="controls">
	                        <input type="submit" class="btn btn-primary" value="登录" />
	                    </div>
	                </form>
	            </div>
	        </div>
	    </div>
	    </div>
	</body>
</html>