<?php
isset($_POST) or die('非法请求');

include '../../vendor/conn.inc.php';
$data = $_POST;

// id
$id = $data['l_id'];
$l_title = $data['l_title'];
$l_url = $data['l_url'];

//记录错误信息
$error = array();
if( empty($id ) ){
	$error[] = 'id不能为空';
}


if( empty($l_title ) ){
	$error[] = '标题不能为空';
}

if( empty($l_url) ){
	$error[] = '网址不能为空';
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



//更新数据
$sql ="update link set l_title ='$l_title',l_url='$l_url' where l_id=".$id; 

$res = mysql_query($sql); 

if($res){
	die("
		<script>
			alert('修改成功');
			window.location.href='link.php';
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
