<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
<head>
    <title>@yield('title')</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="商业活动 | 活动策划与执行 | 庆典礼仪 | 新闻发布 | 展会承办 | 政府节会 | 礼品定制 | 媒体整合推广">
    <meta name="author" content="">

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">

    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="/assets/plugins/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="/assets/css/style.css">

    <!-- CSS Implementing Plugins -->
	<link rel="stylesheet" href="/assets/plugins/line-icons/line-icons.css">
	<link rel="stylesheet" href="/assets/plugins/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="/assets/plugins/owl-carousel/owl-carousel/owl.carousel.css">

	<link rel="stylesheet" href="/assets/css/pages/page_about.css">
    <link rel="stylesheet" href="/assets/css/pages/blog.css">

    <link rel="stylesheet" href="/assets/plugins/revolution-slider/examples/rs-plugin/css/settings.css">

    <link rel="stylesheet" href="/assets/css/pages/blog_magazine.css">
    <link rel="stylesheet" href="/assets/css/pages/feature_timeline1.css">
    
    <!-- CSS Theme -->    
    <link rel="stylesheet" href="/assets/css/themes/red.css" id="style_color">


    <!-- CSS Customization -->
    <link rel="stylesheet" href="/assets/css/custom.css">
</head>	

<body>

<div class="wrapper">
    <!--=== Header ===-->    
    <div class="header">
        <!-- Topbar -->
        <div class="topbar">
            <div class="container">
                <!-- Topbar Navigation -->
                <ul class="loginbar pull-right">
                    <li><a href="#">{{Lang::get('menu.help')}}</a></li>  
                    <li class="topbar-devider"></li>   
                    <li><a href="#">{{Lang::get('menu.login')}}</a></li>   
                </ul>
                <!-- End Topbar Navigation -->
            </div>
        </div>
        <!-- End Topbar -->
    
        <!-- Navbar -->
        <div class="navbar navbar-default" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                        
                    </button>
                    <a class="navbar-brand" href="/">
                        <img id="logo-header" src="/assets/img/logo.png" alt="Logo" style="width:300px;">
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-responsive-collapse">
                    <ul class="nav navbar-nav" id="modulemenu">
                        <!-- Pages -->
						<li><a href="/">{{Lang::get('menu.index')}}</a></li>
                        <!-- Exhibition -->
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                                {{Lang::get('menu.exhibition')}}
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="/ex/current">{{Lang::get('menu.exhibition.current')}}</a></li>
                                <li><a href="/ex/preview">{{Lang::get('menu.exhibition.preview')}}</a></li>
                                <li><a href="/ex/review">{{Lang::get('menu.exhibition.review')}}</a></li>
                            </ul>
                        </li>
                        <!-- End Exhibition -->

                        <li><a href="/artist">{{Lang::get('menu.artist')}}</a></li>

                        <!-- Exhibition -->
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                                {{Lang::get('menu.product')}}
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="/pd/tosell">{{Lang::get('menu.product.tosell')}}</a></li>
                                <li><a href="/pd/sellout">{{Lang::get('menu.product.sellout')}}</a></li>
                                <li><a href="/pd/holdings">{{Lang::get('menu.product.holdings')}}</a></li>
                            </ul>
                        </li>
                        <!-- End Exhibition -->

                        <!-- Exhibition -->
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                                {{Lang::get('menu.fair')}}
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="/fair/internal">{{Lang::get('menu.fair.internal')}}</a></li>
                                <li><a href="/fair/abroad">{{Lang::get('menu.fair.abroad')}}</a></li>
                            </ul>
                        </li>
                        <!-- End Exhibition -->

                        <!-- Exhibition -->
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                                {{Lang::get('menu.mediacenter')}}
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="/medium/news">{{Lang::get('menu.mediacenter.news')}}</a></li>
                                <li><a href="/medium/info">{{Lang::get('menu.mediacenter.download')}}</a></li>
                                <li><a href="/medium/report">{{Lang::get('menu.mediacenter.report')}}</a></li>
                                <li><a href="/medium/cooperation">{{Lang::get('menu.mediacenter.cooperation')}}</a></li>
                            </ul>
                        </li>
                        <!-- End Exhibition -->

						<!-- Exhibition -->
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                                {{Lang::get('menu.about')}}
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="/about/intro">{{Lang::get('menu.about.intro')}}</a></li>
                                <li><a href="/about/museum">{{Lang::get('menu.about.gallary')}}</a></li>
                                <li><a href="/about/visit">{{Lang::get('menu.about.visit')}}</a></li>
                                <li><a href="/about/contact">{{Lang::get('menu.about.contact')}}</a></li>
                                <li><a href="/about/job">{{Lang::get('menu.about.job')}}</a></li>
                                <li><a href="/about/sitemap">{{Lang::get('menu.about.site')}}</a></li>
                            </ul>
                        </li>
                        <!-- End Exhibition -->
                        <!-- End Pages -->
                    </ul>
                </div><!--/navbar-collapse-->
            </div>    
        </div>            
        <!-- End Navbar -->
    </div>
    <!--=== End Header ===-->    
	
	@yield('content')
    
    <!--=== Footer ===-->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 md-margin-bottom-40">
                    <!-- About -->
                    <div class="headline"><h2>关于文海</h2></div>  
                    <p class="margin-bottom-25 md-margin-bottom-40">长沙永宸文化传播有限公司，是一家以策划为先导、以活动执行见长的专业传媒服务公司。公司集结湖南广电湘军活动策划执行团队及拍摄制作团队，通过深入整合设计、策划、展览展示、广告片拍摄、媒体推广等优质资源致力为客户打造全方位立体互动式整合营销推广平台，为客户带来经济效益和品牌效益的最大化。</p>    
                    <!-- End About -->

                    <!-- Monthly Newsletter -->
                    <!-- <div class="headline"><h2>Monthly Newsletter</h2></div> 
                    <p>Subscribe to our newsletter and stay up to date with the latest news and deals!</p>
                    <form class="footer-subsribe">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Email Address">                            
                            <span class="input-group-btn">
                                <button class="btn-u" type="button">Subscribe</button>
                            </span>
                        </div>                  
                    </form>  -->                        
                    <!-- End Monthly Newsletter -->
                </div><!--/col-md-4-->  
                
                

                <div class="col-md-4">
                    <!-- Contact Us -->
                    <div class="headline"><h2>联系我们</h2></div> 
                    <address class="md-margin-bottom-40">
                        湖南省长沙市开福区芙蓉中路一段88号天健芙蓉盛世8栋1206房<br>
                        联系电话：<br>
                        邮箱：<a href="mailto:m18674847717@163.com" class="">m18674847717@163.com</a>
                    </address>
                    <!-- End Contact Us -->

                </div><!--/col-md-4-->

                <div class="col-md-4 md-margin-bottom-40">
                    <!-- Recent Blogs -->
                    <div class="posts">
                        <div class="headline"><h2>关注文海</h2></div>
                        <div class="">
                            <img src="assets/img/qrcode.jpg" style="width:50%" alt="" />
                        </div>
                    </div>
                    <!-- End Recent Blogs -->                    
                </div><!--/col-md-4-->
            </div>
        </div> 
    </div><!--/footer-->
    <!--=== End Footer ===-->

    <!--=== Copyright ===-->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-6">                     
                    <p>
                        {{ $setting -> copyright}}
                    </p>
                </div>
                <div class="col-md-6">  
                    <a href="/">
                        <img class="pull-right" id="logo-footer" src="assets/img/logo.png" alt="" style="width:32px">
                    </a>
                </div>
            </div>
        </div> 
    </div><!--/copyright--> 
    <!--=== End Copyright ===-->
</div><!--/wrapper-->

<!-- JS Global Compulsory -->           
<script type="text/javascript" src="/assets/plugins/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="/assets/plugins/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="/assets/plugins/bootstrap/js/bootstrap.min.js"></script> 
<!-- JS Implementing Plugins -->           
<script type="text/javascript" src="/assets/plugins/back-to-top.js"></script>
<script type="text/javascript" src="/assets/plugins/owl-carousel/owl-carousel/owl.carousel.js"></script>
<!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
<script type="text/javascript" src="/assets/plugins/revolution-slider/examples/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
<script type="text/javascript" src="/assets/plugins/revolution-slider/examples/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<!-- JS Page Level -->           
<script type="text/javascript" src="/assets/js/app.js"></script>
<script type="text/javascript" src="/assets/js/pages/index.js"></script>
<script type="text/javascript" src="/assets/js/plugins/owl-carousel.js"></script>
@yield('javascripts')

<script type="text/javascript">
    jQuery(document).ready(function() {
        App.init();
        Index.initRevolutionSlider();
        OwlCarousel.initOwlCarousel();

        var pathname = location.pathname;
        
        var pa = $('#modulemenu').find("a[href='" + pathname + "']");
        pa.parent().addClass('active');
        if(pa.parent().parent().hasClass('dropdown-menu')){
            pa.parent().parent().parent().addClass('active');
        }
        
    });
</script>
<!--[if lt IE 9]>
    <script src="assets/plugins/respond.js"></script>
<![endif]-->


</body>
</html>	
