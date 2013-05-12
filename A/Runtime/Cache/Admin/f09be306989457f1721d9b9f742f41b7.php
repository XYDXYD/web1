<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>管理用户</title>
		<link rel="stylesheet" type="text/css" href="__PUBLIC__/bootstrap/css/bootstrap.css" />
	</head>
	
	<body>
	    <div class="container">
	        <div class="row">
	            <div class="span12">
	                <div class="container" id="header">
<div class="row">
    <div class="span12"><p>欢迎登录后台管理系统</p></div>
</div>
<div class="row">
    <div class="span12">
        <ul class="nav nav-tabs pull-right">
            <li class="<?php echo ($classes['index']); ?>"><a href="__GROUP__/Index/index">管理首页</a></li>
            <li class="<?php echo ($classes['award']); ?>"><a href="__GROUP__/Award/index">管理奖项</a></li>
            <li class="<?php echo ($classes['activity']); ?>"><a href="__GROUP__/Activity/index">管理活动</a></li>
	        <li class="<?php echo ($classes['article']); ?>"><a href="__GROUP__/Article/index">管理文章</a></li>
	        <li class="<?php echo ($classes['file']); ?>"><a href="__GROUP__/File/index">管理文件</a></li>
	        <li class="<?php echo ($classes['user']); ?>"><a href="__GROUP__/User/index">管理用户</a></li>
	        <li class="<?php echo ($classes['about']); ?>"><a href="__GROUP__/Index/about">关于我们</a></li>
	        <li class="<?php echo ($classes['repasswd']); ?>"><a href="__GROUP__/Repasswd">更改密码</a></li>
	        <li><a href="__GROUP__/Index/logout">退出管理</a></li>
	    </ul>
	</div>
</div>

	            </div>
	            <div class="span10 offset1">
	                <table class="table table-condensed">
                        <tr>
                            <th>单位</th>
                            <th>姓名</th>
                            <th>职位</th>
                            <th>办公电话</th>
                            <th>手机</th>
                            <th>邮箱</th>
                        </tr>
                        <?php if(is_array($users)): $i = 0; $__LIST__ = $users;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$record): $mod = ($i % 2 );++$i;?><tr>
                            <td><?php echo ($record["unit"]); ?></td>
                            <td><?php echo ($record["name"]); ?></td>
                            <td><?php echo ($record["position"]); ?></td>
                            <td><?php echo ($record["office_number"]); ?></td>
                            <td><?php echo ($record["phone_number"]); ?></td>
                            <td><?php echo ($record["email"]); ?></td>
                        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                    </table>
	            </div>
	        </div>
	    </div>
	</body>
</html>