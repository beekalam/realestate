<div class="page-bar"></div>
<div class="portlet box blue-hoki">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-plus"></i>
            <span class="caption-subject bold uppercase"></span>
        </div>
        <div class="actions"></div>
    </div>

    <div class="portlet-body">
        <div class="row">
            <?php
            echo form_label('description', 'username');
            echo form_open('task/task_action');

            $data = array(
                'name'          => 'description',
                'id'            => 'description',
                'value'         => '',
                'maxlength'     => '100',
                'size'          => '50',
                'style'         => 'width:50%'
            );

            echo form_input($data);

            echo form_hidden('task_id', $task_id);
            echo form_submit('submit','submit');
            echo form_close()
            ?>
        </div>
    </div>
</div>
