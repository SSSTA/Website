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
    <?php if(($used) == "0"): ?><h1>恭喜你获得邀请码！</h1>
        <p>
            <a href="http://rs.xidian.edu.cn/home.php?mod=invite&id=<?php echo ($rs["id"]); ?>&c=<?php echo ($rs["c"]); ?>">单击这里直接注册</a>，或复制以下链接：http://rs.xidian.edu.cn/home.php?mod=invite&id=<?php echo ($rs["id"]); ?>&c=<?php echo ($rs["c"]); ?>
        </p>
    <?php else: ?>
    	<h1>你已经申请过了哟，请不要重复申请！</h1>
        <p>
    	    本次睿思邀请码只向13级本科生发放，每个学号<b style="color:red">只可领取一次</b>。<br/>
    	    睿思邀请码为西电睿思团队免费发放，请大家遵守睿思相关规定，保证不把申请到的邀请码用于睿思虚拟积分和金钱交易，并感谢赠送邀请码的睿思前辈！
        </p><?php endif; ?>
</center>
</body>
</html>