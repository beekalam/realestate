<link href="<?php echo base_url('assets/datepicker/bootstrap-datepicker.css') ?>" rel="stylesheet"/>
<script src="<?php echo base_url('assets/datepicker/bootstrap-datepicker.min.js') ?>"></script>
<script src="<?php echo base_url('assets/datepicker/bootstrap-datepicker.fa.min.js') ?>"></script>
<?php ecss(base_url('assets/front/toastr/toastr.min.css')); ?>
<?php ejs(base_url('assets/front/toastr/toastr.min.js')); ?>
<script src="<?php echo base_url('assets/js/mansouri.js') ?>"></script>
<?php $this->load->view("flight_search/_styles.php"); ?>

<section class="main">

    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <?php $this->load->view("flight_search/_cheapest.php"); ?>
            </div>
        </div>
        <div class="row" style="padding-top: 100px;">
            <div class="col-xs-3">
                <?php $this->load->view("flight_search/_filters.php") ?>
            </div>
            <div class="col-xs-5">
                <?php $this->load->view("flight_search/_flights.php") ?>
            </div>
        </div>
        <style>
            .userinfo {
                padding-top: 10px;
            }
        </style>
        <div class="row userinfo">
        <div class="col-xs-12">
            <style type="text/css">
                .m-passengers-addp img {
                    width: 16px;
                    height: 16px;
                    margin: 13px;
                    fill: #397ff6;
                }

                /*.buyer_info_container {*/
                    /*padding-top: 18px;*/
                    /*padding-bottom: 13px;*/
                /*}*/

                /*.buyer_info_container input {*/
                    /*margin-left: 10px;*/
                /*}*/

            </style>

            <div class="col-md-6 col-lg-5" id="user_type_container" style="display: none;">
                <button class="btn add-passenger m-passengers-addp" data-age="0">
                    <span>
                        <img src="<?php echo base_url('assets/front/svg/add.svg'); ?>"/>
                    </span>
                    بزرگسال
                </button>
                <button class="btn add-passenger m-passengers-addp" data-age="1">
											<span>
												 <img src="<?php echo base_url('assets/front/svg/add.svg'); ?>"/>
											</span>
                    کودک
                </button>
                <button class="btn add-passenger m-passengers-addp" data-age="2">
											<span>
												<img src="<?php echo base_url('assets/front/svg/add.svg'); ?>"/>
											</span>
                    نوزاد
                </button>
            </div>

            <form method="POST" action="<?php echo base_url('front/buy_ticket'); ?>" class="form-inline">
                <div class="buyer_info_container">
                    <div class='card'>
                        <div class="card-header">
                            مشخصات خریدار
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-xs-6 input-row">
                                    <select name="buyer_gender" id="buyer_gender" class="form-control">
                                        <option value="" selected="selected">جنسیت...</option>
                                        <option value="male">آقا</option>
                                        <option value="female">خانم</option>
                                    </select>
                                </div>
                                <div class="col-xs-6 input-row">
                                    <input type="text" name="buyer_name" id="buyer_name" placeholder="نام"
                                           class="form-control">
                                </div>
                                <div class="col-xs-6 input-row">
                                    <input type="text" name="buyer_family" id="buyer_family" placeholder="نام خانوادگی"
                                           class="form-control">
                                </div>
                                <div class="col-xs-6 input-row">
                                    <input type="text" name="buyer_phone" id="buyer_phone" placeholder="تلفن ثابت"
                                           class="form-control FieldRequired">
                                </div>
                                <div class="col-xs-6 input-row">
                                    <input type="text" name="buyer_mobile" id="buyer_mobile" placeholder="موبایل"
                                           class="form-control FieldRequired">
                                </div>
                                <div class="col-xs-6 input-row">
                                    <input type="text" name="buyer_nationalid" id="buyer_nationalid"
                                           placeholder="کد ملی" class="form-control FieldRequired">
                                </div>
                                <div class="col-xs-6 input-row">
                                    <input type="text" name="buyer_address" id="buyer_address" placeholder="آدرس"
                                           class="form-control">
                                </div>
                                <div class="col-xs-6 input-row">
                                    <input type="text" name="fa_family" id="fa_family" placeholder="ایمیل"
                                           class="form-control">
                                </div>
                            </div> <!-- end row -->
                        </div> <!-- end card-body -->
                    </div> <!-- end card -->
                </div>

                <div class="form-container">
                </div>
                <input class="btn btn-success" type="button" value="ادامه فرآیند خرید" id="buy_submit">
            </form>
        </div>
    </div>

    </div>

</section>

<!-- Modal -->
<div class="modal fade" id="buy_ticket_modal" role="dialog">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">خرید</h4>
            </div>
            <div class="modal-body" id="buy_ticket_modal_body">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
</div>

<style>
    .passenger-detail-info {
        padding-top: 20px;
        padding-bottom: 20px;
    }

    .m-passengers-addp {
        position: relative;
        padding: 0;
        box-shadow: 0px 0px 2px 0px rgba(0, 0, 0, 0.20);
        background-color: #FFF;
        border-radius: 4px;
        border: 1px solid #ededed;
        height: 43px;
        width: 32%;
        margin: 0 2px 0 0 !important;
        padding-left: 38px;
    }

    .m-passengers-addp span {
        display: block;
        position: absolute;
        left: 0;
        top: 0;
        width: 42px;
        height: 42px;
        border-right: 1px solid #e2e2e2;
    }

    .m-passengers-addp span img {
        width: 16px;
        height: 16px;
        margin: 13px;
        fill: #397ff6;
        color: #397ff6;
    }

    .inputrow {
        margin-left: 10px;
    }

    .has_error {
        border-color: #a94442;
        -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
    }


</style>

<script>
    var flight_from = "<?php echo $flight_from; ?>";
    var flight_to = "<?php echo $flight_to; ?>";
    var flight_date = "<?php echo $flight_date; ?>";
    function form_group(c, id) {
        id = id ? id : '';
        ret = '<div class="col-xs-6 inputrow" id="' + id + '">';
        ret += c;
        ret += '</div>';

        return ret;
    }

    function form_group2(c, id) {
        id = id ? id : '';
        ret = '<div class="form-body col-xs-6" id="' + id + '"> \
					<div class="form-group">';
        ret += c;
        ret += '\
					</div> \
			</div>';
        return ret;
    }

    function hidden_input(name, value) {
        return "<input type='hidden' name='" + name + "' value='" + value + "'/>";
    }

    function txt(name, klasses, placeholder) {
        switch (name) {
            // case 'buyer_name':
            // 	return "<input type='text' name='buyer_name' id='buyer_name' placeholder='' class='form-control'>";
            // case 'buyer_family':
            // 	return "<input type='text' name='buyer_family' id='buyer_family' placeholder='' class='form-control'>";
            // case 'buyer_phone':
            // 	return "<input type='text' name='buyer_"
            case 'name':
                return "<input type='text' name='name' id='name' placeholder='نام لاتین' class='passenger-name form-control FieldRequired form-control'>";
            case 'family':
                return "<input type='text' name='family' id='family' placeholder='نام خانوادگی لاتین' class='passenger-name form-control FieldRequired'>";
            case 'nationalid':
                return "<input type='text' name='nationalid' id='nationalid' placeholder='کد ملی' class='form-control FieldRequired'>";
            case 'birthdate':
                return '<input type="text" name="customer_birthdate" id="customer_birthdate" placeholder="تاریخ تولد" class="form-control FieldRequired has-datepicker">';
            case 'fa_name':
                return '<input type="text" name="fa_name" id="fa_name" placeholder="نام" class="passenger-name form-control FieldRequired">';
            case 'fa_family':
                return '<input type="text" name="fa_family" id="fa_family" placeholder="نام خانوادگی" class="passenger-name form-control FieldRequired">';
            case 'foreigner_country':
                return '<input type="text" name="foreigner_country" id="foreigner_country" class="form-control" placeholder="کشور">';
            case 'foreigner_name':
                return '<input type="text" name="foreigner_name" id="foreigner_name"  placeholder="نام" class="form-control">';
            case 'foreigner_passportno':
                return '<input type="text" name="foreigner_passportno" id="foreigner_passportno" class="form-control" placeholder="شماره پاسپورت">';
            case 'foreigner_passport_date':
                return '<input type="text" name="foreigner_passport_date" id="foreigner_passport_date" class="form-control has-datepicker" placeholder="تاریخ">';
            case 'gender':
                return '<select name="gender" id="gender" class="form-control FieldRequired"><option value="" selected="selected">جنسیت...</option><option value="male">آقا</option><option value="female">خانم</option></select>';
            case 'radio_irani':
                return '<input type="radio" name="passenger-type2" id="passenger-type2" class="passenger-type form-control col-xs-9" value="irani" checked="checked">ایرانی';
            case 'radio_foreigner':
                return '<input type="radio" name="passenger-type2" id="passenger-type2" class="passenger-type"  value="foreign">اتباع خارجی';
            default:
                return "<input type='text' name='" + name + "' id='" + name + "' placeholder='" + placeholder + "' class='" + klasses + "'>";
        }
    }
    function div(content="") {
        // var klass = 'col-md-9';
        // return "<div class='" + klass + "'>" +
        //             content
        //         "</div>";
        return content;
    }

    function add_passengerp(age, tail) {

        var populate = function () {
            var df = $.Deferred();
            setTimeout(function () {
                $(".form-container").append(add_passenger(age, tail));
                df.resolve("");
            }, 1);
            return df.promise();
        }
        $.when(populate()).then(function () {
            $(".has-datepicker").datepicker(
                {
                    isRTL: true,
                    changeMonth: true,
                    changeYear: true,
                    dateFormat: "yy/mm/dd"
                });
        });
    }

    function te(i) {
        toastr.error(i);
        return false;
    }
    function tee(i, j) {
        j.addClass('is-invalid');
        return te(i);
    }

    function validate_inputs() {
        console.log("in validate inputs");
        $(".passenger-detail-info").each(function (i, t) {
            var it = null;
            var valid = true;
            var arr = {
                "name": "نام لاتین",
                "family": "نام خانوادگی لاتین",
                "customer_birthdate": "تاریخ تولد",
                "nationalid": "کد ملی",
                "fa_name": "نام فارسی",
                "fa_family": "نام خانوادگی فارسی"
            };
            if ($(t).find("input[name='passenger-type2']:checked").val() == 'foreign') {
                arr["foreigner_name"] = 'نام تبعه خارجی'
                arr["foreigner_passportno"] = 'شماره پاسپورت';
                arr['foreigner_passport_date'] = 'تاریخ انقضا پاسپورت';
            }
            // console.log($(t).find("#gender").val());
            // check gender is selected
            if (!$(t).find("#gender").val()) {
                return te("جنسیت انتخاب نشده است");
            }
            //check for empty values
            for (var k in arr) {
                if (arr.hasOwnProperty(k)) {
                    var item = $(t).find('input[name="' + k + '"]').val();
                    if (!item) return te(arr[k] + " وارد نشده است");
                }
            }

            //check for valid nationalid
            if (!valid_national_code($(t).find("input[name='nationalid']").val())) {
                return te("کد ملی نامعتبر");
            }

            //check name and family are english
            it = $(t).find("input[name='name']")
            if (!isASCII(it.val())) return tee("از کاراکتر انگلیسی برای نام لاتین استفده کنید", it);

            it = $(t).find("input[name='family']");
            if (!isASCII(it.val())) {
                return tee("از کاراکتر انگلیسی برای نام خانوادگی استفاده کنید", it);
            }

            //check fa_name and fa_family don't use assci characters
            it = $(t).find("input[name='fa_name']");
            if (isASCII(it.val())) {
                return tee("برای نام فار‍سی از کاراکتر های فارسی  استفاده کنید", it);
            }
            it = $(t).find("input[name='fa_family']")
            if (isASCII(it.val())) {
                return tee("برای نام خانوادگی فارسی از صفحه کلید فارسی استفاده کنید", it);
            }

        });

    }
    function add_passenger(n, tail) {

        // i = '<div class="panel panel-primary myrow">';
        i = "<div class='passenger-row'>";
        i += '<div class="card">';
        switch (n) {
            case 0:
                i += ' <div class="card-header">بزرگسال<\/div>';
                break;
            case 1:
                i += ' <div class="card-header">کودک<\/div>';
                break;
            case 2:
                i += ' <div class="card-header">نوزاد<\/div>'
        }
        i += '<div class="card-body">';

        i += '<div class="row passenger-detail-info">';
        i += '<div class="col-xs-12">';
        i += "<div class='row'>";
        i += "<div class='col-xs-12'>";
        i += form_group(div(txt('radio_irani')));
        i += form_group(div(txt('radio_foreigner')));
        i += "</div>";
        i += "</div>";
        i += "<div class='row'>";
        i += form_group(div(txt('gender')));
        i += form_group(div(txt('name')));
        i += form_group(div(txt('family')));
        i += form_group(div(txt('nationalid')));
        i += form_group(div(txt('birthdate')));
        i += form_group(div(txt('fa_name')));
        i += form_group(div(txt('fa_family')));
        i += "</div>";
        i += '<div class="row foreign" style="display:none">';
        i += '<div class="col-xs-12"><strong>اطلاعات اتباع خارجی</strong></div>';
        i += form_group(txt('foreigner_name'));
        i += form_group(txt('foreigner_passportno'));
        i += form_group(txt('foreigner_passport_date'));
        i += "</div>";
        i += "</div>";
        i += "</div>";
        i += "</div>";
        i += '</div></div>';
        i += "</div>";
        return i + tail;
    }

    $(document).ready(function () {

        $(".article-moreinfo-action").click(function () {
            // $(this).find('.article-moreinfo-content').show();
            $(this).next().next().toggle();
            // $(this).next().next().css("visibility", "visible");
            // $(this).next().next().show();
        });

        $("body").on("click", ".passenger-type", function () {
            var val = $(this).val();
            if (val == 'foreign') {
                $(this).parent().parent().parent().parent().find('.foreign').show();
            } else {
                $(this).parent().parent().parent().find('.foreign').hide();
            }
        });

        $(".m-passengers-addp").click(function (e) {
//            id="sample_template" type="text/html"
            var template = document.getElementById('person_info_template').innerHTML;
            var output = Mustache.render(template, {});
            alert(output);
//            document.getElementById('person').innerHTML = output;
//            var age = $(this).attr("data-age");
//            add_passengerp(age, '');
        });

        $(".choose").click(function () {
            if ($(this).hasClass('cancel_button')) {
                $(this).removeClass('cancel_button');
                $("article").show();
                $("#user_type_container").hide();
                $("#form-container").hide();
                $(".m-filters").show();
                return;
            } else {
                $(this).text('لغو');
                $(this).addClass('cancel_button');
                $(".m-filters").hide();
            }

            var parent_id = $(this).attr("data-parent-id");
            $('article').hide();
            $("#" + parent_id).show();
            $("#user_type_container").show();
            $(".form-container").empty();
            var self = $(this);
            arr = ["data-id", "data-price", "data-date",
                "data-airline", "data-classtype", "data-link", "data-sellerid", "data-sellerreference",
                "data-systemkey", "data-description"];
            var ret = "";
            window.selected_flight = {};
            for (var i = 0; i < arr.length; ++i) {
                var name = arr[i].split("-")[1];
                // ret += hidden_input(name,self.attr(arr[i]));
                if (name == "id") {
                    window.flight_id = self.attr(arr[i]);
                } else if (name == "date") {
                    window.flight_date = self.attr(arr[i]);
                } else if (name == "from") {
                    window.fligth_from = self.attr(arr[i]);
                } else if (name == "to") {
                    window.flight_to = self.attr(arr[i]);
                }
            }
            $(".form-container").html(add_passengerp(0, ret));
        });

        $('#buy_submit').click(function (e) {
            console.log("in buy_submit");
            e.preventDefault();
            if (!validate_inputs()) {
                return;
            }

            var to_send = {};
            to_send.data = {};
            to_send.data.passengers = [];
            to_send.data.flight_id = window.flight_id;
            to_send.data.flight_from = flight_from;
            to_send.data.flight_to = flight_to;
            to_send.data.flight_date = flight_date;
            // flight = {};
            // for (var k in window.selected_flight) {
            //     if (window.selected_flight.hasOwnProperty(k)) {
            //         to_send.data.selected_flight['"'+k+'"']=window.selected_flight[k];
            //     }
            // }
            // to_send.data.selected_flight = flight;

            // console.log(to_send);

            $(".passenger-detail-info").each(function (i, t) {
                to_send.data.passengers[i] = {};
                to_send.data.passengers[i].name = $(t).find('input[name="name"]').val();
                to_send.data.passengers[i].family = $(t).find('input[name="family"]').val();
                to_send.data.passengers[i].gender = $(t).find('input[name="gender"]').val();
                to_send.data.passengers[i].birthdate = $(t).find('input[name="birthday"]').val();
                to_send.data.passengers[i].fa_name = $(t).find('input[name="fa_name"]').val();
                to_send.data.passengers[i].fa_family = $(t).find('input[name="fa_family"]').val();
                to_send.data.passengers[i].foreigner_name = $(t).find('input[name="foreigner_name"]').val();
                to_send.data.passengers[i].foreigner_passportno = $(t).find('input[name="foreigner_passportno"]').val();
                to_send.data.passengers[i].foreigner_country = $(t).find('input[name="foreigner_country"]').val();
                // n[i].passenger_type= $(t).find('input[name="passenger_type2]').val();
            });

            // console.log(to_send);
            // to_send = JSON.stringify(to_send);
            $.ajax({
                url: '<?php echo base_url('front/buy_ticket'); ?>',
                async: 'false',
                cache: 'false',
                type: 'JSON',
                method: 'POST',
                data: to_send,
                success: function (response) {
                    var data = JSON.parse(response);
                    if (data["success"] == false) {
                        var msg = data["error"] || "خطا در حذف";
                        // swal("", msg , "warning")
                        alert('error');
                    } else {
                        // alert(data["reciept_no"]);
                        $("#buy_ticket_modal_body").html('خرید شما با موفقیت انجام شد' + '<br/>' +
                            "شماره پیگیری:" + data["reciept_no"]);
                        $("#buy_ticket_modal").modal();
                        // swal("","خرید شما با موفقیت انجام شد", "شماره پیگیری"+ data["reciept_no"]);
                        // window.location="<?php echo base_url('front/path_info') ?>"
                    }
                }
            }); //$.ajax
        });

    });
</script>
