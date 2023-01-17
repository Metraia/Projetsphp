<?php
  error_reporting(0);



$link_nick = "https://plarium.com/services/api/nicknames/new/create?group=2&gender=2";

$header_nick = array (

'accept: */*',
'content-type: application/json',
'origin: https://plarium.com',
'referer: https://plarium.com/pt/resource/generator/nickname-generator/',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-origin',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36 OPR/94.0.0.0'

);

$post_nick = 'group=2&gender=2';


$ini = curl_init();
curl_setopt($ini, CURLOPT_URL, $link_nick);
curl_setopt($ini, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ini, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ini, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ini, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($ini, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ini, CURLOPT_COOKIEJAR, getcwd().'./gerarnick.txt');
curl_setopt($ini, CURLOPT_COOKIEFILE, getcwd().'./gerarnick.txt');
curl_setopt($ini, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ini, CURLOPT_HTTPHEADER, $header_nick);
curl_setopt($ini, CURLOPT_POSTFIELDS, $post_nick);
$nick = curl_exec($ini);

$gerado = substr($nick, 6, 8);

$resultado_nick = str_replace('"', ' ', $gerado);


?>