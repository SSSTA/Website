<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>来访一览</title>
    <link  href="/sssta/1/Public/css/bootstrap.min.css" rel="stylesheet">
    <script src="/sssta/1/Public/js/jquery.min.js"></script>
    <script src="/sssta/1/Public/js/bootstrap.min.js"></script>

</head>
<body>
<div class="container">
	<h2>以下是时间倒序的来访信息</h2>
	<?php if(is_array($dat)): $i = 0; $__LIST__ = $dat;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><blockquote>
			<p><?php echo ($vo["content"]); ?></p>
			<footer>
				<ul class="list-unstyled">
					<li>邮箱 <?php echo ($vo["email"]); ?></li>
					<li>电话 <?php echo ($vo["phone"]); ?></li>
					<li>ＱＱ <?php echo ($vo["qq"]); ?></li>
				</ul>
			</footer>
		</blockquote><?php endforeach; endif; else: echo "" ;endif; ?>
	<hr/>
	<p>&copy; 西电自媒体工作室 2014</p>
</div>
</body>
</html>