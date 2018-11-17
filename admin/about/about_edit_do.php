<?php
isset($_POST) or die('非法请求');

include '../../vendor/conn.inc.php';

$a_content = $_POST['a_content'];
$a_id = $_POST['a_id'];

$sql ="update aboutus set a_content ='$a_content' where a_id=".$a_id; 
$res = mysql_query($sql); 

if($res){
	die("<script>alert('修改成功');window.history.back();location.reload();</script>");
}else{
	die("<script>alert('修改失败');window.history.back();</script>");
}
