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
    <style type="text/css">
		/* Space out content a bit */
		body {
		  padding-top: 20px;
		  padding-bottom: 20px;
		}

		/* Everything but the jumbotron gets side spacing for mobile first views */
		.header,
		.marketing,
		.footer {
		  padding-right: 15px;
		  padding-left: 15px;
		}

		/* Custom page header */
		.header {
		  border-bottom: 1px solid #e5e5e5;
		}
		/* Make the masthead heading the same height as the navigation */
		.header h3 {
		  padding-bottom: 19px;
		  margin-top: 0;
		  margin-bottom: 0;
		  line-height: 40px;
		}

		/* Custom page footer */
		.footer {
		  padding-top: 19px;
		  color: #777;
		  border-top: 1px solid #e5e5e5;
		}

		/* Customize container */
		@media (min-width: 768px) {
		  .container {
		    max-width: 730px;
		  }
		}
		.container-narrow > hr {
		  margin: 30px 0;
		}

		/* Main marketing message and sign up button */
		.jumbotron {
		  text-align: center;
		  border-bottom: 1px solid #e5e5e5;
		}
		.jumbotron .btn {
		  padding: 14px 24px;
		  font-size: 21px;
		}

		/* Supporting marketing content */
		.marketing {
		  margin: 40px 0;
		}
		.marketing p + h4 {
		  margin-top: 28px;
		}

		/* Responsive: Portrait tablets and up */
		@media screen and (min-width: 768px) {
		  /* Remove the padding we set earlier */
		  .header,
		  .marketing,
		  .footer {
		    padding-right: 0;
		    padding-left: 0;
		  }
		  /* Space out the masthead */
		  .header {
		    margin-bottom: 30px;
		  }
		  /* Remove the bottom border on the jumbotron for visual effect */
		  .jumbotron {
		    border-bottom: 0;
		  }
		}
    </style>

</head>
<body>
<div class="container">
	<div class="header">
		<ul class="nav nav-pills pull-right" role="tablist">
		  <li role="presentation" class="active"><button class="btn btn-success" disabled><span class="glyphicon glyphicon-bookmark"></span> 这里是后台查看页面，单击相应标题可回复</button></li>
		</ul>
	<h3 class="text-muted"><span class="glyphicon glyphicon-heart" style="color: red;"></span> 大学生心理咨询平台</h3>
	</div>
	<?php if(is_array($dat)): $i = 0; $__LIST__ = $dat;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><blockquote style="background-color: #F2FFF6; border-left: 5px solid #449d44">
			<p><span class="glyphicon glyphicon-record"></span> <?php echo ($vo["addtime"]); ?> <span class="glyphicon glyphicon-share"></span> <?php echo ($vo["count"]); ?></p>
			<p><?php echo ($vo["content"]); ?></p>
			<p><a href="<?php echo U('Home/Counseling/talk')?>?id=<?php echo ($vo["id"]); ?>&teacher=你的老师"><button class="btn btn-default"><span class="glyphicon glyphicon-pencil"></span> 对话</button></a></p>
		</blockquote><?php endforeach; endif; else: echo "" ;endif; ?>
	<div class="footer">
		<p>&copy; 西电自媒体工作室 2014</p>
	</div>
</div>
</body>
</html>