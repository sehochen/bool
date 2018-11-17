<?php
isset($_POST) or die('非法请求');

include '../../vendor/upload.php';
include '../../vendor/conn.inc.php';

$n_title = $_POST['n_title'];
$n_content = $_POST['n_content'];
// 2017-06-18 22:24:3
$n_time = date('Y-m-d H:i:s',time());

$sql ="insert into news(n_title,n_content,n_time) values('$n_title','$n_content','$n_time')"; 
$res = mysql_query($sql); 

if($res){
	die("<script>alert('添加成功');window.location.href='news_list.php';</script>");
}else{
	die("<script>alert('添加失败');window.history.back();</script>");
}


