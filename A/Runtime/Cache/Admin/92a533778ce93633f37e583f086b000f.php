<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>添加文章类型</title>
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

            <div class="span4 offset4">
                <table class="table table-condensed">
                    <tr>
                        <th colspan="2">文件类型列表</th>
                    </tr>
                    <?php if(is_array($article_type)): $i = 0; $__LIST__ = $article_type;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$record): $mod = ($i % 2 );++$i;?><tr>
                        <td><?php echo ($record["name"]); ?></td>
                        <?php if(($privilege) == "0"): ?><td><a class="btn btn-mini btn-danger" href="__URL__/deltype/id/<?php echo ($record["at_id"]); ?>">删除</a></td><?php endif; ?>
                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                </table>
                <form method="post" action="__URL__/addtype">
                    <div class="control-group">
	                    <div class="controls">
	                        <input type="text" name="name" />
	                        <input type="submit" class="btn btn-primary" value="添加" style="vertical-align:5px" />
	                    </div>
	                </div>
                </form>
	        </div>
	        </div>
	    </div>
	</body>
</html>