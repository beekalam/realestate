<?php
//pre($flight);
//pre( airport_info($flight["From"]) );
$flight['airline_img'] = base_url('assets/img/airline/') . $flight["IATA_code"] . '.png';
//$i = intval(substr($flight["LeaveTime"], 0, 2));

//if ($i < 12 && $i >= 4) $hour = "morning";
//else if ($i >= 12 && $i < 18) $hour = "noon";
//else $hour = "night";
//
//$ticket_type = "sk-" . $flight["SystemKey"];
//$klasses = sprintf("clear %s isAvailable E S %s count9 %s filter-item", $flight["AirLineEnglish"], $hour, $ticket_type);
//
////prepare leave hour
//$l = $flight["LeaveTime"];
//
//$flight["leave_hour"] = strlen($l) === 4 ? $l[0] . $l[1] . ":" . $l[2] . $l[3] : $l;
//
//$flight["from_airport_name"] = $flight["to_airport_name"] = "";
//$airport = airport_info($flight["From"]);
//$flight["from_airport_name"] = !is_null($airport) ? $airport["name"] : "";
//$airport = airport_info($flight["To"]);
//$flight["to_airport_name"] = !is_null($airport) ? $airport["name"] : "";
//pre($flight);
?>
<script src="<?php echo base_url('assets/front/mustache.js'); ?>"></script>
<link href="<?php echo base_url('assets/datepicker/bootstrap-datepicker.css') ?>" rel="stylesheet"/>
<script src="<?php echo base_url('assets/datepicker/bootstrap-datepicker.min.js') ?>"></script>
<script src="<?php echo base_url('assets/datepicker/bootstrap-datepicker.fa.min.js') ?>"></script>
<?php ecss(base_url('assets/front/toastr/toastr.min.css')); ?>
<?php ejs(base_url('assets/front/toastr/toastr.min.js')); ?>
<script src="<?php echo base_url('assets/js/mansouri.js'); ?>"></script>
<script src="<?php echo base_url('assets/chance.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/front/js/flipclock.js'); ?>"></script>
<?php
//pr($flight);
if(isset($roundtrip)){
    $flight     = $flight["raft"];
    $rflight    = $flight["bargasht"];
}
?>
<style type="text/css">
    .m-passengers-addp {
        position: relative;
        padding: 0;
        box-shadow: 0px 0px 2px 0px rgba(0, 0, 0, 0.20);
        background-color: #FFF;
        border-radius: 4px;
        border: 1px solid #ededed;
        height: 43px;
        width: 32%;
        margin: 0 2px 0 0 !important;
        padding-left: 38px;
    }

    m-passengers-addp span {
        display: block;
        position: absolute;
        left: 0;
        top: 0;
        width: 42px;
        height: 42px;
        border-right: 1px solid #e2e2e2;
    }

    .m-passengers-addp img {
        width: 16px;
        height: 16px;
        margin: 13px;
        fill: #397ff6;
    }
		.is-invalid{
			border-color:red
		}

    .remove-passenger {
        position: absolute;
        left: 0;
        top: 0;
        width: 40px;
        height: 40px;
        padding: 0;
        border-right: 1px solid #e2e2e2;
        cursor: pointer;
    }

    .remove-passenger:before {
		    content: '';
		    display: block;
		    width: 14px;
		    height: 14px;
		    background-image: url(/assets/front/svg/xsign.svg);
		    background-size: 14px 14px;
		    margin-right: 12px;
		    margin-top: 13px;
		}
		.passenger_num_age_col{
		   background-color: red;
		    height: 39px;
		}
    .badge-person-type{
        width: 16px;
        top: 13px;
        left: 15px;
        position: relative;
        height: 22px;
        padding: 10px;
    }
</style>

<form method="POST" action="<?php echo base_url('front/buy_ticket'); ?>" class="form-inline">
    <div class="container ticket_cont">
        <!-- message -->
        <div class="row">
            <div class="col-12 col-md-7">
                <div class="clock" style="margin:4em;"></div>
                <div class="message"></div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-md-12 clock_info_col">
                <h6 class="txt_smoke">* رزرو موقت شما در مدت زمان نمایش داده شده به پایان می رسد. بدیهی است در صورت
                    پایان
                    زمان و عدم ثبت اطلاعات، عملیات جستجو باید از ابتدا انجام شود</h6>
            </div>

            <div class="row reserve_steps_row">
                <div class="col-12 col-md-12 reserve_wiz">
                    <div class="card ticket_info_card">
                        <div class="card-header">
                            <h4 class="card-title">
                                <a class="txt_black_bor">
                                    اطلاعات پرواز انتخاب شده</a>
                            </h4>
                        </div>
                        <div class="ticket_sec">
                            <div class="card-body collapse_cart">
                                <div class="row ticket_info_row">
                                    <div class="col-md-9 table-responsive">
                                        <table class="table final_reserv_table_takeoff ">
                                            <tbody>
                                            <tr class="">
                                                <td>
											  	 <span class="Flight_from sp_d2">
                                                <!--  پرواز رفت-->
											  	  <i class="fa fa-plane"></i>  </span>
                                                </td>
                                                <td>
                                                    <?php echo $flight["fromShowName"]; ?>
                                                    ← <?php echo $flight["toShowName"]; ?>
                                                </td>
                                                <td>
                                                    <span class="Flight_to sp_d2"><?php echo $flight["DayOfWeek"]; ?></span>
                                                    <span class="FlightDate sp_d2 rtl"><?php echo $flight["flightDateFa"]; ?></span>
                                                </td>
                                            </tr>
                                            <tr class="divider_tr_res">
                                                <td>خط هوایی</td>
                                                <td>شماره پرواز</td>
                                                <td>فرودگاه مبدا</td>
                                                <td>زمان حرکت</td>
                                                <td>مدت پرواز</td>
                                                <td>فرودگاه مقصد</td>
                                                <td>زمان ورود</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img class="air_line_img"
                                                         src="<?php echo $flight["airline_img"]; ?>">
                                                </td>
                                                <td>
                                                    <span class="FlightNumber sp_d"><?php echo $flight["number_flight"]; ?></span>
                                                    <span class="Flightclass sp_d"><?php echo $flight["type_flight"]; ?></span>
                                                </td>
                                                <td>
                                                <span class="airport_na sp_d">
                                                	<?php

                                                    ?>
                                                </span>
                                                </td>
                                                <td>
                                                <span class="Flighttime_takeoff sp_d2 persian-number">
                                                	<?php echo $flight["leave_hour"]; ?>
                                                	</span>
                                                    <span class="city_id sp_d2"><?php echo $flight["fromShowName"]; ?></span>
                                                    <span class="FlightDate sp_d rtl persian-number"> <?php echo $flight["flightDateFa"]; ?> </span>
                                                </td>
                                                <td>
                                                    <span class="Flight_day sp_d"><?php echo $flight["DayOfWeek"]; ?></span>
                                                    <span class="Flight_day sp_d"><i class=" icon-time"></i></span>
                                                    <span class="Flight_time sp_d">fixme</span>
                                                </td>
                                                <td>
                                                <span class="airport_na sp_d">
                                                	<?php
                                                    $airport = airport_info($flight["From"]);
                                                    echo is_null($airport) ? $airport["name"] : "";
                                                    ?>
                                                </span>
                                                </td>
                                                <td>
                                                    <span class="Flighttime_landing sp_d2">19:50</span>
                                                    <span class="city_id sp_d2"><?php echo $flight["toShowName"]; ?></span>
                                                    <span class="FlightDate sp_d rtl"> 15 تیر </span>
                                                </td>

                                            </tr>
                                            </tbody>
                                        </table>
                                        <?php if(isset($roundtrip)): ?>
                                        <table class="table final_reserv_table_landing ">
                                            <tbody>
                                            <tr class="">
                                                <td>
                                                    <span class="Flight_from sp_d2">
                                                                 پرواز برگشت
                                                    <i class="fa fa-plane"></i></span>
                                                </td>
                                                <td><?php echo $rflight["fromShowName"]; ?> ←
                                                    <?php echo $rflight["toShowName"]; ?>
                                                </td>
                                                <td>
                                                    <span class="Flight_to sp_d2"> <?php echo $rflight["DayOfWeek"]; ?></span>
                                                    <span class="FlightDate sp_d2 rtl"> <?php echo $rflight["flightDateFa"]; ?></span></td>
                                            </tr>
                                            <tr class="divider_tr_res">
                                                <td>خط هوایی</td>
                                                <td>شماره پرواز</td>
                                                <td>فرودگاه مبدا</td>
                                                <td>زمان حرکت</td>
                                                <td>مدت پرواز</td>
                                                <td>فرودگاه مقصد</td>
                                                <td>زمان ورود</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img class="air_line_img"
                                                         src="<?php echo $rflight["airline_img"]; ?>">
                                                </td>
                                                <td>
                                                    <span class="FlightNumber sp_d"><?php echo $rflight["number_flight"]; ?></span>
                                                    <span class="Flightclass sp_d"><?php echo $rflight["type_flight"]; ?></span>
                                                </td>
                                                <td>
                                                    <span class="airport_na sp_d">فرودگاه مهرآباد</span>
                                                </td>
                                                <td>
                                                    <span class="Flighttime_takeoff sp_d2"><?php echo $rflight["leave_hour"]; ?></span>
                                                    <span class="city_id sp_d2"><?php echo $rflight["fromShowName"]; ?></span>
                                                    <span class="FlightDate sp_d rtl">  <?php echo $rflight["flightDateFa"]; ?></span>
                                                </td>
                                                <td>
                                                    <span class="Flight_day sp_d"><?php echo $rflight["DayOfWeek"]; ?></span>
                                                    <span class="Flight_day sp_d"><i class=" icon-time"></i></span>
                                                    <span class="Flight_time sp_d">duration fixme</span>
                                                </td>
                                                <td>
                                                    <span class="airport_na sp_d">فرودگاه دستغیب شیراز</span>

                                                </td>
                                                <td>
                                                    <span class="Flighttime_landing sp_d2">19:50</span>
                                                    <span class="city_id sp_d2"><?php echo $rflight["fromShowName"]; ?></span>
                                                    <span class="FlightDate sp_d rtl"> 20 تیر </span>
                                                </td>

                                            </tr>
                                            </tbody>
                                        </table>
                                        <?php endif; ?>

                                    </div>
                                    <div class="col-md-3 res_bill_col">
                                        <div class="row res_bill_row res_bill_head_row">
                                            <div class="col-md-12 res_bill_head">
                                                <p class="text-center res_bill_row_p">محاسبه قیمت( ریال)</p>
                                            </div>
                                        </div>
                                        <div class="row pay_info_row">
                                            <div class="col-md-6">
                                                <p class="text-right">بهای بلیت :</p>
                                            </div>
                                            <div class="col-md-6">
                                                <p class="text-left">2,950,000</p>
                                            </div>
                                        </div>
                                        <div class="row pay_info_row">
                                            <div class="col-md-6">
                                                <p class="text-right">مالیات ها :</p>
                                            </div>
                                            <div class="col-md-6">
                                                <p class="text-left">330,000</p>
                                            </div>
                                        </div>
                                        <div class="row pay_info_row">
                                            <div class="col-md-6">
                                                <p class="text-right">قیمت کل :</p>
                                            </div>
                                            <div class="col-md-6">
                                                <p class="text-left">3,280,000 </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <p class="text-right ">مجموع</p>
                                            </div>
                                            <div class="col-md-6">
                                                <p class="text-left">4,380,000</p>
                                            </div>
                                        </div>
                                        <div class="row best_price_row">
                                            <div class="col-md-8 offset-md-4">
                                                <img class="best_price_pic"
                                                     src="<?php echo base_url('assets/front/img/check.png'); ?>">
                                            </div>
                                            <div class="col-md-12 be_pr_p">
                                                <p class="text-center ">گارانتی بهترین قیمت</p>
                                            </div>
                                        </div>
                                        <div class="row but_row_info">
                                            <div class="col-md-10 offset-md-1 ">
                                                <button type="button" class="btn btn-info btn_cuscyan btn-sm ">قوانین و
                                                    مقررات
                                                    <i class="fa fa-ticket"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-12 but_col_steps">
                                        <div class="row but_row_steps pb-4">
                                            <div class="col-12 col-md-6 ">
                                                <button type="button" class="btn btn_cuscyan btn-sm wi-40">بازگشت
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="ticket-collapse back_gray pb-4 mb-4">
                                    <div class="card-body collapse_cart">
                                        <div class="col-12 col-md-12 title_col pb-3">
                                            <h6 class="txt_gray">مشخصات خریدار</h6>
                                        </div>
                                        <div class="row sign_up_row">
                                            <div class="col-md-12 sign_up_col">
                                                <div class="row sign_up_row">
                                                    <!-- name -->
                                                    <div class=" col-12 col-md-6">
                                                        <div class="input-group input-group-sm">
                                                        <span class="input-group-addon" id="basic-addon1"><i
                                                                    class="fa fa-mobile font16"></i></span>
                                                            <input type="text" class="form-control"
                                                                   placeholder="نام"
                                                                   id="buyer_name" name="buyer_name"
                                                                   aria-describedby="basic-addon1">
                                                        </div>
                                                    </div>
                                                    <!-- family -->
                                                    <div class=" col-12 col-md-6">
                                                        <div class="input-group input-group-sm">
                                                        <span class="input-group-addon" id="basic-addon1"><i
                                                                    class="fa fa-mobile font16"></i></span>
                                                            <input type="text" class="form-control"
                                                                   placeholder="نام خانوادگی"
                                                                   id="buyer_family" name="buyer_family"
                                                                   aria-describedby="basic-addon1">
                                                        </div>
                                                    </div>
                                                    <!-- mobile -->
                                                    <div class=" col-12 col-md-6">
                                                        <div class="input-group input-group-sm">
                                                        <span class="input-group-addon" id="basic-addon1"><i
                                                                    class="fa fa-mobile font16"></i></span>
                                                            <input type="tel" class="form-control"
                                                                   id="buyer_mobile" name="buyer_mobile"
                                                                   placeholder="شماره موبایل"
                                                                   aria-describedby="basic-addon1">
                                                        </div>
                                                    </div>
                                                    <!-- email -->
                                                    <div class="col-12 col-md-6">
                                                        <div class="input-group input-group-sm">
                                                        <span class="input-group-addon" id="basic-addon2"><i
                                                                    class="fa fa-envelope font16"></i></span>
                                                            <input type="text" class="form-control" placeholder="ایمیل"
                                                                   id="buyer_email" name="buyer_email"
                                                                   aria-describedby="basic-addon2">
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="ticket-collapse back_gray pb-4 mb-4">
                                    <div class="card-body collapse_cart">
                                        <div class="col-12 col-md-12 title_col pb-3">
                                            <h6 class="txt_gray"> مشخصات مسافران
                                                <div class="col-md-6 col-lg-5" id="user_type_container">
                                                    <button class="btn add-passenger m-passengers-addp" data-age="0">
                                                <span>
                                                    <img src="<?php echo base_url('assets/front/svg/add.svg'); ?>"/>
                                                </span> بزرگسال
                                                    </button>
                                                    <button class="btn add-passenger m-passengers-addp" data-age="1">
                                                <span>
                                                     <img src="<?php echo base_url('assets/front/svg/add.svg'); ?>"/>
                                                </span> کودک
                                                    </button>
                                                    <button class="btn add-passenger m-passengers-addp" data-age="2">
                                                <span>
                                                    <img src="<?php echo base_url('assets/front/svg/add.svg'); ?>"/>
                                                </span> نوزاد
                                                    </button>
                                                </div>
                                            </h6>
                                        </div>

                                        <div class="row pas_row">

                                        </div>
                                    </div>
                                </div>
                                <div class="ticket-collapse back_gray pb-4 mb-4" id="accordion">
                                    <div class="card-body collapse_cart">
                                        <div class="col-12 col-md-12 title_col pb-3">
                                            <h4 class="txt_gray">
                                                <i class="fa fa-warning txt_org fa-fw"></i> قوانین پرواز
                                            </h4>
                                        </div>
                                        <div class="row sign_up_row">
                                            <div class="row sign_up_row">
                                                <div class=" col-12 col-md-12">
                                                    <p class="txt_black font13">
                                                        صدور و دریافت بليت اينترنتي در صورت تاييد قطعي پرداخت از جانب
                                                        بانك
                                                        امكان پذير است.
                                                        كليه عمليات خريد بليت در اين سايت مشمول قوانين جاري تجارت
                                                        الكترونيك
                                                        بوده و هر گونه تخلف تحت پيگرد قانوني قرار خواهد گرفت .خریدار
                                                        بدینوسیله اظهار می نماید که از کلیه قوانین و مقررات خرید بلیت
                                                        آگاهی
                                                        کامل دارد.
                                                        خريدار در كليه مراحل خريد و يا استرداد بليت موظف به ثبت اطلاعات
                                                        کامل
                                                        در سايت میباشد.

                                                    </p>
                                                </div>
                                                <div class="col-md-12 info_title">
                                                    <label class="checkbo "><input type="checkbox" value=""> اینجانب
                                                        <a href="#"> قوانین و مقررات </a>
                                                        این قرارداد را بطور کامل مطالعه نموده و شرایط آن را قبول دارم که
                                                        تایید آن بصورت انتخاب این قسمت انجام می شود</label>
                                                </div>
                                                <div class="col-md-2 offset-md-10">
                                                    <a type="submit"
                                                            id="buy_preview"
                                                            class="btn btn-raised btn_cuscyan btn-sm btn_full">
                                                        تایید
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="ticket-collapse back_gray pb-4 mb-4  collapse" id="bill_collapse">

                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>

        </div>
    </div>
</form>

<script id="person_info_template" type="text/html">
    <div class="person_info_container" style="background: khaki;margin-top:10px;" data-person-type="{{person_type}}">
        <div class="col-md-12 passenger_num_age_col back_gray">
            <a class="remove-passenger"></a>
            <span class="label label-default purple cyan pass_num badge badge-secondary badge-person-type">{{person_type}}</span>
        </div>
        <div class="col-md-12 sign_up_col">
            <div class="row pas_form_row">
                <div class="form-group col-12 col-md-2 col_input2">
                    <select class="form-control " name="gender" id="gender"
                            data-style="btn btn-default dropdown-toggle filt_but txt_black">
                        <option class="disabled selected">جنسیت</option>
                        <option value="female">زن</option>
                        <option value="male">مرد</option>
                    </select>
                </div>
                <div class="form-group col-md-3">
                    <label for="en_name">نام به انگلیسی</label>
                    <div class="input-group input-group-sm">
        <span class="input-group-addon span_cus" id="sizing-addon3">
        <i class="fa fa-user"></i>
        </span>
                        <input type="text" class="form-control input_cus"
                               id="en_first_name"
                               name="en_first_name"
                               aria-describedby="sizing-addon3">
                    </div>
                </div>
                <div class="form-group col-md-3">
                    <label for="lastname">نام خانوادگی به انگلیسی :</label>
                    <div class="input-group input-group-sm">
								        <span class="input-group-addon span_cus" id="sizing-addon4">
								        <i class="fa fa-user"></i>
								        </span>
                        <input type="text" class="form-control input_cus"
                               id="en_last_name"
                               name="en_last_name"
                               aria-describedby="sizing-addon4">
                    </div>
                </div>
                <div class="form-group col-md-2">
                    <label for="birth_date">تاریخ تولد :</label>
                    <div class="input-group input-group-sm">
								        <span class="input-group-addon span_cus" id="sizing-addon7">
								        <i class="fa fa-calendar"></i>
								        </span>
                        <input type="text" class="form-control input_cus has-datepicker"
                                name="birth_date"
                               placeholder="mm/dd/yyyy"
                               aria-describedby="sizing-addon7">
                    </div>
                </div>
                <div class="form-group col-md-2">
                    <label for="nation_code">کد ملی :</label>
                    <div class="input-group input-group-sm">
        <span class="input-group-addon span_cus" id="sizing-addon8">
        <i class="fa fa-user"></i>
        </span>
                        <input type="text" class="form-control input_cus"
                               id="national_code" name="national_code"
                               aria-describedby="sizing-addon8">
                    </div>
                </div>

                <div class="form-group col-md-3" style="margin-right: 165px;">
                    <label for="en_name">نام</label>
                    <div class="input-group input-group-sm">
        <span class="input-group-addon span_cus" id="sizing-addon3">
        <i class="fa fa-user"></i>
        </span>
                        <input type="text" class="form-control input_cus"
                               id="fa_name"
                               name="fa_name"
                               aria-describedby="sizing-addon3">
                    </div>
                </div>

                <div class="form-group col-md-3">
                    <label for="en_name">نام خانوادگی</label>
                    <div class="input-group input-group-sm">
        <span class="input-group-addon span_cus" id="sizing-addon3">
        <i class="fa fa-user"></i>
        </span>
                        <input type="text" class="form-control input_cus"
                               id="fa_family"
                               name="fa_family"
                               aria-describedby="sizing-addon3">
                    </div>
                </div>

            </div>

        </div>
    </div>
</script>

<script id="factor_preview_template" type="text/html">

        <div class="card-body collapse_cart">
            <div class="col-12 col-md-12 title_col pb-3">
                <h6 class="txt_gray"> پیش فاکتور نهایی </h6>
            </div>
            <div class="row row_final_reserve_table">
                <div class="col-md-12 pas_row">
                    <div class="row bill_num_row txt_gray">
                        <div class="col-md-6 bill_num_col">
                            <span class="pass_num"><i class="fa fa-clipboard"></i></span>
                            شماره پیش فاکتور
                            <span class=""> 8976567</span>
                        </div>
                        <div class="col-md-2 offset-md-4 bill_num_col">
                            <a type="sumbit" href="#"
                               class="btn btn-raised btn_cusorg btn-sm w-50"><i
                                        class="fa fa-print"></i></a>
                        </div>
                    </div>
                    <div class="row buyer_info_row ">
                        <div class="col-md-12 info_title pb-2">
                            مشخصات خریدار
                        </div>
                        <div class="col-md-12 buyer_details txt_smoke">
                            <div class="row">
                                <div class="col-md-3 buyer_name"> خریدار:{{buyer_full_name}}</div>
                                <div class="col-md-3 buyer_mob">موبایل:{{buyer_mobile}}</div>
                                <div class="col-md-3 buyer_tell">تلفن ثابت :{{buyer_telephone}}
                                </div>
                                <div class="col-md-3 buyer_email"> ایمیل :{{buyer_eamile}}</div>
                            </div>
                        </div>
                    </div>
                    <div class="row buyer_info_row ">
                        <div class="col-md-12 info_title">
                            مشخصات مسافران
                        </div>
                        <div class="col-md-12 txt_smoke table-responsive">
                            <table class="table passengers_info txt_smoke">
                                <tbody>
                                <tr class="divider_tr_res">
                                    <td>#</td>
                                    <td>نام</td>
                                    <td>جنسیت</td>
                                    <td>رده سنی</td>
                                    <td>تاریخ تولد</td>
                                    <td>شماره پاسپورت</td>
                                    <td>انقضاء پاسپورت</td>
                                    <td>ملیت</td>
                                </tr>
                            		{{#passengers}}
                                <tr>
                                    <td> {{index}}</td>
                                    <td class="cap"> {{fa_name}} {{fa_family}}</td>
                                    <td> {{genderFa}}</td>
                                    <td> {{person_type}}</td>
                                    <td><span class="ltr"> {{birthdate}} </span></td>
                                    <td> {{national_code}} </td>
                                    <td><span class="ltr">2019 jan 28</span></td>
                                    <td> ایرانی</td>
                                </tr>
                                {{/passengers}}
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-12 info_title">
                            اطلاعات پرواز
                        </div>
                        <div class="col-md-12 txt_smoke table-responsive">
                            <table class="table final_reserv_table_takeoff ">
                                <tbody>
                                <tr class="divider_tr_res">
                                    <td>#</td>
                                    <td>فرودگاه مبدا</td>
                                    <td>فرودگاه مقصد</td>
                                    <td>تاریخ</td>
                                    <td>زمان خروج</td>
                                    <td>زمان ورود</td>
                                    <td>شماره</td>
                                    <td>کلاس پروازی</td>
                                    <td>خط هوایی</td>
                                </tr>
                                <tr>
                                    <td>
                                        1
                                    </td>
                                    <td>
                                        <span class="airport_na sp_d">
                                            <?php echo $flight["FromShowName"]; ?>
                                        </span>
                                    </td>
                                    <td>
                                        <span class="airport_na sp_d">
                                            <?php echo $flight["ToShowName"]; ?>
                                        </span>
                                    </td>
                                    <td>
                                        <span class="FlightDate sp_d rtl">
                                            <?php echo $flight["LeaveDateFa"]; ?>
                                        </span>
                                    </td>
                                    <td>
                                        <span class="Flighttime_landing sp_d2">
                                            <?php echo $flight["LeaveTime"]; ?>
                                        </span>
                                    </td>
                                    <td>
                                        <span class="Flighttime_landing sp_d2">
                                            <?php echo $flight["ArrivalTime"]; ?>
                                        </span>
                                    </td>
                                    <td>
                                        <?php echo $flight["FlightNumber"]; ?>
                                    </td>
                                    <td class="cap">
                                        <?php echo $flight["kind"]; ?>
                                    </td>
                                    <td class="cap">
                                        <?php echo $flight["AirLine"]; ?>
                                    </td>

                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row buyer_info_row ">
                        <div class="col-md-12 info_title pb-3">
                            محاسبه قیمت :
                        </div>
                        <div class="col-md-12 buyer_details pt txt_smoke">
                            <div class="row">
                                <div class="col-md-6 final_price">قیمت کل :</div>
                                <div class="col-md-2 offset-md-4 cash">4,356,000 ریال</div>
                            </div>
                        </div>
                        <div class="col-md-12 buyer_details pt2 final_price_pay_col">
                            <div class="row">
                                <div class="col-md-6 final_price_pay txt_cyan">مبلغ قابل
                                    پرداخت
                                </div>
                                <div class="col-md-2 offset-md-4 cash txt_cyan">4,356,000
                                    ریال
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row buyer_info_row ">
                        <div class="col-md-2 offset-md-10">
                            <img src="<?php echo $captcha['Data']['link_captcha']; ?>" id="captcha_img"/>
                            <input type="text" id="captcha" name="captcha" >
                            <a type="text" href="javascript:void(0)"
                               onclick="$('#captcha_img').attr('src','<?php echo $captcha["Data"]["link_captcha"]; ?>'+'&id=' + (parseInt(Math.random()*1000)))">refresh</a>
                            <button type="sumbit" href="#" id="final_payment"
                               class="btn btn-raised btn_cuscyan btn-sm btn_full">پرداخت و
                                ثبت
                                رزرو</button>
                        </div>

                    </div>

                </div>
            </div>
        </div>

</script>

<script type="text/javascript">
    function rand(start,end){
        return Math.floor(Math.random() * end) + start;
    }

    function random_name(){
        var names = ["علی","رضا","محمد","حسن","اردشیر","اردلان","قاسم","سیروس"];
        return names[rand(0,names.length-1)];
    }

    function random_family(){
        var families = ["منصوری","ایمانی","خلیلی","هاشمی","ادیب","دهقانی"];
        return families[rand(0,families.length-1)];
    }
    var dbg = null;
    function compile_mustache(view_name, view) {
        var template = document.getElementById(view_name).innerHTML;
        var output = Mustache.render(template, view);
        return output;
    }

    function te(i) {
        toastr.error(i);
        return false;
    }

    function tee(i, j) {
        j.addClass('is-invalid');
        console.log(j);
        return te(i);
    }

    function validate_inputs() {
        console.log("in validate inputs");
        $(".person_info_container").each(function (i, t) {
        	
            var it = null;
            var valid = true;
            var arr = {
                "en_name": "نام لاتین",
                "en_family": "نام خانوادگی لاتین",
                "customer_birthdate": "تاریخ تولد",
                "nationalid": "کد ملی",
                "fa_name": "نام فارسی",
                "fa_family": "نام خانوادگی فارسی"
            };

            if ($(t).find("input[name='passenger-type2']:checked").val() == 'foreign') {
                arr["foreigner_name"] = 'نام تبعه خارجی'
                arr["foreigner_passportno"] = 'شماره پاسپورت';
                arr['foreigner_passport_date'] = 'تاریخ انقضا پاسپورت';
            }
            // console.log($(t).find("#gender").val());
            // check gender is selected
            if (!$(t).find("#gender").val()) {
                return te("جنسیت انتخاب نشده است");
            }
            //check for empty values
            for (var k in arr) {
                if (arr.hasOwnProperty(k)) {

                    var item = $(t).find('input[name="' + k + '"]');
                    item.addClass('is-invalid');
                    // $(t).find('input[name="' + k + '"]').addClass('is-invalid');
                    if (!item.val()) return te(arr[k] + " وارد نشده است",item);
                }
            }

            //check for valid nationalid
            if (!valid_national_code($(t).find("input[name='nationalid']").val())) {
                return tee("کد ملی نامعتبر",$(t).find("input[name='nationalid']"));
            }

            //check name and family are english
            it = $(t).find("input[name='name']");
            if (!isASCII(it.val())) return tee("از کاراکتر انگلیسی برای نام لاتین استفده کنید", it);

            it = $(t).find("input[name='family']");
            if (!isASCII(it.val())) {
                return tee("از کاراکتر انگلیسی برای نام خانوادگی استفاده کنید", it);
            }

            //check fa_name and fa_family don't use assci characters
            it = $(t).find("input[name='fa_name']");
            if (isASCII(it.val())) {
                return tee("برای نام فار‍سی از کاراکتر های فارسی  استفاده کنید", it);
            }
            it = $(t).find("input[name='fa_family']")
            if (isASCII(it.val())) {
                return tee("برای نام خانوادگی فارسی از صفحه کلید فارسی استفاده کنید", it);
            }

        });

    }
    ////////////////////////////////////////////////////////////////////
    var clock;
    var testmode = true;
    $(document).ready(function () {


            sval("#buyer_name","محمد رضا");
            sval("#buyer_family","منصوری");
            sval("#buyer_mobile","09359012419");
            sval("#buyer_email","a@gmail.com");


        clock = $('.clock').FlipClock(900, {
            clockFace: 'MinuteCounter',
            countdown: true,
            callbacks: {
                stop: function () {
                    $('.message').html('The clock has stopped!');
                }
            }
        });

        // remove passenger
        $("body").on("click",".remove-passenger",function()
        {
            console.log(($(this).parent().parent()));
            $(this).parent().parent().remove();
        });
        // new person populate
        $(".m-passengers-addp").click(function (e) {
        		e.preventDefault();
            var age = $(this).attr("data-age");
            var view = {};
            switch (age) {
                case "0":
                    view.person_type = "بزرگسال";
                    break;
                case "1":
                    view.person_type = "کودک";
                    break;
                case "2":
                    view.person_type = "نوزاد";
                    break;
            }
            var populate = function () {
                var df = $.Deferred();
                $(".pas_row").append(compile_mustache("person_info_template", view));
                setTimeout(function () {
                    df.resolve("");
                }, 1);
                return df.promise();
            };

            $.when(populate()).then(function () {
                $(".has-datepicker").datepicker(
                {
                    isRTL: true,
                    changeMonth: true,
                    changeYear: true,
                    dateFormat: "yy/mm/dd"
                });
            });
        });

        // submit validations
        $('#buy_preview').click(function (e) {
            console.log("in buy_submit");
            e.preventDefault();
                //fixme remove
            // if (!validate_inputs()) {
             //   return;
            // }

            var to_send = {};
            to_send.passengers = [];
            // to_send.data.flight_id = window.flight_id;
            // to_send.data.flight_from = flight_from;
            // to_send.data.flight_to = flight_to;
            // to_send.data.flight_date = flight_date;
            // flight = {};
            // for (var k in window.selected_flight) {
            //     if (window.selected_flight.hasOwnProperty(k)) {
            //         to_send.data.selected_flight['"'+k+'"']=window.selected_flight[k];
            //     }
            // }
            // to_send.data.selected_flight = flight;

            // console.log(to_send);

            var populate = function() {
                var df = $.Deferred();
                var view = {};
                view.buyer_name = val("#buyer_name");
                view.buyer_family = val("#buyer_family");
                view.buyer_full_name = val("#buyer_name") + " " + val("#buyer_family");
                view.buyer_mobile = val("#buyer_mobile");
                view.buyer_address = val("#buyer_address");
                view.passengers = [];
                var index = 1;

                $(".person_info_container").each(function (i, t) {
                    if(testmode) {
                        $(t).find('input[name="en_first_name"]').val(chance.first());
                        $(t).find('input[name="en_last_name"]').val(chance.last());
                        $(t).find('input[name="fa_name"]').val(random_name());
                        $(t).find('input[name="fa_family"]').val(random_family());
                        $(t).find('input[name="national_code"]').val('5139953323');
                        $(t).find('input[name="birth_date"]').val(chance.birthday({"string": true}));
                    }
                    var item = {};
                    item.en_name = $(t).find('input[name="en_first_name"]').val();
                    item.en_family = $(t).find('input[name="en_last_name"]').val();
                    item.fa_name = $(t).find('input[name="fa_name"]').val();
                    item.fa_family = $(t).find('input[name="fa_family"]').val();
                    item.gender = $(t).find('select[name="gender"]').val();
                    item.birthdate = $(t).find('input[name="birth_date"]').val();
                    item.foreigner_name = $(t).find('input[name="foreigner_name"]').val();
                    item.foreigner_passportno = $(t).find('input[name="foreigner_passportno"]').val();
                    item.foreigner_country = $(t).find('input[name="foreigner_country"]').val();
                    item.national_code = $(t).find('input[name="national_code"]').val();
                    // n[i].passenger_type= $(t).find('input[name="passenger_type2]').val();
                    to_send.passengers[i] = item;
                    item.person_type = $(t).attr("data-person-type");
//                te(view.person_type);
                    if (item.gender == 'female') item.genderFa = "زن";
                    else if (item.gender == 'male') item.genderFa = "مرد";

                    view.passengers[i] = item;
                    view.passengers[i]["index"] = index++;
                });
                $("#bill_collapse").empty();
                $("#bill_collapse").html(compile_mustache("factor_preview_template",view));
                setTimeout(function(){ df.resolve(""); },100);
                return df.promise();
            }
//            alert(JSON.stringify(view));

//            view.passengers.push(to_send.data.passengers);
//            for(var i=0; i < to_send.data.passengers.length; ++i){
//            	var item= to_send.data.passengers[i];
//                 view.passengers.push({"en_name":item.en_name + "......",
//                     "fa_name":item.fa_name + ">......"});
//            }
            $.when(populate()).then(function()
            {
                $("#bill_collapse").show();
            });


        });

        ////////////////////////////////////////////////////////////
        $("body").on("click","#final_payment",function(e)
        {
            var tosend = {
                unique_key: "<?php echo $flight['uniqueKey']; ?>",
                flight_from: "<?php echo $flight['from']; ?>",
                flight_to: "<?php echo $flight["to"]; ?>",
                flight_date: "<?php echo $flight["date_flight"]; ?>",
                buyer_name: $("#buyer_name").val(),
                buyer_family:$("#buyer_family").val(),
                buyer_mobile:$("#buyer_mobile").val(),
                buyer_email:$("#buyer_email").val(),
                captcha:$("#captcha").val(),
                id_request:"<?php echo $captcha["Data"]["id_request"]; ?>"
            };

            var passengers = [];
            $(".person_info_container").each(function (i, t) {
//                console.log('in each');
                if(testmode) {
                    $(t).find('input[name="en_first_name"]').val(chance.first());
                    $(t).find('input[name="en_last_name"]').val(chance.last());
                    $(t).find('input[name="fa_name"]').val(random_name());
                    $(t).find('input[name="fa_family"]').val(random_family());
                    $(t).find('input[name="birth_date"]').val(chance.birthday({"string": true}));
                }
                var item = {};
                item.en_name = $(t).find('input[name="en_first_name"]').val();
                item.en_family = $(t).find('input[name="en_last_name"]').val();
                item.fa_name = $(t).find('input[name="fa_name"]').val();
                item.fa_family = $(t).find('input[name="fa_family"]').val();
                item.gender = $(t).find('select[name="gender"]').val();
                item.birthdate = $(t).find('input[name="birth_date"]').val();
                item.foreigner_name = $(t).find('input[name="foreigner_name"]').val();
                item.foreigner_passportno = $(t).find('input[name="foreigner_passportno"]').val();
                item.foreigner_country = $(t).find('input[name="foreigner_country"]').val();
                item.national_code = $(t).find('input[name="national_code"]').val();
                // n[i].passenger_type= $(t).find('input[name="passenger_type2]').val();
//                tosend.passengers[i] = item;
                item.person_type = $(t).attr("data-person-type");
                passengers.push(item);
//                te(view.person_type);
                if (item.gender == 'female') item.genderFa = "زن";
                else if (item.gender == 'male') item.genderFa = "مرد";
            });
            console.log("passengers:");
            console.log(passengers);
            tosend.passengers = passengers;

            e.preventDefault();
            $.ajax({
                url: '<?php echo base_url('front/buy_final'); ?>',
                async: 'false',
                cache: 'false',
                method:'POST',
                data: tosend,
                success: function (response) {
                    var data = JSON.parse(response);
                    if (data["success"] == false) {
//                        var msg = data["error"] || "خطا در حذف";
                        // swal("", msg , "warning")
                        alert('error');
                    } else {
                        console.log(data["msg"]);
                        window.location = "<?php echo base_url().'front/redirect_to_bank'; ?>";
//                        document.body.innerHTML = data["msg"];
                        // alert(data["reciept_no"]);
//                        $("#buy_ticket_modal_body").html('خرید شما با موفقیت انجام شد' + '<br/>' +
//                            "شماره پیگیری:" + data["reciept_no"]);
//                        $("#buy_ticket_modal").modal();
                        // swal("","خرید شما با موفقیت انجام شد", "شماره پیگیری"+ data["reciept_no"]);
//                         window.location="<?php //echo base_url('front/path_info') ?>//"
                    }
                }
            }); //$.ajax
        });

    });
</script>
