<div class="page-bar"></div>


<div class="portlet light portlet-fit ">
    <div class="portlet-title">
        <div class="caption">
            <i class=" icon-layers font-green"></i>
            <span class="caption-subject font-green bold uppercase">تصاویر</span>
        </div>
        <div class="actions">
            <a href="<?php echo base_url('admin/edit_property?id=' . $property_id); ?>"
               class="btn btn-circle  btn-outline btn-sm">
                <i class="icon-action-redo"></i> </a>
        </div>
    </div>
    <div class="portlet-body">
        <div class="mt-element-card mt-element-overlay">
            <div class="row">

                <?php foreach ($files as $id => $file): ?>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="mt-card-item">
                            <div class="mt-card-avatar mt-overlay-1">
                                <img src="<?php echo $file; ?>">
                                <div class="mt-overlay">
                                    <ul class="mt-info">
                                        <li>
                                            <a class="btn default btn-outline" href="javascript:;">
                                                <i class="icon-magnifier"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="btn default btn-outline" href="javascript:;">
                                                <i class="icon-link"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="mt-card-content">
                                <h3 class="mt-card-name"></h3>
                                <p class="mt-card-desc font-grey-mint"></p>
                                <div class="mt-card-social">
                                    <ul>
                                        <li>
                                            <form action="<?php echo base_url('admin/delete_property_file'); ?>"
                                                  method="POST">
                                                <input type="hidden" name="property_id"
                                                       value="<?php echo $property_id; ?>">
                                                <input type="hidden" name="id" value="<?php echo $id; ?>">
                                                <button type="submit" class="btn btn-warning">delete</button>
                                                <!--                                            <a href="javascript:;">-->
                                                <!--                                                <i class="icon-social-facebook"></i>-->
                                                <!--                                            </a>-->
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>
        </div>
    </div>
</div>

<div class="portlet box purple ">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-gift"></i> افزودن فایل جدید
        </div>
        <div class="tools">

            <!--            <a href="" class="collapse" data-original-title="" title=""> </a>-->
            <!--            <a href="#portlet-config" data-toggle="modal" class="config" data-original-title="" title=""> </a>-->
            <!--            <a href="" class="reload" data-original-title="" title=""> </a>-->
            <!--            <a href="" class="remove" data-original-title="" title=""> </a>-->
        </div>
    </div>
    <div class="portlet-body form" style="display: block;">
        <?php echo form_open_multipart('admin/upload_property_file',array("class"=>"form-horizontal","method"=>"POST"));?>
            <div class="form-body">
                <!--                <div class="form-group">-->
                <!--                    <label class="col-md-3 control-label">Large Input</label>-->
                <!--                    <div class="col-md-9">-->
                <!--                        <input type="text" class="form-control input-lg" placeholder="Large Input"> </div>-->
                <!--                </div>-->

                <div class="form-group">
                    <label class="col-md-3 control-label">Large Input</label>
                    <div class="col-md-9">
                        <input type="file" class="form-control input-lg" name="property_file">
                    </div>
                </div>

            </div>
            <div class="form-actions right1">
                <input type="hidden" name="property_id"
                       value="<?php echo $property_id; ?>">
                <button type="submit" class="btn green">ثبت</button>
            </div>
        </form>
    </div>
</div>
