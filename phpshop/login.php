<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <title>登录</title>
    <meta charset="utf-8">
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
		include 'front-top.php';
	?>

    <section class="section" id="login0">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                </div>
                <div class="col-lg-6">
                    <div class="contact-form">
                        <form id="contact" action="loginAction.php?act=login" method="post" onsubmit="return validate_form(this)">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h4>登录</h4>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <span>用户名:</span><input type="text" name="username" autocomplete="off">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <span>密  码:</span><input type="password" name="password">
                                    </fieldset>
                                </div>

                                <div class="col-lg-12">
                                    <fieldset>
                                        <button type="submit" id="form-submit" class="main-button-icon">登录</button>
                                    </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
    function validate_form(thisform){
    	with (thisform){
	      if (validate_required(username,"Please enter the account number~")==false){
		      	username.focus();
		      	return false;
		  }
	      if (validate_required(password,"Please input a password~")==false){
	    		 password.focus();
	    		 return false;
	    }
	  }
    }
    </script>
    <!-- Start Script -->
    <script src="assets/js/jquery-1.11.0.min.js"></script>
    <script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/templatemo.js"></script>
    <script src="assets/js/custom.js"></script>
    <!-- End Script -->
</body>

</html>