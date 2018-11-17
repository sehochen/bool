<?php
isset($_POST) or die('非法请求');

include '../../vendor/conn.inc.php';
$data = $_POST;

$l_title = $data['l_title'];
$l_url = $data['l_url'];
$l_time = date('Y-m-d H:i:s',time());


//记录错误信息
$error = array();
if( empty($l_title ) ){
	$error[] = '标题不能为空';
}

if( empty($l_url) ){
	$error[] = '网址不能为空';
}

//有错误就跳转
if( count($error)>0 ){
	die("<script>alert('{$error[0]}');window.history.back();</script>");
}



// var_dump($data);
// die;

// 插入数据
$sql ="insert into link(l_title,l_url,l_time) values('$l_title','$l_url','$l_time')"; 
$res = mysql_query($sql); 

if($res){
	die("
		<script>
			alert('添加成功');
			window.location.href='link.php';
		</script>
		");
}else{
	die("
		<script>
			alert('添加失败');
			window.history.back();
		</script>
		");
}
