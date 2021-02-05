<?php

function fetch_value($str,$find_start,$find_end) {
	$start = @strpos($str,$find_start);
	if ($start === false) {
	return "";
	}
	$length = strlen($find_start);
	$end = strpos(substr($str,$start +$length),$find_end);
	return trim(substr($str,$start +$length,$end));
}
	// WARNA
	$putih = "\033[1;37m";
	$merah = "\033[1;31m";
	$kuning = "\033[1;33m";
	$biru = "\033[1;34m";
	$awalan = $kuning."• ";

system("clear");

function json($namaakhir, $namatampil){
	$json = json_decode($namaakhir);
	$hasil = $json->$namatampil;
	return $hasil;
}
function home($url, $ua = null){
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_COOKIEFILE, 'cok.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, 'cok.txt');
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	$result = curl_exec($ch);
	return $result;
}

function otp($url, $ua, $dat = null){
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $dat);
	$result = curl_exec($ch);
	$json = json_decode($result, TRUE);
	
	return $result;
}

	//FUNCTION CURL
function curl($url, $ua, $data = null){
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_COOKIEFILE, 'cok.txt');
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	$result = curl_exec($ch);
	return $result;
}

	//RANDOM GMAIL
function nama()
        {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "http://ninjaname.horseridersupply.com/indonesian_name.php");
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        $ex = curl_exec($ch);
        // $rand = json_decode($rnd_get, true);
        preg_match_all('~(&bull; (.*?)<br/>&bull; )~', $ex, $name);
        return $name[2][mt_rand(0, 14) ];
        }

$ua = array(
"User-Agent: Mozilla/5.0 (Linux; Android 6.0.1; SM-J500G Build/MMB29M) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Mobile Safari/537.36",
"Content-Type: application/x-www-form-urlencoded",
"Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8",
"Referer: http://www.happycat01.com/mobile/reg/invite/99229.html:",
"Cookie: PHPSESSID=ggcp4inu58m0cfq82mdvsmei8k; think_language=id; ann100=1; SERVERID=6cd80de8fe547502eebddedf8e08a8f4|1612379429|1612378716",


);
echo "
╭━━━╮╱╱╭╮╱╱╱╱╱╱╱╱╭╮╱╭┳━━━┳╮╱╭╮
┃╭━╮┃╱╱┃┃╱╱╱╱╱╱╱╱┃┃╱┃┃╭━╮┃┃╱┃┃
┃╰━╯┣━━┫┃╭┳┳━╮╭━━┫╰━╯┃┃┃┃┃╰━╯┃
┃╭━━┫┃━┫╰╯╋┫╭╮┫╭╮┣━━╮┃┃┃┃┣━━╮┃
┃┃╱╱┃┃━┫╭╮┫┃┃┃┃╰╯┃╱╱┃┃╰━╯┃╱╱┃┃
╰╯╱╱╰━━┻╯╰┻┻╯╰┻━╮┃╱╱╰┻━━━╯╱╱╰╯
╱╱╱╱╱╱╱╱╱╱╱╱╱╱╭━╯┃
╱╱╱╱╱╱╱╱╱╱╱╱╱╱╰━━╯Bot Happycat";
echo "\n\n\n\e[96m》Reff : \e[39m";
$reff = trim(fgets(STDIN));
echo "\e[96m》Jumlah : \e[39m";
$brp = trim(fgets(STDIN));
echo "\n";
for ($i = 0; $i < $brp; $i++){
$nmr = rand(44175, 592583);
$dat = "phone=089541$nmr&token=&phone_pre=62";

$getotp = otp("http://www.happycat01.com/Handle/zhuce.html", $ua, $dat);
$otp = substr("$getotp",52,-1);
$data = "vaptcha_token=&phone_pre=62&name=Anying&phone=089541$nmr&pwd=akunweb123&pwd2=akunweb123&smsCode=$otp&top=$reff";

$daftar = curl("http://www.happycat01.com/mobile/reg.html", $ua, $data);

$masuk = home("http://www.happycat01.com/user/person.html", $ua, $data);
if($masuk){
echo "\e[92m》Sukses《\e[39m\n";

}else{

echo "\n\e[31m》Gagal[X]《\n\e[39m";
}

}
?>
