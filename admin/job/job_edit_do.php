<?php
isset($_POST) or die('非法请求');

include '../../vendor/conn.inc.php';
$data = $_POST;

// id
$id = $data['j_id'];
$j_title = $data['j_title'];
$j_content = $data['j_content'];


//记录错误信息
$error = array();
if( empty($j_id ) ){
	$error[] = 'id不能为空';
}


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

//更新数据
$sql ="update job set j_title ='$j_title',j_content='$j_content' where j_id=".$id; 

$res = mysql_query($sql); 

if($res){
	die("
		<script>
			alert('修改成功');
			window.location.href='job.php';
		</script>
		");
}else{
	die("
		<script>
			alert('修改失败');
			window.history.back();
		</script>
		");
}
