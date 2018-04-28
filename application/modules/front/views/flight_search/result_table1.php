<table class="table">
    <thead>
    <tr>
        <th>قیمت هر نفر</th>
        <th>ساعت پرواز</th>
        <th>اطلاعات پرواز</th>
        <th>مسیر</th>
        <th>خط هوایی</th>
    </tr>
    </thead>
    <tbody>
      <?php foreach($res as $r): ?>
        <?php if(isset($r["path"])): ?>
            <?php $tmp=0; ?>
            <td>
                <?php echo format_currency($r["path"]["adult_price"]); ?>
                <form action="<?php echo base_url('front/sales_details') ?>"
                      method="POST">
                      <input type="hidden" name="flight_id" value="<?php echo $r["id"]; ?>"/>
                    <button class="btn btn-sm btn-success">خرید</button>
                </form>
            </td>
            <td>
                <span class='Flighttime sp_d'>
                    <?php echo $r["flight_time_out"]; ?>
                 </span>
                  <?php if ($r['flight_type'] == 'roundtrip'): ?>
                    <span class='sp_d'>رفت و برگشت</span>
                  <?php else: ?>
                    (<span class='sp_d'>رفت</span>")
                  <?php endif; ?>

            <td>
                <span class='FlightNumber sp_d'>
                    <?php echo $r['flight_number'] ?>
                </span>
                <span class='FlightDate sp_d2 rtl'>
                    <?php echo   $r['flight_date_out']; ?>
                </span>
                <span class='rtl'>(
                    <?php echo $r['flight_time_out']; ?>
                </span>
                <span class='FlightKind sp_d'>
                    <?php echo  $r['path']['ticket'] ?>
                </span>");
            </td>
            <td>
                <span class='Flight_from sp_d2'>".
                 <?php echo  $r['path']['source_airport']['fa_cityname']; ?>
                </span>
                <span class='sp_d2'>-</span>
                <span class='Flight_to sp_d2'>
                 <?php echo $r['path']['destination_airport']['fa_cityname']; ?>
                </span>
            <td>
                 <img class='air_line_img' 
    src='<?php echo base_url("uploads/airlines/").$r["airline_pic"]; ?>'
                 <span class='air_line_name spd_d'></span>);
         <?php endif; ?>
     <?php endforeach; ?>
      ?>
<!--     <tr>
        <td>3,280,000</td>
        <td>
            <span class="Flighttime sp_d">18:30</span>
            <span class="sp_d">رفت</span>
        </td>
        <td>
            <span class="FlightNumber sp_d">W5-1088</span>
            <span class="FlightDate sp_d2 rtl">15 تیر</span>
            <span class="rtl">(06 Jul)</span>
            <span class="FlightKind sp_d">سیستمی</span>
        </td>
        <td>
            <span class="Flight_from sp_d2">شیراز</span>
            <span class="sp_d2"> - </span>
            <span class="Flight_to sp_d2">تهران</span>
        </td>
        <td>
            <img class="air_line_img"
                 src="http://samand.fanacmp.ir/assets/img/5da3c62db1c3e971ea01c54afbc83bd3_XL.png">
            <span class="air_line_name sp_d">هواپیمایی آسمان</span>
        </td>
    </tr>
    <tr>
        <td>
            <a type="button" class="btn btn-raised btn_cuscyan col-md-6 btn-lg btn_full"
               href="http://samand.fanacmp.ir/ticket/buy">رزرو بلیت</a>
        </td>
        <td>
            <span class="Flighttime sp_d">20:30</span>
            <span class="sp_d">برگشت</span>
        </td>
        <td>
            <span class="FlightNumber sp_d">W5-1098</span>
            <span class="FlightDate sp_d2 rtl">20 تیر</span>
            <span class="rtl">(11 Jul)</span>
            <span class="FlightKind sp_d">سیستمی</span>
        </td>
        <td>
            <span class="Flight_from sp_d2">تهران</span>
            <span class="sp_d2"> - </span>
            <span class="Flight_to sp_d2">شیراز</span>
        </td>
        <td>
            <img class="air_line_img"
                 src="http://samand.fanacmp.ir/assets/img/5da3c62db1c3e971ea01c54afbc83bd3_XL.png">
            <span class="air_line_name sp_d">هواپیمایی آسمان</span>
        </td>
    </tr>
    <tr>
        <td colspan="6">
            <div class="panel-group">
                <div class="panel panel-default">
                    <div class="panel-heading pan_head2">
                        <h4 class="panel-title pan_t">
                            <a data-toggle="collapse" href="#collapse9"> جزییات بیشتر این پرواز <span
                                        class="caret"></span></a>
                        </h4>
                    </div>
                    <div id="collapse9" class="panel-collapse collapse">
                        <div class="panel-body">
                            <div class="col-md-9 flights_min_tables_col">
                                <div class="col-md-12 flights_min_tables">
                                    <table class="table">
                                        <tbody>
                                        <tr class="">
                                            <td colspan="2">
                                                <span class="Flight_from sp_d2">شیراز</span>
                                                <span class="sp_d2"> - </span>
                                                <span class="Flight_to sp_d2"> تهران </span>
                                                <span class="FlightDate sp_d2 rtl"> 15 تیر </span>
                                            </td>
                                        </tr>
                                        <tr class="divider_tr">
                                            <td>
                                                <img class="air_line_img"
                                                     src="http://samand.fanacmp.ir/assets/img/5da3c62db1c3e971ea01c54afbc83bd3_XL.png">
                                                <span class="air_line_name sp_d">هواپیمایی آسمان</span>
                                            </td>
                                            <td colspan="2">
                                                <span class="FlightNumber sp_d">W5-1088</span>
                                                <span class="Flightclass sp_d">اکونومی</span>
                                            </td>
                                            <td colspan="2">
                                                <span class="Flighttime_takeoff sp_d2">18:30</span>
                                                <span class="city_id sp_d2">SHR</span>
                                                <span class="FlightDate sp_d rtl"> 15 تیر </span>
                                                <span class="airport_na sp_d">فرودگاه دستغیب شیراز</span>
                                            </td>
                                            <td>
                                                <span class="Flight_day sp_d">چهارشنبه</span>
                                                <span class="Flight_day sp_d"><i
                                                            class="icon-time-slot"></i></span>
                                                <span class="Flight_time sp_d">1h.20 m</span>
                                            </td>
                                            <td>
                                                <span class="Flighttime_landing sp_d2">19:50</span>
                                                <span class="city_id sp_d2">THR</span>
                                                <span class="FlightDate sp_d rtl"> 15 تیر </span>
                                                <span class="airport_na sp_d">فرودگاه مهرآباد</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <span class="Flight_from sp_d2"> تهران </span>
                                                <span class="sp_d2"> - </span>
                                                <span class="Flight_to sp_d2"> شیراز </span>
                                                <span class="FlightDate sp_d2 rtl"> 20 تیر </span>
                                            </td>
                                        </tr>
                                        <tr class="divider_tr">
                                            <td>
                                                <img class="air_line_img"
                                                     src="http://samand.fanacmp.ir/assets/img/5da3c62db1c3e971ea01c54afbc83bd3_XL.png">
                                                <span class="air_line_name sp_d">هواپیمایی آسمان</span>
                                            </td>
                                            <td colspan="2">
                                                <span class="FlightNumber sp_d">W5-1098</span>
                                                <span class="FlightDate sp_d2 rtl">20 تیر</span>
                                            </td>
                                            <td colspan="2">
                                                <span class="Flighttime_takeoff sp_d2">20:30</span>
                                                <span class="city_id sp_d2">THR</span>
                                                <span class="FlightDate sp_d rtl"> 20 تیر </span>
                                                <span class="airport_na sp_d">فرودگاه مهرآباد</span>
                                            </td>
                                            <td>
                                                <span class="Flight_day sp_d">دوشنبه</span>
                                                <span class="Flight_day sp_d"><i
                                                            class="icon-time-slot"></i></span>
                                                <span class="Flight_time sp_d">1h.20 m</span>
                                            </td>
                                            <td colspan="2">
                                                <span class="Flighttime_takeoff sp_d2">21:50</span>
                                                <span class="city_id sp_d2">SHR</span>
                                                <span class="FlightDate sp_d rtl"> 20 تیر </span>
                                                <span class="airport_na sp_d">فرودگاه دستغیب شیراز</span>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-md-3 pay_info">
                                <div class="row pay_info_row info_head_row">
                                    <div class="col-md-12 head_info">
                                        <p class="text-center head_info_p">جمع کل نفرات</p>
                                    </div>
                                </div>
                                <div class="row pay_info_row">
                                    <div class="col-md-6">
                                        <p class="text-right">نوغ بلیت :</p>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="text-left">سیستمی</p>
                                    </div>
                                </div>
                                <div class="row pay_info_row">
                                    <div class="col-md-6">
                                        <p class="text-right">نرخ پایه :</p>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="text-left">3,980,000</p>
                                    </div>
                                </div>
                                <div class="row pay_info_row">
                                    <div class="col-md-6">
                                        <p class="text-right">نرخ و مالیات :</p>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="text-left">400,000 </p>
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
                                <div class="row but_row_info">
                                    <div class="col-md-12 ">
                                        <button type="button"
                                                class="btn btn-raised btn_cuscyan col-md-12 btn-lg btn_full">
                                            قوانین بلیت
                                            <i class="fa fa-ticket txt_white"></i></button>
                                    </div>
                                </div>
                                <div class="row but_row_info">
                                    <div class="col-md-12 ">
                                        <button type="button"
                                                class="btn btn-raised btn_cuscyan col-md-12 btn-lg btn_full">
                                            قوانین حمل بار <i class="fa fa-suitcase"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </td>
    </tr> -->
    </tbody>
</table>