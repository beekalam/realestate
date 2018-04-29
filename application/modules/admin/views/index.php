<script src="<?php echo base_url('assets/js/mansouri.js'); ?>"></script>

<?php //pre($latest_tickets); ?>
<div class="portlet box blue-hoki">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-plus"></i>
            <span class="caption-subject bold uppercase">
           </span>
        </div>
        <div class="actions">
        </div>
    </div>
    <div class="portlet-body">
        <div class="row">
            <a href='<?php echo base_url("/admin/add_client"); ?>'>add client</a>
            <br/>
            <a href='<?php echo base_url("/admin/add_property?pt='apartment'"); ?>'>add property - apartment</a>

            <br/>
            <a href='<?php echo base_url("/admin/add_property?pt='store'"); ?>'>add property - store</a>

            <br/>
            <a href='<?php echo base_url("/admin/add_property?pt='land'"); ?>'>add property - land</a>

        </div>
    </div>
</div>


