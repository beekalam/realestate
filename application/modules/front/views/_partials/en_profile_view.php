<div class="tab-pane active container" id="user_info">
    <div class="col-12 col-md-12  table-responsive">
        <table class="table tabe_usepro_table ">
            <tbody>
            <tr>
                <td colspan="8" class="info_title_u_p txt_black_bor bold font16">USER INFO</td>
            </tr>
            <tr>
                <td>
                    <div class="user_pic_col ">
                        <img src="<?php echo base_url('assets/front/img/if_user_male_172625.png'); ?>" class="user_pic">
                    </div>
                </td>
            </tr>
            <tr>
                <td class="txt_purple_light bold">FIRST NAME: :
                    <span class="name_fa  txt_black_bor">
                        <?php echo $first_name; ?>
                    </span>
                </td>
                <td class="txt_purple_light bold ">LAST NAME :
                    <span class="name_fa  txt_black_bor">
                        <?php echo $last_name; ?>
                    </span>
                </td>
                <td class="txt_purple_light bold ">BIRTHDAY :
                    <span class="brithdate rtl txt_black_bor">
                        <?php echo $birthdate; ?>
                    </span>
                </td>
                <td class="txt_purple_light bold ">GENDER :
                    <span class="gener_us txt_black_bor">
                        <?php echo $gender == "male" ? "Male" : "Female"; ?>
                    </span>
                </td>
            </tr>
            <tr>
                <td class="txt_purple_light bold ">PASSPORT-NUM :
                    <span class="brithdate  rtl txt_black_bor">
																	228765437654 </span>
                </td>
                <td class="txt_purple_light bold ">TELPHONE :
                    <span class="name_fa  txt_black_bor">   <?php echo $phone; ?></span>
                </td>

                <td class="txt_purple_light bold ">MOBILE :
                    <span class="name_fa  txt_black_bor"> <?php echo $mobile; ?> </span>
                </td>

                <td class="txt_purple_light bold ">EMAIL :
                    <span class="email_us  txt_black_bor">
					  <?php echo $email; ?>
                    </span>
                </td>
            </tr>
            <tr>
                <td class="txt_purple_light bold ">CREDIT CART-NUM:
                    <span class="cart_cd txt_black_bor">
																	22876543765564 </span>
                </td>
                <td class="txt_purple_light bold ">NATIONALITY :
                    <span class="province txt_black_bor">
																	PERSIAN </span>
                </td>
                <td class="txt_purple_light bold ">COUNTRY :
                    <span class="city  txt_black_bor">
																	IRAN
                    </span>
                </td>
                <td class="txt_purple_light bold ">CITY :
                    <span class="livepl_add  txt_black_bor">SHIRAZ</span>
                </td>

            </tr>
            </tbody>
        </table>

    </div>
    <div class="row buyer_info_row ">
        <div class="col-12 col-md-6 button_col">
            <div class="row">
                <div class="col-12 col-md-6">
                    <a class="btn btn-info btn_cuscyan2" role="button">
                        <i class="fa fa-image"></i> UPLOAD IMAGE</a>
                </div>
                <div class="col-12 col-md-6">
                    <a class="btn btn-info btn_cuscyan2" role="button">
                        <i class="fa fa-globe"></i> UPLOAD PASSPORT</a>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 button_col">
            <div class="row">
                <div class="col-6 col-md-4 offset-md-2 col-md-offset-2">
                    <a class="btn btn-info btn_cuscyan2" role="button"
                        href="<?php echo base_url('front/edit_profile'); ?>">
                        <i class="fa fa-pencil "></i> EDIT </a>
                </div>
                <div class="col-6 col-md-6">
                    <a class="btn btn-info btn_cuscyan2" role="button">
                        <i class="fa fa-lock"></i> CHANGE PASSWORD </a>
                </div>
            </div>
        </div>
    </div>
</div>
