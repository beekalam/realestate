<?php if (true): ?>
    <?php
    $address = "";
    if (!($property["lat"] && $property["lng"])) {
        $address = "شیراز " . $property["street"] . " " . $property["alley"];
    }
    ?>
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
            <form class="form-inline margin-bottom-10" action="#">
                <div class="input-group">
                    <input type="text" class="form-control" id="address" placeholder="address..."
                           value="<?php echo $address; ?>" readonly="readonly">
                    <span class="input-group-btn">
                       <button class="btn blue" id="gmap_geocoding_btn">
                                <i class="fa fa-search"></i>
                       </button>
                    </span>
                </div>
            </form>
            <div id="map" class="gmaps" style="position: relative; overflow: hidden;">

            </div>

            <form style="" method="post" action="<?php echo base_url("admin/update_property_pos"); ?>">
                <input type="hidden" name="property_id" value="<?php echo $property_id; ?>">
                <input type="hidden" name="lat" id="lat" value="<?php echo $property["lat"]; ?>">
                <input type="hidden" name="lng" id="lng" value="<?php echo $property["lng"]; ?>">
                <input type="submit" value="submit">
            </form>
        </div>
    </div>


<!--    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDr0QlYmeaq-rAB-nvpcJ9fPx5ea7j2OnU"></script>-->
<!--    <script type="text/javascript" src="https://hpneo.github.io/gmaps/gmaps.js"></script>-->

    <script>
        var map;
        $(document).ready(function () {


            <?php if( ($property["lat"] && $property["lng"])): ?>
            var _lat = "<?php echo $property["lat"]; ?>";
            var _lng = "<?php echo $property["lng"]; ?>";
            map = new GMaps({
                div: '#map',
                lat: _lat,
                lng: _lng
            });
            map.setCenter(_lat, _lng);
            map.addMarker({
                draggable: true,
                lat: _lat,
                lng: _lng,
                dragend: function (event) {
                    var lat = event.latLng.lat();
                    var lng = event.latLng.lng();
                    $("#lat").val(lat);
                    $("#lng").val(lng);
                }
            });
            <?php else: ?>
            map = new GMaps({
                div: '#map',
                lat: 29.613437409715356,
                lng: 52.51396867022163
            });

            GMaps.geocode({
                address: $('#address').val(),
                callback: function (results, status) {
                    if (status == 'OK') {
                        var latlng = results[0].geometry.location;
                        map.setCenter(latlng.lat(), latlng.lng());
                        map.addMarker({
                            draggable: true,
                            lat: latlng.lat(),
                            lng: latlng.lng(),
                            dragend: function (event) {
                                var lat = event.latLng.lat();
                                var lng = event.latLng.lng();
                                $("#lat").val(lat);
                                $("#lng").val(lng);
                                console.log($("#lat").val());
                                console.log($("#lng").val());
                            }
                        });

                    }
                }
            });
            <?php endif; ?>
            $("body").mousemove(function (event) {
//                console.log(map.markers[0]);
//                console.log(map.markers[0].position);
//               console.log(map.markers[0].lat);
            });
        });
    </script>
<?php endif; ?>


<?php if (false): ?>
    <!DOCTYPE html>
    <html>
    <head>
        <title>gmaps.js &mdash; the easiest way to use Google Maps</title>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <!--    <script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=true"></script>-->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDr0QlYmeaq-rAB-nvpcJ9fPx5ea7j2OnU"></script>
        <script type="text/javascript" src="https://hpneo.github.io/gmaps/gmaps.js"></script>
        <script type="text/javascript" src="https://hpneo.github.io/gmaps/prettify/prettify.js"></script>
        <link href='https://fonts.googleapis.com/css?family=Convergence|Bitter|Droid+Sans|Ubuntu+Mono' rel='stylesheet'
              type='text/css'/>
        <link href='https://hpneo.github.io/gmaps/styles.css' rel='stylesheet' type='text/css'/>
        <link href='https://hpneo.github.io/gmaps/prettify/prettify.css' rel='stylesheet' type='text/css'/>

        <script type="text/javascript">
            var map;
            $(document).ready(function () {
//            prettyPrint();

                map = new GMaps({
                    div: '#map',
                    lat: -12.043333,
                    lng: -77.028333
                });

//            GMaps.geocode({
//                address: $('#address').val(),
//                callback: function (results, status) {
//                    if (status == 'OK') {
//                        var latlng = results[0].geometry.location;
//                        map.setCenter(latlng.lat(), latlng.lng());
//                        map.addMarker({
//                            lat: latlng.lat(),
//                            lng: latlng.lng()
//                        });
//                    }
//                }
//            });

                // map.addMarker({
                //   lat: -12.043333,
                //   lng: -77.028333,
                //   draggable: true,
                //   // fences: [polygon],
                //   // outside: function(marker, fence) {
                //     // alert('This marker has been moved outside of its fence');
                //   // }
                // });

            });
        </script>
    </head>
    <body>
    <div id="header">
        <h1>
            <a href="../">gmaps.js</a>
        </h1>
        <h2>Google Maps API with less pain and more fun</h2>
    </div>
    <div id="body">
        <h3>Basic</h3>
        <div class="row">
            <div class="span11">
                <div class="popin">
                    <form method="post" id="geocoding_form">
                        <label for="address">Address:</label>
                        <div class="input">
                            <input type="text" id="address" name="address" value="شیراز بلوار چمران کوچه 2">
                            <input type="submit" class="btn" value="Search">
                        </div>
                    </form>

                    <div id="map"></div>
                </div>
            </div>
            <div class="span6">
                <p>Using GMaps.js is as easy as:</p>
                <pre class="prettyprint">new GMaps({
  div: '#map',
  lat: -12.043333,
  lng: -77.028333
});</pre>
                <p>You must define <strong>container ID</strong>, <strong>latitude</strong> and
                    <strong>longitude</strong>
                    of the map's center.</p>
                <p><span class="label notice">Note</span>You also can define <strong>zoom</strong>,
                    <strong>width</strong>
                    and <strong>height</strong>. By default, zoom is 15. Width an height in a CSS class will replace
                    these
                    values.</p>
                <p><span class="label notice">Note</span>Map types are defined in the <strong>mapType</strong> property.
                    Allowed values are: <strong>roadmap</strong> (default), <strong>satellite</strong>,
                    <strong>hybrid</strong> and <strong>terrain</strong>.</p>
            </div>
        </div>
    </div>
    </body>
    </html>
<?php endif; ?>
