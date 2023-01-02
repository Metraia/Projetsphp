<?php

// ================ // ====================//==========================//============================= // ================================//=================
// ================ // ====================//==============  C U R L - E M A I L  T E M P ================= // ================================//============
// ================ // ====================//============== P A R A  V E R I F I C A C O E S====================== // ================================//=====



$link_invertexto = 'https://www.invertexto.com/gerador-email-temporario';


$header_invertexto = array (

'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
'sec-fetch-dest: document',
'sec-fetch-mode: navigate',
'sec-fetch-site: none',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36 OPR/94.0.0.0'


);


$ini = curl_init();
curl_setopt($ini, CURLOPT_URL, $link_invertexto);
curl_setopt($ini, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ini, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ini, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ini, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($ini, CURLOPT_CUSTOMREQUEST, "GET");
curl_setopt($ini, CURLOPT_COOKIEJAR, $Metraia_cookiamentos);
curl_setopt($ini, CURLOPT_COOKIEFILE, $Metraia_cookiamentos);
curl_setopt($ini, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ini, CURLOPT_HTTPHEADER, $header_invertexto);
$invertexto_email = curl_exec($ini);


$array_setaremail = 'metralhaverificacoes'; // DEFINA O EMAIL QUE QUISER..

$link_definesetemail = 'https://www.invertexto.com/gerador-email-temporario?email='.$array_setaremail.'@uorak.com';


$header_setemail = array (

'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
'referer: https://www.invertexto.com/gerador-email-temporario?email='.$array_setaremail.'@uorak.com',
'sec-fetch-dest: document',
'sec-fetch-mode: navigate',
'sec-fetch-site: same-origin',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36 OPR/94.0.0.0'


);


$post_setemail = 'email='.$array_setaremail.'@uorak.com';


$ini = curl_init();
curl_setopt($ini, CURLOPT_URL, $link_definesetemail);
curl_setopt($ini, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ini, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ini, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ini, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($ini, CURLOPT_COOKIEJAR, $Metraia_cookiamentos);
curl_setopt($ini, CURLOPT_COOKIEFILE, $Metraia_cookiamentos);
curl_setopt($ini, CURLOPT_CUSTOMREQUEST, "GET");
curl_setopt($ini, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ini, CURLOPT_HTTPHEADER, $header_setemail);
curl_setopt($ini, CURLOPT_POSTFIELDS, $post_setemail);
$define_email = curl_exec($ini);
//$token_invertexto = metraiapuxar($define_email, "token=","',");
$email_setado = metraiapuxar($define_email, '<input type="text" class="form-control" id="email-input" value="','"', 1);
$idzin = metraiapuxar($define_email, '"id":"','"', 1);

$codigo = metraiapuxar($define_email, '<tr id="'.$idzin.'">','</tr>', 1);



 // ================ // ====================//==========================//============================= // ================================//=================
// ================ // ====================//==============  C U R L - E M A I L  T E M P ================= // ================================//============
// ================ // ====================//============== P A R A  V E R I F I C A C O E S====================== // ================================//=====

?>