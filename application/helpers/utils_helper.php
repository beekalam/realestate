<?php

function formatDuration($seconds){
    if(!is_numeric($seconds))
        return $seconds;
    $seconds=(int)$seconds;
    $hours=(int)($seconds/3600);
    if($hours<10)
        $hours="0{$hours}";
    $rest=$seconds%3600;
    $mins=(int)($rest/60);
    if($mins<10)
        $mins="0{$mins}";
    $secs=$rest%60;
    if($secs<10)
        $secs="0{$secs}";

    return "{$hours}:{$mins}:{$secs}";
}


function persian_duration($duration_seconds){

    $difference = $duration_seconds * 1000;

    $daysDifference = floor($difference / 1000 / 60 / 60 / 24);
    $difference -= $daysDifference * 1000 * 60 * 60 * 24;

    $hoursDifference = floor($difference / 1000 / 60 / 60);
    $difference -= $hoursDifference * 1000 * 60 * 60;

    $minutesDifference = floor($difference / 1000 / 60);
    $difference -= $minutesDifference * 1000 * 60;

    $secondsDifference = floor($difference / 1000);

    //EN EXPORT
    //var out_str = 'difference = ' + daysDifference + ' day/s ' + hoursDifference + ' hour/s ' + minutesDifference + ' minute/s ' + secondsDifference + ' second/s ';

    //FA EXPORT
    $out_str = '';
    if ($daysDifference != 0)
    {
        $out_str .= $daysDifference . ' روز ';
    }
    if ($hoursDifference != 0)
    {
        $out_str .= $hoursDifference . ' ساعت ' ;
    }
    if ($minutesDifference != 0)
    {
        $out_str .= $minutesDifference . ' دقیقه ' ;
    }
    if (($hoursDifference == 0) && ($daysDifference == 0))
    {
        if ($secondsDifference != 0)
        {
            $out_str .= $secondsDifference . ' ثانیه ' ;
        }
    }
    if ($out_str == "")
    {
        $out_str = "0";
    }
    return $out_str;
}


function en_num($input)
{ 
    $en_num = array("0", "1", "2", "3", "4", "5", "6", "7", "8", "9",".",".","."); //".",".","." dirty code
    $fa_num = array("۰", "۱", "۲", "۳", "۴", "۵", "۶", "۷", "۸", "۹",",","٫",".");
    return str_replace($fa_num,$en_num,$input);     
}

function fa_num($input)
{
    $en_num = array("0", "1", "2", "3", "4", "5", "6", "7", "8", "9");
    $fa_num = array("۰", "۱", "۲", "۳", "۴", "۵", "۶", "۷", "۸", "۹");
    return str_replace($en_num,$fa_num,$input);     
}

function prold($in){
      echo "<pre style='direction:ltr'>";
      echo print_r($in,true);
      echo "</pre>";
}

function _pr()
{
    $num_args = func_num_args();
    if($num_args==1 && is_array(func_get_arg(0))){
            $in = func_get_arg(0);
            echo "<pre style='direction:ltr'>";
            echo print_r($in[0],true);
            echo "</pre>";
            return;
    }

    if($num_args > 0)
    {
        for($i=0; $i < $num_args; $i++)
        {
            $in = func_get_arg($i);
            echo "<pre style='direction:ltr'>";
            echo print_r($in,true);
            echo "</pre>";
        }
    }
}
function pr($in=null){
            echo "<pre style='direction:ltr'>";
            echo print_r($in,true);
            echo "</pre>";
}
function pre(){
    $arr = func_get_args();
    foreach($arr as $a){
        pr($a);
    }
    exit;
    //exit;
}

function prpost()
{
         echo "<pre style='direction:ltr'>";
         echo print_r($_POST,true);
         echo "</pre>";   
}
function prget()
{
      echo "<pre style='direction:ltr'>";
      echo print_r($_GET,true);
      echo "</pre>";      
}
function prrequest()
{
         echo "<pre style='direction:ltr'>";
            echo print_r($_POST,true);
            echo print_r($_GET,true);
        echo "</pre>";   
}
function xlog($in){
    if(!function_exists("log_message"))
    {
        return;
    }
    if(is_array($in) || is_object($in))
    {
       log_message("debug",print_r($in,true));
    }else{
        log_message("debug",$in);
    }
}

function visset($in,$default=""){
    return isset($in) ? $in : $default;
}

function eisset($in,$default=""){
    echo isset($in) ? $in : $default;
}

function ejson(){
    $num_args = func_num_args();
    if($num_args == 1 && is_array(func_get_arg(0)) )
    {
        echo json_encode(func_get_arg(0));
        return;
    }
    
    $flag = false;
    $msg = "";
    $msg_name="error";
    if($num_args == 1 && is_bool(func_get_arg(0)))
    {
        $flag = func_get_arg(0);
        if($flag){
            $msg_name="msg";
        }
    }

    if($num_args == 2 && is_string(func_get_arg(1)))
    {
        $flag = func_get_arg(0);
        $msg = func_get_arg(1);
    }
    echo json_encode(array("success" => $flag, $msg_name => $msg));
}

function getpost_isset()
{
    $num_args = func_num_args();
    $ok = $num_args > 0;
    for($i =0 ; $i < $num_args; $i++){
        $ok = $ok and (isset($_POST[func_get_arg($i)]) || isset($_GET[func_get_arg($i)]) );
    }
    return $ok;
}

function startsWith($string,$search,$case=true){
    if ($case)
        return strpos($string, $search, 0) === 0;
    return stripos($string, $search, 0) === 0;
}

function o2a( $o ){
    $a = (array) $o;
    foreach( $a as &$v )
    {
        if( is_object( $v ) )
        {
            $v = o2a( $v );
        }
    }
    return $a;
}


function object_to_array($obj) {
    if(is_object($obj)) $obj = (array) $obj;
    if(is_array($obj)) {
        $new = array();
        foreach($obj as $key => $val) {
            $new[$key] = object_to_array($val);
        }
    }
    else $new = $obj;
    return $new;       
}

function mobile_number_is_valid($mob){
    if (!is_numeric($mob))
        return false;

    if (strlen($mob) != 11)
        return false;

    if (!startsWith($mob,"09"))
        return false;

    return true;
}

function format_currency($in,$suffix="ریال")
{
    if(is_string($in))
        $in = floatval($in);
    return number_format($in) . " " . $suffix;
}

function et($tag,$content,$attrs="")
{
       echo "<{$tag} {$attrs}>{$content}</{$tag}>";
}

function _if($op,$value,$if,$else)
{
    if(function_exists($op))
    {
        if($op($value))
            return $if;
        else
            return $else;
    }
}

function eif($op,$value,$if,$else)
{
    echo _if($op,$value,$if,$else);
}


function base64_img_encode($data)
{
    // pre(array_keys(get_defined_vars()));
    if(!class_exists("finfo")){
        throw new Exception("finfo does not exist");
    }

    $finfo = new finfo(FILEINFO_MIME_TYPE);
    $type  = $finfo->buffer($data);
    $legal_types = array("image/jpeg", "image/png","image/jpg");
    if(!in_array($type, $legal_types)){
        throw new Exception("mime type is not image");
    }
    return 'data:' . $type . ';base64,' . base64_encode($data);
}

function base64_img_encode_from_file($path)
{
    // $type = pathinfo($path, PATHINFO_EXTENSION);
    if(!file_exists($path)){
        throw new Exception("file '$path' does not exist");
    }
    $data = file_get_contents($path);
    return base64_img_encode($data);
}

function val($item=null,$default=null)
{
    return empty($item) ? $default : $item;
}

function make_bootstrap_modal($data='') 
{
    /* example usage
        $data=array("title"     =>"",
                    "class"     =>"",
                    "id"        =>"",
                    "content"   => "");
        echo make_bootstrap_modal($data);
    */
    $body = $title = $class=$id='';
    
    if (is_string($data))
    {
        $body = $data;
    }

    if(is_string($data) && strpos($data,"|") !== false){
        $body = '';
        $data = explode("|",$data);
        $narr = array();
        foreach ($data as $item) {
            list($k,$v) = explode("=",$item);
            $narr[$k] = $v;
        }
        $data = $narr;
    }

    if(is_array($data))
    {
        $title  = isset($data['title'])     ? $data['title'] : "";
        $class  = isset($data['class'])     ? $data['class'] : "";
        $id     = isset($data["id"])        ? $data['id'] : "";
        $body   = isset($data["content"])   ? $data["content"] : "";
    }
return '
<div class="modal fade '.$class.'" tabindex="-1" id="'.$id.'" role="dialog" 
         aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalLabel">'.$title.'</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">'.
                    $body.
          '</div>
          <div class="modal-footer">
          </div>
        </div> 
    </div>
</div> <!-- end model -->
        ';
}
// echo make_bootstrap_modal("class=test|id=test|title=qqq|content=content is here");
// exit;

// function get($item)
// {
//     $ok = startsWith("session.",$item) or startsWith("get.") or startsWith("post.");
//     list($arr,$i) = explode(".",$item);

//     if($arr=="session") return $_SESSION[$i];

//     if($arr == "get") return $_GET[$i];

//     if($arr == "post") return $_POST[$i];

//     throw new Exception("invalid arr name to get;");
// }

// function set($item,$val)
// {
//     $ok = startsWith("session.",$item) or startsWith("get.") or startsWith("post.");
//     list($arr,$i) = explode(".",$item);
    
//     if($arr=="session")  $_SESSION[$i] = $val;

//     if($arr == "get")  $_GET[$i] = $val;

//     if($arr == "post")  $_POST[$i] = $val;

//     throw new Exception("invalid arr name to set;");
// }

function check_perm($in){
    return true;
}




function form_body($content,$data=array()){
  $class  = isset($data["class"]) ? $data["class"]: "col-xs-6";
  $id = isset($data["id"]) ? $data["id"] : "";
   return
        "<div class='form-body {$class}' id='{$id}'>
                <div class='form-group'>
                    {$content}
                </div>
            </div>";
}

function portlet_action($in=array()){
    /* example usage;
                <?php echo portlet_action(array(
                "url"=>base_url('admin/airlines'),
                "title"=>"شرکت های هواپیمایی")); ?> 
    */
    $url = isset($in["url"]) ? $in["url"] : "";
    $title = isset($in["title"]) ? $in["title"] : "";
    $classes = isset($in["classes"]) ? $in["classes"] : "btn btn-default btn-sm";
    $attrs = isset($in["attrs"]) ? $in["attrs"] : "";
    $icon = isset($in["icon"]) ? $in["icon"] : "fa fa-plus";
return"
 <a href='{$url}' class='{$classes}' {$attrs}>
    <i class='{$icon}'></i> {$title}
</a>";
}

class VM{
    private $templates;
    private $tpl="";
    private $label="";
    private $show_label=true;
    private $label_class="";
    private $type="text";
    private $id="";
    private $name="";
    private $value="";
    private $attrs = "";
    private $classes = "";
    private $input_wrapper = "";
    //for select
    private $select_data=array();
    private $selected_options="";
    private $show_please_select=false;
    private $use_value_only=false;
    public function __construct($array=array()){

        // $this->templates["form_body"]=
        //  "<div class='form-body {$class}' id='{$id}'>
        //         <div class='form-group'>
        //             {$content}
        //         </div>
        //     </div>";
    }
    public static function instance($array=array()){
        return new VM();
    }
    public function set_template($tpl){
        $this->tpl=$tpl;
    }

    public function __call($func,$args=null){
        // pre($func);
        // pre($args);
        switch($func){
            case "tpl":
                $this->set_template($tpl,$args);
                break;
            case "lbl":
            case "label":
                $this->label=$args[0];
                break;
            case "show_label":
                $this->show_label = $args[0];
            case "label_class":
                $this->label_class = $args[0];
                break;
            case "text":
                $this->input="text";
                break;
            case "number":
                $this->type="number";
                break;
            case "id":
                $this->id= $args[0];
                $this->name= $args[0];
                break;
            case "name":
                $this->name = $args[0];
                break;
            case "value":
                $this->value = $args[0];
                break;
            case "attrs":
                $this->attrs = $args[0];
                break;
            case "classes":
                $this->classes = $args[0];
                break;
            case "select":
                $this->type="select";
                break;
            case "select_data":
                $this->select_data = $args[0];
                break;
            case "selected_options":
                $this->selected_options = $args[0];
                break;
            case "show_please_select":
                $this->show_please_select = true;
                break;
            case "use_value_only":
                $this->use_value_only = true;
                break;

        }
        return $this;
    }
    public function to_array(){
    //      private $templates;
    // private $tpl="";
    // private $label="";
    // private $type="text";
    // private $id="";
    // private $name="";
    // private $value="";
    // private $show_label=true;
    // private $attrs = "";
    $r = array("label" => $this->label,
                "label_class" => $this->label_class,
                "show_label" => $this->show_label,
                "type"=>$this->type,
                "id"=>$this->id,
                "value"=>$this->value,
                "attrs"=>$this->attrs,
                "classes" => $this->classes,
                "input_wrapper" => $this->input_wrapper);
    return $r;

    }

    public static function input($options=null)
    {
            if(is_object($options)){
                $options = o2a($options);
                // pre($options);
            }else if(is_null($options)){
                $options = array();
            }
            $lbl = $wrapper= '';
            $value       = isset($options["value"])         ?   $options["value"]   : '';
            $classes     = isset($options["classes"])       ?   $options["classes"] : "";
            $id          = isset($options["id"])            ?   $options["id"]      : uniqid();
            $_label       = isset($options["lbl"])           ?   $options["lbl"]   : "";
            $_label       = isset($options["label"])         ?   $options["label"]   : $_label;
            $label_class = isset($options["label_class"])   ?   $options["label_class"] : "";
            $show_label  = isset($options["show_label"])    ?   $options["show_label"] : true;
            $validator   = isset($options['validator'])     ?   $options["validator"] : "";
            $type        = isset($options["type"])          ?   $options["type"]        : "text";
            $attrs       = isset($options["attrs"])         ?   $options["attrs"]       : "";
            $name        = $id;
            $input_wrapper = isset($options["input_wrapper"]) ? $options["input_wrapper"] : "";
            $use_lbl_as_placeholder = isset($options["use_lbl_as_placeholder"]) ?
                $options["use_lbl_as_placeholder"] : false;
            $placeholder = isset($options["placeholder"]) ? $options["placeholder"] : "";
            //for select
           
            // css class that is used for scripts that can not work with css ID
            // default class is assumed to be the first class in the list
            $default_class = '';

            if(!empty($classes))
            {
                $list = explode(' ',$classes);
                $default_class = $list[0];
            }

            if(!empty($validator))
            {
           //     $script .= static::generate_validation_script($validator,$id,$default_class);
            }
            
            if($type == "text" || $type=="number")
            {
                if(!empty($placeholder)){
                    $attrs = " placeholder='{$placeholder}' ".$attrs;
                }else if($use_lbl_as_placeholder){
                    $attrs = " placeholder='{$_label}' ".$attrs;
                }
            }

            if($show_label){
                $lbl .= static::label($_label, $id, $label_class);
            }
            if($type=="select"){
                 $options["render_label"] = false;
                 $input = static::select($options);
            }else if($type=="text"){
                $input = "<input type='text' value='{$value}'  class='{$classes}'
                           name='{$name}' id='{$id}' {$attrs} >";
            }else if($type=="number"){
                $input = "<input type='number' value='{$value}'  class='{$classes}'
                           name='{$name}' id='{$id}' {$attrs} >";
            }
            
            if(!empty($input_wrapper))
                $input = "<div class='{$input_wrapper}'>". $input . "</div>";

            return $lbl . $input;
    }

    public static function select($options = array())
    {
        /* example usage
       <?php
            echo select(array(
                        "label" => "Type:",
                        "label_class" => "col-md-3",
                        "id" => "reseller-id",
                        "data" => array("normal","failed"),
                        "use_value_only" => true, 
                        "classes" => "form-control col-md-4",
                 ),$script);
                            ?>
                            */

        $id                 =   isset($options["id"])  ? $options["id"] : "__NO_NAME__";                            // Id And Name Of Control
        $input              =   isset($options["data"]) ? $options["data"] : array();                               // Data In Format $key=>$value array
        $selected_option    =   isset($options["selected_options"]) ? $options["selected_options"] : "";            // string in Single mode, Array in Multiple Mode
        $use_value_only     =   isset($options["use_value_only"]) ? $options["use_value_only"] : false;             // keys and values are the same
        $mode               =   isset($options["mode"]) ? $options["mode"] : "single";                              // single or multiple (string)
        $classes            =   isset($options["classes"]) ? $options["classes"] : "";                              // additional user classes (string)
        $attrs              =   isset($options["attrs"]) ? $options["attrs"] : "";                                  // additional user html attributes (string)
        $show_please_select =   isset($options["show_please_select"])   ?   $options["show_please_select"] : false;  //shows لطفا یک آیتم انتخاب کنید
        // $select2             =   isset($options["select2"])              ?   $options["select2"] : false;            //use select2
        $_label              = isset($options["label"])         ?   $options["label"]   : "";
        $label_class        = isset($options["label_class"])   ?   $options["label_class"] : "";
        $show_label         = isset($options["show_label"])    ?   $options["show_label"] : true;
        $render_label       = isset($options["render_label"]) ?   $options["render_label"] :true;

        $out = '';
        if($show_label && $render_label)
        {
            $out .= static::label($label, $id, $label_class);
        }

        $out .= "<select id='" . $id . "' name='" . $id . "' ";
        if ($mode == "multiple")
            $out .=" multiple='multiple' ";

        $out .= "class='";
        $out .= "{$classes} ";

        // if($select2)
            // $out .= " select2 select2-hidden-accessible ";

        $out .= $classes."' ";
        $out .= $attrs . ">";


        if($show_please_select)
            $out .= '<option value="">لطفا یک آیتم انتخاب کنید</option>';

        
        // pr(array($id,$input, $mode));
        // pr("...................");
        if($use_value_only)
        {
            foreach ($input as $k=>$v) {

                if (is_array($selected_option)){
                    if (in_array($v, $selected_option))
                        $out .='<option value="'.$v.'" selected="selected">'.$v.'</option>';
                    else
                        $out .='<option value="'.$v.'">'.$v.'</option>';
                }
                else{
                    if ($selected_option != $v)
                        $out .='<option value="'.$v.'">'.$v.'</option>';
                    else
                        $out .='<option value="'.$v.'" selected="selected">'.$v.'</option>';                
                }

            }
        }
        else{   // use key value mode

            foreach ($input as $k=>$v) {

                if (is_array($selected_option)){
                    if (in_array($k, $selected_option))
                        $out .='<option value="'.$k.'" selected="selected">'.$v.'</option>';
                    else
                        $out .='<option value="'.$k.'">'.$v.'</option>';
                }
                else{
                    if ($selected_option != $k)
                        $out .='<option value="'.$k.'">'.$v.'</option>';
                    else
                        $out .='<option value="'.$k.'" selected="selected">'.$v.'</option>';
                }

            }   
        }
        
        $out .= '</select>';
        // if($select2)
            // $out .='<script type="text/javascript">
            //     //         $("#'.$id.'").select2();
            //         </script>
            // ';
        return $out;
    }



    public static function label($text = "", $for = "", $label_class)
    {
        return '<label for="' . $for . '" class="' . $label_class .  '">' . $text . "</label>";
    }

    public function e(){
        return VM::input($this->to_array());
    }
    public function __toString(){
        return VM::input($this->to_array());
    }

}
// $v=VM::instance();
// echo $v->lbl("testlbl")->id("id_test")->value("value-test")->attrs("attrs_tst")->e();
// pre("");


// Returns a file size limit in bytes based on the PHP upload_max_filesize
// and post_max_size
function file_upload_max_size() {
  static $max_size = -1;

  if ($max_size < 0) {
    // Start with post_max_size.
    $post_max_size = parse_size(ini_get('post_max_size'));
    if ($post_max_size > 0) {
      $max_size = $post_max_size;
    }

    // If upload_max_size is less, then reduce. Except if upload_max_size is
    // zero, which indicates no limit.
    $upload_max = parse_size(ini_get('upload_max_filesize'));
    if ($upload_max > 0 && $upload_max < $max_size) {
      $max_size = $upload_max;
    }
  }
  return $max_size;
}

function parse_size($size) {
  $unit = preg_replace('/[^bkmgtpezy]/i', '', $size); // Remove the non-unit characters from the size.
  $size = preg_replace('/[^0-9\.]/', '', $size); // Remove the non-numeric characters from the size.
  if ($unit) {
    // Find the position of the unit in the ordered string which is the power of magnitude to multiply a kilobyte by.
    return round($size * pow(1024, stripos('bkmgtpezy', $unit[0])));
  }
  else {
    return round($size);
  }
}






//----------------------------------------------------------------------------------------------
 define('end_of_line',PHP_EOL);
//define('end_of_line','');
function a($content='',$attrs='')
{
    return "<a {$attrs}>{$content}</a>";
}
function ea($content='',$attrs='')
{
    echo a($content,$attrs);
}

function span($content='',$attrs='')
{
    return "<span>{$content}</span>" . end_of_line;
}

function espan($content='')
{
    echo span($content);
}

// function div($content='',$attrs='')
// {
//     return "<div {$attrs}>{$content}</div>" . end_of_line;
// }

function ediv($content='',$attrs='')
{
    echo div($content,$attrs);
}


function lbl($content='',$attrs='') 
{
    return "<label {$attrs}>{$content}</label>" . end_of_line;
}

function elbl($content='',$attrs='')
{
    echo lbl($content,$attrs);
}

function btn($content='', $attrs='')
{
    return "<button ${attrs}>{$content}</button>" . end_of_line;
}

function ebtn($content='',$attrs='')
{
    echo btn($content,$attrs);
}

function txt($content='',$attrs='')
{
    return "<input type='text' value='{$content}' {$attrs} >";
}

function etxt($content='',$attrs='')
{
    echo txt($content,$attrs);
}

function hidden($name='',$value='')
{
    return "<input type='hidden' id='{$name}' name='{$name}' value='{$value}' />" . end_of_line;
}

function ehidden($name='',$value='')
{
    echo hidden($name,$value);
}

function p($content='',$attrs='')
{
    return "<p {$attrs}>{$content}</p>" . end_of_line;
}

function ep($content='',$attrs='')
{
    echo p($content,$attrs);
}

function submit($content='',$attrs='')
{
    return "<input type='submit' value='{$content} {$attrs} />" . end_of_line;
}

function esubmit($content='',$attrs='')
{
    echo submit($content,$attrs);
}

function email($content='',$attrs='')
{
    return "<input type='email' ${attrs}>" . end_of_line;
}

function eemail($content='',$attrs='')
{
    echo email($content,$attrs);
}

function checkbox($content='',$attrs='')
{
    return "<input type='checkbox' {$attrs}>{$content}" . end_of_line;
}

function echeckbox($content='',$attrs='')
{
    echo checkbox($content,$attrs);
}

function radio($content='',$attrs='')
{
    return "<input type='radio' {$attrs}>" . end_of_line;
}

function eradio($content='',$attrs='')
{
    echo radio($content,$attrs);
}

function img($src='',$attrs='')
{
    return "<img src='{$src}' {$attrs} >" . end_of_line;
}

function eimg($src='',$attrs='')
{
    echo img($src,$attrs);
}

function css($url='')
{
    return "<link href='{$url}' rel='stylesheet' />" . end_of_line;
}

function ecss($url='')
{
    echo css($url);
}

function js($url='')
{
    return "<script src='{$url}'></script>" . end_of_line;
}

function ejs($url='')
{
    echo js($url);
}


function meta($name='',$description='')
{
    return "<meta name='{$name}' description='{$description} />" . end_of_line;
}

function emeta($name='',$description='')
{
    echo meta($name,$description);
}


function tag($tag,$content='',$attrs='')
{
    return "<{$tag} {$attrs}>{$content}</{$tag}>" . end_of_line;
}

function et2($tag,$content='',$attrs='')
{
        echo tag($tag,$content='',$attrs='');
}

///------------------------------------------------
define('use_template',true);
$template = array
(
    "label"     => "lbl",
    "lbl"       => "lbl",

    "button"    => "btn",
    "btn"       => "btn",

    "a"         => "a-ex"
);
///------------------------------------------------
function parse_line($args)
{
        global $template;
        $args = explode("|",$args);
        $tag = $classes = $id = $content = $rest = $styles = "";
        foreach($args as $arg)
        {
            if(str_begin($arg,"~"))
            {
                $tag = substr($arg,1);
            }else if(str_begin($arg,"."))
            {
                $classes = trim(join(" ",explode(".",$arg)));
            }else if(str_begin($arg,"@"))
            {
                $styles =  substr($arg,1);
            }else if(str_begin($arg,"#"))
            {
                $id = substr($arg,1);
            }else if(str_begin($arg,"^"))
            {
                $content=substr($arg,1);
            }else{
                $rest .= " " . $arg  ." ";
            }
        }
        
        if(defined('use_template') && use_template)
        {
            if(isset($template[$tag]))
                $classes .=  " " . $template[$tag];
            
        }
        $classes = empty($classes) ? '' :"class='{$classes}'";
        $styles  = empty($styles)  ? '' : "style='{$styles}'";
        $id      = empty($id)      ? '' :"id='{$id}'";
        $attrs   = trim("{$classes} {$id} {$styles} {$rest}") ;

        switch($tag){
            case 'lbl':
            case 'label':
                return lbl($content,$attrs) . end_of_line;
            case 'btn':
            case 'button':
                return btn($content,$attrs) . end_of_line;
            case 'div':
                return div($content,$attrs) . end_of_line;
            case 'a':
                return a($content,$attrs) . end_of_line;
            case 'txt':
                return txt($content,$attrs) . end_of_line;
            case 'img':
                return img($content,$attrs) . end_of_line;
            case 'checkbox':
                return checkbox($content,$attrs) . end_of_line;
            case 'radio':
                return radio($content,$attrs) . end_of_line;
            case 'span':
                return span($content,$attrs) . end_of_line;
            case 'email':
                return email($content,$attrs) . end_of_line;
        }
        return "<{$tag} {$attrs}>{$content}</{$tag}>"; 
}
function e()
{
    $num_args = func_num_args();
    if($num_args==1)
    {
        return parse_line(func_get_arg(0));
    }
    
    if($num_args > 1)
    {
        $i=0;
        $head=$tail="";
        
        for(; $i < $num_args; $i++)
        {
            $arg = func_get_arg($i);
            if(str_begin($arg,"~div"))
            {
                $div = str_replace("</div>","",parse_line($arg) );
                $head .=  $div .  end_of_line . str_repeat(" ",$i+1) ;
                $tail .= "</div>" . end_of_line . str_repeat(" ",$i+1) ;
            }else
                break;
        }
        if($i < $num_args){
            return $head  . e(func_get_arg($i)) . $tail . end_of_line;
        }
    }
    return "there was an error";
}


/**
 * Check if a string is json encoded
 *
 * @param  string $string string to check
 * @return bool
 */
function is_json($string)
{
    json_decode($string);
    return json_last_error() === JSON_ERROR_NONE;
}

function city_airport_select($data_attrs=false){
    $c = city_airport();
    $ret = '';
    foreach($c as $v){
        if($data_attrs){
          $ret .= sprintf("<option value='%s' data-en='%s' data-fa='%s' data-iatacode='%s'>%s</option>",
                                    $v["IATACode"],$v["en"],$v["name"],$v["IATACode"], $v["city"]);
        }else {
            $ret .= sprintf("<option value='%s'>%s</option>", $v["IATACode"], $v["city"]);
        }
    }
    return $ret;
}

function iatacode_to_city($code){
    $c = city_airport();
    foreach($c as $v){
        if($v["IATACode"] == $code){
            return $v["city"];
        }
    }
    return "";
}

function airport_info($iatacode){
	foreach(city_airport() as $airport){
		if($airport["IATACode"] == $iatacode)
			return $airport;
	}
	return null;
}

function city_airport(){
    return
        array(
            array("city" => "تهران", "IATACode" => "THR", "en" => "tehran","name" => "آبادان"),
            array("city" => "اهواز", "IATACode" => "AWZ", "en"=>"ahwaz","name" => "اهواز"),
            array("city" => "شیراز", "IATACode" => "SYZ", "en" => "shiraz","name" => "شیراز"),
            array("city" => "مشهد", "IATACode" => "MHD", "en"=>"mashhad","name" => "مشهد"),
            array("city" => "بندر عباس", "IATACode" => "BND", "en"=>"bandare-abas","name" => "بندر عباس"),
            array("city" => "اصفهان", "IATACode" => "IFN", "en"=>"isfehan","name" => "اصفهان"),
            array("city" => "تبریز", "IATACode" => "TBZ", "en"=>"tabriz","name" => "تبریز"),
            array("city" => "اراک", "IATACode" => "AJK", "en"=>"arak","name" => "اراک"),
            array("city" => "اردبيل", "IATACode" => "ADU", "en"=>"ardebil","name" => "اردبیل"),
            array("city" => "اروميه", "IATACode" => "OMH","en"=>"orumie","name" => "ارومیه"),
            array("city" => "ايرانشهر", "IATACode" => "IHR", "en"=>"iranshahr","name" => "ایرانشهر"),
            array("city" => "ايلام", "IATACode" => "IIL", "en"=>"ilam","name" => "ایلام"),
            array("city" => "آبادان", "IATACode" => "ABD", "en"=>"abadan","name" => "آبادان"),
            array("city" => "بادرود", "IATACode" => "BDB", "en"=>"badrood","name" => "بادرود"),
            array("city" => "بجنورد", "IATACode" => "BJB", "en"=>"bojnord","name" => "بجنورد"),
            array("city" => "بم", "IATACode" => "BXR", "en"=>"bam","name" => "بم"),
            array("city" => "بندر لنگه", "IATACode" => "BDH", "en"=>"bandare-lenge","name" => "بندر لنگه"),
            array("city" => "بوشهر", "IATACode" => "BUZ", "en"=>"boshehr","name" => "بوشهر"),
            array("city" => "بيرجند", "IATACode" => "XBJ", "en"=>"birjand","name" => "بیرجند"),
            array("city" => "جيرفت", "IATACode" => "JYR", "en"=>"jiroft","name" => "جیرفت"),
            array("city" => "چابهار", "IATACode" => "ZBR", "en"=>"chabahar","name" => "چابهار"),
            array("city" => "خارک", "IATACode" => "KHK", "en"=>"khark","name" => "خارک"),
            array("city" => "خرم آباد", "IATACode" => "KHD", "en"=>"khoram abad","name" => "خرم آباد"),
            array("city" => "خوي", "IATACode" => "KHY", "en"=>"khoy", "name" => "خوی"),
            array("city" => "دزفول", "IATACode" => "DEF", "en"=>"dezfol", "name" => "دزفول"),
            array("city" => "رامسر", "IATACode" => "RZR", "en"=>"ramsar", "name" => "رامسر"),
            array("city" => "رشت", "IATACode" => "RAS", "en"=>"rasht", "name" => "رشت"),
            array("city" => "رفسنجان", "IATACode" => "RJN","en"=>"rafsenjan", "name" => "رفسنجان"),
            array("city" => "زابل", "IATACode" => "ACZ", "en"=>"zabol", "name" => "زابل"),
            array("city" => "زاهدان", "IATACode" => "ZAH","en"=>"zahedan", "name" => "زاهدان"),
            array("city" => "زنجان", "IATACode" => "JWN", "en"=>"zanjan", "name" => "زنجان"),
            array("city" => "ساري", "IATACode" => "SRY", "en"=>"sari", "name" => "ساری"),
            array("city" => "سبزوار", "IATACode" => "AFZ", "en"=>"sabezevar", "name" => "سبزوار"),
            array("city" => "سنندج", "IATACode" => "SDG", "en"=>"sanandaj", "name" => "سنندج"),
            array("city" => "سهند", "IATACode" => "ACP", "en"=>"sahand", "name" => "سهند"),
            array("city" => "سيرجان", "IATACode" => "SYJ", "en"=>"sirjan", "name" => "سیرجان"),
            array("city" => "شهرکرد", "IATACode" => "CQD", "en"=>"sharekord", "name" => "شهرکرد"),
            array("city" => "شاهرود", "IATACode" => "RUD", "en"=>"shahrod", "name" => "شاهرود"),
            array("city" => "طبس", "IATACode" => "TCX", "en"=>"tabas", "name" => "طبس"),
            array("city" => "عسلويه", "IATACode" => "PGU", "en"=>"asalooye", "name" => "عسلويه"),
            array("city" => "قشم", "IATACode" => "GSM", "en"=>"qeshm", "name" => "قشم"),
            array("city" => "کاشان", "IATACode" => "KSN", "en"=>"kashan", "name" => "کاشان"),
            array("city" => "کلاله", "IATACode" => "KLM", "en"=>"kalale", "name" => "کلاله"),
            array("city" => "کرمان", "IATACode" => "KER", "en"=>"kerman", "name" => "کرمان"),
            array("city" => "کرمانشاه", "IATACode" => "KSH", "en"=>"kermanshah", "name" => "کرمانشاه"),
            array("city" => "کيش", "IATACode" => "KIH", "en"=>"kish", "name" => "کیش"),
            array("city" => "گچساران", "IATACode" => "GCH", "en"=>"gachsaran", "name" => "گچساران"),
            array("city" => "گرگان", "IATACode" => "GBT", "en"=>"gorgan", "name" => "گرگان"),
            array("city" => "لار", "IATACode" => "LRR", "en"=>"lar", "name" => "لار"),
            array("city" => "لامرد", "IATACode" => "LFM", "en"=>"lamerd", "name" => "لامرد"),
            array("city" => "ماهشهر", "IATACode" => "MRX", "en"=>"mahshahr", "name" => "ماهشهر"),
            array("city" => "ماکو", "IATACode" => "MKU", "en"=>"mako", "name" => "ماکو"),
            array("city" => "نوشهر", "IATACode" => "NSH", "en"=>"noshahr", "name" => "نوشهر"),
            array("city" => "همدان","IATACode" => "HDM","en"=>"hamedan", "name" => "همدان"),
            array("city" => "ياسوج", "IATACode" => "YES","en"=>"yasoj", "name" => "یاسوج"),
            array("city" => "يزد", "IATACode" => "AZD", "en"=>"yazd", "name" => "یزد")
        );

}

function is_persian_date($in){
	$arr = explode("-",$in);
	$arr2 = explode("/",$in);
	if(count($arr)!==3 && count($arr2)!==3) return false;

	//tests for m-d-y  and 1499 > y > 1300;
	if(count($arr) == 3){
		$m = intval(ltrim($arr[0],'0'));
		$d = intval(ltrim($arr[1],'0'));
		$y = intval($arr[2]);
		$ok = $m >=1 && $m <= 12;
		$ok = $ok && $d >=1 && $d <= 31;
		if($y > 100 && ($y < 1300 || $y > 1499) )
				$ok = false;
	}

	// tests for y-m-d  and 1499 > y > 1300;
	if(count($arr) == 3){
		$y = intval($arr[0]);
		$m = intval(ltrim($arr[1],0));
		$d = intval(ltrim($arr[2],0));
		$ok2 = $d >=1 && $d <=12;
		$ok2 = $ok2 && $m>=1 && $d<=31;
		if($y > 100 && ($y < 1300 || $y > 1499))
				$ok2 = false;	
	}

	if(isset($ok) && isset($ok2)) return $ok || $ok2;

	if(count($arr2)==3){
		$in= str_replace("/","-",$in);
		return is_persian_date($in);
	}
	return false;
}


//[Outputting PHP To Browser Console :: Code In PHP](https://codeinphp.github.io/post/outputting-php-to-browser-console/)
/**
 * Logs messages/variables/data to browser console from within php
 *
 * @param $name: message to be shown for optional data/vars
 * @param $data: variable (scalar/mixed) arrays/objects, etc to be logged
 * @param $jsEval: whether to apply JS eval() to arrays/objects
 *
 * @return none
 * @author Sarfraz
 */
 function logConsole($name, $data = NULL, $jsEval = FALSE)
 {
      if (! $name) return false;

      $isevaled = false;
      $type = ($data || gettype($data)) ? 'Type: ' . gettype($data) : '';

      if ($jsEval && (is_array($data) || is_object($data)))
      {
           $data = 'eval(' . preg_replace('#[\s\r\n\t\0\x0B]+#', '', json_encode($data)) . ')';
           $isevaled = true;
      }
      else
      {
           $data = json_encode($data);
      }

      // sanitalize
      $data = $data ? $data : '';
      $search_array = array("#'#", '#""#', "#''#", "#\n#", "#\r\n#");
      $replace_array = array('"', '', '', '\\n', '\\n');
      $data = preg_replace($search_array,  $replace_array, $data);
      $data = ltrim(rtrim($data, '"'), '"');
      $data = $isevaled ? $data : ($data[0] === "'") ? $data : "'" . $data . "'";

$js = <<<JSCODE
\n<script>
 // fallback - to deal with IE (or browsers that don't have console)
 if (! window.console) console = {};
 console.log = console.log || function(name, data){};
 // end of fallback

 console.log('$name');
 console.log('------------------------------------------');
 console.log('$type');
 console.log($data);
 console.log('\\n');
</script>
JSCODE;

      echo $js;
 } // end logConsole
 
 $_dbg = "";
 function dbg($in){
    global $_dbg;
    if(is_string($in)){
        $_dbg.=$in. PHP_EOL;
    }
 }
 function gdbg(){
    global $_dbg;
     return $_dbg;
 }

/**
 * Verifies that an email is valid.
 */
function is_email( $email) {
    dbg("in is_email");
    // Test for the minimum length the email can be
    if ( strlen( $email ) < 3 ) {
        dbg('email too short');
        //email too short
        return false;
    }

    // Test for an @ character after the first position
    if ( strpos( $email, '@', 1 ) === false ) {
        dbg('email not at');
        //email_no_at
        return false;
    }

    // Split out the local and domain parts
    list( $local, $domain ) = explode( '@', $email, 2 );

    // LOCAL PART
    // Test for invalid characters
    if ( !preg_match( '/^[a-zA-Z0-9!#$%&\'*+\/=?^_`{|}~\.-]+$/', $local ) ) {
        dbg("local invalid chars");
        //local_invalid_chars
        return false;
    }

    // DOMAIN PART
    // Test for sequences of periods
    if ( preg_match( '/\.{2,}/', $domain ) ) {
        dbg("domain period sequence");
        //domain_period_sequence
        return false;
    }

    // Test for leading and trailing periods and whitespace
    if ( trim( $domain, " \t\n\r\0\x0B." ) !== $domain ) {
        dbg("leading or trailing periods or whitespace");
      return false;
    }

    // Split the domain into subs
    $subs = explode( '.', $domain );

    // Assume the domain will have at least two subs
    if ( 2 > count( $subs ) ) {
        dbg("count <> 2");
        return false;
    }

    // Loop through each sub
    foreach ( $subs as $sub ) {
        // Test for leading and trailing hyphens and whitespace
        if ( trim( $sub, " \t\n\r\0\x0B-" ) !== $sub ) {
            dbg("leading or trailing hyphens or whitesapce");
            return false;
        }

        // Test for invalid characters
        if ( !preg_match('/^[a-z0-9-]+$/i', $sub ) ) {
            dbg("invalid characters");
          return false;
        }
    }
    dbg('returning true');
    return true;
}

function is_null_or_empty(){
    $num_args = func_num_args();
    if($num_args == 0) return true;

    $args = func_get_args();

    for($i=0; $i < $num_args; $i++)
        if(is_null($args[$i]) || empty($args[$i]))
            return true;

    return false;
}