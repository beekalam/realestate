<div class="portlet box blue-hoki" id="prices_box">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-cogs"></i>فرودگاه ها
        </div>
        <div class="actions">
            <?php if(check_perm('add_extra_service')): ?>
                <?php echo portlet_action(array(
                            "url"=>base_url('admin/add_airport'),
                            "title"=>"افزودن")); 
                ?>
            <?php endif; ?>
        </div>
    </div>

    <div class="portlet-body">
        <table id="airports-table" class="table table-bordered table-striped table-hovered">
            <thead>
            <tr>
	            <!-- <th data-type="numeric" class="no-sort">#</th> -->
	            <th data-column-id="sender">کد</th>
	            <th >نام فرودگاه</th>
	            <th >نام شهر</th>
	            <th class="no-sort">ویرایش</th>
	            <th class="no-sort">حذف</th>
            </tr>
            </thead>
            <tbody class="persian-number">
            <?php
	          	$index=0;
	            foreach ($airports as $v) {
	                $index++;
	                echo "<tr>";
	                	// et("td", $index);
	                    et("td", $v["code"]);
	                    et("td", $v["en_name"]);
	                    et("td", $v["en_cityname"]);
                        et("td","<a href='".
                                base_url('/admin/add_airport?id='.$v['id']) .
                                "' class='btn btn-sm btn-default btn-circle edit'>edit</a>");
                        et("td","<a href='' class='btn btn-sm btn-default btn-circle delete'>delete</a>");
	               echo "</tr>";
	            }
            ?>
            </tbody>
        </table>
        <script>
            $(document).ready(function () {
                $("#airports-table").DataTable({
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
