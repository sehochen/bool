<?php
  require_once '../../vendor/conn.inc.php';

  // mysql
    $sql ="select * from config where c_id=1"; 
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
<h1>当前位置：基本设置</h1>
<!-- 
<input type="button" name="cz10" id="cz13" value="用户列表" onclick="javascript:window.location.href='user.php';" /> -->

<form action="config_update.php" method="post" enctype="multipart/form-data">

<!-- logo -->
<input type="hidden" name="c_logo" value="<?php echo $info['c_logo']; ?>" />

<table width="99%" border="0" align="center" cellpadding="0" cellspacing="1">
  <tr class="x2">
    <td height="30" align="center" bgcolor="#999999" colspan="3">基本设置</td>
  </tr>

  <tr>
    <td height="30" width="80" align="right" bgcolor="#CCCCCC">网页标题</td>
    <td height="30" align="center" bgcolor="#CCCCCC">
      <input type="text" name="c_title" value="<?php echo $info['c_title']; ?>" />
    </td>
    <td height="30" width="80" align="left" bgcolor="#CCCCCC">*网页标题</td>
  </tr>

  
  <tr>
    <td height="30" width="80" align="right" bgcolor="#CCCCCC">联系电话</td>
    <td height="30" align="center" bgcolor="#CCCCCC">
      <input type="text" name="c_tel" value="<?php echo $info['c_tel']; ?>"/>
    </td>
    <td height="30" align="left" bgcolor="#CCCCCC">*联系电话</td>
  </tr>

  <tr>
    <td height="30" width="80" align="right" bgcolor="#CCCCCC">Logo</td>
    <td height="30" align="center" bgcolor="#CCCCCC">
      <input type="file" name="c_logo" value="<?php echo $info['c_logo']; ?>"/>
      <?php echo $info['c_logo']; ?>
    </td>
    <td height="30" align="left" bgcolor="#CCCCCC">*网页logo</td>
  </tr>

  <tr>
    <td height="30" width="80" align="right" bgcolor="#CCCCCC">备案号</td>
    <td height="30" align="center" bgcolor="#CCCCCC">
      <input type="text" name="c_copy" value="<?php echo $info['c_copy']; ?>"/>
    </td>
    <td height="30" align="left" bgcolor="#CCCCCC">*备案号</td>
  </tr>

  <tr>
    <td height="30" width="80" align="right" bgcolor="#CCCCCC">关键字</td>
    <td height="30" align="center" bgcolor="#CCCCCC">
      <textarea name="c_keyword" cols="110" rows="4"><?php echo $info['c_keyword']; ?></textarea>
    </td>
    <td height="30" align="left" bgcolor="#CCCCCC">*关键字</td>
  </tr>

  <tr>
    <td height="30" width="80" align="right" bgcolor="#CCCCCC">网页描述</td>
    <td height="30" align="center" bgcolor="#CCCCCC">
       <textarea name="c_desc" cols="110" rows="4" ><?php echo $info['c_desc']; ?></textarea>
    </td>
    <td height="30" align="left" bgcolor="#CCCCCC">*网页描述</td>
  </tr>

  <tr>
    <td height="30" width="80" align="right" bgcolor="#CCCCCC">公司地址</td>
    <td height="30" align="center" bgcolor="#CCCCCC">
      <input type="text" name="c_address" value="<?php echo $info['c_address']; ?>"/>
    </td>
    <td height="30" align="left" bgcolor="#CCCCCC">*公司地址</td>
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
