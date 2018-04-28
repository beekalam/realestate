<?php 
$res = isset($res->AvailableFlights) ? o2a($res->AvailableFlights) : array();

// pre($res);
//calculate the cheapest for each airline
$airlines 					= array_unique(array_column($res, "AirLine"));
$airlines_sorted = array();
foreach($airlines as $a){
    foreach($res as $r){
        if($r["AirLine"] == $a){
            if(!isset($airlines_sorted[$a]))
                $airlines_sorted[$a] = $r["price"];
            else if($airlines_sorted[$a] > $r["price"])
                $airlines_sorted[$a] = $r["price"];
        }
    }
}

// cheapest flight
$cheapest_flight = null;
foreach($airlines_sorted as $k=>$v){

	if($cheapest_flight==null) $cheapest_flight = $v;

	if($cheapest_flight > $v)
		$cheapest_flight = $v;
}

// extract airline codes
$airline_codes = array_unique(array_column($res, "AirLine"));
$tmp = array();
foreach($airlines as $a){
    foreach($res as $r){
        if($r["AirLine"] == $a){
        		if(isset($r["CRCN"]["AirlineCode"]))
   									$tmp[$a] = $r["CRCN"]["AirlineCode"];
   							else
   									$tmp[$a] = $r["AirLineEnglish"];
   							break;
        }
    }
}
$airline_codes = $tmp;
?>

<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
<!-- isotope without filter fix -->
<script>



    function trim (s, c) {
      if (c === "]") c = "\\]";
      if (c === "\\") c = "\\\\";
      return s.replace(new RegExp(
        "^[" + c + "]+|[" + c + "]+$", "g"
      ), "");
    }

							Isotope.Item.prototype._create = function() {
							  // assign id, used for original-order sorting
							  this.id = this.layout.itemGUID++;
							  // transition objects
							  this._transn = {
							    ingProperties: {},
							    clean: {},
							    onEnd: {}
							  };
							  this.sortData = {};
							};

							Isotope.Item.prototype.layoutPosition = function() {
							  this.emitEvent( 'layout', [ this ] );
							};

							Isotope.prototype.arrange = function( opts ) {
							  // set any options pass
							  this.option( opts );
							  this._getIsInstant();
							  // just filter
							  this.filteredItems = this._filter( this.items );
							  // flag for initalized
							  this._isLayoutInited = true;
							};

							// layout mode that does not position items
							Isotope.LayoutMode.create('none');


	$(document).ready(function()
	{
				
							// --------------- //

							// init Isotope
							var $grid = $('.grid').isotope({
							  itemSelector: '.grid-item',
							  layoutMode: 'none'
							});
							// filter functions
							var filterFns = {
							  // show if number is greater than 50
							  numberGreaterThan50: function() {
							    var number = $(this).find('.number').text();
							    return parseInt( number, 10 ) > 50;
							  },
							  // show if name ends with -ium
							  ium: function() {
							    var name = $(this).find('.name').text();
							    return name.match( /ium$/ );
							  }
							};
							// bind filter button click
							// $('#filters').on( 'click', 'button', function() {
							//   var filterValue = $( this ).attr('data-filter');
							//   // use filterFn if matches value
							//   filterValue = filterFns[ filterValue ] || filterValue;
							//   $grid.isotope({ filter: filterValue });
							// });

							// $('.m-filters').on( 'click', 'radio', function() {
							// 	console.log('in m-filters');
							//   var filterValue = $( this ).attr('data-filter');
							//   // use filterFn if matches value
							//   filterValue = filterFns[ filterValue ] || filterValue;
							//   $grid.isotope({ filter: filterValue });
							// });

							$(".filter-input").click(function(e)
							{
								console.log(e.target.className);

								// console.log(e.target.type);
								// console.log(e.target.className);
									var filters = [];
									var filterValue = $( this ).attr('data-filter');

									// airline radio buttons									
									if(e.target.type=='checkbox'){
										//uncheck cheapest-flight check box if current checkbox is not the cheapest flight.
										 if(!$(this).hasClass('cheapest-flight')) $(".cheapest-flight").prop("checked",false);
										//uncheck other checkboxes if cheapest flight is selected.
											var cheapest_flight_selected = false;
										$(".airLineRadio:checked").each(function(i,j)
										{	
											  if($(j).hasClass('cheapest-flight')) cheapest_flight_selected = true;
										});

										if(cheapest_flight_selected){
												$(".airLineRadio:checked").each(function(i,j)
												{
													 $(j).prop('checked',false);
												});	
										}else{
													$(".airLineRadio:checked").each(function(i,j)
													{
														 filters.push($(j).attr("data-filter"));
													});
										}
												filterValue = trim(filters.join(","), ",");
									}


									//--------------------------------------------------
							  filterValue = filterFns[ filterValue ] || filterValue;
							  $grid.isotope({ filter: filterValue });
							});

							// // change is-checked class on buttons
							// $('.button-group').each( function( i, buttonGroup ) {
							//   var $buttonGroup = $( buttonGroup );
							//   $buttonGroup.on( 'click', 'button', function() {
							//     $buttonGroup.find('.is-checked').removeClass('is-checked');
							//     $( this ).addClass('is-checked');
							//   });
							// });
	});

</script>

<?php //pre($res); ?>
<?php $front_url = base_url('assets/front'); ?>
<style>
    .m-filters.domestic-flight {
        border: 0;
        border-radius: 0;
        min-height: 45px;
        background-color: transparent;
        overflow: visible;
        width: 260px !important;
    }

    .m-filters.domestic-flight .filter-section {
        position: relative;
        background-color: #FFF;
        border-radius: 6px;
        border: 1px solid #ededed;
        padding-bottom: 6px;
        margin-bottom: 10px;
        overflow: visible;
    }

    .m-filters.domestic-flight .filter-section h4 {
        margin: 0;
        padding: 16px 10px 10px 65px;
    }

    .m-filters.domestic-flight .filter-section hr {
        margin: 0 0 16px 0;
    }

    .m-filters.domestic-flight .filter-section label {
        margin-bottom: 14px !important;
        line-height: 26px;
    }

    .m-filters.domestic-flight input[type="radio"][name="ticket-type"] + label,
    .m-filters.domestic-flight input[type="radio"][name="return-ticket-type"] + label,
    .m-filters.domestic-flight input[type="radio"][name="time"] + label,
    .m-filters.domestic-flight input[type="radio"][name="flight-stops-filter"] + label,
    .m-filters.domestic-flight input[type="radio"][name="leaving-time"] + label,
    .m-filters.domestic-flight input[type="radio"][name="returning-time"] + label,
    .m-filters.domestic-flight input[type="radio"][name="ticket-flight-class"] + label {
        background-color: transparent;
        border: 0;
        line-height: 26px;
        color: #333;
        position: relative;
        cursor: pointer;
        height: auto;
        margin: 0;
        border-radius: 0;
        padding-right: 0px;
        margin-right: 10px;
    }

    .m-filters input[type="radio"][name="ticket-type"] + label:before,
    .m-filters input[type="radio"][name="return-ticket-type"] + label:before,
    .m-filters input[type="radio"][name="time"] + label:before,
    .m-filters input[type="radio"][name="flight-stops-filter"] + label:before,
    .m-filters input[type="radio"][name="leaving-time"] + label:before,
    .m-filters input[type="radio"][name="returning-time"] + label:before,
    .m-filters input[type="radio"][name="ticket-flight-class"] + label:before {
        content: '';
        display: block;
        width: 20px;
        height: 20px;
        float: right;
        border: solid 1px #dcdcdc;
        border-color: #aaaaaa;
        background-color: #FFF;
        border-radius: 3px;
        cursor: pointer;
        margin-left: 5px;
        margin-top: 3px;
    }

    
    .m-filters input[type="radio"][name="ticket-type"]:checked + label:before,
    .m-filters input[type="radio"][name="return-ticket-type"]:checked + label:before,
    .m-filters input[type="radio"][name="time"]:checked + label:before,
    .m-filters input[type="radio"][name="flight-stops-filter"]:checked + label:before,
    .m-filters input[type="radio"][name="leaving-time"]:checked + label:before,
    .m-filters input[type="radio"][name="returning-time"]:checked + label:before,
    .m-filters input[type="radio"][name="ticket-flight-class"]:checked + label:before {
        background-color: #FFF;
        border-color: #aaaaaa;
    }

    .m-filters input[type="radio"][name="airline"] + label:before,
    .airLineRadio + label:before,
    .showDuplicateTickets + label:before,
    .ticket-available + label:before {
        background-color: #FFF;
        border-color: #aaaaaa;
    }

    .m-filters input[type="radio"][name="airline"]:checked + label:before,
</style>
<div class="m-filters domestic-flight"
     style="position: relative; top: auto; bottom: auto; transform: translateY(0px);margin-left:24px;padding-top:10px !important">

    <!--  total flights -->
    <div class="filters-content-wrapper">
        <div class="filters-content">
            <div class="filter-section available-count">
                <h4 class="available-count-number">
                    <?php
                    echo "نمایش" .
                        sprintf('<span id="filtered-count">%s</span>', $flight_count) . "از" .
                        sprintf('<span class="extra-word">مجموع</span>') . ' از ' .
                        sprintf('<span id="all-count">%s</span>', $flight_count) . 'پرواز';
                    ?>
                </h4>
            </div>
        </div>
    </div>

    <style>
        .m-filters.domestic-flight input[type="radio"][name="time"] + label {
            /*width: 25%;
            float: right;
            clear: none;
            height: 60px;
            padding: 0;
            margin: 0;
            min-width: 0;
            text-align: center;
            color: #397ff6;*/
        }

        .day-long-range input[type="radio"] {
            /*display: none!important;*/
            /*position: absolute;*/
        }

        .day-long {
            /*padding-right: 29px;*/
            /*padding-left: 8px;*/
        }
	       .hour-select{
	       	float:right;
	       	padding-left: 20px;
	       }
        .hour-select input[type="radio"]{
        	display:none
        }
        .hour-select img{
        	  width:20px;
        	  cursor: pointer;
        }
        .hour-select div{
        	 margin-top:1px;
        }
        input[name="ticket-type"]{
        	 display:none;
        }
        input[name="ticket-type"]:checked + label::before {
							    content: '';
							    display: block;
							    width: 20px;
							    height: 20px;
							    float: right;
							    border: solid 1px #dcdcdc;
							        border-top-color: rgb(220, 220, 220);
							        border-right-color: rgb(220, 220, 220);
							        border-bottom-color: rgb(220, 220, 220);
							        border-left-color: rgb(220, 220, 220);
							    border-color: #aaaaaa;
							    background-color: #FFF;
							    border-radius: 3px;
							    cursor: pointer;
							    margin-left: 5px;
							    margin-top: 3px;
							    background-color: #e4f3fb;
							    background-image: url(/assets/front/img/sprite.png);
							    background-position: -119px -15px;
							    background-repeat: no-repeat;
							    position: relative;
							    right: auto;
							    top: auto;
							    padding: 0;
							    box-shadow: none;
								}
    </style>

    <!-- filter by time -->
    <div class="filter-section filter-section-toggle day-long-range">
        <h4>ساعت</h4>
        <hr>
        <div style="padding: 0 12px;height: 74px;">

         <label for="day-long" class="hour-select">
             <input type="radio" name="time"  id="day-long"
             								class="button filter-input hour-option" value="day-long" 
                    data-filter="" checked="checked">
             <img src="<?php echo $front_url . "/svg/24-hours-delivery.svg"; ?>" alt="">
             <div>همه</div>
         </label>
         
								<label for="morning" title="4:00 الی 12:00" class="hour-select">
											<input type="radio" name="time"   id="morning"
															class="button filter-input hour-option" value="morning" data-filter=".morning">
												<img style="" 
																	src="<?php echo $front_url . "/svg/sunrise.svg" ?>" alt="">
												<div>4 تا 12</div>
								</label>

								<label for="noon" title="12:00 الی 18:00" class="hour-select">
											<input type="radio" name="time" value="noon"  id="noon"
																	 class="button filter-input hour-option"  data-filter=".noon">
												<img src="<?php echo $front_url . "/svg/sun.svg" ?>" alt="">
												<div>12 تا 18</div>
								</label>

								<label for="night" title="18:00 الی 4:00" class="hour-select">
												<input type="radio" name="time" value="night"  id="night"
																		class="button filter-input hour-option"  data-filter=".night">
												<img src="<?php echo $front_url . "/svg/moon.svg"; ?>" alt="">
												<div>18 تا 4</div>
								</label> 
        </div>
    </div>

			<!-- filter by ticket type -->
			<div class="filter-section filter-section-toggle ticket-type-container">
					<h4>نوع</h4>
					<hr>
					<input name="ticket-type" class="button filter-input" 
											value="all-ticket" id="all-ticket-1" data-filter="" checked="checked" type="radio">
					<label for="all-ticket-1" 
												class="ticket-class-label">همه</label>
					<!-- <input type="radio" name="ticket-type" class="button filter-input" value="available" id="available" data-filter=".isAvailable"  />
					<label for="available" class="ticket-class-label">موجود</label> -->
					<input name="ticket-type" 
											 class="button filter-input" value="charter" 
											 id="charter" data-filter=".sk-X,.sk-I,.sk-F,.sk-S,.sk-R" data-disable="charter" type="radio">

					<label for="charter" class="ticket-class-label">چارتر</label>
					<input name="ticket-type" class="button filter-input" value="Systemic" id="Systemic" 
										data-filter=".sk-G,.sk-M,.sk-J,.sk-U,.sk-V" type="radio">
					<label for="Systemic" class="ticket-class-label ">سیستمی</label>
			</div>

				<!-- by airline -->
				<style>
				.airline-filter input[type="checkbox"]{
					/*display: none;*/
				}

				.airLineRadio + label{
						width:100%;
				}
				.airLineRadio.show + label{
					display: block;
				}
				.airLineRadio + label span {
			    text-align: left;
			    float: left;
			    margin-left: 22px;
			    color: #626262;
				}

		/*		.airLineRadio + label::before {
								background-color: #FFF;
								border-color: #aaaaaa;
				    content: '';
				    display: block;
				    width: 20px;
				    height: 20px;
				    float: right;
				    border: solid 1px #dcdcdc;
				        border-top-color: rgb(220, 220, 220);
				        border-right-color: rgb(220, 220, 220);
				        border-bottom-color: rgb(220, 220, 220);
				        border-left-color: rgb(220, 220, 220);
				    background-color: #f3f2f2;
				    border-radius: 3px;
				    cursor: pointer;
				    margin-left: 5px;
				    margin-top: 3px;
				}*/
				
			/*	.airLineRadio:checked + label::before{
				    background-color: #e4f3fb;
				    background-image: url("/assets/front/img/sprite.png");
				    background-position: -119px -15px;
				    background-repeat: no-repeat;
				}*/
			</style>
				<div class="filter-section filter-section-toggle airline-filter ">
         <h4>ایرلاین</h4>
         <span class="more-info-filter"
         ><img src="assets/front/img/more-info.svg" alt="" data-toggle="tooltip" data-placement="right" title="" data-original-title="کمترین قیمت بلیط هر ایرلاین در کنار فیلتر نمایش داده شده است."></span>
         <hr>
          <input name="" id="all-lines" data-filter="" checked="checked" class="airLineRadio js-allLines filter-input cheapest-flight" data-lowestpriceoverall="" type="checkbox">
         <label for="all-lines" class="all-lines-lbl" style="font-size: 15px;">همه<span class="persian-number">از <?php echo format_currency($cheapest_flight) ; ?> </span></label>
									<br/>
         <?php foreach($airlines_sorted as $k=>$v): ?>
         	<?php 
         		 $v = format_currency($v);
         	 ?>
         	<input name="" id="all-lines" 
         						data-filter=".<?php echo $airline_codes[$k]; ?>" 
         						class="airLineRadio js-allLines filter-input" 
         						type="checkbox">
          <label for="all-lines" class="all-lines-lbl" style="font-size: 15px;"><?php echo $k; ?><span class="persian-number">از <?php echo $v; ?></span></label>
         <br/>
         <?php endforeach; ?>
    </div>

				<!-- by class -->

				<style>
					.ticket-class-container [name="ticket-flight-class"][type="radio"]{
							display: none;
					}
					.m-filters input[type="radio"][name="ticket-flight-class"]:checked + label::before {
				    content: '';
				    display: block;
				    width: 20px;
				    height: 20px;
				    float: right;
				    border: solid 1px #dcdcdc;
				        border-top-color: rgb(220, 220, 220);
				        border-right-color: rgb(220, 220, 220);
				        border-bottom-color: rgb(220, 220, 220);
				        border-left-color: rgb(220, 220, 220);
				    border-color: #aaaaaa;
				    background-color: #FFF;
				    border-radius: 3px;
				    cursor: pointer;
				    margin-left: 5px;
				    margin-top: 3px;
				    background-color: #e4f3fb;
				    background-image: url(/assets/front/img/sprite.png);
				    background-position: -119px -15px;
				    background-repeat: no-repeat;
				    position: relative;
				    right: auto;
				    top: auto;
				    padding: 0;
				    box-shadow: none;
				}
			</style>
    <div class="filter-section filter-section-toggle ticket-class-container" style="">
      <h4 class="ticket-class-title">کلاس</h4>
      <hr>
      <input name="ticket-flight-class" class="button filter-input" value="all-ticket" id="all-ticket-class" data-filter="" checked="checked" type="radio">
      <label for="all-ticket-class" class="ticket-class-label">همه</label>
      <input name="ticket-flight-class" class="button filter-input" value="economy" id="economy" data-filter=".E" type="radio">
      <label for="economy" class="ticket-class-label">اکونومی</label>
      <input name="ticket-flight-class" class="button filter-input" value="business" id="business" data-filter=".B" type="radio">
      <label for="business" class="ticket-class-label">بیزینس</label>
			</div>
</div>


<script>
	$(document).ready(function()
	{
		$(".day-long").click(function()
		{
				$("article").each(function(i,j)
				{
						console.log(i);
						console.log(j);
				});
		});

		$("img").click(function()
		{
				$(this).closest("radio").prop("checked",true);
		});

		$(".all-lines-lbl").click(function()
		{
			 $(this).prev().prop('checked',true);
		});


	});
</script>