<?php

	if( isset($_POST['u_name']) && isset($_POST['u_pwd'])){	
		include 'vendor/conn.inc.php';
		$u_name = $_POST['u_name'];
		$u_pwd = $_POST['u_pwd'];

		
		$sql ="select u_pwd,u_id,u_name from user where u_name = '$u_name' "; 
		$result = mysql_query($sql);
		$info = mysql_fetch_assoc($result);

		$url = 'http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['SCRIPT_NAME']) ;

		if( $info['u_pwd'] == md5($u_pwd) ){
			session_start();
			$_SESSION['u_id']=$info['u_id'];
			$_SESSION['u_name']=$info['u_name'];
			header("Location:$url/admin/index.php");	
		}else{
			echo "<script>alert('密码错误');";
		}
		
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>登陆</title>
	<style>
		.login{
			width:400px;
			/*border:1px solid red;	*/
			padding:20px;
			margin:10px auto;
			margin-top:200px;
			/*background-color:#00A8A8;*/
		}
		.login form{
			margin:5px auto;
		}
		.login form input{
			margin:5px;
		}
		.login form input[type="submit"]{
			padding:3px 15px;
		}
	</style>
</head>
<body>

<div class="login">
	<form action="" method="post">
		<center>
			<span> <strong>后台登陆</strong> </span>  <br><br>
			用户 <input type="text" name="u_name"> <br>	
			密码 <input type="password" name="u_pwd"> <br><br>

			<input type="submit" value="登陆"> <br><br>

			<span class="info"> 默认的账号/密码 admin</span>		
			
		</center>	

	</form>	
</div>

</body>
</html>