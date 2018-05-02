<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" dir="rtl">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title><?php echo isset($title) ? $title:""; ?></title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="#1 selling multi-purpose bootstrap admin theme sold in themeforest marketplace packed with angularjs, material design, rtl support with over thausands of templates and ui elements and plugins to power any type of web applications including saas and admin dashboards. Preview page ofRTL  Theme #2 for statistics, charts, recent events and reports"
            name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <!-- <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" /> -->
        <link href="<?php echo base_url() ?>assets/fonts/fontiran/css/fontiran.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url() ?>assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url() ?>assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url() ?>assets/global/plugins/bootstrap/css/bootstrap-rtl.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url() ?>assets/global/plugins/bootstrap-switch/css/bootstrap-switch-rtl.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        
        
        <!-- BEGIN PAGE LEVEL PLUGINS -->
          <link href="<?php echo base_url() ?>assets/global/plugins/bootstrap-multiselect/css/bootstrap-multiselect.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url() ?>assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url() ?>assets/global/plugins/morris/morris.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url() ?>assets/global/plugins/fullcalendar/fullcalendar.min.css" rel="stylesheet" type="text/css" />
        <!-- <link href="<?php echo base_url() ?>assets/global/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css" /> -->
        <link href="<?php echo base_url() ?>assets/global/plugins/bootstrap-sweetalert/sweetalert.css" rel="stylesheet" type="text/css"/>
        <!-- END PAGE LEVEL PLUGINS -->
        
        
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="<?php echo base_url() ?>assets/global/css/components-rtl.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="<?php echo base_url() ?>assets/global/css/plugins-rtl.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
          <link href="<?php echo base_url() ?>assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url() ?>assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap-rtl.css" rel="stylesheet" type="text/css" />
        
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="<?php echo base_url() ?>assets/layouts/layout2/css/layout-rtl.min.css" rel="stylesheet" type="text/css" />
        <?php if(!isset($theme)) $theme='default'; ?>
        
        <?php if($theme=='default'): ?>
        <link href="<?php echo base_url() ?>assets/layouts/layout2/css/themes/default-rtl.min.css" rel="stylesheet" type="text/css" id="style_color" />
        <?php elseif($theme=='blue'): ?>
            <link href="<?php echo base_url() ?>assets/layouts/layout2/css/themes/blue-rtl.min.css" rel="stylesheet" type="text/css" id="style_color" />
        <?php elseif($theme=='dark'): ?>
         <link href="<?php echo base_url() ?>assets/layouts/layout2/css/themes/dark-rtl.min.css" rel="stylesheet" type="text/css" id="style_color" />
        <?php elseif($theme=='grey'): ?>
         <link href="<?php echo base_url() ?>assets/layouts/layout2/css/themes/grey-rtl.min.css" rel="stylesheet" type="text/css" id="style_color" />
        <?php elseif($theme=='light'): ?>
         <link href="<?php echo base_url() ?>assets/layouts/layout2/css/themes/light-rtl.min.css" rel="stylesheet" type="text/css" id="style_color" />
        <?php endif; ?>

        <link href="<?php echo base_url() ?>assets/layouts/layout2/css/custom-rtl.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" />
        <link href="<?php echo base_url() ?>assets/mansouri.css" rel="stylesheet" type="text/css" />
        <script src="<?php echo base_url() ?>assets/global/plugins/jquery.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/js/handlebars-v4.0.11.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/js/loadin-overlay.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/js/mansouri.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/js/kblayout.js" type="text/javascript"></script>

    </head>
    <!-- END HEAD -->

    <body class="page-header-fixed page-sidebar-closed-hide-logo page-container-bg-solid">
        <!-- BEGIN HEADER -->
        <div class="page-header navbar navbar-fixed-top">
            <!-- BEGIN HEADER INNER -->
            <div class="page-header-inner ">
                <!-- BEGIN LOGO -->
                <div class="page-logo">
                    <a href="<?php echo base_url(); ?>">
                    <!--     <img src="<?php echo base_url() ?>assets/pages/media/pages/logo_azteca.jpg" alt="logo" class="logo-default"
                               width="37px"  style="margin-top:19px;"/> -->
                     </a>
                    <div class="menu-toggler sidebar-toggler">
                        <!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
                    </div>
                </div>
                <!-- END LOGO -->
                <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse"> </a>
                <!-- END RESPONSIVE MENU TOGGLER -->
                <!-- BEGIN PAGE ACTIONS -->
     
                <!-- BEGIN PAGE TOP -->
                <div class="page-top">
   
                    <!-- BEGIN TOP NAVIGATION MENU -->
                    <div class="top-menu">
                        <ul class="nav navbar-nav pull-right">
                            <!-- BEGIN NOTIFICATION DROPDOWN -->
                            <!-- DOC: Apply "dropdown-dark" class below "dropdown-extended" to change the dropdown styte -->
                            <!-- DOC: Apply "dropdown-hoverable" class after below "dropdown" and remove data-toggle="dropdown" data-hover="dropdown" data-close-others="true" attributes to enable hover dropdown mode -->

                           
                            <!-- BEGIN USER LOGIN DROPDOWN -->
                            <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                            <li class="dropdown dropdown-user">
                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                    <img alt="" class="img-circle" 
                                                src="<?php echo $_SESSION['profile_img']; ?>" />
                                    <span class="username username-hide-on-mobile"> 
                                        <?php //echo $this->session->userdata('name'); ?> 
                                        <?php //echo isset($isadmin) ? "(مدیر)":""; ?>
                                    </span>
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-default">
                                    <li>
                                        <a href="<?php 
                                        //echo base_url('users/profile') . "?id=" . $this->session->userdata("userid"); ?>" style="font-family: BYekan;">
                                            <i class="icon-user"></i> پروفایل</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url('login/logout') ?>" 
                                           style="font-family: BYekan;">
                                            <i class="icon-key"></i> خروج </a>
                                    </li>
           <!--                          <li style="padding-bottom: 10px;">
                                        <a href="<?php echo base_url('admin?theme=light') ?>"
                                            style="color:khaki;background-color: khaki;display: inline;" 
                                            class="theme-box"></a>
                                        <a href="<?php echo base_url('admin?theme=dark') ?>"
                                             style="color:black;background-color: black;display: inline;" class="theme-box"></a>
                                          <a href="<?php echo base_url('admin?theme=blue') ?>"
                                             style="color:navy;background-color: navy;display: inline;" class="theme-box" ></a>
                                        <a href="<?php echo base_url('admin?theme=grey') ?>"
                                             style="color:grey;background-color: grey;display: inline;" ></a>
                                    </li> -->
                                </ul>
                            </li>
                            <!-- END USER LOGIN DROPDOWN -->
                            <!-- BEGIN QUICK SIDEBAR TOGGLER -->
                        </ul>
                    </div>
                    <!-- END TOP NAVIGATION MENU -->
                </div>
                <!-- END PAGE TOP -->
            </div>
            <!-- END HEADER INNER -->
        </div>
        <!-- END HEADER -->
        <!-- BEGIN HEADER & CONTENT DIVIDER -->
        <div class="clearfix"> </div>
        <!-- END HEADER & CONTENT DIVIDER -->
        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <!-- BEGIN SIDEBAR -->
            <div class="page-sidebar-wrapper">
                <!-- END SIDEBAR -->
                <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                <div class="page-sidebar navbar-collapse collapse">
                    <!-- BEGIN SIDEBAR MENU -->
                    <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
                    <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
                    <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
                    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                    <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
                    <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                    <ul class="page-sidebar-menu  page-header-fixed page-sidebar-menu-hover-submenu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
                           <li class="nav-item start" id="m-dashboard">
                                    <a href="<?php echo base_url('admin'); ?>" class="nav-link ">
                                        <i class="icon-home"></i>
                                        <span class="title">داشبورد</span>
                                        <span class="selected"></span>
                                    </a>
                           </li>
<!--                           <li class="nav-item" id="">-->
<!--                                <a href="javascript:;" class="nav-link nav-toggle">-->
<!--                                    <i class="icon-users"></i>-->
<!--                                    <span class="title">مدیریت بلیطها</span>-->
<!--                                    <span class="arrow"></span>-->
<!--                                </a>-->
<!--                                <ul class="sub-menu">-->
<!--                                    <li class="nav-item" id="m-flights">-->
<!--                                        <a href="--><?php //echo base_url('admin/flights'); ?><!--" class="nav-link ">-->
<!--                                            <span class="title">برنامه پروازها</span>-->
<!--                                        </a>-->
<!--                                    </li>-->
<!--                                    <li class="nav-item active open" id="m-path-info">-->
<!--                                       <a href="--><?php //echo base_url('admin/path_info'); ?><!--" class="nav-link ">-->
<!--                                        <span class="title">مسیر پروازها</span>-->
<!--                                        </a>-->
<!--                                    </li>-->
<!--                                    <li class="nav-item" id="m-airports">-->
<!--                                        <a href="--><?php //echo base_url('admin/airports'); ?><!--" class="nav-link ">-->
<!--                                            <span class="title">فرودگاه</span>-->
<!--                                        </a>-->
<!--                                    </li>-->
<!--                                    <li class="nav-item" id="m-airlines">-->
<!--                                        <a href="--><?php //echo base_url('admin/airlines') ?><!--" class="nav-link ">-->
<!--                                            <span class="title">شرکت های هواپیمایی</span>-->
<!--                                        </a>-->
<!--                                    </li>-->
<!--                                    <li class="nav-item" id="m-flight-class">-->
<!--                                        <a href="--><?php //echo base_url('admin/flight_class') ?><!--" class="nav-link ">-->
<!--                                            <span class="title">کلاس های پروازی</span>-->
<!--                                        </a>-->
<!--                                    </li>-->
<!---->
<!--                                </ul>-->
<!--                            </li>-->
                           <?php //if(isset($_SESSION['isadmin']) && $_SESSION['isadmin']): ?>
                           <?php if(check_perm('view_settings')): ?>
                               <li class="nav-item start" id="m-settings">
                                        <a href="<?php echo base_url('admin/clients'); ?>" class="nav-link ">
                                            <i class="icon-picture"></i>
                                            <span class="title">مشتری ها</span>
                                            <span class="selected"></span>
                                        </a>
                               </li>
                            <?php endif; ?>

                            <?php if(check_perm('view_sales')): ?>
                                <li class="nav-item start" id="m-reports">
                                        <a href="<?php echo base_url('customers/sales'); ?>" class="nav-link ">
                                            <i class="icon-wallet"></i>
                                            <span class="title">فروش</span>
                                            <span class="selected"></span>
                                        </a>
                               </li>
                            <?php endif; ?>

                            <?php if(check_perm('view_users')): ?>
                                <li class="nav-item start" id="m-manage-users">
                                        <a href="<?php echo base_url('admin/users'); ?>" class="nav-link ">
                                            <i class="icon-user"></i>
                                            <span class="title">مدیریت کاربران</span>
                                            <span class="selected"></span>
                                        </a>
                               </li>                           
                           <?php endif; ?>
                    </ul>
                    <!-- END SIDEBAR MENU -->
                </div>
                <!-- END SIDEBAR -->
            </div>
            <!-- END SIDEBAR -->
            <script type="text/javascript">
              <?php if(isset($active_menu)): ?>
                $(document).ready(function()
                {
                  $("#<?php echo $active_menu ?>").addClass('active');  
                });
                <?php endif; ?>
            </script>
<div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
        <!-- BEGIN PAGE HEADER-->
