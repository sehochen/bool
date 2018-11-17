<?php
  include '../../vendor/conn.inc.php';
  
  $sql ="select * from news"; 
  $result = mysql_query($sql);

  $total=Mysql_num_rows($result); 
  $pagesize=10;    //每页的条数
  $pagenum=ceil($total/$pagesize); //取整数
 
  $page = isset($_GET['p']) ? $_GET['p'] : 1 ;

  $pagefrom=($page-1)*$pagesize;

  $res=mysql_query("select * from news limit $pagefrom,$pagesize");

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>新增新闻</title>
<style type="text/css">
body {margin:0 0  0 10px; background:url(../style/pic/bg_left.jpg) repeat-y left; font-size:13px;}
a {text-decoration:none; }
h1 {width:100%; height:28px; padding:10px 0 0 20px; background:#00a8a8; font-size:13px; font-weight:bold;; color:#FFF; margin:0}
.wenzi {font-size:48px; padding-left:20px; font-weight:bold;}
#zy {width:100%; height:300px; background:url(pic/aa.jpg) no-repeat  center bottom}
.x2 {color:#FFF;}
a.x3 {width:20px; height:18px; display:block; background-color:#096; border:1px solid #666; text-decoration:none; margin-right:10px; float:left; color:#FFF; font-weight:bold; text-align:center}
a:hover.x3 {background-color:#F30; color:#333;{width:100%; height:28px;}
x4 {float:left;}
a.x5 {font-size:13px; padding-left:20px; text-decoration:none }
</style>
</head>

<body>
<h1>当前位置：新闻管理</h1>

<input type="button" name="cz6" id="cz9" value="新增新闻" style="margin:5px;" onclick="javascript:window.location.href='news_list_add.php';" />

<table width="99%" border="0" align="center" cellpadding="0" cellspacing="1">
  <tr class="x2">
    <td width="132" height="30" align="center" bgcolor="#999999">序号</td>
    <td width="397" height="30" align="center" bgcolor="#999999">标题</td>
    <!-- <td width="216" align="center" bgcolor="#999999">内容</td> -->
    <td width="273" height="30" align="center" bgcolor="#999999">发表时间</td>
    <td width="135" height="30" align="center" bgcolor="#999999">操作</td>
  </tr>


<!-- 循环 -->
<?php while($row = mysql_fetch_assoc($res)): ?>  

  <tr>
    <td height="30" align="center" bgcolor="#CCCCCC"><?php echo $row['n_id']; ?></td>
    <td height="30" align="left" bgcolor="#CCCCCC"><?php echo $row['n_title']; ?></td>
    <!-- <td align="center" bgcolor="#CCCCCC"><?php echo $row['n_content']; ?></td> -->
    <td height="30" align="center" bgcolor="#CCCCCC"><?php echo $row['n_time']; ?></td>
    <td height="30" align="center" bgcolor="#CCCCCC">
      <input type="button" name="cz" id="cz" value="修改" onclick="edit(<?php echo $row['n_id']; ?>)"/>
      <input type="button" name="cz2" id="cz2" value="删除" onclick="del(<?php echo $row['n_id']; ?>)"/>
    </td>
  </tr>
<?php endwhile; ?>


  <tr>
    <td height="30" colspan="6"  bgcolor="#CCCCCC">
    <div style="float:left; padding-top:5px; padding-left:400px;">
      共<?php echo $pagenum ?>页:
    </div>
        <!-- 分页 -->
        <?php for ($i=1; $i <= $pagenum; $i++): ?>
          <a href="?p=<?php echo $i;?>" class="x3"><?php echo $i; ?></a>
        <?php endfor; ?>
    </div> 
    </td>
  </tr>
</table>

</body>
</html>
<script>
  function edit(id){
    window.location.href='news_list_update.php?id='+id;
  }

  function del(id){
    if(confirm('你真的要删除吗？') ){
      window.location.href='../delete.php?table=news&id='+id;
    }
  }  

</script>