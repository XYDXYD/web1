<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>查看申请</title>
		<link rel="stylesheet" type="text/css" href="__PUBLIC__/bootstrap/css/bootstrap.min.css" />
	</head>
	
	<body>
	<body>
	    <div class="container-fluid">
	    <div class="row-fluid">
	        <div class="span12">
	            <div class="container-fluid" id="header">
<div class="row-fluid">
    <div class="span12 offset1"><p>欢迎登录后台管理系统</p></div>
</div>
<div class="row-fluid">
    <div class="span12">
        <ul class="nav nav-tabs pull-right">
	        <li class=<?php echo ($classes['article']); ?>><a href="__GROUP__/Article/index">管理文章</a></li>
	        <li class=<?php echo ($classes['file']); ?>><a href="__GROUP__/File/index">管理文件</a></li>
	        <li class=<?php echo ($classes['check']); ?>><a href="__GROUP__/Index/check">查看申请</a></li>
	        <?php if(($privilege) == "0"): ?><li class=<?php echo ($classes['user']); ?>><a href="__GROUP__/User/index">管理用户</a></li><?php endif; ?>
	        <li class=<?php echo ($classes['about']); ?>><a href="__GROUP__/Index/about">关于我们</a></li>
	        <li class=<?php echo ($classes['repasswd']); ?>><a href="__GROUP__/Repasswd">更改密码</a></li>
	        <li><a href="__GROUP__/Index/logout">退出管理</a></li>
	    </ul>
	</div>
</div>

	        </div>
	        <div class="span10 offset1">
	            <p>查看最新提交的申请。</p>
	        </div>
	        </div>
	    </div>
	</body>
</html>