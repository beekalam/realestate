<div class="portlet box green">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-plus"></i>
            <span class="caption-subject bold uppercase">
              کلاس پروازی جدید
            </span>
        </div>
        <div class="actions">
            <?php echo portlet_action(array(
                "url"=>base_url('admin/flight_class'),
                "title"=>"کلاس های  پروازی")); ?>
        </div>
    </div>
    <div class="portlet-body form">
        <form role="form" method="POST" 
              action="<?php echo base_url('admin/add_flight_class'); ?>">
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
                  

                  // fa name
                  $vm->label  = "نام-فارسی";
                  $vm->id     = 'fa_name';
                  $vm->attrs  ="";
                  $vm->value  = set_value("fa_name",isset($fa_name) ? $fa_name : '');
                  // if($action == "update") $vm->attrs="readonly";
                  echo form_body(VM::input($vm));

                  // destination
                  $vm->label  = "نام-انگلیسی";
                  $vm->id     = 'en_name';
                  $vm->attrs  ="";
                  $vm->value  = set_value("en_name",isset($en_name) ? $en_name : '');
                  // if($action == "update") $vm->attrs="readonly";
                  echo form_body(VM::input($vm));

                  // code
                  $vm->label  = "کد";
                  $vm->id     = 'code';
                  $vm->value  = set_value("code",isset($code) ? $code : '');
                  // if($action=="update") $vm->attrs="readonly";
                  echo form_body(VM::input($vm));
                ?>   
              </div>                 

            <div class="form-actions">
                <input type="hidden" name="action" value="<?php echo $action; ?>"/>
                <input type="hidden" name="id" value="<?php echo isset($id) ? $id : ''; ?>" />
                <button type="submit" class="btn blue btn-circle">ثبت</button>
            </div>
        </form>

    </div>
</div>

