<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/sssta/1/Public/icon.jpg">

    <title>西电软院科协</title>

    <!-- Bootstrap core CSS -->
    <link href="/sssta/1/Public/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <style type="text/css">
        body {
            padding-top: 50px;
            padding-bottom: 20px;
        }
    </style>

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="http://v3.bootcss.com/assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <img src="/sssta/1/Public/icon.jpg" width="50px" height="50px" />
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="<?php echo U('/Home/Index')?>">主页</a></li>
                <li><a href="<?php echo U('/Home/Fresh') ?>">招新专栏</a></li>
                <li><a href="<?php echo U('/Home/People') ?>">人物志</a></li>
                <li><a href="<?php echo U('/Home/Event') ?>">纪念墙</a></li>
                <li><a href="<?php echo U('/Home/Message')?>">留言板</a></li>
                <li><a href="<?php echo U('/Home/About') ?>">关于科协</a></li>
            </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
        <div class="container">
            <h1>Coding the World</h1>
            <p>..</p>
            <p><a class="btn btn-primary btn-lg" role="button">在这里查看招新专栏 &raquo;</a></p>
        </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
          <h2>技术部</h2>
          <p>我们是一个纯粹的技术组织，<br/>我们对技术充满热情，<br/>我们对产品一丝不苟，<br/>我们对细节精益求精。</p>
          <p><a class="btn btn-default" href="<?php echo U('/Home/Fresh/bra1')?>" role="button">查看更多 &raquo;</a></p>
        </div>
        <div class="col-md-4">
          <h2>媒体部</h2>
          <p>..</p>
          <p><a class="btn btn-default" href="<?php echo U('/Home/Fresh/bra2')?>" role="button">查看更多 &raquo;</a></p>
       </div>
        <div class="col-md-4">
          <h2>活动部</h2>
          <p>..</p>
          <p><a class="btn btn-default" href="<?php echo U('/Home/Fresh/bra3')?>" role="button">查看更多 &raquo;</a></p>
        </div>
      </div>

      <hr>

      <footer>
        <p>&copy; SSSTA 2014</p>
      </footer>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/sssta/1/Public/js/jquery.min.js"></script>
    <script src="/sssta/1/Public/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="/sssta/1/Public/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>