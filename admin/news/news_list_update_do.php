<?php
isset($_POST) or die('非法请求');

include '../../vendor/upload.php';
include '../../vendor/conn.inc.php';

$n_id = $_POST['n_id'];
$n_title = $_POST['n_title'];
$n_content = $_POST['n_content'];


$sql ="update news set n_title ='$n_title',n_content='$n_content' where n_id=".$n_id; 
$res = mysql_query($sql); 

if($res){
	die("<script>alert('修改成功');window.location.href='news_list.php';</script>");
}else{
	die("<script>alert('修改失败');window.history.back();</script>");
}


