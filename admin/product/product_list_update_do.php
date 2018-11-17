<?php
isset($_POST) or die('非法请求');

include '../../vendor/upload.php';
include '../../vendor/conn.inc.php';

$p_id = $_POST['p_id'];
$p_title = $_POST['p_title'];
$p_content = $_POST['p_content'];


// 上传头像
if( $_FILES['p_img']['error'] == 0){
	$path = '../../public/upload/'.$_POST['p_img'];
	if( is_file($path) ){
		unlink($path);	
	}	
	$p_img = uploadFile('p_img');

}else{
	$p_img = $_POST['p_img'];
}


$sql ="update product set p_title ='$p_title',p_content='$p_content',p_img='$p_img' where p_id=".$p_id; 
$res = mysql_query($sql); 

if($res){
	die("<script>alert('修改成功');window.location.href='product_list.php';</script>");
}else{
	die("<script>alert('修改失败');window.history.back();</script>");
}



