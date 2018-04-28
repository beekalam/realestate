<?php
$trains = o2a($res["TrainAvailables"]);
?>
<div class="col-12 col-md-3 filter_col">
    <div class="fiter_side">
        <div class="accordion" id="minisearch_box">
            <div class="card">
                <div class="card-header pan_head">
                    <a class="card-link txt_white" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                        جستجوی مجدد <span class="caret"></span></a>

                </div>
                <div id="collapseOne" class="collapse">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-md-12 search_but ">
                                <ul class="list-group list-group-flush ul_no_pad sp_wb">
                                    <li class="list-group-control sp_ib radio_cus_li checked">
                                        <label class="custom-control custom-radio checked result_page_search">
                                            <input name="radio" type="radio" class="custom-control-input">
                                            <span class="custom-control-indicator "></span>
                                            <span class="custom-control-description txt_black">رفت و برگشت</span>
                                        </label>
                                    </li>
                                    <li class="list-group-control sp_ib radio_cus_li">
                                        <label class="custom-control custom-radio result_page_search">
                                            <input name="radio" type="radio" class="custom-control-input">
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description txt_black">فقط رفت</span>
                                        </label>
                                    </li>

                                </ul>
                            </div>
                            <div class="col-12 col-md-12 pb-5">
                                <div class="input-group input-group-sm">

                                    <input type="text" class="form-control bdn" placeholder="مبدا"
                                           aria-label="flightfrom" aria-describedby="basic-addon1"><span
                                            class="input-group-addon iconst" id="basic-addon1 "><i
                                                class="fa font24 fa-train"></i></span>
                                </div>
                                <div class="change_ico2">
                                    <a id="change">
                                        <img src="img/exchange.png" class="exch_ico_img2"> </a>
                                </div>
                            </div>
                            <div class="col-12 col-md-12">
                                <div class="input-group input-group-sm pb-4-5">

                                    <input type="text" class="form-control bdn" placeholder="مقصد" aria-label="flightto"
                                           aria-describedby="basic-addon1"><span class="input-group-addon iconst"
                                                                                 id="basic-addon1 "><i
                                                class="fa font24 fa-train"></i></span>
                                </div>
                            </div>
                            <div class="col-12 col-md-12 pb-4-5 ">
                                <div class="input-field">
                                    <label for="from" class="txt_black">تاریخ رفت</label>
                                    <input type="date" class="form-control"/>
                                </div>
                            </div>
                            <div class="col-12 col-md-12 pb-4-5">
                                <div class="input-field">
                                    <label for="from" class="txt_black">تاریخ برگشت</label>
                                    <input type="date" class="form-control"/>
                                </div>
                            </div>
                            <div class="col-12 col-md-12 col_input">
                                <div class="form-group ">
                                    <select class="selectpicker form-control " name="entrm_kind" id="entrm_kind"
                                            data-style="btn btn-default dropdown-toggle filt_but txt_black">
                                        <option class="disabled selected">نوع بلیت</option>
                                        <option>مسافرین عادی</option>
                                        <option>ویژه بانوان</option>
                                        <option>ویژه آقایان</option>
                                        <option>حمل خودرو</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-md-12 col_input">
                                <div class="form-group ">
                                    <select class="selectpicker form-control " name="entrm_select" id="entrm_select"
                                            data-style="btn btn-default dropdown-toggle filt_but txt_black">
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
                            <div class="col-12 col-md-12 search_but col_input">
                                <ul class="list-group list-group-flush ul_no_pad sp_wb">
                                    <li class="list-group-control sp_ib radio_cus_li checked">
                                        <label class="custom-control custom-radio checked result_page_search">
                                            <input name="radio" type="radio" class="custom-control-input">
                                            <span class="custom-control-indicator "></span>
                                            <span class="custom-control-description txt_black">
							کوپه دربس</span>
                                        </label>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-12 search_but">
                                <a href="#" class="btn btn-info btn_cuscyan" role="button">جستجو</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <h6 class="filters-title font14">فیلتر نتایج براساس : </h6>
        </div>
        <div class="flightstop_filter subfilter_styles">
            <h5 class="filter-title">
                <a class="a_collapse font16 txt_org " data-toggle="collapse" href="#collapse3">نوع بلیت<span
                            class="fa fa-sort-down txt_org fa-fw"></span></a>
            </h5>
            <div id="collapse3" class="collapse show">
                <div class="col-12 col-md-12 search_but ">
                    <ul class="list-group list-group-flush ul_no_pad sp_wb">
                        <li class="list-group-control  radio_cus_li checked">
                            <label class="custom-control custom-radio checked result_page_search">
                                <input name="radio" type="radio" class="custom-control-input">
                                <span class="custom-control-indicator "></span>
                                <span class="custom-control-description txt_black">
								همه
							</span>
                            </label>
                        </li>
                        <li class="list-group-control  radio_cus_li">
                            <label class="custom-control custom-radio result_page_search">
                                <input name="radio" type="radio" class="custom-control-input">
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description txt_black">
								کوپه ای
							</span>
                            </label>
                        </li>
                        <li class="list-group-control radio_cus_li">
                            <label class="custom-control custom-radio result_page_search">
                                <input name="radio" type="radio" class="custom-control-input">
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description txt_black">
								سالنی
							</span>
                            </label>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
        <div class="flightstop_filter subfilter_styles">
            <h5 class="filter-title">
                <a class="a_collapse font16 txt_org" data-toggle="collapse" href="#collapse5"> قیمت <span
                            class="fa fa-sort-down txt_org"></span></a>
            </h5>
            <div id="collapse5" class="collapse show ">
                <div class="form-check form-check custom-controls-stacked  my-3">
                    <label class="form-check-label custom-control fill-checkbox">
                        <input class="form-check-input fill-control-input" type="checkbox">
                        <span class="fill-control-description">15,970,000 - 39,967,000 ریال </span>
                        <span class="fill-control-indicator"></span>

                    </label>
                </div>

                <div class="form-check form-check custom-controls-stacked  my-3">
                    <label class="form-check-label custom-control fill-checkbox">
                        <input class="form-check-input fill-control-input" type="checkbox">
                        <span class="fill-control-description">
						  15,970,000 - 39,967,000 ریال </span>
                        <span class="fill-control-indicator"></span>

                    </label>
                </div>
                <div class="form-check form-check custom-controls-stacked  my-3">
                    <label class="form-check-label custom-control fill-checkbox">
                        <input class="form-check-input fill-control-input" type="checkbox">
                        <span class="fill-control-description">
						 39,967,000 - 63,963,000 ریال </span>
                        <span class="fill-control-indicator"></span>

                    </label>
                </div>
                <div class="form-check form-check custom-controls-stacked  my-3">
                    <label class="form-check-label custom-control fill-checkbox">
                        <input class="form-check-input fill-control-input" type="checkbox">
                        <span class="fill-control-description">
						 87,960,000 - 111,957,000 ریال </span>
                        <span class="fill-control-indicator"></span>

                    </label>
                </div>

                <div class="form-check form-check custom-controls-stacked  my-3">
                    <label class="form-check-label custom-control fill-checkbox">
                        <input class="form-check-input fill-control-input" type="checkbox">
                        <span class="fill-control-description">
						 111,957,000 - 135,953,000 ریال </span>
                        <span class="fill-control-indicator"></span>

                    </label>
                </div>
            </div>
        </div>
        <div class="flightstop_filter subfilter_styles">
            <h5 class="filter-title">
                <a class="a_collapse font16 txt_org" data-toggle="collapse" href="#collapse8"> زمان <span
                            class="fa fa-sort-down txt_org"></span></a>
            </h5>
            <div id="collapse8" class="collapse show ">
                <div class="form-check form-check custom-controls-stacked  my-3">
                    <label class="form-check-label custom-control fill-checkbox">
                        <input class="form-check-input fill-control-input" type="checkbox">
                        <span class="fill-control-description w-100">
						  صبح زود قبل از (08:00)</span>
                        <span class="fill-control-indicator"></span>

                    </label>
                </div>
                <div class="form-check form-check custom-controls-stacked  my-3">
                    <label class="form-check-label custom-control fill-checkbox">
                        <input class="form-check-input fill-control-input" type="checkbox">
                        <span class="fill-control-description w-100">
						  صبح (08:00-11:00)</span>
                        <span class="fill-control-indicator"></span>

                    </label>
                </div>
                <div class="form-check form-check custom-controls-stacked  my-3">
                    <label class="form-check-label custom-control fill-checkbox">
                        <input class="form-check-input fill-control-input" type="checkbox">
                        <span class="fill-control-description w-100">
						  ظهر (11:00-14:00)</span>
                        <span class="fill-control-indicator"></span>

                    </label>
                </div>
                <div class="form-check form-check custom-controls-stacked  my-3">
                    <label class="form-check-label custom-control fill-checkbox">
                        <input class="form-check-input fill-control-input" type="checkbox">
                        <span class="fill-control-description w-100">
						   بعد از ظهر (14:00-17:00)</span>
                        <span class="fill-control-indicator"></span>

                    </label>
                </div>
                <div class="form-check form-check custom-controls-stacked  my-3">
                    <label class="form-check-label custom-control fill-checkbox">
                        <input class="form-check-input fill-control-input" type="checkbox">
                        <span class="fill-control-description w-100">
						  عصر (17:00-21:00)</span>
                        <span class="fill-control-indicator"></span>

                    </label>
                </div>
                <div class="form-check form-check custom-controls-stacked  my-3">
                    <label class="form-check-label custom-control fill-checkbox">
                        <input class="form-check-input fill-control-input" type="checkbox">
                        <span class="fill-control-description w-100">
						 شب بعد از (21:00)</span>
                        <span class="fill-control-indicator"></span>

                    </label>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-12 col-md-9 result_col">
    <div class="row row_re_filter result_side_filter">
        <div class="col-12 col-md-3">
            <h6 class="filters-title_hr font15"> مرتب سازی براساس : </h6>
        </div>
        <div class="col-12 col-md-4 drop_filter_col">
            <div class="row row_drop_filter">
                <div class="col-6 col-md-6 drop_filter">
                    <div class="form-group ">
                        <select class="selectpicker form-control " name="filter_name" id="filter_name"
                                data-style="btn btn-default dropdown-toggle  filt_but txt_black">
                            <option class="disabled selected "> قیمت</option>
                            <option class="">نوع بلیت</option>
                        </select>
                    </div>
                </div>
                <div class="col-6 col-md-6 drop_filter">
                    <div class="form-group ">
                        <select class="selectpicker form-control " name="filter_range" id="range"
                                data-style="btn btn-default dropdown-toggle filt_but txt_black">
                            <option class="disabled selected "> صعودی</option>
                            <option class="">نزولی</option>
                        </select>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-md-4 offset-md-1 butt_filter_col">
            <div class="btn-group but_filter_days">
                <a href="#" class="btn btn-primary btn_cuscyan days_but"><i class="fa fa-angle-right fa-fw"></i> روز قبل
                </a>
                <a href="#" class="btn btn-primary btn_cuscyan days_but"> روز بعد <i class="fa fa-angle-left fa-fw"></i></a>
            </div>
        </div>
    </div>
    <div class="row re_table_row">
<?php foreach($trains as $item): ?>
        <div class="col-md-12 card_cus et_sr_col_cont">
        <?php
            $id = uniqid();
            $train_from_img = base_url('assets/img/train/train_').$item['Owner'].".png" ;
        ?>
            <div class="row et_sr_row_in">
                <div class="col-md-12 table_col table-responsive">
                    <div class="">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>قیمت هر نفر</th>
                                <th>ساعت حرکت</th>
                                <th>اطلاعات سفر</th>
                                <th>مسیر</th>
                                <th>شرکت مسافربری</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><?php echo $item["FullPriceText"]; ?></td>
                                <td>
                                    <span class="Flighttime sp_d"><?php echo $item["DepartureTime"]; ?></span>
                                    <span class="FlightDate sp_d2 rtl persian-number">
                                        <?php echo $item["DeparturePersian"]; ?>
                                    </span>
                                    <span class="rtl">
                                        <?php echo $item["Departure"]; ?>
                                    </span>
                                    <span class="sp_d">رفت</span>
                                </td>
                                <td>
                                    <span class="FlightNumber sp_d">
                                        <?php echo sprintf("شماره قطار-%s", $item["TrainNumber"]); ?>
                                    </span>
                                    <span class="FlightKind sp_d txt_org">کوپه ای</span>
                                    <span class="FlightKind sp_d"> ظرفیت کوپه :
                                    <span class="txt_gray">
                                        <?php echo $item["CompartmentCapacity"]; ?> نفر </span>
                                    </span>
                                </td>
                                <td>
                                    <span class="Flight_from sp_d2"><?php echo $train_from_fa; ?></span>
                                    <span class="sp_d2"> - </span>
                                    <span class="Flight_to sp_d2"><?php echo $train_to_fa; ?></span>
                                </td>
                                <td>
                                    <img class="air_line_img"
                                         src="<?php echo $train_from_img; ?>">
                                    <span class="air_line_name sp_d font12">fixmeشرکت مسافربری رجا</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="ticket_reserve.html" class="btn btn-info btn_cusorg_gr w-75 btn-sm"
                                       role="button"><i class="fa fa-ticket txt_white"></i> رزرو بلیت</a>
                                </td>
<!--                                <td>-->
<!--                                    <span class="Flighttime sp_d">20:30</span>-->
<!--                                    <span class="FlightDate sp_d2 rtl">20 تیر</span>-->
<!--                                    <span class="rtl">(11 Jul)</span>-->
<!--                                    <span class="sp_d">برگشت</span>-->
<!---->
<!---->
<!--                                </td>-->
<!--                                <td>-->
<!--                                    <span class="FlightNumber sp_d">شماره قطار-568</span>-->
<!--                                    <span class="FlightKind sp_d txt_org">کوپه ای</span>-->
<!--                                    <span class="FlightKind sp_d"> ظرفیت کوپه : <span-->
<!--                                                class="txt_gray"> 4 نفر </span></span></td>-->
<!--                                </td>-->
<!--                                <td>-->
<!--                                    <span class="Flight_from sp_d2">تهران</span>-->
<!--                                    <span class="sp_d2"> - </span>-->
<!--                                    <span class="Flight_to sp_d2">شیراز</span>-->
<!--                                </td>-->
<!--                                <td>-->
<!--                                    <img class="air_line_img" src="img/raja.png">-->
<!--                                    <span class="air_line_name sp_d font12">شرکت مسافربری رجا</span>-->
<!--                                </td>-->
                            </tr>
                            <tr>
                                <td colspan="6">
                                    <div class="card2">
                                        <div class="card-header card_header_cus">
                                            <a data-toggle="collapse" href="#<?php echo $id; ?>" class="txt_white "> جزییات بیشتر
                                                این سفر<span class="caret"></span></a>
                                        </div>
                                        <div id="<?php echo $id; ?>" class=" collapse">
                                            <div class="card-body">
                                                <div class="row moredt_row w-100">
                                                    <div class="col-md-9 flights_min_tables_col">
                                                        <div class="row">
                                                            <div class="col-md-12 flights_min_tables">
                                                                <table class="table">
                                                                    <tbody>
                                                                    <tr class="">
                                                                        <td colspan="2">
                                                                            <span class="Flight_from sp_d2">
                                                                                <?php echo $train_from_fa; ?>
                                                                            </span>
                                                                            <span class="sp_d2"> - </span>
                                                                            <span class="Flight_to sp_d2">
                                                                                <?php echo $train_to_fa; ?>
                                                                            </span>
                                                                            <span class="FlightDate sp_d2 rtl">
                                                                                  <?php echo $item["DeparturePersian"]; ?>
                                                                            </span>
                                                                        </td>
                                                                    </tr>
                                                                    <tr class="divider_tr">
                                                                        <td>
                                                                            <img class="air_line_img"
                                                                                 src="<?php echo $train_from_img; ?>">
                                                                            <span class="air_line_name sp_d  font12">شرکت مسافربری رجا
                                                                        </td>
                                                                        <td colspan="2">
                                                                            <span class="FlightNumber sp_d">
                                                                               <?php echo sprintf("شماره قطار-%s", $item["TrainNumber"]); ?>
                                                                            </span>
                                                                            <span class="Flightclass sp_d">عنوان سالن :
                                                                                <span class="txt_gray">
                                                                                    <?php echo $item["WagonName"]; ?>
                                                                                </span>
                                                                            </span>
                                                                        </td>
                                                                        <td colspan="2">
                                                                            <span class="Flighttime_takeoff sp_d2">
                                                                                <?php echo $item["DepartureTime"]; ?>
                                                                            </span>
                                                                            <span class="city_id sp_d2">
                                                                                <?php echo $train_from; ?>
                                                                            </span>
                                                                            <span class="FlightDate sp_d rtl">
                                                                                <?php echo $item["Departure"]; ?>
                                                                            </span>
                                                                            <span class="airport_na sp_d">
                                                                                <?php echo $train_from_fa; ?>
                                                                            </span>
                                                                        </td>
                                                                        <td>
                                                                            <span class="Flight_day sp_d">fixmeچهارشنبه</span>
                                                                            <span class="Flight_day sp_d">
                                                                                    <i class="icon-time-slot"></i>
                                                                            </span>
                                                                            <span class="Flight_time sp_d">1h.20 m fixme</span>
                                                                        </td>
                                                                        <td>
                                                                            <span class="Flighttime_landing sp_d2">
                                                                                <?php echo $train_to; ?>
                                                                            </span>
                                                                            <span class="city_id sp_d2">
                                                                                <?php echo $item["TimeOfArrival"]; ?>
                                                                            </span>
                                                                            <span class="FlightDate sp_d rtl"> 15 تیر fixme</span>
                                                                            <span class="airport_na sp_d">
                                                                                <?php echo $train_to_fa; ?>
                                                                            </span>
                                                                        </td>

                                                                    </tr>
<!--                                                                    <tr>-->
<!--                                                                        <td colspan="2">-->
<!--                                                                            <span class="Flight_from sp_d2"> تهران </span>-->
<!--                                                                            <span class="sp_d2"> - </span>-->
<!--                                                                            <span class="Flight_to sp_d2"> شیراز </span>-->
<!--                                                                            <span class="FlightDate sp_d2 rtl"> 20 تیر </span>-->
<!--                                                                        </td>-->
<!--                                                                    </tr>-->
<!--                                                                    <tr class="divider_tr">-->
<!--                                                                        <td>-->
<!--                                                                            <img class="air_line_img"-->
<!--                                                                                 src="img/raja.png">-->
<!--                                                                            <span class="air_line_name sp_d font12">شرکت مسافربری رجا</span>-->
<!--                                                                        </td>-->
<!--                                                                        <td colspan="2">-->
<!--                                                                            <span class="FlightNumber sp_d">شماره قطار-568</span>-->
<!--                                                                            <span class="Flightclass sp_d">عنوان سالن :-->
<!--									  <span class="txt_gray"> 4 تخته پلور سبز </span></span>-->
<!--                                                                        </td>-->
<!---->
<!--                                                                        <td colspan="2">-->
<!--                                                                            <span class="Flighttime_takeoff sp_d2">20:30</span>-->
<!--                                                                            <span class="city_id sp_d2">THR</span>-->
<!--                                                                            <span class="FlightDate sp_d rtl"> 20 تیر </span>-->
<!--                                                                            <span class="airport_na sp_d">تهران</span>-->
<!--                                                                        </td>-->
<!--                                                                        <td>-->
<!--                                                                            <span class="Flight_day sp_d">دوشنبه</span>-->
<!--                                                                            <span class="Flight_day sp_d"><i-->
<!--                                                                                        class="icon-time-slot"></i></span>-->
<!--                                                                            <span class="Flight_time sp_d">1h.20 m</span>-->
<!--                                                                        </td>-->
<!--                                                                        <td colspan="2">-->
<!--                                                                            <span class="Flighttime_takeoff sp_d2">21:50</span>-->
<!--                                                                            <span class="city_id sp_d2">SHR</span>-->
<!--                                                                            <span class="FlightDate sp_d rtl"> 20 تیر </span>-->
<!--                                                                            <span class="airport_na sp_d">-->
<!--										شیراز</span>-->
<!--                                                                        </td>-->
<!---->
<!--                                                                    </tr>-->
                                                                    </tbody>
                                                                </table>
                                                            </div>
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
                                                                <p class="text-right">نوع بلیت :</p>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <p class="text-left">
                                                                    <?php echo sprintf("درجه %s",$item["Degree"]); ?>
                                                                </p>
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
                                                                        class="btn btn-raised btn_cuscyan col-md-12 btn-sm">
                                                                    قوانین بلیت
                                                                    <i class="fa fa-ticket txt_white"></i></button>

                                                            </div>
                                                        </div>
                                                        <div class="row but_row_info">
                                                            <div class="col-md-12 ">
                                                                <button type="button"
                                                                        class="btn btn-raised btn_cuscyan col-md-12 btn-sm">
                                                                    قوانین حمل بار <i class="fa fa-suitcase"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
<?php endforeach; ?>

    </div>
</div>


