  
						
</section>
<script> 
	
		$('#adult_m').click(function(){
	
		$('#adult').val($('#adult2').val()-'1');
		var x = parseInt($('#adult').val());
		var y = parseInt($('#child').val());
		var z = parseInt($('#baby').val());
		var total = (x+y+z);
		$('#total_num').text(total);
		var ttx = "";
		for(i=1; i<=total; i++){if(i<=4){
		ttx +='<i class=" fa fa-user font30 txt_black_bor"></i>';
		}
		}
		$('#user_icon').html(ttx);
		
	});
	$('#adult_a').click(function(){

	var a = $('#adult2').val();
	a++;
		$('#adult').val(a);
		var x = parseInt($('#adult').val());
		var y = parseInt($('#child').val());
		var z = parseInt($('#baby').val());
		var total = (x+y+z);
		$('#total_num').text(total);
			var ttx = "";
		for(i=1; i<=total; i++){if(i<=4){
		ttx +='<i class=" fa fa-user font30 txt_black_bor"></i>';
		}
		}
		$('#user_icon').html(ttx);
	});
	$('#child_m').click(function(){
		
		$('#child').val($('#child2').val()-'1');
			var x = parseInt($('#adult').val());
		var y = parseInt($('#child').val());
		var z = parseInt($('#baby').val());
		var total = (x+y+z);
		$('#total_num').text(total);
			var ttx = "";
		for(i=1; i<=total; i++){if(i<=4){
		ttx +='<i class=" fa fa-user font30 txt_black_bor"></i>';
		}
		}
		$('#user_icon').html(ttx);
	});
	$('#child_a').click(function(){

	var a = $('#child2').val();
	a++;
		$('#child').val(a);
		var x = parseInt($('#adult').val());
		var y = parseInt($('#child').val());
		var z = parseInt($('#baby').val());
		var total = (x+y+z);
		$('#total_num').text(total);
			var ttx = "";
		for(i=1; i<=total; i++){if(i<=4){
		ttx +='<i class=" fa fa-user font30 txt_black_bor"></i>';
		}
		}
		$('#user_icon').html(ttx);
	});
	$('#baby_m').click(function(){
		
		$('#baby').val($('#baby2').val()-'1');
			var x = parseInt($('#adult').val());
		var y = parseInt($('#child').val());
		var z = parseInt($('#baby').val());
		var total = (x+y+z);
		$('#total_num').text(total);
			var ttx = "";
		for(i=1; i<=total; i++){if(i<=4){
		ttx +='<i class=" fa fa-user font30 txt_black_bor"></i>';
		}
		}
		$('#user_icon').html(ttx);
	});
	$('#baby_a').click(function(){

	var a = $('#baby2').val();
	a++;
		$('#baby').val(a);
			var x = parseInt($('#adult').val());
		var y = parseInt($('#child').val());
		var z = parseInt($('#baby').val());
		var total = (x+y+z);
		$('#total_num').text(total);
			var ttx = "";
		for(i=1; i<=total; i++){if(i<=4){
		ttx +='<i class=" fa fa-user font30 txt_black_bor"></i>';
		}
		}
		$('#user_icon').html(ttx);
	
	});
	
	
	
	$('#deletecal').click(function(){
	$('*#date_hide').hide();
	$('*#date_hide2').show();
	$("#going_date").val('');
	$("#departure_date").val('');
	});
	$('#only_go').click(function(){
	if ( $(this).is(':checked') ) {
	$('*#date_hide2').show();
	$('*#date_hide').hide();
$("#departure_date").val('');
	}else{
	
	}
	});
	
	$('*#cit').click(function(){
	$('input#txtShow').val($(this).attr('code'));
		$('.close').click(); 
		
		});
	$('*#cit2').click(function(){
		$('input#txtShow2').val($(this).attr('code'));
		$('.close').click(); 
		});
	
	</script>
<script>

$(document).ready(function(){
	$('#change').click(function(){
	var input1 = $('input#txtShow').val();
	var input2 = $('input#txtShow2').val();
		$('input#txtShow').val(input2);
			$('input#txtShow2').val(input1);
	});
	ttx ='<i class=" fa fa-user font30 txt_black_bor"></i>';
		$('#user_icon').html(ttx);
		$('#total_num').text('1');
	$('*#country').click(function(){
		var country = $(this).text();
		$.post('http://samand.fanacmp.ir/ticket/get_airport',{'country':country},function(data){
		var	data2 = JSON.parse(data);
			
			$('#citys').html(data2);
		});
	});
		$('*#country2').click(function(){
		var country = $(this).text();
		$.post('http://samand.fanacmp.ir/ticket/get_airport2',{'country':country},function(data){
		var	data2 = JSON.parse(data);
			
			$('#citys2').html(data2);
		});
	});
	
	$('#txtShow').click(function(){
		$('#divBox').slideDown();
	})
	
	$(document).click(function(){
		$('#divBox').slideUp();
	})
})
$(document).ready(function(){
	$('#txtShow2').click(function(){
		$('#divBox2').slideDown();
	})
	
	$(document).click(function(){
		$('#divBox2').slideUp();
	})
	
		$('#ss').change(function(){
		var z=$(this).val();
		$('input#txtShow').val(z);
		$('#ss').fadeOut();
	});
	$('#ss2').change(function(){
		var z=$(this).val();
		$('input#txtShow2').val(z);
		$('#ss2').fadeOut();
	});
})

//--------------------------------------------------------------
	
	
		$("#dates_but").click(function(e){
		
			e.preventDefault();
			$("#dt_box").fadeIn(300,function(){$(this).focus();});
			$("#psn_box").fadeOut(300,function(){$(this).focus();});
		   });
	
	        $("#flightdtsm").click(function(e){
			e.preventDefault();
			$("#dt_box").fadeOut(300,function(){$(this).focus();});
		   });
		 
			$("#pass_num_box").click(function(e){
			e.preventDefault();
			$("#psn_box").fadeIn(300,function(){$(this).focus();});
			$("#dt_box").fadeOut(300,function(){$(this).focus();});
		   });
	
	        $("#pasnumsumb").click(function(e){
			e.preventDefault();
			$("#psn_box").fadeOut(300,function(){$(this).focus();});
		   });

	</script>
	<script src="http://samand.fanacmp.ir/assets/datepickar/bootstrap-datepicker.min.js"></script>
	    <script src="http://samand.fanacmp.ir/assets/datepickar/bootstrap-datepicker.fa.min.js"></script>
			<script>
	$(document).ready(function() {
	$("#date_hide").hide();
	   $("#datepicker5").click(function(){
	  $("#datepicker6").val('');
	 });
	  $("#datepicker5").datepicker({ 
	     numberOfMonths:2,
                                     showButtonPanel: true, 
                                     yearRange: "c-100:c+0",
                                     showOtherMonths: true,
                                     selectOtherMonths: true,
                                     dateFormat: 'yy/mm/dd',
									 minDate: 'd',
                                    
                                    
        defaultDate: new Date(),
        minDate: new Date(),
        onSelect: function(dateStr) 
        {         
        	if ($('#only_go').is(':checked')) {
		    $("#date_hide").hide();
			}else{
			$("#date_hide").show();
			$("#date_hide2").hide();
			}
            $("#going_date").val(dateStr),
            $("#datepicker6").datepicker('destroy'),
          
		

            $("#datepicker6").datepicker({ minDate: dateStr, numberOfMonths:2,
                                     showButtonPanel: true, 
                                     yearRange: "c-100:c+0",
                                     showOtherMonths: true,
                                     selectOtherMonths: true,
                                     dateFormat: 'yy/mm/dd',
									 onSelect: function(dateStr2) { $("#departure_date").val(dateStr2);},
									 });
        }
    });
	
    });
	 	$('input#txtShow').keyup(function() {
		var a= $('input#txtShow').val().length;
	if(a>=2){
	
	var text= $('input#txtShow').val();
			
	$.post('http://samand.fanacmp.ir/ticket/airport', {abc:text}, function(data){
		
	var b = JSON.parse(data);
	if(b.length>=1){
	var a="";
	for (i = 0; i < b.length; i++) { 
	a+='<option value="'+b[i]['fa_cityname']+' - '+b[i]['code']+'">'+b[i]['fa_cityname']+' - '+b[i]['code']+'</option>';
	}
	
		$('#ss').html(a);
		$('#ss').fadeIn();
		}else{
		$('#ss').fadeOut();
		}
	});
	
	}
	else{
	$('#ss').fadeOut();
	
	}
	});
	
	
	$('input#txtShow2').keyup(function() {
		var a= $('input#txtShow2').val().length;
	if(a>=2){
		
	var text= $('input#txtShow2').val();
			
	$.post('http://samand.fanacmp.ir/ticket/airport', {abc:text}, function(data){
		
	var b = JSON.parse(data);
	if(b.length>=1){
	var a="";
	for (i = 0; i < b.length; i++) { 
	a+='<option value="'+b[i]['fa_cityname']+' - '+b[i]['code']+'">'+b[i]['fa_cityname']+' - '+b[i]['code']+'</option>';
	}
	
		$('#ss2').html(a);
		$('#ss2').fadeIn();
		}else{
		$('#ss2').fadeOut();
		}
	});
	
	}else{
	$('#ss2').fadeOut();
	}
		
	});
	</script><footer>
	<div class="container-fluid footer_cont">
		<div class="row footer_row">
			<div class="col-xs-12 col-md-4 txt_white">
				<div class="txt_white col-xs-12">
					<h4 class="txt_white"> شرکت خدمات مسافرتی و گردشگری سمند</h4>
				</div>
				<div class="txt_white col-xs-12">
					<ul class="list-unstyled txt_white ul_pa">
						<li> <i class="fa fa-phone txt_white"></i> شماره تلفن : 07136275777</li>
						<li> <i class="fa fa-phone txt_white"></i> فکس : 07136285777</li>
						<li> <i class="fa fa-map txt_white"></i> <p style="text-align:right">شیراز- خیابان قصردشت-روبروی کوچه 78 - جنب اداره برق</p>

<p style="text-align:right">&nbsp;</p>
</li>
						<li></li>
					</ul>
				</div>
			</div>
			<div class="col-xs-12 col-md-4 social_col">
				<div class="col-xs-4  col-md-4 telgram_col">
					<a href="https://t.me/samandtravel"><img class="social_ico" src="http://samand.fanacmp.ir/assets/img/telegram.png"></a>
				</div>
				<div class="col-xs-4  col-md-4 instagram_col">
					<a href="https://www.instagram.com/samandtravel/"><img class="social_ico" src="http://samand.fanacmp.ir/assets/img/instagram.png"></a>
				</div>
				<div class="col-xs-4  col-md-4 facebook_col">
					<a href="www.facebook.com/samandtravel"><img class="social_ico" src="http://samand.fanacmp.ir/assets/img/facebook-logo-button.png"></a>
				</div>
			</div>
			<div class="col-xs-12 col-md-4  text-center namads_col">
						<div class="col-xs-6 airlin_col">
							<img src="http://samand.fanacmp.ir/assets/img/namad1.png">
						</div>
						<div class="col-xs-6 airlin_col">
							<img src="http://samand.fanacmp.ir/assets/img/samandehi.png">
						</div>
							
			 </div>
		</div>
		<div  class="row ">
       <div class="col-xs-12 text-center txt_white">
           کلیه ی حقوق این سایت برای شرکت خدمات مسافرتی سمند محفوظ می باشد   </div>
       <div class="col-xs-12 text-center txt_white">
        Powered by <a title="" class="txt_white" href="http://fanacmp.ir/">FANACMP</a></div>
     </div>
	</div>
</footer>
<div class="chat_but_box">
<div class="chat_but">
	<img class="chat_ico" src="http://samand.fanacmp.ir/assets/img/chat.png">   
</div>
</div>

<script src="http://samand.fanacmp.ir/assets/js/bootstrap.min.js"></script>
<script src="http://samand.fanacmp.ir/assets/js/material.min.js"></script>

<script src="http://samand.fanacmp.ir/assets/js/main_js.js"></script>
<script src="http://samand.fanacmp.ir/assets/js/owl.carousel.js"></script>
 <script src="http://samand.fanacmp.ir/assets/js/ekko-lightbox.js"></script>

		<script>
           $(document).on('click', '[data-toggle="lightbox"]', function(event) {
    event.preventDefault();
    $(this).ekkoLightbox();
}); 
          </script>
	<script>
 	   $(document).ready(function() {
              var owl = $('.owl-carousel');
              owl.owlCarousel({
				rtl:true,
                items:4,
                loop: true,
                margin: 15,
                autoplay:false,
                autoplayTimeout: 1000,
                autoplayHoverPause: true
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




