<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	</head>
	
	<body>
        <h1><?php echo ($article["title"]); ?></h1>
        作者:<?php echo ($article["author"]); ?></br>
        日期:<?php echo ($article["date"]); ?></br>
        内容:<?php echo ($article["content"]); ?></br>

    </body>
</html>