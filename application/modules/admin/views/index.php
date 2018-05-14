<?php
//    $this->test_function();

?>
<script src="<?php echo base_url('assets/js/mansouri.js'); ?>"></script>

<style>
    .glyph {
        display: inline-block;
        width: 9em;
        margin: 1em;
        text-align: center;
        vertical-align: top;
        background: #FFF;
        border: solid 3px;
        border-radius: 5px !important;
    }

    .glyph .glyph-content {
        background: yellow;
    }

    .glyph .glyph-content-sale {
        background: peachpuff;
    }

    .glyph img {
        margin: 24px;
    }

    .glyph .footer {
        background: black;
        color: yellow;
        border-top: solid 3px;
    }

    .glyph .footer-sale {
        background: black;
        color: peachpuff;
        border-top: solid 3px;
    }

</style>
<div class="row">
    <!--    short stats-->
    <div class="col-xs-12">
        <div class="row">

            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="dashboard-stat2 ">
                    <div class="display">
                        <div class="number">
                            <h3 class="font-green-sharp">
                                <span class="persian-number" data-counter="counterup"
                                      data-value="<?php echo $property_count; ?>">
                                    <?php echo $property_count; ?>
                                </span>
                                <small class="font-green-sharp"></small>
                            </h3>
                            <small>تعداد ملک های ثبت شده</small>
                        </div>
                        <div class="icon">
                            <i class="icon-pie-chart"></i>
                        </div>
                    </div>

                </div>
            </div>
            <?php foreach ($property_stats as $s): ?>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="dashboard-stat2">
                        <div class="display">
                            <div class="number">
                                <h3 class="font-green-sharp">
                                    <span data-counter="counterup" class="persian-number"
                                          data-value="<?php echo $s["num"]; ?>"><?php echo $s["num"]; ?></span>
                                    <small class="font-green-sharp"></small>
                                </h3>
                                <small><?php echo $s["fa_description"]; ?></small>
                            </div>
                            <div class="icon">
                                <i class="icon-pie-chart"></i>
                            </div>
                            <div class="progress-info">
                                <div class="progress">
                                    <span style="width: 76%;" class="progress-bar progress-bar-success green-sharp">
                                        <span class="sr-only">76% progress</span>
                                    </span>
                                </div>
                                <div class="status">
                                    <div class="status-title"></div>
                                    <div class="status-number persian-number">
                                        <?php echo percent($s["num"], $property_count, true); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
    <!--    rentals-->
    <!--    <div class="col-xs-6">-->
    <!--    <div class="portlet box blue-hoki">-->
    <!--        <div class="portlet-title">-->
    <!--            <div class="caption">-->
    <!--                <i class="fa fa-plus"></i>-->
    <!--                <span class="caption-subject bold uppercase"> اجاره</span>-->
    <!--            </div>-->
    <!--            <div class="actions"></div>-->
    <!--        </div>-->
    <!---->
    <!--        <div class="portlet-body">-->
    <!--            <div class="row">-->
    <!---->
    <!--                <div class="glyph">-->
    <!--                    <div class="glyph-content">-->
    <!--                        <a href='--><?php //echo base_url("/admin/add_client"); ?><!--'>-->
    <!--                            <img src="--><?php //echo base_url("assets/svg/customer.svg"); ?><!--"/>-->
    <!--                            <div>افزودن مشتری</div>-->
    <!--                        </a>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!---->
    <!--                <div class="glyph">-->
    <!--                    <div class="glyph-content">-->
    <!--                        <a href='-->
    <?php //echo base_url("/admin/add_property?pt=apartment&dt=none'"); ?><!--'>-->
    <!--                            <img src="--><?php //echo base_url("assets/svg/024-building-2.svg"); ?><!--"/>-->
    <!--                           <div> آپارتمان و پیش فروش</div>-->
    <!--                        </a>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!---->
    <!--                <div class="glyph">-->
    <!--                    <div class="glyph-content">-->
    <!--                        <a href='--><?php //echo base_url("/admin/add_property?pt=store&dt=none"); ?><!--'>-->
    <!--                            <img src="--><?php //echo base_url("assets/svg/shop.svg"); ?><!--"/>-->
    <!--                            <div> مغازه</div>-->
    <!--                        </a>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!---->
    <!--                <div class="glyph">-->
    <!--                    <div class="glyph-content">-->
    <!--                        <a href='--><?php //echo base_url("/admin/add_property?pt=land&dt=none"); ?><!--'>-->
    <!--                            <img src="--><?php //echo base_url("assets/svg/031-house-1.svg"); ?><!--"/>-->
    <!--                            <div>  زمین</div>-->
    <!--                        </a>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!---->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--    </div>-->

    <!--    add client-->
    <div class="col-xs-2">
        <div class="portlet box blue-hoki">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-plus"></i>
                    <span class="caption-subject bold uppercase">افزودن مشتری</span>
                </div>
                <div class="actions"></div>
            </div>

            <div class="portlet-body">

                <div class="row">

                    <?php if (can('add_customer')): ?>
                        <div class="glyph">
                            <div class="glyph-content">
                                <a href='<?php echo base_url("/admin/add_client"); ?>'>
                                    <img src="<?php echo base_url("assets/svg/customer.svg"); ?>"/>
                                    <div class="footer">افزودن مشتری</div>
                                </a>
                            </div>
                        </div>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </div>
    <!--    rentals-->
    <div class="col-xs-5">
        <div class="portlet box blue-hoki">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-plus"></i>
                    <span class="caption-subject bold uppercase">رهن و اجاره</span>
                </div>
                <div class="actions"></div>
            </div>

            <div class="portlet-body">

                <div class="row">

                    <?php if (can('rent_apartment')): ?>
                        <div class="glyph">
                            <div class="glyph-content">
                                <a href='<?php echo base_url("/admin/add_property?pt=apartment&dt=rent'"); ?>'>
                                    <img src="<?php echo base_url("assets/svg/024-building-2.svg"); ?>"/>
                                    <div class="footer"> آپارتمان و پیش فروش</div>
                                </a>
                            </div>
                        </div>
                    <?php endif; ?>

                    <?php if (can('sell_store')): ?>
                        <div class="glyph">
                            <div class="glyph-content">
                                <a href='<?php echo base_url("/admin/add_property?pt=store&dt=rent"); ?>'>
                                    <img src="<?php echo base_url("assets/svg/shop.svg"); ?>"/>
                                    <div class="footer"> مغازه</div>
                                </a>
                            </div>
                        </div>
                    <?php endif; ?>

                    <?php if (can('sell_apartment')): ?>
                        <div class="glyph">
                            <div class="glyph-content">
                                <a href='<?php echo base_url("/admin/add_property?pt=land&dt=rent"); ?>'>
                                    <img src="<?php echo base_url("assets/svg/031-house-1.svg"); ?>"/>
                                    <div class="footer"> زمین</div>
                                </a>
                            </div>
                        </div>
                    <?php endif; ?>


                </div>
            </div>
        </div>
    </div>

    <!--     sales   -->
    <div class="col-xs-5">
        <div class="portlet box blue-hoki">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-plus"></i>
                    <span class="caption-subject bold uppercase">فروش</span>
                </div>
                <div class="actions"></div>
            </div>

            <div class="portlet-body">
                <div class="row">


                    <?php if (can('sell_apartment')): ?>
                        <div class="glyph">
                            <div class="glyph-content-sale">
                                <a href='<?php echo base_url("/admin/add_property?pt=apartment&dt=sale'"); ?>'>
                                    <img src="<?php echo base_url("assets/svg/024-building-2.svg"); ?>"/>
                                    <div class="footer-sale"> آپارتمان و پیش فروش</div>
                                </a>
                            </div>
                        </div>
                    <?php endif; ?>

                    <?php if (can('sell_store')): ?>
                        <div class="glyph">
                            <div class="glyph-content-sale">
                                <a href='<?php echo base_url("/admin/add_property?pt=store&dt=none"); ?>'>
                                    <img src="<?php echo base_url("assets/svg/shop.svg"); ?>"/>
                                    <div class="footer-sale"> مغازه</div>
                                </a>
                            </div>
                        </div>
                    <?php endif; ?>

                    <?php if (can('sell_land')): ?>
                        <div class="glyph">
                            <div class="glyph-content-sale">
                                <a href='<?php echo base_url("/admin/add_property?pt=land&dt=none"); ?>'>
                                    <img src="<?php echo base_url("assets/svg/031-house-1.svg"); ?>"/>
                                    <div class="footer-sale"> زمین</div>
                                </a>
                            </div>
                        </div>
                    <?php endif; ?>


                </div>
            </div>
        </div>
    </div>

    <!--    properties -->
    <div class="col-xs-12">
        <div class="portlet box blue-hoki">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-plus"></i>
                    <span class="caption-subject bold uppercase"></span>
                </div>
                <div class="actions">
                </div>
            </div>

            <div class="portlet-body">
                <div class="row">
                    <table id="properties-table" width="" class="display">
                        <thead>
                        <tr>
                            <th>نام</th>
                            <th>تلفن</th>
                            <th>موبایل</th>
                            <th>نوع</th>
                            <th>سند</th>
                            <th>عملیات</th>
                        </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function () {
            $("#properties-table").DataTable({
                "ordering": false,
                "searching": false,
//                "paging": true,
//                "info": false,
                scrollY: 300,
                scroller: {
                    loadingIndicator: true
                },
                serverSide: true,
                "language": {
                    "sEmptyTable": "هیچ داده ای در جدول وجود ندارد",
                    "sInfo": "نمایش _START_ تا _END_ از _TOTAL_ رکورد",
                    "sInfoEmpty": "نمایش 0 تا 0 از 0 رکورد",
                    "sInfoFiltered": "(فیلتر شده از _MAX_ رکورد)",
                    "sInfoPostFix": "",
                    "sInfoThousands": ",",
                    "sLengthMenu": "نمایش _MENU_ رکورد",
                    "sLoadingRecords": "در حال بارگزاری...",
                    "sProcessing": "در حال پردازش...",
                    "sSearch": "جستجو:",
                    "sZeroRecords": "رکوردی با این مشخصات پیدا نشد",
                    "oPaginate": {
                        "sFirst": "ابتدا",
                        "sLast": "انتها",
                        "sNext": "بعدی",
                        "sPrevious": "قبلی"
                    },
                    "oAria": {
                        "sSortAscending": ": فعال سازی نمایش به صورت صعودی",
                        "sSortDescending": ": فعال سازی نمایش به صورت نزولی"
                    }
                },
                ajax: {
                    "url": "<?php echo base_url('/admin/properties'); ?>"
                },
                "columns": [
                    {"data": "owner_name"},
                    {"data": "owner_tel"},
                    {"data": "owner_mobile"},
                    {"data": "property_type"},
                    {"data": "sanad_type"},
                    {"data": "id"}
                ],
                "columnDefs": [
                    {className: "persian-number", targets: [1, 2]},
                    {
                        "targets": 0,
                        "data": "name",
                        "render": function (data, type, row, meta) {
                            var ret = "";
                            if (data) {
                                return row["owner_name"] + " " + row["owner_family"];
                            }
                            return ret;
                        }
                    },
                    {
                        "targets": 3,
                        "data": "property_type",
                        "render": function (data, type, row, meta) {
                            if (data == 'apartment') {
                                return "آپارتمان";
                            } else if (data == "land") {
                                return "زمین";
                            } else if (data == "store") {
                                return "مغازه";
                            }
                            return "";
                        }
                    },
                    {
                        "targets": 4,
                        "data": "sanad_type",
                        "render": function (data, type, row, meta) {
                            if (data == "melki") {
                                return "ملکی";
                            } else if (data == "oghaf") {
                                return "اوقاف";
                            }
                            return data;
                        }
                    },
                    {
                        "targets": 5,
                        "data": "id",
                        "render": function (data, type, row, meta) {
                            return "<a class='btn btn-default' href='" + "<?php echo base_url("admin/edit_property?id="); ?>" + data + "'> مشاهده </a>";
                        }
                    }
                ]

            });
        });
    </script>
</div>


