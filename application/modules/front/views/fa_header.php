<?php $front_url = base_url('assets/front/'); ?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title><?php echo $page_title; ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo $settings["meta_description"]; ?>"/>
    <meta name="keywords" content="<?php echo $settings["keywords"]; ?>"/>

    <link rel="stylesheet" href="<?php echo base_url('assets/front/fa/css/bootstrap.css'); ?>">
    <!-- <link href="<?php echo base_url(); ?>assets/global/plugins/bootstrap/css/bootstrap-rtl.min.css" rel="stylesheet" type="text/css" /> -->
    <!-- <link href="<?php echo base_url(); ?>assets/global/plugins/bootstrap-switch/css/bootstrap-switch-rtl.min.css" rel="stylesheet" type="text/css" /> -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="<?php echo base_url('assets/front/fa/css/font-awesome.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/front/fa/css/bootstrap-select.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/front/fa/css/animate.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/front/fa/css/main.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/fonts/fontiran/css/fontiran.css'); ?>">
    <script src="<?php echo base_url('assets/front/fa/js/jquery-3.2.1.min.js'); ?>"></script>
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script> -->
    <style>
        .persian-font {
            font-family: yekan !important;
        }

        .persian-number {
            font-family: IRANSans !important;
        }
    </style>
</head>

<body class='<?php echo $body_class; ?>'>

<?php
if(!isset($_SESSION['login_in']))
    $this->load->view("_partials/fa_login_modal.php");
?>

<section class="menu_sec_tr">
    <div class="container-fluid info_menu fixed-top2">
        <div class="row info_menu_row">
            <div class="col-6 col-md-1 tell_col lang_col">
                <a href="<?php echo base_url("/front/index?lang=en"); ?>">
                    <span class="txt_white text-center"> EN </span>
                </a>
                <span class="txt_white text-center"> | </span>
                <a href="<?php echo base_url("/front/index?lang=fa"); ?>">
                    <span class="txt_white text-center"> FA </span>
                </a>
            </div>
            <div class="col-6 col-md-2 but_col_me">
                <?php if(isset($_SESSION["login_in"])): ?>
                    <a class="txt_white cursp" href="<?php echo base_url('front/profile'); ?>">
                        <i class="fa fa-user fa-fw"></i>
                        حساب کاربری/
                    </a>
                    <a class="txt_white" href="<?php echo base_url('login/logout'); ?>">
                        خروج
                    </a>
                <?php else: ?>
                    <a class="txt_white cursp" data-toggle="modal" data-target="#reg_lg_modal">
                        <i class="fa fa-user fa-fw"></i>
                        ورود /
                    </a>
                    <a class="txt_white" href="<?php echo base_url('front/register'); ?>">
                        عضویت در سایت
                    </a>
                <?php endif; ?>
            </div>
            <div class="col-12 col-md-2 tell_col">
                <a href="<?php echo base_url('front/purchase_track'); ?>"
                   class="txt_white"><i class="fa fa-ticket fa-fw"></i> پیگیری خرید </a>
            </div>
            <div class="co-12 col-md-7 social_top_col">
                <div class="row social_top_row">
                    <div class="col-1 col-md-1 tell_col">
                        <a class=" txt_white" href="#">
                            <img class="si_ico_menu" src="<?php echo $front_url; ?>img/instagram.png">
                        </a>
                    </div>
                    <div class="col-1 col-md-1 tell_col">
                        <a class=" txt_white" href="#"><img class="si_ico_menu"
                                                            src="<?php echo $front_url; ?>img/telegram.png"></a>
                    </div>
                    <div class="col-1 col-md-1 tell_col">
                        <a class=" txt_white" href="#"><img class="si_ico_menu"
                                                            src="<?php echo $front_url; ?>img/linkedin.png"></a>
                    </div>
                    <div class="col-1 col-md-1 tell_col">
                        <a class=" txt_white" href="#"><img class="si_ico_menu"
                                                            src="<?php echo $front_url; ?>img/facebook-logo-button.png"></a>
                    </div>
                    <div class="col-6 col-md-3 tell_col supp_tell">
                        <a href="#" class="txt_white"> پشتیبانی : 0713627577 <i class="fa fa-phone fa-fw"></i></a>
                    </div>
                    <div class="col-12 col-md-4 tell_col">
                        <a href="#" class="txt_white">
                            <span class="sn">info@gardeshgaran.com</span> : ایمیل <i class="fa fa-envelope fa-fw"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-md navbar-dark menu menu--adsila fixed-top2">
        <button class="navbar-toggler txt_purple_dark" type="button" data-toggle="collapse"
                data-target="#collapsibleNavbar">
            <span class="fa fa-bars txt_purple_dark"></span>
        </button>
        <a class="navbar-brand d-block d-sm-none" href="#"><img class="nav_mob_img"
                                                                src="<?php echo $front_url; ?>img/shadleen-logo-fa.png"></a>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav ul_no_pad">
                <li class="nav-item active ">
                    <a class="nav-link txt_gray" href="<?php echo base_url('/front'); ?>">خانه</a>
                </li>
                <!-- 																				<li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle txt_gray" href="#" data-toggle="dropdown">تفریحات</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="et_page.html">تفریحات روز </a>
                                <a class="dropdown-item" href="et_page.html">تفریحات عصر </a>
                              </div>
                      </li> -->
                <li class="nav-item  ">
                    <a class="nav-link   txt_gray" href="ticket_search_result.html">بلیت هواپیما</a>
                </li>
                <li class="nav-item  ">
                    <a class="nav-link   txt_gray" href="#"> بلیت قطار </a>
                </li>
                <li class="nav-item  ">
                    <a class="nav-link   txt_gray" href="#">تور</a>
                </li>
                <li class="nav-item  ">
                    <a class="nav-link txt_gray" href="#">رزرو هتل</a>
                </li>
                <li class="nav-item  ">
                    <a class="nav-link   txt_gray" href="notify_form_page.html">اطلاع رسانی</a>
                </li>
                <li class="nav-item  ">
                    <a class="nav-link   txt_gray" href="<?php echo base_url("front/contactus"); ?>">تماس با ما</a>
                </li>
                <li class="nav-item  ">
                    <a class="nav-link   txt_gray" href="<?php echo base_url("front/aboutus"); ?>">درباره ما</a>
                </li>
            </ul>
        </div>
    </nav>
</section>
<?php if ($render_section_main): ?>
<section class="main main_pad">
    <div class="container-fluid">
        <div class="row main_filter_row">
            <?php endif; ?>

