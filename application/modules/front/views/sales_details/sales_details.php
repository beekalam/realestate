<?php 
?>


<form action="<?php echo base_url('sales_details') ?>"
	method="POST">

     <div class="row" id="raft">
<?php 
					//buyer's info
                  $vm =new stdClass;
                  $vm->label_class = "col-md-4 control-label";
                  $vm->input_wrapper = "col-md-8";
                  $vm->classes  = "form-control";
                  $vm->use_lbl_as_placeholder = true;
                  

                  // flight_type
                  $vm->label  = "جنسیت";
                  $vm->id     = 'buyer_gender';
                  $vm->attrs  ="";
                  $vm->type   = 'select';
                  $vm->show_please_select = true;
                  $vm->use_value_only = false;
                  $vm->data = array("male"=>"آقا","female"=>"خانم");
                  $vm->selected_options  = set_value("gender",isset($gender) ? $gender : '');
                  echo form_body(VM::input($vm));

                             // 
                  $vm->label  = "نام";
                  $vm->id     = 'buyer_first_name';
                  $vm->type   = 'text';
                  $vm->value  = set_value("gender",isset($gender) ? $gender : '');
                  echo form_body(VM::input($vm));

                  $vm->label  = "نام خانوادگی";
                  $vm->id     = 'buyer_last_name';
                  $vm->type   = 'text';
                  $vm->value  = set_value("gender",isset($gender) ? $gender : '');
                  echo form_body(VM::input($vm));

                  $vm->label  = "تلفن ثابت";
                  $vm->id     = 'buyer_phone';
                  $vm->type   = 'number';
                  $vm->value  = set_value("gender",isset($gender) ? $gender : '');
                  echo form_body(VM::input($vm));

				  $vm->label  = "موبایل";
                  $vm->id     = 'buyer_mobile';
                  $vm->type   = 'number';
                  $vm->value  = set_value("gender",isset($gender) ? $gender : '');
                  echo form_body(VM::input($vm));

				  $vm->label  = "آدرس";
                  $vm->id     = 'buyer_address';
                  $vm->type   = 'text';
                  $vm->value  = set_value("gender",isset($gender) ? $gender : '');
                  echo form_body(VM::input($vm));

				  $vm->label  = "کد ملی";
                  $vm->id     = 'buyer_national_code';
                  $vm->type   = 'number';
                  $vm->value  = set_value("gender",isset($gender) ? $gender : '');
                  echo form_body(VM::input($vm)); 

				  $vm->label  = "ایمیل";
                  $vm->id     = 'buyer_email';
                  $vm->type   = 'text';
                  $vm->value  = set_value("gender",isset($gender) ? $gender : '');
                  echo form_body(VM::input($vm));          


                  //buyer's flight info
                  // flight_type
                  $vm->label  = "جنسیت";
                  $vm->id     = 'gender';
                  $vm->attrs  ="";
                  $vm->type   = 'select';
                  $vm->show_please_select = true;
                  $vm->use_value_only = false;
                  $vm->data = array("male"=>"آقا","female"=>"خانم");
                  $vm->selected_options  = set_value("gender",isset($gender) ? $gender : '');
                  echo form_body(VM::input($vm));

                  // 
                  $vm->label  = "نام به انگلیسی";
                  $vm->id     = 'first_name';
                  $vm->type   = 'text';
                  $vm->value  = set_value("gender",isset($gender) ? $gender : '');
                  echo form_body(VM::input($vm));

                  $vm->label  = "نام خانوادگی به انگلیسی";
                  $vm->id     = 'last_name';
                  $vm->type   = 'text';
                  $vm->value  = set_value("gender",isset($gender) ? $gender : '');
                  echo form_body(VM::input($vm));

                  $vm->label  = "نام خانوادگی به انگلیسی";
                  $vm->id     = 'buyer_phone';
                  $vm->type   = 'number';
                  $vm->value  = set_value("gender",isset($gender) ? $gender : '');
                  echo form_body(VM::input($vm));

				  $vm->label  = "موبایل";
                  $vm->id     = 'buyer_mobile';
                  $vm->type   = 'number';
                  $vm->value  = set_value("gender",isset($gender) ? $gender : '');
                  echo form_body(VM::input($vm));

				  $vm->label  = "آدرس";
                  $vm->id     = 'buyer_address';
                  $vm->type   = 'text';
                  $vm->value  = set_value("gender",isset($gender) ? $gender : '');
                  echo form_body(VM::input($vm));

				  $vm->label  = "کد ملی";
                  $vm->id     = 'buyer_national_code';
                  $vm->type   = 'number';
                  $vm->value  = set_value("gender",isset($gender) ? $gender : '');
                  echo form_body(VM::input($vm)); 

				  $vm->label  = "ایمیل";
                  $vm->id     = 'buyer_email';
                  $vm->type   = 'text';
                  $vm->value  = set_value("gender",isset($gender) ? $gender : '');
                  echo form_body(VM::input($vm)); 

                                           
?>		
		       <div class="form-actions">
                <button type="submit" class="btn blue btn-circle">
                      <i class="fa fa-check"></i>
                  ثبت
                </button>
            </div>
	</div>
</form>