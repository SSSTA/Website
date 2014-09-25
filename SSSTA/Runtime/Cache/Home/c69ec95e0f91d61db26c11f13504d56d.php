<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>睿思邀请码</title>
</head>
<body>
<center>
	<h1>发布</h1>
    <form method="POST" action="<?php echo U('rsinput');?>">
    	<textarea name="ip" rows="10" style="width: 1000px"></textarea><br/>
    	<input type="submit" value="发布睿思邀请码" />
    </form>
</center>
</body>
</html>