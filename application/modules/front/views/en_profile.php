<div class="container profile_cont">
    <div class="row profile_row">
        <div class="col-12 col-md-12 profile_col_cont">
            <div class="crd_cus ">
                <div class="card-header card_header_cus">
                    <ul class="nav nav-tabs ul_no_pad nav_cus">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#user_info">USER PROFILE
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#payment_list"> PURCHASES REPORT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#payment_track">PURCHASE TRACKING</a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content tb_cn">
                        <?php
                            if($mode=="view")
                                $this->load->view("_partials/en_profile_view.php");
                            else
                                $this->load->view("_partials/en_profile_edit.php");
                        ?>
                        <div class="tab-pane container" id="payment_list">
                            <div class="row pytr_row ">
                                <div class="col-12 col-md-12 pytr_col_cont ">
                                    <div class="row row_final_reserve_table">
                                        <div class="col-12 col-md-12 ">
                                            <div class="row buti_info_row mb-4">
                                                <div class="col-md-12 info_title txt_purple_light md_lg_ti2 cursp">
                                                    <h6 class="txt_green_blue_dark" data-toggle="collapse"
                                                        data-target="#bought_tickets"><i
                                                                class="fa fa-minus txt_purple_light font10 fa-fw"></i>PURCHASED
                                                        FLIGHTS</h6>
                                                </div>

                                                <div class="col-md-12 txt_smoke bought_used_ti_col table-responsive collapse show"
                                                     id="bought_tickets"><!--for each whole trip-->
                                                    <table class="table final_reserv_table_takeoff ">
                                                        <tbody>
                                                        <tr class="">
                                                            <td>
													  	    		<span class="Flight_from sp_d2">
													  	    		<i class="fa fa-plane"></i> DEPARTURE FLIGHT </span>
                                                            </td>
                                                            <td>SHIRAZ <br> TEHRAN</td>
                                                            <td>
                                                                <span class="Flight_to sp_d2">MONDAY</span>
                                                                <span class="FlightDate sp_d2 rtl"> (JUL 05) </span>
                                                            </td>
                                                        </tr>
                                                        <tr class="divider_tr_res">
                                                            <td>AIRLINE</td>
                                                            <td>FLIGHT NUMBER</td>
                                                            <td>FROM</td>
                                                            <td>DEPARTURE TIME</td>
                                                            <td>FLIGHT TIME</td>
                                                            <td>TO</td>
                                                            <td>ARRIVE TIME</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <img class="air_line_img"
                                                                     src="img/5da3c62db1c3e971ea01c54afbc83bd3_XL.png">
                                                            </td>
                                                            <td>
                                                                <span class="FlightNumber sp_d">W5-1088</span>
                                                                <span class="Flightclass sp_d">ECONOMI</span>
                                                            </td>
                                                            <td>
                                                                <span class="airport_na sp_d">SHIRAZ AIRPORT</span>
                                                            </td>
                                                            <td>
                                                                <span class="Flighttime_takeoff sp_d2">18:30</span>
                                                                <span class="city_id sp_d2">SHR</span>
                                                                <span class="FlightDate sp_d rtl"> (JUL 05) </span>
                                                            </td>
                                                            <td>
                                                                <span class="Flight_day sp_d">WENDSDAY</span>
                                                                <span class="Flight_day sp_d"><i class=" icon-time"></i></span>
                                                                <span class="Flight_time sp_d">1h.20 m</span>
                                                            </td>
                                                            <td>
                                                                <span class="airport_na sp_d">MEHRABAD AIRPORT</span>
                                                            </td>
                                                            <td>
                                                                <span class="Flighttime_landing sp_d2">19:50</span>
                                                                <span class="city_id sp_d2">THR</span>
                                                                <span class="FlightDate sp_d rtl"> (JUL 05) </span>
                                                            </td>

                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                    <table class="table final_reserv_table_landing ">
                                                        <tbody>
                                                        <tr class="">
                                                            <td>
													  	    		<span class="Flight_from sp_d2">
													  	    		RETURN FLIGHT
													  	    		 <i class="fa fa-plane"></i></span>
                                                            </td>
                                                            <td>TEHRAN<br>SHIRAZ</td>
                                                            <td>
                                                                <span class="Flight_to sp_d2"> SATURDAY</span>
                                                                <span class="FlightDate sp_d2 rtl"> (JUL 05) </span>
                                                            </td>
                                                        </tr>
                                                        <tr class="divider_tr_res">
                                                            <td> AIRLINE</td>
                                                            <td>FLIGHT NUMBER</td>
                                                            <td>FROM</td>
                                                            <td>DEPARTURE TIME</td>
                                                            <td>FLIGHT TIME</td>
                                                            <td>TO</td>
                                                            <td>ARRIVE TIME</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <img class="air_line_img"
                                                                     src="img/5da3c62db1c3e971ea01c54afbc83bd3_XL.png">
                                                            </td>
                                                            <td>
                                                                <span class="FlightNumber sp_d">W5-1086</span>
                                                                <span class="Flightclass sp_d">ECONOMI</span>
                                                            </td>
                                                            <td>
                                                                <span class="airport_na sp_d">MEHRABAD AIRPORT</span>
                                                            </td>
                                                            <td>
                                                                <span class="Flighttime_takeoff sp_d2">18:30</span>
                                                                <span class="city_id sp_d2">THR</span>
                                                                <span class="FlightDate sp_d rtl"> (JUL 05) </span>
                                                            </td>
                                                            <td>
                                                                <span class="Flight_day sp_d">SATURDAY</span>
                                                                <span class="Flight_day sp_d"><i class=" icon-time"></i></span>
                                                                <span class="Flight_time sp_d">1h.20 m</span>
                                                            </td>
                                                            <td>
                                                                <span class="airport_na sp_d">SHIRAZ AIRPORT</span>

                                                            </td>
                                                            <td>
                                                                <span class="Flighttime_landing sp_d2">19:50</span>
                                                                <span class="city_id sp_d2">SHR</span>
                                                                <span class="FlightDate sp_d rtl"> (JUL 05) </span>
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
                                                                class="fa fa-minus txt_purple_light font10 fa-fw"></i>PURCHASED
                                                        RAILWAY TRIPS</h6>
                                                </div>

                                                <div class="col-md-12 txt_smoke bought_used_ti_col table-responsive collapse show"
                                                     id="bought_train_tickets"><!--for each whole trip-->
                                                    <table class="table final_reserv_table_takeoff ">
                                                        <tbody>
                                                        <tr class="">
                                                            <td>
													  	    		<span class="Flight_from sp_d2">
													  	    		<i class="fa font24 fa-train fa-fw"></i> DEPARTURE </span>
                                                            </td>
                                                            <td>SHIRAZ<br>TEHRAN</td>
                                                            <td>
                                                                <span class="Flight_to sp_d2">MONDAY</span>
                                                                <span class="FlightDate sp_d2 rtl">(JUL 05) </span></td>
                                                        </tr>
                                                        <tr class="divider_tr_res">
                                                            <td>RAILWAY COMPANY</td>
                                                            <td>TRAIN-NUM</td>
                                                            <td>FROM</td>
                                                            <td>DEPARTURE TIME</td>
                                                            <td>TRIP DURATION</td>
                                                            <td>TO</td>
                                                            <td>ARRIVE TIME</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <img class="air_line_img" src="img/raja.png">
                                                            </td>
                                                            <td>
                                                                <span class="FlightNumber sp_d">W5-1088</span>
                                                                <span class="Flightclass sp_d"> 4 SEATS</span>
                                                            </td>
                                                            <td>
                                                                <span class="airport_na sp_d">SHIRAZ</span>
                                                            </td>
                                                            <td>
                                                                <span class="Flighttime_takeoff sp_d2">18:30</span>
                                                                <span class="city_id sp_d2">SHR</span>
                                                                <span class="FlightDate sp_d rtl"> (JUL 05) </span>
                                                            </td>
                                                            <td>
                                                                <span class="Flight_day sp_d">WEDNSDAY</span>
                                                                <span class="Flight_day sp_d"><i class=" icon-time"></i></span>
                                                                <span class="Flight_time sp_d">1h.20 m</span>
                                                            </td>
                                                            <td>
                                                                <span class="airport_na sp_d">TEHRAN</span>
                                                            </td>
                                                            <td>
                                                                <span class="Flighttime_landing sp_d2">19:50</span>
                                                                <span class="city_id sp_d2">THR</span>
                                                                <span class="FlightDate sp_d rtl"> (JUL 05) </span>
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
													  	    		RETURN
													  	    		 </span>
                                                            </td>
                                                            <td>TEHRAN <br>
                                                                SHIRAZ
                                                            </td>
                                                            <td>
                                                                <span class="Flight_to sp_d2"> SATURDAY</span>
                                                                <span class="FlightDate sp_d2 rtl"> (JUL 05) </span>
                                                            </td>
                                                        </tr>
                                                        <tr class="divider_tr_res">
                                                            <td>RAILWAY COMPANY</td>
                                                            <td>TRAIN-NUM</td>
                                                            <td>FROM</td>
                                                            <td>DEPARTURE TIME</td>
                                                            <td>TRIP DURATION</td>
                                                            <td>TO</td>
                                                            <td>ARRIVE TIME</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <img class="air_line_img" src="img/raja.png">
                                                            </td>
                                                            <td>
                                                                <span class="FlightNumber sp_d">W5-1086</span>
                                                                <span class="Flightclass sp_d">4 SEATS</span>
                                                            </td>
                                                            <td>
                                                                <span class="airport_na sp_d">TEHRAN</span>
                                                            </td>
                                                            <td>
                                                                <span class="Flighttime_takeoff sp_d2">18:30</span>
                                                                <span class="city_id sp_d2">THR</span>
                                                                <span class="FlightDate sp_d rtl"> (JUL 05) </span>
                                                            </td>
                                                            <td>
                                                                <span class="Flight_day sp_d">SATURDAY</span>
                                                                <span class="Flight_day sp_d"><i class=" icon-time"></i></span>
                                                                <span class="Flight_time sp_d">1h.20 m</span>
                                                            </td>
                                                            <td>
                                                                <span class="airport_na sp_d">SHIRAZ</span>

                                                            </td>
                                                            <td>
                                                                <span class="Flighttime_landing sp_d2">19:50</span>
                                                                <span class="city_id sp_d2">SHR</span>
                                                                <span class="FlightDate sp_d rtl"> (JUL 05) </span>
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
                                        <div class="col-md-12 text-left md_lg_ti2 txt_black_bor">
                                            <h6 class="bold">PURCHASE TRACKING</h6>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="row buyer_info_row ">
                                                <div class="col-xs-12 col-md-12 info_title">
                                                    <h4 class="h_f">* Enter the tracking code or your ticket
                                                        number </h4>
                                                </div>
                                                <div class="col-xs-12 col-md-6">
                                                    <form action="" method="post" role="form" style="display: block;">
                                                        <div class="form-group col-xs-12 col-md-12">
                                                            <label for="track_code">TRACKING CODE :</label>
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
                                                            <label for="ticket_num">TICKET NUMBER :</label>
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
                                                                   role="button" value="SERACH">
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