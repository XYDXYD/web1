<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>编辑文章</title>
		<link rel="stylesheet" type="text/css" href="__PUBLIC__/kindeditor/themes/default/default.css" />
	    <script type="text/javascript" src="__PUBLIC__/js/jquery-1.9.1.min.js"></script>
	    <script type="text/javascript" src="__PUBLIC__/kindeditor/kindeditor-min.js"></script>
	    <script type="text/javascript" src="__PUBLIC__/kindeditor/lang/zh_CN.js"></script>
	    <link rel="stylesheet" type="text/css" href="__PUBLIC__/bootstrap/css/bootstrap.css" />
	    <script>
	        $(function(){
	            var editor = KindEditor.create('textarea[name="content"]',{
		            uploadJson : '__GROUP__/File/upload',
		            fileManagerJson : '__GROUP__/File/manage',
		            allowFileManager : true});
		    });
	    </script>
	</head>
	<body>
	    <div class="container-fluid">
	    <div class="row-fluid">
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
            <li class="<?php echo ($classes['activity']); ?>"><a href="__GROUP__/Activity/index">管理活动</a></li>
	        <li class="<?php echo ($classes['file']); ?>"><a href="__GROUP__/File/index">管理文件</a></li>
	        <li class="<?php echo ($classes['user']); ?>"><a href="__GROUP__/User/index">管理用户</a></li>
	        <li class="<?php echo ($classes['about']); ?>"><a href="__GROUP__/Index/about">关于我们</a></li>
	        <li class="<?php echo ($classes['repasswd']); ?>"><a href="__GROUP__/Repasswd">更改密码</a></li>
	        <li><a href="__GROUP__/Index/logout">退出管理</a></li>
	    </ul>
	</div>
</div>

            <div class="span10 offset1">
                <form method="post" action="__URL__/update">
                    <fieldset>
                        <legend><?php echo ($article['a_id']?'编辑':'添加'); ?>文章</legend>
                            <input type="hidden" name="a_id" value="<?php echo ($article["a_id"]); ?>" />
                            <div class="span12">
                                <label for="title">标题</label>
                                <input type="text" name="title" class="span10 offset1" id ="title" value="<?php echo ($article["title"]); ?>" />
                            </div>
                            <div class="span12">
                                <label>分类</label>
                                <?php if(is_array($type)): $i = 0; $__LIST__ = $type;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$record): $mod = ($i % 2 );++$i;?><label class="checkbox inline"><?php echo ($record['name']); ?>
                                <input type="checkbox" name="type[]" value="<?php echo ($record['at_id']); ?>" <?php echo ($record['checked']); ?> />
                                </label><?php endforeach; endif; else: echo "" ;endif; ?>
                                
                            </div>
                            <div class="span12">
                                <label>相关</label>
                                <label class="radio inline">无
                                <input type="radio" name="label" value="0" <?php echo ($nolabel); ?>/>
                                </label>
                                <?php if(is_array($label)): $i = 0; $__LIST__ = $label;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$record): $mod = ($i % 2 );++$i;?><label class="radio inline">
                                <input type="radio" name="label" value="<?php echo ($record['at_id']); ?>" <?php echo ($record['checked']); ?> /><?php echo ($record['name']); ?>
                                </label><?php endforeach; endif; else: echo "" ;endif; ?>
                                
                            </div>
                            <div class="span12">
                                <br /><label for="content">内容</label>
		                        <textarea name="content" id="content" class="span10 offset1" style="min-width:680px;height:600px"><?php echo ($article["content"]); ?></textarea>
		                    </div>
                            
                            <div class="span12">
		                    <br /><input type="submit" class="btn btn-primary" value="确定" />
		                    </div>
		                </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>