<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	</head>
	
	<body>
	    <table>
	        <tr>
	            <th>文件名</th>
	            <th>上传者</th>
	            <th>上传日期</th>
	            <th>文件类型</th>
	            <th>文件大小</th>
	            <th>下载</th>
	        </tr>
	        <?php if(is_array($file)): $i = 0; $__LIST__ = $file;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$record): $mod = ($i % 2 );++$i;?><tr>
	            <td><?php echo ($record["name"]); ?></td>
	            <td><?php echo ($record["uploader"]); ?></td>
	            <td><?php echo ($record["date"]); ?></td>
	            <td><?php echo ($record["type"]); ?></td>
	            <td><?php echo ($record["size"]); ?></td>
	            <td><a href="<?php echo ($record["path"]); echo ($record["name"]); ?>">下载</a></td>
	        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
	    </table>
	</body>
</html>