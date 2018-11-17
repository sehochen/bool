<?php
session_start();

if( empty( $_SESSION['u_id'] ) ){
	$url = 'http://'.$_SERVER['HTTP_HOST'].dirname(dirname($_SERVER['SCRIPT_NAME']) );
	header("Location:$url/login.php");		
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>后台管理</title>
</head>
<frameset rows="90,*,30" frameborder="no" border="0" framespacing="0">
  <frame src="top.php" name="topFrame" scrolling="no" noresize="noresize" id="topFrame" title="topFrame" />
  <frameset cols="220,*" frameborder="no" border="0" framespacing="0">
		<frame src="left.php" name="leftFrame" scrolling="no" noresize="noresize" id="leftFrame" title="leftFrame" />
		<frame src="main.php" name="mainFrame" id="mainFrame" title="mainFrame" />
	</frameset>
  <frame src="bottom.php" name="bottomFrame" scrolling="no" noresize="noresize" id="bottomFrame" title="bottomFrame" />
</frameset>
<noframes><body>
</body></noframes>
</html>
