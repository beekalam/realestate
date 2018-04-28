            <div class="fiter_side">
                <div class="panel-group">
                    <div class="panel panel-default">
                        <div class="panel-heading pan_head">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" href="#collapse1" class="collapsed" aria-expanded="false">
                                    جستجوی مجدد <span class="caret"></span></a>
                            </h4>
                        </div>
                        <div id="collapse1" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                            <div class="panel-body">
                                <div class="col-xs-6">
                                    <div class="radio radio-primary">
                                        <label>
                                            <input type="radio" name="flight_ways" value="twoway"><span
                                                    class="circle"></span><span class="check"></span> رفت و برگشت
                                        </label>
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="radio radio-primary">
                                        <label>
                                            <input type="radio" name="flight_ways" value="oneway"><span
                                                    class="circle"></span><span class="check"></span> فقط رفت
                                        </label>
                                    </div>
                                </div>
                                <div class=" col-xs-12 mt">
                                    <div class="input-field">
                                        <label class="txt_black" for="from">پرواز از :</label>
                                        <div class="form-group is-empty">
                                            <input type="text" class="form-control" id="from-place"
                                                   placeholder="Los Angeles, USA">
                                        </div>
                                    </div>
                                </div>
                                <div class=" col-xs-12 mt">
                                    <div class="input-field">
                                        <label class="txt_black" for="from">پرواز به :</label>
                                        <div class="form-group is-empty">
                                            <input type="text" class="form-control" id="to-place"
                                                   placeholder="Tokyo, Japan">
                                        </div>
                                    </div>
                                </div>
                                <div class=" col-xs-12 mt ">
                                    <div class="input-field">
                                        <label for="date-start">تاریخ ورورد به هتل :</label>
                                        <div class="form-group is-empty">
                                            <input type="date" class="form-control" id="date-start"
                                                   placeholder="mm/dd/yyyy">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 mt ">
                                    <div class="input-field cus_inp">
                                        <label for="date-end">تاریخ خروج از هتل :</label>
                                        <div class="form-group is-empty">
                                            <input type="date" class="form-control" id="date-end"
                                                   placeholder="mm/dd/yyyy">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-6 mt">
                                    <div class="dropdown">
                                        <button class="btn btn-default dropdown-toggle bt_cus2" type="button"
                                                id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                            کلاس پروازی
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu dr_cus" aria-labelledby="dropdownMenu1">
                                            <li><a href="#">اکونومی</a></li>
                                            <li><a href="#">فرست</a></li>
                                            <li><a href="#">بیزنس</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-xs-6 mt">
                                    <div class="dropdown">
                                        <button class="btn btn-default dropdown-toggle bt_cus2 no_rt_br" type="button"
                                                id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                            تعداد اتاق
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu dr_cus" aria-labelledby="dropdownMenu2">
                                            <li><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#">4</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-xs-6 mt">
                                    <div class="dropdown">
                                        <button class="btn btn-default dropdown-toggle bt_cus2" type="button"
                                                id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                            بزرگسال
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu dr_cus" aria-labelledby="dropdownMenu3">
                                            <li><a href="#">0</a></li>
                                            <li><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-xs-6 mt">
                                    <div class="dropdown">
                                        <button class="btn btn-default dropdown-toggle  bt_cus2 no_rt_br" type="button"
                                                id="dropdownMenu4" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                            کودک
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu dr_cus" aria-labelledby="dropdownMenu4">
                                            <li><a href="#">0</a></li>
                                            <li><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <input type="submit" class="btn btn-raised btn_cuscyan btn-lg btn_full"
                                           value="جستجوی پرواز">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <h5 class="filters-title">فیلتر نتایج براساس : </h5>
                <div class="flightstop_filter subfilter_styles">
                    <h5 class="filter-title">
                        <a class="a_collapse" data-toggle="collapse" href="#collapse2"> توقف <span class="caret"></span></a>
                    </h5>
                    <div id="collapse2" class="collapse in ">
                        <div class=" checkbox-inline">
                            <label class="checkbox-inline">
                                <input type="checkbox" value=""><span class="checkbox-material"><span
                                            class="check"></span></span> 0 </label>
                        </div>
                        <div class=" checkbox-inline">
                            <label class="checkbox-inline">
                                <input type="checkbox" value=""><span class="checkbox-material"><span
                                            class="check"></span></span> 1 </label>
                        </div>
                        <div class="checkbox-inline ">
                            <label class="checkbox-inline">
                                <input type="checkbox" value=""><span class="checkbox-material"><span
                                            class="check"></span></span> &gt;1 </label>
                        </div>
                    </div>
                </div>
                <div class="flightstop_filter subfilter_styles">
                    <h5 class="filter-title">
                        <a class="a_collapse" data-toggle="collapse" href="#collapse3"> ایرلاین <span
                                    class="caret"></span></a>
                    </h5>
                    <div id="collapse3" class="collapse in ">
                        <div class=" checkbox">
                            <label class="checkbox">
                                <input type="checkbox" value=""><span class="checkbox-material"><span
                                            class="check"></span></span> ترکیش ایرلاین </label>
                        </div>
                        <div class=" checkbox">
                            <label class="checkbox">
                                <input type="checkbox" value=""><span class="checkbox-material"><span
                                            class="check"></span></span> امارات ایرلاین </label>
                        </div>
                        <div class="checkbox ">
                            <label class="checkbox">
                                <input type="checkbox" value=""><span class="checkbox-material"><span
                                            class="check"></span></span> هواپیمایی قطر </label>
                        </div>
                        <div class="checkbox ">
                            <label class="checkbox">
                                <input type="checkbox" value=""><span class="checkbox-material"><span
                                            class="check"></span></span> ایران ایر </label>
                        </div>
                        <div class="checkbox ">
                            <label class="checkbox">
                                <input type="checkbox" value=""><span class="checkbox-material"><span
                                            class="check"></span></span> آسمان </label>
                        </div>
                    </div>
                </div>
                <div class="flightstop_filter subfilter_styles">
                    <h5 class="filter-title">
                        <a class="a_collapse" data-toggle="collapse" href="#collapse4"> قیمت <span class="caret"></span></a>
                    </h5>
                    <div id="collapse4" class="collapse in ">
                        <div class="checkbox ">
                            <label class="checkbox">
                                <input type="checkbox" value=""><span class="checkbox-material"><span
                                            class="check"></span></span> 15,970,000 - 39,967,000 ریال </label>
                        </div>
                        <div class="checkbox ">
                            <label class="checkbox">
                                <input type="checkbox" value=""><span class="checkbox-material"><span
                                            class="check"></span></span> 15,970,000 - 39,967,000 ریال </label>
                        </div>
                        <div class="checkbox ">
                            <label class="checkbox">
                                <input type="checkbox" value=""><span class="checkbox-material"><span
                                            class="check"></span></span> 39,967,000 - 63,963,000 ریال </label>
                        </div>
                        <div class="checkbox ">
                            <label class="checkbox">
                                <input type="checkbox" value=""><span class="checkbox-material"><span
                                            class="check"></span></span> 87,960,000 - 111,957,000 ریال </label>
                        </div>
                        <div class="checkbox ">
                            <label class="checkbox">
                                <input type="checkbox" value=""><span class="checkbox-material"><span
                                            class="check"></span></span> 111,957,000 - 135,953,000 ریال </label>
                        </div>
                    </div>
                </div>
                <div class="flightstop_filter subfilter_styles">
                    <h5 class="filter-title">
                        <a class="a_collapse" data-toggle="collapse" href="#collapse5"> ساعت حرکت <span
                                    class="caret"></span></a>
                    </h5>
                    <div id="collapse5" class="collapse in ">
                        <div id="h-slider"></div>
                        <!--<div class="timeRangeDisplay"><span class="timeRangeFrom">12:00 AM</span><span class="timeRangeTo">12:00 PM</span>
</div>-->
                    </div>
                </div>
                <div class="flightstop_filter subfilter_styles">
                    <h5 class="filter-title">
                        <a class="a_collapse" data-toggle="collapse" href="#collapse6"> ساعت ورود رفت <span
                                    class="caret"></span></a>
                    </h5>
                    <div id="collapse6" class="collapse in ">
                        <div id="h-slider2"></div>
                        <!--<div class="timeRangeDisplay"><span class="timeRangeFrom">12:00 AM</span><span class="timeRangeTo">12:00 PM</span>
</div>-->
                    </div>
                </div>
                <div class="flightstop_filter subfilter_styles">
                    <h5 class="filter-title">
                        <a class="a_collapse" data-toggle="collapse" href="#collapse7"> مدت زمان توقف <span
                                    class="caret"></span></a>
                    </h5>
                    <div id="collapse7" class="collapse in ">
                        <div id="h-slider3"></div>
                        <!--<div class="timeRangeDisplay"><span class="timeRangeFrom">12:00 AM</span><span class="timeRangeTo">12:00 PM</span>
</div>-->
                    </div>
                </div>
                <div class="flightstop_filter subfilter_styles">
                    <h5 class="filter-title">
                        <a class="a_collapse" data-toggle="collapse" href="#collapse8"> فرودگاه ها <span
                                    class="caret"></span></a>
                    </h5>
                    <div id="collapse8" class="collapse in ">
                        <div class="checkbox ">
                            <label class="checkbox">
                                <input type="checkbox" value=""><span class="checkbox-material"><span
                                            class="check"></span></span> فرودگاه دستغیب شیراز </label>
                        </div>
                        <div class="checkbox ">
                            <label class="checkbox">
                                <input type="checkbox" value=""><span class="checkbox-material"><span
                                            class="check"></span></span> فرودگاه مهرآباد تهران </label>
                        </div>
                        <div class="checkbox ">
                            <label class="checkbox">
                                <input type="checkbox" value=""><span class="checkbox-material"><span
                                            class="check"></span></span> فرودگاه آتاتورک استانبول </label>
                        </div>
                        <div class="checkbox ">
                            <label class="checkbox">
                                <input type="checkbox" value=""><span class="checkbox-material"><span
                                            class="check"></span></span> فرودگاه بین المللی وین </label>
                        </div>
                        <div class="checkbox ">
                            <label class="checkbox">
                                <input type="checkbox" value=""><span class="checkbox-material"><span
                                            class="check"></span></span> فرودگاه بین المللی دوبی</label>
                        </div>
                    </div>
                </div>
            </div>