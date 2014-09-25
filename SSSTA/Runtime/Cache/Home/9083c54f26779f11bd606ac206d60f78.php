<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>科协面试</title>
    <link  href="/sssta/1/Public/css/bootstrap.min.css" rel="stylesheet">
    <script src="/sssta/1/Public/js/jquery.min.js"></script>
    <script src="/sssta/1/Public/js/bootstrap.min.js"></script>
    <style type="text/css">
        body {
            padding-top: 70px;
        }
    </style>

</head>
<body>
<div class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <img src="/sssta/1/Public/pic/logo.jpg" width="50px" height="50px" /><a class="navbar-brand" href="#">西电软院科协</a>
        </div>
        <div class="navbar-collapse collapse">
            <form class="navbar-form navbar-right" role="form">
                <div class="form-group">
                    <input type="text" class="form-control" name="er" id="er" value="<?php echo ($er); ?>" required placeholder="面试官签名">
                    <input type="text" class="form-control" name="id" required placeholder="面试 ID">
                </div>
                <button type="submit" class="btn btn-success">查看简历</button>
            </form>
        </div><!--/.navbar-collapse -->
    </div>
</div>
<div class="container">
	<div class="col-xs-12 col-sm-8">
        <div>
            <div class="col-sm-3">
                <img src="<?php echo ($dat["photourl"]); ?>" alt="照片" class="img-thumbnail" width="200px" height="200px" />
            </div>
            <div class="col-sm-9">
                <div class="lead">
                    <span class="glyphicon glyphicon-list-alt"></span> <?php echo ($dat["id"]); ?>
                    <span class="glyphicon glyphicon-user"></span> <?php echo ($dat["name"]); ?>
                    <small style="color:grey">
                        <?php if(($dat["gender"]) == "0"): ?>♀<?php endif; ?>
                        <?php if(($dat["gender"]) == "1"): ?>♂<?php endif; ?>
                        <?php if(($dat["gender"]) == "2"): ?>?<?php endif; ?>
                    </small>
                </div>
                <div>
                    <span class="glyphicon glyphicon-earphone"></span> <?php echo ($dat["phone"]); ?>　
                    <span class="glyphicon glyphicon-envelope"></span> <?php echo ($dat["email"]); ?>　
                    Ｑ <?php echo ($dat["qq"]); ?>
                </div>
                <br/>
                <div>
                <strong>个人简介</strong>
                <p><?php echo ($dat["selfshow"]); ?></p>
                </div>
            </div>
            <div class="col-sm-12" style="margin-top:10px">
                <strong>参加 <span style="color:red">
                <?php if(($dat["dept"]) == "0"): ?>技术部<?php endif; ?>
                <?php if(($dat["dept"]) == "1"): ?>设计部<?php endif; ?>
                <?php if(($dat["dept"]) == "2"): ?>执行部<?php endif; ?></span> 的面试
                </strong>
                <div>
                    <strong>选择的理由</strong>
                    <p><?php echo ($dat["why"]); ?></p>
                </div>
                <div>
                    <strong>作品或经历</strong>
                    <p><?php echo ($dat["works"]); ?></p>
                </div>
            </div>
        </div>
	</div>
    <div class="col-xs-6 col-sm-4 sidebar-offcanvas" id="sidebar" role="navigation">
        <div class="list-group">
            <a class="list-group-item active">面试得分</a>
            <!--a class="list-group-item">一面
                <div class="btn-group">
                    <button type="button" class="btn btn-default score1" onclick="setScore(1,0)">0</button>
                    <button type="button" class="btn btn-default score1" onclick="setScore(1,1)">1</button>
                    <button type="button" class="btn btn-default score1" onclick="setScore(1,2)">2</button>
                </div>
                <?php echo ($dat["p1"]); ?>
            </a-->
            <a class="list-group-item">一面
                <div class="btn-group">
                    <button type="button" class="btn btn-default score2" onclick="setScore(2,0)">0</button>
                    <button type="button" class="btn btn-default score2" onclick="setScore(2,1)">1</button>
                    <button type="button" class="btn btn-default score2" onclick="setScore(2,2)">2</button>
                    <button type="button" class="btn btn-default score2" onclick="setScore(2,3)">3</button>
                    <button type="button" class="btn btn-default score2" onclick="setScore(2,4)">4</button>
                    <button type="button" class="btn btn-default score2" onclick="setScore(2,5)">5</button>
                </div>
                <?php echo ($dat["p2"]); ?>
            </a>
            <a class="list-group-item">二面
                <div class="btn-group">
                    <button type="button" class="btn btn-default score3" onclick="setScore(3,0)">0</button>
                    <button type="button" class="btn btn-default score3" onclick="setScore(3,1)">1</button>
                    <button type="button" class="btn btn-default score3" onclick="setScore(3,2)">2</button>
                    <button type="button" class="btn btn-default score3" onclick="setScore(3,3)">3</button>
                    <button type="button" class="btn btn-default score3" onclick="setScore(3,4)">4</button>
                    <button type="button" class="btn btn-default score3" onclick="setScore(3,5)">5</button>
                </div>
                <?php echo ($dat["p3"]); ?>
            </a>
            <a class="list-group-item">状态
                <div class="btn-group">
                    <button type="button" class="btn btn-default status" onclick="setScore(4,0)">面试中</button>
                    <button type="button" class="btn btn-default status" onclick="setScore(4,1)">已通过</button>
                    <button type="button" class="btn btn-default status" onclick="setScore(4,2)">被否决</button>
                </div>
                <?php echo ($dat["p4"]); ?>
            </a>
            <a href="javascript:showAppend()" class="list-group-item active">特殊情况 +</a>
            <?php if(is_array($appendList)): $i = 0; $__LIST__ = $appendList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a class="list-group-item"><?php echo ($vo); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
            <script type="text/javascript">
                var c1 = '<?php echo ($dat["c1"]); ?>';
                var c2 = '<?php echo ($dat["c2"]); ?>';
                var c3 = '<?php echo ($dat["c3"]); ?>';
                if(c1 != '') $('.score1:eq(<?php echo ($dat["c1"]); ?>)').addClass('active');
                if(c2 != '') $('.score2:eq(<?php echo ($dat["c2"]); ?>)').addClass('active');
                if(c3 != '') $('.score3:eq(<?php echo ($dat["c3"]); ?>)').addClass('active');

                var c4 = '<?php echo ($dat["c4"]); ?>';
                switch(c4) {
                    case '0':
                        $('.status:eq(<?php echo ($dat["c4"]); ?>)').addClass('active');
                        break;
                    case '1':
                        $('.status:eq(<?php echo ($dat["c4"]); ?>)').addClass('active btn-success');
                        break;
                    case '2':
                        $('.status:eq(<?php echo ($dat["c4"]); ?>)').addClass('active btn-danger');
                        break;
                }

                function setScore(level, score) {
                    window.location = '<?php echo U('Home/Fresh/set')?>?er='+ $('#er').val() +'&id=<?php echo ($dat["id"]); ?>&level=' + level + '&score=' + score;
                }

                function showAppend() {
                    $('[name="er"]').val($('#er').val());
                    $('#modalAppend').modal();
                }
            </script>
        </div>
    </div>
    <div class="col-sm-12">
	<hr/>
	<p>&copy; SSSTA 2014</p>
    </div>
</div>

<!--div class="modal fade" id="modalScore" tabindex="-1" role="dialog" aria-labelledby="labelScore" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
        <form action="<?php echo U('set')?>">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <h4 class="modal-title" id="labelScore">填写分数</h4>
          </div>
          <div class="modal-body">
                <input type="hidden" name="id" value="<?php echo ($dat["id"]); ?>" />
                <input type="hidden" name="level" />
                <input type="number" name="score" class="form-control" required autofocus placeholder="狠狠心判分决定人生和未来吧" />
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
            <button type="submit" class="btn btn-primary">确认打分</button>
          </div>
        </form>
    </div>
  </div>
</div-->

<div class="modal fade" id="modalAppend" tabindex="-1" role="dialog" aria-labelledby="labelScore" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <form action="<?php echo U('Home/Fresh/set')?>">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <h4 class="modal-title" id="labelAppend">填写特殊情况说明</h4>
          </div>
          <div class="modal-body">
                <input type="hidden" name="er" />
                <input type="hidden" name="id" value="<?php echo ($dat["id"]); ?>" />
                <textarea class="form-control" rows="5" name="append" id="inputWhy" autofocus><?php echo ($dat["append"]); ?></textarea>
                <br/>请使用英文半角逗号分隔。
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
            <button type="submit" class="btn btn-primary">确认填写</button>
          </div>
        </form>
    </div>
  </div>
</div>

</body>
</html>