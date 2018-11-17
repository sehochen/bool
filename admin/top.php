<?php
	session_start();
	// var_dump($_SESSION['u_name']);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style type="text/css">
body {margin:0; background:url(style/pic/bg_top.jpg) repeat-x top;}
#top {width:100%; min-width:602px; height:50px; background:url(style/pic/title.jpg) no-repeat top left;  color:#FFF; font-size:12px; text-align:right; padding-top:50px;}
</style>
</head>

<body>
<div id="top"> 当前用户： <?php echo $_SESSION['u_name']; ?> &nbsp;&nbsp;&nbsp;&nbsp;</div>
</body>
</html>
