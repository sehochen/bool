<?php
isset($_POST) or die('非法请求');
require_once '../../vendor/conn.inc.php';
include '../../vendor/upload.php';
// 接受post的数据
// 
$data = $_POST;


//记录错误信息
$error = array();
if( empty($data['c_title']) ){
	$error[] = '网页标题不能为空';
}

if( empty($data['c_tel']) ){
	$error[] = '电话不能为空';
}

//有错误就跳转
if( count($error)>0 ){
	die("<script>alert('{$error[0]}');window.history.back();</script>");
}


// mysql

$title = $data['c_title'];
$tel = $data['c_tel'];
$keyword = $data['c_keyword'];
$desc = $data['c_desc'];
$copy = $data['c_copy'];
$address = $data['c_address'];
$logo = $data['c_logo'];



// 上传
$info = mysql_query("select * from config where c_id=1" );
$info = mysql_fetch_assoc($info);

if( $_FILES['c_logo']['error'] == 0 ){

	// 删除之前的
	$path = '../../upload/'.$info['c_logo'];
	if( is_file($path) ){
		unlink($path);
	}

	$logo = uploadFile('c_logo');
}


// 更新配置表
$sql ="update config set c_title 	= '$title',
						 c_tel		= '$tel',
						 c_logo		= '$logo',
						 c_keyword	= '$keyword',
						 c_copy		= '$copy',
						 c_desc		= '$desc',
						 c_address	= '$address'
						 where c_id	=	1"; 

$res = mysql_query($sql); 

if($res){
	die("<script>alert('修改成功');window.history.back();location.reload();</script>");
}else{
	die("<script>alert('修改失败');window.history.back();</script>");
}