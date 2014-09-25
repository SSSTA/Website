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
	<h1>西电自媒体工作室发放睿思邀请码啦！</h1>
    <p>
	    本次睿思邀请码只向13级本科生发放，每个学号<b style="color:red">只可领取一次</b>。<br/>
	    睿思邀请码为西电睿思团队免费发放，请大家遵守睿思相关规定，保证不把申请到的邀请码用于睿思虚拟积分和金钱交易，并感谢赠送邀请码的睿思前辈！
    </p>
    <form method="GET" action="<?php echo U('rscheck');?>">
    	<input type="text" name="sid" value="" requried placeholder="学号" /><br/>
    	<input type="text" name="name" value="" requried placeholder="姓名" /><br/>
    	<input type="submit" value="我要睿思邀请码" />
    </form>
</center>
</body>
</html>