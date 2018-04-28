<style>
    .label-price {
        color: #e55022 !important;
        font-size: 16px;
        text-align: left;
        line-height: 14px;
        display: block;
        text-align: right;
    }

    .rial {
        color: #690;
        float: left;
        font-size: 13px;
        font-weight: 700;
        display: block;
        text-align: right;
        float: right;
    }

    span.RaftTxt {
        position: absolute;
        right: 150px;
        top: 158px;
    }

    span.RaftTxt span {
        display: block;
        font-size: 10px;
        color: #023f88;
    }
</style>


<table class="table">
    <thead>
    <tr>
        <th>قیمت هر نفر</th>
        <th>ساعت پرواز</th>
        <th>اطلاعات پرواز</th>
        <th>مسیر</th>
        <th>خط هوایی</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($res as $r): ?>
    <?php if (isset($r["path"])): ?>
    <?php $price = number_format($r["path"]["adult_price"]); ?>
    <tbody class="fltrow animated shuffle-item shuffle-item--visible" data-stop="0" data-cabinclass="economy"
           data-airline="PC" data-airport="IKA,SAW" data-arrtime="380" data-deptime="275"
           style="display: table-row-group; position: static; top: 0px; left: 0px; visibility: visible; will-change: transform; opacity: 1; transition-duration: 0ms; transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); transition-property: top, left, opacity, position;">
<!--    <input id="Isoneway" name="Isoneway" type="hidden" value="1">-->
    <tr class="way-class">
        <td rowspan="1" class="textLeft sub abs price en">
            <div data-original-title="<table class='tblTooltipPrice'><tr><td>هر نفر بزرگسال&amp;nbsp:&amp;nbsp</td><td pricehtml='' sourceprice='7270000.0'>7,270,000</td></tr></table>"
                 data-html="true" data-placement="left" data-toggle="tooltip">
                <label id="showpr" class="lablePrice">7,270,000</label>
                <span class="riall" pricehtmlshow="">ریال</span>
                <form action="/SalesDetails/Flight" method="post">
                    <button type="submit" id="btnret" class="HResultButton margin-r-15 fa"
                            data-original-title="پرواز رفت و برگشت را انتخاب کنید">رزرو بلیط
                    </button>
                </form>
            </div>
        </td>
        <td class="tdResult depart TimeStyle lst TdRaftLogo en " data-totalminute="275">
                                     <span class="RaftTxt">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1"
                                                 x="0px" y="0px" viewBox="0 0 485.794 485.794"
                                                 style="enable-background:new 0 0 485.794 485.794;"
                                                 xml:space="preserve"><rect x="15.794" y="404.368" width="460"
                                                                            height="20"></rect><path
                                                        d="M468.829,89.302c-33.408-19.471-71.368-9.128-97.325,2.976l-77.378,36.082l-133.08-66.934l-79.253,3.405l109.893,111.408   l-70.035,33.269l-72.865-27.731L0,204.525l44.089,54.749c-4.658,5.557-8.879,13.381-5.047,21.599   c5.005,10.732,19.798,16.141,44.063,16.14c4.976,0,10.351-0.227,16.12-0.683c26.636-2.104,55.514-8.903,73.571-17.323   l276.596-128.979c23.89-11.141,35.79-22.839,36.38-35.765C486.078,107.559,483.387,97.784,468.829,89.302z M440.938,131.901   L164.343,260.881c-15.384,7.174-40.641,13.185-64.345,15.313c-24.228,2.175-37.182-0.556-41.5-2.875   c0.889-1.217,2.549-3.129,5.612-5.825l7.184-6.323l-39.708-49.308l17.986-8.388l72.943,27.763l103.169-49.009l-98-99.352   l29.021-1.247l137.089,68.949l86.16-40.176c31.467-14.673,57.979-15.957,78.803-3.823l0.001,0.001   c5.247,3.057,7.081,5.724,7.033,6.77C465.789,113.423,465.188,120.595,440.938,131.901z"></path></svg>
                                            <span>رفت</span>
                                        </span>
            <span class="FlightNumber">PC-513</span>
            <span class="FlightDate">
                                                (27 Mar) <span class="rtl">07 فروردین</span>
                                            </span>


        </td>
        <td class="tdResult lblRaft date lst">
            <div class="clearAfter HasDirCircle">
                <span class="DirCircle"><i class="icon-0129"></i></span>
                <div class="TblLeft">
                    <div class="duration lst en">
                        <span class="TimeStyle">06:20</span>
                        <span class="CityInfo">
                                                        <span class="CityName">استانبول</span>
                                                        <span class="AirportCode">( SAW )</span>
                                                    </span>
                    </div>
                </div>
                <div class="TblMiddle">
                                                <span class="TblMiddleLine">
                                                    <span data-totalminute="195" class="gray TopLine">
                                                        <span class="hour">3</span>&nbsp;<span class="FlightDateNormal">h,</span> <span
                                                                class="minute">15</span>&nbsp;<span
                                                                class="FlightDateNormal">m</span>
                                                                <span class="gray inline flightStop" data-value="0">بدون توقف - </span>
                                                    </span>

                                                    <span class="LegsLine">
                                                        <span class="LegsStart"></span>
                                                        <span class="LegsEnd"></span>
                                                    </span>
                                                </span>
                </div>
                <div class="TblRight" data-totalminute="380">
                    <span class="TimeStyle">04:35</span>
                    <span class="CityInfo">
                                                    <span class="AirportCode">( IKA )</span>
                                                    <span class="CityName">تهران</span>
                                                </span>
                </div>
            </div>
        </td>
        <td class="vendor lst RaftLogo " rowspan="2">
            <img alt="پگاسوس ایرلاینز" data-code="PC" class="fltairlinelogoDep tooltip-hide"
                 src="https://cdn.elicdn.com/Content/AirLine/PC.png " data-toggle="tooltip" data-placement="top"
                 data-original-title="Pegasus&nbsp;airlines">
            <span class="CabinClass Economy" data-cclass="economy">اکونومی </span>
        </td>
    </tr>

    <tr class="ret">
    </tr>

    <tr>
        <td colspan="4">
            <div class="clear height10"></div>
        </td>
    </tr>
    <tr>
        <td colspan="4" class="fltDetContainer">

            <span class="fltDetContent"></span>

            <div class="indr lbluei bold Tahoma DetFligt fa" data-fltguid="61a59ce9-de21-4a40-8e32-2ac0ac20a4f7">
                <i class="icon-0111 appned-icon"></i> جزئیات بیشتر این پرواز
            </div>
        </td>
    </tr>
    <tr>
        <td colspan="4">
            <div class="clear height10"></div>
        </td>
    </tr>
    </tbody>
    <?php endif; ?>
    <?php endforeach; ?>


    </tbody>
</table>