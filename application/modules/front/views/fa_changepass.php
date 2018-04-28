<section class="main">
    <div class="container profile_cont">
        <div class="row profile_row">
            <div class="col-12 col-md-12 profile_col_cont">
                <div class="crd_cus ">
                    <div class="card-header card_header_cus">
                        <ul class="nav nav-tabs ul_no_pad nav_cus">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="" style="font-size:11px !important;">تغییر
                                    گذر واژه</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content tb_cn">

                            <div class="tab-pane active container" id="user_info">
                                <div class="col-12 col-md-12  table-responsive">

                                    <form class="form" method="POST" action="<?php echo base_url("front/changepass"); ?>">
                                            <?php if(isset($error)): ?>
                                                <div class="alert alert-danger">
                                                    <?php echo $error; ?>
                                                </div>
                                            <?php endif; ?>

                                        <div class="row">

                                            <div class="col-6">
                                                <div class="row">

                                                    <div class="form-group col-12">
                                                        <div class="row">
                                                            <label for="first_name" class="control-label col-sm-3">پسورد:</label>
                                                            <div class="col-sm-9">
                                                                <input type="password" id="old_password" name="old_password"
                                                                       class="form-control" required>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group col-12">
                                                        <div class="row">
                                                            <label for="last_name" class="control-label col-sm-3">پسورد
                                                                جدید:</label>
                                                            <div class="col-sm-9">
                                                                <input type="password" id="new_password" name="new_password"
                                                                       class="form-control"
                                                                       value="" required>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group col-12">
                                                        <div class="row">
                                                            <label for="birth_date" class="control-label col-sm-3">تکرار پسورد
                                                                جدید:</label>
                                                            <div class="col-sm-9">
                                                                <input type="password" id="new_password_repeat" name="new_password_repeat"
                                                                       class="form-control"
                                                                       value="" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-actions" style="text-align:center">
                                                        <button type="submit" class="btn btn-default">ثبت</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6" style="text-align:center;">
                                                <i class="fa fa-key" style="font-size: 9rem;
    color: orangered;
    padding-right: 134px;
    border-right: solid;
    border-right-color: black;
    border-right-width: 1px;"></i>
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
</section>
