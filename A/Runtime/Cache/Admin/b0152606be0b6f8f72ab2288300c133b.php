<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>管理文章</title>
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
                        <li class="<?php echo ($alltype); ?>"><a href="__URL__/index/order/<?php echo ($order); ?>/type/<?php echo ($record["type"]); ?>">所有文章</a></li>
                        <?php if(is_array($article_type)): $i = 0; $__LIST__ = $article_type;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$record): $mod = ($i % 2 );++$i;?><li class="<?php echo ($record['active']); ?>"><a href="__URL__/index/order/<?php echo ($order); ?>/type/<?php echo ($record["at_id"]); ?>"><?php echo ($record["name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                        <li><a href="__URL__/typeindex">管理类型</a></li>
                        </ul>
                    </div>
	            </div>
	            <div class="span10 offset1">
	                <table class="table table-condensed">
                        <tr>
                            <th>文章标题</th>
                            <th>文章作者</th>
                            <th>状态</th>
                            <th>点击</th>
                            <th colspan="3"><a class="btn btn-mini btn-primary" href="__URL__/edit">添加</a></th>
                        </tr>
                        <?php if(is_array($article)): $i = 0; $__LIST__ = $article;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$record): $mod = ($i % 2 );++$i;?><tr>
                            <td><a  href="__URL__/read/id/<?php echo ($record["a_id"]); ?>"><?php echo ($record["title"]); ?></a></td>
                            <td><?php echo ($record["author"]); ?></td>
                            <td><?php echo ($record['status']=='0'?'未':'已'); ?>发布</td>
                            <td><?php echo ($record["click"]); ?></td>
                            <td><a class="btn btn-mini btn-danger" href="__URL__/delete/id/<?php echo ($record["a_id"]); ?>">删除</a></td>
                            <td><a class="btn btn-mini btn-info" href="__URL__/edit/id/<?php echo ($record["a_id"]); ?>">编辑</a></td>
                            <td><?php if($record["status"] == 0): ?><a class="btn btn-mini btn-success" href="__URL__/publish/id/<?php echo ($record["a_id"]); ?>">发布</a>
                                <?php else: ?>
                                <a class="btn btn-mini btn-warning" href="__URL__/unpublish/id/<?php echo ($record["a_id"]); ?>">撤回</a><?php endif; ?>
                            </td>
                        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                        
                    </table>
                    <div class="row">
                        <div class="span5">
                            <span>排序:</span>
                            <a class="btn btn-mini btn-inverse" href="__URL__/index/order/last_time desc/type/<?php echo ($type); ?>">最后修改</a>
                            <a class="btn btn-mini btn-inverse" href="__URL__/index/order/create_time desc/type/<?php echo ($type); ?>">创建时间</a>
                            <a class="btn btn-mini btn-inverse" href="__URL__/index/order/status/type/<?php echo ($type); ?>">发布状态</a>
                        </div>
                        <div class="span5"><?php echo ($page); ?></div>
                    </div>
                </div>
	        </div>
	        </div>
	    </div>
	</body>
</html>