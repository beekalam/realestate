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

                <?php if($pt == 'apartment'): ?>
                <div class="form-body col-xs-6">
                    <div class="form-group">
                        <label class="col-md-3 control-label">پارکینگ</label>
                        <div class="col-md-9">
                            <input type="checkbox" id="parking" name="parking" class="form-control input-sm"
                                   value="yes" <?php echo set_checkbox('parking'); ?>>
                        </div>
                    </div>
                </div>
                <?php endif; ?>

                <?php if($pt == 'apartment'): ?>
                <div class="form-body col-xs-6">
                    <div class="form-group">
                        <label class="col-md-3 control-label">تعداد پارکینگ</label>
                        <div class="col-md-9">
                            <input type="text" id="parking_count" name="parking_count" class="form-control input-sm" placeholder="تعداد پارکینگ"
                                   value="<?php echo set_value('parking_count'); ?>">
                        </div>
                    </div>
                </div>
                <?php endif; ?>

                <?php if($pt == 'apartment'): ?>
                <div class="form-body col-xs-6">
                    <div class="form-group">
                        <label class="col-md-3 control-label">مساحت پارکینگ</label>
                        <div class="col-md-9">
                            <input type="text" id="parking_area" name="parking_area" class="form-control input-sm" placeholder="تعداد اتاق"
                                   value="<?php echo set_value('parking_area'); ?>">
                        </div>
                    </div>
                </div>
                <?php endif; ?>

                <?php if($pt ==  'apartment'): ?>
                    <div class="form-body col-xs-6">
                        <div class="form-group">
                            <label class="col-md-3 control-label">مساحت</label>
                            <div class="col-md-9">
                                <input type="text" id="area" name="area" class="form-control input-sm" placeholder="مساحت"
                                       value="<?php echo set_value('area'); ?>">
                            </div>
                        </div>
                    </div>
                <?php endif; ?>

                <?php if($pt == 'apartment'): ?>
                <div class="form-body col-xs-6">
                    <div class="form-group">
                        <label class="col-md-3 control-label">انباری</label>
                        <div class="col-md-9">
                            <input type="checkbox" id="anbari" name="anbari" class="form-control input-sm"
                                   value="yes" <?php echo set_checkbox('anbari'); ?>>
                        </div>
                    </div>
                </div>
                <?php endif; ?>

                <?php if($pt == 'apartment'): ?>
                <div class="form-body col-xs-6">
                    <div class="form-group">
                        <label class="col-md-3 control-label">تعداد انباری</label>
                        <div class="col-md-9">
                            <input type="text" id="anbari_count" name="anbari_count" class="form-control input-sm" placeholder="تعداد انباری"
                                   value="<?php echo set_value('anbari_count'); ?>">
                        </div>
                    </div>
                </div>
                <?php endif; ?>

                <?php if($pt == 'apartment'): ?>
                    <div class="form-body col-xs-6">
                        <div class="form-group">
                            <label class="col-md-3 control-label">مساحت انباری</label>
                            <div class="col-md-9">
                                <input type="text" id="anbari_area" name="anbari_area" class="form-control input-sm" placeholder="مساحت انباری"
                                       value="<?php echo set_value('anbari_area'); ?>">
                            </div>
                        </div>
                    </div>
                <?php endif; ?>

                <?php if($pt == 'apartment'): ?>
                <div class="form-body col-xs-6">
                    <div class="form-group">
                        <label class="col-md-3 control-label">تعداد اتاق</label>
                        <div class="col-md-9">
                            <input type="text" id="room_count" name="room_count" class="form-control input-sm" placeholder="تعداد اتاق"
                                   value="<?php echo set_value('room_count'); ?>">
                        </div>
                    </div>
                </div>
                <?php endif; ?>

                <?php if($pt == 'apartment' || $pt == 'land'): ?>
                <div class="form-body col-xs-6">
                    <div class="form-group">
                        <label class="col-md-3 control-label">سن ساختمان</label>
                        <div class="col-md-9">
                            <input type="text" id="age" name="age" class="form-control input-sm" placeholder="سن ساختمان"
                                   value="<?php echo set_value('age'); ?>">
                        </div>
                    </div>
                </div>
                <?php endif; ?>

                <?php if( $pt == 'land'): ?>
                    <div class="form-body col-xs-6">
                        <div class="form-group">
                            <label class="col-md-3 control-label">سن بازسازی</label>
                            <div class="col-md-9">
                                <input type="text" id="renovation_age" name="renovation_age" class="form-control input-sm" placeholder="سن بازسازی"
                                       value="<?php echo set_value('renovation_age'); ?>">
                            </div>
                        </div>
                    </div>
                <?php endif; ?>

                <?php if($pt == 'apartment'): ?>
                <div class="form-body col-xs-6">
                    <div class="form-group">
                        <label class="col-md-3 control-label">تعداد طبقات</label>
                        <div class="col-md-9">
                            <input type="text" id="num_stories" name="num_stories" class="form-control input-sm" placeholder="تعداد طبقات"
                                   value="<?php echo set_value('num_stories'); ?>">
                        </div>
                    </div>
                </div>
                <?php endif; ?>

                <?php if($pt == 'apartment'): ?>
                <div class="form-body col-xs-6">
                    <div class="form-group">
                        <label class="col-md-3 control-label">تعداد واحد در طبقه</label>
                        <div class="col-md-9">
                            <input type="text" id="unit_per_story" name="unit_per_story" class="form-control input-sm" placeholder="تعداد واحد در طبقه"
                                   value="<?php echo set_value('unit_per_story'); ?>">
                        </div>
                    </div>
                </div>
                <?php endif; ?>

                <?php if( ($pt == 'apartment'  || $dt=='store') && ($dt=='rent' || $dt=='rahn') ): ?>
                <div class="form-body col-xs-6">
                    <div class="form-group">
                        <label class="col-md-3 control-label">مبلغ اجاره</label>
                        <div class="col-md-9">
                            <input type="text" id="rent_amount" name="rent_amount" class="form-control input-sm" placeholder="مبلغ اجاره"
                                   value="<?php echo set_value('rent_amount'); ?>">
                        </div>
                    </div>
                </div>
                <?php endif; ?>

                <?php if( ($pt == 'apartment' || $pt == 'store') && ($dt == 'rent' || $dt='rahn')): ?>
                <div class="form-body col-xs-6">
                    <div class="form-group">
                        <label class="col-md-3 control-label">مبلغ رهن</label>
                        <div class="col-md-9">
                            <input type="text" id="rahn_amount" name="rahn_amount" class="form-control input-sm" placeholder="مبلغ رهن"
                                   value="<?php echo set_value('rahn_amount'); ?>">
                        </div>
                    </div>
                </div>
                <?php endif; ?>

                <?php if($pt == 'apartment' || $pt == 'store'): ?>
                <div class="form-body col-xs-6">
                    <div class="form-group">
                        <label class="col-md-3 control-label">شرایط اجاره</label>
                        <div class="col-md-9">
                            <input type="text" id="rent_preconditions" name="rent_preconditions" class="form-control input-sm" placeholder="شرایط اجاره"
                                   value="<?php echo set_value('rent_preconditions'); ?>">
                        </div>
                    </div>
                </div>
                <?php endif; ?>

                <?php if($pt == 'apartment' || $pt == 'store'): ?>
                <div class="form-body col-xs-6">
                    <div class="form-group">
                        <label class="col-md-3 control-label">شرایط رهن</label>
                        <div class="col-md-9">
                            <input type="text" id="rahn_preconditions" name="rahn_preconditions" class="form-control input-sm" placeholder="شرایط رهن"
                                   value="<?php echo set_value('rahn_preconditions'); ?>">
                        </div>
                    </div>
                </div>
                <?php endif; ?>

                <?php if($pt == 'apartment' && $dt!='none'): ?>
                <div class="form-body col-xs-6">
                    <div class="form-group">
                        <label class="col-md-3 control-label">روش پرداخت</label>
                        <div class="col-md-9">
                            <input type="text" id="pardakht_method" name="pardakht_method" class="form-control input-sm" placeholder="روش پرداخت"
                                   value="<?php echo set_value('pardakht_method'); ?>">
                        </div>
                    </div>
                </div>
                <?php endif; ?>

                <?php if( $pt == 'apartment' || $pt=='land' && $dt!='none'): ?>
                <div class="form-body col-xs-6">
                    <div class="form-group">
                        <label class="col-md-3 control-label">قیمت متر مربع</label>
                        <div class="col-md-9">
                            <input type="text" id="price_per_square_meter" name="price_per_square_meter" class="form-control input-sm" placeholder="قیمت متر مربع"
                                   value="<?php echo set_value('price_per_square_meter'); ?>">
                        </div>
                    </div>
                </div>
                <?php endif; ?>

                <?php if($pt == 'apartment'): ?>
                <div class="form-body col-xs-6">
                    <div class="form-group">
                        <label class="col-md-3 control-label">قیمت کل</label>
                        <div class="col-md-9">
                            <input type="text" id="price_total" name="price_total" class="form-control input-sm" placeholder="قیمت کل"
                                   value="<?php echo set_value('price_total'); ?>">
                        </div>
                    </div>
                </div>
                <?php endif; ?>

                <?php if($pt == 'apartment'): ?>
                <div class="form-body col-xs-6">
                    <div class="form-group">
                        <label class="col-md-3 control-label">نوع سند</label>
                        <div class="col-md-9">
                            <select name="sanad_type" id="sanad_type">
                                <option value="ملکی">ملکی</option>
                                <option value="اوقاف">اوقاف</option>
                            </select>
                        </div>
                    </div>
                </div>
                <?php endif; ?>

                <?php if($pt == 'land'): ?>
                <div class="form-body col-xs-6">
                    <div class="form-group">
                        <label class="col-md-3 control-label">ظابطه</label>
                        <div class="col-md-9">
                            <input type="text" id="zabete" name="zabete" class="form-control input-sm" placeholder="ظابطه"
                                   value="<?php echo set_value('zabete'); ?>">
                        </div>
                    </div>
                </div>
                <?php endif; ?>

                <?php if($pt=='land'): ?>
                <div class="form-body col-xs-6">
                    <div class="form-group">
                        <label class="col-md-3 control-label">کاربری</label>
                        <div class="col-md-9">
                            <input type="text" id="karbari" name="karbari" class="form-control input-sm" placeholder="کاربری"
                                   value="<?php echo set_value('karbari'); ?>">
                        </div>
                    </div>
                </div>
                <?php endif; ?>

                <?php if($pt == 'land'): ?>
                <div class="form-body col-xs-6">
                    <div class="form-group">
                        <label class="col-md-3 control-label">عقب نشینی</label>
                        <div class="col-md-9">
                            <input type="text" id="aghab_neshini" name="aghab_neshini" class="form-control input-sm" placeholder="عقب نشینی"
                                   value="<?php echo set_value('aghab_neshini'); ?>">
                        </div>
                    </div>
                </div>
                <?php endif; ?>

                <?php if($pt == 'store'): ?>
                <div class="form-body col-xs-6">
                    <div class="form-group">
                        <label class="col-md-3 control-label">پروانه</label>
                        <div class="col-md-9">
                            <input type="text" id="parvane" name="parvane" class="form-control input-sm" placeholder="پروانه"
                                   value="<?php echo set_value('parvane'); ?>">
                        </div>
                    </div>
                </div>
                <?php endif; ?>

                <?php if($pt == 'store'): ?>
                <div class="form-body col-xs-6">
                    <div class="form-group">
                        <label class="col-md-3 control-label">توضیحات پروانه</label>
                        <div class="col-md-9">
                            <input type="text" id="parvane_description" name="parvane_description" class="form-control input-sm" placeholder="توضیحات پروانه"
                                   value="<?php echo set_value('parvane_description'); ?>">
                        </div>
                    </div>
                </div>
                <?php endif; ?>


                <?php if($pt == 'land'): ?>
                    <div class="form-body col-xs-6">
                        <div class="form-group">
                            <label class="col-md-3 control-label">شرایط فروش</label>
                            <div class="col-md-9">
                                <input type="text" id="sell_conditions" name="sell_conditions" class="form-control input-sm" placeholder="شرایط فروش"
                                       value="<?php echo set_value('sell_conditions'); ?>">
                            </div>
                        </div>
                    </div>
                <?php endif; ?>

                <?php if($pt == 'land'): ?>
                    <div class="form-body col-xs-6">
                        <div class="form-group">
                            <label class="col-md-3 control-label">بازسازی شده</label>
                            <div class="col-md-9">
                                <input type="checkbox" id="renovated" name="renovated" class="form-control input-sm"
                                       value="yes" <?php echo set_checkbox('renovated'); ?>>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>



                <input type="hidden" name="property_type" value="<?php echo $pt; ?>" />
                <input type="hidden" name="deal_type" value="<?php echo $dt; ?>" />
            </div>

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

<script>
    function set_test_values()
    {
        $("#owner_name").val(random_name());
        $("#owner_family").val(random_family());
        $("#owner_tel").val(random_tel());
        $("#owner_mobile").val(random_mobile());
        $("#zone").val(random_name());
        $("#street").val(random_name());
        $("#alley").val(random_name());
        $("#parking_count").val(rand(1,6));
        $("#anbari_count").val(rand(1,6));
        $("#room_count").val(rand(1,6));
        $("#age").val(rand(1,10));
        $("#rent_preconditions").val('rent precondition');
        $("#rahn_preconditions").val("rahn precodition");
        $("#rahn_amount").val(rand(100000000,500000000));
        $("#rent_amount").val(rand(500000,900000));
        $("#price_total").val(rand(100000000,500000000));
        $("#unit_per_story").val(rand(1,6));
        $("#price_per_square_meter").val(rand(100000,200000));
        $("#parking_area").val(rand(50,60));
        $("#num_stories").val(rand(1,10));
        $("#area").val(rand(100,250));
        $("#anbari_count").val(rand(1,2));
        $("#").val(50,100);
        $("#anbari_area").val(50,100);
        $("#anbari_area").val(50,100);
    }

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
            set_test_values();
        }
    });
</script>
