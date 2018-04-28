<?php 
$c = o2a($cheapest_flights);
$c = $c["d"];
// pre($c);
foreach($c as $v){
	$v = o2a($v);
}
?>
<style>
.forward-calendar {
    position: relative;
    display: none;
    margin-bottom: 10px;
    background-color: #FFF;
    border-radius: 6px;
    border: 1px solid #ededed;
    padding: 0 42px;
    overflow: hidden;
}

.calendar-slider {
    margin: 0;
    width: 100%;
    position: relative;
}

.calendar-slider__item {
    position: relative;
    display: block;
    text-align: center;
    padding: 2px 0 6px 0;
    border-left: 1px solid #f5f5f5;
    color: #434343;
    width: 14.28%;
    float: right;
    transition: all 300ms;
}

.calendar-slider__item:hover {
    background: #e5e5e5;
}

.calendar-slider__item__active.calendar-slider__item:hover {
    background: #eee;
}

.calendar-slider__item:last-child {
    border: 0;
}

.calendar-slider__item__active {
    border: 1px solid #dadada;
    background: #eee;
}

.calendar-slider__item__details {
    text-align: center;
}

.calendar-slider__item__weekday {
    font-size: 12px;
}

.calendar-slider__item__date {
    font-size: 13px;
}

.calendar-slider__item__ddate {
    display: none;
}

.calendar-slider__item__price {
    font-size: 18px;
}

.calendar-slider__item__cur {
    font-size: 10px;
}

.calendar-slider__item.cheapest-flight {
}

.calendar-slider__item.cheapest-flight:after {
    content: 'کمترین قیمت';
    display: block;
    width: 100%;
    font-size: 11px;
    height: 17px;
    padding: 1px 0;
    position: absolute;
    bottom: 0;
    right: 0;
    left: 0;
    background: #649b18;
    color: #FFF;
}

.calendar-slider__item.cheapest-flight .calendar-slider__item__price {
    display: inline-block;
    font-size: 18px;
}

.calendar-slider {
    margin: 0;
    width: 100%;
    position: relative;
}

.calendar-slider__item {
    position: relative;
    display: block;
    text-align: center;
    padding: 2px 0 6px 0;
    border-left: 1px solid #f5f5f5;
    color: #434343;
    width: 14.28%;
    float: right;
    min-height: 84px;
}

.calendar-slider__item:last-child {
    border: 0;
}

.calendar-slider__item__active {
    border: 1px solid #dadada;
    background: #eee;
}

.calendar-slider__item__details {
    text-align: center;
}

.calendar-slider__item__weekday {
    font-size: 12px;
}

.calendar-slider__item__date {
    font-size: 13px;
}

.calendar-slider__item__ddate {
    display: none;
}

.calendar-slider__item__price {
    font-size: 18px;
}

.calendar-slider__item__cur {
    font-size: 10px;
}

.calendar-slider__item.cheapest-flight {
}

.calendar-slider__item.cheapest-flight:after {
    content: 'کمترین قیمت';
    display: block;
    width: 100%;
    font-size: 11px;
    height: 17px;
    padding: 1px 0;
    position: absolute;
    bottom: 0;
    right: 0;
    left: 0;
    background: #649b18;
    color: #FFF;
}

.calendar-slider__item.cheapest-flight .calendar-slider__item__price {
    display: inline-block;
}

.calendar-slider__item.cheapest-flight .calendar-slider__item__cur {
    display: inline-block;
    padding-bottom: 19px;
}

.calendar-nav {
    position: absolute;
    top: 0;
    right: 0;
    margin: 0;
    height: 100%;
    border-radius: 0;
    width: 42px;
    padding: 0;
    color: transparent;
    cursor: pointer;
    background-color: #eeeeee;
}

.calendar-nav.disabled-nav {
    background-color: #FFF;
    opacity: 0.1;
    cursor: auto;
}

.calendar-nav#next-calendar {
    right: auto;
    left: 0;
    border-right: 1px solid #f5f5f5;
}

.calendar-nav#prev-calendar {
    left: auto;
    right: 0;
    border-left: 1px solid #f5f5f5;
}

.calendar-nav:before {
    content: '';
    display: block;
    position: absolute;
    top: 28px;
    right: 6px;
    width: 26px;
    height: 26px;
    background-image: url('/assets/front/svg/arrow-point-to-right.svg') !important;
}

.calendar-nav#next-calendar:before {
    right: auto;
    left: 6px;
    background-image: url('/assets/front/svg/arrow-point-to-left.svg') !important;
}

.calendar-nav#prev-calendar:before {
    left: auto;
    right: 6px;
    background-image: url('/assets/front/svg/arrow-point-to-right.svg') !important;;
}

.calendar-loading {
    display: none;
    background: rgba(255, 255, 255, 0.5);
    position: absolute;
    width: 100%;
    height: 100%;
    right: 0;
    left: 0;
    top: 0;
    bottom: 0;
}

.calendar-slider__item.calendar-slider__item__closed .calendar-slider__item__cur,.calendar-slider__item.calendar-slider__item__notav .calendar-slider__item__cur {
    display: none;
}

.calendar-slider__item.calendar-slider__item__closed .calendar-slider__item__price,.calendar-slider__item.calendar-slider__item__notav .calendar-slider__item__price {
    display: none;
}

.calendar-slider__item.calendar-slider__item__closed,.calendar-slider__item.calendar-slider__item__notav {
    border: 0;
    border-left: 1px solid #f5f5f5;
    background: #fff;
}

.calendar-slider__item.calendar-slider__item__closed:after,.calendar-slider__item.calendar-slider__item__notav:after {
    content: 'تکمیل ظرفیت';
    display: block;
    width: 100%;
    font-size: 12px;
    height: 17px;
    padding: 1px 0;
    position: absolute;
    bottom: 16px;
    right: 0;
    left: 0;
    background: #ffffff;
    color: #000;
}

.calendar-slider__item.calendar-slider__item__notav:after {
    content: 'موجود نیست';
    display: block;
    width: 100%;
    font-size: 12px;
    height: 17px;
    padding: 1px 0;
    position: absolute;
    bottom: 16px;
    right: 0;
    left: 0;
    background: #ffffff;
    color: #000;
}

.calendar-loading.calendar-loading-text:after {
    content: 'کمترین قیمت هفته';
    text-align: center;
    width: 100%;
    display: block;
    margin-top: 30px;
    animation: blinker 2s linear infinite;
    font-size: 18px;
}

.calendar-loading-bar {
    height: 1px;
    background: #649b18;
    animation: baranimate 1s linear infinite;
    animation-timing-function: ease-in-out;
    will-change: transform;
}

@keyframes blinker {  
    0% { opacity: 1; }
    30% { opacity: 0.2; }
    60% { opacity: 1; }
}

@keyframes baranimate {  
    0% { transform: translateX(0%); }
    25% { transform: translateX(-100%); }
    50% { transform: translateX(0%); }
    75% { transform: translateX(100%); }
}
</style>

<div class="forward-calendar" style="display: block;padding-top:100px;">
				<div class="calendar-slider clearfix">
					<?php foreach($c as $v): ?>
						<?php 
										$v  = o2a($v);
										// pre($v);
										$u = array("ffrom" => $flight_from,
															"fto" => $flight_to,
															"from_date" => $v["JalaliDate"],
															"na" => "1",
															"nc" => "0",
															"ni" => "0"
										);
										$url = base_url('front/flights')."?".http_build_query($u);
					 ?>
								<a data-date="<?php echo $v["DepurtureDate"]; ?>" 
										href="<?php echo $url; ?>" class="item calendar-slider__item" id="calendar-slider__item-1">
												<div class="calendar-slider__item__details calendar-slider__item__weekday"><?php echo $v["WeekDay"]; ?></div>
												<div class="calendar-slider__item__details calendar-slider__item__date persian-number"><?php echo $v["JalaliDate"]; ?></div>
												<div class="calendar-slider__item__details calendar-slider__item__price persian-number">
														<?php echo substr($v["Price"],0,3); ?>
													</div>
												<div class="calendar-slider__item__details calendar-slider__item__cur">هزارتومان</div>
												<div class="calendar-slider__item__details calendar-slider__item__ddate"></div>
								</a>
					<?php endforeach; ?>
				</div>
				<div class="calendar-nav" id="prev-calendar">prev</div>
				<div class="calendar-nav" id="next-calendar">
					 <img src="<?php echo base_url('/assets/front/svg/arrow-point-to-right.svg'); ?>" />
				</div>
				<div class="calendar-loading" style="display: none;">
								<div class="calendar-loading-bar"></div>
				</div>
</div>
