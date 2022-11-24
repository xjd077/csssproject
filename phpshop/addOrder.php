<?php 
require("functions.php");
?>
<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <title>E-Shop</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/templatemo.css">
    <link rel="stylesheet" href="assets/css/custom.css">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
</head>

<body>
    <?php 
    	// 引入头部
		include 'front-top.php';
		// 判断是否登录
		checkUserLogined();
	?>
    <div class="goods_detail_contain">
    	<?php  
				//1.导入配置文件  连接数据库，并选择数据库
					require("dbconfig.php");
				
				//3. 获取商品信息
					$sql = "select * from goods where id={$_GET['id']}";
					$result = mysql_query($sql);
				
				//4. 判断是否获取到商品信息
					if($result && mysql_num_rows($result)>0){
						$shop = mysql_fetch_assoc($result);//解析出商品信息 
					}else{
						alertMes('The product does not exist', 'shop.php');
					}
			
			
			
			?>
			<h3>订单信息</h3>
			<form  enctype="multipart/form-data" method="post" action="myOrderAction.php?action=add" onsubmit="return validate_form(this)">
				<input type="hidden" name="goods_id" value="<?php echo $shop['id']; ?>"/>
				<input type="hidden" name="user_id" value="<?php echo $_SESSION['userId'];?>">
				<table border="0" style="width:100%;" class="frm_table">
					<tr>
						<td align="right" width="60">名称：</td>
						<td><span  class="frm_txt"><?php echo $shop['name'];?></span></td>
					</tr>
					
					<tr>
						<td align="right" valign="top">&nbsp;</td>
						<td><img src="./uploads/<?php echo $shop['pic']; ?>" style="max-width: 200px;"/></td>
					</tr>
					
					<tr>
						<td align="right">收货人：</td>
						<td><input type="text" name="consignee" autocomplete="off"  value="" class="frm_txt"/></td>
					</tr>
					<tr>
						<td align="right">手机号码：</td>
						<td><input type="text" name="phone" autocomplete="off"  value="" class="frm_txt"/></td>
					</tr>
					<tr>
						<td align="right">地址：</td>
						<td><input type="text" name="address" autocomplete="off"  value="" class="frm_txt"/></td>
					</tr>
					<tr>
						<td colspan="2" class="txt_center"><button class="submit_order_btn">下订单</button></td>
						
					</tr>
				</table>
			</form>
    </div>
    <script>
		function validate_form(thisform){
			with (thisform){
				if (validate_required(consignee,"收货人必填")==false){
					consignee.focus();
			      	return false;
			  }
				if (validate_required(phone,"手机号必填")==false){
					phone.focus();
			      	return false;
			  }

				if (validate_required(address,"收货地址必填")==false){
					address.focus();
			      	return false;
			  }
			}
		}
    </script>
</body>

</html>