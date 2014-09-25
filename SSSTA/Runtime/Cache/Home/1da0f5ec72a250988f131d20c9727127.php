<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>咨询反馈</title>
    <link  href="/sssta/1/Public/css/bootstrap.min.css" rel="stylesheet">
    <script src="/sssta/1/Public/js/jquery.min.js"></script>
    <script src="/sssta/1/Public/js/bootstrap.min.js"></script>

</head>
<body>
<div class="container">
	<div class="header">
		<h3 class="text-muted">对话</h3>
	</div>
	<div class="jumbotron"><?php echo ($dat["content"]); ?></div>
	<?php if(is_array($reply)): $i = 0; $__LIST__ = $reply;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if(($vo["from"]) == "1"): ?><blockquote style="border-left: 3px solid #449d44">
		<?php else: ?>
		<blockquote style="border-left: 0; border-right: 3px solid #449d44; text-align: right;"><?php endif; ?>
			<p class="lead"><?php echo ($vo["text"]); ?></p>
			<footer>
				<?php if(($vo["from"]) == "1"): ?><p><?php echo ($vo["teacher"]); ?></p>
				<?php else: ?>
				<p>我</p><?php endif; ?>
				<p><?php echo ($vo["addtime"]); ?></p>
			</footer>
		</blockquote><?php endforeach; endif; else: echo "" ;endif; ?>
	<hr/>
	<form class="form" role="form" method="POST" action="<?php echo U('Home/Counseling/submit')?>">
		<input type="hidden" name="cid" value="<?php echo ($id); ?>" />
		<input type="hidden" name="from" value="<?php echo ($from); ?>" />
	    <div class="form-group">
		    <textarea class="form-control" rows="3" name="text" id="inputText" placeholder="在这里写要回的话.." required></textarea>
	    </div>
		<?php if(($from) == "1"): ?><div class="form-group">
		    <label for="inputTeacher" class="control-label">署名</label>
			<input type="text" name="teacher" id="inputTeacher" class="form-control" value="<?php echo ($teacher); ?>" style="margin-top:10px" required />
	    </div><?php endif; ?>
	    <div class="form-group">
	  		<button type="submit" class="btn btn-success">回复</button>
			<?php if(($from) == "1"): ?><hr/>
	        <p><b>其他联系方式</b></p>
	        <p>邮箱 <?php echo ($dat["email"]); ?> 电话 <?php echo ($dat["phone"]); ?> ＱＱ <?php echo ($dat["qq"]); ?></p><?php endif; ?>
			<hr/>
	  		<p>&copy; 西电自媒体工作室 2014</p>
	    </div>
	</form>
</div>
</body>
</html>