<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" href="__ROOT__/Common/kindeditor/themes/default/default.css" />
		<link rel="stylesheet" href="__ROOT__/Common/style/edit.css" />
	    <script charset="utf-8" src="__ROOT__/Common/jquery/jquery-1.9.1.min.js"></script>
	    <script charset="utf-8" src="__ROOT__/Common/kindeditor/kindeditor-min.js"></script>
	    <script charset="utf-8" src="__ROOT__/Common/kindeditor/lang/zh_CN.js"></script>
	    <script>
	        $(function(){
	            var editor = KindEditor.create('textarea[name="content"]',{
		            uploadJson : '__APP__/File/upload',
		            fileManagerJson : '__APP__/File/manage',
		            allowFileManager : true});
		    });
	    </script>
	</head>
	<body>
        <form method="post" action="__URL__/update">
            <input type="hidden" name="a_id" value="<?php echo ($article["a_id"]); ?>" />
            标题：<input type="text" name="title" value="<?php echo ($article["title"]); ?>" />
            分类：<select name="type" >
                <option value="news" <?php echo ($selected['news']); ?>>新闻</option>
                <option value="notice" <?php echo ($selected['notice']); ?>>通知</option>
            </select>
            <input type="submit" value="确定" />
		    <textarea name="content"><?php echo ($article["content"]); ?></textarea></br>
        </form>
    </body>
</html>