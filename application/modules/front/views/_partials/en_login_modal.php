<div id="reg_lg_modal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content" style="">
            <div class="modal-header md_lg_ti txt_white">
                <h4 class="modal-title  txt_white"> SIGN IN </h4>
                <button type="button" class="close txt_white " data-dismiss="modal">&times;</button>

            </div>
            <div class="modal-body">
                <div class=" card-login">
                    <div class="plogin-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <form id="login-form" action="<?php echo base_url("login/index"); ?>"
                                      method="post" role="form" style="display: block;">
                                    <div class="form-group col-12 col-md-12">
                                        <label for="email">EMAIL :</label>
                                        <div class="input-group input-group-sm">
														  <span class="input-group-addon span_cus" id="sizing-addon8">
														  <i class="fa fa-envelope"></i>
															  </span>
                                            <input id="username"
                                                   name="username"
                                                   type="email" class="form-control input_cus"
                                                   aria-describedby="sizing-addon8">
                                        </div>
                                    </div>
                                    <div class="form-group col-12 col-md-12">
                                        <label for="email">PASSWORD :</label>
                                        <div class="input-group input-group-sm">
														  <span class="input-group-addon span_cus" id="sizing-addon8">
														  <i class="fa fa-lock"></i>
															  </span>
                                            <input id="password" name="password"
                                                   type="password" class="form-control input_cus"  aria-describedby="sizing-addon8">
                                        </div>
                                    </div>
                                    <div class="checkbox-inline col-12 col-md-12 ">
                                        <label class="checkbox-inline txt_smoke log_check"><input type="checkbox" value="">REMEMBER ME</label>

                                    </div>
                                    <div class="col-12 col-md-12 mg">

                                        <a href="#" class="a_style3 forgot-password txt_purple_middle">FORGOT YOUR PASSWORD ?</a>

                                    </div>
                                    <div class="col-md-6 mg">
                                        <div >
                                            <button type="sumbit"
                                               href="user_profile.html"
                                               class="btn btn-raised btn_cuscyan btn-sm btn_full">SIGN IN</button>
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