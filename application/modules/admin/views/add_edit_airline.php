<div class="portlet box green">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-plus"></i>
            <span class="caption-subject bold uppercase">
              شرکت های هواپیمایی
            </span>
        </div>
        <div class="actions">
            <?php echo portlet_action(array(
                "url"=>base_url('admin/airlines'),
                "title"=>"شرکت های هواپیمایی")); ?>
        </div>
    </div>
    <div class="portlet-body form">
        <form role="form" method="POST" 
              action="<?php echo base_url('admin/add_airline'); ?>"
               enctype="multipart/form-data" >
                <?php if(!empty(validation_errors()) || isset($upload_error)): ?>
                    <div class="alert alert-danger">
                      <?php 
                        echo validation_errors(); 
                        if(isset($upload_error)){
                          echo $upload_error;
                        }
                        if(isset($resize_error)){
                          echo $resize_error;
                        }
                      ?>
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
                  $vm->label  = "نام فارسی";
                  $vm->id     = 'fa_name';
                  $vm->value  = set_value("fa_name",isset($fa_name) ? $fa_name : '');
                  // if($action=="update") $vm->attrs="readonly";
                  echo form_body(VM::input($vm));

                  // destination
                  $vm->label  = "نام انگلیسی";
                  $vm->id     = 'en_name';
                  $vm->attrs  ="";
                  $vm->value  = set_value("en_name",isset($en_name) ? $en_name : '');
                  // if($action == "update") $vm->attrs="readonly";
                  echo form_body(VM::input($vm));

                ?>   
                <div class="form-body col-xs-6">
                  <label for="pic" class='col-md-4'>upload</label>
                  <div class="col-md-8">
                    <input type="file" name="pic" size="20"  class="form-control"/>
                  </div>
                </div>
                <?php if(isset($img)): ?>
                  <div class="form-body col-xs 6">
                    <img src="<?php echo $img; ?>"  />
                  </div>
                <?php endif; ?>
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

              });
            </script>

    </div>
</div>

