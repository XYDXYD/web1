<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" href="__PUBLIC__/kindeditor/kindeditor/themes/default/default.css" />
		<link rel="stylesheet" href="__PUBLIC__/kindeditor/style/edit.css" />
	    <script charset="utf-8" src="__PUBLIC__/js/jquery-1.9.1.min.js"></script>
	    <script charset="utf-8" src="__PUBLIC__/kindeditor/kindeditor/kindeditor-min.js"></script>
	    <script charset="utf-8" src="__PUBLIC__/kindeditor/kindeditor/lang/zh_CN.js"></script>
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
        <form method="post" action="__URL__/update">
            <input type="hidden" name="a_id" value="<?php echo ($article["a_id"]); ?>" />
            标题：<input type="text" name="title" value="<?php echo ($article["title"]); ?>" />
            分类：<input type="checkbox" name="type[]" value="news0" <?php echo ($checked['news0']); ?>>新闻</input>
                 <input type="checkbox" name="type[]" value="news1" <?php echo ($checked['news1']); ?>>新闻</input>
                 <input type="checkbox" name="type[]" value="news2" <?php echo ($checked['news2']); ?>>新闻</input>
                 <input type="checkbox" name="type[]" value="news3" <?php echo ($checked['news3']); ?>>新闻</input>
                 <input type="checkbox" name="type[]" value="news4" <?php echo ($checked['news4']); ?>>新闻</input>
            
		    <textarea name="content"><?php echo ($article["content"]); ?></textarea></br>
		    <input type="submit" value="确定" />
        </form>
    </body>
</html>