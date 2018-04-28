<?php $front_url = base_url('/assets/front/'); ?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title><?php echo $page_title; ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo $settings["meta_description"]; ?>" />
    <meta name="keywords" content="<?php echo $settings["keywords"]; ?>" />
    <?php $front_url = base_url('/assets/front/'); ?>

    <link rel="stylesheet" href="<?php echo base_url('assets/front/en/css/bootstrap.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/front/en/css/font-awesome.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/front/en/css/bootstrap-select.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/front/en/css/animate.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/front/en/css/main.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/datepicker/bootstrap-datepicker.min.css'); ?>">

    <script src="<?php echo $front_url; ?>en/js/jquery-3.2.1.min.js"></script>
    <script src="<?php echo $front_url; ?>en/js/popper.min.js"></script>
    <script src="<?php echo $front_url; ?>en/js/bootstrap.min.js"></script>
    <script src="<?php echo $front_url; ?>en/js/bootstrap-select.js"></script>
    <script src="<?php echo $front_url; ?>en/js/main_js.js"></script>
    <script src="<?php echo $front_url; ?>en/js/owl.carousel.js"></script>
    <script src="<?php echo base_url('assets/datepicker/bootstrap-datepicker.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/datepicker/bootstrap-datepicker.fa.min.js'); ?>"></script>
    <!-- // mansouri    -->
    <link rel="stylesheet" href="<?php echo base_url('assets/fonts/fontiran/css/fontiran.css'); ?>">
    <!--select2-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
</head>
<body class='<?php echo $body_class; ?>'>
<?php
if(!isset($_SESSION['login_in']))
    $this->load->view("_partials/en_login_modal.php");
?>


<section class="menu_sec_tr">
    <div class="container-fluid info_menu fixed-top2">
        <div class="row info_menu_row">
            <div class="col-6 col-md-1 tell_col lang_col pr-0">
                <a href="<?php echo base_url("/front/index?lang=en"); ?>">
                    <span class="txt_white text-center"> EN </span>
                </a>
                <span class="txt_white text-center"> | </span>
                <a href="<?php echo base_url("/front/index?lang=fa"); ?>">
                    <span class="txt_white text-center"> FA </span>
                </a>
            </div>
            <div class="col-6 col-md-2 but_col_me p-0">
                <?php if(isset($_SESSION["login_in"])): ?>
                    <a class="txt_white cursp" href="<?php echo base_url('front/profile'); ?>">
                        <i class="fa fa-user fa-fw"></i>
                        Profile /
                    </a>
                    <a class="txt_white" href="<?php echo base_url('login/logout'); ?>">
                        Logout
                    </a>
                <?php else: ?>
                <a class="txt_white cursp" data-toggle="modal" data-target="#reg_lg_modal" href="#">
                    <i class="fa fa-user fa-fw"></i>
                    SIGN IN /
                </a>
                <a class="txt_white" href="<?php echo base_url('front/register'); ?>">
                    SIGN UP
                </a>
                <?php endif; ?>
            </div>
            <div class="col-12 col-md-2 tell_col p-0">
                <a href="purchase_tracking.html" class="txt_white"><i class="fa fa-ticket fa-fw"></i>PURCHASE
                    TRACKING</a>
            </div>
            <div class="co-12 col-md-7 social_top_col">
                <div class="row social_top_row">
                    <div class="col-6 col-md-4 tell_col supp_tell">
                        <a href="#" class="txt_white"><i class="fa fa-phone fa-fw"></i> SUPPORT : +98713627577 </a>
                    </div>
                    <div class="col-12 col-md-4 tell_col">
                        <a href="#" class="txt_white">
                            <span class="sn"><i class="fa fa-envelope fa-fw"></i> EMAIL : info@gardeshgaran.com </span>
                        </a>
                    </div>
                    <div class="col-1 col-md-1 tell_col">
                        <a class=" txt_white" href="#"><img class="si_ico_menu" src="<?php echo $front_url; ?>img/instagram.png"></a>
                    </div>
                    <div class="col-1 col-md-1 tell_col">
                        <a class=" txt_white" href="#"><img class="si_ico_menu" src="<?php echo $front_url; ?>img/telegram.png"></a>
                    </div>
                    <div class="col-1 col-md-1 tell_col">
                        <a class=" txt_white" href="#"><img class="si_ico_menu" src="<?php echo $front_url; ?>img/linkedin.png"></a>
                    </div>
                    <div class="col-1 col-md-1 tell_col">
                        <a class=" txt_white" href="#"><img class="si_ico_menu" src="<?php echo $front_url; ?>img/facebook-logo-button.png"></a>
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
        <a class="navbar-brand d-block d-sm-none" href="#"><img class="nav_mob_img" src="<?php echo $front_url; ?>img/shadleen-logo-fa.png"></a>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav ul_no_pad">
                <li class="nav-item active ">
                    <a class="nav-link txt_gray" href="index.html">HOME</a>
                </li>
                <!--<li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle txt_gray" href="#" data-toggle="dropdown">تفریحات</a>
                      <div class="dropdown-menu">
                          <a class="dropdown-item" href="et_page.html">تفریحات روز </a>
                          <a class="dropdown-item" href="et_page.html">تفریحات عصر </a>
                        </div>
                </li>-->
                <li class="nav-item  ">
                    <a class="nav-link   txt_gray" href="ticket_search_result.html">FLIGHTS</a>
                </li>
                <li class="nav-item  ">
                    <a class="nav-link   txt_gray" href="#"> TRAIN TICKETS </a>
                </li>
                <li class="nav-item  ">
                    <a class="nav-link   txt_gray" href="#">TOURS</a>
                </li>
                <li class="nav-item  ">
                    <a class="nav-link txt_gray" href="#">HOTEL RESERVATION</a>
                </li>
                <li class="nav-item  ">
                    <a class="nav-link   txt_gray" href="notify_form_page.html">INFORM</a>
                </li>
                <li class="nav-item  ">
                    <a class="nav-link   txt_gray" href="<?php echo base_url("front/contactus"); ?>">CONTACT US</a>
                </li>
                <li class="nav-item  ">
                    <a class="nav-link   txt_gray" href="<?php echo base_url("front/contactus"); ?>">ABOUT US</a>
                </li>
            </ul>
        </div>
    </nav>
</section>

<section class="main">

