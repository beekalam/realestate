<script src="<?php echo base_url('assets/js/mansouri.js'); ?>"></script>

<div class="row">
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

                <style>
                    .glyph {
                        display: inline-block;
                        width: 9em;
                        margin: 1em;
                        text-align: center;
                        vertical-align: top;
                        background: #FFF;
                    }

                    .glyph .glyph-icon {
                        padding: 10px;
                        display: block;
                        font-family: "Flaticon";
                        font-size: 64px;
                        line-height: 1;
                    }

                    .class-name {
                        font-size: 0.65em;
                        background-color: #222;
                        color: #fff;
                        border-radius: 4px 4px 0 0;
                        padding: 0.5em;
                        color: #FFFF99;
                        font-family: Consolas, Monaco, Lucida Console, Liberation Mono, DejaVu Sans Mono, Bitstream Vera Sans Mono, Courier New, monospace;
                    }

                    .author-name {
                        font-size: 0.6em;
                        background-color: #fcfcfd;
                        border: 1px solid #DEDEE4;
                        border-top: 0;
                        border-radius: 0 0 4px 4px;
                        padding: 0.5em;
                    }
                </style>

                <div class="glyph">
                    <div>
                        <a href='<?php echo base_url("/admin/add_client"); ?>'>
                            <img src="<?php echo base_url("assets/real-estate-icons-2/svg/024-building-2.svg"); ?>"/>
                            افزودن مشتری
                        </a>
                    </div>
                    <!--                <div class="class-name"></div>-->
                    <!--                <div class="author-name">-->
                    <!---->
                    <!--                </div>-->
                </div>


                <div class="glyph">
                    <div>
                        <a href='<?php echo base_url("/admin/add_property?pt=apartment&dt=none'"); ?>'>
                            <img src="<?php echo base_url("assets/real-estate-icons-2/svg/024-building-2.svg"); ?>"/>
                            آپارتمان و پیش فروش
                        </a>
                    </div>
                    <!--                <div class="class-name"></div>-->
                    <!--                <div class="author-name">-->
                    <!---->
                    <!--                </div>-->
                </div>

                <div class="glyph">
                    <div>
                        <a href='<?php echo base_url("/admin/add_property?pt=store&dt=none"); ?>'>
                            <img src="<?php echo base_url("assets/real-estate-icons-2/svg/024-building-2.svg"); ?>"/>
                            مغازه
                        </a>
                    </div>
                    <!--                <div class="class-name"></div>-->
                    <!--                <div class="author-name">-->
                    <!---->
                    <!--                </div>-->
                </div>


                <div class="glyph">
                    <div>
                        <a href='<?php echo base_url("/admin/add_property?pt=land&dt=none"); ?>'>
                            <img src="<?php echo base_url("assets/real-estate-icons-2/svg/024-building-2.svg"); ?>"/>
                            زمین
                        </a>
                    </div>
                    <!--                <div class="class-name"></div>-->
                    <!--                <div class="author-name">-->
                    <!---->
                    <!--                </div>-->
                </div>

            </div>
        </div>
    </div>

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
                    </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function () {
            $("#properties-table").DataTable({
                "ordering": false,
                "searching": false,
//                "paging": true,
                "info": false,
//                scroller: {
//                    loadingIndicator: true
//                },
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
                ajax:"<?php echo base_url('/admin/properties'); ?>",
                "columns":[
                    {"data":"owner_name"},
                    {"data":"owner_tel"},
                    {"data":"owner_mobile"},
                    {"data":"property_type"},
                    {"data":"sanad_type"}
                ],
                "columnDefs":[
                    {className:"persian-number",targets:[1,2]},
                    {
                        "targets": 0,
                        "data":"name",
                        "render":function(data,type,row,meta){
                            var ret = "";
                            if(data){
                               return row["owner_name"] + " " + row["owner_family"];
                            }
                            return ret;
                        }
                    },
                    {
                        "targets": 3,
                        "data":"property_type",
                        "render":function(data,type,row,meta){
                            if(data == 'apartment'){
                                return "آپارتمان";
                            }else if(data == "land"){
                                return "زمین";
                            }else if(data == "store"){
                                return "مغازه";
                            }
                            return "";
                        }
                    },
                    {
                        "targets": 4,
                        "data":"sanad_type",
                        "render":function(data,type,row,meta){
                            if(data == "melki"){
                                return  "ملکی";
                            }else if(data == "oghaf"){
                                return "اوقاف";
                            }
                            return data;
                        }
                    }
                ]

            });
        });
    </script>
</div>


