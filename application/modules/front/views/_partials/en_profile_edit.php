<?php if(true): ?>
    <div class="tab-pane active container" id="user_info">
        <div class="col-12 col-md-12  table-responsive">
            <!--     <table class="table tabe_usepro_table ">
            <tbody>
            <tr>
                <td colspan="8" class="info_title_u_p txt_black_bor bold font16">اطلاعات
                    کاربر
                </td>
            </tr>
            <tr>
                <td>
                    <div class="user_pic_col">
                        <img
                            src="<?php echo base_url('assets/front/img/if_user_male_172625.png'); ?>"
                            class="user_pic">
                    </div>
                </td>
                <td>
            </tr>
            <tr> -->
            <!-- <td class="txt_purple_light bold"> -->
            <form class="form">
                <div class="row">

                    <div class="form-group col-6">
                        <div class="row">
                            <label for="first_name" class="control-label col-sm-3">نام :</label>
                            <div class="col-sm-9">
                                <input type="text" id="first_name" name="first_name"
                                       class="form-control"
                                       value="<?php echo $first_name; ?>">
                            </div>
                        </div>
                    </div>

                    <div class="form-group col-6">
                        <div class="row">
                            <label for="last_name" class="control-label col-sm-3">نام خانوادگی:</label>
                            <div class="col-sm-9">
                                <input type="text" id="last_name" name="last_name"
                                       class="form-control"
                                       value="<?php echo $last_name; ?>">
                            </div>
                        </div>
                    </div>


                    <div class="form-group col-6">
                        <div class="row">
                            <label for="birth_date" class="control-label col-sm-3">تاریخ تولد:</label>
                            <div class="col-sm-9">
                                <input type="text" id="birth_date" name="birth_date"
                                       class="form-control"
                                       value="<?php echo $birth_date; ?>">
                            </div>
                        </div>
                    </div>


                    <div class="form-group col-6">
                        <div class="row">
                            <label for="national_code" class="control-label col-sm-3">کد ملی:</label>
                            <div class="col-sm-9">
                                <input type="text" id="national_code" name="national_code"
                                       class="form-control"
                                       value="<?php echo $national_code; ?>">
                            </div>
                        </div>
                    </div>

                    <div class="form-group col-6">
                        <div class="row">
                            <label for="phone" class="control-label col-sm-3">شماره تلفن:</label>
                            <div class="col-sm-9">
                                <input type="text" id="phone" name="phone"
                                       class="form-control"
                                       value="<?php echo $phone; ?>">
                            </div>
                        </div>
                    </div>

                    <div class="form-group col-6">
                        <div class="row">
                            <label for="mobile" class="control-label col-sm-3">موبایل:</label>
                            <div class="col-sm-9">
                                <input type="text" id="mobile" name="mobile"
                                       class="form-control"
                                       value="<?php echo $mobile; ?>">
                            </div>
                        </div>
                    </div>

                    <div class="form-group col-6">
                        <div class="row">
                            <label for="email" class="control-label col-sm-3">ایمیل:</label>
                            <div class="col-sm-9">
                                <input type="text" id="email" name="email"
                                       class="form-control"
                                       value="<?php echo $email; ?>">
                            </div>
                        </div>
                    </div>

                </div>

            </form>
            <!--   </td>
                <td class="txt_purple_light bold ">نام خانوادگی :
                    <span class="name_fa  txt_black_bor">
                                                    <?php echo $last_name; ?>
                                                </span>
                </td>
                <td class="txt_purple_light bold ">تاریخ تولد :
                    <span class="brithdate rtl txt_black_bor">
                                                    <?php echo $birth_date; ?>
                                                </span>
                </td>
                <td class="txt_purple_light bold ">جنسیت :
                    <span class="gener_us txt_black_bor">
                                                    <?php echo $gender == "male" ? "مرد" : "زن"; ?>
                                                </span>
                </td>
            </tr>
            <tr>
                <td class="txt_purple_light bold ">کد ملی :
                    <span class="brithdate  rtl txt_black_bor">
                                                    <?php echo $national_code; ?>
                                                </span>
                </td>
                <td class="txt_purple_light bold ">شماره تلفن :
                    <span class="name_fa  txt_black_bor">
                                                    <?php echo $phone; ?>
                                                </span>
                </td>

                <td class="txt_purple_light bold ">موبایل :
                    <span class="name_fa  txt_black_bor">
                                                    <?php echo $mobile; ?>
                                                </span>
                </td>

                <td class="txt_purple_light bold ">ایمیل :
                    <span class="email_us  txt_black_bor">
                                                    <?php echo $email; ?>
                                                </span>
                </td>
            </tr>
            <tr>
                <td class="txt_purple_light bold ">شماره کارت بانکی :
                    <span class="cart_cd txt_black_bor">
																	22876543765564 </span>
                </td>
                <td class="txt_purple_light bold ">استان محل سکونت :
                    <span class="province txt_black_bor">
                                                    <?php echo $province; ?>
                                                </span>
                </td>
                <td class="txt_purple_light bold ">شهر محل سکونت :
                    <span class="city  txt_black_bor">
                                                    <?php echo $city; ?>
                                                </span>
                </td>
                <td class="txt_purple_light bold ">محل سکونت :
                    <span class="livepl_add  txt_black_bor">
                                                    <?php echo $address; ?>
                                                </span>
                </td>

            </tr>
            </tbody>
        </table> -->

        </div>
        <div class="row buyer_info_row ">
            <div class="col-12 col-md-6 button_col">
                <div class="row">
                    <div class="col-12 col-md-4">
                        <a class="btn btn-info btn_cuscyan2" role="button">
                            <i class="fa fa-image"></i> آپلود عکس</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 button_col">
                <div class="row">
                    <div class="col-6 col-md-4 col-md-offset-2">
                        <a class="btn btn-info btn_cuscyan2" role="button"
                           href="<?php echo base_url('front/edit_profile'); ?>">
                            <i class="fa fa-pencil "></i> ویرایش </a>
                    </div>
                    <div class="col-6 col-md-6">
                        <a class="btn btn-info btn_cuscyan2" role="button">
                            <i class="fa fa-lock"></i> تغییر کلمه عبور </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>