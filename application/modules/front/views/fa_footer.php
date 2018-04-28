<?php if($render_section_main): ?>
		</div>
	</div>
</section>
<?php endif; ?>

<?php $front_url = base_url('assets/front/'); ?>
				<footer>
								<div class="container-fluid footer_cont">
												<div class="row footer_row">
																<div class="col-12 col-md-4 txt_gray">
																				<div class="col-12 txt_gray col-md-12">
																								<h5 class="txt_gray"> رزرواسیون آنلاین بلیت </h5>
																				</div>
																				<div class="col-12 txt_gray col-md-12">
																								<ul class="list-unstyled txt_gray ul_pa">
																												<li><a href="#" class="txt_gray  "> <i class="fa fa-phone txt_purple_middle"></i> شماره تلفن : 0713627577</a></li>
																												<li><a href="#" class="txt_gray  "> <i class="fa fa-phone txt_purple_middle"></i> فکس : 071345678 </a></li>
																												<li><a href="#" class="txt_gray  "> <i class="fa fa-map txt_purple_middle"></i> آدرس : شیراز ، خیابان اردیبهشت شرقی، برج IT ، طبقه هفتم ، واحد 73</a></li>
																												<li></li>
																								</ul>
																				</div>
																				<div class="co-12 col-md-12 social_footer_col">
																								<div class="row social_footer_row">
																												<div class="col-1 col-md-1 tell_col">
																																<a class=" txt_white" href="#"><img class="si_ico_menu" src="<?php echo $front_url; ?>img/instagram_w.png"></a>
																												</div>
																												<div class="col-1 col-md-1 tell_col">
																																<a class=" txt_white" 
																																		href="<?php echo $settings["telegram_url"]; ?>">
																																	<img class="si_ico_menu" 
																																				src="<?php echo $front_url; ?>img/telegramg.png"></a>
																												</div>
																												<div class="col-1 col-md-1 tell_col">
																																<a class=" txt_white" href="#">
																																		<img class="si_ico_menu" 
																																					src="<?php echo $front_url; ?>img/linkeding.png"></a>
																												</div>
																												<div class="col-1 col-md-1 tell_col">
																																<a class=" txt_white" 
																																	 href="<?php echo $settings["facebook_url"]; ?>">
																																	<img class="si_ico_menu" 
																																			 src="<?php echo $front_url; ?>img/facebookg-org.png">
																																</a>
																												</div>
																								</div>
																				</div>
																</div>
																<div class="col-12 col-md-4 txt_gray">
																				<div class="col-12 txt_gray col-md-12">
																								<h4 class="txt_gray">پربازدیدترین مقاصد</h4>
																				</div>
																				<div class="col-12 txt_gray col-md-12">
																								<ul class="list-unstyled txt_gray ul_pa">
																												<li><a href="#" class="txt_gray  "><i class="fa fa-map-marker txt_purple_middle"></i> دبی</a></li>
																												<li><a href="#" class="txt_gray  "><i class="fa fa-map-marker txt_purple_middle"></i> کیش</a></li>
																												<li><a href="#" class="txt_gray  "><i class="fa fa-map-marker txt_purple_middle"></i> شیراز</a></li>
																												<li><a href="#" class="txt_gray  "><i class="fa fa-map-marker txt_purple_middle"></i> یزد</a></li>
																												<li><a href="#" class="txt_gray  "><i class="fa fa-map-marker txt_purple_middle"></i> کرمان</a></li>
																												<li><a href="#" class="txt_gray  "><i class="fa fa-map-marker txt_purple_middle "></i> شمال</a></li>
																								</ul>
																				</div>
																</div>
																<div class="col-12 col-md-4  text-center namads_col">
																				<div class="row">
																								<div class="col-6 col-md-6 enamad_col">
																												<img src="<?php echo $front_url; ?>img/namad1.png" class="namad_img">
																								</div>
																								<div class="col-6 col-md-6  enamad_col">
																												<img src="<?php echo $front_url; ?>img/samandehi.png" class="namad_img">
																								</div>
																				</div>
																</div>
												</div>
												<div class="row back_blue">
																<div class="col-md-12 text-center txt_white">
																				کلیه ی حقوق این سایت برای مرکز رزرواسیون تفریحات بلیت محفوظ می باشد </div>
																<div class="col-md-12 text-center txt_white">
																				Powered by <a title="" class="txt_white" href="http://fanacmp.ir/">FANA</a></div>
												</div>
								</div>
				</footer>
				
				<script src="<?php echo base_url('assets/front/js/popper.min.js'); ?>"></script>
				<script src="<?php echo base_url('assets/front/js/bootstrap.min.js'); ?>"></script>
				<script src="<?php echo base_url('assets/front/js/bootstrap-select.js'); ?>"></script>
				<script src="<?php echo base_url('assets/front/js/main_js.js'); ?>"></script>
				<script src="<?php echo base_url('assets/front/js/owl.carousel.js'); ?>"></script>
				
				<script>
				$(document).ready(function() {
								var owl = $('.owl-carousel');
								owl.owlCarousel({
												rtl: true,
												items: 3,
												nav: true,
												navText: ["<span class='fa fa-angle-right txt_gray font40'></span>", "<span class='fa fa-angle-left text txt_gray font40'></span>"],
												loop: true,
												margin: 15,
												autoplay: false,
												autoplayTimeout: 1000,
												autoplayHoverPause: true,

								});
								$('.play').on('click', function() {
												owl.trigger('play.owl.autoplay', [1000])
								})
								$('.stop').on('click', function() {
												owl.trigger('stop.owl.autoplay')
								})
				})
				</script>
</body>

</html>
