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
    $telefone = multiexplode(array(":", "|", ""), $lista)[0];
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


$checkar_telefonedigitos = strlen($telefone);


if (($checkar_telefonedigitos < 11) or ($checkar_telefonedigitos > 11)!== false ) {


    die("#Reprovada => Telefone inválido.");

}


$cria_senhaaleatoria = metraianumeros(8);


/*  

O TELEFONE A SER INSERIDO, TEM REGULAMENTADO A PORTAR O DDD SEM O "O" NA FRENTE.

EX:

MEU DDD É 021

COLOCAR> 21+NUMEROTELEFONE

EX> 21989832134

*/

// ================ // ====================//==========================//============================= // ================================//=================//




$criarcontas = 'https://dokj1jysdk9xo.cloudfront.net/global/v5_oeiwjd/register.php?phone=55'.$telefone.'&pd='.$cria_senhaaleatoria.'&pid=0';

$postfield_createacc = 'phone=55'.$telefone.'&pd='.$cria_senhaaleatoria.'&pid=0';




$ini = curl_init();
curl_setopt($ini, CURLOPT_URL, $criarcontas);
curl_setopt($ini, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ini, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ini, CURLOPT_POST, "GET");
curl_setopt($ini, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ini, CURLOPT_HTTPHEADER, array(

'accept: application/json, text/plain, */*',
'origin: https://br.bet.buzz',
'referer: https://br.bet.buzz/',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: cross-site',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36 OPR/94.0.0.0'

));
curl_setopt($ini, CURLOPT_POSTFIELDS, $postfield_createacc);
$create = curl_exec($ini);





        

if (strstr($create, '"res":0')!== false ) {


    echo "#Aprovada => Telefone registrado: $telefone => SENHA: $cria_senhaaleatoria => ganhará ao se registrar 0,40 centavos na Roleta SPIN. <br>";

} else if (empty($create)!==false ) {


    echo "#Error => Não foi identificados resultados pela (API). <br>";

} else if (strstr($create, '30002')!== false ) {


    echo "#Reprovada => TELEFONE: $telefone => SENHA: $cria_senhaaleatoria => SENHA MUITO CURTA <br>";
} 

else if (strstr($create, '30003')!== false ) {


    echo "#Reprovada => TELEFONE: $telefone => SENHA: $cria_senhaaleatoria => RETORNO: Conta já cadastrada no banco de dados <br>";


} else {


    echo "#Reprovada => Sem resultados <br>";


}


?>