<?php
// pre($app_settings);
function form_group($lbl, $txt)
{
    $lbl_text = $lbl["text"];
    $lbl_for = $lbl["for"];
    unset($lbl["for"]);
    unset($lbl["text"]);
    echo "<div class='col-xs-6'>";
    echo "<div clsss='form-group'>";
    echo form_label($lbl_text, $lbl_for, $lbl);
    echo form_input($txt);
    echo "</div>";
    echo "</div>";
}

?>
<!-- general settings -->
<div class="portlet box blue-hoki">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-plus"></i>
            <span class="caption-subject bold uppercase">
							تنظیمات عمومی
            </span>
        </div>
        <div class="actions">
        </div>
    </div>
    <div class="portlet-body">
        <div class="form-body">
            <div class="row">
                <form method="POST" action="<?php echo base_url('admin/update_settings'); ?>">
                    <?php
                    $lbl = array("class" => 'col-form-label', "for" => "");
                    $txt = array("class" => 'form-control', "id" => "", "name" => "");

                    $lbl["for"] = $txt["id"] = $txt["name"] = "mobile";
                    $lbl["text"] = "موبایل";
                    $txt["value"] = "mobile";
                    form_group($lbl, $txt);

                    $lbl["for"] = $txt["id"] = $txt["name"] = "phone";
                    $lbl["text"] = "تلفن";
                    $txt["phone"] = "phone";
                    form_group($lbl, $txt);

                    $lbl["for"] = $txt["id"] = $txt["name"] = "fax";
                    $lbl["text"] = "فاکس";
                    $txt["value"] = $fax;
                    form_group($lbl, $txt);

                    $lbl["for"] = $txt["id"] = $txt["name"] = "address";
                    $lbl["text"] = "آدرس";
                    $txt["value"] = $address;
                    form_group($lbl, $txt);

                    $lbl["for"] = $txt["id"] = $txt["name"] = "copyright";
                    $lbl["text"] = "copyright";
                    $txt["value"] = $copyright;
                    form_group($lbl, $txt);

                    $lbl["for"] = $txt["id"] = $txt["name"] = "about_us";
                    $lbl["text"] = "درباره ما";
                    $txt["value"] = $about_us;
                    form_group($lbl, $txt);

                    $lbl["for"] = $txt["id"] = $txt["name"] = "enemad_url";
                    $lbl["text"] = "آدرس اینماد";
                    $txt["value"] = $enemad_url;
                    form_group($lbl, $txt);

                    $lbl["for"] = $txt["id"] = $txt["name"] = "samandehi_url";
                    $lbl["text"] = "آدرس ساماندهی";
                    $txt["value"] = $samandehi_url;
                    form_group($lbl, $txt);

                    $lbl["for"] = $txt["id"] = $txt["name"] = "facebook_url";
                    $lbl["text"] = "آدرس فیس بوک";
                    $txt["value"] = $facebook_url;
                    form_group($lbl, $txt);

                    $lbl["for"] = $txt["id"] = $txt["name"] = "instagram_url";
                    $lbl["text"] = "آدرس اینستا";
                    $txt["value"] = $instagram_url;
                    form_group($lbl, $txt);

                    $lbl["for"] = $txt["id"] = $txt["name"] = "telegram_url";
                    $lbl["text"] = "آدرس تلگرام";
                    $txt["telegram_url"] = $telegram_url;
                    form_group($lbl, $txt);

                    $lbl["for"] = $txt["id"] = $txt["name"] = "meta_description";
                    $lbl["text"] = "meta_description";
                    $txt["value"] = $meta_description;
                    form_group($lbl, $txt);

                    $lbl["for"] = $txt["id"] = $txt["name"] = "keywords";
                    $lbl["text"] = "keywords";
                    $txt["value"] = $keywords;
                    form_group($lbl, $txt);

                    $lbl["for"] = $txt["id"] = $txt["name"] = "business_moto";
                    $lbl["text"] = "شعار تبلیغاتی";
                    $txt["value"] = $business_moto;
                    form_group($lbl, $txt);

                    ?>
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="vorodi-description" class="col-form-label">توضیحات</label>
                            <input type="text" class="form-control" id="vorodi-description" name="vorodi-description">
                            <span id="vorodi-description-error" class="text-danger"></span>
                        </div>
                    </div>
            </div>
            <div class="form-actions">
                <button type="submit" class="btn btn-primary" id="add-new-duration">ثبت</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- prices -->
<div class="portlet box blue-hoki">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-plus"></i>
            <span class="caption-subject bold uppercase">
							تنظیمات مبالغ
            </span>
        </div>
        <div class="actions">
        </div>
    </div>

    <div class="portlet-body">
        <div class="row">
            <form method="POST" action="<?php echo base_url('admin/update_extra_price'); ?>">
                <div class="col-xs-6">
                    <div class="form-group">
                        <label for="extra_price_type" class="col-form-label">افزایش مبلغ بلیط</label>
                        <select name="extra_price_type" class="form-control">
                            <option value="percent"  <?php echo $extra_price_type=="percent" ? "selected":""; ?> >بر حسب درصد</option>
                            <option value="value" <?php echo $extra_price_type=="value" ? "selected":""; ?> > بر حسب مبلغ</option>
                        </select>
                    </div>
                </div>
                <div class="col-xs-6">
                    <div class="form-group">
                        <label for="extra_price_value">مقدار</label>
                        <input type="number"
                               class="form-control"
                               name="extra_price_value"
                               id="extra_price_value"
                                value="<?php echo $extra_price_value; ?>">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary" id="add-new-duration">ثبت</button>
            </form>
        </div>
    </div>

</div>
