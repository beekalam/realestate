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
$resp = $curl1->get("https://www.ip-adress.com/proxy-list");
$body = $resp->body;
$start = strpos($body,"<table ");
$end = strpos($body,"</table");
$txt =  html2text( substr($body,$start,$end-$start) );
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
    $txt,$matches)) {
				$db = new db();
	
			foreach($matches[0] as $k){
				if(!$db->proxy_exist($k)){
					$db->add_proxy($k);
				}
		  }
}
