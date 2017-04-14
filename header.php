
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>后台管理首页</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-table.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/member.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-treeview.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-table.min.js"></script>
    <script type="js/bootstrap-table-locale-all.min.js"></script>
    <script src="js/bootstrap-table-export.js"></script>
    <script src="js/tableExport.min.js"></script>
    <script src="js/bootstrap-table-editable.js"></script>
    <script src="js/bootstrap-datetimepicker.min.js"></script>
    <script src="js/bootstrap-table-zh-CN.min.js"></script>
    <script type="js/bootstrap-table-filter-control.min.js"></script>
    <link rel="stylesheet" href="summernote/summernote.css">
    <script src="summernote/summernote.min.js"></script>
    <script src="js/echarts.js"></script>
    <script type="text/javascript" src="js/bootstrap-treeview.js"></script>
    <!--[if IE]>
    <script src="js/html5shiv.min.js"></script>
    <![endif]-->

    <script type="text/javascript">
        $(document).ready(function () {

            var trigger = $('.hamburger'),
                    overlay = $('.overlay'),
                    isClosed = false;

            trigger.click(function () {
                hamburger_cross();
            });

            function hamburger_cross() {

                if (isClosed == true) {
                    overlay.hide();
                    trigger.removeClass('is-open');
                    trigger.addClass('is-closed');
                    isClosed = false;
                   /* $('.thumbnail').addClass('lightSpeedIn').removeClass('lightSpeedOut')*/

                } else {
                    overlay.show();
                    trigger.removeClass('is-closed');
                    trigger.addClass('is-open');
                    isClosed = true;
                   /* $('.thumbnail').addClass('lightSpeedOut').removeClass('lightSpeedIn')*/
                }
            }

            $('[data-toggle="offcanvas"]').click(function () {
                $('#wrapper').toggleClass('toggled');
            });

            $('.thumbnail').mouseenter(function () {
                $(this).find('.glyphicon').addClass('animated bounce').removeClass('lightSpeedIn')
            }).mouseleave(function () {
                $(this).find('.glyphicon').removeClass('animated bounce')
            })
            /*$('.nav li').click(function(){
                $(this).siblings().removeClass('active');
                $(this).addClass('active');
            })*/
        });
    </script>
</head>

<!-- <body> -->
<body style="background: url('css/bg/pbbj.jpg') repeat;background-size: cover;background-attachment: fixed">
<div id="wrapper">
    <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">确定要退出系统？</h4>
          </div>
          <div class="modal-body">
            ...
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
            <a href="login.php" class="btn btn-primary">退出系统</a>
          </div>
        </div>
      </div>
    </div>
    <nav class="navbar navbar-default navbar-static-top" role="navigation" id="navbar2">
        <div class="container-fluid">
            <div class="navbar-header">
            <a href="index.php"><img style=" height: 50px; margin: 10px;" src="images/satxlogo.png"></a> 
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
                <ul class="nav navbar-nav pull-left">
                    <li class="dropdown text-center">
                        <a href="">
                            <i class="fa fa-address-book-o"></i>后勤管理
                        </a>
                        
                    </li>
                
                    <li class="dropdown text-center">
                         <a href="" data-toggle="modal" data-target='#login-modal'>
                            <i class="fa fa-sign-out fw"></i> 退出系统
                        </a>
                    
                    </li>
                </ul>
                <ul class="nav navbar-nav pull-right">
                   
                    <li class="dropdown text-center">
                        <a href="index.php">
                            <i class="fa fa-home fw"></i> 系统首页
                        </a>
                        <!-- <ul class="dropdown-menu" role="menu">
                            <li class="dropdown-header"></li>
                            <li><a href="memberinfomation.php">会员信息详情</a></li>
                            <li><a href="memberinfomation.php">多条件筛选</a></li>
                            <li><a href="memberinfomation.php">用户增删改查</a></li>
                            <li><a href="memberinfomation.php">黑名单管理</a></li>
                        </ul> -->
                    </li>
                    <li class="dropdown text-center">
                        <a href="memberinfomation.php">
                            <i class="fa fa-fw fa-user-plus"></i> 会员管理
                        </a>
                        <!-- <ul class="dropdown-menu" role="menu">
                            <li class="dropdown-header"></li>
                            <li><a href="memberinfomation.php">会员信息详情</a></li>
                            <li><a href="memberinfomation.php">多条件筛选</a></li>
                            <li><a href="memberinfomation.php">用户增删改查</a></li>
                            <li><a href="memberinfomation.php">黑名单管理</a></li>
                        </ul> -->
                    </li>
                    <li class="dropdown text-center">
                        <a href="keyaccount.php">
                            <i class="fa fa-fw fa-calendar"></i> 客户管理
                        </a>
                       <!--  <ul class="dropdown-menu" role="menu">
                           <li class="dropdown-header"></li>
                           <li><a href="keyaccount.php">手动录入</a></li>
                           <li><a href="keyaccount.php">系统选择</a></li>
                           <li><a href="keyaccount.php">功能同会员信息管理</a></li>
                       </ul> -->
                    </li>
                    <li class="dropdown text-center">
                        <a href="returndata.php">
                            <i class="fa fa-fw fa-folder"></i> 回访管理
                        </a>
                       <!--  <ul class="dropdown-menu" role="menu">
                           <li class="dropdown-header"></li>
                           <li><a href="returndata.php">多条件筛选分配</a></li>
                           <li><a href="returndata2.php">回访资料回收</a></li>
                       </ul> -->
                    </li>
                    <li class="dropdown text-center">
                        <a href="smsmanage.php">
                            <i class="fa fa-fw fa-envelope"></i> 短信管理
                        </a>
                       <!--  <ul class="dropdown-menu" role="menu">
                           <li class="dropdown-header"></li>
                           <li><a href="smsmanage.php">短信模板管理</a></li>
                           <li><a href="smsmanage.php">自定义情景</a></li>
                           <li><a href="smsmanage.php">短信群发</a></li>
                           <li><a href="smsmanage.php">短信收发记录</a></li>
                       </ul> -->
                    </li>
                    <li class="dropdown text-center">
                        <a href="membersetting.php">
                            <i class="fa fa-fw fa-user"></i> 会员设置
                        </a>
                        <!-- <ul class="dropdown-menu" role="menu">
                            <li class="dropdown-header"></li>
                            <li><a href="membersetting.php">会员等级设定</a></li>
                            <li><a href="membersetting.php">折扣比例设定</a></li>
                            <li><a href="membersetting.php">会员积分设定</a></li>
                        </ul> -->
                    </li>
                    <li class="dropdown text-center">
                        <a href="stareport.php">
                            <i class="fa fa-fw fa-bar-chart"></i> 统计报表
                        </a>
                       <!--  <ul class="dropdown-menu" role="menu">
                           <li class="dropdown-header"></li>
                           <li><a href="stareport.php">会员地域统计</a></li>
                           <li><a href="stareport.php">会员等级统计</a></li>
                       </ul> -->
                    </li>
                    <li class="dropdown text-center">
                        <a href="systemsetting.php">
                            <i class="fa fa-fw fa-cog"></i> 系统设置
                        </a>
                        <!-- <ul class="dropdown-menu" role="menu">
                           <li class="dropdown-header"></li>
                            <li><a href="systemsetting.php">用户管理</a></li>
                            <li><a href="systemsetting.php">权限管理</a></li>
                            <li><a href="systemsetting.php">角色管理</a></li>
                            <li><a href="systemsetting.php">系统参数</a></li>
                            <li><a href="systemsetting.php">缓存管理</a></li>
                            <li><a href="systemsetting.php">城市管理</a></li>
                        </ul> -->
                    </li>
                     
                </ul>
                
            </div>
        </div>
    </nav>




    <!-- Page Content -->
    <div id="page-content-wrapper">
