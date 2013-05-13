<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>管理奖项</title>
		<link rel="stylesheet" type="text/css" href="__PUBLIC__/bootstrap/css/bootstrap.css" />
	</head>
	
	<body>
	<body>
	    <div class="container">
	    <div class="row">
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
	        <li class="<?php echo ($classes['file']); ?>"><a href="__GROUP__/File/index">管理文件</a></li>
	        <li class="<?php echo ($classes['activity']); ?>"><a href="__GROUP__/Activity/index">管理活动</a></li>
	        <li class="<?php echo ($classes['user']); ?>"><a href="__GROUP__/User/index">管理用户</a></li>
	        <li class="<?php echo ($classes['about']); ?>"><a href="__GROUP__/Index/about">关于我们</a></li>
	        <li class="<?php echo ($classes['repasswd']); ?>"><a href="__GROUP__/Repasswd">更改密码</a></li>
	        <li><a href="__GROUP__/Index/logout">退出管理</a></li>
	    </ul>
	</div>
</div>

	        <div class="row">
	            <div class="span2 offset1">
	                <div class="tabable tabs-left">
                        <ul class="nav nav-tabs">
                            <li class="<?php echo ($add); ?>"><a href="__URL__/edit/id/0">添加奖项</a></li>
                            <?php if(is_array($award_type)): $i = 0; $__LIST__ = $award_type;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$record): $mod = ($i % 2 );++$i;?><li class="<?php echo ($record['active']); ?>"><a href="__URL__/edit/id/<?php echo ($record["at_id"]); ?>"><?php echo ($record["name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                    </div>
	            </div>
	            <div class="span6">
	                <form method="post" action="__URL__/update">
	                    <filedset>
	                    <legend><?php echo ($award_info['at_id']==''?'添加':'修改'); ?>奖项</legend>
	                    <input type="hidden" name="at_id" value="<?php echo ($award_info['at_id']); ?>" />
	                    <div class="span6">
	                        <label for="name">名称</label>
	                        <input type="text" name="name" class="span6" id="name" value="<?php echo ($award_info['name']); ?>" />
	                    </div>
	                    <div class="span6">
	                        <label for="form">申请表单</label>
	                        <textarea name="form" class="span6" id="form" style="height:300px"><?php echo ($award_info['form']); ?></textarea>
	                    </div>
	                    <div class="span6">
		                    <br /><input type="submit" class="btn btn-primary" value="确定" />
		                    <?php if(($privilege) == "0"): ?><a class="btn btn-danger pull" href="__URL__/del/id/<?php echo ($award_info['at_id']); ?>">删除</a><?php endif; ?>
		                </div>
		                </fieldset>
	                </form>
	            </div>
	        </div>
	    </div>
	</body>
</html>