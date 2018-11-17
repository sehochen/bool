<?php
isset($_POST) or die('非法请求');

include '../../vendor/upload.php';
include '../../vendor/conn.inc.php';

$u_name = $_POST['u_name'];
$u_pwd = $_POST['u_pwd'];
$u_c_pwd = $_POST['u_c_pwd'];
$u_time = date('Y-m-d H:i:s',time());

// 判断两次密码是否一致
if( $u_pwd != $u_c_pwd){
	die("<script>alert('两次密码不一致');window.history.back();</script>");
}

// 上传头像
$u_img = uploadFile('u_img');
$u_pwd = md5($u_pwd );


$sql ="insert into user(u_name,u_pwd,u_img,u_time) values('$u_name','$u_pwd','$u_img','$u_time')"; 
$res = mysql_query($sql); 

if($res){
	die("<script>alert('添加成功');window.location.href='user.php';</script>");
}else{
	die("<script>alert('添加失败');window.history.back();</script>");
}


// echo '<pre>';
// var_dump($_POST);
// echo '</pre>';

