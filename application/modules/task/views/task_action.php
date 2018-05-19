<div class="page-bar"></div>
<div class="portlet box blue-hoki">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-plus"></i>ایجاد توضیحات
            <span class="caption-subject bold uppercase"></span>
        </div>
        <div class="actions">
                 <a href="<?php echo base_url('task') ?>" class="btn btn-default btn-sm btn-circle">بازگشت
</a>

        </div>
    </div>

    <div class="portlet-body">
        <div class="row">
          <?php
            echo form_open('task/task_action');?>

          
                <div class="form-group col-md-12">
                        <label for="exampleInputEmail1">توضیحات </label>
                        <script src="<?php echo base_url('assets\global\plugins\ckeditor/ckeditor.js'); ?>"></script>
                        <textarea name="description" id="desc1" rows="10"
                           cols="80"></textarea>
                        <script>
                            CKEDITOR.replace('desc1');
                        </script>
                    </div>
                     <div class="form-group col-md-12">
                        <input type="hidden" name="task_id" value="<?= $task_id;?>">
                    </div>
                    <div class="form-group col-md-12">
                        <input type="submit" name="submit" class="btn btn-default btn-sm btn-circle" value="ارسال">
                    </div>
            <?php
            echo form_close()
            ?>
            
        </div>
    </div>
</div>
