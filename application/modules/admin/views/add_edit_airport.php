<div class="portlet box green">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-plus"></i>
            <span class="caption-subject bold uppercase">
              مسیر پروازی جدید
            </span>
        </div>
        <div class="actions">
            <?php echo portlet_action(array(
                "url"=>base_url('admin/airports'),
                "title"=>"فرودگاه ها")); ?>
        </div>
    </div>
    <div class="portlet-body form">
        <form role="form" method="POST" 
              action="<?php echo base_url('admin/add_airport'); ?>">
                <?php if(!empty(validation_errors())): ?>
                    <div class="alert alert-danger">
                      <?php echo validation_errors(); ?>
                    </div>
                <?php endif; ?>
                <div class="row">
                <?php
                  $vm =new stdClass;
                  $vm->label_class = "col-md-4 control-label";
                  $vm->input_wrapper = "col-md-8";
                  $vm->classes  = "form-control";
                  $vm->use_lbl_as_placeholder = true;
                  
                  // source
                  $vm->label  = "کد یاتا";
                  $vm->id     = 'code';
                  $vm->value  = set_value("code",isset($code) ? $code : '');
                  // if($action=="update") $vm->attrs="readonly";
                  echo form_body(VM::input($vm));

                  // destination
                  $vm->label  = "نام فرودگاه-فارسی";
                  $vm->id     = 'fa_name';
                  $vm->attrs  ="";
                  $vm->value  = set_value("fa_name",isset($fa_name) ? $fa_name : '');
                  // if($action == "update") $vm->attrs="readonly";
                  echo form_body(VM::input($vm));

                  // destination
                  $vm->label  = "نام فرودگاه-انگلیسی";
                  $vm->id     = 'en_name';
                  $vm->attrs  ="";
                  $vm->value  = set_value("en_name",isset($en_name) ? $en_name : '');
                  // if($action == "update") $vm->attrs="readonly";
                  echo form_body(VM::input($vm));

                  // fa_cityname
                  $vm->label  = "شهر-فارسی";
                  $vm->id     = 'fa_cityname';
                  $vm->attrs  ="";
                  $vm->value  = set_value("fa_cityname",isset($fa_cityname) ? $fa_cityname : '');
                  // if($action == "update") $vm->attrs="readonly";
                  echo form_body(VM::input($vm));

                  // en_cityname
                  $vm->label  = "شهر-انگلیسی";
                  $vm->id     = 'en_cityname';
                  $vm->attrs  ="";
                  $vm->value  = set_value("en_cityname",isset($en_cityname) ? $en_cityname : '');
                  // if($action == "update") $vm->attrs="readonly";
                  echo form_body(VM::input($vm));

                  // fa_countryname
                  $vm->label  = "کشور-فارسی";
                  
                  $vm->id     = 'fa_countryname';
                  $vm->attrs  ="";
                  $vm->value  = set_value("fa_countryname",isset($fa_countryname) ? $fa_countryname : '');
                  // if($action == "update") $vm->attrs="readonly";
                  echo form_body(VM::input($vm));

                  // en_countryname
                  $vm->label  = "کشور-انگلیسی";
                  $vm->id     = 'en_countryname';
                  $vm->attrs  ="";
                  $vm->value  = set_value("en_countryname",isset($en_countryname) ? $en_countryname : '');
                  // if($action == "update") $vm->attrs="readonly";
                  echo form_body(VM::input($vm));
                ?>   
              </div>                 
              <div class="row">
                
                  <div class="form-group col-xs-6">
                      <label for="latitude" class="col-md-4">lat</label>
                      <div class="col-md-8">
                          <input type="text" value="" class="span6 typeahead form-control" 
                          name="lat" readonly="" id="latitude" data-provide="typeahead" data-items="4">
                      </div>
                  </div>
                
                <div class="form-group col-xs-6">
                  <label for="longitude" class="col-md-4">long</label>
                  <div class="col-md-8">
                      <input type="text" value="" class="span6 typeahead form-control" 
                      name="lng" readonly="" id="longitude" data-provide="typeahead" data-items="4">
                  </div>
                </div>
                <div class="col-xs-12">
                <div class="control-group">
                        <h3>Select Destination On Map</h3>
                        <div class="form-group">
                                <div class="col-md-12">
                                        <section id="place-on-map">
                                                <label for="address-map" style="padding-top:10px">Drag & Drop the Pointer </label>
                                                <div id="myMap" style="  height: 350px; width: 100%;"></div>
                                                <br/>
                                                <div>
                                                </div>
                                        </section>
                                </div>
                        </div>
                </div>
                </div>
            </div>         

            <div class="form-actions">
                <input type="hidden" name="action" value="<?php echo $action; ?>"/>
                <input type="hidden" name="id" value="<?php echo isset($id) ? $id : ''; ?>" />
                <button type="submit" class="btn blue btn-circle">ثبت</button>
            </div>
        </form>

          <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDr0QlYmeaq-rAB-nvpcJ9fPx5ea7j2OnU&callback=initMap"> </script>
         

          <script type="text/javascript"> 

        <?php if(isset($lat)): ?>
           var _latitude = '<?php echo $lat; ?>' 
           <?php else: ?> 
            var _latitude = 29.613437409715356; 
            <?php endif; ?>;
  <?php if(isset($lng)): ?>  
    var _longitude = '<?php echo $lng; ?>'
     <?php else: ?>  
     var _longitude = 52.51396867022163; 
     <?php endif; ?>;
              var map;
            var marker;
            var myLatlng = new google.maps.LatLng(_latitude,_longitude);
            var geocoder = new google.maps.Geocoder();
            var infowindow = new google.maps.InfoWindow();
            function initMap(){
                var mapOptions = {
                    zoom: 9,
                    center: myLatlng,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                };
           
                map = new google.maps.Map(document.getElementById("myMap"), mapOptions);
                
                marker = new google.maps.Marker({
                    map: map,
                    position: myLatlng,
                    draggable: true 
                });     
                
                geocoder.geocode({'latLng': myLatlng }, function(results, status) {
                    if (status == google.maps.GeocoderStatus.OK) {
                        if (results[0]) {
                            $('#address').val(results[0].formatted_address);
                            $('#latitude').val(marker.getPosition().lat());
                            $('#longitude').val(marker.getPosition().lng());
                            infowindow.setContent(results[0].formatted_address);
                            infowindow.open(map, marker);
                        }
                    }
                });

                               
                google.maps.event.addListener(marker, 'dragend', function() {

                geocoder.geocode({'latLng': marker.getPosition()}, function(results, status) {
                    if (status == google.maps.GeocoderStatus.OK) {
                        if (results[0]) {
                            $('#address').val(results[0].formatted_address);
                            $('#latitude').val(marker.getPosition().lat());
                            $('#longitude').val(marker.getPosition().lng());
                            infowindow.setContent(results[0].formatted_address);
                            infowindow.open(map, marker);
                        }
                    }
                });
            });
            
            }
            
            google.maps.event.addDomListener(window, 'load', initMap);
        

              $(document).ready(function()
              {
                var airports_suggestions = new Bloodhound({
                  datumTokenizer: Bloodhound.tokenizers.whitespace,
                  queryTokenizer: Bloodhound.tokenizers.whitespace,
                  // prefetch: '../data/films/post_1960.json',
                  remote: {
                    url: "<?php echo base_url('admin/airport_suggestions?term=%QUERY'); ?>",
                    wildcard: '%QUERY'
                  }
                });

                $('#source').typeahead(null,{
                  name: 'best-pictures',
                  source: airports_suggestions
                 });
                $('#destination').typeahead(null,{
                  name: 'best-pictures',
                  source: airports_suggestions
                 });

              });
            </script>

    </div>
</div>

