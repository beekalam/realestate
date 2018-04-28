        
<script src="<?php echo base_url().'/assets/global/plugins/typeahead/typeahead.bundle.min.js' ?>"></script>
<link rel="stylesheet" href="<?php echo base_url().'assets/global/plugins/typeahead/typeahead.css' ?>" >

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
                "url"=>base_url('admin/path_info'),
                // "title"=>"مسیرهای پروازی",
                "icon"=>"icon-share-alt",
                "attrs"=>"style='transform: rotate(180deg)'")); ?>
        </div>
    </div>
    <div class="portlet-body form">
        <form role="form" method="POST" 
              action="<?php echo base_url('admin/add_flight_path'); ?>">
                <?php if(!empty(validation_errors())): ?>
                    <div class="alert alert-danger">
                      <?php echo validation_errors(); ?>
                    </div>
                <?php endif; ?>
                <div class="row">
                <?php
                  $vm =new stdClass;
                  $vm->label_class = "col-md-3 control-label";
                  $vm->input_wrapper = "col-md-9";
                  $vm->classes  = "form-control";
                  
                  // source
                  $vm->label  = "مبدا";
                  $vm->id     = 'source';
                  $vm->value  = set_value("source",isset($source_desc) ? $source_desc : '');
                  if($action=="update") $vm->attrs="readonly";
                  echo form_body(VM::input($vm));

                  // destination
                  $vm->label  = "مقصد";
                  $vm->id     = 'destination';
                  $vm->attrs  ="";
                  $vm->value  = set_value("destination",isset($destination_desc) ? $destination_desc : '');
                  if($action == "update") $vm->attrs="readonly";
                  echo form_body(VM::input($vm));

                  //ticket
                  $vm->attrs          ="";
                  $vm->label          = "نوع بلیط";
                  $vm->id             ="ticket";
                  $vm->data           = array("سیستمی","چارتری");
                  $vm->use_value_only = true;
                  $vm->type           ="select";
                  $vm->selected_options= isset($ticket) ? $ticket : '';
                  echo form_body(VM::input($vm));

                  //adult_price
                  $vm->type  = "number";
                  $vm->label = "هزینه بزرگسال(ریال)";
                  $vm->id    = 'adult_price';
                  $vm->value = set_value("adult_price",isset($adult_price) ? $adult_price : '');
                  echo form_body(VM::input($vm));

                  //child_price
                  $vm->label = "هزینه خردسال(ریال)";
                  $vm->id    = 'child_price';
                  $vm->value = set_value("child_price",isset($child_price) ? $child_price : '');
                  echo form_body(VM::input($vm));

                  //infant_price
                  $vm->label = "هزینه نوزاد(ریال)";
                  $vm->id    = 'infant_price';
                  $vm->value = set_value("infant_price",isset($infant_price) ? $infant_price : '');
                  echo form_body(VM::input($vm));
                ?>   
              </div>                                
            <div class="form-actions">
                <input type="hidden" name="action" value="<?php echo $action; ?>"/>
                <input type="hidden" name="id" value="<?php echo isset($id) ? $id : ''; ?>" />
                <button type="submit" class="btn blue btn-circle">ثبت</button>
            </div>
        </form>

         <script>
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