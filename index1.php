<?php session_start();
//HAOUBUHAOUBZHIDAO
include "admin_system/inc/conn.php";
echo "位置B：".time();exit();
include "admin_system/inc/function.php";

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <?php
    //判断是否手机交易
    $is_Mobile=isMobile();
    ?>
    <title>乐交易金融网国际期货专家</title>
    <meta name="keywords" content="网页交易|在线股指期货交易|股指期货交割日|股指期货手续费|期货开户|期货模拟交易|期货公司排名|期货保证金|乐交易|股指乐|香港恒生股指期货|美国原油期货|COMEX黄金期货|德国股指期货|NYMEX原油期货|期货交易规则|股指期货交易规则|期货交易|股指期货" />
    <meta name="description" content="全球最领先期货网页交易平台；2000元在线玩转全球股指期货,美国原油期货和COMEX黄金期货,美国盈透证券实盘,支持网银微信支付宝冲值-乐交易金融网www.691.cn，安全、快速、专业。 全国免费客服电话: 4006 055767" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css?time=1.2" />
    <link rel="stylesheet" href="css/font-awesome.min.css?time=1.2" />
    <link rel="stylesheet" href="css/linea-icon.css?time=1.2" />
    <link rel="stylesheet" href="css/fancy-buttons.css?time=1.2" />
    <link rel="stylesheet" href="/static/video/video.css?time=new" />
    <script type="text/javascript" charset="UTF-8"  src="/static/691/js/jquery.js?time=1.2"></script>
    <script type="text/javascript" charset="UTF-8"  src="/static/691/js/thickbox_plus2.js?time=1.2"></script>
    <link rel="stylesheet" type="text/css" href="/static/691/css/thickbox.css?time=1.2"/>


    <!--=== Google Fonts ===-->
    <!--<link href='http://fonts.googleapis.com/css?family=Bangers' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:300,700,400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:600,400,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>-->



    <!--
    <link href='http://fonts.useso.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
    <link href='http://fonts.useso.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>-->

    <!--=== Other CSS files ===-->
    <link rel="stylesheet" href="css/animate.css" />
    <link rel="stylesheet" href="css/jquery.vegas.css" />
    <link rel="stylesheet" href="css/baraja.css" />
    <link rel="stylesheet" href="css/jquery.bxslider.css" />

    <!--=== Main Stylesheets ===-->
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/responsive.css" />

    <!--=== Color Scheme, three colors are available red.css, orange.css and gray.css ===-->
    <link rel="stylesheet" id="scheme-source" href="css/schemes/gray.css" />
    <style type="text/css">
        body,td,th {
            font-family: "微软雅黑";
        }
    </style>

    <!--=== Internet explorer fix ===-->
    <!-- [if lt IE 9]>
    <script src="http://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="http://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif] -->
</head>
<body>
<!--=== Preloader section starts ===-->
<section id="preloader">
    <div class="loading-circle fa-spin"></div>
</section>
<!--=== Preloader section Ends ===-->

<!--=== Header section Starts ===-->
<div id="header" class="header-section">
    <!-- sticky-bar Starts-->
    <div class="sticky-bar-wrap">
        <div>

        </div>
        <div class="sticky-section">
            <div id="topbar-hold" class="nav-hold container">
                <nav class="navbar" role="navigation">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <!--=== Site Name ===-->
                        <a class= "site-name navbar-brand" href = "index.html" style="float:left; margin-top:-5px;">
                            <img src="images/logo.png" alt="logo">
                        </a>
                    </div>

                    <!-- Main Navigation menu Starts -->
                    <div class="collapse navbar-collapse navbar-responsive-collapse">
                        <ul class="nav navbar-nav navbar-right" style="width:550px;">
                            <li class="current"><a href="#header">首页</a></li>
                            <li><a href="#section-services">服务</a></li>
                            <li><a href="#section-products-1">软件下载</a></li>
                            <li><a href="http://www.691.cn/About.html">关于</a></li>
                            <li><a href="/index_2.html" style="float:right;">旧版首页</a></li>
                            &nbsp;&nbsp;

                            <span style="color:red;font-size:24px; float:right; margin-top:10px;">400-6055-767</span>
                        </ul>
                    </div>
                    <!-- Main Navigation menu ends-->

                </nav>
            </div>
        </div>
    </div>
    <!-- sticky-bar Ends-->
    <!--=== Header section Ends ===-->

    <!--=== Home Section Starts ===-->
    <div id="section-home" class="home-section-wrap center">
        <div class="section-overlay"></div>
        <div class="container home">
            <div class="row">
                <h1 class="well-come">
                    <?php
                    if(!$is_Mobile)
                    {
                        ?>
                        乐交易
                        <?php
                    }
                    ?>
                    安全 便捷 专业</h1>

                <div class="col-md-8 col-md-offset-2">
                    <p class="intro-message">本地化交易,光速通往全球100多个国际期货品种   微信支付宝入金</p>

                    <div class="home-buttons">
                        <?php
                        if(!$is_Mobile)
                        {
                            ?>
                            <a target="_blank" title="交易规则" href="http://www.691.cn/varieties2.html" class="   " style="font-size:16px;">

                                交易规则

                            </a>
                            <a title="申请账户"  onclick="TB_show('申请账户','/static/public/regin.html?height=570;width=775')"  class="thickbox fancy-button button-line button-white vertical" style="cursor:pointer;font-size:16px;">
                                申请账户
                                <span class="icon">
								<i class="fa fa-gear"></i>
							</span>
                            </a>
                            <?php
                        }else{
                            ?>
                            <a title="申请账户"  onclick="TB_show('申请账户','/static/public/regin_mobile.html?height=auto;width=360')"  class="thickbox fancy-button button-line button-white vertical" style="cursor:pointer;font-size:16px;">
                                申请账户
                                <span class="icon">
								<i class="fa fa-gear"></i>
							</span>
                            </a>
                            <?php
                        }
                        ?>
                        <a href="index_2.html" title="实名开户验证"  style="cursor:pointer;font-size:16px;" class="thickbox fancy-button button-line button-white zoom"  >

                            <!--onclick="TB_show('实名开户验证','/static/public/login.html?height=260;width=440')"-->
                            实名开户验证
                            <span class="icon">
								<i class="fa fa-leaf"></i>
							</span>
                        </a>

                        <?php
                        if(!$is_Mobile)
                        {
                            ?>
                            <a title="费用说明" href="http://www.691.cn/varieties.html
"  style="font-size:16px;">
                                费用说明

                            </a>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--=== Home Section Ends ===-->
</div>

<!--=== Services section Starts ===-->
<section id="section-services" class="services-wrap">
    <div class="container services">
        <div class="row">



            <div class="col-md-10 col-md-offset-1 center section-title">

                <h3 style="position:relative; margin-top:20px; ">我们为您提供最优质服务
                    <div style="position:absolute; float:left; left:100px; top:-55px;">
                        <a href="javascript:void(0)" onclick="isShowDiv('view')" style="color:#FC0; border-radius:5px; border:1px solid #cccccc; padding:5px;">视频介绍</a>
                    </div>
                </h3>
            </div>

            <!-- Single Service Starts -->
            <div class="col-md-6 col-sm-6 service animated" data-animation="fadeInLeft" data-animation-delay="700">
                <span class="service-icon center"><i class="icon icon-basic-book-pencil fa-3x"></i></span>
                <div class="service-desc">
                    <h4 class="service-title color-scheme">最小化交易成本</h4>
                    <p class="service-description justify">
                        我们是全球顶级券商盈透证券白金合作伙伴,所有交易直达全球各地交易所.账户每周7*7每天24小时都可以访问市场数据。
                    </p>
                </div>
            </div>
            <!-- Single Service Ends -->

            <!-- Single Service Starts -->
            <div class="col-md-6 col-sm-6 service animated" data-animation="fadeInUp" data-animation-delay="700">
                <span class="service-icon center"><i class="icon icon-basic-paperplane fa-3x"></i></span>
                <div class="service-desc">
                    <h4 class="service-title color-scheme">全球服务</h4>
                    <p class="service-description justify">
                        交易覆盖全球24个国家的100多个市场中心。可交易全球期货、外汇期货,包括美元指数期货、COMEX黄金白银期货、NYMEX原油期货、布伦特原油期货、香港恒生股指期货、德国DAX股指期货期货，小道琼斯指数期货...。球市场的连接。

                    </p>
                </div>
            </div>
            <!-- Single Service ends -->

            <!-- Single Service Starts -->
            <div class="col-md-6 col-sm-6 service animated" data-animation="fadeInRight" data-animation-delay="700">
                <span class="service-icon center"><i class="icon icon-basic-accelerator fa-3x"></i></span>
                <div class="service-desc">
                    <h4 class="service-title color-scheme">资金安全</h4>
                    <p class="service-description justify">
                        人民币直接入金记入美元,出入金汇率相同.第三方网银入金或者微信支付宝通道极大方便用户操作，随时出金。
                    </p>
                </div>
            </div>
            <!-- Single Service Ends -->

            <!-- Single Service Starts -->
            <div class="col-md-6 col-sm-6 service animated" data-animation="fadeInUp" data-animation-delay="700">
                <span class="service-icon center"><i class="icon icon-basic-lightbulb fa-3x"></i></span>
                <div class="service-desc">
                    <h4 class="service-title color-scheme">外盘最佳本地化服务</h4>
                    <p class="service-description justify">
                        符合华人使用习惯的产品用户体验，融资金额10倍以内自己决定，强平线自动设置。专业客服实时为您解答，贴心客户经理提供上门服务，24小时专人值守运维保障，不出国门就可以投资全球交易产品，在您投资的路上提供全程服务。
                    </p>
                </div>
            </div>
            <!-- Single Service Ends -->
        </div>
    </div>
</section>
<!--=== Services section Ends ===-->

<!--=== Step-1 section Starts ===-->
<section id="section-products-1" class="section-step step-wrap">
    <div class="container step animated" data-animation="bounceInLeft" data-animation-delay="700">
        <div class="row">
            <!-- Step Description Starts -->
            <div class="col-md-8 step-desc">
                <div class="col-md-2 center">
                    <!--<div class="step-no">
                    <img src="images/windows.png" alt="logo">
                        <!--<span class="no-inner">1</span>--
                    </div>-->
                    <img src="images/windows.png" alt="logo">
                </div>


                <div class="col-md-10 step-details">
                    <h3 class="step-title color-scheme">乐交易客户端</h3>
                    <p class="step-subtitle"><strong>一份资金可交易全球资本市场产品</strong></p>
                    <p >直连美国最大网络券商盈透证券，只要一个交易账号，就可交易全球24个国家100多个市场中心的期货、外汇期货等多货币计价产品。</p>
                    <p><strong>可以先免费即时申请账户，后期第三方人民银行即时实名认证即可出金</strong></p>
                    <p>可即刻自助开通模拟账号及实盘账户，然后下载客户端软件，登陆软件即可自行出入金，入金第三方通道包括网银、微信、支付宝安全可靠。</p>
                    <p><strong>最佳本地化体验</strong></p>
                    <p>无需操作手册，上手即可轻松交易，符合美学和行为习惯设计，让您的操作保持最佳状态</p>
                    <p><strong>核心功能</strong></p>
                    <p>便捷、安全、直观</p>
                    <br>
                    <div class="download-buttons clearfix"> <!-- Download Buttons -->
                        <a href="http://www.691.cn/file/乐交易安装包.exe" target="_blank" class="fancy-button button-line btn-col vertical" itle="乐交易客户端下载">
                            乐交易客户端下载
                            <span class="icon">
								<i class="fa fa-download"></i>
							</span>
                        </a>


                        <a href="http://www.691.cn/file/mytrader_whsp.exe" target="_blank" class="fancy-button button-line btn-col vertical" itle="文化财经行情软件下载">
                            文化财经行情软件下载
                            <span class="icon">
								<i class="fa fa-download"></i>
							</span>
                        </a>
                    </div>
                </div> <!-- End step-details -->
            </div>
            <!-- Step Description Ends -->
            <div class="col-md-4 step-img">
                <img src="images/client300400.png" alt="" /> <!-- Step Photo Here -->
            </div>
        </div>
    </div>
</section>
<!--=== Step-1 section Ends ===-->

<!--=== Step-1 section Starts ===-->
<section id="section-products-1" class="section-step step-wrap">
    <div class="container step animated" data-animation="bounceInLeft" data-animation-delay="700" style="display:none;">
        <div class="row">
            <!-- Step Description Starts -->
            <div class="col-md-8 step-desc">
                <div class="col-md-2 center">

                    <img src="images/windows.png" alt="logo">
                </div>


                <!-- End step-details -->
            </div>
            <!-- Step Description Ends -->
            <div class="col-md-4 step-img">
                <img src="images/client300400my.png" alt="" /> <!-- Step Photo Here -->
            </div>
        </div>
    </div>
</section>

<div id="section-footer" class="footer-wrap">
    <nav>
        <a href="about.php"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>关于我们</b> &nbsp;</a>
        <a href="http://www.691.cn/Office.html"><b>联系我们</b> &nbsp;</a>
        <a href="http://www.691.cn/Legal_notices.html"><b>隐私声明</b></a>
    </nav>

    <div class="container footer center">
        <p class="copyright">Copyright &copy; <?php echo date("Y");?>.乐交易金融网 All rights reserved.<a target="_blank" href="http://www.691.cn/"></a></p>
        <div class="telphone">
            <a class="tel_num" href="tel:400-6055-767">热线电话：<strong>400-6055-767</strong></a>
        </div>

    </div>
</div>
<script src="https://s11.cnzz.com/z_stat.php?id=1259694431&web_id=1259694431" language="JavaScript"></script>
<!--开始视频代码-->
<script>
    function isShowDiv(typex)
    {
        W=$(window).width();
        H=$(window).height();
        trueW=(W-640)/2;
        trueH=(H-480)/2;
        //alert(trueH);
        var LoginBg=document.getElementById("LoginBg");
        var LoginDiv=document.getElementById("LoginDiv");
        var ShowVideo=document.getElementById("ShowVideo");
        //LoginDiv.style.left=trueW+"px";//设置边框
        //LoginDiv.style.top=trueH+"px";//设置边框
        if(typex=="view")
        {
            LoginBg.style.display="block";
            LoginDiv.style.display="block";
            document.getElementById('ShowVideo').play(); // 播放
        }
        else
        {
            LoginBg.style.display="none";
            LoginDiv.style.display="none";
            document.getElementById('ShowVideo').pause(); // 播放
        }

    }
</script>

<div class="y-video-mask" id="LoginBg" style="display: none;"></div>
<div class="y-video" style="display: none;"  id="LoginDiv">
    <div><a onclick="isShowDiv('none')"></a></div>
    <div class="y-video1" >

        <video width="680" height="383" controls="controls" id="ShowVideo">
            <source src="/static/video/691.mp4" type="video/mp4">

            <object codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000">
                <param name="_cx" value="25929">
                <param name="_cy" value="14552">
                <param name="WMode" value="Opaque">
                <param name="Play" value="-1">
                <param name="Loop" value="false">
                <param name="Quality" value="High">
                <param name="SAlign" value="">
                <param name="Menu" value="-1">
                <param name="Base" value="">
                <param name="AllowScriptAccess" value="">
                <param name="Scale" value="ShowAll">
                <param name="DeviceFont" value="0">
                <param name="EmbedMovie" value="0">
                <param name="BGColor" value="">
                <param name="SWRemote" value="">
                <param name="MovieData" value="">
                <param name="SeamlessTabbing" value="1">
                <param name="Profile" value="0">
                <param name="ProfileAddress" value="">
                <param name="ProfilePort" value="0">
                <param name="AllowNetworking" value="all">
                <param name="AllowFullScreen" value="true">
                <param name="AllowFullScreenInteractive" value="true">
                <param name="IsDependent" value="0">

                <embed align="middle" autostart="true" loop="false" allowfullscreen="true" allowscriptaccess="always" quality="high" src="/static/video/691.mp4" width="680" height="383" type="application/x-shockwave-flash"></embed>
            </object>

        </video>

    </div>
</div>


<!--结束视频代码-->



<!--=== Footer section Ends ===-->

<!--==== Js files ====-->
<!--==== Essential files ====-->
<script type="text/javascript" src="js/jquery-1.11.1.min.js">
	78901323
	</script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/bootstrapValidator.min.js"></script>
<script type="text/javascript" src="js/modernizr.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>

<!--==== Slider and Card style plugin ====-->
<script type="text/javascript" src="js/jquery.baraja.js"></script>
<script type="text/javascript" src="js/jquery.vegas.min.js"></script>
<script type="text/javascript" src="js/jquery.bxslider.min.js"></script>

<!--==== MailChimp Widget plugin ====-->
<script type="text/javascript" src="js/jquery.ajaxchimp.min.js"></script>

<!--==== Scroll and navigation plugins ====-->
<script type="text/javascript" src="js/jquery.nicescroll.min.js"></script>
<script type="text/javascript" src="js/jquery.nav.js"></script>
<script type="text/javascript" src="js/jquery.appear.js"></script>
<script type="text/javascript" src="js/jquery.fitvids.js"></script>

<!--==== Custom Script files ====-->
<script type="text/javascript" src="js/custom.js"></script>



</body>
</html>
