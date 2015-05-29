<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Insert title here</title>
</head>
<body>
<h1>登录页面</h1>
<form method='post' action='doAction.php?act=login'>
	<table border='1' cellpadding='0' cellspacing='0' width='70%' bgcolor='#ABCDEF'>
		<tr>
			<td>用户名</td>
			<td><input type='text' name='username' placeholder='请输入合法用户名'/></td>
		</tr>
		<tr>
			<td>密码</td>
			<td><input type='password' name='password'/></td>
		</tr>
		<tr>
			<td colspan='2'>
				<input type='submit' value='登录'/>
			</td>
		</tr>
	
	
	</table>
</form>
</body>
</html>