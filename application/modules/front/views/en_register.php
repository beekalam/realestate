
    <div class="container register_cont">
        <div class="card register_card ">
            <div class="card-header  font20 ">REGISTER</div>
            <div class="card-body">
                <div class="row form_row">
                    <div class="col-md-6 reg_form">
                        <form id="register_form"  action="<?php echo base_url('front/register_post') ?>"
                              method="post" role="form" style="display: block;">
                            <div class="form-group col-xs-12 col-md-12">
                                <label for="email">EMAIL :</label>
                                <div class="input-group input-group-sm">
														  <span class="input-group-addon span_cus" id="sizing-addon8">
														  <i class="fa fa-envelope"></i>
															  </span>
                                    <input id="email" name="email" type="email" class="form-control input_cus"
                                           aria-describedby="sizing-addon8">
                                </div>
                            </div>
                            <div class="form-group col-xs-12 col-md-12">
                                <label for="email">PASSWORD :</label>
                                <div class="input-group input-group-sm">
														  <span class="input-group-addon span_cus" id="sizing-addon8">
														  <i class="fa fa-lock"></i>
															  </span>
                                    <input id="password" name="password" type="password" class="form-control input_cus"
                                           aria-describedby="sizing-addon8">
                                </div>
                            </div>
                            <div class="checkbox-inline col-xs-12 col-md-12 ">
                                <label class="checkbo "><input type="checkbox" value=""> I FULLY REVIEW THE
                                    <a href="#"> TERMS & CONDITIONS </a>
                                    OF THIS AGREEMENT AND AGREE TO ITS TERMS & CONDITIONS, WHICH IS CONFIRMED BY
                                    SELECTING THIS SECTION.
                                </label>
                                </label>

                            </div>
                            <div class="col-md-6 mg pad_butreg_top">
                                <div>
                                    <button type="sumbit"
                                            class="btn btn-raised btn_cuscyan btn-sm btn_full">REGISTER</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6 reg_pic_col reg_pic_box">
                        <img src="<?php echo base_url('assets/front/img/shadleen-logo-fa.png'); ?>"
                             class="reg_pic">
                    </div>
                </div>
            </div>
        </div>
    </div>

