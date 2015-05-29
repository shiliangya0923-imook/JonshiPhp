<?php
header('content-type:text/html;charset=utf-8');
//接收数据
$username=$_POST['username'];
$password=md5($_POST['password']);
$act=$_GET['act'];
//1.连接
mysql_connect('localhost','root','123') or die('数据库连接失败<br/>'.mysql_errno().':'.mysql_error());
//2.设置字符集
mysql_set_charset('utf8');
//3.打开指定数据库
mysql_select_db('cms') or die('指定数据库打开失败');

if($act=='reg'){
// 	echo '开始注册';
// 	$password=md5($password);
	$sql="INSERT user(username,password) VALUES('{$username}','{$password}')";
// 	echo $sql;
	$res=mysql_query($sql);
	if($res){
		echo "<script type='text/javascript'>
				alert('注册成功');
				location.href='login.php';
				</script>";
	}else{
		echo "<script type='text/javascript'>
				alert('注册失败');
				location.href='reg.php';
				</script>";
	}
}elseif($act=='login'){
// 	echo '开始登录';
// 	$password=md5($password);
	$sql="SELECT id FROM user WHERE username='{$username}' AND password='{$password}'";
	/*
	SELECT id FROM user WHERE username='' or 1=1 #' AND password='8b75a401511bfe72ff871b13845befb5'
	 */
// 	echo $sql;
// 	exit;
	$result=mysql_query($sql);
	//判断是否是结果集 并且结果集中记录数大于==1
	if(is_resource($result) && mysql_affected_rows()>0){
		exit("<script type='text/javascript'>
				alert('登录成功');
				location.href='index.php';
				</script>");
	}else{
		exit("<script type='text/javascript'>
				alert('登录失败');
				location.href='login.php';
				</script>");
	}
}






















