<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>管理文件</title>
		<link rel="stylesheet" type="text/css" href="__PUBLIC__/bootstrap/css/bootstrap.min.css" />
	</head>
	
	<body>
	    <div class="container">
	        <div class="row">
	            <div class="span12">
	                <div class="container" id="header">
<div class="row">
    <div class="span12 offset1"><p>欢迎登录后台管理系统</p></div>
</div>
<div class="row">
    <div class="span12">
        <ul class="nav nav-tabs pull-right">
            <li class="<?php echo ($classes['activity']); ?>"><a href="__GROUP__/Activity/index">管理活动</a></li>
	        <li class="<?php echo ($classes['article']); ?>"><a href="__GROUP__/Article/index">管理文章</a></li>
	        <li class="<?php echo ($classes['file']); ?>"><a href="__GROUP__/File/index">管理文件</a></li>
	        <li class="<?php echo ($classes['check']); ?>"><a href="__GROUP__/Index/check">查看申请</a></li>
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
	                        <th>文件名</th>
	                        <th>上传者</th>
	                        <th>上传日期</th>
	                        <th>文件大小</th>
	                        <th>操作</th>
	                    </tr>
	                    <?php if(is_array($file)): $i = 0; $__LIST__ = $file;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$record): $mod = ($i % 2 );++$i;?><tr>
	                        <td><a href="/<?php echo ($record["savepath"]); echo ($record["savename"]); ?>"><?php echo ($record["name"]); ?></a></td>
	                        <td><?php echo ($record["fullname"]); ?></td>
	                        <td><?php echo ($record["date"]); ?></td>
	                        <td><?php echo ($record["size"]); ?></td>
	                        <td><a class="btn btn-mini btn-danger" href="__URL__/delete/id/<?php echo ($record["f_id"]); ?>">删除</a></td>
	                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
	        
	                </table>
	            </div>
	        </div>
	    </div>
	</body>
</html>