<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
<!-- isotope without filter fix -->
<?php
//pre(get_defined_vars());
$front_url = base_url('assets/front');
$res = isset($res->AvailableFlights) ? o2a($res->AvailableFlights) : array();
//     pre($res);
//calculate the cheapest for each airline
$airlines 					= array_unique(array_column($res, "AirLine"));
$airlines_sorted = array();
foreach($airlines as $a){
    foreach($res as $r){
        if($r["AirLine"] == $a){
            if(!isset($airlines_sorted[$a]))
                $airlines_sorted[$a] = $r["price"];
            else if($airlines_sorted[$a] > $r["price"])
                $airlines_sorted[$a] = $r["price"];
        }
    }
}

// cheapest flight
$cheapest_flight = null;
foreach($airlines_sorted as $k=>$v){

    if($cheapest_flight==null) $cheapest_flight = $v;

    if($cheapest_flight > $v)
        $cheapest_flight = $v;
}

// extract airline codes
$airline_codes = array_unique(array_column($res, "AirLine"));
$tmp = array();
foreach($airlines as $a){
    foreach($res as $r){
        if($r["AirLine"] == $a){
            if(isset($r["CRCN"]["AirlineCode"]))
                $tmp[$a] = $r["CRCN"]["AirlineCode"];
            else
                $tmp[$a] = $r["AirLineEnglish"];
            break;
        }
    }
}
$airline_codes = $tmp;
?>

<!-- filter column -->
<div class="col-12 col-md-3 filter_col">
    <div class="fiter_side">
        <div class="accordion" id="minisearch_box">
            <div class="card">
                <div class="card-header pan_head">
                    <a class="card-link txt_white" data-toggle="collapse" data-parent="#accordion"
                       href="#collapseOne"> جستجوی مجدد <span class="caret"></span></a>

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
                                    <input type="text" class="form-control bdn" placeholder="پرواز از"
                                           aria-label="flightfrom" aria-describedby="basic-addon1"><span
                                            class="input-group-addon iconst" id="basic-addon1 "><i
                                                class="fa font24 fa-plane takeoffing_airplain"></i></span>
                                </div>
                                <div class="change_ico2">
                                    <a id="change">
                                        <img src="img/exchange.png" class="exch_ico_img2"> </a>
                                </div>
                            </div>
                            <div class="col-12 col-md-12">
                                <div class="input-group input-group-sm pb-4-5">

                                    <input type="text" class="form-control bdn" placeholder="پرواز به"
                                           aria-label="flightto" name="flightto" aria-describedby="basic-addon1">
                                    <span class="input-group-addon iconst" id="basic-addon1 ">
                                                <i class="fa font24 fa-plane landing_airplain"></i>
                                            </span>
                                </div>
                            </div>
                            <div class="col-12 col-md-12 pb-4-5 ">
                                <div class="input-field">
                                    <label for="from" class="txt_black">تاریخ رفت</label>
                                    <input type="date" name="flight_from_date" class="form-control"/>
                                </div>
                            </div>
                            <div class="col-12 col-md-12 pb-4-5">
                                <div class="input-field">
                                    <label for="from" class="txt_black">تاریخ برگشت</label>
                                    <input type="date" name="flight_to_date" class="form-control"/>
                                </div>
                            </div>
                            <div class="col-12 col-md-12 col_input">
                                <div class="form-group ">
                                    <select class="selectpicker form-control " name="entrm_kind"
                                            id="entrm_kind"
                                            data-style="btn btn-default dropdown-toggle filt_but txt_black">
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
                            <div class="col-12 col-md-12 col_input">
                                <div class="form-group ">
                                    <select class="selectpicker form-control " name="entrm_select"
                                            id="entrm_select"
                                            data-style="btn btn-default dropdown-toggle filt_but txt_black">
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
        <!--  filter systemic and charter     -->
        <div class="flightstop_filter subfilter_styles">
            <h5 class="filter-title">
                <a class="a_collapse font16 txt_org " data-toggle="collapse" href="#collapse3">نوع بلیت<span
                            class="fa fa-sort-down txt_org"></span></a>
            </h5>
            <div id="collapse3" class="collapse show">
                <div class="col-12 col-md-12 search_but ">
                    <ul class="list-group list-group-flush ul_no_pad sp_wb">
                        <li class="list-group-control sp_ib radio_cus_li checked">
                            <label class="custom-control custom-radio checked result_page_search">
                                <input name="radio" type="radio" class="custom-control-input filter-input radio-system-type" data-filter="">
                                <span class="custom-control-indicator "></span>
                                <span class="custom-control-description txt_black">
															همه
                                </span>
                            </label>
                        </li>
                        <li class="list-group-control sp_ib radio_cus_li checked">
                            <label class="custom-control custom-radio checked result_page_search">
                                <input name="radio" type="radio" class="custom-control-input filter-input radio-system-type" data-filter=".sk-G,.sk-M,.sk-J,.sk-U,.sk-V">
                                <span class="custom-control-indicator "></span>
                                <span class="custom-control-description txt_black">
															سیستمی
                                </span>
                            </label>
                        </li>
                        <li class="list-group-control sp_ib radio_cus_li">
                            <label class="custom-control custom-radio result_page_search">
                                <input name="radio" type="radio" class="custom-control-input filter-input radio-system-type" data-filter=".sk-X,.sk-I,.sk-F,.sk-S,.sk-R">
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description txt_black">
															چارتری
								</span>
                            </label>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
        
        <!--        filter by time -->
        <div class="flightstop_filter subfilter_styles">
            <h5 class="filter-title">
                <a class="a_collapse font16 txt_org " data-toggle="collapse" href="#collapse4"> ساعت
                    <span class="fa fa-sort-down txt_org"></span></a>
            </h5>

            <div id="collapse4" class="collapse show">
                <?php $arr = array(
                                    array( "klass"=>"",
                                        "picture"=>"",
                                        "hour"=> "همه",
                                        "title"=>"همه"),
                                    array( "klass"=>".morning",
                                            "picture"=>"sunrise.svg",
                                            "hour"=> "4 تا 12",
                                            "title"=>"4-12"),
                                    array( "klass"=>".noon",
                                        "picture"=>"sun.svg",
                                        "hour"=> "12 تا 18",
                                        "title"=>"18-12"),
                                    array( "klass"=>".night",
                                        "picture"=>"moon.svg",
                                        "hour"=> "18 تا 4",
                                        "title"=>"4-18"));?>
                <?php foreach($arr as $v): ?>
                <li class="list-group-control sp_ib radio_cus_li">
                    <label class="custom-control custom-radio result_page_search">
                        <input name="radio" type="radio"
                               class="custom-control-input filter-input time-span-filter persian-font"
                               data-filter="<?php echo $v["klass"]; ?>">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-description txt_black persian-number"><?php echo $v["hour"]; ?></span>
                    </label>
                </li>
                    <!--                <div class="form-check form-check custom-controls-stacked  my-3">-->
<!--                    <label class="form-check-label custom-control fill-checkbox" title="--><?php //echo $v['title']; ?><!--">-->
<!--                        <input class="form-check-input fill-control-input filter-input time-span-radio"-->
<!--                               type="radio"-->
<!--                               data-filter="--><?php //echo $v["klass"]; ?><!--"-->
<!--                               style="">-->
<!--                        <span style="margin-right: -33px;margin-top: -16px;">-->
<!--                            <img src='--><?php //echo  $front_url."/svg/". $v["picture"]; ?><!--'-->
<!--                                 class="hour-option"-->
<!--                                 style="width:40px;height:auto;cursor:pointer !important;">-->
<!--                        </span>-->
<!--                        <span class="fill-control-description rtl"> --><?php //echo $v["hour"]; ?><!--</span>-->
<!--                    </label>-->
<!--                </div>-->
                <?php endforeach; ?>

            </div>
        </div>

        <!--        filter by airline -->
        <div class="flightstop_filter subfilter_styles">
            <h5 class="filter-title">
                <a class="a_collapse font16 txt_org " data-toggle="collapse" href="#collapse4"> ایرلاین ها
                    <span class="fa fa-sort-down txt_org"></span></a>
            </h5>
            <div id="collapse4" class="collapse show">

                <div class="form-check form-check custom-controls-stacked  my-3">
                    <label class="form-check-label custom-control fill-checkbox">
                        <input class="form-check-input fill-control-input filter-input airline-radio" type="checkbox" data-filter="">
                        <span class="fill-control-description rtl persian-number" style="width:100%;">
                            <div class="rtl" style="width: 100%;">
                                <span  style="width:60%;float:left" ><?php echo format_currency($cheapest_flight); ?></span>
                                <span  style="width:10%;float:left">از</span>
                                <span  style="width:30%;float:left">همه</span>
                            </div>
                        </span>
                        <span class="fill-control-indicator"></span>
                    </label>
                </div>

                <?php foreach($airlines_sorted as $k=>$v): ?>
                    <div class="form-check form-check custom-controls-stacked  my-3">
                        <label class="form-check-label custom-control fill-checkbox">
                            <input class="form-check-input fill-control-input filter-input airline-radio" type="checkbox" data-filter=".<?php echo $airline_codes[$k]; ?>">
                            <span class="fill-control-description rtl persian-number" style="width:100%;">
                                <div class="rtl" style="width: 100%;">
                                    <span  style="width:60%;float:left" >
                                            <?php echo format_currency($v); ?>
                                    </span>
                                    <span  style="width:10%;float:left">از</span>
                                    <span  style="width:30%;float:left"><?php echo $k; ?></span>
                                    </div>
                            </span>
                            <span class="fill-control-indicator"></span>
                        </label>
                    </div>
                <?php endforeach; ?>
<!--                <div class="form-check form-check custom-controls-stacked  my-3">-->
<!--                    <label class="form-check-label custom-control fill-checkbox">-->
<!--                        <input class="form-check-input fill-control-input" type="checkbox">-->
<!--                        <span class="fill-control-description">امارات ایرلاین</span>-->
<!--                        <span class="fill-control-indicator"></span>-->
<!---->
<!--                    </label>-->
            </div>
        </div>

        <!--   filter by class type -->
        <div class="flightstop_filter subfilter_styles">
            <h5 class="filter-title">
                <a class="a_collapse font16 txt_org " data-toggle="collapse" href="#collapse4">کلاس
                    <span class="fa fa-sort-down txt_org"></span></a>
            </h5>

            <div id="collapse4" class="collapse show">

                <li class="list-group-control sp_ib radio_cus_li">
                    <label class="custom-control custom-radio result_page_search">
                        <input name="radio" type="radio"
                               class="custom-control-input filter-input klass-filter"
                               data-filter="">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-description txt_black">همه</span>
                    </label>
                </li>

                <li class="list-group-control sp_ib radio_cus_li">
                    <label class="custom-control custom-radio result_page_search">
                        <input name="radio" type="radio"
                               class="custom-control-input filter-input klass-filter"
                               data-filter=".E">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-description txt_black">اکونومی</span>
                    </label>
                </li>

                <li class="list-group-control sp_ib radio_cus_li">
                    <label class="custom-control custom-radio result_page_search">
                        <input name="radio" type="radio"
                               class="custom-control-input filter-input klass-filter"
                               data-filter=".B">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-description txt_black">بیزینس</span>
                    </label>
                </li>

            </div>
        </div>
<!--        -->
<!--        <div class="flightstop_filter subfilter_styles">-->
<!--            <h5 class="filter-title">-->
<!--                <a class="a_collapse font16 txt_org" data-toggle="collapse" href="#collapse5"> قیمت <span-->
<!--                            class="fa fa-sort-down txt_org"></span></a>-->
<!--            </h5>-->
<!--            <div id="collapse5" class="collapse show ">-->
<!--                <div class="form-check form-check custom-controls-stacked  my-3">-->
<!--                    <label class="form-check-label custom-control fill-checkbox">-->
<!--                        <input class="form-check-input fill-control-input" type="checkbox">-->
<!--                        <span class="fill-control-description">15,970,000 - 39,967,000 ریال </span>-->
<!--                        <span class="fill-control-indicator"></span>-->
<!---->
<!--                    </label>-->
<!--                </div>-->
<!---->
<!--                <div class="form-check form-check custom-controls-stacked  my-3">-->
<!--                    <label class="form-check-label custom-control fill-checkbox">-->
<!--                        <input class="form-check-input fill-control-input" type="checkbox">-->
<!--                        <span class="fill-control-description">-->
<!--													  15,970,000 - 39,967,000 ریال </span>-->
<!--                        <span class="fill-control-indicator"></span>-->
<!---->
<!--                    </label>-->
<!--                </div>-->
<!--                <div class="form-check form-check custom-controls-stacked  my-3">-->
<!--                    <label class="form-check-label custom-control fill-checkbox">-->
<!--                        <input class="form-check-input fill-control-input" type="checkbox">-->
<!--                        <span class="fill-control-description">-->
<!--													 39,967,000 - 63,963,000 ریال </span>-->
<!--                        <span class="fill-control-indicator"></span>-->
<!---->
<!--                    </label>-->
<!--                </div>-->
<!--                <div class="form-check form-check custom-controls-stacked  my-3">-->
<!--                    <label class="form-check-label custom-control fill-checkbox">-->
<!--                        <input class="form-check-input fill-control-input" type="checkbox">-->
<!--                        <span class="fill-control-description">-->
<!--													 87,960,000 - 111,957,000 ریال </span>-->
<!--                        <span class="fill-control-indicator"></span>-->
<!---->
<!--                    </label>-->
<!--                </div>-->
<!---->
<!--                <div class="form-check form-check custom-controls-stacked  my-3">-->
<!--                    <label class="form-check-label custom-control fill-checkbox">-->
<!--                        <input class="form-check-input fill-control-input" type="checkbox">-->
<!--                        <span class="fill-control-description">-->
<!--													 111,957,000 - 135,953,000 ریال </span>-->
<!--                        <span class="fill-control-indicator"></span>-->
<!---->
<!--                    </label>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->


<!--        -->
<!--        <div class="flightstop_filter subfilter_styles">-->
<!--            <h5 class="filter-title">-->
<!--                <a class="a_collapse font16 txt_org" data-toggle="collapse" href="#collapse8"> فرودگاه ها-->
<!--                    <span class="fa fa-sort-down txt_org"></span></a>-->
<!--            </h5>-->
<!--            <div id="collapse8" class="collapse show ">-->
<!--                <div class="form-check form-check custom-controls-stacked  my-3">-->
<!--                    <label class="form-check-label custom-control fill-checkbox">-->
<!--                        <input class="form-check-input fill-control-input" type="checkbox">-->
<!--                        <span class="fill-control-description">فرودگاه دستغیب شیراز</span>-->
<!--                        <span class="fill-control-indicator"></span>-->
<!---->
<!--                    </label>-->
<!--                </div>-->
<!--                <div class="form-check form-check custom-controls-stacked  my-3">-->
<!--                    <label class="form-check-label custom-control fill-checkbox">-->
<!--                        <input class="form-check-input fill-control-input" type="checkbox">-->
<!--                        <span class="fill-control-description">فرودگاه مهرآباد تهران</span>-->
<!--                        <span class="fill-control-indicator"></span>-->
<!---->
<!--                    </label>-->
<!--                </div>-->
<!--                <div class="form-check form-check custom-controls-stacked  my-3">-->
<!--                    <label class="form-check-label custom-control fill-checkbox">-->
<!--                        <input class="form-check-input fill-control-input" type="checkbox">-->
<!--                        <span class="fill-control-description">-->
<!--													   فرودگاه آتاتورک استانبول</span>-->
<!--                        <span class="fill-control-indicator"></span>-->
<!---->
<!--                    </label>-->
<!--                </div>-->
<!--                <div class="form-check form-check custom-controls-stacked  my-3">-->
<!--                    <label class="form-check-label custom-control fill-checkbox">-->
<!--                        <input class="form-check-input fill-control-input" type="checkbox">-->
<!--                        <span class="fill-control-description">-->
<!--													   فرودگاه بین المللی وین</span>-->
<!--                        <span class="fill-control-indicator"></span>-->
<!---->
<!--                    </label>-->
<!--                </div>-->
<!--                <div class="form-check form-check custom-controls-stacked  my-3">-->
<!--                    <label class="form-check-label custom-control fill-checkbox">-->
<!--                        <input class="form-check-input fill-control-input" type="checkbox">-->
<!--                        <span class="fill-control-description">-->
<!--													   فرودگاه بین المللی دوبی</span>-->
<!--                        <span class="fill-control-indicator"></span>-->
<!---->
<!--                    </label>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->

    </div>
</div>

<!-- orderby and cheapest flights and results-->
<div class="col-12 col-md-9 result_col">

    <!-- cheapest flights -->
    <div class="row row_re_filter result_side_filter cheapest_daycal_row mb-4">
        <div class="col-12 col-md-12 cheapest_daycal_col">
            <?php if(isset($cheapest_flights->d)): ?>
                <?php foreach(o2a($cheapest_flights->d) as $f): ?>
                    <?php
                        $url = base_url('front/ticket_search_get')."?".http_build_query(array(
                                "ffrom"=>$flight_from,
                                "fto"=>$flight_to,
                                "from_date"=>$f["JalaliDate"]
                            ));
//                        pre($url);
                    ?>
                    <a class="sp_d2 day_cal" href="<?php echo $url; ?>">
                        <div class=" day_cal_row">
                            <div class=" day_date_col">
                                <span class="txt_gray day_date sp_d text-center bold">
                                    <?php echo $f["WeekDay"]; ?>
                                </span>
                                <span class="txt_gray day_date sp_d text-center persian-number">
                                    <?php echo $f["JalaliDate"]; ?>
                                </span>
                            </div>
                            <div class=" day_price_col">
                                <span class="txt_gray day_price sp_d text-center font18 bold persian-number">
                                    <?php echo substr($f["Price"],0,3); ?>
                                </span>
                                <span class="txt_gray day_price sp_d text-center">هزارتومان</span>
                            </div>
                        </div>
                    </a>

                <?php endforeach; ?>
            <?php endif; ?>
        </div>
        <div class="col-12 col-md-12 cheapest_daycal_col_nav right_calday_nav cursp">
        </div>
        <div class="col-12 col-md-12 cheapest_daycal_col_nav left_calday_nav cursp">
        </div>

    </div>
    <!-- orderby header -->
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
                            <option class="">ایرلاین</option>
                            <option class="">توقف</option>
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
                <a href="#" class="btn btn-primary btn_cuscyan days_but"><i
                            class="fa fa-angle-right fa-fw"></i> روز قبل </a>
                <a href="#" class="btn btn-primary btn_cuscyan days_but"> روز بعد <i
                            class="fa fa-angle-left fa-fw"></i></a>
            </div>
        </div>
    </div>
    <!-- result row -->
    <div class="row re_table_row">
        <?php foreach ($res["Data"] as $item): ?>
            <?php
            $id = uniqid();
            // $item=o2a($item);
            $item['airline_img'] = base_url('assets/img/airline/') . $item["AirLineEnglish"] . '.png';
            $i = intval(substr($item["LeaveTime"], 0, 2));

            if ($i < 12 && $i >= 4) $hour = "morning";
            else if ($i >= 12 && $i < 18) $hour = "noon";
            else $hour = "night";

            $ticket_type = "sk-" . $item["SystemKey"];
            $klasses = sprintf("clear %s isAvailable E S %s count9 %s filter-item", $item["AirLineEnglish"], $hour, $ticket_type);

            //prepare leave hour
            $l = $item["LeaveTime"];

            $item["leave_hour"] = strlen($l) === 4 ? $l[0] . $l[1] . ":" . $l[2] . $l[3] : $l;
            ?>

            <div class="col-md-12 card_cus et_sr_col_cont <?php echo $klasses; ?>">
                <div class="row et_sr_row_in">
                    <div class="col-md-12 table_col table-responsive">
                        <div class="">

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
                                <tr>
                                    <td class="persian-number"><?php echo format_currency($item["price"]); ?></td>
                                    <td>
                                        <span class="Flighttime sp_d persian-number">
                                            <?php echo $item["leave_hour"]; ?>
                                        </span>
                                        <span class="sp_d">رفت</span>
                                    </td>
                                    <td>
                                        <span class="FlightNumber sp_d">
                                            <?php echo $item["FlightNumber"]; ?>
                                        </span>
                                        <span class="FlightDate sp_d2 rtl persian-number">
                                            <?php echo $item["LeaveDateFa"]; ?>
                                        </span>
                                        <span class="rtl">
														                <?php echo $item["LeaveDate"]; ?>
														            </span>
                                        <span class="FlightKind sp_d">
                                            <?php $key_class = $item["SystemKeyName"] == 'چارتر' ? "badge badge-pill badge-success": "badge badge-pill badge-default"; ?>
                                            <span class="<?php echo $key_class; ?>">
                                                <?php echo $item["SystemKeyName"]; ?>
                                            </span>
                                        </span>
                                    </td>
                                    <td>
														            <span class="Flight_from sp_d2"> 
														                <?php echo $item["FromShowName"]; ?>
														            </span>
                                        <span class="sp_d2"> - </span>
                                        <span class="Flight_to sp_d2">
													                <?php echo $item["ToShowName"]; ?>
													            </span>
                                    </td>
                                    <td>
                                        <img class="air_line_img"
                                             src="<?php echo $item["airline_img"]; ?>">
                                        <span class="air_line_name sp_d">
														                <?php echo $item["AirLine"]; ?>
														            </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    	<form method="POST" action="<?php echo base_url('front/buy_ticket'); ?>">
                                    		<input type="hidden" name="id" value="<?php echo $item["Id"]; ?>" >
                                    		<input type="hidden" name="flight_from"  
                                    					 value="<?php echo  $flight_from; ?>">
                                    		<input type="hidden" name="flight_to"
                                    					 value="<?php echo $flight_to; ?>">
                                    		<input type="hidden" name="flight_date"
                                    					 value="<?php echo $flight_date ; ?>" >
                                        <button type="submit"
                                        			 class="btn btn-info btn_cusorg_gr w-75 btn-sm" role="button">
                                        			 <i class="fa fa-ticket txt_white"></i> رزرو بلیت</a>
                                        </button>
																			</form>
                                    </td>
                                    <!--  <td>
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
                                              src="img/5da3c62db1c3e971ea01c54afbc83bd3_XL.png">
                                         <span class="air_line_name sp_d">هواپیمایی آسمان</span>
                                     </td> -->
                                </tr>
                                <tr>
                                    <td colspan="6">
                                        <div class="card2">
                                            <div class="card-header card_header_cus">
                                                <a data-toggle="collapse" href="#<?php echo $id; ?>" class="txt_white ">
                                                    جزییات بیشتر این پرواز <span class="caret"></span></a>
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
                                                                                	<?php echo $item["FromShowName"]; ?>
                                                                                	</span>
                                                                                <span class="sp_d2"> - </span>
                                                                                <span class="Flight_to sp_d2">  
                                                                                	<?php echo $item["ToShowName"]; ?> </span>
                                                                                <span class="FlightDate sp_d2 rtl"> 
                                                                                	<?php echo $item["LeaveDateFa"]; ?>  </span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr class="divider_tr">
                                                                            <td>
                                                                                <img class="air_line_img"
                                                                                     src="<?php echo $item["airline_img"]; ?>">
                                                                                <span class="air_line_name sp_d"> <?php echo $item["AirLine"]; ?></span>
                                                                            </td>
                                                                            <td colspan="2">
                                                                                <span class="FlightNumber sp_d"> <?php echo $item["FlightNumber"]; ?> </span>
                                                                                <span class="Flightclass sp_d"><?php echo $item["kind"]; ?></span>
                                                                            </td>
                                                                            <td colspan="2">
                                                                                <span class="Flighttime_takeoff sp_d2"><?php echo $item["leave_hour"]; ?></span>
                                                                                <span class="city_id sp_d2"><?php echo $item["From"]; ?></span>
                                                                                <span class="FlightDate sp_d rtl"><?php echo $item["LeaveDateFa"]; ?></span>
                                                                                <span class="airport_na sp_d"></span>
                                                                            </td>
                                                                            <td>
                                                                                <span class="Flight_day sp_d"><?php echo $item["DayOfWeek"]; ?></span>
                                                                                <span class="Flight_day sp_d"><i
                                                                                            class="icon-time-slot"></i></span>
                                                                                <span class="Flight_time sp_d">فرودگاه</span>
                                                                            </td>
                                                                            <td>
                                                                                <span class="Flighttime_landing sp_d2"><?php echo $item["ArrivalTime"]; ?></span>
                                                                                <span class="city_id sp_d2"><?php echo $item["To"]; ?></span>
                                                                                <span class="FlightDate sp_d rtl">fixme</span>
                                                                                <span class="airport_na sp_d">فرودگاه مهرآباد</span>
                                                                            </td>

                                                                        </tr>
                                                                        <!--                                            -->
                                                                        <!--                                            <tr>-->
                                                                        <!--                                                <td colspan="2">-->
                                                                        <!--                                                    <span class="Flight_from sp_d2"> تهران </span>-->
                                                                        <!--                                                    <span class="sp_d2"> - </span>-->
                                                                        <!--                                                    <span class="Flight_to sp_d2"> شیراز </span>-->
                                                                        <!--                                                    <span class="FlightDate sp_d2 rtl"> 20 تیر </span>-->
                                                                        <!--                                                </td>-->
                                                                        <!--                                            </tr>-->
                                                                        <!--                                            <tr class="divider_tr">-->
                                                                        <!--                                                <td>-->
                                                                        <!--                                                    <img class="air_line_img"-->
                                                                        <!--                                                         src="img/5da3c62db1c3e971ea01c54afbc83bd3_XL.png">-->
                                                                        <!--                                                    <span class="air_line_name sp_d">هواپیمایی آسمان</span>-->
                                                                        <!--                                                </td>-->
                                                                        <!--                                                <td colspan="2">-->
                                                                        <!--                                                    <span class="FlightNumber sp_d">W5-1098</span>-->
                                                                        <!--                                                    <span class="FlightDate sp_d2 rtl">20 تیر</span>-->
                                                                        <!--                                                </td>-->
                                                                        <!---->
                                                                        <!--                                                <td colspan="2">-->
                                                                        <!--                                                    <span class="Flighttime_takeoff sp_d2">20:30</span>-->
                                                                        <!--                                                    <span class="city_id sp_d2">THR</span>-->
                                                                        <!--                                                    <span class="FlightDate sp_d rtl"> 20 تیر </span>-->
                                                                        <!--                                                    <span class="airport_na sp_d">فرودگاه مهرآباد</span>-->
                                                                        <!--                                                </td>-->
                                                                        <!--                                                <td>-->
                                                                        <!--                                                    <span class="Flight_day sp_d">دوشنبه</span>-->
                                                                        <!--                                                    <span class="Flight_day sp_d"><i-->
                                                                        <!--                                                                class="icon-time-slot"></i></span>-->
                                                                        <!--                                                    <span class="Flight_time sp_d">1h.20 m</span>-->
                                                                        <!--                                                </td>-->
                                                                        <!--                                                <td colspan="2">-->
                                                                        <!--                                                    <span class="Flighttime_takeoff sp_d2">21:50</span>-->
                                                                        <!--                                                    <span class="city_id sp_d2">SHR</span>-->
                                                                        <!--                                                    <span class="FlightDate sp_d rtl"> 20 تیر </span>-->
                                                                        <!--                                                    <span class="airport_na sp_d">فرودگاه دستغیب شیراز</span>-->
                                                                        <!--                                                </td>-->
                                                                        <!---->
                                                                        <!--                                            </tr>-->
                                                                        <!--                                            -->
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 pay_info">
                                                            <div class="row pay_info_row info_head_row">
                                                                <div class="col-md-12 head_info">
                                                                    <p class="text-center head_info_p">جمع کل
                                                                        نفرات</p>
                                                                </div>
                                                            </div>
                                                            <div class="row pay_info_row">
                                                                <div class="col-md-6">
                                                                    <p class="text-right">نوغ بلیت :</p>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <p class="text-left"><?php echo format_currency($item["SystemKeyName"]); ?></p>
                                                                </div>
                                                            </div>
                                                            <div class="row pay_info_row">
                                                                <div class="col-md-6">
                                                                    <p class="text-right">نرخ پایه :</p>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <p class="text-left"><?php echo format_currency($item["price"]); ?></p>
                                                                </div>
                                                            </div>
                                                            <div class="row pay_info_row">
                                                                <div class="col-md-6">
                                                                    <p class="text-right">نرخ و مالیات :</p>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <p class="text-left"><?php echo format_currency($item["price"]); ?></p>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <p class="text-right ">مجموع</p>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <p class="text-left"><?php echo format_currency($item["price"]); ?></p>
                                                                </div>
                                                            </div>
                                                            <div class="row but_row_info">
                                                                <div class="col-md-12 ">
                                                                    <button type="button"
                                                                            class="btn btn-raised btn_cuscyan col-md-12 btn-sm">
                                                                        قوانین بلیت
                                                                        <i class="fa fa-ticket txt_white"></i>
                                                                    </button>

                                                                </div>
                                                            </div>
                                                            <div class="row but_row_info">
                                                                <div class="col-md-12 ">
                                                                    <button type="button"
                                                                            class="btn btn-raised btn_cuscyan col-md-12 btn-sm">
                                                                        قوانین حمل بار <i
                                                                                class="fa fa-suitcase"></i>
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
        <!-- ======================================================================================================= -->

    </div>
</div>



<script>

    function trim (s, c) {
        if (c === "]") c = "\\]";
        if (c === "\\") c = "\\\\";
        return s.replace(new RegExp(
            "^[" + c + "]+|[" + c + "]+$", "g"
        ), "");
    }

    Isotope.Item.prototype._create = function() {
        // assign id, used for original-order sorting
        this.id = this.layout.itemGUID++;
        // transition objects
        this._transn = {
            ingProperties: {},
            clean: {},
            onEnd: {}
        };
        this.sortData = {};
    };

    Isotope.Item.prototype.layoutPosition = function() {
        this.emitEvent( 'layout', [ this ] );
    };

    Isotope.prototype.arrange = function( opts ) {
        // set any options pass
        this.option( opts );
        this._getIsInstant();
        // just filter
        this.filteredItems = this._filter( this.items );
        // flag for initalized
        this._isLayoutInited = true;
    };

    // layout mode that does not position items
    Isotope.LayoutMode.create('none');


    $(document).ready(function()
    {
        // init Isotope
        var $grid = $('.re_table_row').isotope({
            itemSelector: '.filter-item',
            layoutMode: 'none'
        });
        // filter functions
        var filterFns = {
            // show if number is greater than 50
            numberGreaterThan50: function() {
                var number = $(this).find('.number').text();
                return parseInt( number, 10 ) > 50;
            },
            // show if name ends with -ium
            ium: function() {
                var name = $(this).find('.name').text();
                return name.match( /ium$/ );
            }
        };
        // bind filter button click
        // $('#filters').on( 'click', 'button', function() {
        //   var filterValue = $( this ).attr('data-filter');
        //   // use filterFn if matches value
        //   filterValue = filterFns[ filterValue ] || filterValue;
        //   $grid.isotope({ filter: filterValue });
        // });

        // $('.m-filters').on( 'click', 'radio', function() {
        // 	console.log('in m-filters');
        //   var filterValue = $( this ).attr('data-filter');
        //   // use filterFn if matches value
        //   filterValue = filterFns[ filterValue ] || filterValue;
        //   $grid.isotope({ filter: filterValue });
        // });

        $(".filter-input").click(function(e)
        {
            console.log(e.target.className);

            // console.log(e.target.type);
            // console.log(e.target.className);
            var filters = [];
            var filterValue = $( this ).attr('data-filter');

            // airline radio buttons
            if(e.target.type=='checkbox'){
                //uncheck cheapest-flight check box if current checkbox is not the cheapest flight.
                if(!$(this).hasClass('cheapest-flight')) $(".cheapest-flight").prop("checked",false);
                //uncheck other checkboxes if cheapest flight is selected.
                var cheapest_flight_selected = false;
                $(".airline-radio:checked").each(function(i,j)
                {
                    if($(j).hasClass('cheapest-flight')) cheapest_flight_selected = true;
                });

                if(cheapest_flight_selected){
                    $(".ariline-radio:checked").each(function(i,j)
                    {
                        $(j).prop('checked',false);
                    });
                }else{
                    $(".airline-radio:checked").each(function(i,j)
                    {
                        filters.push($(j).attr("data-filter"));
                    });
                }
                filterValue = trim(filters.join(","), ",");
            }

            if(e.target.type=="radio"){

                $(".time-span-filter:checked").each(function(i,j)
                {
                  filters.push($(j).attr('data-filter'));
                });

                $(".radio-system-type:checked").each(function (i,j)
                {
                    filters.push($(j).attr('data-filter'));
                });

                $(".klass-filter:checked").each(function(i,j)
                {
                    filters.push($(j).attr('data-filter'));
                })
            }


            //--------------------------------------------------
            filterValue = filterFns[ filterValue ] || filterValue;
            $grid.isotope({ filter: filterValue });
        });

        // // change is-checked class on buttons
        // $('.button-group').each( function( i, buttonGroup ) {
        //   var $buttonGroup = $( buttonGroup );
        //   $buttonGroup.on( 'click', 'button', function() {
        //     $buttonGroup.find('.is-checked').removeClass('is-checked');
        //     $( this ).addClass('is-checked');
        //   });
        // });

//        $(".hour-option").clic(function()
//        {
//            $(this).closest("radio").prop("checked",true);
//        });
    });

</script>
