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

    <link rel="stylesheet" href="<?php echo base_url('assets/front/fa/css/bootstrap.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/front/fa/css/font-awesome.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/front/fa/css/bootstrap-select.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/front/fa/css/animate.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/front/fa/css/main.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/datepicker/bootstrap-datepicker.min.css'); ?>">

    <script src="<?php echo $front_url; ?>fa/js/jquery-3.2.1.min.js"></script>
    <script src="<?php echo $front_url; ?>fa/js/popper.min.js"></script>
    <script src="<?php echo $front_url; ?>fa/js/bootstrap.min.js"></script>
    <script src="<?php echo $front_url; ?>fa/js/bootstrap-select.js"></script>
    <script src="<?php echo $front_url; ?>fa/js/main_js.js"></script>
    <script src="<?php echo $front_url; ?>fa/js/owl.carousel.js"></script>
    <script src="<?php echo base_url('assets/datepicker/bootstrap-datepicker.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/datepicker/bootstrap-datepicker.fa.min.js'); ?>"></script>
    <!-- // mansouri    -->
    <link rel="stylesheet" href="<?php echo base_url('assets/fonts/fontiran/css/fontiran.css'); ?>">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <style>
        /*.custom-combobox {*/
            /*position: relative;*/
            /*display: inline-block;*/
        /*}*/
        /*.custom-combobox-toggle {*/
            /*position: absolute;*/
            /*top: 0;*/
            /*bottom: 0;*/
            /*margin-left: -1px;*/
            /*margin-right: -1px;*/
            /*padding: 0;*/
        /*}*/
        /*.custom-combobox-input {*/
            /*margin: 0;*/
            /*padding: 5px 10px;*/
        /*}*/
    </style>
<!--select2-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <!--    toastr -->
    <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet" />
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <!--jquery validate-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.js"></script>

    <style>
	 /* datepicker fix */
   #ui-datepicker-div{
   	z-index: 100 !important;
   }
   .change_ico{
   		z-index: 99 !important;
   }

   /* for chage_ico flights*/
   .from-input-group{
   	 padding-left:5px
   }
   .to-input-group{
   		padding-right:5px;
   }

	 /* trains*/
	 .train-from-inputgroup{ padding-left:5px; }
	 .train-to-inputgroup{padding-right: 5px; }
   /*************************/
   #flightfrom-select,#flight-to-select,#train_from,#train_to{
   	height:34px;
   }
   /*******************/
     .persian-font {
          font-family: yekan !important;
      }

     .persian-number {
         font-family: IRANSans !important;
     }

</style>
</head>
<body>

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
                <a href="<?php echo base_url("front/purchase_track"); ?>" class="txt_white"><i class="fa fa-ticket fa-fw"></i> پیگیری خرید </a>
            </div>
            <div class="co-12 col-md-7 social_top_col">
                <div class="row social_top_row">
                    <div class="col-1 col-md-1 tell_col">
                        <a class=" txt_white" href="#"><img class="si_ico_menu"
                                                            src="<?php echo $front_url; ?>img/instagram.png"></a>
                    </div>
                    <div class="col-1 col-md-1 tell_col">
                        <a class=" txt_white" href="#"><img class="si_ico_menu"
                                                            src="<?php echo $front_url; ?>/img/telegram.png"></a>
                    </div>
                    <div class="col-1 col-md-1 tell_col">
                        <a class=" txt_white" href="#"><img class="si_ico_menu"
                                                            src="<?php echo $front_url; ?>/img/linkedin.png"></a>
                    </div>
                    <div class="col-1 col-md-1 tell_col">
                        <a class=" txt_white" href="#"><img class="si_ico_menu"
                                                            src="<?php echo $front_url; ?>/img/facebook-logo-button.png"></a>
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
                                                                src="<?php echo $front_url; ?>/img/shadleen-logo-fa.png"></a>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav ul_no_pad">
                <li class="nav-item active ">
                    <a class="nav-link txt_gray" href="<?php echo base_url("front/index"); ?>">خانه</a>
                </li>
                <!--<li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle txt_gray" href="#" data-toggle="dropdown">تفریحات</a>
                      <div class="dropdown-menu">
                          <a class="dropdown-item" href="et_page.html">تفریحات روز </a>
                          <a class="dropdown-item" href="et_page.html">تفریحات عصر </a>
                        </div>
                </li>-->
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
                    <a class="nav-link  txt_gray" href="<?php echo base_url("front/aboutus"); ?>">درباره ما</a>
                </li>
            </ul>
        </div>
    </nav>
</section>

<section class="slide_searchBox_sec">
    <div class="container-fluid slide_searchBox_cont">
        <!--        slider -->
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
        <!--        search box-->
        <div class="container search_box_cont">
            <div class="row search_box_row">
                <div class="col-12 col-md-6 search_box_col">
                    <ul class="nav nav-tabs ul_no_pad nav_cus">
                        <li class="nav-item text-center nav_itst">
                            <a class="nav-link active" data-toggle="tab" href="#flight_ticket">پرواز</a>
                        </li>
                        <li class="nav-item text-center nav_itst">
                            <a class="nav-link" data-toggle="tab" href="#train_ticket">بلیت قطار</a>
                        </li>
                        <li class="nav-item text-center nav_itst">
                            <a class="nav-link" data-toggle="tab" href="#tour_pack">تور</a>
                        </li>
                        <li class="nav-item text-center nav_itst">
                            <a class="nav-link" data-toggle="tab" href="#hotel_reserve">رزرو هتل</a>
                        </li>
                    </ul>
                    <div class="tabulation">
                        <div class="tab-content">
                            <!-- flight ticket search -->
                            <div class="tab-pane active container" id="flight_ticket">
                                <form method="POST" action="<?php echo base_url("front/ticket_search"); ?>" id="flight-search-form">
                                    <div class="row col_input">
                                        <div class="col-12 col-md-12 search_but ">
                                            <ul class="list-group list-group-flush ul_no_pad sp_wb">
                                                <li class="list-group-control sp_ib radio_cus_li checked">
                                                    <label class="custom-control custom-radio checked">
                                                        <input name="roundtrip" type="radio" class="custom-control-input" value="YES">
                                                        <span class="custom-control-indicator "></span>
                                                        <span class="custom-control-description txt_white">رفت و برگشت</span>
                                                    </label>
                                                </li>
                                                <li class="list-group-control sp_ib radio_cus_li">
                                                    <label class="custom-control custom-radio">
                                                        <input name="roundtrip" type="radio" class="custom-control-input" value="NO">
                                                        <span class="custom-control-indicator"></span>
                                                        <span class="custom-control-description txt_white">فقط رفت</span>
                                                    </label>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-md-6 col_input">
                                            <div class="input-group input-group-sm from-input-group">
    <!--                                            <input type="text" class="form-control bdn" placeholder="پرواز از"-->
    <!--                                                   aria-label="flightfrom" aria-describedby="basic-addon1">-->
<!--                                                <input type="text" id="flight_from_input" value="" data-iatacode=""/>-->
                                                <select class="form-control bdn" placeholder="پرواز از"
                                                         name="flightfrom" id="flightfrom-select">
                                                    <?php echo city_airport_select(); ?>
                                                </select>
                                                <script>
                                                    var airports = <?php echo json_encode(city_airport()); ?>;
                                                    function like(input)
                                                    {
//                                                        "<option value='%s'>%s</option>",$v["IATACode"],$v["city"]);
                                                        var ret= [];
                                                        for(var i= 0;i < airports.length; ++i)
                                                        {
                                                            var found = airports[i]["name"].toLowerCase().indexOf(input) != -1;
                                                            found = found || (airports[i]["en"].toLowerCase().indexOf(input)!=-1);
                                                            found= found || (airports[i]["IATACode"].toLowerCase().indexOf(input)!=-1);
                                                            if(found){
                                                                ret.push(airports[i]);
                                                            }
                                                        }
                                                        return ret;
                                                    }

                                                    $(document).ready(function(){
                                                        // $("#flightfrom-select").select2();

                                                        $('body').on('keyup','.select2-search__field', function() {
//                                                            $("#flightfrom-select").val('');
//                                                            var ret = like($(this).val());
//                                                            $("#flightfrom-select").select2('data',{id:name,text:name});
//                                                            for(var i=0;i < ret.length; ++i) {
////                                                                console.log(ret[i]["name"]);
//                                                                var option = new Option(ret[i]["name"], ret[i]["name"], false, false);
////                                                                console.log(option);
//                                                                $("#flightfrom-select").append(option).trigger("change");
////                                                                $("#flightfrom-select").append("<option value=''>"+ret[i]["name"] + "</option>");
//                                                            }
//                                                            $("#flightfrom-select").trigger('change');
                                                        });
                                                    }); //document.ready

                                                </script>
                                                        <span class="input-group-addon iconst" id="basic-addon1 "><i
                                                            class="fa font24 fa-plane takeoffing_airplain"></i></span>
                                            </div>
                                            <div class="change_ico">
                                                <a id="change">
                                                    <img src="<?php echo $front_url; ?>img/exchange.png"
                                                         class="exch_ico_img"> </a>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="input-group input-group-sm to-input-group">
    <!---->
    <!--                                            <input type="text" class="form-control bdn" placeholder="پرواز به"-->
    <!--                                                   aria-label="flightto" aria-describedby="basic-addon1">-->
                                                <select  class="form-control bdn" placeholder="پرواز به"
                                                        aria-label="flightto" name="flightto" aria-describedby="basic-addon1" id="flight-to-select">
                                                    <?php echo city_airport_select(); ?>
                                                </select>
<!--                                                <span class="input-group-addon iconst" id="basic-addon1 "><i-->
<!--                                                            class="fa font24 fa-plane landing_airplain"></i></span>-->
<!--                                                <script>-->
<!--                                                    $(document).ready(function(){-->
<!--                                                        $("#flight-to-select").select2();-->
<!--                                                    }); //document.ready-->
<!--                                                </script>-->
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6 pb-4-5 ">
                                            <div class="input-field">
                                                <label for="from" class="txt_white">تاریخ رفت</label>
                                                <input type="text" class="form-control" 
                                                			name="flight_from_date" id="flight_from_date"/>
                                            </div>

                                           
                                        </div>
                                        <div class="col-12 col-md-6 pb-4-5">
                                            <div class="input-field">
                                                <label for="from" class="txt_white">تاریخ برگشت</label>
                                                <input type="text" class="form-control" 
                                                  name="flight_return_date" id="flight_return_date"/>
                                            </div>
                                        </div>
                                         <script>
                                            	(function()
                                            	{
                                            		$("#flight_from_date").datepicker(
                                            			{
                                            			  isRTL: true, 
                                            			  changeMonth: true,
                                            			  changeYear: true,
                                            			  dateFormat: "yy/mm/dd"    
                                            			});
                                            		$("#flight_return_date").datepicker(
                                            		{
                                            		  isRTL: true, 
                                            		  changeMonth: true,
                                            		  changeYear: true,
                                            		  dateFormat: "yy/mm/dd"    
                                            		});
                                            		
                                            	})();
                                            </script>
                                        <div class="col-12 col-md-6 col_input">
                                            <div class="form-group ">
                                                <select class="selectpicker form-control " name="entrm_kind" id="entrm_kind"
                                                        data-style="btn btn-default dropdown-toggle bt_cus2 txt_gray">
                                                    <option class="disabled selected">تعداد بزرگسال</option>
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
                                                    <option class="disabled selected">كودك (11-)</option>
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
                                            <input type="submit" value="جستجو" class="btn btn-info btn_cuscyan2" id="flight-seach-submit" />
    <!--                                        <a href="ticket_search_result.html" class="btn btn-info btn_cuscyan2"-->
    <!--                                           role="button">جستجو</a>-->
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- train ticket search -->
                            <div class="tab-pane container" id="train_ticket">
                                <form method="POST" action="<?php echo base_url("front/train_search"); ?>">
                                    <div class="row col_input">
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
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-md-6 col_input">
                                            <div class="input-group input-group-sm train-from-inputgroup">
<!--                                                <input type="text" class="form-control bdn" placeholder="مبدا"-->
<!--                                                       aria-label="flightfrom" -->
<!--                                                       aria-describedby="basic-addon1">-->
                                                <select class="form-control bdn" placeholder="پرواز از"
                                                        name="train_from"
                                                        id="train_from" >
                                                    <?php echo city_airport_select(); ?>
                                                </select>
                                                    <span class="input-group-addon iconst" id="basic-addon1 "><i
                                                            class="fa font24 fa-train"></i></span>
                                            </div>
                                            <div class="change_ico">
                                                <a id="change">
                                                    <img src="<?php echo $front_url; ?>img/exchange.png"
                                                         class="exch_ico_img"> </a>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="input-group input-group-sm train-to-inputgroup">
                                                <select class="form-control bdn" placeholder="پرواز از"
                                                         name="train_to" 
                                                        	id="train_to">
                                                    <?php echo city_airport_select(); ?>
                                                </select>
<!--                                                <input type="text" class="form-control bdn" placeholder="مقصد"-->
<!--                                                       aria-label="flightto" aria-describedby="basic-addon1">-->
                                                    <span class="input-group-addon iconst" id="basic-addon1 "><i
                                                            class="fa font24 fa-train"></i></span>
                                            </div>
                                        </div>
                                    
                                        <div class="col-12 col-md-6 pb-4-5 ">
                                            <div class="input-field">
                                                <label for="from" class="txt_white">تاریخ رفت</label>
                                                <input type="text" class="form-control" 
                                                	name="train_date"
                                                	id="train_from_date" />
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6 pb-4-5">
                                            <div class="input-field">
                                                <label for="from" class="txt_white">تاریخ برگشت</label>
                                                <input type="text" class="form-control" 
                                                	name="train_return_date"
                                                	id="train_to_date" />
                                            </div>
                                        </div>
                                        <script>
                                        	 $(document).ready(function()
                                        	 {
                                        	 	  $("#train_from_date").datepicker(
                                        	 	  	{
                                        	 	  	  isRTL: true, 
                                        	 	  	  changeMonth: true,
                                        	 	  	  changeYear: true,
                                        	 	  	  dateFormat: "yy/mm/dd"    
                                        	 	  	});
                                        	 	  $("#train_to_date").datepicker(
                                        	 	  {
                                        	 	    isRTL: true, 
                                        	 	    changeMonth: true,
                                        	 	    changeYear: true,
                                        	 	    dateFormat: "yy/mm/dd"    
                                        	 	  });
                                        	 });
                                        </script>
                                        <div class="col-12 col-md-6 col_input">
                                            <div class="form-group ">
                                                <select class="selectpicker form-control " name="entrm_kind" id="entrm_kind"
                                                        data-style="btn btn-default dropdown-toggle bt_cus2 txt_gray">
                                                    <option class="disabled selected">تعداد مسافر</option>
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
                                                    <span class="fill-control-description txt_white">کوپه دربس</span>
                                                    <span class="fill-control-indicator"></span>

                                                </label>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-md-12  search_but">
                                            <input type="submit" value="جستجو" class="btn btn-info btn_cuscyan2" />
<!--                                            <a href="event_search_result.html" class="btn btn-info btn_cuscyan2"-->
<!--                                               role="button">جستجو</a>-->
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>


                <div class="col-12 col-md-6 co_motto_col">
                    <h1 class="co_motto"> 
                    	<?php 
                    			$settings["business_moto"] = empty($settings["business_moto"]) ? "شعار شما در این مکان قرار می گیرد" : $settings["business_moto"];
                    			echo $settings["business_moto"];
                    	 ?>
                    </h1>
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
                        <h1 class="text-center info_head txt_gray">تورهای ویژه</h1>
                    </div>
                </div>
                <hr class="hr_st">
            </div>
            <div class="col-12 col-md-12 columns slider_col">
                <div class="owl-carousel owl-theme">
                    <div class="item card">
                        <div class="col-12 col-md-12 offer_img_col">
                            <img class="special_offer_img"
                                 src="<?php echo $front_url; ?>img/20140906-DSC_2971-Edit.jpg">
                        </div>
                        <div class="col-12 col-md-12 offer_price_col">
                            <span class="txt_white font20">از 450.000 تومان</span>
                        </div>
                        <div class="col-12 col-md-12 offer_info_col">
                            <h6 class="txt_gray">توضیحات پیشنهاد در اینجا قرار میگیرد</h6>
                        </div>
                        <div class="col-12 col-md-12 offer_detail_col">
                            <div class="row info_row">
                                <div class="col-12 col-md-6">
                                    <span class="txt_gray"><i class="fa fa-clock-o txt_gray_bor"></i> تاریخ تور</span>
                                </div>
                                <div class="col-6 col-md-4">
                                    <a href="#" class="txt_gray">جزییات بیشتر</a>
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
                            <span class="txt_white font20">از 450.000 تومان</span>
                        </div>
                        <div class="col-12 col-md-12 offer_info_col">
                            <h6 class="txt_gray">توضیحات پیشنهاد در اینجا قرار میگیرد</h6>
                        </div>
                        <div class="col-12 col-md-12 offer_detail_col">
                            <div class="row info_row">
                                <div class="col-md-6">
                                    <span class="txt_gray"><i class="fa fa-clock-o txt_gray_bor"></i> تاریخ تور</span>
                                </div>
                                <div class="col-6 col-md-4">
                                    <a href="#" class="txt_gray">جزییات بیشتر</a>
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
                            <span class="txt_white font20">از 450.000 تومان</span>
                        </div>
                        <div class="col-12 col-md-12 offer_info_col">
                            <h6 class="txt_gray">توضیحات پیشنهاد در اینجا قرار میگیرد</h6>
                        </div>
                        <div class="col-12 col-md-12 offer_detail_col">
                            <div class="row info_row">
                                <div class="col-12 col-md-6">
							       		<span class="txt_gray"><i class="fa fa-clock-o txt_gray_bor"></i>
							       		تاریخ تور</span>
                                </div>
                                <div class="col-6 col-md-4">
                                    <a href="#" class="txt_gray">جزییات بیشتر</a>
                                </div>
                                <div class="col-6 col-md-2">
                                    <a class="txt_purple_dark"><i class="fa fa-cart-plus font23"></i></a>
                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="item card">
                        <div class="col-12 col-md-12 offer_img_col">
                            <img class="special_offer_img"
                                 src="<?php echo $front_url; ?>img/javaherdasht-askli550x3451236127.jpg">
                        </div>
                        <div class="col-12 col-md-12 offer_price_col">
                            <span class="txt_white font20">از 450.000 تومان</span>
                        </div>
                        <div class="col-12 col-md-12 offer_info_col">
                            <h6 class="txt_gray">توضیحات پیشنهاد در اینجا قرار میگیرد</h6>
                        </div>
                        <div class="col-12 col-md-12 offer_detail_col">
                            <div class="row info_row">
                                <div class="col-12 col-md-6">
							       		<span class="txt_gray"><i class="fa fa-clock-o txt_gray_bor"></i>
							       		تاریخ تور </span>
                                </div>
                                <div class="col-6 col-md-4">
                                    <a href="#" class="txt_gray">جزییات بیشتر</a>
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
                        خرید آنلاین و سریع با گارانتی بهترین قیمت
                    </p>
                </div>

            </div>
            <div class="col-12 col-md-4 moto_col">
                <div class="col-md-8 offset-md-4 col_moto_img">
                    <img class="moto_img" src="<?php echo $front_url; ?>img/tap1.png">
                </div>
                <div class="col-md-12 col_moto_txt">
                    <p class="text-center font18 bold txt_gray">
                        صدور آنی و استرداد آنلاین بلیط سیستمی
                    </p>
                </div>

            </div>
            <div class="col-12 col-md-4 moto_col">
                <div class="col-md-8 offset-md-4 col_moto_img">
                    <img class="moto_img" src="<?php echo $front_url; ?>img/quality1.png">
                </div>
                <div class="col-md-12 col_moto_txt">
                    <p class="text-center font18 bold txt_gray">
                        ارایه‌ی بلیط چارتر، از معتبرترین چارترکننده‌ها
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
                    <h5 class="txt_gray"> رزرواسیون آنلاین بلیت </h5>
                </div>
                <div class="col-12 txt_gray col-md-12">
                    <ul class="list-unstyled txt_gray ul_pa">
                        <li><a href="#" class="txt_gray  "> <i class="fa fa-phone txt_purple_middle"></i> شماره تلفن :
                                0713627577</a></li>
                        <li><a href="#" class="txt_gray  "> <i class="fa fa-phone txt_purple_middle"></i> فکس :
                                071345678 </a></li>
                        <li><a href="#" class="txt_gray  "> <i class="fa fa-map txt_purple_middle"></i> آدرس : شیراز ،
                                خیابان اردیبهشت شرقی، برج IT ، طبقه هفتم ، واحد 73</a></li>
                        <li></li>
                    </ul>
                </div>
                <div class="co-12 col-md-12 social_footer_col">
                    <div class="row social_footer_row">
                        <div class="col-1 col-md-1 tell_col">
                            <a class=" txt_white" href="<?php echo $settings["instagram_url"]; ?>">
                            	<img class="si_ico_menu"
                              		 src="<?php echo $front_url; ?>img/instagram_w.png"></a>
                        </div>
                        <div class="col-1 col-md-1 tell_col">
                            <a class=" txt_white" href="<?php echo $settings["telegram_url"]; ?>">
                            	<img class="si_ico_menu"
                              		 src="<?php echo $front_url; ?>img/telegramg.png"></a>
                        </div>
                        <div class="col-1 col-md-1 tell_col">
                            <a class=" txt_white" href="#"><img class="si_ico_menu"
                                                                src="<?php echo $front_url; ?>img/linkeding.png"></a>
                        </div>
                        <div class="col-1 col-md-1 tell_col">
                            <a class=" txt_white" href="#"><img class="si_ico_menu"
                                                                src="<?php echo $front_url; ?>img/facebookg-org.png"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 txt_gray">
                <div class="col-12 txt_gray col-md-12">
                    <h4 class="txt_gray">پربازدیدترین مقاصد</h4>
                </div>
                <div class="col-12 txt_gray col-md-12">
                    <ul class="list-unstyled txt_gray ul_pa">
                        <li><a href="#" class="txt_gray  "><i class="fa fa-map-marker txt_purple_middle"></i> دبی</a>
                        </li>
                        <li><a href="#" class="txt_gray  "><i class="fa fa-map-marker txt_purple_middle"></i> کیش</a>
                        </li>
                        <li><a href="#" class="txt_gray  "><i class="fa fa-map-marker txt_purple_middle"></i> شیراز</a>
                        </li>
                        <li><a href="#" class="txt_gray  "><i class="fa fa-map-marker txt_purple_middle"></i> یزد</a>
                        </li>
                        <li><a href="#" class="txt_gray  "><i class="fa fa-map-marker txt_purple_middle"></i> کرمان</a>
                        </li>
                        <li><a href="#" class="txt_gray  "><i class="fa fa-map-marker txt_purple_middle "></i> شمال</a>
                        </li>
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
                کلیه ی حقوق این سایت برای مرکز رزرواسیون تفریحات بلیت محفوظ می باشد
            </div>
            <div class="col-md-12 text-center txt_white">
                Powered by <a title="" class="txt_white" href="http://fanacmp.ir/">FANA</a></div>
        </div>
    </div>
</footer>

<script>

function toggleDropdown(element){
    if(element.size == 0) element.size = element.length;
    else element.size = 0;
}
function init_selects()
{
    // disable same city select
//    $("#flightfrom-select").change(function()
//    {
//        $("#flight-to-select > option").each(function() {
//             $(this).prop('disabled',false);
//        });
//
//        var s = $("#flightfrom-select").val();
//        $("#flight-to-select option[value='" + s + "']").prop('disabled','disabled');
//    });
    ////////////////////////////////////////////////////////////////////////////////
    // disable same city select
    $("#train_from").change(function()
    {
        $("#train_to > option").each(function()
        {
            $(this).prop('disabled',false);
        });

        var s = $("#train_from").val();
        $("#train_to option[value='" + s + "']").prop('disabled','disabled');
    });
}
//$(document).ready(function(){
//    $("#flight_from_input").keyup(function()
//    {
//        var query = $("#flight_from_input").val();
//        $.post("<?php //echo base_url("front/airports"); ?>//",{"query":query},function(data)
//        {
//            data = JSON.parse(data);
//            var html = "";
//            if(data.length > 0){
//                for(var i = 0; i < data.length; ++i){
//                    html += '<option value="'+data[i]['name']+' - '+data[i]['name']+'">'+data[i]['name']+' - '+data[i]['name']+'</option>';
//                }
//            }
//
//            $("#flightfrom-select").html(html);
//            $("#flightfrom-select").fadeIn();
////            $("#flightfrom-select").click();
////            $("#flightfrom-select").trigger("click");
////            toggleDropdown(document.getElementById("flightfrom-select"));
//        });
//    });
//    $("#flightfrom-select").change(function()
//    {
//        var val = $(this).val();
//        $("#test_input").val(val);
//        $("#flightfrom-select").fadeOut();
////        $(this).hide();
//    })
//}); //document.ready
</script>

<script>
    $("#flight-seach-submit").click(function(e)
    {
       var valid = true;
       // start date selected
       if($("#flight_from_date").val()==""){
           toastr.error("تاریخ شروع انتخاب نشده است.");
           valid = false;
       }
        //roundtrip end date selected
        if($("input[name='roundtrip']:checked").val()=="YES" && $("#flight_return_date").val()==""){
           toastr.error("تاریخ پایان انتخاب نشده است.");
           valid = false;
        }
        //source and destination not equal
        if($("#flightfrom-select").val() == $("#flight-to-select").val()){
            toastr.error("مقدار مبدا و مقصد یکی است.");
            valid = false;
        }
       if(!valid){
           e.preventDefault();
       }
    });
</script>

<script>

    $(document).ready(function () {
        init_selects();
        var owl = $('.owl-carousel');
        owl.owlCarousel({
            rtl: true,
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
