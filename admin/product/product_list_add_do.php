<?php
isset($_POST) or die('非法请求');

include '../../vendor/upload.php';
include '../../vendor/conn.inc.php';

$p_title = $_POST['p_title'];
$p_content = $_POST['p_content'];
$p_time = date('Y-m-d H:i:s',time());

// 上传头像
$p_img = uploadFile('p_img');

$sql ="insert into product(p_title,p_content,p_time,p_img) values('$p_title','$p_content','$p_time','$p_img')"; 

// die($sql);
$res = mysql_query($sql); 

if($res){
	die("<script>alert('添加成功');window.location.href='product_list.php';</script>");
}else{
	die("<script>alert('添加失败');window.history.back();</script>");
}


