<section class="main">
		<div class="container register_cont">
				<div class="card register_card ">
						<div class="card-header  font20 ">عضویت در </div>
						<div class="card-body">
								<div class="row form_row">
										<div class="col-md-6 reg_form">
												<form id="register_form" action="<?php echo base_url('front/register_post') ?>" method="post" role="form" style="display: block;">
														<div class="form-group col-xs-12 col-md-12">
																<label for="email">ایمیل :</label>
																<div class="input-group input-group-sm">
																		<span class="input-group-addon span_cus" id="sizing-addon8">
														  <i class="fa fa-envelope"></i>
															  </span>
																		<input id="email" type="email" name="email" class="form-control input_cus" aria-describedby="sizing-addon8">
																</div>
														</div>
														<div class="form-group col-xs-12 col-md-12">
																<label for="password">کلمه عبور :</label>
																<div class="input-group input-group-sm">
																		<span class="input-group-addon span_cus" id="sizing-addon8">
														  <i class="fa fa-lock"></i>
															  </span>
																		<input id="password" name="password" type="password" class="form-control input_cus" aria-describedby="sizing-addon8">
																</div>
														</div>


														<div class="checkbox-inline col-xs-12 col-md-12 ">
																<label class="checkbox-inline txt_smoke log_check">
																		<input type="checkbox" value="">
																		<a href="#" class="txt_purple_middle">حریم خصوصی </a> و <a href="#" class="txt_purple_middle"> شرایط و قوانین </a> استفاده از سرویس های سایت را مطالعه نموده و با کلیه موارد آن موافقم.</label>
																</label>
														</div>
														<div class="col-md-6 mg pad_butreg_top">
																<div>
																		<button type="sumbit"  class="btn btn-raised btn_cuscyan btn-sm btn_full"> عضویت</a>
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
</section>
