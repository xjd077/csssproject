<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <title>商品信息</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/templatemo.css">
    <link rel="stylesheet" href="assets/css/custom.css">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
</head>

<body class="shop_body">
    <?php 
		include 'front-top.php';
	?>
    <div class="goods_detail_contain">
    	<?php  
				//1.导入配置文件 
					require_once "dbconfig.php";
				//2. 获取要修改的商品信息
					$sql = "select * from goods where id={$_GET['id']}";
					$result = mysql_query($sql);
				
				//3. 判断是否获取到要编辑的商品信息
					if($result && mysql_num_rows($result)>0){
						$shop = mysql_fetch_assoc($result);//解析出要修改的商品信息 
					}else{
						die("No item information found to modify");
					}
			
			
			
			?>
			<h3 class="page_title">商品信息<a href="addOrder.php?id=<?php echo $_GET['id'];?>" class="buy">购买</a></h3>
			<form  enctype="multipart/form-data" method="post">
				<input type="hidden" name="id" value="<?php echo $shop['id']; ?>"/>
				<input type="hidden" name="oldpic" value="<?php echo $shop['pic']; ?>"/>
			<table border="0" style="width:100%;" class="frm_table">
				<tr>
					<td align="right" width="60">名称：</td>
					<td><span  class="frm_txt"><?php echo $shop['name'];?></span></td>
				</tr>
				<tr>
					<td align="right">类型：</td>
					<td>
						<span  class="frm_txt">
						<?php 
							include("dbconfig.php");
							foreach($typelist as $k=>$v){
								if($shop['typeid']==$k){
									echo $v;
								}
								
							}
						?>
						</span>
					</td>
				</tr>
				<tr>
					<td align="right">价格：</td>
					<td><span  class="frm_txt"><?php echo $shop['price'];?></span></td>
				</tr>
				<tr>
					<td align="right">库存：</td>
					<td><span  class="frm_txt"><?php echo $shop['total'];?></span></td>
				</tr>
				
				<tr>
					<td align="right" valign="top">描述：</td>
					<td><span  class="frm_txt"><?php echo $shop['note'];?></span></td>
				</tr>
				<tr>
					<td align="right" valign="top">&nbsp;</td>
					<td><img src="./uploads/<?php echo $shop['pic']; ?>" style="max-width: 200px;"/>
					</td>
				</tr>
				<tr>
					<td colspan="2" align="center"><a href="addOrder.php?id=<?php echo $_GET['id'];?>" class="buy">购买</a></td>
				</tr>
			</table>
			</form>
    </div>
</body>

</html>