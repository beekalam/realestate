<div class="portlet box blue-hoki" id="prices_box">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-cogs"></i>کلاس های پروازی
        </div>
        <div class="actions">
            <?php if(check_perm('add_extra_service')): ?>
                <?php echo portlet_action(array(
                            "url"=>base_url('admin/add_flight_class'),
                            "title"=>"افزودن")); 
                ?>
            <?php endif; ?>
        </div>
    </div>

    <div class="portlet-body">
        <table id="flight-classes-table" class="table table-bordered table-striped table-hovered">
            <thead>
            <tr>
	            <!-- <th data-type="numeric" class="no-sort">#</th> -->
                <th data-column-id="sender">نام فارسی</th>
                <th data-column-id="sender">نام انگلیسی</th>
                <th data-column-id="sender">کد</th>
                <th data-column-id="sender">ویرایش</th>
                <th data-column-id="sender">حذف</th>
            </tr>
            </thead>
            <tbody class="persian-number">
            <?php
	          	$index=0;
	            foreach ($flight_classes as $v) {
	                $index++;
	                echo "<tr>";
	                	// et("td", $index);
	                    et("td", $v["fa_name"]);
	                    et("td", $v["en_name"]);
	                    et("td", $v["code"]);
                        et("td","<a href='".
                                base_url('/admin/add_flight_class?id='.$v['id']) .
                                "' class='btn btn-sm btn-default btn-circle edit'>edit</a>");
                        et("td","<a href='' class='btn btn-sm btn-default btn-circle delete'>delete</a>");
	               echo "</tr>";
	            }
            ?>
            </tbody>
        </table>
        <script>
            $(document).ready(function () {
                $("#flight-classes-table").DataTable({
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
            });
        </script>
    </div>
</div>

<script>
    $(document).ready(function () {
    });
</script>
