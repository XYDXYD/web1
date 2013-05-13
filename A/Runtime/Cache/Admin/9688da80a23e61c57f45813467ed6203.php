<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>查看文章</title>
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
            <li class="<?php echo ($classes['article']); ?>"><a href="__GROUP__/Article/index">管理文章</a></li>
            <li class="<?php echo ($classes['award']); ?>"><a href="__GROUP__/Award/index">管理奖项</a></li>
            <li class="<?php echo ($classes['activity']); ?>"><a href="__GROUP__/Activity/index">管理活动</a></li>
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
	                <div class="row">
	                    <h2 class="page-header"><?php echo ($article["title"]); ?></h2>
	                    <div class="span5">
	                    <p>作者：<?php echo ($article["author"]); ?></p>
	                    <p>创建日期：<?php echo (date("Y-m-d H:i", $article["create_time"])); ?><br />
	                       最后修改：<?php echo (date("Y-m-d H:i", $article["last_time"])); ?>
	                    <p>
	                    <p>分类：<?php echo ($article["type"]); ?><p>
	                <hr />
	                </div>
	                    <div class="span5">
	                <?php if($article["status"] == 0): ?><a class="btn btn-large btn-success" href="__URL__/publish/id/<?php echo ($article["a_id"]); ?>">发布</a>
                    <?php else: ?>
                        <a class="btn btn-large btn-warning" href="__URL__/unpublish/id/<?php echo ($article["a_id"]); ?>">撤回</a><?php endif; ?>
                        <a class="btn btn-large btn-info" href="__URL__/edit/id/<?php echo ($article["a_id"]); ?>">编辑</a>
                        <a class="btn btn-large btn-danger" href="__URL__/delete/id/<?php echo ($article["a_id"]); ?>">删除</a>
	                    </div>
	                </div>
                    <?php echo ($article["content"]); ?>
	            </div>
	        </div>
	    </div>
	</body>
</html>