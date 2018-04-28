<link href="<?php echo base_url('assets/datepick') ?>/bootstrap-datetimepicker.css" rel="stylesheet">
<script src="<?php echo base_url('assets/datepick') ?>/moment-with-locales.js"></script>
<script src="<?php echo base_url('assets/datepick') ?>/bootstrap-datetimepicker.js"></script>
<script src="<?php echo base_url().'/assets/global/plugins/typeahead/typeahead.bundle.min.js' ?>"></script>
<link rel="stylesheet" href="<?php echo base_url().'assets/global/plugins/typeahead/typeahead.css' ?>" >

<?php if($show_edit_box): ?>
<div class="portlet box blue-hoki">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-plus"></i>
            <span class="caption-subject bold uppercase">
             برنامه پروازی
            </span>
        </div>
        <div class="actions">
            <?php echo portlet_action(array(
                "url"=>base_url('admin/flights'),
                "title"=>"",
                "icon"=>"icon-share-alt",
                "attrs"=>"style='transform: rotate(180deg)'")); ?>
        </div>
       <!--  <div class="tools pull-right">
          <a href="" class="fullscreen" data-original-title="" title=""> </a>
        </div> -->
    </div>
    <div class="portlet-body form">
        <form role="form" method="POST"
              action="<?php echo base_url('admin/add_flight').
              (isset($id) ? '?id='.$id : ''); ?>">
                <?php if(!empty(validation_errors())): ?>
                    <div class="alert alert-danger">
                      <?php echo validation_errors(); ?>
                    </div>
                <?php endif; ?>
                <div class="row" id="raft">
                <?php
                  $vm =new stdClass;
                  $vm->label_class = "col-md-4 control-label";
                  $vm->input_wrapper = "col-md-8";
                  $vm->classes  = "form-control";
                  $vm->use_lbl_as_placeholder = true;
                  
                  // flight_number
                  $vm->label  = "شماره پرواز";
                  $vm->id     = 'flight_number';
                  $vm->value  = set_value("flight_number",isset($flight_number) ? $flight_number : '');
                  echo form_body(VM::input($vm));

                  // flight_type
                  $vm->label  = "نوع پرواز";
                  $vm->id     = 'flight_type';
                  $vm->attrs  ="";
                  $vm->type   = 'select';
                  $vm->show_please_select = true;
                  $vm->use_value_only = false;
                  $vm->data = array("oneway"=>"رفت","roundtrip"=>"رفت و برگشت");
                  $vm->selected_options  = set_value("flight_type",isset($flight_type) ? $flight_type : '');
                  echo form_body(VM::input($vm));

                  // // source_airport
                  // $vm->label  = "فرودگاه مبدا";
                  // $vm->id     = 'source_airport';
                  // $vm->attrs  ="";
                  // $vm->type   ='text';
                  // $vm->value  = set_value("source_airport_desc",isset($source_airport_desc) ? $source_airport_desc : '');
                  // echo form_body(VM::input($vm));

                  // // destination airport
                  // $vm->label  = "فرودگاه مبدا";
                  // $vm->id     = 'destination_airport';
                  // $vm->attrs  = "";
                  // $vm->type   = 'text';
                  // $vm->value  = set_value("destination_airport_desc",isset($destination_airport_desc) ? $destination_airport_desc : '');
                  // echo form_body(VM::input($vm));

                  // path 
                  $vm->label  = "مسیر پرواز";
                  $vm->id     = 'path_info';
                  $vm->attrs  ="";
                  $vm->type   ='text';
                  $vm->value  = set_value("path_info",isset($path_info) ? $path_info : '');
                  echo form_body(VM::input($vm));

                  // flight_datetime_out
                  $vm->label  = "تاریخ و ساعت خروج(محلی)";
                  $vm->id     = 'flight_datetime_out';
                  $vm->attrs  = "";
                  $vm->value  = "";
                  // $vm->value  = set_value("flight_datetime_out",isset($flight_datetime_out) ? $flight_datetime_out : '');
                  echo form_body(VM::input($vm));

                  // flight_datetime_in
                  $vm->label  = "تاریخ و ساعت ورود(محلی)";
                  $vm->id     = 'flight_datetime_in';
                  $vm->attrs  ="";
                  $vm->value  = set_value("flight_datetime_in",isset($flight_datetime_in) ? $flight_datetime_in : '');
                  echo form_body(VM::input($vm));

                  // flight_time
                  $vm->label  = "مدت زمان پرواز";
                  $vm->id     = 'flight_time';
                  $vm->attrs  ="";
                  $vm->value  = set_value("flight_time",isset($flight_time) ? $flight_time : '');
                  echo form_body(VM::input($vm));

                  // airplan
                  $vm->label  = "نوع هواپیما";
                  $vm->id     = 'airplan';
                  $vm->attrs  = "";
                  $vm->type   = 'select';
                  $vm->data = $airplanes;
                  $vm->selected_options  = set_value("airplan",isset($airplan) ? $airplan : '');
                  echo form_body(VM::input($vm));

                  // flight_class
                  $vm->label  = "کلاس پروازی";
                  $vm->id     = 'flight_class';
                  $vm->attrs  = "";
                  $vm->type   = 'select';
                  $vm->data = $flight_classes;
                  $vm->selected_options  = set_value("flight_class",isset($flight_class) ? $flight_class : '');
                  echo form_body(VM::input($vm));

                  // airline
                  $vm->label  = "شرکت هواپیمایی";
                  $vm->id     = 'airline';
                  $vm->attrs  = "";
                  $vm->type   = 'select';
                  $vm->data = $airlines;
                  $vm->selected_options  = set_value("airline",isset($airline) ? $airline : '');
                  echo form_body(VM::input($vm));
                ?>   
                </div>                 
                <div class="row" id="bargasht" 
                      style="<?php (isset($flight_type) && $flight_type=='roundtrip') ? 
                                  '':'display:none;'; ?>">
                  <hr>
                    <div class='col-xs-4'></div>
                    <div class="col-xs-8">
                      <span class="btn btn-sm btn-circle"
                        style='background-color:grey;'>مشخصات برواز برگشت</span>
                    </div>
                    
                  <?php 

                  // flight_number
                  $vm->label  = "شماره پرواز";
                  $vm->id     = 'flight_number_back';
                  $vm->type   = 'text';
                  $vm->value  = set_value("flight_number_back",isset($flight_number_back) ? $flight_number_back : '');
                  echo form_body(VM::input($vm));

                   // flight_datetime_out
                  $vm->label  = "تاریخ و ساعت خروج(محلی)";
                  $vm->id     = 'flight_datetime_out_back';
                  $vm->attrs  = "";
                  $vm->value  = "";
                  // $vm->value  = set_value("flight_datetime_out",isset($flight_datetime_out) ? $flight_datetime_out : '');
                  echo form_body(VM::input($vm));

                  // flight_datetime_in
                  $vm->label  = "تاریخ و ساعت ورود(محلی)";
                  $vm->id     = 'flight_datetime_in_back';
                  $vm->attrs  ="";
                  $vm->value  = set_value("flight_datetime_in_back",isset($flight_datetime_in_back) ? $flight_datetime_in_back : '');
                  echo form_body(VM::input($vm));

                  // flight_time
                  $vm->label  = "مدت زمان پرواز";
                  $vm->id     = 'flight_time_back';
                  $vm->attrs  ="";
                  $vm->value  = set_value("flight_time_back",isset($flight_time_back) ? $flight_time_back : '');
                  echo form_body(VM::input($vm));

                  // airplan
                  $vm->label  = "نوع هواپیما";
                  $vm->id     = 'airplan_back';
                  $vm->attrs  = "";
                  $vm->type   = 'select';
                  $vm->data = $airplanes;
                  $vm->selected_options  = set_value("airplan_back",isset($airplan_back) ? $airplan_back : '');
                  echo form_body(VM::input($vm));

                  // flight_class
                  $vm->label  = "کلاس پروازی";
                  $vm->id     = 'flight_class_back';
                  $vm->attrs  = "";
                  $vm->type   = 'select';
                  $vm->data = $flight_classes;
                  $vm->selected_options  = set_value("flight_class_back",isset($flight_class_back) ? $flight_class_back : '');
                  echo form_body(VM::input($vm));

                  // airline
                  $vm->label  = "شرکت هواپیمایی";
                  $vm->id     = 'airline_back';
                  $vm->attrs  = "";
                  $vm->type   = 'select';
                  $vm->data = $airlines;
                  $vm->selected_options  = set_value("airline_back",isset($airline_back) ? $airline_back : '');
                  echo form_body(VM::input($vm));
                  ?>
                </div>

            <div class="form-actions">
                <input type="hidden" name="action" value="<?php echo $action; ?>"/>
                <input type="hidden" name="id" value="<?php echo isset($id) ? $id : ''; ?>" />
                <input type="hidden" name="path_id" id="path_id" 
                  value="<?php echo isset($path_id) ? $path_id : ''; ?>"/>
                <button type="submit" class="btn blue btn-circle">
                      <i class="fa fa-check"></i>
                  ثبت
                </button>
            </div>
        </form>


    </div>
</div>
<?php endif; ?>

<script>
    $(document).ready(function () 
    {
      var airport_suggestion = new Bloodhound({
          datumTokenizer: Bloodhound.tokenizers.whitespace,
          queryTokenizer: Bloodhound.tokenizers.whitespace,
          // prefetch: '../data/films/post_1960.json',
          remote: {
            url: "<?php echo base_url('admin/airport_suggestions?term=%QUERY'); ?>",
            wildcard: '%QUERY'
          }
        });

      var path_suggestions = new Bloodhound({
          datumTokenizer: Bloodhound.tokenizers.obj.whitespace('name'),
          queryTokenizer: Bloodhound.tokenizers.whitespace,
          // prefetch: '../data/films/post_1960.json',
          remote: {
            url: "<?php echo base_url('admin/path_suggestions?term=%QUERY'); ?>",
            wildcard: '%QUERY'
          }
        });

      // $("#source_airport,#destination_airport").typeahead(null,{
      //   name:'airport_suggestion',
      //   // display:'value',
      //   source:airport_suggestion
      // });

      $('#path_info').typeahead(
          null,{
            name: 'path_suggestions',
            displayKey: 'name',
            source:path_suggestions.ttAdapter()
       }).on('typeahead:selected',function(event,data){
          console.log(data);
           $('#path_info').val(data.id);
           $("#path_id").val(data.id);
       });
      
    });
</script>

<script>
    $(document).ready(function () {
        $('#err_loc').delay(5000).fadeOut();
        $('#num_back').fadeOut();
        if ($('#flight_type').val() == 2) {
            $('#num_back').fadeIn();
        }
        $('#flight_type').change(function () {
            if ($(this).val() == 2) {
                $('#num_back').fadeIn();
            } else {
                $('#num_back').fadeOut();
            }

        });

        $('#ss').change(function () {
            var z = $(this).val();
            $('input#source_fly').val(z);
            $('#ss').fadeOut();
        });
        $('#ss2').change(function () {
            var z = $(this).val();
            $('input#destination_fly').val(z);
            $('#ss2').fadeOut();
        });
        $('#1way').click(function () {
            $('#rev').fadeOut();
            $('.out2').val('');

        });
        $('#2way').click(function () {
            $('#rev').fadeIn();
        });
    });
</script>

<script type="text/javascript">
  $(document).ready(function()
  {
    $("#flight_datetime_in").val(
        "<?php echo isset($flight_date_in) ? $flight_date_in.' '.$flight_time_in:''; ?>"
      );
    $("#flight_datetime_out").val(
        "<?php echo (isset($flight_date_out)) ?  $flight_date_out . ' ' . $flight_time_out:''; ?>"
      );
    
    $("#flight_datetime_in_back").val(
        "<?php echo isset($flight_date_in_back) ? $flight_date_in_back.' '.$flight_time_in_back:''; ?>"
      );
    $("#flight_datetime_out_back").val(
        "<?php echo (isset($flight_date_out_back)) ?  $flight_date_out_back . ' ' . $flight_time_out_back:''; ?>"
      );

      $('#flight_datetime_out,#flight_datetime_in,#flight_datetime_out_back,#flight_datetime_in_back').datetimepicker({
            sideBySide: true,
            format: 'YYYY-MM-DD HH:mm',
            locale: 'en',
       });  

      $('#flight_time,#flight_time_back').datetimepicker({
          sideBySide: true,
          format: 'HH:mm',
          locale: 'en',
      });

      $('#flight_type').change(function(e){
        // console.log($(this).val());
        if($(this).val()=='roundtrip'){
          $("#bargasht").fadeIn();
        }else{
          $("#bargasht").fadeOut();
        }
      });

  });

</script>
