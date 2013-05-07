<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" type="text/css" href="__PUBLIC__/bootstrap/css/bootstrap.min.css" />
	</head>
	
	<body>
	    <div class="container-fluid">
	        
	        <div class="row-fluid">
	            <div class="span3">
	                <div class="well sidebar-nav">
    <ul class="nav nav-list">
	    <li><a href="__GROUP__/Article/index">管理文章</a></li>
	    <li><a href="__GROUP__/File/index">管理文件</a></li>
	    <li><a href="__GROUP__/User/index">管理用户</a></li>
	    <li><a href="__GROUP__/Repasswd">更改密码</a></li>
	    <li><a href="__GROUP__/Index/logout" target="_self">退出</a></li>
	</ul>
</div>

	            </div>
	            <div class="span9">
	                <form method="post" action="__URL__/update">
	                    <input type="hidden" name="u_id" value="<?php echo ($user["u_id"]); ?>">
	                    <label for="username">用户名</label>
	                    <input type="text" name="username" id="username" value="<?php echo ($user["username"]); ?>"/>
	                    <label for="fullname">全称</label>
	                    <input type="text" name="fullname" id="fullname" value="<?php echo ($user["fullname"]); ?>"/>
	                    <label for="passwordA">密码</label>
	                    <input type="password" name="passwordA" id="passwordA" />
	                    <label for="passwordB">确认密码</label>
	                    <input type="password" name="passwordB" id="passwordB" />
	                    <?php if(($user["privilege"]) > "0"): ?><label for="privilege">用户类型</label>
	                    <select name="privilege" id="privilege">
	                        <option value="2" <?php echo ($selected['2']); ?>>普通用户</option>
	                        <option value="1" <?php echo ($selected['1']); ?>>管理员</option>
	                    </select><br /><?php endif; ?>
	                    <input type="submit" class="btn btn-primary" value="确定" />
	                </form>
	            </div>
	        </div>
	        
	    </div>
	    <script type="text/javascript" src="__PUBLIC__/bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>