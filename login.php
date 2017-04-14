<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>后台登录页面</title>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-table.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/member.css">
</head>

<body style="background: url('css/bg/pbbj.jpg') no-repeat;background-size: cover;min-width: 400px;">

    <div class="container text-center">
        <div style="background-color: rgba(255,255,255,0.6);padding: 50px 100px;margin:160px auto;max-width: 500px;min-width: 400px;box-shadow: 1px 1px 5px #ffffff;border-radius:10px;">
            <h1 style="margin-bottom: 20px"><img src="images/satxlogo.png" style="height: 80px"></h1>
            <form class="form" id="form-login" style="line-height: 34px;">
                <div class="form-group row">
                    <div class="has-feedback has-error" id="inputuser"> 
                        <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
                          <input class="form-control" type="text" placeholder="请输入您的账户">
                          <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="has-feedback has-success" id="inputpass">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
                          <input class="form-control" type="password" placeholder="请输入密码">
                          <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
                        </div>
                        
                    </div>
                </div>

                
                <div class="form-group row">
                    <div class="has-feedback">
                        <button type="button" class="btn btn-success btn-block btn-lg" id="inputlogin"><span class="glyphicon glyphicon-log-in"></span> 登录</button>
                     
                    </div>
                </div>
            </form>

            <script type="text/javascript">
                    $('#inputlogin').click(function(){
                        $('#inputuser i').addClass('fa-spin')
                    })
            </script>
        </div>
    </div>

</body>
</html>