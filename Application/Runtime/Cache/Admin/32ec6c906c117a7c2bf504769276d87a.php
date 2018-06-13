<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Amaze UI Admin index Examples</title>
    <meta name="description" content="这是一个 index 页面">
    <meta name="keywords" content="index">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="icon" type="image/png" href="assets/i/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="assets/i/app-icon72x72@2x.png">
    <meta name="apple-mobile-web-app-title" content="Amaze UI" />
    <script src="/Public/admin/assets/js/echarts.min.js"></script>
    <link rel="stylesheet" href="/Public/admin/assets/css/amazeui.min.css" />
    <link rel="stylesheet" href="/Public/admin/assets/css/amazeui.datatables.min.css" />
    <link rel="stylesheet" href="/Public/admin/assets/css/dataTables.bootstrap.css" />
    <link rel="stylesheet" href="/Public/admin/assets/css/app.css">
    <script src="/Public/admin/assets/js/jquery.min.js"></script>
    <script src="/Public/admin/assets/js/theme.js"></script>

</head>

<body data-type="login" class="theme-white">
    <div class="am-g tpl-g">
        <!-- 风格切换 -->
        <div class="tpl-skiner">
            <div class="tpl-skiner-toggle am-icon-cog">
            </div>
            <div class="tpl-skiner-content">
                <div class="tpl-skiner-content-title">
                    选择主题
                </div>
                <div class="tpl-skiner-content-bar">
                    <span class="skiner-color skiner-white" data-color="theme-white"></span>
                    <span class="skiner-color skiner-black" data-color="theme-black"></span>
                </div>
            </div>
        </div>
        <div class="tpl-login">
            <div class="tpl-login-content">
                <div class="tpl-login-logo">

                </div>



                <form class="am-form tpl-form-line-form">
                    <div class="am-form-group">
                        <input type="text" class="tpl-form-input" id="username" placeholder="请输入账号">

                    </div>

                    <div class="am-form-group">
                        <input type="password" class="tpl-form-input" id="password" placeholder="请输入密码">

                    </div>
                    <div class="am-form-group tpl-login-remember-me">
                        <input id="remember" type="checkbox">
                        <label for="remember">
                        记住密码
                         </label>

                    </div>


                    <div class="am-form-group">

                        <button type="button" class="am-btn am-btn-primary  am-btn-block tpl-btn-bg-color-success tpl-login-btn j-login">提交</button>

                    </div>
                </form>
            </div>
        </div>
    </div>

     <script src="/Public/admin/assets/js/amazeui.min.js"></script>
    <script src="/Public/admin/assets/js/app.js"></script>

    <script type="text/javascript">
          // 提交
            $('.j-login').on('click',function(){

                if(!$('#username').val()) { alert('请输入帐号！'); return}

                if(!$('#password').val()) { alert('请输入密码！'); return}

                var param = {

                     username : $('#username').val(),

                     password : $('#password').val(),

                     remember: $('#remember').is(":checked") ? 1 : 0

                }

                $.ajax({

                    url: "login",

                    data: param,

                    type:'post',

                    success:function(res) {

                        if(res.status == 1){

                            window.location.href = '/Admin//Index/index';

                        } else {

                            alert(res.data)

                        }

                    }

                });

            })

    </script>
</body>

</html>