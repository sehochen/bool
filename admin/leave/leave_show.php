<?php
  include '../../vendor/conn.inc.php';
  $id = $_GET['id'];
  $sql ="select * from `leave` where l_id=".$id; 
  $result = mysql_query($sql);
  $info = mysql_fetch_assoc($result);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>留言管理</title>
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
<h1>当前位置：留言管理</h1>

<input type="button" name="cz10" id="cz13" value="留言列表" onclick="javascript:window.location.href='leave.php';" />


<table width="99%" border="0" align="center" cellpadding="0" cellspacing="1">
  <tr class="x2">
    <td height="30" align="center" bgcolor="#999999" colspan="2">查看留言</td>
  </tr>

  <tr>
    <td height="30" height="100" align="right" bgcolor="#CCCCCC">ID</td>
    <td height="30" align="center" bgcolor="#CCCCCC">
      <input type="text" name="u_name" value="<?php echo $info['l_id']; ?>" disabled="disabled"/>
    </td>
  </tr>

  <tr>
    <td height="30" height="100" align="right" bgcolor="#CCCCCC">姓名</td>
    <td height="30" align="center" bgcolor="#CCCCCC">
      <input type="text" name="u_name" value="<?php echo $info['l_name']; ?>" disabled="disabled"/>
    </td>
  </tr>

  <tr>
    <td height="30" height="100" align="right" bgcolor="#CCCCCC">电话</td>
    <td height="30" align="center" bgcolor="#CCCCCC">
      <input type="text" value="<?php echo $info['l_tel']; ?>" disabled="disabled"/>
    </td>
  </tr>

  <tr>
    <td height="30" height="100" align="right" bgcolor="#CCCCCC">留言标题</td>
    <td height="30" align="center" bgcolor="#CCCCCC">
      <input type="text" value="<?php echo $info['l_title']; ?>" disabled="disabled"/>
    </td>
  </tr>

  <tr>
    <td height="30" height="100" align="right" bgcolor="#CCCCCC">留言内容</td>
    <td height="30" align="center" bgcolor="#CCCCCC">
      <input type="text" value="<?php echo $info['l_content']; ?>" disabled="disabled"/>
    </td>
  </tr>

  <tr>
    <td height="30" height="100" align="right" bgcolor="#CCCCCC">留言时间</td>
    <td height="30" align="center" bgcolor="#CCCCCC">
      <input type="text" value="<?php echo $info['l_time']; ?>" disabled="disabled"/>
    </td>
  </tr>


</table>


</body>
</html>

