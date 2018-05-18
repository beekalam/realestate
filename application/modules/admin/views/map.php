<div class="page-bar"></div>

<div class="portlet light portlet-fit ">
    <div class="portlet-title">
        <div class="caption">
            <i class=" icon-layers font-blue"></i>
            <span class="caption-subject font-blue bold uppercase">Markers</span>
        </div>
        <div class="actions">
            <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                <i class="icon-cloud-upload"></i>
            </a>
            <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                <i class="icon-wrench"></i>
            </a>
            <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                <i class="icon-trash"></i>
            </a>
        </div>
    </div>
    <div class="portlet-body">
        <div id="map" class="gmaps" style="position: relative; overflow: hidden;height:700px;">
        </div>
    </div>
</div>

<script>
    var map;
    $(document).ready(function () {

        map = new GMaps({
            div: '#map',
            lat: 29.613437409715356,
            lng: 52.51396867022163
        });

        <?php foreach($res as $property): ?>
        map.addMarker({
            lat: "<?php echo $property['lat']; ?>",
            lng: "<?php echo $property['lng']; ?>",
            click: function (e) {
                App.blockUI();
                var get_property_info = new Promise((resolve) => {
                    $.get('<?php echo base_url("admin/property_summary?id={$property['id']}"); ?>', function (data) {
                        resolve(data);
                    });
                });
                get_property_info.then(function (data) {
                    App.unblockUI();
                    swal({
                        title: '',
                        type: 'info',
                        html: data,
                        width: "800px",
                        showCloseButton: true,
                        showCancelButton: true,
                        focusConfirm: false,
                        confirmButtonText: 'ok',
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

