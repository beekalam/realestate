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

                echo $this->table->generate($tasks);
            ?>
        </div>
    </div>
</div>
