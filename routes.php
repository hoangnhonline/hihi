<?php 
require_once "models/Home.php"; 
$model = new Home;

$cateArr = $model->getListCate();
$hotVideoArr = $model->getList('post', 0, 10, array('status' => 1));
$tmpHot = $hotVideoArr['data'];
$arr1 = array_slice($tmpHot, 0, 1);
$arr2 = array_slice($tmpHot, 1, 2);
$arr3 = array_slice($tmpHot, 3, 2);
$arr4 = array_slice($tmpHot, 5, 1);
$arr5 = array_slice($tmpHot, 6, 2);
$arr6 = array_slice($tmpHot, 8, 2);
$setting = $model->getSetting();
$homeVideoArr = $model->getList('post', 10, 30, array('status' => 1));

$mod = isset($_GET['mod']) ? $_GET['mod'] : "";
function checkCat($uri) {	
	$mod = "home";
    $uri = str_replace("+", "", $uri);
    $p_cate = '#/[a-z0-9\-\+]#';
    $p_detail = '#/[a-z0-9\-\+]+\-\d+.html#';    
    $arrTmp = explode('/',$uri);     
    unset($arrTmp[0]);    
    if (preg_match($p_detail, $uri)) {
        $mod = "details";        
    }else if (preg_match($p_cate, $uri)) {
        $mod = "cate";        
    }    
    return $mod;
}

$uri = $_SERVER['REQUEST_URI'];
$mod = checkCat($uri);

$uri = str_replace(".html", "", $uri);
$tmp_uri = explode("/", $uri);

switch ($mod) {
    
    case "details":            
        $detailArr  = array();
        $tmp = $tmp_uri[1];        
        $tmpArr = explode("-", $tmp);        
	    $id = (int) end($tmpArr);
	    $detailArr = $model->getDetail('post', $id);
	    $cate_id = $detailArr['cate_id'];
	    $detailCateArr = $model->getDetail('cates', $cate_id);
        $urlVideo = $model->getVideoLink($detailArr['videoUrl']);
        $suggVideo = $model->getSuggVideo($cate_id, $id);
        $seo['title'] = $seo['meta_description'] = $seo['meta_keyword'] = $detailArr['title'];
        break;
    case "cate":        
        $slug = $tmp_uri[1]; 
        $cate_id = $model->getCateIdBySlug($slug);
        $detailCateArr = $model->getDetail('cates', $cate_id);
        $videoArr = $model->getList('post', 0, 1000, array('cate_id' => $cate_id, 'status' => 1));
        $seo['title'] = $seo['meta_description'] = $seo['meta_keyword'] = $detailCateArr['name'];        
	    break;    
    default : 
        $seo['title'] = SITE_NAME. "- Free JAVHD, Japanese Porn, Asian Sex Videos";
        $seo['meta_description'] = SITE_NAME. "- Enjoy uncensored and full length JAPANESE porn videos in amazing HD QUALITY! Exclusive JAV sex videos with hot Asian girls and Japan 's best AV Idols.";
        $seo['meta_keyword'] = SITE_NAME. "- free javhd, javhd, asian porn, jav porn, japanese porn, asian sex, japanese sex, jav online, jav streaming, Jav HD, download javhd";      
        break;
}

?>