<?php
/**
 * 检测url参数是否缺少
 * delete.php?table=leave&id=1
**/
isset($_GET['id']) or die('参数id缺少');
isset($_GET['table']) or die('参数table缺少');

include '../vendor/conn.inc.php';

// 获取表名 和主键 id
$table =$_GET['table'];
$id = $_GET['id'];


//**************** ↓ mysql操作*******************

$sql='';
// 拼接sql语句
if( $table =='user' ){

	// 删除用户
	$sql ="delete from ".$table." where u_id=".$id; 

}elseif($table =='news'){

	// 删除新闻
	$sql ="delete from ".$table." where n_id=".$id; 

}elseif ($table == 'product') {

	// 获取要删除数据的信息，得到产品图片地址
	$sql ="select p_img from product where p_id=".$id; 
	$result = mysql_query($sql);
	$info = mysql_fetch_assoc($result);
	$path = '../upload/'.$info['p_img'];

	// is_file($path) && unlink($path);
	//判断图片是否存在，存在就删除
	if( is_file($path) ){
		$res = unlink($path);
		if( !$res ){
			//删除图片失败 
		}	
	}
	
	//删除产品
	$sql ="delete from ".$table." where p_id=".$id; 

}elseif($table == 'leave'){

	// 删除留言
	$sql ="delete from `".$table."` where l_id=".$id; 

}elseif($table=='job'){
	// 删除招聘
	$sql ="delete from `".$table."` where j_id=".$id; 
}elseif($table=='link'){
	// 删除招聘
	$sql ="delete from `".$table."` where l_id=".$id; 
}



//************执行删除操作*****************
$res = mysql_query($sql); 

// 判断是否删除成功
if($res){
	die("
		<script>
			alert('删除成功');
			//window.history.back();
			//window.location.reload();
			location.replace(document.referrer);
		</script>
		");
}else{
	die("
		<script>
			alert('删除失败');
			window.history.back();
		</script>
		");
}
