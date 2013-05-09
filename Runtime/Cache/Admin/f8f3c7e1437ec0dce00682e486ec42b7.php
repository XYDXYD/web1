<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>编辑文章</title>
		<link rel="stylesheet" type="text/css" href="__PUBLIC__/kindeditor/themes/default/default.css" />
	    <script type="text/javascript" src="__PUBLIC__/js/jquery-1.9.1.min.js"></script>
	    <script type="text/javascript" src="__PUBLIC__/kindeditor/kindeditor-min.js"></script>
	    <script type="text/javascript" src="__PUBLIC__/kindeditor/lang/zh_CN.js"></script>
	    <link rel="stylesheet" type="text/css" href="__PUBLIC__/bootstrap/css/bootstrap.min.css" />
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
            <div class="span10 offset1">
                <form method="post" action="__URL__/update">
                    <fieldset>
                        <legend><?php echo ($article['a_id']?'编辑':'添加'); ?>文章</legend>
                        
                            <div class="span12">
                                <input type="hidden" name="a_id" value="<?php echo ($article["a_id"]); ?>" />
                                <label class="inline" for="title">标题</label>
                                <input type="text" name="title" class="span8" id ="title" value="<?php echo ($article["title"]); ?>" />
                            </div>
                            <div class="span12">
                                <span class="help-block">标签</span>
		                        <label class="checkbox inline">
                                <input type="checkbox" id="news0" name="type[]" value="news0" <?php echo ($checked['news0']); ?> />A
                                </label>
                                <label class="checkbox inline">
                                <input type="checkbox" id="news1" name="type[]" value="news1" <?php echo ($checked['news1']); ?> />B
                                </label>
                                <label class="checkbox inline">
                                <input type="checkbox" id="news2" name="type[]" value="news2" <?php echo ($checked['news2']); ?> />C
                                </label>
                                <label class="checkbox inline">
                                <input type="checkbox" id="news3" name="type[]" value="news3" <?php echo ($checked['news3']); ?> />D
                                </label>
                                <label class="checkbox inline">
                                <input type="checkbox" id="news4" name="type[]" value="news4" <?php echo ($checked['news4']); ?> />E
                                </label>
                            </div>
                            <div class="span12">
                            <label for="content">内容</label>
		                    <textarea name="content" id="content" style="width:670px"><?php echo ($article["content"]); ?></textarea></br>
		                    
		                    <input type="submit" class="btn btn-primary" value="确定" />
		                    </div>
		                </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>