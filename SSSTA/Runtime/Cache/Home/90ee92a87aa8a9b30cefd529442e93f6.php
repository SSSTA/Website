<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>申请成功</title>
</head>
<body>
<div>
	<h2 style="margin-left: 5px">科协欢迎你</h2>
	<blockquote style="margin-left: 5px; padding-left: 10px; border-left: 2px solid #31708f">
		<p>我们已经收到了你的个人申请，你的<strong> 面试ID 为 <span style="color:red;"><?php echo ($id); ?></span></strong> 请牢记！<br/>该页地址可保存、收藏以备浏览。</p>

		<p>以下是有关面试的一些重要信息：</p>
		<ul>
			<li>面试ID <?php echo ($id); ?></li>
			<li>时间 2014/9/9 16:30～22:00</li>
			<li>地点 G-302</li>
		</ul>

		<footer>
			<p>虽然有些遥远，但请在时限内赶到现场，其时将随时可以开始面试。在现场我们将依据你提供的<strong style="color: red;">“面试ID”</strong>来获取你的简历。提问将包括但不限于表中的各种问题，但也无需紧张，你只需要展现最真实的自我。</p>
		</footer>
	</blockquote>
	<hr/>
	<p>&copy; SSSTA 2014</p>
</div>
</body>
</html>