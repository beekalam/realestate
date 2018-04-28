
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>شرکت خدمات مسافرتی سمند</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1 ">
<link rel="stylesheet" href="<?php echo base_url('assets/front/') ?>assets/css/bootstrap.css">
<link rel="stylesheet" href="<?php echo base_url('assets/front/') ?>assets/css/bootstrap-material-design.css">
<link rel="stylesheet" href="<?php echo base_url('assets/front/') ?>assets/css/font-awesome.min.css">
<link rel="stylesheet" href="<?php echo base_url('assets/front/') ?>assets/css/animsition.css">
<link rel="stylesheet" href="<?php echo base_url('assets/front/') ?>assets/css/main.css">
<link rel="icon" type="image/png" href="../assets/img/samand_favicon2.png" size="16x16"/>
<script src="<?php echo base_url('assets/front/') ?>assets/js/jquery.min.js"></script> 
</head>
<body>

<div id="reg_lg_modal" class="modal fade" role="dialog" style="z-index:10000">
             <div class="modal-dialog">
			<div class="modal-content" style="">
			  <div class="modal-header md_lg_ti txt_white">
				<button type="button" class="close txt_white cls_but" data-dismiss="modal">&times;</button>
				<h4 class="modal-title  txt_white"> ورود </h4>
			  </div>
			  <div class="modal-body">
				<div class="panel panel-login">
					<div class="panel-body"> 
						<div class="row">
						
							<div class="col-md-6">
								<form id="login-form" action="http://samand.fanacmp.ir/login" method="post" role="form" style="display: block;">
                                       <div class="form-group col-md-12">
												        <label for="email">ایمیل :</label>
													      <div class="input-group input-group-sm">
														  <span class="input-group-addon span_cus" id="sizing-addon8">
														  <i class="fa fa-envelope"></i>
															  </span>
														  <input id="email" name="email" type="email" class="form-control input_cus"  aria-describedby="sizing-addon8">
														   </div>
														</div>
														  <div class="form-group col-md-12">
												        <label for="email">کلمه عبور :</label>
													      <div class="input-group input-group-sm">
														  <span class="input-group-addon span_cus" id="sizing-addon8">
														  <i class="fa fa-lock"></i>
															  </span>
														  <input id="password" name="password" type="password" class="form-control input_cus"  aria-describedby="sizing-addon8">
														   </div>
														</div>
														<div class="checkbox-inline col-md-12">
															<label class="checkbox-inline txt_smoke log_check"><input type="checkbox" value=""> مرا بخاطر بسپار </label>
								                   
									                    </div>
																<div class="col-xs-12 col-md-12">
																	
																		<a href="#" class="a_style3 forgot-password">رمز خود را فراموش کرده اید ؟</a>
																	
																</div>
														<div class="col-md-6">
																	<div >
																	<input type="submit"   class="btn btn-raised btn_cuscyan btn-lg btn_full " value="ورود"> 
																	</div>
																</div>
								</form>
							</div>
							
						</div>
					</div>
				</div>
			  </div>
			</div>
				 </div>

		  </div>
<section class="menue">

        <div class="container-fluid  gray_menu">
			<div class="row">
                 <div class="col-xs-6 col-md-2 logoCol">
                  <a href="http://samandtravel.com/"><img class="logo_place" src="http://samand.fanacmp.ir/assets/img/logo_sm.pn"></a>
                </div>
                 <div class="col-xs-6 col-md-2 but_col_me">
                 <a href="http://samand.fanacmp.ir/ticket" class="btn btn-raised btn-danger" >خرید بلیت</a>
                </div>
                <div class="col-xs-12 col-md-2 tell_col">
                <i class="fa fa-phone"></i> شماره تلفن : 07136275777                </div>
               <div class="col-xs-12 col-md-5 col-md-offset-1 reglogCol">
               <ul class="list-inline ul_pa">
			                   <li><a href="" data-toggle="modal" data-target="#reg_lg_modal" class="txt_black"><i class="glyphicon glyphicon-user ico_st"></i> به حساب کاربری خود وارد شوید </a></li>
                <li><a href="http://samand.fanacmp.ir/register" class="txt_black"><i class="glyphicon glyphicon-lock ico_st"></i> ثبت نام کنید </a></li>
			   			 </ul>
             </div>
         </div>
		</div>
		<nav class="navbar navbar-default menu_st">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" 
       data-toggle="collapse" 
       data-target="#mynavbar" 
       aria-expanded="false">
        <span class="icon-bar txt_black"></span>
        <span class="icon-bar txt_black"></span>
        <span class="icon-bar txt_black"></span>
      </button>
    </div>
    <div class="collapse navbar-collapse" id="mynavbar" >
      <ul class="nav navbar-nav txt_antiquewhite ul_pa">
        <li class="">
               <a href="http://samand.fanacmp.ir/" class="txt_black menue_a">
			     <img class="mico_st ds_b grow" src="http://samand.fanacmp.ir/assets/img/home.png">
                  صفحه اصلی
               </a>
        </li>
        <li class="active ">
               <a href="http://samand.fanacmp.ir/ticket" class="txt_black menue_a">
			     <img class="mico_st ds_b grow" src="http://samand.fanacmp.ir/assets/img/ticket.png">
             بلیت
               </a>
        </li>
     <!--   <li class="">
               <a href="http://samand.fanacmp.ir/tour_national" class="txt_black menue_a">
			     <img class="mico_st ds_b grow" src="http://samand.fanacmp.ir/assets/img/Tours- iran.png">
             تورهای داخلی
               </a>
        </li>-->
     
		     <li class="dropdown ">
          <a  href="#" class="dropdown-toggle txt_black" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
            <img class="mico_st ds_b grow" src="http://samand.fanacmp.ir/assets/img/Foreign tours.png">
             تورهای خارجی 
          <b class="caret"></b><div class="ripple-container"></div></a>
          <ul class="dropdown-menu">
            <li><a href="http://samand.fanacmp.ir/tour_international" class="txt_black menue_a">تمامی تورها</a></li>
            			<li><a href="http://samand.fanacmp.ir/tour_international/cat/1" class="txt_black menue_a">ترکیه</a></li>
            			<li><a href="http://samand.fanacmp.ir/tour_international/cat/2" class="txt_black menue_a">هنگ کنگ - ماکائو</a></li>
                      </ul>
        </li>
      <!--   <li class="dropdown ">
          <a  href="#" class="dropdown-toggle txt_black" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
          <img class="mico_st ds_b grow" src="http://samand.fanacmp.ir/assets/img/hotel 3.png">
          هتل 
          <b class="caret"></b><div class="ripple-container"></div></a>
          <ul class="dropdown-menu">
            <li><a href="http://samand.fanacmp.ir/hotel_national" class="txt_black menue_a">هتل های داخلی</a></li>
            <li><a href="http://samand.fanacmp.ir/hotel_international" class="txt_black menue_a">هتل های خارجی</a></li>
          </ul>
        </li>-->
        
        <li class="">
               <a href="http://samand.fanacmp.ir/visa" class="txt_black menue_a">
			     <img class="mico_st ds_b grow" src="http://samand.fanacmp.ir/assets/img/visa.png">
              ویزا
               </a>
        </li>
        <li class="">
               <a href="http://samand.fanacmp.ir/tourism" class="txt_black menue_a">
			     <img class="mico_st ds_b grow" src="http://samand.fanacmp.ir/assets/img/Tourism.png">
              گردشگری
               </a>
        </li>
    <!--    <li class="">
               <a href="#" class="txt_black menue_a">
			     <img class="mico_st ds_b grow" src="http://samand.fanacmp.ir/assets/img/customer club.png">
              باشگاه مشتریان
               </a>
        </li>-->
        <li class="">
               <a href="http://samand.fanacmp.ir/news_letter" class="txt_black menue_a">
			     <img class="mico_st ds_b grow" src="http://samand.fanacmp.ir/assets/img/Newsletters.png">
             خبرنامه
               </a>
        </li>
        <li class="">
               <a href="http://samand.fanacmp.ir/about_us" class="txt_black menue_a">
			     <img class="mico_st ds_b grow" src="http://samand.fanacmp.ir/assets/img/about samand.png">
              درباره ما
               </a>
        </li>
        <li class="">
               <a href="http://samand.fanacmp.ir/contact_us" class="txt_black menue_a">
			     <img class="mico_st ds_b grow" src="http://samand.fanacmp.ir/assets/img/contact us.png">
              ارتباط با ما
               </a>
        </li>
      </ul>
      <div class="input-group is-empty search_box visible-gride ">
        <input type="text" class="form-control col-md-8 txt_black search_box" placeholder="جستجو" id="addon1">
         <span class="input-group-addon"><i class="fa fa-search ico_cus"></i></span>
      </div>
	</div>
  </div>
 </nav>
</section><link rel="stylesheet"  href="http://samand.fanacmp.ir/assets/datepickar/bootstrap-datepicker.min.css" />
<section class="main">