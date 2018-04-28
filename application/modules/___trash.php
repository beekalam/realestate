<div class="row">

<?php foreach($flight_paths as $fp): ?>
  <?php //pre($fp); ?>
  <div class="col-xs-6">
  <div class="portlet box blue-hoki">
      <div class="portlet-title">
          <div class="caption">
              <i class="fa fa-paper-plane"></i>
              <span class="caption-subject bold uppercase">
                مشخصات پرواز
              </span>
          </div>
          <div class="actions">
            <?php echo portlet_action(array(
                                  "url"=>base_url('admin/add_flight?id=' . $fp["id"]),
                                  "title"=>"ویرایش",
                                  "icon"=>"fa fa-pencil")); ?> 
            <?php echo portlet_action(array(
                                  "url"=>base_url('admin/add_flight?id=' . $fp["id"]),
                                  "title"=>"حذف",
                                  "icon"=>"fa fa-trash")); ?>                                   
          </div>
      </div>
      <div class="portlet-body">
        <div class="mt-element-list">
            <div class="mt-list-head list-simple ext-1 font-white bg-green-sharp">
                <div class="list-head-title-container">
                    <div class="list-date">
                        <?php if($fp["flight_type"] == 1): ?>
                        <i class="fa fa-plane plane-raft"></i>
                      <?php else: ?>
                        <i class="fa fa-plane plane-bargasht"></i>
                      <?php endif; ?>
                    </div>
                    <h3 class="list-title pf-13-bold">
                      پرواز(<?php echo $fp["flight_type"] == '1' ? "رفت":"برگشت"; ?>)</h3>
                </div>
            </div>
            <div class="mt-list-container list-simple ext-1">
                <ul>
                    <li class="mt-list-item done">
                      <div class="pull-left">شماره پرواز</div>
                      <div class="pull-right"><?php echo $fp["flight_number"]; ?></div>
                    </li>

                    <li class="mt-list-item">
                      <div class="pull-left">فرودگاه مبدا</div>
                      <div class="pull-right"><?php echo $fp["source_airport_desc"]; ?></div>
                    </li>

                    <li class="mt-list-item done">
                      <div class="pull-left">فرودگاه مقصد</div>
                      <div class="pull-right"><?php echo $fp["destination_airport_desc"]; ?></div>
                    </li>

                    <li class="mt-list-item">
                      <div class="pull-left">تاریخ خروج</div>
                      <div class="pull-right"><?php echo $fp["flight_date_out"]; ?></div>
                    </li>

                    <li class="mt-list-item done">
                      <div class="pull-left">ساعت خروج</div>
                      <div class="pull-right"><?php echo $fp["flight_time_out"]; ?></div>
                    </li>

                    <li class="mt-list-item">
                      <div class="pull-left">تاریخ ورود</div>
                      <div class="pull-right"><?php echo $fp["flight_date_in"]; ?></div>
                    </li>

                    <li class="mt-list-item done">
                      <div class="pull-left">ساعت ورود</div>
                      <div class="pull-right"><?php echo $fp["flight_time_in"]; ?></div>
                    </li>

                    <li class="mt-list-item">
                      <div class="pull-left">مدت زمان پرواز</div>
                      <div class="pull-right"><?php echo $fp["flight_time"]; ?></div>
                    </li>

                    <li class="mt-list-item done">
                      <div class="pull-left">نوع هواپیما</div>
                      <div class="pull-right"><?php echo $fp["airplan_desc"]; ?></div>
                    </li>

                    <li class="mt-list-item">
                      <div class="pull-left">کلاس هواپیما</div>
                      <div class="pull-right"><?php echo $fp["flight_class_desc"]; ?></div>
                    </li>

                    <li class="mt-list-item done">
                      <div class="pull-left">شرکت هواپیمایی</div>
                      <div class="pull-right"><?php echo $fp["airline_desc"]; ?></div>
                    </li>                                        

                </ul>
            </div>
        </div>
      </div>
  </div>
  </div>
<?php endforeach; ?>
</div>





    // var_dump($this->Settings_model->get_settings_data());
    // echo "<pre>";
    // var_dump($this->Countries_model->get_all_countries());
    // var_dump($this->Countries_model->country_details("Egypt"));

    // echo "</pre>";
    // pre($this->Hotels_model->all_hotels_names());
    // pre($this->Hotels_model->all_hotels());
    // pre($this->Hotels_model->get_hotel_data("Rendezvous-Hotels"));
       // pre($this->Rooms_model->getRoomData(5));
    // pre($this->Tours_model->shortInfo());
    // pre($this->Tours_model->all_tours_names());
    // pre($this->Tours_model->all_tours());
    // pre($this->Tours_model->get_tour_data("Hurghada"));














      
   <style>
  .mt-element-list .list-simple.ext-1.mt-list-container ul>.mt-list-item {
    padding: 15px !important;
    padding-bottom: 25px !important;
    padding-left: 7px !important;
    padding-right: 7px !important;
    padding-top: 6px !important;
    border-right: 3px solid !important;
    border-color: #34495e #34495e #e7ecf1 !important;
    margin-bottom: 5px !important;
  }
  .plane-raft{
      transform: rotate(-90deg) !important;
      font-size: 23px !important;
      float: left !important;
      /*color:red;*/
  }
  .plane-bargasht{
      transform: rotate(90deg) !important;
      font-size: 23px !important;
      float: left !important;
      /*color:green;*/
  }
  
</style>

<div class="row">

  <?php foreach( (isset($flight_paths) ? $flight_paths:array()) as $fp): ?>
    <?php //pre($fp); ?>
    <div class="col-xs-6">
    <div class="portlet box blue-hoki">
        <div class="portlet-title">
            <div class="caption">
                <i class="fa fa-paper-plane"></i>
                <span class="caption-subject bold uppercase">
                  مشخصات پرواز
                </span>
            </div>
            <div class="actions">
              <?php echo portlet_action(array(
                                    "url"=>base_url('admin/add_flight?id=' . $fp["id"]),
                                    "title"=>"ویرایش",
                                    "icon"=>"fa fa-pencil")); ?> 
              <?php echo portlet_action(array(
                                    "url"=>base_url('admin/add_flight?id=' . $fp["id"]),
                                    "title"=>"حذف",
                                    "icon"=>"fa fa-trash")); ?>                                   
            </div>
        </div>
        <div class="portlet-body">
          <div class="mt-element-list">
              <div class="mt-list-head list-simple ext-1 font-white bg-green-sharp">
                  <div class="list-head-title-container">
                      <div class="list-date">
                          <?php if($fp["flight_type"] == 1): ?>
                          <i class="fa fa-plane plane-raft"></i>
                        <?php else: ?>
                          <i class="fa fa-plane plane-bargasht"></i>
                        <?php endif; ?>
                      </div>
                      <h3 class="list-title pf-13-bold">
                        پرواز(<?php echo $fp["flight_type"] == '1' ? "رفت":"برگشت"; ?>)</h3>
                  </div>
              </div>
              <div class="mt-list-container list-simple ext-1">
                  <ul>
                      <li class="mt-list-item done">
                        <div class="pull-left">شماره پرواز</div>
                        <div class="pull-right"><?php echo $fp["flight_number"]; ?></div>
                      </li>

                      <li class="mt-list-item">
                        <div class="pull-left">فرودگاه مبدا</div>
                        <div class="pull-right"><?php echo $fp["path_info"]["source_airport_desc"]; ?></div>
                      </li>

                      <li class="mt-list-item done">
                        <div class="pull-left">فرودگاه مقصد</div>
                        <div class="pull-right"><?php echo $fp["path_info"]["destination_airport_desc"]; ?></div>
                      </li>

                      <li class="mt-list-item">
                        <div class="pull-left">تاریخ خروج</div>
                        <div class="pull-right"><?php echo $fp["flight_date_out"]; ?></div>
                      </li>

                      <li class="mt-list-item done">
                        <div class="pull-left">ساعت خروج</div>
                        <div class="pull-right"><?php echo $fp["flight_time_out"]; ?></div>
                      </li>

                      <li class="mt-list-item">
                        <div class="pull-left">تاریخ ورود</div>
                        <div class="pull-right"><?php echo $fp["flight_date_in"]; ?></div>
                      </li>

                      <li class="mt-list-item done">
                        <div class="pull-left">ساعت ورود</div>
                        <div class="pull-right"><?php echo $fp["flight_time_in"]; ?></div>
                      </li>

                      <li class="mt-list-item">
                        <div class="pull-left">مدت زمان پرواز</div>
                        <div class="pull-right"><?php echo $fp["flight_time"]; ?></div>
                      </li>

                      <li class="mt-list-item done">
                        <div class="pull-left">نوع هواپیما</div>
                        <div class="pull-right"><?php echo $fp["airplan_desc"]; ?></div>
                      </li>

                      <li class="mt-list-item">
                        <div class="pull-left">کلاس هواپیما</div>
                        <div class="pull-right"><?php echo $fp["flight_class_desc"]; ?></div>
                      </li>

                      <li class="mt-list-item done">
                        <div class="pull-left">شرکت هواپیمایی</div>
                        <div class="pull-right"><?php echo $fp["airline_desc"]; ?></div>
                      </li>                                        

                  </ul>
              </div>
          </div>
        </div>
    </div>
    </div>
  <?php endforeach; ?>

</div>


======================================================================================


   // path 
                  $vm->label  = "path_info";
                  $vm->id     = 'path_info';
                  $vm->attrs  ="";
                  $vm->type   ='text';
                  $vm->value  = set_value("path",isset($path_info) ? $path_info : '');
                  echo form_body(VM::input($vm));
<script>
    $(document).ready(function () 
    {
      var path_suggestions = new Bloodhound({
          datumTokenizer: Bloodhound.tokenizers.obj.whitespace('name'),
          queryTokenizer: Bloodhound.tokenizers.whitespace,
          // prefetch: '../data/films/post_1960.json',
          remote: {
            url: "<?php echo base_url('admin/path_suggestions?term=%QUERY'); ?>",
            wildcard: '%QUERY'
          }
        });

      $('#path_info').typeahead(
          null,{
            name: 'path_suggestions',
            displayKey: 'name',
            source:path_suggestions.ttAdapter()
       }).on('typeahead:selected',function(event,data){
          console.log(data);
           $('#path_info').val(data.id);
           $("#path_info_id").val(data.id);
       });
      //  });
    });
</script>

======================================================================================











                  