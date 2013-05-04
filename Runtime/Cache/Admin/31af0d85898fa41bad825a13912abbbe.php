<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	</head>
	
	<body>
	    <form method="post" action="__URL__/update">
	        <input type="hidden" name="u_id" value="<?php echo ($user["u_id"]); ?>">
	        用户名：<input type="text" name="username" value="<?php echo ($user["username"]); ?>"/><br />
	        全称：<input type="text" name="fullname" value="<?php echo ($user["fullname"]); ?>"/><br />
	        密码：<input type="text" name="password" /><br />
	        <select name="group">
	            <option value="user" <?php echo ($selected['user']); ?>>普通用户</option>
	            <option value="admin" <?php echo ($selected['admin']); ?>>管理员</option>
	        </select>
	        <input type="submit" value="确定" />
	    </form>
	</body>
</html>