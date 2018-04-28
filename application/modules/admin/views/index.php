<script src="<?php echo base_url('assets/js/mansouri.js'); ?>"></script>

<?php //pre($latest_tickets); ?>
<div class="portlet box blue-hoki">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-plus"></i>
            <span class="caption-subject bold uppercase">
           </span>
        </div>
        <div class="actions">
        </div>
    </div>
    <div class="portlet-body">
        <div class="row">
            <table class="table table-responsive" id="tbl">
                <thead>
                <!-- <th>نام</th> -->
                <th>تعداد مسافران</th>
                <th>مبدا</th>
                <th>مقصد</th>
                <th>مشخصات مسافران</th>
                <th>مشخصات پرواز</th>
                </thead>
                <tbody>
                <?php
                foreach ($latest_tickets as $t) {
                    echo "<tr>";
                    $flight_info = json_decode($t["flight_info"]);
                    $passenger_info = json_decode($t["passengers"]);

                    echo "<td>" . count($passenger_info) . "</td>";
                    echo "<td>" . iatacode_to_city($flight_info->From) . "</td>";
                    echo "<td>" . iatacode_to_city($flight_info->To) . "</td>";
                    echo "<td>" .
                        "<button class='btn btn-default customer-info' data-data='" . $t["passengers"] . "'>info</button>";

                    "</td>";
                    echo "<td>" .
                        "<button class='btn btn-default flight-info' data-data='" . $t["flight_info"] . "'>info</button>";

                    "</td>";
                    echo "</tr>";
                    // pre($flight_info);
                    // pre($passenger_info);
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


<!-- Button trigger modal -->
<!-- <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#passenger-info">
  passenger info
</button> -->

<!-- Modal -->
<div class="modal fade" id="passenger-info" tabindex="-1" role="dialog" aria-labelledby="title" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span
                            class="sr-only">Close</span></button>
                <h4 class="modal-title" id="title">passengers info</h4>
            </div>
            <div class="modal-body" id="passenger-modal-body">

            </div>
            <div class="modal-footer">
                <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button> -->
            </div>
        </div>
    </div>
</div>

<script>
    function create_customerinfo_table(data, table_id) {
        console.log(data);

        var i = "";
        i += '<table class="table table-responsive" id="' + table_id + '">';
        i += '												<thead>';
        i += '																		<th>نام</th>';
        i += '																		<th>نام خانوادگی</th>';
        i += '																		<th>persontype</th>';
        i += '																		<th>birthdate</th>';
        // i+= '																		<th>مبدا</th>';
        // i+= '																		<th>مقصد</th>';
        // i+= '																		<th>مشخصات مسافران</th>';
        i += '														</thead>';
        i += '<tbody>';
        for (var j = 0; j < data.length; ++j) {
            var t = data[j];
            i += '<td>' + t["fa_name"] + '</td>';
            i += '<td>' + t["fa_family"] + "</td>";
            i += '<td>' + t["person_type"] + "</td>";
            i += '<td>' + t["birthdate"] + "</td>";
        }
        return i;
    }

    function create_flight_info1(data, table_id) {
        var i =  "";
        i += '<table class="table table-responsive" id="' + table_id + '">';
        i += '												<thead>';
        i += '																		<th>نام</th>';
        i += '																		<th>نام خانوادگی</th>';
        i += '																		<th>persontype</th>';
        i += '																		<th>birthdate</th>';
        // i+= '																		<th>مبدا</th>';
        // i+= '																		<th>مقصد</th>';
        // i+= '																		<th>مشخصات مسافران</th>';
        i += '														</thead>';
        i += '<tbody>';
        for (var j = 0; j < data.length; ++j) {
            var t = data[j];
            i += '<td>' + t["fa_name"] + '</td>';
            i += '<td>' + t["fa_family"] + "</td>";
            i += '<td>' + t["person_type"] + "</td>";
            i += '<td>' + t["birthdate"] + "</td>";
        }
        return i;
    }

    function create_flight_info(data, table_id) {
        var i = '<ul>';
        map = {};

//        map["friendlyDateFa"] = "مبدا";
        map["fromShowName"] = "مبدا";
        map["toShowName"] = "مقصد";
//        map["date_flight"] = "تاریخ پرواز";
        map["flightDateFa"] = "تاریخ پرواز";
        map["time_flight"] = "زمان پرواز";
        map["airlinePersian"] = "ایرلاین";
        map["number_flight"] = "شماره پرواز";

        for (var k in data) {
            if (data.hasOwnProperty(k) && map.hasOwnProperty(k)) {
                i += "<li>" + map[k] + ":" + data[k] + "</li>";
            }
        }
        i += '</ul>';
        return i;
        console.log(i);
    }

    // var i = "";
    // i+= '<table class="table table-responsive" id="' + table_id + '">';
    // i+=	'												<thead>';
    // i+=	'																		<th>نام</th>';
    // i+= '																		<th>نام خانوادگی</th>';
    // // i+= '																		<th>مبدا</th>';
    // // i+= '																		<th>مقصد</th>';
    // // i+= '																		<th>مشخصات مسافران</th>';
    // i+= '														</thead>';
    // i+= '<tbody>';
    // for(var j = 0; j < data.length; ++j){
    // 		 var t = data[j];
    // 		i += '<td>' + t["fa_name"] + '</td>';
    // 		i += '<td>' + t["fa_family"] + "</td>";
    // }
    // return i;

    $(document).ready(function () {
        $("#tbl").dataTable();
        $('.customer-info').click(function () {
            var data = $(this).attr("data-data");
            console.log(data);
            data = JSON.parse(data);
            // console.log(data);
            var id = guid();
            $('#passenger-modal-body').html(create_customerinfo_table(data, id));
            $("#" + id).dataTable();
            $('#passenger-info').modal();
        });


        $('.flight-info').click(function () {
            var data = $(this).attr("data-data");
            data = JSON.parse(data);
            console.log(data);
//            return;
            var id = guid();
            console.log(create_flight_info(data, id));
            $('#passenger-modal-body').html(create_flight_info(data, id));
            $("#" + id).dataTable();
            $('#passenger-info').modal();
        });

    });

</script>

