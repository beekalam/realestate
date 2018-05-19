<div class="page-bar"></div>
<?php
$pt = array(
    "apartment" => base_url('assets/yellow_MarkerA.png'),
    'store'     => base_url('assets/green_MarkerM.png'),
    'land'      => base_url('assets/blue_MarkerZ.png')
);

?>
<div class="portlet light portlet-fit ">
    <div class="portlet-title">
        <div class="caption">
            <i class=" icon-layers font-blue"></i>
            <span class="caption-subject font-blue bold uppercase">Markers</span>
        </div>
        <div class="actions">
            <?php foreach ($pt as $k=>$v): ?>
                <a class="btn btn-circle  btn-default" href="javascript:;">
                    <img src="<?php echo $v; ?>" data-toggle="tooltip" title="<?php echo property_type_persian($k); ?>" />
                </a>
            <?php endforeach; ?>

            <!--            <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">-->
            <!--                <i class="icon-cloud-upload"></i>-->
            <!--            </a>-->
            <!--            <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">-->
            <!--                <i class="icon-wrench"></i>-->
            <!--            </a>-->
            <!--            <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">-->
            <!--                <i class="icon-trash"></i>-->
            <!--            </a>-->
            <!--            -->
        </div>
    </div>
    <div class="portlet-body">
        <div id="map" class="gmaps" style="position: relative; overflow: hidden;height:700px;">
        </div>
    </div>
</div>

<style>
    .swal2-container {
        z-index: 9999 !important;
    }
</style>

<script>
    var map;
    $(document).ready(function () {
        $('[data-toggle="tooltip"]').tooltip();

        map = new GMaps({
            div: '#map',
            lat: 29.613437409715356,
            lng: 52.51396867022163
        });

        <?php foreach($res as $property): ?>
        <?php

        $icon_path = @$pt[$property["property_type"]];

        ?>
        map.addMarker({
            lat: "<?php echo $property['lat']; ?>",
            lng: "<?php echo $property['lng']; ?>",
            icon: "<?php echo $icon_path; ?>",
            click: function (e) {
                App.blockUI();
                var get_property_info = new Promise((resolve) => {
                    $.get('<?php echo base_url("property/property_summary?id={$property['id']}"); ?>', function (data) {
                        resolve(data);
                    });
                });
                get_property_info.then(function (data) {
                    App.unblockUI();
                    swal({
                        title: '',
//                        type: 'info',
                        html: data,
                        width: "800px",
                        showCloseButton: true,
                        showCancelButton: false,
                        focusConfirm: false,
                        confirmButtonText: 'بستن',
                        target: document.getElementById('rtl-container')
                    });

                });
            }
        });
        <?php endforeach; ?>


//        GMaps.geocode({
//            address: $('#address').val(),
//            callback: function (results, status) {
//                if (status == 'OK') {
//                    var latlng = results[0].geometry.location;
//                    map.setCenter(latlng.lat(), latlng.lng());
//                    map.addMarker({
//                        draggable: true,
//                        lat: latlng.lat(),
//                        lng: latlng.lng(),
//                        dragend: function (event) {
//                            var lat = event.latLng.lat();
//                            var lng = event.latLng.lng();
//                            $("#lat").val(lat);
//                            $("#lng").val(lng);
//                            console.log($("#lat").val());
//                            console.log($("#lng").val());
//                        }
//                    });
//
//                }
//            }
//        });

    });
</script>

