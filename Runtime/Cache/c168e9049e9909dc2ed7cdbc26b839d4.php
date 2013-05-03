<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	</head>
	
	<body>
        <table>
            <tr>
                <th>标题</th>
                <th>作者</th>
                <th>日期</th>
                <th>类型</th>
                <th colspan=3><a href="__URL__/edit">添加</a></th>
            </tr>
            <?php if(is_array($article)): $i = 0; $__LIST__ = $article;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$record): $mod = ($i % 2 );++$i;?><tr>
                <td><?php echo ($record["title"]); ?></td>
                <td><?php echo ($record["author"]); ?></td>
                <td><?php echo ($record["date"]); ?></td>
                <td><?php echo ($record["type"]); ?></td>
                <td><a  href="__URL__/read/id/<?php echo ($record["a_id"]); ?>">查看</a></td>
                <td><a  href="__URL__/edit/id/<?php echo ($record["a_id"]); ?>">编辑</a></td>
                <td><a  href="__URL__/delete/id/<?php echo ($record["a_id"]); ?>">删除</a></td>
            </tr><?php endforeach; endif; else: echo "" ;endif; ?>

        </table>
    </body>
</html>