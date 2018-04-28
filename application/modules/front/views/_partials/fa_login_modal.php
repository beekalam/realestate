<div id="reg_lg_modal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content" style="">
            <div class="modal-header md_lg_ti txt_white">
                <button type="button" class="close txt_white cls_but" data-dismiss="modal">&times;</button>
                <h4 class="modal-title  txt_white"> ورود به سایت </h4>
            </div>
            <div class="modal-body">
                <div class=" card-login">
                    <div class="plogin-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <form id="login-form" action="<?php echo base_url("login/index"); ?>"
                                      method="post" role="form" style="display: block;">
                                    <div class="form-group col-12 col-md-12">
                                        <label for="username">ایمیل :</label>
                                        <div class="input-group input-group-sm">
														  <span class="input-group-addon span_cus" id="sizing-addon8">
														  <i class="fa fa-envelope"></i>
															  </span>
                                            <input id="username" type="email"
                                                    name="username"
                                                   class="form-control input_cus"
                                                   aria-describedby="sizing-addon8">
                                        </div>
                                    </div>
                                    <div class="form-group col-12 col-md-12">
                                        <label for="email">کلمه عبور :</label>
                                        <div class="input-group input-group-sm">
														  <span class="input-group-addon span_cus" id="sizing-addon8">
														  <i class="fa fa-lock"></i>
															  </span>
                                            <input id="password"
                                                   type="password"
                                                   name="password" class="form-control input_cus"
                                                   aria-describedby="sizing-addon8">
                                        </div>
                                    </div>
                                    <div class="checkbox-inline col-12 col-md-12 ">
                                        <label class="checkbox-inline txt_smoke log_check"><input type="checkbox"
                                                                                                  value=""> مرا بخاطر
                                            بسپار </label>

                                    </div>
                                    <div class="col-12 col-md-12 mg">

                                        <a href="#" class="a_style3 forgot-password txt_purple_middle">رمز خود را فراموش
                                            کرده اید ؟</a>

                                    </div>
                                    <div class="col-md-6 mg">
                                        <div>
                                            <button type="sumbit"
                                               class="btn btn-raised btn_cuscyan btn-sm btn_full"> ورود</button>
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
