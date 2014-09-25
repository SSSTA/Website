<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>申请成功</title>
    <link  href="/sssta/1/Public/css/bootstrap.min.css" rel="stylesheet">
    <script src="/sssta/1/Public/js/jquery.min.js"></script>
    <script src="/sssta/1/Public/js/bootstrap.min.js"></script>

</head>
<body>
<div class="container">
	<h2>申请成功 :) </h2>
	<blockquote>
		<p class="lead">我们已经收到了你的个人申请，你的 <strong>面试ID 为 <span style="color:red;"><?php echo ($id); ?></span></strong> 请务必备忘！该页可收藏以备浏览。</p>

		<p>以下是有关面试的一些重要信息：</p>
		<ul class="list-unstyled">
			<li>时间 2014/9/* 18:30～21:30</li>
			<li>地点 G-302</li>
		</ul>

		<footer>
			<p>虽然有些遥远，但请在时限内赶到现场，其时将随时可以开始面试。在现场我们将依据你提供的“面试ID”来获取你的简历。提问将包括但不限于表中的各种问题，但也无需紧张，你只需要展现最真实的自我。</p>
		</footer>
	</blockquote>
	<hr/>
	<p>&copy; SSSTA 2014</p>
</div>
</body>
</html>