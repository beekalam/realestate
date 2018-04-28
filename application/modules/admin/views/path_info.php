<div class="portlet box blue-hoki" id="prices_box">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-cogs"></i>مسیر های پروازی
        </div>
        <div class="actions">
            <?php if(check_perm('add_extra_service')): ?>
                <a href="<?php echo base_url('admin/add_path_info') ?>" 
                    class="btn btn-default btn-sm">
                    <i class="fa fa-plus"></i> اضافه 
                </a>
            <?php endif; ?>
        </div>
    </div>

    <div class="portlet-body">
        <table id="flights-table" class="table table-bordered table-striped table-hovered">
            <thead>
            <tr>
	            <!-- <th data-type="numeric" class="no-sort">#</th> -->
	            <th data-column-id="sender">مبدا</th>
	            <th >مقصد</th>
	            <th >هزینه</th>
	            <th >بلیط</th>
	            <th >مسیر</th>
	            <!-- <th >زمان پرواز</th> -->
	            <th >ظرفیت </th>
	            <th >خرید</th>
	            <!-- <th >توقف</th> -->
                <th class="no-sort">ویرایش</th>
	            <th class="no-sort">حذف</th>
            </tr>
            </thead>
            <tbody class="persian-number">
            <?php
	          	$index=0;
	            foreach ($flight_paths as $v) {
	                $index++;
	                echo "<tr>";
	                	// et("td", $index);
	                    et("td", $v["source_desc"]);
	                    et("td", $v["destination_desc"]);
	                    et("td", format_currency($v["adult_price"]));
	                    et("td", $v["flight_type"]);
	                    et("td", $v["way"] == 1 ? "رفت":"رفت و برگشت");
	                    // et("td", $v["flight_time"]);
	                    et("td", $v["capacity"] . "fixme");
	                    et("td", "fixme");
	                    // et("td", $v["stop"] );
                        $url =  base_url("admin/add_path_info?id={$v['id']}"); 
	                    et("td", "<a href='{$url}' class='btn btn-sm btn-warning btn-circle'>ویرایش</a>");
                        
                        echo "<td>";
                            echo "<button class='btn btn-sm btn-danger btn-circle delete-path' data-id='{$v['id']}'>حذف</button>";
                        echo "</td>";
                        // et("td", "<a href='{$url}' class='btn btn-sm btn-warning btn-circle'>پرواز</a>");
	               echo "</tr>";
	            }
            ?>
            </tbody>
        </table>
        <script>
            $(document).ready(function () {
                $("#flights-table").DataTable({
                    "ordering": true,
                    "searching":true,
                    "paging": true,
                    "info":false,
                    columnDefs: [{
                        orderable: false,
                        targets: "no-sort"
                    }],
                      "language": {
                        "emptyTable": "هیچ رکوردی یافت نشد",
                        'search':'جستجو',
                        'info':'نمایش صفحه _PAGE_ از _PAGES_',
                        'infoEmpty':'هیچ رکوردی یافت نشده'
                    }                    
                });

                $(".delete-path").click(function()
                {
                    var id = $(this).attr("data-id");
                    swal({
                        title: "",
                        text: "",
                        type: "warning",
                        showCancelButton: true,
                        confirmButtonClass: "btn-danger",
                        confirmButtonText: "حذف",
                        cancelButtonText: 'بازگشت',
                        closeOnConfirm: false
                    },
                    function () {
                         $.ajax({
                            url: '<?php echo base_url('admin/delete_path'); ?>',
                            async: 'false',
                            cache: 'false',
                            type: 'POST',
                            data: {"what": id},
                            success: function (response) {
                                var data = JSON.parse(response);
                                
                                if (data["success"] == false) {
                                    var msg = data["error"] || "خطا در حذف";
                                    swal("", msg , "warning")
                                } else {
                                    window.location="<?php echo base_url('admin/path_info') ?>"
                                }
                            }
                        }); //$.ajax
                    });
                    
                });
            });
        </script>
    </div>
</div>
