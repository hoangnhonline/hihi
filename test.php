<?php 
$urlGet = "https://www.tnaflix.com/anal-porn/Girlfriend-Adriana-Chechick-Cheats-With-a-Huge-Black-Cock/video1899986";
require "lib/lib.php";
$chGet = curl_init($urlGet);	
curl_setopt($chGet, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($chGet, CURLOPT_FOLLOWLOCATION, TRUE);
if(strpos($urlGet, 'xvideos') > 0){
	curl_setopt($chGet, CURLOPT_USERAGENT, 'Mozilla/5.0 (iPhone; U; CPU like Mac OS X; en) AppleWebKit/420.1 (KHTML, like Gecko) Version/3.0 Mobile/3B48b Safari/419.3');    
}
curl_setopt($chGet, CURLOPT_AUTOREFERER, TRUE);
$resultGet = curl_exec($chGet);    

curl_close($chGet);    

 // Create a DOM object
$htmlGet = new simple_html_dom();
// Load HTML from a string
$htmlGet->load($resultGet);

if(strpos($urlGet, 'xvideos') > 0){
	foreach ($htmlGet->find('script') as $valueGet) {
		
		if($valueGet->innertext){
			$textGet = $valueGet->innertext;        
			if(strpos($textGet,'HTML5Player') > 0){
				$aGet = $textGet;			
			}        
		}     
	}
	$tmpGet = explode("', '",$aGet);
	if($tmpGet[3]!=''){
		$urlVIDEO = $tmpGet[3];
	}else{
		$urlVIDEO = $tmpGet[2];
	}
}elseif(strpos($urlGet, 'hihi.com') > 0 ){
	$urlVIDEO = $htmlGet->find('source[data-res]', 0)->src;
}elseif(strpos($urlGet, 'redtube.com') > 0){
	$urlVIDEO = $htmlGet->find('source', 0)->src;
}elseif(strpos($urlGet, 'youporn.com') > 0){
	$urlVIDEO = $htmlGet->find('.downloadOption', 0)->find('a', 0)->href;
}else{
	
	$htmlGet = file_get_html($urlGet);
	$urlVIDEO = $htmlGet->find('meta[itemprop="contentUrl"]', 0)->content;
	var_dump($urlVIDEO);die;
}

?>