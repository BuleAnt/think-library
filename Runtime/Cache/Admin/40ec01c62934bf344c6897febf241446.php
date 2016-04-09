<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Bootstrap Admin</title>
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <link rel="stylesheet" type="text/css" href="<?php echo C('DOMAIN');?>./Application/Admin/View/workshop/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo C('DOMAIN');?>./Application/Admin/View/workshop/lib/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo C('DOMAIN');?>./Application/Admin/View/workshop/css/theme.css">
    <link rel="stylesheet" href="<?php echo C('DOMAIN');?>./Application/Admin/View/workshop/lib/font-awesome/css/font-awesome.css">

    <!-- Demo page code -->

    <style type="text/css">
        #line-chart {
            height:300px;
            width:800px;
            margin: 0px auto;
            margin-top: 1em;
        }
        .brand { font-family: georgia, serif; }
        .brand .first {
            color: #ccc;
            font-style: italic;
        }
        .brand .second {
            color: #fff;
            font-weight: bold;
        }
    </style>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

  </head>

  <!--[if lt IE 7 ]> <body class="ie ie6"> <![endif]-->
  <!--[if IE 7 ]> <body class="ie ie7 "> <![endif]-->
  <!--[if IE 8 ]> <body class="ie ie8 "> <![endif]-->
  <!--[if IE 9 ]> <body class="ie ie9 "> <![endif]-->
  <!--[if (gt IE 9)|!(IE)]><!--> 
  <body class=""> 
  <!--<![endif]-->
    
    <div class="navbar">
        <div class="navbar-inner">
            <ul class="nav pull-right"></ul>
            <a class="brand" href="index.html"><span class="first">图书馆</span> <span class="second">后台系统</span></a>
        </div>
    </div>
    <div class="row-fluid">
        <div class="dialog">
            <div class="block">
                <p class="block-heading">管理员登陆</p>
                <div class="block-body">
                    <form class="demoform" action="<?php echo U('');?>">
                        <ul>
                            <li>
                                <label>用户名</label>
                                
                                <input name="loginName" type="text" class="span10"  datatype="*" errormsg="用户名不能为空" sucmsg="&nbsp;"><span class="Validform_checktip"></span>
                            </li>
                            <li>
                                <label>密码</label>
                                <input name="loginPwd" type="password" class="span10"  datatype="*" errormsg="密码不能为空" sucmsg="&nbsp;"><span class="Validform_checktip"></span>
                            </li>
                            <li></li>
                        </ul>
                        <input type="submit" value="登 陆" class="btn btn-primary pull-right" />
                        <label class="remember-me"><input type="checkbox"> 记住我</label>
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>
            <p class="pull-right" style=""><a href="#" target="blank">Theme by Portnine</a></p>
            <p><a href="reset-password.html">忘记了密码?</a></p>
        </div>
    </div>

    <script src="<?php echo C('DOMAIN');?>./Application/Admin/View/workshop/lib/jquery-1.7.2.min.js" type="text/javascript"></script>
    <script src="<?php echo C('DOMAIN');?>./Application/Admin/View/workshop/lib/bootstrap/js/bootstrap.js"></script>
    <script src="<?php echo C('DOMAIN');?>./Application/Admin/View/workshop/js/Validform_v5.3.2_min.js" type="text/javascript"></script>
    <script type="text/javascript">
        $("[rel=tooltip]").tooltip();
        $(function() {
            $('.demo-cancel-click').click(function(){return false;});
            //初始化表单插件
           var validform = $(".demoform").Validform({
                tiptype:function(msg,o,cssctl){
                //msg：提示信息;
                //o:{obj:*,type:*,curform:*}, obj指向的是当前验证的表单元素（或表单对象），type指示提示的状态，值为1、2、3、4， 1：正在检测/提交数据，2：通过验证，3：验证失败，4：提示ignore状态, curform为当前form对象;
                //cssctl:内置的提示信息样式控制函数，该函数需传入两个参数：显示提示信息的对象 和 当前提示的状态（既形参o中的type）;
                    if(!o.obj.is("form")){
                    //验证表单元素时o.obj为该表单元素，全部验证通过提交表单时o.obj为该表单对象;
                        var objtip=o.obj.siblings(".Validform_checktip");
                        cssctl(objtip,o.type);
                        objtip.text(msg);
                    }
                },
                ajaxPost:true,
                callback:function(data){
                    
                    if(data.status=="1"){
                        //$.Hidemsg()公用方法关闭信息提示框;
                        //显示方法是$.Showmsg("message goes here.");
                        $.Showmsg(data.info+'正在跳转，请稍后!');
                        setTimeout(function(){$.Hidemsg();
                            location.href = data.url;},2000);
                    }
                    else{
                        //$.Hidemsg()公用方法关闭信息提示框;
                        //显示方法是$.Showmsg("message goes here.");
                      $.Showmsg(data.info);
                      setTimeout(function(){$.Hidemsg(); },2000);
                    }
                }

            });
          
        });

    </script>
    
  </body>
</html>