<style>
    .cpanel {
        margin-top: 10px;
        margin-left: 10px;
        margin-right: 10px;
    }
</style>

<div class="page-bar"></div>
<div class="portlet box green">
    <div class="portlet-title">

        <div class="caption">
            <i class="fa fa-plus"></i>
            <span class="caption-subject bold uppercase">
                <?php
                if ($pt == 'apartment') {
                    echo 'آپارتمان';
                } else if ($pt == 'land') {
                    echo 'زمین';
                } else {
                    echo '';
                }
                ?>
            </span>
        </div>
    </div>
    <div class="portlet-body form">
        <form role="form" method="POST" action="<?php echo $post_back; ?>">
            <?php if (!empty(validation_errors())): ?>
                <div class="alert alert-danger">
                    <?php echo validation_errors(); ?>
                </div>
            <?php endif; ?>
            <div class="row">
                <!--  owner info-->
                <div class="col-xs-12">
                    <div class="panel panel-primary cpanel">
                        <div class="panel-heading">مشخصات مالک</div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="form-body col-xs-6">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">نام</label>
                                        <div class="col-md-7">
                                            <input type="text" id="owner_name" name="owner_name"
                                                   class="form-control input-sm"
                                                   placeholder="نام"
                                                   value="<?php echo $owner_name ?? set_value('owner_name'); ?>">
                                        </div>
                                        <div class="col-md-2">
                                            <div class="btn btn-default" onclick="loadModal('test')">جستجو</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-body col-xs-6">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">نام خانوادگی</label>
                                        <div class="col-md-9">
                                            <input type="text" id="owner_family" name="owner_family"
                                                   class="form-control input-sm" placeholder="نام خانوادگی"
                                                   value="<?php echo $owner_family ?? set_value('owner_family') ?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-body col-xs-6">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">شماره موبایل</label>
                                        <div class="col-md-9">
                                            <input type="text" id="owner_mobile" name="owner_mobile"
                                                   class="form-control input-sm" placeholder="شماره موبایل"
                                                   value="<?php echo $owner_mobile ?? set_value('owner_mobile'); ?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-body col-xs-6">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">تلفن ثابت</label>
                                        <div class="col-md-9">
                                            <input type="text" id="owner_tel" name="owner_tel"
                                                   class="form-control input-sm"
                                                   placeholder="تلفن ثابت"
                                                   value="<?php echo $owner_tel ?? set_value('owner_tel'); ?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-body col-xs-6">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">منطقه</label>
                                        <div class="col-md-9">
                                            <input type="text" id="zone" name="zone" class="form-control input-sm"
                                                   placeholder="منطقه"
                                                   value="<?php echo $zone ?? set_value('zone'); ?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-body col-xs-6">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">خیابان</label>
                                        <div class="col-md-9">
                                            <input type="text" id="street" name="street" class="form-control input-sm"
                                                   placeholder="خیابان"
                                                   value="<?php echo $street ?? set_value('street'); ?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-body col-xs-6">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">کوچه</label>
                                        <div class="col-md-9">
                                            <input type="text" id="alley" name="alley" class="form-control input-sm"
                                                   placeholder="کوچه"
                                                   value="<?php echo $alley ?? set_value('alley'); ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--                </fieldset>-->
                <!-- property info-->
                <div class="col-xs-12">
                    <div class="panel panel-primary cpanel">
                        <div class="panel-heading">مشخصات ملک</div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="row">
                                        <?php if ($pt == 'apartment'): ?>
                                            <div class="form-body col-xs-2">
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">پارکینگ</label>
                                                    <div class="col-md-9">
                                                        <input type="checkbox" id="parking" name="parking"
                                                               class="form-control input-sm"
                                                               value="yes" <?php if (isset($parking) && $parking == 'yes') echo 'checked="checked"'; else set_checkbox('parking'); ?>>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endif; ?>

                                        <?php if ($pt == 'apartment'): ?>
                                            <div class="form-body col-xs-4">
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">تعداد پارکینگ</label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="parking_count" name="parking_count"
                                                               class="form-control input-sm" placeholder="تعداد پارکینگ"
                                                               value="<?php echo $parking_count ?? set_value('parking_count'); ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endif; ?>

                                        <?php if ($pt == 'apartment'): ?>
                                            <div class="form-body col-xs-6">
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">مساحت پارکینگ</label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="parking_area" name="parking_area"
                                                               class="form-control input-sm" placeholder="تعداد اتاق"
                                                               value="<?php echo $parking_area ?? set_value('parking_area'); ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <?php if ($pt == 'apartment'): ?>
                                    <div class="form-body col-xs-2">
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">انباری</label>
                                            <div class="col-md-9">
                                                <input type="checkbox" id="anbari" name="anbari"
                                                       class="form-control input-sm"
                                                       value="yes" <?php if (isset($anbari) && $anbari == 'yes') echo 'checked="checked"'; else echo set_checkbox('anbari'); ?>>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>

                                <?php if ($pt == 'apartment'): ?>
                                    <div class="form-body col-xs-4">
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">تعداد انباری</label>
                                            <div class="col-md-9">
                                                <input type="text" id="anbari_count" name="anbari_count"
                                                       class="form-control input-sm" placeholder="تعداد انباری"
                                                       value="<?php echo $anbari_count ?? set_value('anbari_count'); ?>">
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>

                                <?php if ($pt == 'apartment'): ?>
                                    <div class="form-body col-xs-6">
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">مساحت انباری</label>
                                            <div class="col-md-9">
                                                <input type="text" id="anbari_area" name="anbari_area"
                                                       class="form-control input-sm" placeholder="مساحت انباری"
                                                       value="<?php echo $anbari_area ?? set_value('anbari_area'); ?>">
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>

                                <div class="row">
                                    <div class="col-xs-12">
                                        <?php if ($pt == 'apartment'): ?>
                                            <div class="form-body col-xs-6">
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">مساحت</label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="area" name="area"
                                                               class="form-control input-sm"
                                                               placeholder="مساحت"
                                                               value="<?php echo $area ?? set_value('area'); ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endif; ?>

                                        <?php if ($pt == 'apartment'): ?>
                                            <div class="form-body col-xs-6">
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">تعداد اتاق</label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="room_count" name="room_count"
                                                               class="form-control input-sm" placeholder="تعداد اتاق"
                                                               value="<?php echo $room_count ?? set_value('room_count'); ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endif; ?>

                                        <?php if ($pt == 'apartment' || $pt == 'land'): ?>
                                            <div class="form-body col-xs-6">
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">سن ساختمان</label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="age" name="age"
                                                               class="form-control input-sm"
                                                               placeholder="سن ساختمان"
                                                               value="<?php echo $age ?? set_value('age'); ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endif; ?>

                                        <?php if ($pt == 'land'): ?>
                                            <div class="form-body col-xs-6">
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">سن بازسازی</label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="renovation_age" name="renovation_age"
                                                               class="form-control input-sm" placeholder="سن بازسازی"
                                                               value="<?php echo $renovation_age ?? set_value('renovation_age'); ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endif; ?>

                                        <?php if ($pt == 'apartment'): ?>
                                            <div class="form-body col-xs-6">
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">تعداد طبقات</label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="num_stories" name="num_stories"
                                                               class="form-control input-sm" placeholder="تعداد طبقات"
                                                               value="<?php echo $num_stories ?? set_value('num_stories'); ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endif; ?>

                                        <?php if ($pt == 'apartment'): ?>
                                            <div class="form-body col-xs-6">
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">تعداد واحد در طبقه</label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="unit_per_story" name="unit_per_story"
                                                               class="form-control input-sm"
                                                               placeholder="تعداد واحد در طبقه"
                                                               value="<?php echo $unit_per_story ?? set_value('unit_per_story'); ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endif; ?>

                                        <?php if ($pt == 'land'): ?>
                                            <div class="form-body col-xs-6">
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">بازسازی شده</label>
                                                    <div class="col-md-9">
                                                        <input type="checkbox" id="renovated" name="renovated"
                                                               class="form-control input-sm"
                                                               value="yes" <?php if (isset($renovated) && $renovated == 'yes') echo 'checked="checked"'; else echo set_checkbox('renovated'); ?>>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endif; ?>

                                        <?php if ($pt == 'store'): ?>
                                            <div class="form-body col-xs-6">
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">پروانه</label>
                                                    <div class="col-md-9">
                                                        <input type="checkbox" id="parvane" name="parvane"
                                                               class="form-control input-sm"
                                                               value="yes"
                                                               value="<?php if (isset($parvane) && $parvane == 'yes') echo 'checked="checked"'; else echo set_checkbox('parvane'); ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endif; ?>

                                        <?php if ($pt == 'store'): ?>
                                            <div class="form-body col-xs-6">
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">توضیحات پروانه</label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="parvane_description"
                                                               name="parvane_description"
                                                               class="form-control input-sm"
                                                               placeholder="توضیحات پروانه"
                                                               value="<?php echo $parvane_description ?? set_value('parvane_description'); ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endif; ?>

                                        <?php if ($pt == 'land'): ?>
                                            <div class="form-body col-xs-6">
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">ظابطه</label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="zabete" name="zabete"
                                                               class="form-control input-sm"
                                                               placeholder="ظابطه"
                                                               value="<?php echo $zabete ?? set_value('zabete'); ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endif; ?>

                                        <?php if ($pt == 'land'): ?>
                                            <div class="form-body col-xs-6">
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">کاربری</label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="karbari" name="karbari"
                                                               class="form-control input-sm"
                                                               placeholder="کاربری"
                                                               value="<?php echo $karbari ?? set_value('karbari'); ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endif; ?>

                                        <?php if ($pt == 'land'): ?>
                                            <div class="form-body col-xs-6">
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">عقب نشینی</label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="aghab_neshini" name="aghab_neshini"
                                                               class="form-control input-sm"
                                                               placeholder="عقب نشینی"
                                                               value="<?php echo $aghab_neshini ?? set_value('aghab_neshini'); ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endif; ?>

                                        <?php if ($pt == 'apartment'): ?>
                                            <div class="form-body col-xs-6">
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">نوع سند</label>
                                                    <div class="col-md-9">
                                                        <select name="sanad_type" id="sanad_type"
                                                                class="form-control input-sm">
                                                            <option value="melki"
                                                                <?php if (isset($sanad_type) && $sanad_type == 'melki') echo "selected='selected'";
                                                                else set_select('sanad_type', 'melki');
                                                                ?> >ملکی
                                                            </option>
                                                            <option value="oghaf"
                                                                <?php if (isset($sanad_type) && $sanad_type == 'oghaf') echo "selected='selected'";
                                                                else set_select('sanad_type', 'oghaf');
                                                                ?> >اوقاف
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endif; ?>

                                        <?php if ($pt == "apartment"): ?>
                                            <div class="form-body col-xs-6">
                                                <div class="form-group">
                                                    <!--                                                    <label class="col-md-3 control-label">بازسازی شده</label>-->
                                                    <!--                                                    <div class="col-md-9">-->
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" id="elevator" name="elevator"
                                                               class="custom-control-input"
                                                                <?php if (isset($elevator) && $elevator==1) echo 'checked="checked"'; ?>
                                                               value="<?php echo set_checkbox('elevator'); ?>">
                                                        <label class="custom-control-label"
                                                               for="elevator">آسانسور</label>
                                                    </div>

                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" name="package" id="package"
                                                            <?php if (isset($package) && $package==1) echo 'checked="checked"'; ?>
                                                               value="<?php echo set_checkbox('elevator'); ?>"
                                                               class="custom-control-input">
                                                        <label class="custom-control-label" for="package">پکیج</label>
                                                    </div>

                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" name="iphone" id="iphone"
                                                               class="custom-control-input">
                                                        <label class="custom-control-label" for="iphone">آیفون</label>
                                                    </div>


                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" name="shomine" id="shomine"
                                                               class="custom-control-input">
                                                        <label class="custom-control-label" for="shomine">شومینه</label>
                                                    </div>

                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" name="checkbox" id="parde"
                                                               class="custom-control-input">
                                                        <label class="custom-control-label" for="parde">پرده</label>
                                                    </div>

                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" name="noorpardazi" id="noorpardazi"
                                                               class="custom-control-input">
                                                        <label class="custom-control-label" for="noorpardazi">نور
                                                            پردازی</label>
                                                    </div>

                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" name="komod_divari" id="komod_divari"
                                                               class="custom-control-input">
                                                        <label class="custom-control-label" for="komod_divari">کمد
                                                            دیواری</label>
                                                    </div>

                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" name="sona" id="sona"
                                                               class="custom-control-input">
                                                        <label class="custom-control-label" for="sona">سونا</label>
                                                    </div>

                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" name="jakozi" id="jakozi"
                                                               class="custom-control-input">
                                                        <label class="custom-control-label" for="jakozi">جکوزی</label>
                                                    </div>

                                                    <!--                                                    </div>-->
                                                </div>
                                            </div>
                                        <?php endif; ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- rent -->
                <?php if ($pt == 'apartment' || $pt == 'store'): ?>
                    <div class="col-xs-6">
                        <div class="panel panel-primary cpanel">
                            <div class="panel-heading">اجاره</div>
                            <div class="panel-body">
                                <div class="row">

                                    <?php if (($pt == 'apartment' || $pt == 'store') && $dt != 'sale'): ?>
                                        <div class="form-body col-xs-6">
                                            <div class="form-group">
                                                <label class="col-md-3 control-label"> اجاره</label>
                                                <div class="col-md-9">
                                                    <input type="checkbox" id="for_rent" name="for_rent"
                                                           class="form-control input-sm"
                                                           value="yes"
                                                           value="<?php if (isset($for_rent) && $for_rent == 'yes') echo 'checked="checked"'; else echo set_checkbox('for_rent'); ?>">
                                                </div>
                                            </div>
                                        </div>
                                    <?php endif; ?>

                                    <?php if (($pt == 'apartment' || $pt == 'store') && $dt != 'sale'): ?>
                                        <div class="form-body col-xs-6">
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">مبلغ اجاره</label>
                                                <div class="col-md-9">
                                                    <input type="text" id="rent_amount" name="rent_amount"
                                                           class="form-control input-sm" placeholder="مبلغ اجاره"
                                                           value="<?php echo $rent_amount ?? set_value('rent_amount'); ?>">
                                                </div>
                                            </div>
                                        </div>
                                    <?php endif; ?>

                                    <?php if (($pt == 'apartment' || $pt == 'store') && $dt != 'sale'): ?>
                                        <div class="form-body col-xs-6">
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">شرایط اجاره</label>
                                                <div class="col-md-9">
                                                    <input type="text" id="rent_preconditions" name="rent_preconditions"
                                                           class="form-control input-sm" placeholder="شرایط اجاره"
                                                           value="<?php echo $rent_preconditions ?? set_value('rent_preconditions'); ?>">
                                                </div>
                                            </div>
                                        </div>
                                    <?php endif; ?>

                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>

                <!--                rahn-->
                <?php if ($pt == 'apartment' || $pt == 'store'): ?>
                    <div class="col-xs-6">
                        <div class="panel panel-primary cpanel">
                            <div class="panel-heading">رهن</div>
                            <div class="panel-body">
                                <div class="row">
                                    <?php if (($pt == 'apartment' || $pt == 'store') && $dt != 'sale'): ?>
                                        <div class="form-body col-xs-6">
                                            <div class="form-group">
                                                <label class="col-md-3 control-label"> رهن</label>
                                                <div class="col-md-9">
                                                    <input type="checkbox" id="for_rahn" name="for_rahn"
                                                           class="form-control input-sm"
                                                           value="yes"
                                                           value="<?php if (isset($for_rahn) && $for_rahn == 'yes') echo 'checked="checked"'; else echo set_checkbox('for_rahn'); ?>">
                                                </div>
                                            </div>
                                        </div>
                                    <?php endif; ?>

                                    <?php if (($pt == 'apartment' || $pt == 'store') && $dt != 'sale'): ?>
                                        <div class="form-body col-xs-6">
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">مبلغ رهن</label>
                                                <div class="col-md-9">
                                                    <input type="text" id="rahn_amount" name="rahn_amount"
                                                           class="form-control input-sm"
                                                           placeholder="مبلغ رهن"
                                                           value="<?php echo $rahn_amount ?? set_value('rahn_amount'); ?>">
                                                </div>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                    <?php if (($pt == 'apartment' || $pt == 'store') && $dt != 'sale'): ?>
                                        <div class="form-body col-xs-6">
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">شرایط رهن</label>
                                                <div class="col-md-9">
                                                    <input type="text" id="rahn_preconditions" name="rahn_preconditions"
                                                           class="form-control input-sm" placeholder="شرایط رهن"
                                                           value="<?php echo $rahn_preconditions ?? set_value('rahn_preconditions'); ?>">
                                                </div>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>

                <!-- sale -->
                <div class="col-xs-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">فروش</div>
                        <div class="panel-body">
                            <div class="row">
                                <?php if (($pt == 'apartment' && $dt != 'none')): ?>
                                    <div class="form-body col-xs-6">
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">روش پرداخت</label>
                                            <div class="col-md-9">
                                                <input type="text" id="pardakht_method" name="pardakht_method"
                                                       class="form-control input-sm" placeholder="روش پرداخت"
                                                       value="<?php echo $pardakht_method ?? set_value('pardakht_method'); ?>">
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>

                                <?php if ($pt == 'apartment' || $pt == 'land' && $dt != 'none'): ?>
                                    <div class="form-body col-xs-6">
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">قیمت متر مربع</label>
                                            <div class="col-md-9">
                                                <input type="text" id="price_per_square_meter"
                                                       name="price_per_square_meter"
                                                       class="form-control input-sm" placeholder="قیمت متر مربع"
                                                       value="<?php echo $price_per_square_meter ?? set_value('price_per_square_meter'); ?>">
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>

                                <?php if ($pt == 'apartment'): ?>
                                    <div class="form-body col-xs-6">
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">قیمت کل</label>
                                            <div class="col-md-9">
                                                <input type="text" id="price_total" name="price_total"
                                                       class="form-control input-sm"
                                                       placeholder="قیمت کل"
                                                       value="<?php echo $price_total ?? set_value('price_total'); ?>">
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>

                                <?php if ($pt == 'land'): ?>
                                    <div class="form-body col-xs-6">
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">شرایط فروش</label>
                                            <div class="col-md-9">
                                                <input type="text" id="sell_conditions" name="sell_conditions"
                                                       class="form-control input-sm" placeholder="شرایط فروش"
                                                       value="<?php echo $sell_conditions ?? set_value('sell_conditions'); ?>">
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>

                <input type="hidden" name="property_type" value="<?php echo $pt; ?>"/>
                <input type="hidden" name="deal_type" value="<?php echo $dt; ?>"/>
            </div>

            <div class="form-actions">
                <?php if (isset($id) || isset($_POST["id"])): ?>
                    <input type="hidden" name="id" value="<?php echo $id ?? set_value("id"); ?>"/>
                <?php endif; ?>

                <?php if (isset($deal_type)): ?>
                    <input type="hidden" name="deal_type" value="<?php echo $deal_type; ?>"/>
                <?php endif; ?>

                <?php if (isset($property_type)): ?>
                    <input type="hidden" name="property_type" value="<?php echo $property_type; ?>"/>
                <?php endif; ?>

                <button type="submit" class="btn blue btn-circle">ثبت</button>
                <!-- <button type="button" class="btn default">لغو</button> -->
            </div>
        </form>
    </div>
</div>

<div class="modal fade" id="bootstrap-modal" role="dialog">

    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h4 class="modal-title persian-font">جستجوی مشتری</h4>
            </div>
            <div class="modal-body">
                <div id="demo-modal">

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default"
                        data-dismiss="modal">بستن
                </button>
            </div>
        </div>
    </div>
</div>


<script>
    function loadModal(modal) {
        $('#demo-modal').load('<?php echo base_url("admin/find_client_modal"); ?>', function () {
            $('#bootstrap-modal').modal({show: true});
        });
    }

    $(document).ready(function () {

        $("#rent_amount").inputmask({alias: 'numeric', groupSeparator: ',', autoGroup: true});
        $("#rahn_amount").inputmask({alias: 'numeric', groupSeparator: ",", autoGroup: true});
        $("#price_per_square_meter").inputmask({alias: 'numeric', groupSeparator: ",", autoGroup: true});
        $("#price_total").inputmask({alias: 'numeric', groupSeparator: ",", autoGroup: true});

        $("#date_submit").datepicker(
            {
                isRTL: true,
                changeMonth: true,
                changeYear: true,
                dateFormat: "yy/mm/dd"
            });
        $("#time_submit").timepicker({});

        var test_mode = true;
        if (test_mode) {
            $("#first_name").val(random_name());
            $("#last_name").val(random_family());
            $("#tel").val(random_tel());
            $("#mobile").val(random_mobile());
        }
    });
</script>

<script>
    function set_test_values() {
        $("#owner_name").val(random_name());
        $("#owner_family").val(random_family());
        $("#owner_tel").val(random_tel());
        $("#owner_mobile").val(random_mobile());
        $("#zone").val(random_city_zone());
        $("#street").val(random_street());
        $("#alley").val(random_alley());
        $("#parking_count").val(rand(1, 6));
        $("#anbari_count").val(rand(1, 6));
        $("#room_count").val(rand(1, 6));
        $("#age").val(rand(1, 10));
        $("#rent_preconditions").val('شرایط اجاره');
        $("#rahn_preconditions").val("شرایط رهن");
        $("#rahn_amount").val(rand(100000000, 500000000));
        $("#rent_amount").val(rand(500000, 900000));
        $("#price_total").val(rand(100000000, 500000000));
        $("#unit_per_story").val(rand(1, 6));
        $("#price_per_square_meter").val(rand(100000, 200000));
        $("#parking_area").val(rand(50, 60));
        $("#num_stories").val(rand(1, 10));
        $("#area").val(rand(100, 250));
        $("#anbari_count").val(rand(1, 2));
        $("#anbari_area").val(50, 100);
        $("#anbari_area").val(50, 100);
        $("#parvane_description").val("توضیحات پروانه");
        $("#renovation_age").val(rand(1, 10));
        $("#zabete").val("m5");
    }

    $(document).ready(function () {
        $("#date_submit").datepicker(
            {
                isRTL: true,
                changeMonth: true,
                changeYear: true,
                dateFormat: "yy/mm/dd"
            });
        $("#time_submit").timepicker({});

        var test_mode = true;
        if (test_mode) {
            set_test_values();
        }
    });
</script>
