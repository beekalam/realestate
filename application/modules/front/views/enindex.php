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
<body>
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
                <a class="txt_white" href="<?php echo base_url("/front/register"); ?>">
                    SIGN UP
                </a>
                <?php endif; ?>
            </div>
            <div class="col-12 col-md-2 tell_col p-0">
                <a href="<?php echo base_url("front/purchase_track"); ?>" class="txt_white"><i class="fa fa-ticket fa-fw"></i>PURCHASE
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
                    <a class="nav-link   txt_gray" href="<?php echo base_url("front/aboutus"); ?>">ABOUT US</a>
                </li>
            </ul>
        </div>
    </nav>
</section>

<section class="slide_searchBox_sec">
    <div class="container-fluid slide_searchBox_cont">
        <div class="row sideshow_row">
            <div id="myslideshow" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="<?php echo $front_url; ?>img/hero_bg11.jpg" class="img-fluid">
                    </div>
                    <div class="carousel-item">
                        <img src="<?php echo $front_url; ?>img/20140906-DSC_2971-Edit22.jpg" class="img-fluid">
                    </div>

                </div>
            </div>
        </div>
        <div class="container search_box_cont">
            <div class="row search_box_row">
                <div class="col-12 col-md-6 search_box_col">
                    <ul class="nav nav-tabs ul_no_pad nav_cus">
                        <li class="nav-item text-center nav_itst">
                            <a class="nav-link active" data-toggle="tab" href="#flight_ticket">FLIGHT</a>
                        </li>
                        <li class="nav-item text-center nav_itst">
                            <a class="nav-link" data-toggle="tab" href="#train_ticket">TRAIN TICKET</a>
                        </li>
                        <li class="nav-item text-center nav_itst">
                            <a class="nav-link" data-toggle="tab" href="#tour_pack">TOUR</a>
                        </li>
                        <li class="nav-item text-center nav_itst">
                            <a class="nav-link" data-toggle="tab" href="#hotel_reserve">HOTEL RESERVATION</a>
                        </li>
                    </ul>
                    <div class="tabulation">
                        <div class="tab-content">
                            <div class="tab-pane active container" id="flight_ticket">
                                <!--<div class="row col_input">
                                 <div class="col-12 col-md-12 search_but ">
                                     <ul class="list-group list-group-flush ul_no_pad sp_wb">
                                     <li class="list-group-control sp_ib radio_cus_li checked">
                                         <label class="custom-control custom-radio checked">
                                             <input name="radio" type="radio" class="custom-control-input">
                                             <span class="custom-control-indicator "></span>
                                             <span class="custom-control-description txt_white">رفت و برگشت</span>
                                         </label>
                                     </li>
                                     <li class="list-group-control sp_ib radio_cus_li">
                                         <label class="custom-control custom-radio">
                                             <input name="radio" type="radio" class="custom-control-input">
                                             <span class="custom-control-indicator"></span>
                                             <span class="custom-control-description txt_white">فقط رفت</span>
                                         </label>
                                     </li>

                                 </ul>
                                 </div>
                             </div>-->
                                <div class="row">
                                    <div class="col-12 col-md-6 col_input">
                                        <div class="input-group input-group-sm">
                                            <span class="input-group-addon iconst" id="basic-addon1 "><i
                                                        class="fa font24 fa-plane takeoffing_airplain"></i></span>
                                            <input type="text" class="form-control bdn2" placeholder="FROM"
                                                   aria-label="flightfrom" aria-describedby="basic-addon1">

                                        </div>
                                        <div class="change_ico">
                                            <a id="change">
                                                <img src="<?php echo $front_url; ?>img/exchange.png" class="exch_ico_img"> </a>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="input-group input-group-sm">
                                            <span class="input-group-addon iconst" id="basic-addon1 "><i
                                                        class="fa font24 fa-plane landing_airplain"></i></span>
                                            <input type="text" class="form-control bdn2" placeholder="TO"
                                                   aria-label="flightto" aria-describedby="basic-addon1">

                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 pb-4-5 ">
                                        <div class="input-field">
                                            <label for="from" class="txt_white">DEPART</label>
                                            <input type="date" class="form-control"/>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 pb-4-5">
                                        <div class="input-field">
                                            <label for="from" class="txt_white">RETURN</label>
                                            <input type="date" class="form-control"/>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col_input">
                                        <div class="form-group ">
                                            <select class="selectpicker form-control " name="entrm_kind" id="entrm_kind"
                                                    data-style="btn btn-default dropdown-toggle bt_cus2 txt_gray">
                                                <option class="disabled selected">ADULTS</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                                <option>6</option>
                                                <option>7</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col_input">
                                        <div class="form-group ">
                                            <select class="selectpicker form-control " name="entrm_select"
                                                    id="entrm_select"
                                                    data-style="btn btn-default dropdown-toggle bt_cus2 txt_gray">
                                                <option class="disabled selected">CHILD(-11)</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                                <option>6</option>
                                                <option>7</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-md-12  search_but">
                                        <a href="ticket_search_result.html" class="btn btn-info btn_cuscyan2"
                                           role="button">SEARCH</a>
                                    </div>
                                </div>

                            </div>
                            <div class="tab-pane container" id="train_ticket">
                                <!--<div class="row col_input">
                                 <div class="col-12 col-md-12 search_but ">
                                     <ul class="list-group list-group-flush ul_no_pad sp_wb">
                                     <li class="list-group-control sp_ib radio_cus_li checked">
                                         <label class="custom-control custom-radio checked">
                                             <input name="radio" type="radio" class="custom-control-input">
                                             <span class="custom-control-indicator "></span>
                                             <span class="custom-control-description txt_white">رفت و برگشت</span>
                                         </label>
                                     </li>
                                     <li class="list-group-control sp_ib radio_cus_li">
                                         <label class="custom-control custom-radio">
                                             <input name="radio" type="radio" class="custom-control-input">
                                             <span class="custom-control-indicator"></span>
                                             <span class="custom-control-description txt_white">فقط رفت</span>
                                         </label>
                                     </li>

                                 </ul>
                                 </div>
                             </div>-->
                                <div class="row">
                                    <div class="col-12 col-md-6 col_input">
                                        <div class="input-group input-group-sm">
                                            <span class="input-group-addon iconst" id="basic-addon1 "><i
                                                        class="fa font24 fa-train"></i></span>
                                            <input type="text" class="form-control bdn2" placeholder="FROM"
                                                   aria-label="flightfrom" aria-describedby="basic-addon1">

                                        </div>
                                        <div class="change_ico">
                                            <a id="change">
                                                <img src="<?php echo $front_url; ?>img/exchange.png" class="exch_ico_img"> </a>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="input-group input-group-sm">
                                            <span class="input-group-addon iconst" id="basic-addon1 "><i
                                                        class="fa font24 fa-train"></i></span>
                                            <input type="text" class="form-control bdn2" placeholder="TO"
                                                   aria-label="flightto" aria-describedby="basic-addon1">

                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 pb-4-5 ">
                                        <div class="input-field">
                                            <label for="from" class="txt_white">DEPART</label>
                                            <input type="date" class="form-control"/>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 pb-4-5">
                                        <div class="input-field">
                                            <label for="from" class="txt_white">RETURN</label>
                                            <input type="date" class="form-control"/>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col_input">
                                        <div class="form-group ">
                                            <select class="selectpicker form-control " name="entrm_kind" id="entrm_kind"
                                                    data-style="btn btn-default dropdown-toggle bt_cus2 txt_gray">
                                                <option class="disabled selected">PASSENGERS</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                                <option>6</option>
                                                <option>7</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col_input">
                                        <div class="form-check form-check-inline custom-controls-stacked d-inline-block my-1">
                                            <label class="form-check-label custom-control fill-checkbox">
                                                <input class="form-check-input fill-control-input" type="checkbox">
                                                <span class="fill-control-description txt_white">CHARTER COUPE</span>
                                                <span class="fill-control-indicator"></span>

                                            </label>
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-12 col-md-12  search_but">
                                        <a href="event_search_result.html" class="btn btn-info btn_cuscyan2"
                                           role="button">SEARCH</a>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>


                <div class="col-12 col-md-6 co_motto_col">
                    <h1 class="co_motto">YOUR TEXT PLACE</h1>
                </div>

            </div>
        </div>
    </div>
</section>
<section class="main">
    <div class="container-fluid special_offer_cont ">
        <div class="row special_offers_row">
            <div class="col-md-12 special_offers_txt_col">
                <div class="row">

                    <div class="col-12 col-md-12 info_head_col">
                        <h1 class="text-center info_head txt_gray">SPECIAL TOURS</h1>
                    </div>

                </div>
                <hr class="hr_st">
            </div>
            <div class="col-12 col-md-12 columns slider_col">
                <div class="owl-carousel owl-theme">
                    <div class="item card">
                        <div class="col-12 col-md-12 offer_img_col">
                            <img class="special_offer_img" src=<?php echo $front_url; ?>"img/20140906-DSC_2971-Edit.jpg">
                        </div>
                        <div class="col-12 col-md-12 offer_price_col">
                            <span class="txt_white font20">FROM 4000$</span>
                        </div>
                        <div class="col-12 col-md-12 offer_info_col">
                            <h6 class="txt_gray">MORE INFO GOES HERE</h6>
                        </div>
                        <div class="col-12 col-md-12 offer_detail_col">
                            <div class="row info_row">
                                <div class="col-12 col-md-6">
                                    <span class="txt_gray"><i class="fa fa-clock-o txt_gray_bor"></i> TOUR DATE</span>
                                </div>
                                <div class="col-6 col-md-4">
                                    <a href="#" class="txt_gray">MORE</a>
                                </div>
                                <div class="col-6 col-md-2">
                                    <a class="txt_purple_dark"><i class="fa fa-cart-plus font23"></i></a>
                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="item card">
                        <div class="col-12 col-md-12 offer_img_col">
                            <img class="special_offer_img" src="<?php echo $front_url; ?>img/1fdd18.JPG">
                        </div>
                        <div class="col-12 col-md-12 offer_price_col">
                            <span class="txt_white font20">FROM 4000$</span>
                        </div>
                        <div class="col-12 col-md-12 offer_info_col">
                            <h6 class="txt_gray">MORE INFO GOES HERE</h6>
                        </div>
                        <div class="col-12 col-md-12 offer_detail_col">
                            <div class="row info_row">
                                <div class="col-md-6">
                                    <span class="txt_gray"><i class="fa fa-clock-o txt_gray_bor"></i> TOUR DATE</span>
                                </div>
                                <div class="col-6 col-md-4">
                                    <a href="#" class="txt_gray">MORE</a>
                                </div>
                                <div class="col-6 col-md-2">
                                    <a class="txt_purple_dark"><i class="fa fa-cart-plus font23"></i></a>
                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="item card">
                        <div class="col-12 col-md-12 offer_img_col">
                            <img class="special_offer_img" src="<?php echo $front_url; ?>img/jordan-travel-guide5.jpg">
                        </div>
                        <div class="col-12 col-md-12 offer_price_col">
                            <span class="txt_white font20">FROM 4000$</span>
                        </div>
                        <div class="col-12 col-md-12 offer_info_col">
                            <h6 class="txt_gray">MORE INFO GOES HERE</h6>
                        </div>
                        <div class="col-12 col-md-12 offer_detail_col">
                            <div class="row info_row">
                                <div class="col-12 col-md-6">
							       		<span class="txt_gray"><i class="fa fa-clock-o txt_gray_bor"></i>
							       		TOUR DATE</span>
                                </div>
                                <div class="col-6 col-md-4">
                                    <a href="#" class="txt_gray">MORE</a>
                                </div>
                                <div class="col-6 col-md-2">
                                    <a class="txt_purple_dark"><i class="fa fa-cart-plus font23"></i></a>
                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="item card">
                        <div class="col-12 col-md-12 offer_img_col">
                            <img class="special_offer_img" src="<?php echo $front_url; ?>img/javaherdasht-askli550x3451236127.jpg">
                        </div>
                        <div class="col-12 col-md-12 offer_price_col">
                            <span class="txt_white font20">FROM 4000$</span>
                        </div>
                        <div class="col-12 col-md-12 offer_info_col">
                            <h6 class="txt_gray">MORE INFO GOES HERE</h6>
                        </div>
                        <div class="col-12 col-md-12 offer_detail_col">
                            <div class="row info_row">
                                <div class="col-12 col-md-6">
							       		<span class="txt_gray"><i class="fa fa-clock-o txt_gray_bor"></i>
							       		TOUR DATE </span>
                                </div>
                                <div class="col-6 col-md-4">
                                    <a href="#" class="txt_gray">MORE</a>
                                </div>
                                <div class="col-6 col-md-2">
                                    <a class="txt_purple_dark"><i class="fa fa-cart-plus font23"></i></a>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="container-fluid moto_airlines_cont">
        <div class="row moto_row">
            <div class="col-12 col-md-4 moto_col">
                <div class="col-md-8 offset-md-4 col_moto_img">
                    <img class="moto_img" src="<?php echo $front_url; ?>img/payment-method1.png">
                </div>
                <div class="col-md-12 col_moto_txt">
                    <p class="text-center font18 bold txt_gray">
                        BUY FAST BY ONLINE PURCHASING WITH THE best PRICE GUARANTEE
                    </p>
                </div>

            </div>
            <div class="col-12 col-md-4 moto_col">
                <div class="col-md-8 offset-md-4 col_moto_img">
                    <img class="moto_img" src="<?php echo $front_url; ?>img/tap1.png">
                </div>
                <div class="col-md-12 col_moto_txt">
                    <p class="text-center font18 bold txt_gray">
                        IMMEDIATE ISSUANCE & REFUND ONLINE TICKET
                    </p>
                </div>

            </div>
            <div class="col-12 col-md-4 moto_col">
                <div class="col-md-8 offset-md-4 col_moto_img">
                    <img class="moto_img" src="<?php echo $front_url; ?>img/quality1.png">
                </div>
                <div class="col-md-12 col_moto_txt">
                    <p class="text-center font18 bold txt_gray">
                        PROVIDE CHARTER TICKETS FROM BEST CHARTERRERS

                    </p>
                </div>

            </div>
        </div>

        <div class="row airlines_row">
            <div class="col-4 col-md-2 airlin_col">
                <img class="airline_img" src="<?php echo $front_url; ?>img/5da3c62db1c3e971ea01c54afbc83bd3_XL.png">
            </div>
            <div class="col-4 col-md-2 airlin_col">
                <img class="airline_img" src="<?php echo $front_url; ?>img/Emirates-Logo.png">
            </div>
            <div class="col-4 col-md-2 airlin_col">
                <img class="airline_img" src="<?php echo $front_url; ?>img/Qatar-Airways-logo.png">
            </div>
            <div class="col-4 col-md-2 airlin_col">
                <img class="airline_img" src="<?php echo $front_url; ?>img/Turkish-Airlines-Logo-(1).png">
            </div>
            <div class="col-4 col-md-2 airlin_col">
                <img class="airline_img" src="<?php echo $front_url; ?>img/homalogo.png">
            </div>
            <div class="col-4 col-md-2 airlin_col">
                <img class="airline_img" src="<?php echo $front_url; ?>img/161125-FZ-3-412x144.png">
            </div>
        </div>
    </div>
</section>

<footer>
    <div class="container-fluid footer_cont">
        <div class="row footer_row">
            <div class="col-12 col-md-4 txt_gray">
                <div class="col-12 txt_gray col-md-12">
                    <h5 class="txt_gray">ONLINE TICKET RESERVATION </h5>
                </div>
                <div class="col-12 txt_gray col-md-12">
                    <ul class="list-unstyled txt_gray ul_pa">
                        <li class="pb-2"><a href="#" class="txt_gray  "><i
                                        class="fa fa-phone txt_purple_middle fa-fw"></i> <span class="bold">PHONE NUMBER :</span>
                                0098-71-32232428 </a></li>
                        <li class="pb-2"><a href="#" class="txt_gray  "><i
                                        class="fa fa-phone txt_purple_middle fa-fw"></i> <span class="bold">FAX :</span>
                                0098-71-32232428</a></li>
                        <li class="pb-2"><a href="#" class="txt_gray  "><i
                                        class="fa fa-map txt_purple_middle fa-fw"></i> <span
                                        class="bold">ADDRESS :</span><br>
                                Zand Street 71358-18415
                                Next to Iran Cinema
                                Shiraz, Iran</a></li>
                        <li></li>
                    </ul>
                </div>
                <div class="co-12 col-md-12 social_footer_col">
                    <div class="row social_footer_row">
                        <div class="col-1 col-md-1 tell_col">
                            <a class=" txt_white" href="#"><img class="si_ico_menu" src="<?php echo $front_url; ?>img/instagram_w.png"></a>
                        </div>
                        <div class="col-1 col-md-1 tell_col">
                            <a class=" txt_white" href="#"><img class="si_ico_menu" src="<?php echo $front_url; ?>img/telegramg.png"></a>
                        </div>
                        <div class="col-1 col-md-1 tell_col">
                            <a class=" txt_white" href="#"><img class="si_ico_menu" src="<?php echo $front_url; ?>img/linkeding.png"></a>
                        </div>
                        <div class="col-1 col-md-1 tell_col">
                            <a class=" txt_white" href="#"><img class="si_ico_menu" src="<?php echo $front_url; ?>img/facebookg-org.png"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 txt_gray">
                <div class="col-12 txt_gray col-md-12">
                    <h4 class="txt_gray">POPULAR DESTINATIONS</h4>
                </div>
                <div class="col-12 txt_gray col-md-12">
                    <ul class="list-unstyled txt_gray ul_pa">
                        <li class="pb-2"><a href="#" class="txt_gray  "><i
                                        class="fa fa-map-marker txt_purple_middle"></i> KISH</a></li>
                        <li class="pb-2"><a href="#" class="txt_gray  "><i
                                        class="fa fa-map-marker txt_purple_middle"></i> SHIRAZ</a></li>
                        <li class="pb-2"><a href="#" class="txt_gray  "><i
                                        class="fa fa-map-marker txt_purple_middle"></i> TEHRAN</a></li>
                        <li class="pb-2"><a href="#" class="txt_gray  "><i
                                        class="fa fa-map-marker txt_purple_middle"></i> ESFAHAN</a></li>
                        <li class="pb-2"><a href="#" class="txt_gray  "><i
                                        class="fa fa-map-marker txt_purple_middle "></i> YAZD</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-md-4  text-center namads_col">
                <div class="row">
                    <div class="col-6 col-md-6 enamad_col">
                        <img src="<?php echo $front_url; ?>img/namad1.png" class="namad_img">
                    </div>
                    <div class="col-6 col-md-6  enamad_col">
                        <img src="<?php echo $front_url; ?>img/samandehi.png" class="namad_img">
                    </div>

                </div>

            </div>
        </div>
        <div class="row back_blue">
            <div class="col-md-12 text-center txt_white">
                All rights reserved. ©unknown_reservation 2018.
            </div>
            <div class="col-md-12 text-center txt_white">
                Powered by <a title="" class="txt_white" href="http://fanacmp.ir/">FANA</a></div>
        </div>
    </div>
</footer>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-select.js"></script>
<script src="js/main_js.js"></script>
<script src="js/owl.carousel.js"></script>
<script>
    $(document).ready(function () {
        var owl = $('.owl-carousel');
        owl.owlCarousel({

            items: 3,
            nav: true,
            navText: ["<span class='fa fa-angle-right txt_gray font40'></span>", "<span class='fa fa-angle-left text txt_gray font40'></span>"],
            loop: true,
            margin: 15,
            autoplay: false,
            autoplayTimeout: 1000,
            autoplayHoverPause: true,

        });
        $('.play').on('click', function () {
            owl.trigger('play.owl.autoplay', [1000])
        })
        $('.stop').on('click', function () {
            owl.trigger('stop.owl.autoplay')
        })
    })
</script>
</body>
</html>
