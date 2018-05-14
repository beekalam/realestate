<?php
if (!isset($label))
    $label = "";
if (!isset($name))
    $name = $id;
if (!isset($placeholder))
    $placeholder = $label;
if (!isset($type))
    $type = 'text';
?>

<div class="form-body <?php echo $class; ?>">
    <div class="form-group">
        <label class="col-md-3 control-label"><?php echo $label; ?></label>
        <div class="col-md-9">
            <?php if ($type == "text"): ?>

            <input type="text"
                   id="<?php echo $id; ?>"
                   name="<?php echo $name; ?>"
                   class="form-control input-sm"
                   placeholder="<?php echo $placeholder; ?>"
                   value="<?php echo $value; ?>">

            <?php elseif ($type == "timepicker"): ?>

            <input type="text"
                   id="<?php echo $id; ?>"
                   name="<?php echo $name; ?>"
                   class="form-control input-sm"
                   placeholder="<?php echo $placeholder; ?>"
                   value="<?php echo $value; ?>">
                <script>
                    $(document).ready(function () {
                        $("#<?php echo $id; ?>").timepicker({});
                    });
                </script>

            <?php elseif ($type == 'number'): ?>

            <input type="number"
                   id="<?php echo $id; ?>"
                   name="<?php echo $name; ?>"
                   class="form-control input-sm"
                   placeholder="<?php echo $placeholder; ?>"
                   value="<?php echo $value; ?>">

            <?php endif; ?>
        </div>
    </div>
</div>