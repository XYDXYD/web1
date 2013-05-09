<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>管理用户</title>
		<link rel="stylesheet" type="text/css" href="__PUBLIC__/bootstrap/css/bootstrap.min.css" />
	</head>
	
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
	                <table class="table table-condensed">
                        <tr>
                            <th>用户名</th>
                            <th>全称</th>
                            <th>最后登录</th>
                            <th>用户状态</th>
                            <th><a class="btn btn-mini btn-primary" href="__URL__/edit">添加</a></th>
                        </tr>
                        <?php if(is_array($user)): $i = 0; $__LIST__ = $user;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$record): $mod = ($i % 2 );++$i;?><tr>
                            <td><?php echo ($record["username"]); ?></td>
                            <td><?php echo ($record["fullname"]); ?></td>
                            <td><?php echo (date('Y-m-d H:i', $record["last_login"])); ?></td>
                            <td><?php echo ($record['status']?'允许登录':'禁止登录'); ?></td>
                            <td><a class="btn btn-mini btn-info" href="__URL__/edit/id/<?php echo ($record["u_id"]); ?>">修改</a>
                                <a class="btn btn-mini btn-warning" href="__URL__/delete/id/<?php echo ($record["u_id"]); ?>">删除</a></td>
                        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                    </table>
	            </div>
	        </div>
	    </div>
	</body>
</html>