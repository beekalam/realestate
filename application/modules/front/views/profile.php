<section class="main">
    <div class="container profile_cont">
        <div class="row profile_row">
            <div class="col-12 col-md-12 profile_col_cont">
                <div class="crd_cus ">
                    <div class="card-header card_header_cus">
                        <ul class="nav nav-tabs ul_no_pad nav_cus">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#user_info">اطلاعات کاربر</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#payment_list">گزارش خرید</a>
                            </li>
                            <li class="nav-item">
                                <a
                                        class="nav-link" data-toggle="tab" href="#payment_track">پیگیری خرید</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content tb_cn">
                            <?php
                                if($mode=="view")
                                    $this->load->view("_partials/fa_profile_view.php");
                                else
                                    $this->load->view("_partials/fa_profile_edit.php");
                            ?>

                            <div class="tab-pane container" id="payment_list">
                                <div class="row pytr_row ">
                                    <div class="col-12 col-md-12 pytr_col_cont ">
                                        <div class="row row_final_reserve_table">
                                            <div class="col-12 col-md-12 ">
                                                <div class="row buti_info_row ">
                                                    <div class="col-md-12 info_title txt_purple_light md_lg_ti2 cursp">
                                                        <h6 class="txt_green_blue_dark" data-toggle="collapse"
                                                            data-target="#bought_tickets"><i
                                                                    class="fa fa-minus txt_purple_light font10 fa-fw"></i>
                                                            پروازهای خریداری شده</h6>
                                                    </div>

                                                    <div class="col-md-12 txt_smoke bought_used_ti_col table-responsive collapse show"
                                                         id="bought_tickets"><!--for each whole trip-->
                                                        <table class="table final_reserv_table_takeoff ">
                                                            <tbody>
                                                            <tr class="">
                                                                <td>
													  	    		<span class="Flight_from sp_d2">
													  	    		<i class="fa fa-plane"></i> پرواز رفت </span>
                                                                </td>
                                                                <td>شیراز ← تهران</td>
                                                                <td>
                                                                    <span class="Flight_to sp_d2"> دوشنبه</span>
                                                                    <span class="FlightDate sp_d2 rtl"> 20 تیر </span>
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
                                                                         src="img/5da3c62db1c3e971ea01c54afbc83bd3_XL.png">
                                                                </td>
                                                                <td>
                                                                    <span class="FlightNumber sp_d">W5-1088</span>
                                                                    <span class="Flightclass sp_d">اکونومی</span>
                                                                </td>
                                                                <td>
                                                                    <span class="airport_na sp_d">فرودگاه دستغیب شیراز</span>
                                                                </td>
                                                                <td>
                                                                    <span class="Flighttime_takeoff sp_d2">18:30</span>
                                                                    <span class="city_id sp_d2">SHR</span>
                                                                    <span class="FlightDate sp_d rtl"> 15 تیر </span>
                                                                </td>
                                                                <td>
                                                                    <span class="Flight_day sp_d">چهارشنبه</span>
                                                                    <span class="Flight_day sp_d"><i
                                                                                class=" icon-time"></i></span>
                                                                    <span class="Flight_time sp_d">1h.20 m</span>
                                                                </td>
                                                                <td>
                                                                    <span class="airport_na sp_d">فرودگاه مهرآباد</span>
                                                                </td>
                                                                <td>
                                                                    <span class="Flighttime_landing sp_d2">19:50</span>
                                                                    <span class="city_id sp_d2">THR</span>
                                                                    <span class="FlightDate sp_d rtl"> 15 تیر </span>
                                                                </td>

                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                        <table class="table final_reserv_table_landing ">
                                                            <tbody>
                                                            <tr class="">
                                                                <td>
													  	    		<span class="Flight_from sp_d2">
													  	    		 پرواز برگشت 
													  	    		 <i class="fa fa-plane"></i></span>
                                                                </td>
                                                                <td>تهران ← شیراز</td>
                                                                <td>
                                                                    <span class="Flight_to sp_d2"> شنبه</span>
                                                                    <span class="FlightDate sp_d2 rtl"> 20 تیر </span>
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
                                                                         src="img/5da3c62db1c3e971ea01c54afbc83bd3_XL.png">
                                                                </td>
                                                                <td>
                                                                    <span class="FlightNumber sp_d">W5-1086</span>
                                                                    <span class="Flightclass sp_d">اکونومی</span>
                                                                </td>
                                                                <td>
                                                                    <span class="airport_na sp_d">فرودگاه مهرآباد</span>
                                                                </td>
                                                                <td>
                                                                    <span class="Flighttime_takeoff sp_d2">18:30</span>
                                                                    <span class="city_id sp_d2">THR</span>
                                                                    <span class="FlightDate sp_d rtl"> 20 تیر </span>
                                                                </td>
                                                                <td>
                                                                    <span class="Flight_day sp_d">شنبه</span>
                                                                    <span class="Flight_day sp_d"><i
                                                                                class=" icon-time"></i></span>
                                                                    <span class="Flight_time sp_d">1h.20 m</span>
                                                                </td>
                                                                <td>
                                                                    <span class="airport_na sp_d">فرودگاه دستغیب شیراز</span>

                                                                </td>
                                                                <td>
                                                                    <span class="Flighttime_landing sp_d2">19:50</span>
                                                                    <span class="city_id sp_d2">SHR</span>
                                                                    <span class="FlightDate sp_d rtl"> 20 تیر </span>
                                                                </td>

                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="row buti_info_row ">
                                                    <div class="col-md-12 info_title txt_purple_light md_lg_ti2 cursp">
                                                        <h6 class="txt_green_blue_dark" data-toggle="collapse"
                                                            data-target="#bought_train_tickets"><i
                                                                    class="fa fa-minus txt_purple_light font10 fa-fw"></i>
                                                            بلیت های قطار خریداری شده</h6>
                                                    </div>

                                                    <div class="col-md-12 txt_smoke bought_used_ti_col table-responsive collapse show"
                                                         id="bought_train_tickets"><!--for each whole trip-->
                                                        <table class="table final_reserv_table_takeoff ">
                                                            <tbody>
                                                            <tr class="">
                                                                <td>
													  	    		<span class="Flight_from sp_d2">
													  	    		<i class="fa font24 fa-train fa-fw"></i> رفت </span>
                                                                </td>
                                                                <td>شیراز ← تهران</td>
                                                                <td>
                                                                    <span class="Flight_to sp_d2"> دوشنبه</span>
                                                                    <span class="FlightDate sp_d2 rtl"> 20 تیر </span>
                                                                </td>
                                                            </tr>
                                                            <tr class="divider_tr_res">
                                                                <td>شرکت مسافربری</td>
                                                                <td>شماره قطار</td>
                                                                <td>مبدا</td>
                                                                <td>زمان حرکت</td>
                                                                <td>مدت سفر</td>
                                                                <td>مقصد</td>
                                                                <td>زمان ورود</td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <img class="air_line_img" src="img/raja.png">
                                                                </td>
                                                                <td>
                                                                    <span class="FlightNumber sp_d">W5-1088</span>
                                                                    <span class="Flightclass sp_d">4 تخته پلور سبز</span>
                                                                </td>
                                                                <td>
                                                                    <span class="airport_na sp_d">شیراز</span>
                                                                </td>
                                                                <td>
                                                                    <span class="Flighttime_takeoff sp_d2">18:30</span>
                                                                    <span class="city_id sp_d2">SHR</span>
                                                                    <span class="FlightDate sp_d rtl"> 15 تیر </span>
                                                                </td>
                                                                <td>
                                                                    <span class="Flight_day sp_d">چهارشنبه</span>
                                                                    <span class="Flight_day sp_d"><i
                                                                                class=" icon-time"></i></span>
                                                                    <span class="Flight_time sp_d">1h.20 m</span>
                                                                </td>
                                                                <td>
                                                                    <span class="airport_na sp_d">تهران</span>
                                                                </td>
                                                                <td>
                                                                    <span class="Flighttime_landing sp_d2">19:50</span>
                                                                    <span class="city_id sp_d2">THR</span>
                                                                    <span class="FlightDate sp_d rtl"> 15 تیر </span>
                                                                </td>

                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                        <table class="table final_reserv_table_landing ">
                                                            <tbody>
                                                            <tr class="">
                                                                <td>
													  	    		<span class="Flight_from sp_d2">
													  	    		<i class="fa font24 fa-train fa-fw"></i>
													  	    		 برگشت
													  	    		 </span>
                                                                </td>
                                                                <td>تهران ← شیراز</td>
                                                                <td>
                                                                    <span class="Flight_to sp_d2"> شنبه</span>
                                                                    <span class="FlightDate sp_d2 rtl"> 20 تیر </span>
                                                                </td>
                                                            </tr>
                                                            <tr class="divider_tr_res">
                                                                <td>شرکت مسافربری</td>
                                                                <td>شماره قطار</td>
                                                                <td>مبدا</td>
                                                                <td>زمان حرکت</td>
                                                                <td>مدت سفر</td>
                                                                <td>مقصد</td>
                                                                <td>زمان ورود</td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <img class="air_line_img" src="img/raja.png">
                                                                </td>
                                                                <td>
                                                                    <span class="FlightNumber sp_d">W5-1086</span>
                                                                    <span class="Flightclass sp_d">4 تخته پلور سبز</span>
                                                                </td>
                                                                <td>
                                                                    <span class="airport_na sp_d">تهران</span>
                                                                </td>
                                                                <td>
                                                                    <span class="Flighttime_takeoff sp_d2">18:30</span>
                                                                    <span class="city_id sp_d2">THR</span>
                                                                    <span class="FlightDate sp_d rtl"> 20 تیر </span>
                                                                </td>
                                                                <td>
                                                                    <span class="Flight_day sp_d">شنبه</span>
                                                                    <span class="Flight_day sp_d"><i
                                                                                class=" icon-time"></i></span>
                                                                    <span class="Flight_time sp_d">1h.20 m</span>
                                                                </td>
                                                                <td>
                                                                    <span class="airport_na sp_d">شیراز</span>

                                                                </td>
                                                                <td>
                                                                    <span class="Flighttime_landing sp_d2">19:50</span>
                                                                    <span class="city_id sp_d2">SHR</span>
                                                                    <span class="FlightDate sp_d rtl"> 20 تیر </span>
                                                                </td>

                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane container" id="payment_track">
                                <div class="row pytr_row ">
                                    <div class="col-md-12 pytr_col_cont ">
                                        <div class="row pytr_sub_row">
                                            <div class="col-md-12 text-right md_lg_ti2 txt_black_bor">
                                                <h6 class="bold">پیگیری خرید</h6>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="row buyer_info_row ">
                                                    <div class="col-xs-12 col-md-12 info_title">
                                                        <h4 class="h_f"> * کد پیگیری و یا شماره بلیت خود را وارد
                                                            کنید</h4>
                                                    </div>
                                                    <div class="col-xs-12 col-md-6">
                                                        <form action="" method="post" role="form"
                                                              style="display: block;">
                                                            <div class="form-group col-xs-12 col-md-12">
                                                                <label for="track_code">کد پیگیری :</label>
                                                                <div class="input-group input-group-sm">
																			  <span class="input-group-addon span_cus"
                                                                                    id="sizing-addon8">
																			  <i class="fa fa-code"></i>
																				  </span>
                                                                    <input type="text" class="form-control input_cus"
                                                                           aria-describedby="sizing-addon8">
                                                                </div>
                                                            </div>
                                                            <div class="form-group col-xs-12 col-md-12">
                                                                <label for="ticket_num">شماره بلیت :</label>
                                                                <div class="input-group input-group-sm">
																			  <span class="input-group-addon span_cus"
                                                                                    id="sizing-addon8">
																			  <i class="fa fa-ticket"></i>
																				  </span>
                                                                    <input type="text" class="form-control input_cus"
                                                                           aria-describedby="sizing-addon8">
                                                                </div>

                                                            </div>
                                                            <div class="col-xs-12 col-md-6">
                                                                <input type="submit" class="btn btn-info btn_cuscyan2"
                                                                       role="button" value="جستجو">
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
