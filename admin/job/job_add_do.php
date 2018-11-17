<?php
isset($_POST) or die('非法请求');

include '../../vendor/conn.inc.php';
$data = $_POST;
$j_title = $data['j_title'];
$j_content = $data['j_content'];
$j_time = date('Y-m-d H:i:s',time());


//记录错误信息
$error = array();
if( empty($j_title ) ){
	$error[] = '标题不能为空';
}

if( empty($j_content) ){
	$error[] = '内容不能为空';
}

//有错误就跳转
if( count($error)>0 ){
	die("
		<script>
			alert('{$error[0]}');
			window.history.back();
		</script>
		");
}


// var_dump($data);
// die;

// 插入数据
$sql ="insert into job(j_title,j_content,j_time) values('$j_title','$j_content','$j_time')"; 
$res = mysql_query($sql); 

if($res){
	die("
		<script>
			alert('添加成功');
			window.location.href='job.php';
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
