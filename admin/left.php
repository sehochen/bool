<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>后台管理</title>
<style type="text/css">
body {background-color:#CCC; margin:0; font-size:13px; }

#nav ul {padding:0; margin:0; list-style-type:none;}
#nav ul li a{width:100%; height:28px; padding-top:10px; color:#000; display:block; text-decoration:none;padding-left:20px; }
#nav ul li a.x1 { background-color:#00a8a8; padding-left:20px; color:#FFF; font-weight:bold;}
#nav ul li a:hover { background:#625548; color:#FFF; font-weight:bold}
.active{
    background:#625548; color:#FFF; font-weight:bold
}
.active a{
    background:#625548; color:#FFF; font-weight:bold
}
</style>

</head>

<body>
<div id="nav">
  <ul>
    <li><a href="main.php" target="mainFrame" class="x1">欢迎页 </a></li>
    <li><a href="config/config.php" target="mainFrame">系统设置</a></li>
    <!-- <li><a href="content/content.php" target="mainFrame">内容设置</a></li> -->
    <li><a href="news/news_list.php" target="mainFrame">新闻管理</a></li>
    <li><a href="product/product_list.php" target="mainFrame">产品管理 </a></li>
    <li><a href="user/user.php" target="mainFrame">用户管理</a></li>
    <li><a href="leave/leave.php" target="mainFrame">留言管理</a></li>
    <li><a href="job/job.php" target="mainFrame">招聘管理</a></li>
    <li><a href="link/link.php" target="mainFrame">友情链接</a></li>
    <li><a href="about/about_edit.php" target="mainFrame">关于我们 </a></li>
    <li><a href="user/user_pwd_update.php" target="mainFrame">修改密码</a></li>
    <li><a href="exit.php" target="mainFrame">退出系统</a></li>
  </ul>
</div>
</body>
</html>
<script src="style/js/jquery.min.js"> </script>
<script>
    $(function(){
        $('#nav ul li').click(function(){
            $('#nav .active').removeClass("active");
            $(this).addClass("active");
        });
    });
</script>
