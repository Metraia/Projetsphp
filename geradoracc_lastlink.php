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

include("./gerador-nick.php");



if (file_exists("cookie.txt")!== false) {unlink("cookie.txt");fopen
  ("cookie.txt", 'w+');fclose
  ("cookie.txt");}else{fopen
  ("cookie.txt", 'w+');fclose
  ("cookie.txt");}


//curl_setopt($ini, CURLOPT_COOKIEJAR, $Metraia_cookiamentos);
//curl_setopt($ini, CURLOPT_COOKIEFILE, $Metraia_cookiamentos);

    
    function multiexplode($delimiters, $string) {
        $one = str_replace($delimiters, $delimiters[0], $string);
        $two = explode($delimiters[0], $one);
        return $two;
    }
    $lista = $_GET['lista'];
    function logMe($msg){
    
        $fp = fopen("log_checker.txt", "a");

        $escreve = fwrite($fp, $msg);

        fclose($fp);
}

    function metraianumeros($size){
    $str = '';
    $numbes = '0123456789';
    for ($i=0; $i < $size; $i++) { 
   $str.= $numbes[rand(0, strlen($numbes) - 1)];
    }
    return $str;
    }

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



// ================ // ====================//==========================//============================= // ================================//=================//
// ================ // ====================//==========================//============================= // ================================//=================//

## DADOS INFO - 4DEVS (API DADOS CHK)

$linkurl_dados = "https://www.4devs.com.br/ferramentas_online.php";
$post_dados = 'acao=gerar_pessoa&sexo=I&pontuacao=N&idade=0&cep_estado=&txt_qtde=1&cep_cidade=';
$agent = "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.5112.102 Safari/537.36 OPR/90.0.4480.54";


$ini = curl_init();
curl_setopt($ini, CURLOPT_URL, $linkurl_dados);
curl_setopt($ini, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ini, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ini, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ini, CURLOPT_HTTPHEADER, array(

'content-type: application/x-www-form-urlencoded',
'origin: https://www.4devs.com.br',
'referer: https://www.4devs.com.br/gerador_de_pessoas',
'user-agent: '.$agent.''

));
curl_setopt($ini, CURLOPT_POSTFIELDS, $post_dados);
$dados = curl_exec($ini);


$nome = metraiapuxar($dados, '"nome":"','"');
$cpf = metraiapuxar($dados, '"cpf":"','"');
$rg = metraiapuxar($dados, '"rg":"','"');
$email_dados = metraiapuxar($dados, '"email": "','"', 1);
$data_nasc = metraiapuxar($dados, '"data_nasc":"','"');
$sexo = metraiapuxar($dados, '"sexo":"','"');
$mae = metraiapuxar($dados, '"mae":"','"');
$pai = metraiapuxar($dados, '"pai":"','"');
$cep = metraiapuxar($dados, '"cep":"','"');
$endereco = metraiapuxar($dados, '"endereco":"','"');
$bairro = metraiapuxar($dados, '"bairro":"','"');
$celular = metraiapuxar($dados, '"celular":"','"');
$cidade = metraiapuxar($dados, '"cidade":"','"');
$telefone_fixo = metraiapuxar($dados, '"telefone_fixo":"','"');


## DADOS INFO - 4DEVS (API DADOS CHK)

 // ================ // ====================//==========================//============================= // ================================//=================
// ================ // ====================//==============  C U R L - E M A I L  T E M P ================= // ================================//============
// ================ // ====================//============== P A R A  V E R I F I C A C O E S====================== // ================================//=====


$Metraia_cookiamentos = getcwd().'/'.(cookie).'.txt';
unlink("cookie.txt");
$id = session_id();


################################################ G E R A D O R E S - API (BASE) ################################################


$gerar_numeros = metraianumeros(4);

// ================ // ====================//==========================//============================= // ================================//=================//



$cria_senhaaleatoria = metraianumeros(8);


$criarcontas = 'https://lastlink.com/api/dashboard/auth/signup';

$postfield_createacc = '{"Email":"'.$resultado_nick.'@uorak.com","Password":"'.$cria_senhaaleatoria.'","Name":"'.$resultado_nick.'","UserUTM":null}';


$header_criar = array (

'accept: application/json, text/plain, */*',
'content-type: application/json',
'origin: https://lastlink.com',
'referer: https://lastlink.com/app/sign-up',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-origin',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36 OPR/94.0.0.0'

);



$ini = curl_init();
curl_setopt($ini, CURLOPT_URL, $criarcontas);
curl_setopt($ini, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ini, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ini, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ini, CURLOPT_COOKIEJAR, $Metraia_cookiamentos);
curl_setopt($ini, CURLOPT_COOKIEFILE, $Metraia_cookiamentos);
curl_setopt($ini, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ini, CURLOPT_HTTPHEADER, $header_criar);
curl_setopt($ini, CURLOPT_POSTFIELDS, $postfield_createacc);
$create = curl_exec($ini);
$token_acesso = metraiapuxar($create, '"','"', 1);


$metraia_jsons = json_decode($create, true)['fields']['email'][0];

$retorno_cadastrado = $metraia_jsons['message'];

if (empty($retorno_cadastrado)!== false ) {

    $verifica_retorno = "Sem resultados.";

} else {

    $verifica_retorno = ''.$retorno_cadastrado.'';

}

$link_alterainsta = "https://lastlink.com/api/dashboard/profile/change-personal-info";

$header_alterainsta = array (

'accept: application/json, text/plain, */*',
'authorization: Bearer '.$token_acesso.'',
'content-type: application/json',
'origin: https://lastlink.com',
'referer: https://lastlink.com/app/creator/profile/personal',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-origin',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36 OPR/94.0.0.0'

);


$post_alterainsta = '{"username":"'.$resultado_nick.'","name":"'.$resultado_nick.'","email":"'.$resultado_nick.'@uorak.com"}';


$ini = curl_init();
curl_setopt($ini, CURLOPT_URL, $link_alterainsta);
curl_setopt($ini, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ini, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ini, CURLOPT_CUSTOMREQUEST, "PUT");
curl_setopt($ini, CURLOPT_COOKIEJAR, $Metraia_cookiamentos);
curl_setopt($ini, CURLOPT_COOKIEFILE, $Metraia_cookiamentos);
curl_setopt($ini, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ini, CURLOPT_HTTPHEADER, $header_alterainsta);
curl_setopt($ini, CURLOPT_POSTFIELDS, $post_alterainsta);
$insta_alterar = curl_exec($ini);


$link_addproduto = "https://lastlink.com/api/dashboard/creator/community/add";

$header_addproduto = array (

'accept: application/json, text/plain, */*',
'authorization: Bearer '.$token_acesso.'',
'content-type: application/json',
'origin: https://lastlink.com',
'referer: https://lastlink.com/app/creator/communities/new',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-origin',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36 OPR/94.0.0.0'

);

$post_addproduto = '{"title":"Sexo em viado'.$gerar_numeros.'","categoryId":"5c289992-df5b-4fc6-8d3e-b845dc9622c6"}';


$ini = curl_init();
curl_setopt($ini, CURLOPT_URL, $link_addproduto);
curl_setopt($ini, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ini, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ini, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ini, CURLOPT_COOKIEJAR, $Metraia_cookiamentos);
curl_setopt($ini, CURLOPT_COOKIEFILE, $Metraia_cookiamentos);
curl_setopt($ini, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ini, CURLOPT_HTTPHEADER, $header_addproduto);
curl_setopt($ini, CURLOPT_POSTFIELDS, $post_addproduto);
$add_produto = curl_exec($ini);


$link_tipoproduto = "https://lastlink.com/api/community/admin/8c7c6418-3ba2-4634-a7e6-7a75d582e6d6/set-product-type";

$header_tipodeproduto = array (

'accept: application/json, text/plain, */*',
'authorization: Bearer '.$token_acesso.'',
'content-type: application/json',
'origin: https://lastlink.com',
'referer: https://lastlink.com/app/creator/community/sexoemviado'.$gerar_numeros.'/new/choose-product',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-origin',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36 OPR/94.0.0.0'

);

$post_tipoproduto = '{"productTypeId":7}';


$ini = curl_init();
curl_setopt($ini, CURLOPT_URL, $link_tipoproduto);
curl_setopt($ini, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ini, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ini, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ini, CURLOPT_COOKIEJAR, $Metraia_cookiamentos);
curl_setopt($ini, CURLOPT_COOKIEFILE, $Metraia_cookiamentos);
curl_setopt($ini, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ini, CURLOPT_HTTPHEADER, $header_tipodeproduto);
curl_setopt($ini, CURLOPT_POSTFIELDS, $post_tipoproduto);
$tipo_produto = curl_exec($ini);


$link_carteira = "https://lastlink.com/api/dashboard/creator/wallet/add";

$header_criarcarteira = array (

'accept: application/json, text/plain, */*',
'authorization: Bearer '.$token_acesso.'',
'content-type: application/json',
'origin: https://lastlink.com',
'referer: https://lastlink.com/app/creator/wallets/add',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-origin',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36 OPR/94.0.0.0',

);

$post_criarcarteira = '{"name":"'.$nome.'","document":"'.$cpf.'","birthDate":"1985-04-22","documentTypeId":1,"cellphone":"'.$telefone_fixo.'","zipCode":"'.$cep.'","street":"'.$endereco.'","streetNumber":"5665","complement":"Casa","district":"'.$bairro.'","city":"'.$cidade.'","state":"SP"}';


$ini = curl_init();
curl_setopt($ini, CURLOPT_URL, $link_carteira);
curl_setopt($ini, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ini, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ini, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ini, CURLOPT_COOKIEJAR, $Metraia_cookiamentos);
curl_setopt($ini, CURLOPT_COOKIEFILE, $Metraia_cookiamentos);
curl_setopt($ini, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ini, CURLOPT_HTTPHEADER, $header_criarcarteira);
curl_setopt($ini, CURLOPT_POSTFIELDS, $post_criarcarteira);
$criar_carteira = curl_exec($ini);
 $id_wallet = metraiapuxar($criar_carteira, '"value":"','"', 1);



 $link_recebimento = "https://lastlink.com/api/dashboard/creator/anticipation/set-info";

$header_recebimento = array (

'accept: application/json, text/plain, */*',
'authorization: Bearer '.$token_acesso.'',
'content-type: application/json',
'origin: https://lastlink.com',
'referer: https://lastlink.com/app/creator/wallets/'.$id_wallet.'/edit/anticipation',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-origin',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36 OPR/94.0.0.0',

);

$post_recebimento = '{"anticipationTypeId":1,"daysAnticipation":5,"walletId":"'.$id_wallet.'"}';


$ini = curl_init();
curl_setopt($ini, CURLOPT_URL, $link_recebimento);
curl_setopt($ini, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ini, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ini, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ini, CURLOPT_COOKIEJAR, $Metraia_cookiamentos);
curl_setopt($ini, CURLOPT_COOKIEFILE, $Metraia_cookiamentos);
curl_setopt($ini, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ini, CURLOPT_HTTPHEADER, $header_recebimento);
curl_setopt($ini, CURLOPT_POSTFIELDS, $post_recebimento);
 echo $receber = curl_exec($ini);


if (strstr($create, 'fields')!== false ) {

    echo "#Error -> RETORNO: $verifica_retorno <br>";

    echo "~~~~~ D A D O S - L O G I N ~~~~~ <br><br><br>";

    echo "CONTA: $resultado_nick@uorak.com <br>";
    echo "SENHA: $cria_senhaaleatoria <br>";
    echo "NICK-NAME: $resultado_nick <br>";


} else if (empty($create)!== false ) {

    die("#Error -> Sem resultados, da requisicao.");

} else {


    echo "#Criada -> CONTA CADASTRADA NA LASTLINK ! <br><br>";

    echo "Automatizacão: Carteira, Produtos, user instagram, Plano de adiantamento. <br><br>";


    echo "~~~~~ D A D O S - L O G I N ~~~~~ <br><br><br>";


    echo "CONTA: $resultado_nick@uorak.com <br>";
    echo "SENHA: $cria_senhaaleatoria <br>";
    echo "NICK-NAME: $resultado_nick <br>";


}


?>