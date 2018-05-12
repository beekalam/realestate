<?php
if(!isset($label))
    $label="";
if(!isset($name))
    $name= $id;
if(!isset($placeholder))
    $placeholder = $label;
?>
<div class="form-body <?php echo $class; ?>">
    <div class="form-group">
        <label class="col-md-3 control-label"><?php echo $label; ?></label>
        <div class="col-md-9">
            <input type="text"
                   id="<?php echo $id; ?>"
                   name="<?php echo $name; ?>"
                   class="form-control input-sm"
                   placeholder="<?php echo $placeholder; ?>"
                   value="<?php echo $value; ?>">
        </div>
    </div>
</div>