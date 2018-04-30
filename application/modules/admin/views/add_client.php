
<div class="page-bar"> </div>

<div class="portlet box green">
    <div class="portlet-title">

        <div class="caption">
            <i class="fa fa-plus"></i>
            <span class="caption-subject bold uppercase">
              مشتری جدید
            </span>
        </div>
    </div>
    <div class="portlet-body form">
        <form role="form" method="POST" action="<?php echo $post_back; ?>">
            <?php if(!empty(validation_errors())): ?>
                <div class="alert alert-danger">
                    <?php echo validation_errors(); ?>
                </div>
            <?php endif; ?>
            <div class="row">

                <div class="form-body col-xs-6">
                    <div class="form-group">
                        <label class="col-md-3 control-label">نام</label>
                        <div class="col-md-9">
                            <input type="text" id="first_name" name="first_name" class="form-control input-sm" placeholder="نام" lang="fa"
                                   value="<?php echo $first_name ?? set_value('first_name'); ?>">
                        </div>
                    </div>
                </div>

                <div class="form-body col-xs-6">
                    <div class="form-group">
                        <label class="col-md-3 control-label">نام خانوادگی</label>
                        <div class="col-md-9">
                            <input type="text" id="last_name" name="last_name" class="form-control input-sm" placeholder="نام خانوادگی" lang="fa"
                                   value="<?php echo $last_name ?? set_value('last_name') ?>">
                        </div>
                    </div>
                </div>

                <div class="form-body col-xs-6">
                    <div class="form-group">
                        <label class="col-md-3 control-label">شماره موبایل</label>
                        <div class="col-md-9">
                            <input type="text" id="mobile" name="mobile" class="form-control input-sm persian-number" placeholder="شماره موبایل" lang="fa"
                                   value="<?php echo   $mobile ?? set_value('mobile'); ?>" >
                        </div>
                    </div>
                </div>

                <div class="form-body col-xs-6">
                    <div class="form-group">
                        <label class="col-md-3 control-label">تلفن ثابت</label>
                        <div class="col-md-9">
                            <input type="text" id="tel" name="tel" class="form-control input-sm persian-number" placeholder="تلفن ثابت" lang="fa"
                                   value="<?php echo $tel ?? set_value('tel'); ?>">
                        </div>
                    </div>
                </div>

                <div class="form-body col-xs-6">
                    <div class="form-group">
                        <label class="col-md-3 control-label">تاریخ مراجعه</label>
                        <div class="col-md-9">
                            <input type="text" id="date_submit" name="date_submit" class="form-control input-sm persian-number" placeholder="date_submit"
                                   value="<?php echo $date_submit_fa ?? set_value('date_submit'); ?>">
                        </div>
                    </div>
                </div>

                <div class="form-body col-xs-6">
                    <div class="form-group">
                        <label class="col-md-3 control-label">ساعت مراجعه</label>
                        <div class="col-md-9">
                            <input type="text" id="time_submit" name="time_submit" class="form-control input-sm" placeholder="time_submit"
                                   value="<?php echo $time_submit ?? set_value('time_submit'); ?>">
                        </div>
                    </div>
                </div>

                <div class="form-body col-xs-6">
                    <div class="form-group">
                        <label class="col-md-3 control-label">توضیحات</label>
                        <div class="col-md-9">
                            <textarea rows="4" cols="50" class="form-control input-sm" id="description" name="description" lang="fa"><?php echo $description ?? set_value('description'); ?></textarea>
                        </div>
                    </div>
                </div>


                <div class="form-body col-xs-6">
                    <div class="form-group">
                        <label class="col-md-3 control-label">بودجه اختصاص داده شده</label>
                        <div class="col-md-9">
                            <input type="text" id="budget" name="budget" class="form-control input-sm" placeholder="بودجه اختصاص داده شده"
                                   value="<?php echo $budget ?? set_value('budget'); ?>">
                        </div>
                    </div>
                </div>



                <div class="form-body col-xs-6">
                    <div class="form-group">
                        <label class="col-md-3 control-label">معاوضه</label>
                        <div class="col-md-9">
                            <input type="checkbox" id="exchange" name="exchange" class="form-control input-sm"
                                   value="yes" <?php echo set_checkbox('exchange'); ?> >
                        </div>
                    </div>
                </div>

                <div class="form-body col-xs-12">
                    <div class="form-group">
                        <label class="col-md-3 control-label">توضیحات معاوضه</label>
                        <div class="col-md-9">
                            <textarea rows="4" cols="50" class="form-control input-sm" id="exchange_description" name="exchange_description" lang="fa"><?php echo $exchange_description ?? set_value('exchange_description'); ?></textarea>
                        </div>
                    </div>
                </div>


            </div>

            <script>
                $(document).ready(function()
                {
                    $("#date_submit").datepicker(
                    {
                            isRTL: true,
                            changeMonth: true,
                            changeYear: true,
                            dateFormat: "yy/mm/dd"
                    });
                    $("#time_submit").timepicker({});

                    var test_mode = true;
                    if(test_mode){
                        $("#first_name").val(random_name());
                        $("#last_name").val(random_family());
                        $("#tel").val(random_tel());
                        $("#mobile").val(random_mobile());
                        $("#budget").val(rand(100000000,200000000));
                        $("#date_submit").val(random_persian_date());
                    }
                });
            </script>
            <div class="form-actions">
                <?php if(isset($id) || isset($_POST["id"])): ?>
                    <input type="hidden" name="id" value="<?php echo $id ?? set_value("id"); ?>" />
                <?php endif; ?>
                <button type="submit" class="btn blue btn-circle">ثبت</button>
                <!-- <button type="button" class="btn default">لغو</button> -->
            </div>
        </form>
    </div>
</div>