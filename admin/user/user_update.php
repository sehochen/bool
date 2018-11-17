<?php
  include '../../vendor/conn.inc.php';

  $sql ="select * from user where u_id=".$_GET['id']; 
  $result = mysql_query($sql);
  $info = mysql_fetch_assoc($result);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>用户管理</title>
<style type="text/css">
body {margin:0 0  0 10px; background:url(style/pic/bg_left.jpg) repeat-y left; font-size:13px;}
h1 {width:100%; height:28px; padding:10px 0 0 20px; background:#00a8a8; font-size:13px; font-weight:bold;; color:#FFF; margin:0}
.wenzi {font-size:48px; padding-left:20px; font-weight:bold;}
a.x3 {width:20px; height:18px; display:block; background-color:#096; border:1px solid #666; text-decoration:none; margin-right:10px; float:left; color:#FFF; font-weight:bold; text-align:center}
a:hover.x3 {background-color:#F30; color:#333;}
x4 {float:left;}
#cz13{
  margin:5px;
}
input[type="text"],input[type="password"]{
  width:90%;
}
</style>
</head>

<body>
<h1>当前位置：用户管理</h1>

<input type="button" name="cz10" id="cz13" value="用户列表" onclick="javascript:window.location.href='user.php';" />


<form action="user_update_do.php" method="post" enctype="multipart/form-data">
<!-- id -->
<input type="hidden" name="u_id" value="<?php echo $info['u_id']; ?>" />

<table width="99%" border="0" align="center" cellpadding="0" cellspacing="1">
  <tr class="x2">
    <td height="30" align="center" bgcolor="#999999" colspan="3">编辑用户--<?php echo $info['u_name']; ?></td>
  </tr>
  <tr>
    <td height="30" height="100" align="right" bgcolor="#CCCCCC">姓名</td>
    <td height="30" align="center" bgcolor="#CCCCCC">
    	<input type="text" name="u_name" value="<?php echo $info['u_name']; ?>" disabled="disabled"/>
    	<input type="hidden" name="u_name" value="<?php echo $info['u_name']; ?>" />
    </td>
    <td height="30" align="left" bgcolor="#CCCCCC">*必填</td>
  </tr>

  <tr>
    <td height="30" height="100" align="right" bgcolor="#CCCCCC">密码</td>
    <td height="30" align="center" bgcolor="#CCCCCC">
    	<input type="password" name="u_pwd" value="<?php echo $info['u_pwd']; ?>"/>
    </td>
    <td height="30" align="left" bgcolor="#CCCCCC">*必填</td>
  </tr>

  <tr>
    <td height="30" height="100" align="right" bgcolor="#CCCCCC">确认密码</td>
    <td height="30" align="center" bgcolor="#CCCCCC">
    	<input type="password" name="u_c_pwd" value="<?php echo $info['u_pwd']; ?>"/>
    </td>
    <td height="30" align="left" bgcolor="#CCCCCC">*必填</td>
  </tr>

  <tr>
    <td height="30" height="100" align="right" bgcolor="#CCCCCC">头像</td>
    <td height="30" align="center" bgcolor="#CCCCCC">
    	<input type="file" name="u_img" />
    	<input type="hidden" name="u_img" value="<?php echo $info['u_img']; ?>" />
    	<?php echo $info['u_img']; ?>
    </td>
    <td height="30" align="left" bgcolor="#CCCCCC">*选填，可以忽略</td>
  </tr>


  <tr class="x2">
    <td height="30" align="center" bgcolor="#999999" colspan="2">
      <input type="submit" value="确定" />
      <input type="reset" value="重置" />
    </td>
    <td bgcolor="#999999"></td>
  </tr>
</table>
</form>

</body>
</html>

