<div class="row">
    <div class="col-xs-4">
        <label for="">نام</label>
        <input type="text" class="form-control col-xs-12" id="client-first-name"  lang="fa">
    </div>
    <div class="col-xs-4">
        <label for="">نام خانوادگی</label>
        <input type="text" class="form-control col-xs-12" id="client-last-name" lang="fa">
    </div>
    <div class="col-xs-4">
        <label for="">موبایل</label>
        <input type="text" class="form-control col-xs-12" id="client-mobile" lang="fa">
    </div>
</div>

<div id="cc">

</div>

<button class="btn btn-default" id="client-search">جستجو</button>

<script id="person-table-template" type="text/x-handlebars-template">
    <table class="table m-table m-table--head-bg-success">
        <thead>
        <tr>
            <th>#</th>
            <th>نام</th>
            <th>موبایل</th>
            <th>شماره تلفن</th>
            <th>actions</th>
        </tr>
        </thead>
        <tbody>
        {{#each this}}
            <tr>
                <th scope="row" class="persian-number">{{index}}</th>
                <td>{{first_name}} {{last_name}}</td>
                <td class="persian-number">{{mobile}}</td>
                <td class="persian-number">{{tel}}</td>
                <td>
                    <button data-id="{{id}}"
                            data-first-name="{{first_name}}"
                            data-last-name="{{last_name}}"
                            data-mobile="{{mobile}}"
                            data-tel="{{tel}}"
                            class="select-person">انتخاب
                    </button>
                </td>
            </tr>
        {{else}}
            <tr>
                <td colspan="5" style="text-align:center">
                    <span style="color:red;">نتیجه ای یافت نشد</span>
                </td>
            </tr>
        {{/each}}
        </tbody>
    </table>
</script>

<script>
if(!window.client_events_loaded){
    $("body").on("click", "#client-search", function () {
        var s = $("#client-first-name").val();
        var to_send = {};
        if($("#client-first-name").val()) to_send.first_name = $("#client-first-name").val()
        if($("#client-last-name").val()) to_send.last_name = $("#client-last-name").val()
        if($("#client-mobile").val()) to_send.mobile = $("#client-mobile").val()
        $.ajax({
            "url": "<?php echo base_url('admin/find_client'); ?>",
            "method": "POST",
            "cache": false,
            "data": to_send,
            "beforeSend": function () {
                $(".modal-content").LoadingOverlay("show");
            }
        }).done(function (data) {
            $(".modal-content").LoadingOverlay("hide");
            data = JSON.parse(data);
            data = add_index(data);

            var template = Handlebars.compile($("#person-table-template").html());
            $("#cc").html(template(data));
        });
    });

    $("body").on("click", ".select-person", function () {
        var person = {
            "id": $(this).attr("data-id"),
            "first_name": $(this).attr("data-first-name"),
            "last_name": $(this).attr("data-last-name"),
            "mobile": $(this).attr("data-mobile"),
            "tel": $(this).attr("data-tel")
        };
        $("#owner_name").val(person["first_name"]);
        $("#owner_family").val(person["last_name"]);
        $("#owner_mobile").val(person["mobile"]);
        $("#owner_tel").val(person["tel"]);

        var person_id = $(this).attr("data-id");
        $("#bootstrap-modal").modal("hide");
    });
    window.client_events_loaded = true;
}
</script>