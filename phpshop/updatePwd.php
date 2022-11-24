<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="UTF-8">
    <title>Change Password</title>
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
		include 'functions.php';
		checkUserLogined();// 判断用户是否登录
	?>
    <div>
    	<form action="updatePwdAction.php?action=updatePwd" style="margin-left: 10px" method="post" onsubmit="return validate_form(this)">
    		<h2>修改密码</h2>
    		<p><span>旧密码</span><input type="password" name="password" style="width: 350px" class="txt-inp"></p>
    		<p><span>新密码</span><input type="password" name="newpassword" style="width: 350px" class="txt-inp"></p>
    		<p><span>重复密码</span><input type="password" name="repassword" style="width: 350px" class="txt-inp"></p>
    		<p class="txt_center"><input type="submit" value="modify" class="frm-btn"></p>
    	</form>
    </div>
    <script>
    function validate_form(thisform){
    	with (thisform){
	      if (validate_required(password,"Please enter the old password")==false){
	    	  	password.focus();
		      	return false;
		  }
	      if (validate_required(newpassword,"Please input a password")==false){
	    	  	 newpassword.focus();
	    		 return false;
	     }
	      if (validate_required(repassword,"Please enter the confirmation password")==false){
	    	     repassword.focus();
	    		 return false;
	     }
		     if(validate_equal(newpassword, repassword, "The two passwords are inconsistent") == false){
		    	 repassword.focus();
	    		 return false;
			 }
	  }
    }
    </script>
</body>

</html>