<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>编辑用户</title>
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
	                <form class="form-horizontal" action="__URL__/update" method="post">
	                    <fieldset>
	                    <legend><?php echo ($user['u_id']?'编辑':'添加'); ?>用户</legend>
	                    
	                    <input type="hidden" name="u_id" value="<?php echo ($user["u_id"]); ?>">
	                    <input type="hidden" name="privilege" value="<?php echo ($user["privilege"]); ?>" />
	                    
	                    <div class="control-group">
	                        <label class="control-label" for="username">用户名</label>
	                        <div class="controls">
	                            <input type="text" name="username" id="username" value="<?php echo ($user["username"]); ?>"/>
	                        </div>
	                    </div>
	                    <div class="control-group">
	                        <label class="control-label" for="fullname">全称</label>
	                        <div class="controls">
	                            <input type="text" name="fullname" id="fullname" value="<?php echo ($user["fullname"]); ?>"/>
	                        </div>
	                    </div>
	                    <div class="control-group">       
	                        <label class="control-label" for="passwordA">密码</label>
	                        <div class="controls">
	                            <input type="password" name="passwordA" id="passwordA" />
	                        </div>
	                    </div>
	                    <div class="control-group">
	                        <label class="control-label" for="passwordB">确认密码</label>
	                        <div class="controls">
	                            <input type="password" name="passwordB" id="passwordB" />
	                        </div>
	                    </div>
	                    
	                    <div class="control-group">
	                        <label class="control-label" for="is_director">是否常任理事</label>
	                        <div class="controls">
	                            <select name="is_director" id="is_director">
	                                <option value="1" <?php echo ($selected['is_director']); ?>>是常任理事</option>
	                                <option value="0" <?php echo ($selected['not_director']); ?>>不是常任理事</option>
	                            </select>
	                        </div>
	                    </div>
	                    <div class="control-group">
	                        <label class="control-label" for="status">用户状态</label>
	                        <div class="controls">
	                            <select name="status" id="status">
	                                <option value="1" <?php echo ($selected['allow']); ?>>允许登录</option>
	                                <option value="0" <?php echo ($selected['disallow']); ?>>禁止登录</option>
	                            </select>
	                        </div>
	                    </div>
	                    <div class="controls">
	                        <input type="submit" class="btn btn-primary" value="确定" />
	                    </div>
	                    </fieldset>
	                </form>
	            </div>
	        </div>
	    </div>
	</body>
</html>