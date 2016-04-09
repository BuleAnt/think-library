<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
	  <!-- 头部 -->
    <meta charset="UTF-8">
    <title>服务-大连大学图书馆</title>
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!--
     <link rel="stylesheet" type="text/css" href="<?php echo C('DOMAIN');?>./Application/Home/View/workshop/lib/bootstrap/css/bootstrap.min.css">
 -->
    <link rel="stylesheet" type="text/css" href="<?php echo C('DOMAIN');?>./Application/Home/View/workshop/css/reset.css">
    <link rel="stylesheet" type="text/css" href="<?php echo C('DOMAIN');?>./Application/Home/View/workshop/css/service.css">
    <link rel="stylesheet" href="<?php echo C('DOMAIN');?>./Application/Home/View/workshop/lib/font-awesome/css/font-awesome.css">

    <script type="text/javascript" src="<?php echo C('DOMAIN');?>./Application/Home/View/workshop/js/jquery.js"></script>
    <!--
    <script type="text/javascript" src="<?php echo C('DOMAIN');?>./Application/Home/View/workshop/lib/bootstrap/js/bootstrap.min.js"></script>
    -->
    <script type="text/javascript" src="<?php echo C('DOMAIN');?>./Application/Home/View/workshop/js/service.js"></script>
    

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
        
        /*分页下的列表*/
       .rows {
            float: left;
            padding: 0 14px;
            line-height: 38px;
            text-decoration: none;
            background-color: #ffffff;
            /* border: 1px solid #dddddd; */
            border-left-width: 0;
        }

        .content-right h2 .noaction {
            height: 48px;
            text-align: center;
            font-size: 22px;
            color: #777;
            background-color: #d5d5d5;
            border-radius: 4px;
            cursor: pointer;
        }
        .content-right h2 .noaction:hover{
            background-color: #365088;
            font-size: 24px;
            color: #fff;

        }
        /*表单*/
        .form-ul li{
            position: relative;
            display: table;
            border-collapse: separate;
        }
        .form-label {
            display: inline-block;
            margin-top: 1px;
            padding-right: 14px;
            width:64px;
            height: 35px;
            font-size: 16px;
            line-height: 35px;
            color: #FFFFFF;
            text-align: right;
            border: 1px solid #ccc;
            border-radius: 4px 0px 0px 4px;
            background: -webkit-linear-gradient(left, #94bcc8 85%, #7ba0b0); /* Safari 5.1 - 6.0 */
            background: -o-linear-gradient(left, #94bcc8 85%, #7ba0b0); /* Opera 11.1 - 12.0 */
            background: -moz-linear-gradient(left,#94bcc8 85%, #7ba0b0); /* Firefox 3.6 - 15 */
            background: linear-gradient(left,#94bcc8 85%, #7ba0b0); /* 标准的语法（必须放在最后） */
        }
        .form-label select{
            width: 72px;
            height: 34px;
            font-size: 14px;
            font-weight: 600;
            line-height: 34px;
            margin-right: -10px;
            margin-top:-5px;
            background: rgba(0,0,0,0);
            border: 0px solid;
            color: #FFFFFF;
            text-align: right;
        }
        .form-label select option{
            text-align: right;
            color: #000000;
        }
        .form-control {
            margin-top: -3px;
            width:240px;
            height: 24px;
            padding: 5px 12px;
            font-size: 16px;
            line-height: 34px;
            color: #555;
            vertical-align: middle;
            background: rgba(217,217,217,0.3);
            background-image: none;
            border: 1px solid #ccc;
            border-radius: 0px 4px 4px 0px;
            -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,0.075);
            box-shadow: inset 0 1px 1px rgba(0,0,0,0.075);
            -webkit-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
            transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
        }
        form  ul li {
            padding: 0;
            margin: 0 0 10px 25px;
        }

        .btn {
            display: inline-block;
            padding: 6px 12px;
            margin-bottom: 0;
            font-size: 16px;
            font-weight: 600;
            line-height: 1.428571429;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            cursor: pointer;
            background-image: none;
            border: 1px solid transparent;
            border-radius: 4px;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            -o-user-select: none;
            user-select: none;
        }
        .btn-info {
            min-width: 260px;
            color: #fff;
            background-color: #5bc0de;
            border-color: #46b8da;
        }
        .btn-info:hover{
            color: #fff;
            background-color: #39b3d7;
            border-color: #269abc;
        }
        .btn-success {
            color: #fff;
            background-color: #5cb85c;
            border-color: #4cae4c;
        }
        .btn-success:hover {
            color: #fff;
            background-color: #4cae4c;
            border-color: #5cb85c;
        }
        
        
        .btn-sm, .btn-group-sm>.btn {
            padding: 2px 8px;
            font-size: 12px;
            line-height: 1.5;
            border-radius: 3px;
        }

        .content-container .content-left .action {
            color: #fff;
            font-weight: bold;
            background-color: #ff6e01;
            border: 1px solid #C35F14;
        }

        .content-left .action a {
            color: #fff;
            font-weight: bold;
            background-color: #ff6e01;
            background-position: 25px -220px;
        }
        
    </style>
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
	<block name ="style"></block>
</head>

  <!--[if lt IE 7 ]> <body class="ie ie6"> <![endif]-->
  <!--[if IE 7 ]> <body class="ie ie7 "> <![endif]-->
  <!--[if IE 8 ]> <body class="ie ie8 "> <![endif]-->
  <!--[if IE 9 ]> <body class="ie ie9 "> <![endif]-->
  <!--[if (gt IE 9)|!(IE)]><!--> 
<body>
  <!--<![endif]-->
	<!-- 导航 -->
	<!-- 顶部导航 -->
    <!-- 行导航栏 start -->
        <!-- header start -->
    <header id="header" class="header">
        <div class="header-container">
            <!-- logo -->
            <div class="logo"></div>
            <!-- 一级导航菜单 -->
            <ul class="menu">

                <li class=<?php if(($pagetab) == "server"): ?>"active"<?php else: ?>""<?php endif; ?>>
                    <a href="<?php echo U('/Server');?>" class="service">服务</a>
                    <ul class="sub-menu">
                        <li><a href="javascript:void(0)">入馆指南</a></li>
                        <li><a href="javascript:void(0)">投稿指南</a></li>
                        <li><a href="javascript:void(0)">信息咨询</a></li>
                        <!--
                        <li><a href="javascript:void(0)">自习室预约</a></li>
                        -->
                        <li><a href="javascript:void(0)">通知</a></li>
                        
                        <!--
                        <li><a href="javascript:void(0)">学位论文提交</a></li>
                        <li><a href="javascript:void(0)">讲座培训</a></li>
                        <li><a href="javascript:void(0)">学科服务</a></li>
                        <li><a href="javascript:void(0)">文献传递</a></li>
                        <li><a href="javascript:void(0)">VPN服务</a></li>
                        <li><a href="javascript:void(0)">文件下载</a></li>
                        <li><a href="javascript:void(0)">阅读推荐</a></li>
                        -->
                    </ul>
                </li>
                <li class=<?php if(($pagetab) == "Introduce"): ?>"active"<?php else: ?>""<?php endif; ?>>
                    <a href="<?php echo U('/Introduce');?>" class="survey">概况</a>
                    <ul class="sub-menu">
                        <li><a href="javascript:void(0)">本馆介绍</a></li>
                        <li><a href="javascript:void(0)">分布图示</a></li>
                        <li><a href="javascript:void(0)">馆舍风貌</a></li>
                        <li><a href="javascript:void(0)">工作动态</a></li>
                        <!--
                        <li><a href="javascript:void(0)">部门设置</a></li>
                        <li><a href="javascript:void(0)">应急预案</a></li>
                        -->
                    </ul>
                </li>
                <li class=<?php if(($pagetab) == "SpecialLibrary"): ?>"active"<?php else: ?>""<?php endif; ?>>
                    <a href="<?php echo U('/SpecialLibrary');?>" class="charmlibrary">魅力图书馆</a>
                    <ul class="sub-menu">
                        <li><a href="javascript:void(0)">按时间分类</a></li>
                        <li><a href="javascript:void(0)">按期刊分类</a></li>
                    </ul>
                </li>
                <li class=<?php if(($pagetab) == "PrivateLibrary"): ?>"active"<?php else: ?>""<?php endif; ?>>
                    <a href="<?php echo U('/PrivateLibrary');?>" class="resource">我的图书馆</a>
                    <!-- 二级导航菜单 -->
                    <ul class="sub-menu">
                        <li><a href="javascript:void(0)">登陆/注册</a></li>
                        <li><a href="javascript:void(0)">我的图书馆</a></li>
                        <li><a href="javascript:void(0)">借书/还书</a></li>
                        <li><a href="javascript:void(0)">借阅记录</a></li>
                        
                    </ul>
                </li>

                <li style="display:none;">
                    <a href="javascript:void(0)" class="thinker">思想者</a>
                    <ul class="sub-menu">
                        <li><a href="javascript:void(0)">沁心美文</a></li>
                        <li><a href="javascript:void(0)">名著欣赏</a></li>
                        <li><a href="javascript:void(0)">大爱无疆</a></li>
                        <li><a href="javascript:void(0)">心灵驿站</a></li>
                        <li><a href="javascript:void(0)">阅读指南</a></li>
                        <li><a href="javascript:void(0)">科学沙龙</a></li>
                        <li><a href="javascript:void(0)">文化雨露</a></li>
                        <li><a href="javascript:void(0)">就业指导</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </header>
    <!-- header end -->
    <!-- 行导航栏 end -->
	<!-- /导航 -->

	<!-- 内容 -->
	<!-- content start -->
<div class="content-wrapper">

    

<!-- title -->
    <h3><a href="index.html">首页</a>&nbsp;&gt;&nbsp;<a href="javascript:void(0)">服务</a></h3>


    <div class="content-container">
        
	 <!-- 左侧侧边栏 -->
        <dl class="content-left">
            <dt>服务</dt>
            <dd><a href="javascript:void(0)">入馆指南</a></dd>
            <dd><a href="javascript:void(0)">学位论文提交</a></dd>
            <dd><a href="javascript:void(0)">讲座培训</a></dd>
            <dd><a href="javascript:void(0)">投稿指南</a></dd>
            <dd><a href="javascript:void(0)">学科服务</a></dd>
            <dd><a href="javascript:void(0)">文献传递</a></dd>
            <dd><a href="javascript:void(0)">VPN服务</a></dd>
            <dd><a href="javascript:void(0)">信息咨询</a></dd>
            <dd><a href="javascript:void(0)">研究室预约</a></dd>
            <dd><a href="javascript:void(0)">文件下载</a></dd>
            <dd><a href="javascript:void(0)">阅读推荐</a></dd>
            <dd><a href="javascript:void(0)">失物招领</a></dd>
        </dl>
        <!-- 右侧内容区 -->
        <div class="content-right">         
            <h2><a href="javascript:void(0)">入馆指南</a><span class="fold">折叠</span></h2>
            <ul class="content">
                <li><a href="javascript:void(0)">馆藏布局</a><span>03-18</span></li>
                <li><a href="javascript:void(0)">借阅规则</a><span>09-03</span></li>
                <li><a href="javascript:void(0)">馆藏布局</a><span>09-03</span></li>
                <li><a href="javascript:void(0)">开放时间</a><span>09-03</span></li>
            </ul>
            <h2><a href="javascript:void(0)">讲座培训</a><span class="fold">折叠</span></h2>
            <ul class="content">
                <li><a href="javascript:void(0)">大连大学Springer培训讲座</a><span>09-18</span></li>
                <li><a href="javascript:void(0)">SCI数据库讲座</a><span>09-13</span></li>
                <li><a href="javascript:void(0)">高校IEL数据库培训-2015下半年</a><span>09-03</span></li>
                <li><a href="javascript:void(0)">图书馆讲座通知</a><span>10-03</span></li>
                <li><a href="javascript:void(0)">2015新生（本科生）“怎样利用图书馆”培训讲座</a><span>09-11</span></li>
            </ul>
            <h2><a href="javascript:void(0)">投稿指南</a><span class="fold">折叠</span></h2>
            <ul class="content">
                <li><a href="javascript:void(0)">CSSCI来源集刊（2008－2011年）</a><span>03-06</span></li>
                <li><a href="javascript:void(0)">CSSCI（2008-2009）来源期刊目录(528种)</a><span>09-23</span></li>
                <li><a href="javascript:void(0)">CSSCI来源期刊(2006-2007)（共493种）</a><span>11-03</span></li>
                <li><a href="javascript:void(0)">中文社会科学引文索引（2004-2005）来源期刊目录</a><span>08-23</span></li>
                <li><a href="javascript:void(0)">中文社会科学引文索引（2003）来源期刊目录（共418种）</a><span>07-19</span></li>
                <li><a href="javascript:void(0)">《中文社会科学引文索引》(CSSCI) 扩展版来源期刊(2010-2011)</a><span>06-10</span></li>
            </ul>
            <h2><a href="javascript:void(0)">文件下载</a><span class="fold">折叠</span></h2>
            <ul class="content">
                <li><a href="javascript:void(0)">大连大学图书馆电子培训室使用管理制度</a><span>03-18</span></li>
                <li><a href="javascript:void(0)">关于图书馆LED、发布机、网站等电子设备使用须知</a><span>09-03</span></li>
                <li><a href="javascript:void(0)">联创自助打印复印客户端驱动下载</a><span>09-22</span></li>
                <li><a href="javascript:void(0)">大连大学图书馆报告厅使用管理制度</a><span>10-03</span></li>
                <li><a href="javascript:void(0)">资料室管理规则</a><span>07-03</span></li>
                <li><a href="javascript:void(0)">《教学、行政及科研部门校有图书等文献资料购置管理规定》</a><span>06-15</span></li>
            </ul>
            <h2><a href="javascript:void(0)">阅读推荐</a><span class="fold">折叠</span></h2>
            <ul class="content">
                <li><a href="javascript:void(0)">红高粱</a><span>07-18</span></li>
                <li><a href="javascript:void(0)">丰乳肥臀</a><span>09-13</span></li>
            </ul>
        </div>

    </div>
    <!-- footer start -->
    <footer class="footer-container">
        <ul class="footer">
            <li>
                <h4>开馆时间：</h4>
                <p>图书馆主楼</p>
                <p>周一至周五8:10-21:40 周六、日8:50-21:40</p>
                <p>辅楼 6:10-21:40</p>
            </li>
            <li>
                <div class="msgbox">
                    <h4>联系方式：</h4>
                    <p><span>地 址：</span>大连经济技术开发区学府大街10号</p>
                    <p><span>电 话：</span>0411-87402853</p>
                    <p><span>传 真：</span>0411-87402853</p>
                    <p><span>交通方式：</span>火车站-大连大学</p>
                    <p><span>邮政编码：</span>116622</p>
                </div>
            </li>
            <li>
                <div class="share">
                    <span>分享到 : </span>
                    <a href="#" class="sina" title="分享到新浪微博"><!-- 新浪微博 --></a>
                    <a href="#" class="weixin" title="分享到微信"><!-- 微信 --></a>
                    <a href="#" class="qq" title="分享给QQ好友"><!-- QQ好友 --></a>
                </div>
                <div class="box">
                    <img src="<?php echo C('DOMAIN');?>./Application/Home/View/workshop/images/qcode.jpg" alt="">
                    <p>微信公众号</p>
                </div>
                <div class="box">
                    <img src="<?php echo C('DOMAIN');?>./Application/Home/View/workshop/images/qcode.jpg" alt="">
                    <p>新浪微博</p>
                </div>
            </li>
        </ul>
    </footer>
    <!-- footer end -->
    <script src="<?php echo C('DOMAIN');?>./Application/Home/View/workshop/lib/jquery-1.12.2.min.js" type="text/javascript"></script>
    <script src="<?php echo C('DOMAIN');?>./Application/Home/View/workshop/lib/bootstrap/js/bootstrap.js"></script>
    <script src="<?php echo C('DOMAIN');?>./Application/Home/View/workshop/js/Validform_v5.3.2_min.js" type="text/javascript"></script>
    
</div>
<!-- content end -->
	<!-- /内容 -->
</body>
</html>