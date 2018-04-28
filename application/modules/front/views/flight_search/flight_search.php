<?php
// pre(get_defined_vars());
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12 col-md-3 filter_col">
            <?php $this->load->view("_filter"); ?>
        </div>
        <div class="col-xs-12 col-md-9 result_col">
            <div class="result_side_filter">
                <div class="col-md-3">
                    <h5 class="filters-title_hr txt_purple"> مرتب سازی براساس : </h5>
                </div>
                <div class="col-md-4 drop_filter_col">
                    <div class="col-md-6 drop_filter">
                        <div class="dropdown">
                            <button class="btn btn-default dropdown-toggle  bt_cus2 " type="button" id="dropdownMenu7"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                قیمت
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu dr_cus" aria-labelledby="dropdownMenu7">
                                <li><a href="#"> قیمت </a></li>
                                <li><a href="#"> ایرلاین</a></li>
                                <li><a href="#"> توقف </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 drop_filter">
                        <div class="dropdown">
                            <button class="btn btn-default dropdown-toggle  bt_cus2 " type="button" id="dropdownMenu7"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                صعودی
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu dr_cus" aria-labelledby="dropdownMenu7">
                                <li><a href="#"> صعودی </a></li>
                                <li><a href="#"> نزولی </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 butt_filter_col">
                    <div class="btn-group but_filter">
                        <a href="#" class="btn btn-primary bt_cus3"> دو توقف یا بیشتر </a>
                        <a href="#" class="btn btn-primary bt_cus3"> یک توقف </a>
                        <a href="#" class="btn btn-primary bt_cus3"> بدون توقف</a>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="col-xs-12 col-md-12">
                    <div class="table-responsive"></div>
                </div>
																<?php $this->load->view("_result_table"); ?>
            </div>
        </div>
    </div>
</div>