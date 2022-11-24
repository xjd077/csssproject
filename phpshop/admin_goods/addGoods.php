<html>
	<head>
		<title>Commodity information management</title>
        <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="../assets/css/templatemo.css">
        <link rel="stylesheet" href="../assets/css/custom.css">

        <!-- Load fonts style after rendering the layout styles -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
        <link rel="stylesheet" href="../assets/css/fontawesome.min.css">
	</head>
	<body>
			<h4>发布产品信息</h4>
			<form action="goodsAction.php?action=add" enctype="multipart/form-data" method="post" onsubmit="return validate_form(this)">
			<table class="table table-light table-bordered">
				<tr>
					<td align="right">名称：</td>
					<td><input type="text" name="name" autocomplete="off" class="frm_txt"/></td>
				</tr>
				<tr>
					<td align="right">分类：</td>
					<td>
						<select name="typeid">
						<?php 
							include("../dbconfig.php");
							foreach($typelist as $k=>$v){
								echo "<option value='{$k}'>{$v}</option>";
							}
						?>
						</select>
					</td>
				</tr>
				<tr>
					<td align="right">价格：</td>
					<td><input type="text" name="price" autocomplete="off" class="frm_txt"/></td>
				</tr>
				<tr>
					<td align="right">库存：</td>
					<td><input type="text" name="total" autocomplete="off" class="frm_txt"/></td>
				</tr>
				<tr>
					<td align="right">图片：</td>
					<td><input type="file" name="pic"/></td>
				</tr>
				<tr>
					<td align="right" valign="top">描述：</td>
					<td><textarea rows="10" cols="70" name="note"></textarea></td>
				</tr>
				<tr>
					
					<td colspan="2" align="center">
						<input type="submit" class="button" value="添加"/>&nbsp;&nbsp;&nbsp;
						<input type="reset" class="button" value="重置"/>
					</td>
				</tr>
			</table>
			</form>
			<script type="text/javascript">
		function validate_form(thisform){
			with (thisform){
				if (validate_required(name,"请填写产品名称")==false){
					name.focus();
			      	return false;
			  }
				if (validate_required(price,"请填写单价")==false){
					price.focus();
			      	return false;
			  }

				if (validate_required(total,"请填写库存")==false){
					total.focus();
			      	return false;
			  }
				if (validate_required(note,"请填写产品描述")==false){
					note.focus();
			      	return false;
			  }
			}
		}
    </script>
	</body>
</html>