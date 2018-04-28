<?php
require_once __DIR__."/curl_helper.php";
require_once __DIR__."/db.php";
FUNCTION html2text($html){
		$tags = ARRAY (
		0 => '~<h[123][^>]+>~si',
		1 => '~<h[456][^>]+>~si',
		2 => '~<table[^>]+>~si',
		3 => '~<tr[^>]+>~si',
		4 => '~<li[^>]+>~si',
		5 => '~<br[^>]+>~si',
		6 => '~<p[^>]+>~si',
		7 => '~<div[^>]+>~si',
		);
		$html = PREG_REPLACE($tags,"\n",$html);
		$html = PREG_REPLACE('~</t(d|h)>\s*<t(d|h)[^>]+>~si',' - ',$html);
		$html = PREG_REPLACE('~<[^>]+>~s','',$html);
		// reducing spaces
		$html = PREG_REPLACE('~ +~s',' ',$html);
		$html = PREG_REPLACE('~^\s+~m','',$html);
		$html = PREG_REPLACE('~\s+$~m','',$html);
		// reducing newlines
		$html = PREG_REPLACE('~\n+~s',"\n",$html);
		RETURN $html;
}

/////////////////////////////////////////////////////////////////////////////////////
$curl1 = new Curl(random_uagent());
$resp = $curl1->get("http://spys.one/en/http-proxy-list/");
$body = $resp->body;
// preg_match_all('/<script type="text\/javascript">.*\n.*<\/script>/',$body,$matches);

// die(substr($body,strpos($body,"document.write")));
$start_from = "(adsbygoogle = window.adsbygoogle || []).push({});";
$start = strpos($body,$start_from);
$end = strpos($body,'<td width="10%" class=close><a href="/en/" title="Free proxy">SPYS.ONE/EN/</a></td>');
$target = substr($body,$start+strlen($start_from), $end-$start);
$target = ltrim($target);
$target = ltrim($target,"</script>");


$start_from = '<script type="text/javascript">';
$start = strpos($target,$start_from) + strlen($start_from);
$end = strpos($target,"</script>");
$target = substr($target,$start+$start_from, $end-$start);
$tmp = explode(";",$target);

$tmp2 = $target = array();
foreach($tmp as $item){
	if(strpos($item,"^")===false && strpos($item,"=")!==false){
		list($k,$v) = explode("=",$item);
		$tmp2[$k] = $v;
	}
}

foreach($tmp as $item){
	if(strpos($item,"^")!==false){
		list($k,$v) = explode("=",$item);
		// print_r(array($k,$v));
		list($kk,$vv) = explode("^",$v);
		// print_r(array($kk,$vv));

		$target[$k] = intval($kk) ^ intval($tmp2[$vv]);
	}
}
$target = array_merge($target,$tmp2);
// print_r($target);
// print_r($tmp2);
$body= str_replace('<script type="text/javascript">document.write("<font class=spy2>:<\/font>"+',":",$body);
$tmp = $body;
//if(preg_match_all("@(\([0-9a-z]*\^[0-9a-z]*\))\+(\([0-9a-z]*\^[0-9a-z]*\))@",$body,$matches))
//{
//    foreach ($matches[0] as $match)
//    {
//        var_dump($match);
//
//        $orig = $match;
//        $match = str_replace("(","",$match);
//        $match = str_replace(")","",$match);
//
//        list($first,$second)= explode('+',$match);
//        list($a,$b) =explode('^',$first);
//        $res =  intval($target[$a] ^ $target[$b]) ."";
//        list($a,$b) = explode('^',$second);
//        $res .= intval($target[$a] ^ $target[$b]) . "";
//        $tmp = str_replace($orig,$res,$tmp);
//    }
//}

if(preg_match_all("@\([0-9a-z]*\^[0-9a-z]*\)@",$body,$matches))
{
//    (f6e5y5^c3p6)+(b2h8x4^j0f6)+(f6e5y5^c3p6)+(b2h8x4^j0f6)
	foreach ($matches[0] as $match)
	{
	    $orig = $match;
	    $match = str_replace("(","",$match);
	    $match = str_replace(")","",$match);
		list($a,$b) =explode('^',$match);
		$res =  intval($target[$a] ^ $target[$b]) ."";
		$tmp = str_replace($orig,$res,$tmp);
	}
}
$body=$tmp;
$body =str_replace('</script>','',$body);
$body = str_replace('</font>','',$body);
$body = str_replace('+','',$body);
$body =html2text($body);
echo "from  proxyscrapper2.php".PHP_EOL;
$db = new db();
if (preg_match_all(
    '/\b(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)
    (?::
      (?![7-9]\d\d\d\d) #Ignrore anything above 7....
      (?!6[6-9]\d\d\d)  #Ignore anything abovr 69...
      (?!65[6-9]\d\d)   #etc...
      (?!655[4-9]\d)
      (?!6553[6-9])
      (?!0+)            #ignore complete 0(s)
      (?P<Port>\d{1,5})
    )?
    \b/x', 
    $body,$matches)) {
			 foreach($matches[0] as $k){
			     if(strpos($k,":")!==false) {
			         echo $k . PHP_EOL;
                     if (!$db->proxy_exist($k)) {
                         echo "adding proxy " . PHP_EOL;
                         $db->add_proxy($k);
                     }
                 }
		   }
}