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
        <form role="form" method="POST" action="<?php echo base_url() . 'admin/add_client'; ?>">
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
                            <input type="text" id="first_name" name="first_name" class="form-control input-sm" placeholder="نام"
                                   value="<?php echo set_value('first_name'); ?>">
                        </div>
                    </div>
                </div>

                <div class="form-body col-xs-6">
                    <div class="form-group">
                        <label class="col-md-3 control-label">نام خانوادگی</label>
                        <div class="col-md-9">
                            <input type="text" id="last_name" name="last_name" class="form-control input-sm" placeholder="نام خانوادگی"
                                   value="<?php echo set_value('last_name') ?>">
                        </div>
                    </div>
                </div>

                <div class="form-body col-xs-6">
                    <div class="form-group">
                        <label class="col-md-3 control-label">شماره موبایل</label>
                        <div class="col-md-9">
                            <input type="text" id="mobile" name="mobile" class="form-control input-sm" placeholder="شماره موبایل"
                                   value="<?php echo set_value('mobile'); ?>" >
                        </div>
                    </div>
                </div>

                <div class="form-body col-xs-6">
                    <div class="form-group">
                        <label class="col-md-3 control-label">تلفن ثابت</label>
                        <div class="col-md-9">
                            <input type="text" id="tel" name="tel" class="form-control input-sm" placeholder="تلفن ثابت"
                                   value="<?php echo set_value('tel'); ?>">
                        </div>
                    </div>
                </div>

                <div class="form-body col-xs-6">
                    <div class="form-group">
                        <label class="col-md-3 control-label">تاریخ مراجعه</label>
                        <div class="col-md-9">
                            <input type="text" id="date_submit" name="date_submit" class="form-control input-sm" placeholder="date_submit"
                                   value="<?php echo set_value('date_submit'); ?>">
                        </div>
                    </div>
                </div>

                <div class="form-body col-xs-6">
                    <div class="form-group">
                        <label class="col-md-3 control-label">ساعت مراجعه</label>
                        <div class="col-md-9">
                            <input type="text" id="time_submit" name="time_submit" class="form-control input-sm" placeholder="time_submit"
                                   value="<?php echo set_value('time_submit'); ?>">
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
                    }
                });
            </script>
            <div class="form-actions">
                <button type="submit" class="btn blue btn-circle">ثبت</button>
                <!-- <button type="button" class="btn default">لغو</button> -->
            </div>
        </form>
    </div>
</div>