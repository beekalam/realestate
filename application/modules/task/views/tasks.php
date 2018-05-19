
<div class="page-bar"></div>
<div class="row">
    <div class="col-md-12">
        <div class="portlet box blue-hoki">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-bubbles"></i> لیست 
                </div>
            </div>
            <div class="portlet-body">

                <table border="0" class="table table-responsive table-bordered table-striped"
                       id="customers-table">
                    <thead>
                    <tr>
                        <th>نام و نام خانوادگی</th>
                        <th>نام کاربری</th>
                        <td>تاریخ شروع</td>
                        <td>تاریخ ساخت</td>
                       <!--<td>توضیحات</td>-->
                        <td>عملیات</td>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                        foreach ($tasks as $value) {
                            echo "<tr>";
                            echo "<td>{$value["first_name"]} {$value["last_name"]}</td>";
                            echo "<td>{$value["user_name"]}</td>";
                            echo "<td>{$value["start_date"]}</td>";
                            echo "<td>{$value["created_at"]}</td>";
                           // echo "<td>{$value["id"]}</td>";
                            echo "<td>";
                            
                               // echo "<button class='btn btn-circle btn-sm btn-success' data-id='{$value["id"]}'>" . "ایجاد توضیحات" . "</button>";
                                echo "<a class='btn btn-circle btn-sm btn-success' href=".base_url('task/task_action?id=' . $value["id"])." >ایجاد توضیحات</a>";
                            
                            echo "</td>";
                            echo "</tr>";
                        }
                    ?>
                    </tbody>
                </table>

             
               

                <script>
                

                    $(document).ready(function()
                    {
                        $("#customers-table").DataTable({
                            "searchign":false,
                            "sorting":false,
                            "ordering":false,
                            scrollY: 300,
                            scroller: {
                                loadingIndicator: true
                            },
                            "language": {
                                "sEmptyTable":     "هیچ داده ای در جدول وجود ندارد",
                                "sInfo":           "نمایش _START_ تا _END_ از _TOTAL_ رکورد",
                                "sInfoEmpty":      "نمایش 0 تا 0 از 0 رکورد",
                                "sInfoFiltered":   "(فیلتر شده از _MAX_ رکورد)",
                                "sInfoPostFix":    "",
                                "sInfoThousands":  ",",
                                "sLengthMenu":     "نمایش _MENU_ رکورد",
                                "sLoadingRecords": "در حال بارگزاری...",
                                "sProcessing":     "در حال پردازش...",
                                "sSearch":         "جستجو:",
                                "sZeroRecords":    "رکوردی با این مشخصات پیدا نشد",
                                "oPaginate": {
                                    "sFirst":    "ابتدا",
                                    "sLast":     "انتها",
                                    "sNext":     "بعدی",
                                    "sPrevious": "قبلی"
                                },
                                "oAria": {
                                    "sSortAscending":  ": فعال سازی نمایش به صورت صعودی",
                                    "sSortDescending": ": فعال سازی نمایش به صورت نزولی"
                                }
                            },
                        });

                       

                    });
                </script>
            </div>
        </div>
    </div>
</div>