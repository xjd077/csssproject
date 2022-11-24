<?php
header("Content-Type: text/html;charset=utf-8");
//执行商品信息的增、删、改的操作

//一、导入配置文件和函数库文件
	require("dbconfig.php");
	require("functions.php");


//二、获取action参数的值，并做对应的操作
	switch($_GET["action"]){
		case "add": //添加
			//1. 获取添加信息
			$username 		= trim($_POST["username"]);
			$password 		= trim($_POST["password"]);
			$repassword 	= trim($_POST["repassword"]);
			$createtime 	= date('y-m-d H:i:s');
			//2. 验证()省略
			if(empty($username)){
				alertMes('User name must have a value', 'register.php');
			}
			if(empty($password)){
				alertMes('Password must have a value', 'register.php');
			}
			if($password != $repassword){
				alertMes('The two passwords are inconsistent', 'register.php');
			}
			
			// 判断用户名是否重复
			$sql_count = "select count(*) as total from user where username = '{$username}'";
			$result = mysql_query($sql_count);
			if($result){
				$res = mysql_fetch_array($result);
				$num=$res['total'];
				if($num > 0){
					alertMes('The user name has been exist', 'register.php');
				}
			}
			
			
			//3. 拼装sql语句，并执行添加
			$sql = "insert into user(username, password,createtime)  values('{$username}','{$password}','{$createtime}')";
			echo $sql;
			mysql_query($sql);
			
			//4. 判断并输出结果
			if(mysql_insert_id()>0){
				alertMes('Login was successful', 'login.php');
			}else{
				alertMes('Login has failed！', 'register.php');
			}
			
			
			break;
		
		

	}

//四、关闭数据库
mysql_close();


