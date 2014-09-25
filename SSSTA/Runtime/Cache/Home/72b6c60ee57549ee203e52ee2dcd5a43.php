<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <!--
    <link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://cdn.bootcss.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="http://malsup.github.io/jquery.form.js"></script>
    -->
    <link rel="stylesheet" href="/sssta/1/Public/css/bootstrap.min.css">
    <script src="/sssta/1/Public/js/jquery.min.js"></script>
    <script src="/sssta/1/Public/js/bootstrap.min.js"></script>
    <script src="/sssta/1/Public/js/jquery.form.js"></script>

    <title>Kei Passbox</title>
</head>
<body>
<div class="container">
    <div class="table-responsive">
        <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>性别</th>
                <th>姓名</th>
                <th>部门方向</th>
            </tr>
        </thead>
        <tbody>
        <?php if(is_array($dat)): $i = 0; $__LIST__ = $dat;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                <td><a href="#" onclick="window.location.href='<?php echo U('interview');?>?er=<?php echo ($er); ?>&id=<?php echo ($vo["id"]); ?>">
                    <?php echo ($vo["id"]); ?>
                </a></td>
                <td><a href="#" onclick="window.location.href='<?php echo U('interview');?>?er=<?php echo ($er); ?>&id=<?php echo ($vo["id"]); ?>">
                    <?php echo ($vo["gender"]); ?>
                </a></td>
                <td><a href="#" onclick="window.location.href='<?php echo U('interview');?>?er=<?php echo ($er); ?>&id=<?php echo ($vo["id"]); ?>">
                    <?php echo ($vo["name"]); ?>
                </a></td>
                <td><a href="#" onclick="window.location.href='<?php echo U('interview');?>?er=<?php echo ($er); ?>&id=<?php echo ($vo["id"]); ?>">
                    <?php echo ($vo["dept"]); ?>
                </a></td>
            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
        </tbody>
        </table>
    </div>
</div>
</body>
</html>