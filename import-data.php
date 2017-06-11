<?php 
set_time_limit(0);
require_once "models/Home.php";
$model = new Home;

if(isset($_POST['setting']) &&  !empty($_POST['setting'])){
	$arrSetting = json_decode($_POST['setting'], true);
	$arrInput['id'] = 1;
	$arrInput['value'] = $arrSetting['post_per_cate'];
	$model->update('setting', $arrInput);

	$arrInput['id'] = 2;
	$arrInput['value'] = $arrSetting['bg_header_color'];
	$model->update('setting', $arrInput);

	$arrInput['id'] = 3;
	$arrInput['value'] = $arrSetting['text_header_color'];
	$model->update('setting', $arrInput);

	$arrInput['id'] = 4;
	$arrInput['value'] = $arrSetting['bg_footer_color'];
	$model->update('setting', $arrInput);

	$arrInput['id'] = 5;
	$arrInput['value'] = $arrSetting['text_footer_color'];
	$model->update('setting', $arrInput);
}

if(isset($_POST['cate']) && !empty($_POST['cate'])){
	$cateArr = json_decode($_POST['cate'], true);
	
	$model->truncates('cates');
	
	foreach ($cateArr as $cate) {
		
		$arrData['name'] = $cate['name'];
		$arrData['slug'] = $cate['slug'];
		$model->insert('cates', $arrData);

	}
}
if(isset($_POST['post']) &&  !empty($_POST['post'])){
	$postArr = json_decode($_POST['post'], true);
	
	$cateArrSite = $model->getList('cates');

	if(!empty($cateArrSite)){
		$i = 0;
		$count = count($postArr);
		$arrInput = array();
		foreach ($cateArrSite['data'] as $cateSite) {
			
			$arrInput['cate_id'] = $cateSite['id'];
			$slice = $count == 32 ? 8 : 2;
			$postPercate = array_slice($postArr, $i, $slice);

			foreach ($postPercate as $post) {
				$arrInput['title'] = $post['title'];
				$arrInput['slug'] = $model->changeTitle($post['title']);
				$arrInput['thumbnailUrl'] = $post['thumbnailUrl'];
				$arrInput['videoUrl'] = $post['videoUrl'];
				$arrInput['duration'] = $post['duration'];
				$arrInput['status'] = 1;
				$arrInput['created_at'] = time();

				$model->insert('post', $arrInput);				
			}
			$i = $count == 32 ? ($i + 8) : ($i + 2);
			
		}
	}
}
?>