<?
$url = "http://projectlist.task11.ru/projects/rest-api/server/".$_POST['url'];
if($curl = curl_init()){
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, true);
	curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
	curl_setopt($curl, CURLOPT_URL, $url);
	$response = curl_exec($curl);
	curl_close($curl);
	$result = json_decode($response);
	print_r($result);
}
