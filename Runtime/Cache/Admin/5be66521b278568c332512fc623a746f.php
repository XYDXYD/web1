<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>编辑用户</title>
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
	            <div class="span8 offset2">
	                <form class="form-horizontal" action="__URL__/update" method="post">
	                    <fieldset>
	                    <legend><?php echo ($user['u_id']?'编辑':'添加'); ?>用户</legend>
	                    
	                    <input type="hidden" name="u_id" value="<?php echo ($user["u_id"]); ?>">
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
	                        <?php if(($user["privilege"]) > "0"): ?><label class="control-label" for="privilege">用户类型</label>
	                        <div class="controls">
	                            <select name="privilege" id="privilege">
	                                <option value="2" <?php echo ($selected['user']); ?>>普通用户</option>
	                                <option value="1" <?php echo ($selected['admin']); ?>>管理员</option>
	                            </select>
	                        </div><?php endif; ?>
	                    </div>
	                    <div class="control-group">
	                        <?php if(($user["privilege"]) > "0"): ?><label class="control-label" for="status">用户状态</label>
	                        <div class="controls">
	                            <select name="status" id="status">
	                                <option value="1" <?php echo ($selected['allow']); ?>>允许登录</option>
	                                <option value="0" <?php echo ($selected['disallow']); ?>>禁止登录</option>
	                            </select>
	                        </div><?php endif; ?>
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