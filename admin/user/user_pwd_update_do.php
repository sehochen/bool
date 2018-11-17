<?php
isset($_POST) or die('非法请求');

include '../../vendor/conn.inc.php';

$u_id = $_POST['u_id'];
$u_pwd = $_POST['u_pwd'];
$u_c_pwd = md5($_POST['u_c_pwd']);
$u_c_pwd_1 = md5($_POST['u_c_pwd_1']);


$sql ="select u_pwd from user where u_id = '$u_id' "; 
$result = mysql_query($sql);
$info = mysql_fetch_assoc($result);

if( $info['u_pwd'] != md5($u_pwd) ){
	
}else{

	if( $u_c_pwd == $u_c_pwd_1 ){
		$sql ="update user set u_pwd ='$u_c_pwd' where u_id=".$u_id ; 
		$res = mysql_query($sql); 

		if($res){
			die("<script>alert('修改成功');window.history.back();</script>");
		}else{
			die("<script>alert('修改失败');window.history.back();</script>");
		}		
	}else{
		die("<script>alert('两次新密码输入不一致');");
	}



}


