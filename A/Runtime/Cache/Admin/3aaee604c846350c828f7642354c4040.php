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
</div>

	        <div class="row">
	            <div class="span1">
                    <div class="tabbable tabs-left">
                        <ul class="nav nav-tabs">
                        <li class="<?php echo ($allaward); ?>"><a href="__URL__/index/order/<?php echo ($order); ?>/type/0">所有奖项</a></li>
                        <?php if(is_array($award_type)): $i = 0; $__LIST__ = $award_type;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$record): $mod = ($i % 2 );++$i;?><li class="<?php echo ($record['active']); ?>"><a href="__URL__/index/order/<?php echo ($order); ?>/type/<?php echo ($record["at_id"]); ?>"><?php echo ($record["name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                        <li><a href="__URL__/edit/id/0">管理奖项</a></li>
                        </ul>
                    </div>
	            </div>
	            <div class="span10 offset1">
	                <table class="table table-condensed">
                        <tr>
	                        <th>申请者</th>
	                        <th>类型</th>
	                        <th>申请时间</th>
	                        <th>附加材料</th>
	                        <th>状态</th>
                            <th colspan="2">操作</th>
	                    </tr>
	                    <?php if(is_array($award)): $i = 0; $__LIST__ = $award;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$record): $mod = ($i % 2 );++$i;?><tr>
	                        <td><?php echo ($record["fullname"]); ?></td>
	                        <td><?php echo ($record["type"]); ?></td>
	                        <td><?php echo (date("Y-m-d", $record["date"])); ?></td>
                            <td><a href="__ROOT__/<?php echo ($record["filepath"]); ?>"><?php echo ($record["filename"]); ?></a></td>
	                        <td><?php echo ($record['status']==0?'未':''); ?>通过</td>
	                        <td><a class="btn btn-mini btn-danger" href="__URL__/delete/id/<?php echo ($record["aw_id"]); ?>">删除</a></td>
	                        <td><?php if($record["status"] == 0): ?><a class="btn btn-mini btn-success" href="__URL__/pass/id/<?php echo ($record["aw_id"]); ?>">审核通过</a>
	                            <?php else: ?>
	                            <a class="btn btn-mini btn-warning" href="__URL__/unpass/id/<?php echo ($record["aw_id"]); ?>">撤回通过</a><?php endif; ?>
	                        </td>
	                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>

	                </table>
	                <div class="row">
                        <div class="span5">
                            <span>排序:</span>
                            <a class="btn btn-mini btn-inverse" href="__URL__/index/order/u_id/type/<?php echo ($type); ?>">用户</a>
                            <a class="btn btn-mini btn-inverse" href="__URL__/index/order/date/type/<?php echo ($type); ?>">时间</a>
                            <a class="btn btn-mini btn-inverse" href="__URL__/index/order/at_id/type/<?php echo ($type); ?>">类型</a>
                            <a class="btn btn-mini btn-inverse" href="__URL__/index/order/status/type/<?php echo ($type); ?>">状态</a>
                        </div>
                        <div class="span5"><?php echo ($page); ?></div>
                    </div>
	            </div>
	        </div>
	    </div>
	</body>
</html>