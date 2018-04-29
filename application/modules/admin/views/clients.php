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
            <table id="clients-table" width="" class="display">
                <thead>
                <tr>
                    <th>نام</th>
                    <th>نام خانوادگی</th>
                    <th>موبایل</th>
                    <th>تلفن</th>
                    <th>date_submit_fa</th>
<!--                    <th></th>-->
<!--                    <th></th>-->
<!--                    <th>موبایل</th>-->
<!--                    <th>نوع</th>-->
<!--                    <th>سند</th>-->
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
        $("#clients-table").DataTable({
            "ordering": false,
            "searching": false,
            "paging": true,
            "info": false,
//            "scroller": {
//                loadingIndicator: true
//            },
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
            ajax:"<?php echo base_url('/admin/clients_list'); ?>",
            "columns":[
                {"data":"first_name"},
                {"data":"last_name"},
                {"data":"mobile"},
                {"data":"tel"},
                {"data":"date_submit_fa"}
            ],
            "columnDefs":[
                {className:"persian-number",targets:[2,3,4]},

            ]

        });
    });
</script>

