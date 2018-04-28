
<link rel="stylesheet" href="<?php echo base_url().'assets/mansouri.css' ?>" >

<script src="<?php echo base_url().'/assets/global/plugins/typeahead/typeahead.bundle.min.js' ?>"></script>
<link rel="stylesheet" href="<?php echo base_url().'assets/global/plugins/typeahead/typeahead.css' ?>" >
<div class="parallax_piece_ticket">
				<div class="parallax" style="background-image:url( http://samand.fanacmp.ir/assets/img/SCOTT-A-WOODWARD_1SW1943.jpg);">
								<div class="container">
												<form action="<?php echo base_url('front/ticket_search') ?>" method="post">
																<div class="row">
																				<div class="col-xs-12 moto_row">
																								<h1 class="ticket_moto">
																									<span class="stick">we</span>
																									<span class="free"> </span>
																									<span class="stick">simplfy</span>
																									<span class="free"> </span>
																									<span class="stick">the</span><span class="free"> </span>
																									<span class="stick">complex</span><span class="free"> </span>
																									<span class="stick">world !</span><span class="free"> </span>
																								</h1>
																				</div>
																				<div class="col-md-12">
																								<div class="col-md-3">
																												<div class="col-xs-12 from_flight_box bor10px">
																																<div class="input-group is-empty cus_input">
																																				<input type="text" name="source" class="from_box form-control cus_input" id="txtShow" placeholder="پرواز از" 
																																				>																																
																																				<ul class="dropdown-menu airports_ul" id="divBox" aria-labelledby="dropdownMenu1">
																																								<li>فرودگاه ها</li>
																																								<li><a href="" data-toggle="modal" data-target="#all_destenations_modal" class="list_a"><i class="fa fa-globe"></i> دیدن تمامی مسیرها</a></li>
																																				</ul>
																																				<span class="input-group-addon"><i class="fa fa-plane takeoffing_airplain font30"></i></span>
																																</div>
																																<select id="ss" class="form-control " size="5" style="display:none; width:100%; z-index:1000; position:absolute;     background-color: white;">
																																</select>
																												</div>
																												<div class="change_ico">
																																<a id="change"> <img src="../assets/img/exchange2.png" class="exch_ico_img"> </a>
																												</div>
																								</div>
																								<div class="col-md-3">
																												<div class="col-xs-12 from_flight_box bor10px">
																																<div class="input-group is-empty cus_input">
																																				<input type="text" name="destination" class="from_box form-control cus_input dropdown-toggle" id="txtShow2" placeholder="پرواز به">
																																				<ul class="dropdown-menu airports_ul" id="divBox2" aria-labelledby="dropdownMenu2">
																																								<li>فرودگاه ها</li>
																																								<li><a href="" data-toggle="modal" data-target="#all_destenations_modal2" class="list_a"><i class="fa fa-globe"></i> دیدن تمامی مسیرها</a></li>
																																				</ul>
																																				<span class="input-group-addon"><i class="fa fa-plane landing_airplain font30"></i></span>
																																</div>
																																<select id="ss2" class="form-control " size="5" style="display:none; width:100%; z-index:1000; position:absolute;    background-color: white;">
																																</select>
																												</div>
																								</div>
																								<div class="col-md-2">
																												<div class="col-xs-12 date_flight_box bor10px" style="padding:0 24px !important">
																																<div class="" style="padding-top:0 !important; padding-button:0 !important;; margin-bottom:0 !important">
																																				<input type="text" id="going_date" name="flight_date_out1" class=" form-control " style="padding-top:0 !important; padding-bottom:0 !important; margin-bottom:0 !important; border-bottom:none !important; text-align:center">
																																				<a id="dates_but" type="button" role="button" class="txt_black_bor font16  list_a">
												  تاریخ ها <i class=" fa fa-calendar font16 txt_black_bor"></i> </a>
																																				<input type="text" name="flight_date_out2" id="departure_date" class=" form-control " style="padding-top:0 !important; padding-bottom:0 !important;; margin-bottom:0 !important; border-bottom:none !important; text-align:center">
																																</div>
																												</div>
																								</div>
																								<div class="col-md-1 col-md-1_cus">
																												<div id="pass_num_box" class="col-xs-12 passen_flight_box" style="padding:0 !important;">
																																<div class="" style="text-align:center;">
																																				<span id="total_num" style="text-align:center; font-size:30px"></span>
																																				<br>
																																				<a type="button" role="button" class="txt_black_bor font24 list_a" id="user_icon">
												<i class=" fa fa-user font30 txt_black_bor"></i></a>
																																</div>
																												</div>
																								</div>
																								<div class="col-md-2">
																												<div class="col-xs-12 ">
																																<div class="">
																																				<button style="padding: 27px !important;  background-color: #33d2b8 !important; border: 2px solid white;height: 120px" type="submit" role="button" class="txt_white font23 ">
																																								جستجو <span class="pa_to"><i class=" fa fa-chevron-left font11 txt_white"  aria-hidden="true"></i></span> </button>
																																</div>
																												</div>
																								</div>
																				</div>
																</div>
																<input type="text" id="adult" value="1" name="adult" class="hidden form-control ">
																<input type="text" id="child" value="0" name="child" class="hidden form-control ">
																<input type="text" id="baby" value="0" name="baby" class="hidden form-control ">
												</form>
												<div class="col-xs-12 col-md-12 dates_box" id="dt_box">
																<div class="panel panel-default cal_date_panel">
																				<div class="panel-heading ">
																								<div class="row filter_date_row">
																												<div class="col-xs-12 col-md-12">
																																<div class="col-xs-6 col-md-6 ch_ti">
																																				<span class="txt_black"> تاریخ حرکت خود را انتخاب کنید </span>
																																</div>
																																<div class="col-xs-6 col-md-6">
																																				<div class="col-xs-3 col-md-3 ">
																																								<div class="checkbox ">
																																												<label class="checkbox">
																																																<input id="only_go" type="checkbox" value="1"> فقط رفت </label>
																																								</div>
																																				</div>
																																				<div class="col-xs-4 col-md-4">
																																								<input id="deletecal" type="submit" class="btn btn-raised btn_cuscyan btn-lg btn_full" value="پاک کردن تقویم">
																																				</div>
																																				<div class="col-xs-3 col-md-3">
																																								<input id="flightdtsm" type="submit" class="btn btn-raised btn_cuscyan btn-lg btn_full" value="تایید">
																																				</div>
																																</div>
																												</div>
																								</div>
																				</div>
																				<div class="panel-body " id="date_hide2">
																								<div class="row">
																												<div class="col-md-4 col-md-offset-4">
																																<h3 style="color:red; text-align:center">انتخاب تاریخ رفت</h3>
																												</div>
																								</div>
																								<div class="row panel_b_dt_pe">
																												<div class="col-lg-12" id="datepicker5">
																												</div>
																								</div>
																				</div>
																				<div class="panel-body " id="date_hide">
																								<div class="row">
																												<div class="col-md-4 col-md-offset-4">
																																<h3 style="color:red; text-align:center">انتخاب تاریخ برگشت</h3>
																												</div>
																								</div>
																								<div class="row panel_b_dt_pe">
																												<div class="col-lg-12" id="datepicker6"></div>
																								</div>
																				</div>
																</div>
												</div>
												<div class="col-xs-12 pass_num_box " id="psn_box">
																<div class="panel panel-default cal_date_panel ">
																				<div class="panel-heading ">
																								<div class="row filter_date_row">
																												<div class="col-xs-12 col-md-12">
																																<div class="col-xs-6 col-md-9 ch_ti">
																																				<span class="txt_black"> تعداد مسافران را مشخص کنید </span>
																																</div>
																																<div class="col-xs-6 col-md-3">
																																				<input id="pasnumsumb" type="submit" class="btn btn-raised btn_cuscyan btn-lg btn_full" value="تایید">
																																</div>
																												</div>
																								</div>
																				</div>
																				<div class="panel-body ">
																								<div class="row panel_b_dt_pe">
																												<div class="col-xs-12 col-md-12">
																																<div class="col-xs-6 col-md-6 age_col">
																																				<span class="font20">بزرگسال <span class="txt_black_bor">(12+)</span></span>
																																</div>
																																<div class="col-xs-6 col-md-offset-3 col-md-3">
																																				<span class="input-num-decrement" id="adult_m">–</span>
																																				<input id="adult2" class="input-num input-number3" disabled="disabled" type="text" value="1" min="0" max="10"><span class="input-num-increment" id="adult_a">+</span>
																																</div>
																												</div>
																												<div class="col-xs-12 col-md-12">
																																<div class="col-xs-6 col-md-6 age_col">
																																				<span class="font20">کودک <span class="txt_black_bor">(2-11)</span></span>
																																</div>
																																<div class="col-xs-6 col-md-offset-3 col-md-3">
																																				<span class="input-num-decrement" id="child_m">–</span>
																																				<input id="child2" class="input-num input-number2" disabled="disabled" type="text" value="0" min="0" max="10"><span class="input-num-increment" id="child_a">+</span>
																																</div>
																												</div>
																												<div class="col-xs-12 col-md-12">
																																<div class="col-xs-6 col-md-6 age_col">
																																				<span class="font20">نوزاد <span class="txt_black_bor">(0-1)</span></span>
																																</div>
																																<div class="col-xs-6 col-md-offset-3 col-md-3">
																																				<span class="input-num-decrement" id="baby_m">–</span>
																																				<input id="baby2" class="input-num input-number" disabled="disabled" type="text" value="0" min="0" max="10"><span class="input-num-increment" id="baby_a">+</span>
																																</div>
																												</div>
																								</div>
																				</div>
																</div>
												</div>
								</div>
				</div>
</div>
<div id="all_destenations_modal" class="modal fade" role="dialog">
				<div class="modal-dialog">
								<div class="modal-content" style="">
												<div class="modal-header md_lg_ti txt_white">
																<button type="button" class="close txt_white cls_but" data-dismiss="modal">&times;</button>
																<h4 class="modal-title  txt_white"> کشور و شهر مورد نظر خود را از لیست زیر انتخاب کنید </h4>
												</div>
												<div class="modal-body">
																<div class="panel destenaions_panel">
																				<div class="panel-body">
																								<div class="row list_of_countries ">
																												<div class="col-xs-12">
																																<div class="col-xs-12 col-md-6 count_titl">
																																				<h1 class="txt_black_bor font20"><i class="fa fa-globe"></i> کشورها <span class="avaible_cou">(164)</span></h1>
																																</div>
																																<div class="col-xs-12 col-md-6 airport_titl">
																																				<h1 class="txt_black_bor font20"><i class="fa fa-plane"></i> فرودگاه ها <span class="airports_cou"></span></h1>
																																</div>
																												</div>
																												<div class="col-xs-12 col-md-6 countries_col">
																																<ul class="countries_ul list-unstyled ul_pa nav nav-tabs tabs-right nav-stacked ">
																																				<li class="country_li txt_black active"><a id="country" data-toggle="tab">ایران</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">آذربایجان</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">آرژانتين</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">آلاسکا</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">آلباني</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">آلمان</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">آندورا</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">آنگولا</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">اتیوپی</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">اردن</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">ارمنستان</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">اروگوئه</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">ازبکستان</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">اسپانیا</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">استرالیا</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">استونی</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">اسرائیل</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">اسکاتلند</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">اسلو</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">افریقا</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">افغانستان</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">اکراین</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">اکوادور</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">السالوادور</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">انتیاگو</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">اندونزی</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">انگلستان</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">اوگاندا</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">ایالات متحده امریکا</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">ایالات متحده عربی</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">ایتالیا</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">ایرلند</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">ایسلند</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">باربادوس</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">باها</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">بحرین</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">برزیل</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">برمودا</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">بریتانیا</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">بلاروس</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">بلژیک</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">بلغارستان</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">بنگلادش</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">بوتان</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">بوتسانا</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">بورکینا</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">بولیوی</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">پاراگوئه</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">پاکستان</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">پالائو</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">پاناما</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">پرتغال</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">پرو</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">تاجیکستان</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">تاسمانی</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">تانزانیا</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">تانگو</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">تایلند</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">تایوان</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">ترکمنستان</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">ترکیه</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">ترینیداد توباگو</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">توگو</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">تونس</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">تووالو</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">جامائیکا</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">جمهوری فدرال میکرونزی</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">چاد</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">چین</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">دانمارک</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">دومینیکن</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">رومانی</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">زئیر</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">زامبیا</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">زیمباوه</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">ژاپن</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">سریلانکا</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">سنگاپور</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">سنگال</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">سوئد</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">سوئیس سوییس</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">سودان</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">سوریه</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">سوما</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">سومالی</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">سیرالئون</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">شیلی</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">صربستان</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">عراق</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">عربستان سعودی</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">عمان</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">غنا</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">فرانسه</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">فلسطین</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">فلیپین</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">فیجی</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">قبرس</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">قرقیزستان</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">قزاقزستان</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">قطر</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">کاستا</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">کامبوج</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">کامرون</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">کانادا</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">کره جنوبی</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">کره شمالی</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">کلمبیا</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">کنگو</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">کنیا</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">کوبا</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">کوزوو</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">کویت</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">گابن</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">گامبیا</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">گرجستان</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">گرینلند</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">گواتمالا</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">گوام</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">گینه</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">گینه بیسائو</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">لائوس</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">لبنان</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">لتونی</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">لهستان</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">لوگزامبورگ</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">لیبری</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">لیبی</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">ماداگاسکار</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">ماکا</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">مالا</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">مالتا</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">مالزی</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">مالی</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">مجارستان</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">مصر</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">مقدونیه</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">مکزیک</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">موزامبیک</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">مولداوی</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">موناکو</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">مونتگرو</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">میانمار</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">میکرونزیا</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">نامبیا</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">نپال</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">نروژ</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">نیجر</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">نیجریه</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">نیکاراگوئه</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">نیوزلند</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">نیوزیلند</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">هایتی</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">هلند</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">هند</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">هندوراس</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">هنگ کنگ</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">ون</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">ونزوئلا</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">ويتنام</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">ویتنام</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">یمن</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">یوگوسلاوی</a></li>
																																				<li class="country_li txt_black "><a id="country" data-toggle="tab">یونان</a></li>
																																</ul>
																												</div>
																												<div class="col-xs-12 col-md-6 airports_col">
																																<div class="">
																																				<div>
																																								<ul class="countries_ul list-unstyled ul_pa nav  tabs-right nav-stacked " id="citys">
																																												<li class="airport_li txt_black "><a id="cit" code="شیراز - SYZ" class="txt_black">شهید دستغیب-شیراز</a></li>
																																												<li class="airport_li txt_black "><a id="cit" code="آبادان - ABD" class="txt_black">ابادان-آبادان</a></li>
																																												<li class="airport_li txt_black "><a id="cit" code="آقاجاری - AKW" class="txt_black">آقاجاری-آقاجاری</a></li>
																																												<li class="airport_li txt_black "><a id="cit" code="ابوموسی - AEU" class="txt_black">ابو موسی-ابوموسی</a></li>
																																												<li class="airport_li txt_black "><a id="cit" code="اراک - AJK" class="txt_black">اراک-اراک</a></li>
																																												<li class="airport_li txt_black "><a id="cit" code="اردبیل - ADU" class="txt_black">اردبیل-اردبیل</a></li>
																																												<li class="airport_li txt_black "><a id="cit" code="ارومیه - OMH" class="txt_black">ارومیه-ارومیه</a></li>
																																												<li class="airport_li txt_black "><a id="cit" code="اصفهان - IFN" class="txt_black">اصفهان-اصفهان</a></li>
																																												<li class="airport_li txt_black "><a id="cit" code="امیدیه - OMI" class="txt_black">امیدیه-امیدیه</a></li>
																																												<li class="airport_li txt_black "><a id="cit" code="اهواز - AWZ" class="txt_black">اهواز-اهواز</a></li>
																																												<li class="airport_li txt_black "><a id="cit" code="ایران شهر - IHR" class="txt_black">ایران شهر-ایران شهر</a></li>
																																												<li class="airport_li txt_black "><a id="cit" code="ایلام - IIL" class="txt_black">ایلام-ایلام</a></li>
																																												<li class="airport_li txt_black "><a id="cit" code="بابلسر - BBL" class="txt_black">بابلسر-بابلسر</a></li>
																																												<li class="airport_li txt_black "><a id="cit" code="بجنورد - BJB" class="txt_black">بوجنورد-بجنورد</a></li>
																																												<li class="airport_li txt_black "><a id="cit" code="بم - BXR" class="txt_black">بم-بم</a></li>
																																												<li class="airport_li txt_black "><a id="cit" code="بندر عباس - BND" class="txt_black">بندر عباس-بندر عباس</a></li>
																																												<li class="airport_li txt_black "><a id="cit" code="بندر لنگه - BDH" class="txt_black">بندر لنگه-بندر لنگه</a></li>
																																												<li class="airport_li txt_black "><a id="cit" code="بندر ماهشهر - MRX" class="txt_black">ماهشهر-بندر ماهشهر</a></li>
																																												<li class="airport_li txt_black "><a id="cit" code="بهرگان - IAQ" class="txt_black">بهرگان-بهرگان</a></li>
																																												<li class="airport_li txt_black "><a id="cit" code="بوشهر - BUZ" class="txt_black">بوشهر-بوشهر</a></li>
																																												<li class="airport_li txt_black "><a id="cit" code="بیرجند - XBJ" class="txt_black">بیرجند-بیرجند</a></li>
																																												<li class="airport_li txt_black "><a id="cit" code="بیشه کلا - BSM" class="txt_black">بیشه کولا-بیشه کلا</a></li>
																																												<li class="airport_li txt_black "><a id="cit" code="پارس آباد - PFQ" class="txt_black">پارس آباد-پارس آباد</a></li>
																																												<li class="airport_li txt_black "><a id="cit" code="تبریز - TBZ" class="txt_black">تبریز-تبریز</a></li>
																																												<li class="airport_li txt_black "><a id="cit" code="تبس - TCX" class="txt_black">طبس-تبس</a></li>
																																												<li class="airport_li txt_black "><a id="cit" code="تهران - IKA" class="txt_black">امام خمینی-تهران</a></li>
																																												<li class="airport_li txt_black "><a id="cit" code="تهران - THR" class="txt_black">مهراباد مهرآباد-تهران</a></li>
																																												<li class="airport_li txt_black "><a id="cit" code="توحید - TEW" class="txt_black">توحید-توحید</a></li>
																																												<li class="airport_li txt_black "><a id="cit" code="جزیره خارک - KHK" class="txt_black">خارک-جزیره خارک</a></li>
																																												<li class="airport_li txt_black "><a id="cit" code="جزیره سیری - SXI" class="txt_black">سیری-جزیره سیری</a></li>
																																												<li class="airport_li txt_black "><a id="cit" code="جزیره کیش - KIH" class="txt_black">کیش-جزیره کیش</a></li>
																																												<li class="airport_li txt_black "><a id="cit" code="جیرفت - JYR" class="txt_black">جیروفت-جیرفت</a></li>
																																												<li class="airport_li txt_black "><a id="cit" code="چابهار - ZBR" class="txt_black">چابهار-چابهار</a></li>
																																												<li class="airport_li txt_black "><a id="cit" code="خانه - KHA" class="txt_black">خانه-خانه</a></li>
																																												<li class="airport_li txt_black "><a id="cit" code="خرم آباد - KHD" class="txt_black">خرم اباد-خرم آباد</a></li>
																																												<li class="airport_li txt_black "><a id="cit" code="خوی - KHY" class="txt_black">خوی-خوی</a></li>
																																												<li class="airport_li txt_black "><a id="cit" code="دزفول - DEF" class="txt_black">دزفول-دزفول</a></li>
																																												<li class="airport_li txt_black "><a id="cit" code="رامسر - RZR" class="txt_black">رامسر-رامسر</a></li>
																																												<li class="airport_li txt_black "><a id="cit" code="رشت - RAS" class="txt_black">رشت-رشت</a></li>
																																												<li class="airport_li txt_black "><a id="cit" code="رفسنجان - RJN" class="txt_black">رفسنجان-رفسنجان</a></li>
																																												<li class="airport_li txt_black "><a id="cit" code="زابل - ACZ" class="txt_black">زابل-زابل</a></li>
																																												<li class="airport_li txt_black "><a id="cit" code="زاهدان - ZAH" class="txt_black">زاهدان-زاهدان</a></li>
																																												<li class="airport_li txt_black "><a id="cit" code="زنجان - JWN" class="txt_black">زنجان-زنجان</a></li>
																																												<li class="airport_li txt_black "><a id="cit" code="ساری - SRY" class="txt_black">دشته ناز-ساری</a></li>
																																												<li class="airport_li txt_black "><a id="cit" code="سبزوار - AFZ" class="txt_black">سبزه وار-سبزوار</a></li>
																																												<li class="airport_li txt_black "><a id="cit" code="سرخس - CKT" class="txt_black">سرخس-سرخس</a></li>
																																												<li class="airport_li txt_black "><a id="cit" code="سنندج - SDG" class="txt_black">سنندج-سنندج</a></li>
																																												<li class="airport_li txt_black "><a id="cit" code="سهند - ACP" class="txt_black">سهند-سهند</a></li>
																																												<li class="airport_li txt_black "><a id="cit" code="سیرجان - SYJ" class="txt_black">سیرجان-سیرجان</a></li>
																																												<li class="airport_li txt_black "><a id="cit" code="شهر کرد - CQD" class="txt_black">شهر کرد-شهر کرد</a></li>
																																												<li class="airport_li txt_black "><a id="cit" code="عسلویه - YEH" class="txt_black">پرشین گلف / خلیج فارس-عسلویه</a></li>
																																												<li class="airport_li txt_black "><a id="cit" code="فاسا - FAZ" class="txt_black">فسا-فاسا</a></li>
																																												<li class="airport_li txt_black "><a id="cit" code="قزوین - GZW" class="txt_black">قزوین-قزوین</a></li>
																																												<li class="airport_li txt_black "><a id="cit" code="قشم - GSM" class="txt_black">قشم-قشم</a></li>
																																												<li class="airport_li txt_black "><a id="cit" code="گچساران - GCH" class="txt_black">گچساران-گچساران</a></li>
																																												<li class="airport_li txt_black "><a id="cit" code="گورگن - GBT" class="txt_black">گرگان-گورگن</a></li>
																																												<li class="airport_li txt_black "><a id="cit" code="لار - LRR" class="txt_black">لار-لار</a></li>
																																												<li class="airport_li txt_black "><a id="cit" code="لامرد - LFM" class="txt_black">لامرد-لامرد</a></li>
																																												<li class="airport_li txt_black "><a id="cit" code="لاوان - LVP" class="txt_black">لاوان-لاوان</a></li>
																																												<li class="airport_li txt_black "><a id="cit" code="مشهد - MHD" class="txt_black">مشهد-مشهد</a></li>
																																												<li class="airport_li txt_black "><a id="cit" code="نوژه - NUJ" class="txt_black">نوژه-نوژه</a></li>
																																												<li class="airport_li txt_black "><a id="cit" code="نوشهر - NSH" class="txt_black">نوشهر-نوشهر</a></li>
																																												<li class="airport_li txt_black "><a id="cit" code="هسا - IFH" class="txt_black">هسا-هسا</a></li>
																																												<li class="airport_li txt_black "><a id="cit" code="همدان - HDM" class="txt_black">همدان-همدان</a></li>
																																												<li class="airport_li txt_black "><a id="cit" code="هوادریا - HDR" class="txt_black">هوا دریا-هوادریا</a></li>
																																												<li class="airport_li txt_black "><a id="cit" code="کانگان - KNR" class="txt_black">جم-کانگان</a></li>
																																												<li class="airport_li txt_black "><a id="cit" code="کرمان - KER" class="txt_black">کرمان-کرمان</a></li>
																																												<li class="airport_li txt_black "><a id="cit" code="کرمانشاه - KSH" class="txt_black">کرمانشاه-کرمانشاه</a></li>
																																												<li class="airport_li txt_black "><a id="cit" code="کلاله - KLM" class="txt_black">کلاله-کلاله</a></li>
																																												<li class="airport_li txt_black "><a id="cit" code="یاسوج - YES" class="txt_black">یاسوج-یاسوج</a></li>
																																												<li class="airport_li txt_black "><a id="cit" code="یزد - AZD" class="txt_black">یزد-یزد</a></li>
																																								</ul>
																																				</div>
																																</div>
																												</div>
																								</div>
																				</div>
																</div>
												</div>
								</div>
				</div>
</div>
<div id="all_destenations_modal2" class="modal fade" role="dialog">
				<div class="modal-dialog">
								<div class="modal-content" style="">
												<div class="modal-header md_lg_ti txt_white">
																<button type="button" id="close2" class="close txt_white cls_but" data-dismiss="modal">&times;</button>
																<h4 class="modal-title  txt_white"> کشور و شهر مورد نظر خود را از لیست زیر انتخاب کنید </h4>
												</div>
												<div class="modal-body">
																<div class="panel destenaions_panel">
																				<div class="panel-body">
																								<div class="row list_of_countries ">
																												<div class="col-xs-12">
																																<div class="col-xs-12 col-md-6 count_titl">
																																				<h1 class="txt_black_bor font20"><i class="fa fa-globe"></i> کشورها <span class="avaible_cou">(164)</span></h1>
																																</div>
																																<div class="col-xs-12 col-md-6 airport_titl">
																																				<h1 class="txt_black_bor font20"><i class="fa fa-plane"></i> فرودگاه ها <span class="airports_cou"></span></h1>
																																</div>
																												</div>
																												<div class="col-xs-12 col-md-6 countries_col">
																																<ul class="countries_ul list-unstyled ul_pa nav nav-tabs tabs-right nav-stacked ">
																																				<li class="country_li txt_black active"><a id="country2" data-toggle="tab">ایران</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">آذربایجان</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">آرژانتين</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">آلاسکا</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">آلباني</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">آلمان</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">آندورا</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">آنگولا</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">اتیوپی</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">اردن</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">ارمنستان</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">اروگوئه</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">ازبکستان</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">اسپانیا</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">استرالیا</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">استونی</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">اسرائیل</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">اسکاتلند</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">اسلو</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">افریقا</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">افغانستان</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">اکراین</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">اکوادور</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">السالوادور</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">انتیاگو</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">اندونزی</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">انگلستان</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">اوگاندا</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">ایالات متحده امریکا</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">ایالات متحده عربی</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">ایتالیا</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">ایرلند</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">ایسلند</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">باربادوس</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">باها</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">بحرین</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">برزیل</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">برمودا</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">بریتانیا</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">بلاروس</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">بلژیک</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">بلغارستان</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">بنگلادش</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">بوتان</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">بوتسانا</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">بورکینا</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">بولیوی</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">پاراگوئه</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">پاکستان</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">پالائو</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">پاناما</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">پرتغال</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">پرو</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">تاجیکستان</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">تاسمانی</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">تانزانیا</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">تانگو</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">تایلند</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">تایوان</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">ترکمنستان</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">ترکیه</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">ترینیداد توباگو</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">توگو</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">تونس</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">تووالو</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">جامائیکا</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">جمهوری فدرال میکرونزی</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">چاد</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">چین</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">دانمارک</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">دومینیکن</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">رومانی</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">زئیر</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">زامبیا</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">زیمباوه</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">ژاپن</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">سریلانکا</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">سنگاپور</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">سنگال</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">سوئد</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">سوئیس سوییس</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">سودان</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">سوریه</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">سوما</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">سومالی</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">سیرالئون</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">شیلی</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">صربستان</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">عراق</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">عربستان سعودی</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">عمان</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">غنا</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">فرانسه</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">فلسطین</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">فلیپین</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">فیجی</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">قبرس</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">قرقیزستان</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">قزاقزستان</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">قطر</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">کاستا</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">کامبوج</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">کامرون</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">کانادا</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">کره جنوبی</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">کره شمالی</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">کلمبیا</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">کنگو</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">کنیا</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">کوبا</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">کوزوو</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">کویت</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">گابن</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">گامبیا</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">گرجستان</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">گرینلند</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">گواتمالا</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">گوام</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">گینه</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">گینه بیسائو</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">لائوس</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">لبنان</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">لتونی</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">لهستان</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">لوگزامبورگ</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">لیبری</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">لیبی</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">ماداگاسکار</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">ماکا</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">مالا</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">مالتا</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">مالزی</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">مالی</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">مجارستان</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">مصر</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">مقدونیه</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">مکزیک</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">موزامبیک</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">مولداوی</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">موناکو</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">مونتگرو</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">میانمار</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">میکرونزیا</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">نامبیا</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">نپال</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">نروژ</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">نیجر</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">نیجریه</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">نیکاراگوئه</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">نیوزلند</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">نیوزیلند</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">هایتی</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">هلند</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">هند</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">هندوراس</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">هنگ کنگ</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">ون</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">ونزوئلا</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">ويتنام</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">ویتنام</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">یمن</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">یوگوسلاوی</a></li>
																																				<li class="country_li txt_black "><a id="country2" data-toggle="tab">یونان</a></li>
																																</ul>
																												</div>
																												<div class="col-xs-12 col-md-6 airports_col">
																																<div class="">
																																				<div>
																																								<ul class="countries_ul list-unstyled ul_pa nav  tabs-right nav-stacked " id="citys2">
																																												<li class="airport_li txt_black "><a id="cit2" code="شیراز - SYZ" class="txt_black">شهید دستغیب-شیراز</a></li>
																																												<li class="airport_li txt_black "><a id="cit2" code="آبادان - ABD" class="txt_black">ابادان-آبادان</a></li>
																																												<li class="airport_li txt_black "><a id="cit2" code="آقاجاری - AKW" class="txt_black">آقاجاری-آقاجاری</a></li>
																																												<li class="airport_li txt_black "><a id="cit2" code="ابوموسی - AEU" class="txt_black">ابو موسی-ابوموسی</a></li>
																																												<li class="airport_li txt_black "><a id="cit2" code="اراک - AJK" class="txt_black">اراک-اراک</a></li>
																																												<li class="airport_li txt_black "><a id="cit2" code="اردبیل - ADU" class="txt_black">اردبیل-اردبیل</a></li>
																																												<li class="airport_li txt_black "><a id="cit2" code="ارومیه - OMH" class="txt_black">ارومیه-ارومیه</a></li>
																																												<li class="airport_li txt_black "><a id="cit2" code="اصفهان - IFN" class="txt_black">اصفهان-اصفهان</a></li>
																																												<li class="airport_li txt_black "><a id="cit2" code="امیدیه - OMI" class="txt_black">امیدیه-امیدیه</a></li>
																																												<li class="airport_li txt_black "><a id="cit2" code="اهواز - AWZ" class="txt_black">اهواز-اهواز</a></li>
																																												<li class="airport_li txt_black "><a id="cit2" code="ایران شهر - IHR" class="txt_black">ایران شهر-ایران شهر</a></li>
																																												<li class="airport_li txt_black "><a id="cit2" code="ایلام - IIL" class="txt_black">ایلام-ایلام</a></li>
																																												<li class="airport_li txt_black "><a id="cit2" code="بابلسر - BBL" class="txt_black">بابلسر-بابلسر</a></li>
																																												<li class="airport_li txt_black "><a id="cit2" code="بجنورد - BJB" class="txt_black">بوجنورد-بجنورد</a></li>
																																												<li class="airport_li txt_black "><a id="cit2" code="بم - BXR" class="txt_black">بم-بم</a></li>
																																												<li class="airport_li txt_black "><a id="cit2" code="بندر عباس - BND" class="txt_black">بندر عباس-بندر عباس</a></li>
																																												<li class="airport_li txt_black "><a id="cit2" code="بندر لنگه - BDH" class="txt_black">بندر لنگه-بندر لنگه</a></li>
																																												<li class="airport_li txt_black "><a id="cit2" code="بندر ماهشهر - MRX" class="txt_black">ماهشهر-بندر ماهشهر</a></li>
																																												<li class="airport_li txt_black "><a id="cit2" code="بهرگان - IAQ" class="txt_black">بهرگان-بهرگان</a></li>
																																												<li class="airport_li txt_black "><a id="cit2" code="بوشهر - BUZ" class="txt_black">بوشهر-بوشهر</a></li>
																																												<li class="airport_li txt_black "><a id="cit2" code="بیرجند - XBJ" class="txt_black">بیرجند-بیرجند</a></li>
																																												<li class="airport_li txt_black "><a id="cit2" code="بیشه کلا - BSM" class="txt_black">بیشه کولا-بیشه کلا</a></li>
																																												<li class="airport_li txt_black "><a id="cit2" code="پارس آباد - PFQ" class="txt_black">پارس آباد-پارس آباد</a></li>
																																												<li class="airport_li txt_black "><a id="cit2" code="تبریز - TBZ" class="txt_black">تبریز-تبریز</a></li>
																																												<li class="airport_li txt_black "><a id="cit2" code="تبس - TCX" class="txt_black">طبس-تبس</a></li>
																																												<li class="airport_li txt_black "><a id="cit2" code="تهران - IKA" class="txt_black">امام خمینی-تهران</a></li>
																																												<li class="airport_li txt_black "><a id="cit2" code="تهران - THR" class="txt_black">مهراباد مهرآباد-تهران</a></li>
																																												<li class="airport_li txt_black "><a id="cit2" code="توحید - TEW" class="txt_black">توحید-توحید</a></li>
																																												<li class="airport_li txt_black "><a id="cit2" code="جزیره خارک - KHK" class="txt_black">خارک-جزیره خارک</a></li>
																																												<li class="airport_li txt_black "><a id="cit2" code="جزیره سیری - SXI" class="txt_black">سیری-جزیره سیری</a></li>
																																												<li class="airport_li txt_black "><a id="cit2" code="جزیره کیش - KIH" class="txt_black">کیش-جزیره کیش</a></li>
																																												<li class="airport_li txt_black "><a id="cit2" code="جیرفت - JYR" class="txt_black">جیروفت-جیرفت</a></li>
																																												<li class="airport_li txt_black "><a id="cit2" code="چابهار - ZBR" class="txt_black">چابهار-چابهار</a></li>
																																												<li class="airport_li txt_black "><a id="cit2" code="خانه - KHA" class="txt_black">خانه-خانه</a></li>
																																												<li class="airport_li txt_black "><a id="cit2" code="خرم آباد - KHD" class="txt_black">خرم اباد-خرم آباد</a></li>
																																												<li class="airport_li txt_black "><a id="cit2" code="خوی - KHY" class="txt_black">خوی-خوی</a></li>
																																												<li class="airport_li txt_black "><a id="cit2" code="دزفول - DEF" class="txt_black">دزفول-دزفول</a></li>
																																												<li class="airport_li txt_black "><a id="cit2" code="رامسر - RZR" class="txt_black">رامسر-رامسر</a></li>
																																												<li class="airport_li txt_black "><a id="cit2" code="رشت - RAS" class="txt_black">رشت-رشت</a></li>
																																												<li class="airport_li txt_black "><a id="cit2" code="رفسنجان - RJN" class="txt_black">رفسنجان-رفسنجان</a></li>
																																												<li class="airport_li txt_black "><a id="cit2" code="زابل - ACZ" class="txt_black">زابل-زابل</a></li>
																																												<li class="airport_li txt_black "><a id="cit2" code="زاهدان - ZAH" class="txt_black">زاهدان-زاهدان</a></li>
																																												<li class="airport_li txt_black "><a id="cit2" code="زنجان - JWN" class="txt_black">زنجان-زنجان</a></li>
																																												<li class="airport_li txt_black "><a id="cit2" code="ساری - SRY" class="txt_black">دشته ناز-ساری</a></li>
																																												<li class="airport_li txt_black "><a id="cit2" code="سبزوار - AFZ" class="txt_black">سبزه وار-سبزوار</a></li>
																																												<li class="airport_li txt_black "><a id="cit2" code="سرخس - CKT" class="txt_black">سرخس-سرخس</a></li>
																																												<li class="airport_li txt_black "><a id="cit2" code="سنندج - SDG" class="txt_black">سنندج-سنندج</a></li>
																																												<li class="airport_li txt_black "><a id="cit2" code="سهند - ACP" class="txt_black">سهند-سهند</a></li>
																																												<li class="airport_li txt_black "><a id="cit2" code="سیرجان - SYJ" class="txt_black">سیرجان-سیرجان</a></li>
																																												<li class="airport_li txt_black "><a id="cit2" code="شهر کرد - CQD" class="txt_black">شهر کرد-شهر کرد</a></li>
																																												<li class="airport_li txt_black "><a id="cit2" code="عسلویه - YEH" class="txt_black">پرشین گلف / خلیج فارس-عسلویه</a></li>
																																												<li class="airport_li txt_black "><a id="cit2" code="فاسا - FAZ" class="txt_black">فسا-فاسا</a></li>
																																												<li class="airport_li txt_black "><a id="cit2" code="قزوین - GZW" class="txt_black">قزوین-قزوین</a></li>
																																												<li class="airport_li txt_black "><a id="cit2" code="قشم - GSM" class="txt_black">قشم-قشم</a></li>
																																												<li class="airport_li txt_black "><a id="cit2" code="گچساران - GCH" class="txt_black">گچساران-گچساران</a></li>
																																												<li class="airport_li txt_black "><a id="cit2" code="گورگن - GBT" class="txt_black">گرگان-گورگن</a></li>
																																												<li class="airport_li txt_black "><a id="cit2" code="لار - LRR" class="txt_black">لار-لار</a></li>
																																												<li class="airport_li txt_black "><a id="cit2" code="لامرد - LFM" class="txt_black">لامرد-لامرد</a></li>
																																												<li class="airport_li txt_black "><a id="cit2" code="لاوان - LVP" class="txt_black">لاوان-لاوان</a></li>
																																												<li class="airport_li txt_black "><a id="cit2" code="مشهد - MHD" class="txt_black">مشهد-مشهد</a></li>
																																												<li class="airport_li txt_black "><a id="cit2" code="نوژه - NUJ" class="txt_black">نوژه-نوژه</a></li>
																																												<li class="airport_li txt_black "><a id="cit2" code="نوشهر - NSH" class="txt_black">نوشهر-نوشهر</a></li>
																																												<li class="airport_li txt_black "><a id="cit2" code="هسا - IFH" class="txt_black">هسا-هسا</a></li>
																																												<li class="airport_li txt_black "><a id="cit2" code="همدان - HDM" class="txt_black">همدان-همدان</a></li>
																																												<li class="airport_li txt_black "><a id="cit2" code="هوادریا - HDR" class="txt_black">هوا دریا-هوادریا</a></li>
																																												<li class="airport_li txt_black "><a id="cit2" code="کانگان - KNR" class="txt_black">جم-کانگان</a></li>
																																												<li class="airport_li txt_black "><a id="cit2" code="کرمان - KER" class="txt_black">کرمان-کرمان</a></li>
																																												<li class="airport_li txt_black "><a id="cit2" code="کرمانشاه - KSH" class="txt_black">کرمانشاه-کرمانشاه</a></li>
																																												<li class="airport_li txt_black "><a id="cit2" code="کلاله - KLM" class="txt_black">کلاله-کلاله</a></li>
																																												<li class="airport_li txt_black "><a id="cit2" code="یاسوج - YES" class="txt_black">یاسوج-یاسوج</a></li>
																																												<li class="airport_li txt_black "><a id="cit2" code="یزد - AZD" class="txt_black">یزد-یزد</a></li>
																																								</ul>
																																				</div>
																																</div>
																												</div>
																								</div>
																				</div>
																</div>
												</div>
								</div>
				</div>
</div>

<div class="container-fluid">
	<div class="row award_row">
		<div class="col-md-7 award_pic_col">
			<div class="col-xs-12 col-md-12 aw_t_col">
			<h1 class="text-justify txt_white h_aw ">شرکت مسافرتی و گردشگری <span class="sam_txt">سمند</span> مفتخر کسب مقام اول و کسب جایزه ی طلایی شرکت  هواپیمایی <span class="sam_txt"> ترکیش </span> برای فروشنده برتر تورهای خارجی در سال های متوالی
			</h1>
			</div>
			<div class="col-md-7  but_col">
				<a href="about_us.html" class="btn btn-raised btn_cusorg_tu2">جزییات بیشتر</a> 
			</div>
		</div>
		<div class="col-md-5 award_about_col"></div>
	</div>
</div>
<script>
$(document).ready(function()
{
						var airport_suggestion = new Bloodhound({
          datumTokenizer: Bloodhound.tokenizers.whitespace,
          queryTokenizer: Bloodhound.tokenizers.whitespace,
          // prefetch: '../data/films/post_1960.json',
          remote: {
            url: "<?php echo base_url('admin/airport_suggestions?term=%QUERY'); ?>",
            wildcard: '%QUERY'
          }
        });

      var path_suggestions = new Bloodhound({
          datumTokenizer: Bloodhound.tokenizers.obj.whitespace('name'),
          queryTokenizer: Bloodhound.tokenizers.whitespace,
          // prefetch: '../data/films/post_1960.json',
          remote: {
            url: "<?php echo base_url('admin/path_suggestions?term=%QUERY'); ?>",
            wildcard: '%QUERY'
          }
        });

      $("#txtShow,#txtShow2").typeahead(null,{
        name:'airport_suggestion',
        // display:'value',
        source:airport_suggestion
      });

      // $('#txtShow').typeahead(
      //     null,{
      //       name: 'path_suggestions',
      //       displayKey: 'name',
      //       source:path_suggestions.ttAdapter()
      //  }).on('typeahead:selected',function(event,data){
      //     console.log(data);
      //      $('#path_info').val(data.id);
      //      $("#path_id").val(data.id);
      //  });	
});
</script>