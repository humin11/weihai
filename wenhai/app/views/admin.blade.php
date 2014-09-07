<?php ?>
<!DOCTYPE html>
<!--

TABLE OF CONTENTS.

Use search to find needed section.

===================================================================

|  1. $BODY                        |  Body                        |
|  2. $MAIN_NAVIGATION             |  Main navigation             |
|  3. $NAVBAR_ICON_BUTTONS         |  Navbar Icon Buttons         |
|  4. $MAIN_MENU                   |  Main menu                   |
|  5. $UPLOADS_CHART               |  Uploads chart               |
|  6. $EASY_PIE_CHARTS             |  Easy Pie charts             |
|  7. $EARNED_TODAY_STAT_PANEL     |  Earned today stat panel     |
|  8. $RETWEETS_GRAPH_STAT_PANEL   |  Retweets graph stat panel   |
|  9. $UNIQUE_VISITORS_STAT_PANEL  |  Unique visitors stat panel  |
|  10. $SUPPORT_TICKETS            |  Support tickets             |
|  11. $RECENT_ACTIVITY            |  Recent activity             |
|  12. $NEW_USERS_TABLE            |  New users table             |
|  13. $RECENT_TASKS               |  Recent tasks                |

===================================================================

-->


<!--[if IE 8]>         <html class="ie8"> <![endif]-->
<!--[if IE 9]>         <html class="ie9 gt-ie8"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="gt-ie8 gt-ie9 not-ie"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>后台管理系统 | 乐享一二科技公司</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">

    <!-- Open Sans font from Google CDN -->
    <!-- Pixel Admin's stylesheets -->
    <link href="/admin/assets/stylesheets/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="/admin/assets/stylesheets/pixel-admin.min.css" rel="stylesheet" type="text/css">
    <link href="/admin/assets/stylesheets/widgets.min.css" rel="stylesheet" type="text/css">
    <link href="/admin/assets/stylesheets/rtl.min.css" rel="stylesheet" type="text/css">
    <link href="/admin/assets/stylesheets/themes.min.css" rel="stylesheet" type="text/css">

    <!--[if lt IE 9]>
        <script src="/admin/assets/javascripts/ie.min.js"></script>
    <![endif]-->
</head>


<!-- 1. $BODY ======================================================================================
    
    Body

    Classes:
    * 'theme-{THEME NAME}'
    * 'right-to-left'      - Sets text direction to right-to-left
    * 'main-menu-right'    - Places the main menu on the right side
    * 'no-main-menu'       - Hides the main menu
    * 'main-navbar-fixed'  - Fixes the main navigation
    * 'main-menu-fixed'    - Fixes the main menu
    * 'main-menu-animated' - Animate main menu
-->
<body class="theme-clean main-menu-animated">

<script>var init = [];</script>

<div id="main-wrapper">


<!-- 2. $MAIN_NAVIGATION ===========================================================================

    Main navigation
-->
    <div id="main-navbar" class="navbar navbar-inverse" role="navigation">
        <!-- Main menu toggle -->
        <button type="button" id="main-menu-toggle"><i class="navbar-icon fa fa-bars icon"></i><span class="hide-menu-text">HIDE MENU</span></button>
        
        <div class="navbar-inner">
            <!-- Main navbar header -->
            <div class="navbar-header">

                <!-- Logo -->
                <a href="/cms" class="navbar-brand">
                    <div><img alt="Pixel Admin" src="/admin/assets/images/pixel-admin/main-navbar-logo.png"></div>
                    乐享一二后台管理系统
                </a>

                <!-- Main navbar toggle -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navbar-collapse"><i class="navbar-icon fa fa-bars"></i></button>

            </div> <!-- / .navbar-header -->

            <div id="main-navbar-collapse" class="collapse navbar-collapse main-navbar-collapse">
                <div>
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="/cms">后台首页</a>
                        </li>
                        <li>
                            <a href="/">回首页</a>
                        </li>
                    </ul> <!-- / .navbar-nav -->

                    <div class="right clearfix">
                        <ul class="nav navbar-nav pull-right right-navbar-nav">

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle user-menu" data-toggle="dropdown">
                                    <img src="/admin/assets/demo/avatars/1.jpg" alt="">
                                    <span>Admin</span>
                                </a>
                                <!-- <ul class="dropdown-menu">
                                    <li><a href="#"><span class="label label-warning pull-right">New</span>Profile</a></li>
                                    <li><a href="#"><span class="badge badge-primary pull-right">New</span>Account</a></li>
                                    <li><a href="#"><i class="dropdown-icon fa fa-cog"></i>&nbsp;&nbsp;Settings</a></li>
                                    <li class="divider"></li>
                                    <li><a href="pages-signin.html"><i class="dropdown-icon fa fa-power-off"></i>&nbsp;&nbsp;Log Out</a></li>
                                </ul> -->
                            </li>
                        </ul> <!-- / .navbar-nav -->
                    </div> <!-- / .right -->
                </div>
            </div> <!-- / #main-navbar-collapse -->
        </div> <!-- / .navbar-inner -->
    </div> <!-- / #main-navbar -->
<!-- /2. $END_MAIN_NAVIGATION -->


<!-- 4. $MAIN_MENU =================================================================================

        Main menu
        
        Notes:
        * to make the menu item active, add a class 'active' to the <li>
          example: <li class="active">...</li>
        * multilevel submenu example:
            <li class="mm-dropdown">
              <a href="#"><span class="mm-text">Submenu item text 1</span></a>
              <ul>
                <li>...</li>
                <li class="mm-dropdown">
                  <a href="#"><span class="mm-text">Submenu item text 2</span></a>
                  <ul>
                    <li>...</li>
                    ...
                  </ul>
                </li>
                ...
              </ul>
            </li>
-->
    <div id="main-menu" role="navigation">
        <div id="main-menu-inner">
            <ul class="navigation">
                <li>
                    <a href="/cms"><i class="menu-icon fa fa-dashboard"></i><span class="mm-text">后台首页</span></a>
                </li>
                <li class="mm-dropdown">
                    <a href="#"><i class="menu-icon fa fa-gears"></i><span class="mm-text">系统配置管理</span></a>
                    <ul>
                        <li>
                            <a tabindex="-1" href="/settings"><i class="menu-icon fa fa-gear"></i><span class="mm-text">系统设置</span></a>
                        </li>
                        <li>
                            <a tabindex="-1" href="#"><i class="menu-icon fa fa-th-list"></i><span class="mm-text">菜单管理</span></a>
                        </li>
                    </ul>
                </li>
                 <li class="mm-dropdown">
                    <a href="#"><i class="menu-icon fa fa-files-o"></i><span class="mm-text">展览管理</span></a>
                    <ul>
                        <li>
                            <a tabindex="-1" href="/exhibitions"><i class="menu-icon fa fa-tasks"></i><span class="mm-text">展览管理</span></a>
                        </li>
                        <li>
                            <a tabindex="-1" href="/exhibitions/create"><i class="menu-icon fa fa-check-square"></i><span class="mm-text">新增展览</span></a>
                        </li>
                    </ul>
                </li>
                <li class="mm-dropdown">
                    <a href="#"><i class="menu-icon fa fa-users"></i><span class="mm-text">艺术家管理</span></a>
                    <ul>
                        <li>
                            <a tabindex="-1" href="/artists"><i class="menu-icon fa fa-tasks"></i><span class="mm-text">艺术家管理</span></a>
                        </li>
                        <li>
                            <a tabindex="-1" href="/artists/create"><i class="menu-icon fa fa-user"></i><span class="mm-text">新增艺术家</span></a>
                        </li>
                    </ul>
                </li>
                <li class="mm-dropdown">
                    <a href="#"><i class="menu-icon fa fa-picture-o"></i><span class="mm-text">作品管理</span></a>
                    <ul>
                        <li>
                            <a tabindex="-1" href="/works"><i class="menu-icon fa fa-tasks"></i><span class="mm-text">作品管理</span></a>
                        </li>
                        <li>
                            <a tabindex="-1" href="/works/create"><i class="menu-icon fa fa-picture-o"></i><span class="mm-text">上传作品</span></a>
                        </li>
                    </ul>
                </li>
                <li class="mm-dropdown">
                    <a href="#"><i class="menu-icon fa fa-picture-o"></i><span class="mm-text">博览会管理</span></a>
                    <ul>
                        <li>
                            <a tabindex="-1" href="/fairs"><i class="menu-icon fa fa-tasks"></i><span class="mm-text">博览会管理</span></a>
                        </li>
                        <li>
                            <a tabindex="-1" href="/fairs/create"><i class="menu-icon fa fa-picture-o"></i><span class="mm-text">新增博览会</span></a>
                        </li>
                    </ul>
                </li>
                <li class="mm-dropdown">
                    <a href="#"><i class="menu-icon fa fa-files-o"></i><span class="mm-text">媒体中心</span></a>
                    <ul>
                        <li>
                            <a tabindex="-1" href="/media"><i class="menu-icon fa fa-file"></i><span class="mm-text">媒体中心管理</span></a>
                        </li>
                        <li>
                            <a tabindex="-1" href="/media/create"><i class="menu-icon fa fa-file"></i><span class="mm-text">新增媒体</span></a>
                        </li>
                    </ul>
                </li>
                <li class="mm-dropdown">
                    <a href="#"><i class="menu-icon fa fa-files-o"></i><span class="mm-text">关于我们</span></a>
                    <ul>
                        <li>
                            <a tabindex="-1" href="/abouts/m/intro"><i class="menu-icon fa fa-file"></i><span class="mm-text">集团介绍</span></a>
                        </li>
                        <li>
                            <a tabindex="-1" href="/abouts/m/museum"><i class="menu-icon fa fa-file"></i><span class="mm-text">美术馆介绍</span></a>
                        </li>
                        <li>
                            <a tabindex="-1" href="/abouts/m/visit"><i class="menu-icon fa fa-file"></i><span class="mm-text">参观须知</span></a>
                        </li>
                        <li>
                            <a tabindex="-1" href="/abouts/m/contact"><i class="menu-icon fa fa-file"></i><span class="mm-text">联系我们</span></a>
                        </li>
                        <li>
                            <a tabindex="-1" href="/abouts/m/job"><i class="menu-icon fa fa-file"></i><span class="mm-text">人才招聘</span></a>
                        </li>
                        <li>
                            <a tabindex="-1" href="/abouts/m/sitemap"><i class="menu-icon fa fa-file"></i><span class="mm-text">网站地图</span></a>
                        </li>
                    </ul>
                </li>
            </ul> <!-- / .navigation -->
            
        </div> <!-- / #main-menu-inner -->
    </div> <!-- / #main-menu -->
<!-- /4. $MAIN_MENU -->

    <div id="content-wrapper">
        @yield('content')
    </div> <!-- / #content-wrapper -->
    <div id="main-menu-bg"></div>
</div> <!-- / #main-wrapper -->

<!-- Get jQuery from Google CDN -->
<!--[if !IE]> -->
    <script type="text/javascript"> window.jQuery || document.write('<script src="/assets/plugins/jquery-1.10.2.min.js">'+"<"+"/script>"); </script>
<!-- <![endif]-->
<!--[if lte IE 9]>
    <script type="text/javascript"> window.jQuery || document.write('<script src="/assets/plugins/jquery-1.10.2.min.js">'+"<"+"/script>"); </script>
<![endif]-->


<!-- Pixel Admin's javascripts -->
<script src="/admin/assets/javascripts/bootstrap.min.js"></script>
<script src="/admin/assets/javascripts/pixel-admin.min.js"></script>

@yield('javascripts')

<script type="text/javascript">
    init.push(function () {
        // Javascript code here
    })
    window.PixelAdmin.start(init);
</script>

</body>
</html>

