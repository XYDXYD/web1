<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" type="text/css" href="__PUBLIC__/bootstrap/css/bootstrap.min.css" />
	</head>
	
	<body>
	    <div class="container-fluid">
	        WELCOME

	        <div class="row-fluid">
	            <div class="span3">
	                <div class="well sidebar-nav">
    <ul class="nav nav-list">
	    <li><a href="__GROUP__/Article/index">管理文章</a></li>
	    <li><a href="__GROUP__/File/index">管理文件</a></li>
	    <li><a href="__GROUP__/User/index">管理用户</a></li>
	    <li><a href="__GROUP__/Repasswd">更改密码</a></li>
	    <li><a href="__GROUP__/Index/logout" target="_self">退出</a></li>
	</ul>
</div>

	            </div>
	            <div class="span9">
	                <table class="table table-condensed">
	                    <tr>
	                        <th>文件名</th>
	                        <th>上传日期</th>
	                        <th>文件大小</th>
	                        <th>操作</th>
	                    </tr>
	                    <?php if(is_array($file)): $i = 0; $__LIST__ = $file;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$record): $mod = ($i % 2 );++$i;?><tr>
	                        <td><a href="/<?php echo ($record["savepath"]); echo ($record["savename"]); ?>"><?php echo ($record["name"]); ?></a></td>
	                        <td><?php echo ($record["date"]); ?></td>
	                        <td><?php echo ($record["size"]); ?></td>
	                        <td><a href="__URL__/delete/id/<?php echo ($record["f_id"]); ?>">删除</a></td>
	                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
	        
	                </table>
	            </div>
	        </div>
	        <hr />
<div class="text-center">
    <div class="container">
        <p class="muted credit"><a href="">中山大学计算机协会</a>版权所有</p>
    </div>
</div>

	    </div>
	    <script type="text/javascript" src="__PUBLIC__/bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>