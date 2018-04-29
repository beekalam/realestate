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
        <form role="form" method="POST" action="<?php echo base_url() . 'admin/add_property'; ?>">
            <?php if(!empty(validation_errors())): ?>
                <div class="alert alert-danger">
                    <?php echo validation_errors(); ?>
                </div>
            <?php endif; ?>
            <div class="row">
                <div class="form-body col-xs-6">
                    <div class="form-group">
                        <label class="col-md-3 control-label">نوع</label>
                        <div class="col-md-9">
                            <select id="property_type" name="property_name">
                                <option value="apartment">آپارتمان و پیش فروش</option>
                                <option value="store">مغازه</option>
                                <option value="land">زمین</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-body col-xs-6">
                    <div class="form-group">
                        <label class="col-md-3 control-label">نام</label>
                        <div class="col-md-9">
                            <input type="text" id="owner_name" name="owner_name" class="form-control input-sm" placeholder="نام"
                                   value="<?php echo set_value('owner_name'); ?>">
                        </div>
                    </div>
                </div>

                <div class="form-body col-xs-6">
                    <div class="form-group">
                        <label class="col-md-3 control-label">نام خانوادگی</label>
                        <div class="col-md-9">
                            <input type="text" id="owner_family" name="owner_family" class="form-control input-sm" placeholder="نام خانوادگی"
                                   value="<?php echo set_value('owner_family') ?>">
                        </div>
                    </div>
                </div>

                <div class="form-body col-xs-6">
                    <div class="form-group">
                        <label class="col-md-3 control-label">شماره موبایل</label>
                        <div class="col-md-9">
                            <input type="text" id="owner_mobile" name="owner_mobile" class="form-control input-sm" placeholder="شماره موبایل"
                                   value="<?php echo set_value('owner_mobile'); ?>" >
                        </div>
                    </div>
                </div>

                <div class="form-body col-xs-6">
                    <div class="form-group">
                        <label class="col-md-3 control-label">تلفن ثابت</label>
                        <div class="col-md-9">
                            <input type="text" id="owner_tel" name="owner_tel" class="form-control input-sm" placeholder="تلفن ثابت"
                                   value="<?php echo set_value('owner_tel'); ?>">
                        </div>
                    </div>
                </div>

                <div class="form-body col-xs-6">
                    <div class="form-group">
                        <label class="col-md-3 control-label">منطقه</label>
                        <div class="col-md-9">
                            <input type="text" id="zone" name="zone" class="form-control input-sm" placeholder="منطقه"
                                   value="<?php echo set_value('zone'); ?>">
                        </div>
                    </div>
                </div>

                <div class="form-body col-xs-6">
                    <div class="form-group">
                        <label class="col-md-3 control-label">خیابان</label>
                        <div class="col-md-9">
                            <input type="text" id="street" name="street" class="form-control input-sm" placeholder="خیابان"
                                   value="<?php echo set_value('street'); ?>">
                        </div>
                    </div>
                </div>

                <div class="form-body col-xs-6">
                    <div class="form-group">
                        <label class="col-md-3 control-label">کوچه</label>
                        <div class="col-md-9">
                            <input type="text" id="alley" name="alley" class="form-control input-sm" placeholder="کوچه"
                                   value="<?php echo set_value('alley'); ?>">
                        </div>
                    </div>
                </div>

                <div class="form-body col-xs-6">
                    <div class="form-group">
                        <label class="col-md-3 control-label">پارکینگ</label>
                        <div class="col-md-9">
                            <input type="checkbox" id="parking" name="parking" class="form-control input-sm"
                                   value="yes" <?php echo set_checkbox('parking'); ?>>
                        </div>
                    </div>
                </div>

                <div class="form-body col-xs-6">
                    <div class="form-group">
                        <label class="col-md-3 control-label">تعداد پارکینگ</label>
                        <div class="col-md-9">
                            <input type="text" id="parking_count" name="parking_count" class="form-control input-sm" placeholder="تعداد پارکینگ"
                                   value="<?php echo set_value('parking_count'); ?>">
                        </div>
                    </div>
                </div>

                <div class="form-body col-xs-6">
                    <div class="form-group">
                        <label class="col-md-3 control-label">انباری</label>
                        <div class="col-md-9">
                            <input type="checkbox" id="anbari" name="anbari" class="form-control input-sm"
                                   value="yes" <?php echo set_checkbox('anbari'); ?>>
                        </div>
                    </div>
                </div>


                <div class="form-body col-xs-6">
                    <div class="form-group">
                        <label class="col-md-3 control-label">تعداد انباری</label>
                        <div class="col-md-9">
                            <input type="text" id="anbari_count" name="anbari_count" class="form-control input-sm" placeholder="تعداد انباری"
                                   value="<?php echo set_value('anbari_count'); ?>">
                        </div>
                    </div>
                </div>

                <div class="form-body col-xs-6">
                    <div class="form-group">
                        <label class="col-md-3 control-label">تعداد اتاق</label>
                        <div class="col-md-9">
                            <input type="text" id="room_count" name="room_count" class="form-control input-sm" placeholder="تعداد اتاق"
                                   value="<?php echo set_value('room_count'); ?>">
                        </div>
                    </div>
                </div>

                <!---->
    <!--                <div class="form-body col-xs-6">-->
    <!--                    <div class="form-group">-->
    <!--                        <label class="col-md-3 control-label">تاریخ مراجعه</label>-->
    <!--                        <div class="col-md-9">-->
    <!--                            <input type="text" id="date_submit" name="date_submit" class="form-control input-sm" placeholder="date_submit"-->
    <!--                                   value="--><?php //echo set_value('date_submit'); ?><!--">-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!---->
    <!--                <div class="form-body col-xs-6">-->
    <!--                    <div class="form-group">-->
    <!--                        <label class="col-md-3 control-label">ساعت مراجعه</label>-->
    <!--                        <div class="col-md-9">-->
    <!--                            <input type="text" id="time_submit" name="time_submit" class="form-control input-sm" placeholder="time_submit"-->
    <!--                                   value="--><?php //echo set_value('time_submit'); ?><!--">-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->

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

<script>
    $(document).ready(function()
    {
//        $("#date_submit").datepicker(
//            {
//                isRTL: true,
//                changeMonth: true,
//                changeYear: true,
//                dateFormat: "yy/mm/dd"
//            });
//        $("#time_submit").timepicker({});

        var test_mode = true;
        if(test_mode){
            $("#owner_name").val(random_name());
            $("#owner_family").val(random_family());
            $("#owner_tel").val(random_tel());
            $("#owner_mobile").val(random_mobile());
            $("#zone").val(random_name());
            $("#street").val(random_name());
            $("#alley").val(random_name());
            $("#parking_count").val(rand(1,6));
            $("#anbari_count").val(rand(1,6));
        }
    });
</script>
