<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	</head>
	
	<body>
        <h1><?php echo ($article["title"]); ?></h1>
        创建时间：<?php echo ($article["create_time"]); ?><br />
        最后修改：<?php echo ($article["last_time"]); ?><br />
        内容：<?php echo ($article["content"]); ?><br />
    </body>
</html>