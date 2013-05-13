<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>编辑活动</title>
	    <link rel="stylesheet" type="text/css" href="__PUBLIC__/bootstrap/css/bootstrap.css" />
	</head>
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

            <div class="span8 offset2">
                <form class="form-horizontal" method="post" action="__URL__/update">
                    <fieldset>
                        <legend><?php echo ($activity['ac_id']?'编辑':'添加'); ?>活动</legend>
                            <input type="hidden" name="ac_id" value="<?php echo ($activity["ac_id"]); ?>" />
                            <div class="control-group">
	                        <label class="control-label" for="name">活动名称</label>
	                        <div class="controls">
	                            <input type="text" name="name" id="name" value="<?php echo ($activity["name"]); ?>" />
	                        </div>
	                    </div>
	                    <div class="control-group">
	                        <label class="control-label" for="address">活动地点</label>
	                        <div class="controls">
	                            <input type="text" name="address" id="address" value="<?php echo ($activity["address"]); ?>"/>
	                        </div>
	                    </div>
	                    <div class="control-group">
	                        <label class="control-label" for="host">活动主办方</label>
	                        <div class="controls">
	                            <input type="text" name="host" id="host" value="<?php echo ($activity["host"]); ?>" />
	                        </div>
	                    </div>
	                    <div class="control-group">
	                        <label class="control-label" for="start_time">开始时间</label>
	                        <div class="controls">
	                            <input type="text" name="start_time" id="start_time" value="<?php echo ($activity["start_time"]); ?>" />
	                        </div>
	                    </div>
	                    <div class="control-group">
	                        <label class="control-label" for="end_time">结束时间</label>
	                        <div class="controls">
	                            <input type="text" name="end_time" id="end_time" value="<?php echo ($activity["end_time"]); ?>" />
	                        </div>
	                    </div>
	                    <div class="control-group">
	                        <label class="control-label" for="deadline">报名截至时间</label>
	                        <div class="controls inline">
	                            <input type="text" name="deadline" id="deadline" value="<?php echo (date('Y-m-d H:i', $activity["deadline"])); ?>" />
	                        </div>
	                    </div>
	                    <div class="control-group">
	                        <label class="control-label" for="desc">活动简介</label>
	                        <div class="controls inline">
	                            <textarea name="desc" id="desc" style="height:100px"><?php echo ($activity["desc"]); ?></textarea>
	                        </div>
	                    </div>
	                    <div class="controls">
	                        <input type="submit" class="btn btn-primary" value="确定" />
	                    </div>
		                    </div>
		                </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>