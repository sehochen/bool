<?php
  include '../../vendor/conn.inc.php';
  $id = $_GET['id'];
  $sql ="select * from job where j_id=".$id; 
  $result = mysql_query($sql);
  $info = mysql_fetch_assoc($result);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>发布招聘</title>
<style type="text/css">
body {margin:0 0  0 10px; background:url(../style/pic/bg_left.jpg) repeat-y left; font-size:13px;}
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
<h1>当前位置：发布招聘</h1>

<input type="button" name="cz10" id="cz13" value="招聘列表" onclick="javascript:window.location.href='job.php';" />

<form action="job_edit_do.php" method="post" enctype="multipart/form-data">

<input type="hidden" name="j_id" value="<?php echo $info['j_id']; ?>" />

<table width="99%" border="0" align="center" cellpadding="0" cellspacing="1">
  <tr class="x2">
    <td height="30" align="center" bgcolor="#999999" colspan="3">发布招聘</td>
  </tr>

  <tr>
    <td height="30" width="80" align="center" bgcolor="#CCCCCC">招聘标题</td>
    <td height="30" align="center" bgcolor="#CCCCCC">
      <input type="text" name="j_title" value="<?php echo $info['j_title']; ?>" />
    </td>
  </tr>

  <tr>
    <td height="30" width="80" align="center" bgcolor="#CCCCCC">招聘内容</td>
    <td height="30" align="center" bgcolor="#CCCCCC">


        <!-- 加载编辑器的容器 -->
        <script type="text/javascript" src="../style/js/jquery.min.js"></script>

        <!-- 加载编辑器的容器 -->
        <script id="container" name="j_content" type="text/plain" style="width:95%;height:20em;"><?php echo $info['j_content']; ?></script>

        <!-- 配置文件 -->
        <script type="text/javascript" src="../style/ueditor/ueditor.config.js"></script>
        <!-- 编辑器源码文件 -->
        <script type="text/javascript" src="../style/ueditor/ueditor.all.js"></script>
        <!-- 实例化编辑器 -->
        <script type="text/javascript">
            var ue = UE.getEditor('container');
        </script>


    </td>

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
