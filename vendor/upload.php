<?php
function uploadFile($name){

	// 判断是否有文件上传
	if($_FILES[$name]['error'] != 0){
		return false;
	}else{
		// 上传路径设置
		define('ROOT', dirname(dirname(__FILE__)));

		// $root_path = ROOT.'/public/upload/';
		
		$root_path = ROOT.'/upload/';
		$save_path = $root_path.time().'_'.basename($_FILES[$name]['name']);  
		if( move_uploaded_file($_FILES[$name]["tmp_name"], $save_path) ){
			return time().'_'.basename($_FILES[$name]['name']);
		}else{
			return false;
		}
	}

}