<html>
	<head>
		<title>User information management</title>
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
			<h3>添加客户操作</h3>
			<form action="userAction.php?action=add" enctype="multipart/form-data" method="post" onsubmit="return validate_form(this)">
			<table class="table table-light table-striped">
				<tr>
					<td align="right">客户名：</td>
					<td><input type="text" name="username" class="frm_txt"/></td>
				</tr>
				<tr>
					<td align="right">密码：</td>
					<td><input type="password" name="password" class="frm_txt"/></td>
				</tr>
				<tr>
					<td align="right">重复密码：</td>
					<td><input type="password" name="repassword" class="frm_txt"/></td>
				</tr>
				
				<tr>
					
					<td colspan="2" align="center">
						<input type="submit" value="添加"/>&nbsp;&nbsp;&nbsp;
						<input type="reset" value="重置"/>
					</td>
				</tr>
			</table>
			</form>
	<script>
		function validate_form(thisform){
			with (thisform){
				if (validate_required(username,"Please fill in the user name")==false){
					username.focus();
			      	return false;
			  }
				if (validate_required(password,"Please fill in the password")==false){
					password.focus();
			      	return false;
			  }

				if (validate_required(repassword,"Please fill in the confirmation password")==false){
					repassword.focus();
			      	return false;
			  }
			}
		}
    </script>
	</body>
</html>