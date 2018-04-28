<?php
    $res = isset($res->AvailableFlights) ? o2a($res->AvailableFlights) : array();
?>
<?php //foreach(array() as $item): ?>
<?php foreach($res as $item): ?>
<?php 
        $id=uniqid();
        // $item=o2a($item);
        $item['airline_img'] = base_url('assets/img/airline/').
                                    $item["AirLineEnglish"].'.png';
        $i = intval(substr($item["LeaveTime"],0,2));                                    

        if($i <12 && $i>=4) $hour = "morning";
        else if($i >=12 && $i < 18) $hour = "noon";
        else $hour="night";

        $ticket_type = "sk-".$item["SystemKey"];
        $klasses = sprintf("clear %s isAvailable E S %s count9 %s grid-item",
                $item["AirLineEnglish"],$hour,$ticket_type);
?>

<div class="col-xs-12 grid" style="">
    <article class="<?php echo $klasses; ?>"
            data-id="<?php echo $item["Id"]; ?>"
            data-flightnumber="<?php echo $item["FlightNumber"] ?>"
            data-price="<?php echo $item["price"]; ?>" 
            data-leavetime="<?php echo $item["LeaveTime"] ?>" 
            data-systemkey="<?php echo $item["SystemKey"]; ?>" 
            data-count="<?php echo $item["ClassCount"]; ?>" 
            data-from="<?php echo $item["From"]; ?>"
            data-to="<?php echo $item["To"]; ?>" 
            data-airlineen="<?php echo $item["AirLineEnglish"]; ?>"
            data-seen="true"
            data-classtype="<?php echo $item["ClassType"]; ?>" 
            id="<?php echo $id; ?>"
            style="padding: 8px; padding-top: 21px; box-shadow: rgba(19, 14, 14, 1.14902) 9px 4px 8px 0px; padding-right: 100px; border-radius: 25px; border-top-style: solid; border-top-width: 1px; margin-top: 10px; "> 
            <div class="row clear"> 
                <div class="article-info"> 
                    <div class="article-info-status"style='<?php echo $item["SystemKeyName"]=="چارتر" ?
                           "background-color: rgba(139, 195, 74, 0.74);":""; ?>'>
                        <?php echo $item["SystemKeyName"]; ?>
                    </div>
                    <div class="article-info-title">
                        <img class="icon article-info-title-logo" 
                        src="<?php echo $item['airline_img']; ?>" 
                        alt="<?php echo $item['AirLine']; ?>"
                        style="width: 40px !important;">
                        <p class="article-info-title-title">
                            <?php echo $item["AirLine"]; ?>
                        </p>
                    </div>
                    <div class="article-info-aircraft">
                        <span><?php echo $item["FlightNumber"]; ?></span>
                        <span class="article-info-aircraft__title">
                         <?php echo $item["Aircraft"]; ?>
                        </span>
                    </div>
                    <div class="article-info__time">
                        <div class="article-info__time__location    article-info__time__location__from 
                        article-info__time__items__grey">
                            <?php echo $item["FromShowName"]; ?>
                        </div>
                        <div class="article-info__time__hour time-sort persian-number">
                            <?php 
                                $l = $item["LeaveTime"];
                                echo $l[0].$l[1].":".$l[2].$l[3]; 
                            ?>
                        </div>
                        <div class="article-info__time__seperator">
                            <?php if(isset($item["HasConnection"]) && $item["HasConnection"]): ?>
                             <div class="article__info__time__seperator__hasstop"></div>
                            <?php endif; ?>
                        </div>
                        <!-- <div class="article-info__time__hour article-info__time__items__grey">ساعت فرود : 18:00</div> -->
                        <div class="article-info__time__location article-info__time__location__to article-info__time__items__grey">
                            <?php echo $item["ToShowName"]; ?>
                        </div>
                    </div>
                </div>
                <div class="article-action">
                    <div class="article-action__price">
                        <span class="price-sort persian-number">
                            <?php echo format_currency($item["price"]); ?>
                        </span>
                    </div>
                    <div class="article-action__btn">
                        <a onclick="" 
                     data-id="<?php echo $item["Id"]; ?>"
                     data-price="<?php echo $item["ClassPrice"]; ?>"
                     data-date="<?php echo $item["LeaveDateFa"]; ?>"
                     data-airline="<?php echo $item["AirLineEnglish"]; ?>"
                     data-classtype="<?php echo $item["ClassType"]; ?>"
                     data-link="<?php echo $item["UrlLink"]; ?>"
                     data-sellerid="<?php echo $item["SellerId"]; ?>"
                     data-sellerreference="<?php echo $item["SellerReference"]; ?>"
                     data-systemkey="<?php echo $item["SystemKey"]; ?>"
                     data-description="<?php echo $item["Description"]; ?>"
                     data-ticketoriginalprice="<?php echo $item["TicketOrginalPrice"]; ?>"
                     data-ticketcharterprice="<?php echo $item["TicketCharterPrice"]; ?>"
                     data-ticketoverprice="<?php echo $item["TicketOverPrice"]; ?>"
                     data-parent-id="<?php echo $id; ?>"
                     class="choose btn btn-primary alibaba-btn form-control" 
                         >انتخاب</a>
                    </div>
                    <div class="article-action__count">
                        <?php echo $item["ClassDetails"]; ?>
                    </div>
                    <div class="article-action__refundable">
                        <!-- <span>غیر قابل استرداد</span> -->
                    </div>
                </div>
                <div class="article-moreinfo">
                    <div class="article-moreinfo-action" onclick="">اطلاعات بیشتر
                     <img src="<?php echo base_url('assets/front/svg/down.svg') ?>" 
                          style="width:10px;height:10px;margin-bottom: -3px;margin-right: 4px;"/></div>
                    <div class="article-moreinfo__seperator"></div>
                    <div class="article-moreinfo-content">
                        <div class="article-moreinfo-content__info">
                            <div class="article-moreinfo-content__info__text article-moreinfo-content__info__bold">
                                <span>
                                    <?php echo $item["DayOfWeek"]; ?>
                                </span> 
                                <span class="flightdate">
                                    <?php echo $item["LeaveDateFa"]; ?>
                                </span>
                                  <span class="article-moreinfo-content__info__font article-moreinfo-content__info__fontsize article-moreinfo-content__info__leavedate" dir="ltr">
                                    <?php echo $item["LeaveDate"]; ?>
                                  </span>
                            </div>
                            <div class="article-moreinfo-content__info__text article-moreinfo-content__info__inline article-moreinfo-content__info__font">
                                <span>شماره پرواز: &nbsp;</span>
                                <span>
                                    <?php echo $item["FlightNumber"]; ?>
                                </span>
                            </div>
                            <div class="article-moreinfo-content__info__text article-moreinfo-content__info__inline">
                                <span>کلاس پروازی: &nbsp;</span>
                                <?php echo $item["kind"]; ?>
                            </div>
                            <div class="article-moreinfo-content__info__text article-moreinfo-content__info__inline">
                                <span>خدمات ویژه: &nbsp;</span>
                                
                            </div>
                            <div class="article-moreinfo-content__info__text article-moreinfo-content__info__inline" style="font-size: 13px;">
                                 <?php echo $item["ticketClass"]; ?>
                            </div>
                            <div class="article-moreinfo-content__info__text article-moreinfo-content__info__inline">
                                <span>توضیحات: &nbsp;</span>
                                <?php echo $item["Description"]; ?>
                            </div>
                            <div class="article-moreinfo-content__info__text article-moreinfo-content__info__inline arrival-time-wrapper persian-number" 
                            style="font-size: 13px;">
                               <?php echo $item["ArrivalTime"]; ?>
                            </div>
                            <div class="article-moreinfo-content__info__text article-moreinfo-content__info__inline">
                                <?php if(isset($item["HasConnection"])): ?>
                                    <span>توقف: &nbsp;</span>
                                    دارد
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="article-moreinfo-content__price">
                            <div class="article-moreinfo-content__price__part persian-number">
                                <span> 
                                    <?php
                                        if(isset($item["PriceChild"])){
                                            if(strpos($item["PriceChild"],":") !== false){
                                                list($a,$b)=explode(":",$item["PriceChild"]); 
                                                echo $a .":". format_currency($b,"");
                                            }else{
                                                echo $item["PriceChild"];
                                            }
                                        }
                                    ?>
                                </span>ریال
                            </div>
                            <div class="article-moreinfo-content__price__part persian-number">
                                <span> 
                                    <?php
                                        if(isset($item["PriceInfant"])){
                                            if(strpos($item["PriceInfant"],":") !== false){
                                                list($a,$b)=explode(":",$item["PriceInfant"]); 
                                                echo $a .":". format_currency($b,"");
                                            }else{
                                                echo $item["PriceInfant"];
                                            }
                                        }
                                     ?>
                                </span>ریال
                            </div>
                        </div>
                        <div class="article-moreinfo-content__info__crcn">
                            <table>
                                <tbody>
                                    <tr>
                                        <td>زمان</td>
                                        <?php 
                                            $a = array("PS1","PS2","PS3","PS4","PS5");
                                            foreach($a as $k=>$v){
                                                if(isset($item["CRCN"][$v])){
                                                    echo "<td>".$item["CRCN"][$v]."</td>";
                                                }else{
                                                    echo "<td>-</td>";
                                                }
                                            }
                                        ?>
                                    </tr>
                                <tr>
                                    <td class="article-moreinfo-content__info__crcn__title">جریمه</td>
                                    <?php 
                                        $a = array("P1","P2","P3","P4","P5");
                                        foreach($a as $k=>$v){
                                            if(isset($item[$v])){
                                            echo  '<td class="article-moreinfo-content__info__crcn__text">' .
                                                    $item[$v] .
                                                 '</td>';
                                            }else{
                                                echo "<td>-</td>";
                                            }
                                        }
                                    ?>
                                </tr>
                            </tbody>
                            </table>
                        </div>
                        <span class="order-sort" style="display:none;">0</span>
                    </div>
                </div>
            </div>
    </article>
</div>

<?php endforeach; ?>