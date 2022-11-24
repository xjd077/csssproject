<?php
//公共信息配置文件
error_reporting(0);
//数据库信息配
define("HOST","localhost"); //主机名
define("USER","root");		//用户名
define("PASS","");		//密码
define("DBNAME","ky14");	//数据库名
define("COPYRIGHT", "版权所有");

$list_num = 5;// 后台列表显示行数

$front_list_num = 8;// 前台列表显示行数

//商品类型列表信息
$typelist=array(
		1=>"冰白葡萄酒",
		2=>"冰红葡萄酒",
);

//$typelist=array(
//		1=>"普通员工",
//		2=>"经理",
//);

if(!function_exists('mysql_pconnect')){
	function mysql_pconnect($dbhost, $dbuser, $dbpass){
		global $dbport;
		global $dbname;
		global $linkid;
		$linkid = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
		return $linkid;
	}
	function mysql_select_db($dbname){
		global $linkid;
		return mysqli_select_db($linkid,$dbname);
	}
	function mysql_fetch_array($result, $type=''){
		if ($type) {
			return mysqli_fetch_array($result, $type);
		}else{
			return mysqli_fetch_array($result);
		}
	}
	function mysql_fetch_assoc($result){
		return mysqli_fetch_assoc($result);
	}
	function mysql_fetch_row($result){
		return mysqli_fetch_row($result);
	}
	function mysql_free_result($result){
		return mysqli_free_result($result);
	}
	function mysql_query($cxn){
		global $linkid;
		return mysqli_query($linkid,$cxn);
	}
	function mysql_insert_id(){
		global $linkid;
		return mysqli_insert_id($linkid);
	}
	function mysql_affected_rows(){
		global $linkid;
		return mysqli_affected_rows($linkid);
	}
	function mysql_escape_string($data){
		global $linkid;
		return mysqli_real_escape_string($linkid, $data);
	}
	function mysql_real_escape_string($data){
		global $linkid;
		return mysqli_real_escape_string($linkid, $data);
	}
	function mysql_close(){
		global $linkid;
		return mysqli_close($linkid);
	}
	function mysql_get_server_info(){
		global $linkid;
		return mysqli_get_server_info($linkid);
	}
	function mysql_num_rows($result){
		return mysqli_num_rows($result);
	}
}
error_reporting(E_ERROR | E_PARSE);
error_reporting(E_ALL ^ E_WARNING);
error_reporting(E_ALL & ~E_NOTICE);
error_reporting(E_ALL ^ E_DEPRECATED);

// 兼容PHP高版本和PHP版本
if(version_compare(PHP_VERSION,'7.0.0', '<')){
	mysql_connect(HOST,USER,PASS) or die("db connect error".mysql_error());
}else{
	mysql_pconnect(HOST,USER,PASS) or die("db connect error".mysql_error());
}

mysql_select_db(DBNAME);// 选择数据库
mysql_query("SET NAMES utf8");// 设置数据库编码
