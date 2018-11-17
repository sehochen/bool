<?php
isset($_POST) or die('非法请求');

include '../../vendor/upload.php';
include '../../vendor/conn.inc.php';

$u_name = $_POST['u_name'];
$u_pwd = $_POST['u_pwd'];
$u_c_pwd = $_POST['u_c_pwd'];


// 判断两次密码是否一致
if( $u_pwd != $u_c_pwd){
	die("<script>alert('两次密码不一致');window.history.back();</script>");
}


$info = mysql_query("select * from user where u_id=".$_POST['u_id'] );
$info = mysql_fetch_assoc($info);

// 上传
if( $_FILES['u_img']['error'] == 0 ){

	// 删除之前的
	$path = '../../upload/'.$info['u_img'];
	if( is_file($path) ){
		unlink($path);
	}

	$u_img = uploadFile('u_img');
}else{
	$u_img = $_POST['u_img'];
}



$sql ="update user set u_pwd ='$u_pwd',u_img='$u_img' where u_id=".$_POST['u_id']; 
$res = mysql_query($sql); 

if($res){
	die("<script>alert('修改成功');window.location.href='user.php';</script>");
}else{
	die("<script>alert('修改成功');window.history.back();</script>");
}




