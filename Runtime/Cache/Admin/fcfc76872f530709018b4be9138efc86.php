<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	</head>
	
	<body>
	    <table>
            <tr>
                <th>用户名</th>
                <th>全称</th>
                <th>组别</th>
                <th colspan=2><a href="__URL__/edit">添加</a></th>
            </tr>
            <?php if(is_array($user)): $i = 0; $__LIST__ = $user;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$record): $mod = ($i % 2 );++$i;?><tr>
                <td><?php echo ($record["username"]); ?></td>
                <td><?php echo ($record["fullname"]); ?></td>
                <td><?php echo ($record["group"]); ?></td>
                <td><a href="__URL__/edit/id/<?php echo ($record["u_id"]); ?>">修改</a></td>
                <td><a href="__URL__/delete/id/<?php echo ($record["u_id"]); ?>">删除</a></td>
            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
	</body>
</html>