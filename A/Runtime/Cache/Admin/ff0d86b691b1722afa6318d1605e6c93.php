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
</div>

	            <div class="span12">
	                <table class="table table-condensed">
                        <tr>
                            <th>学校全称</th>
                            <th>联系地址</th>
                            <th>邮政编码</th>
                            <th><small>常任理事</small></th>
                            <th>联系电话</th>
                            <th><small>允许登录<small></th>
                            <th colspan="2"><a class="btn btn-mini btn-primary" href="__URL__/edit">添加</a></th>
                        </tr>
                        <?php if(is_array($user)): $i = 0; $__LIST__ = $user;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$record): $mod = ($i % 2 );++$i;?><tr>
                            <td><a href="__URL__/info/id/<?php echo ($record["u_id"]); ?>"><?php echo ($record["fullname"]); ?></a></td>
                            <td><?php echo ($record["address"]); ?></td>
                            <td><?php echo ($record["postcode"]); ?></td>
                            <td><?php echo ($record['is_director']?'是':'否'); ?></td>
                            <td><?php echo ($record["office_number"]); ?></td>
                            <td><?php echo ($record['status']?'是':'否'); ?></td>
                            <td><a class="btn btn-mini btn-info" href="__URL__/edit/id/<?php echo ($record["u_id"]); ?>">修改</a>
                            <?php if(($privilege) == "0"): ?><td><a class="btn btn-mini btn-danger" href="__URL__/delete/id/<?php echo ($record["u_id"]); ?>">删除</a></td><?php endif; ?>
                        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                    </table>
                    <div class="row">
                        <div class="span5 offset1"><a href="__URL__/info">所有联系人</a></div>
                        <div class="span6"><?php echo ($page); ?></div>
                    </div>
	            </div>
	        </div>
	    </div>
	</body>
</html>