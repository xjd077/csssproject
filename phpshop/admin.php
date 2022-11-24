<?php 
session_start();// 开启session
require("functions.php");// 引入函数
checkLogined();// 判断管理员是否登录
?>
<!doctype html>
<html>
	<head>
		<title>Admin</title>
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
        <nav class="navbar navbar-expand-lg navbar-light shadow">
            <div class="container d-flex justify-content-between align-items-center">

                <a class="navbar-brand text-success logo h2 align-self-center" href="">
                    冰酒销售管理系统
                </a>

                <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

            </div>
        </nav>
        <div class="container py-3">
            <div class="row">
                <div class="col-lg-2">
                    <h5 class="h6 pb-5">管理员：admin</h5>
                    <ul>
                        <li>
                            <h4>客户管理</h4>
                            <ul class="pt-2 list-unstyled">
                                <li><a class="text-decoration-none text-dark" href="admin_user/addUser.php" target="mainFrame">添加客户</a></li>
                                <li><a class="text-decoration-none text-dark" href="admin_user/userList.php" target="mainFrame">客户列表</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <h4>产品管理</h4>
                            <ul class="pt-2 list-unstyled">
                                <li><a class="text-decoration-none text-dark" href="admin_goods/addGoods.php" target="mainFrame">添加产品</a></li>
                                <li><a class="text-decoration-none text-dark" href="admin_goods/goodsList.php" target="mainFrame">产品列表</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <h4>订单管理</h4>
                            <ul class="pt-2 list-unstyled">
                                <li><a class="text-decoration-none text-dark" href="admin_order/orderList.php" target="mainFrame">订单列表</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <h4>系统管理</h4>
                            <ul class="pt-2 list-unstyled">
                                <li><a class="text-decoration-none text-dark" href="shop.php">返回首页</a></li>
                                <li><a class="text-decoration-none text-dark" href="loginAction.php?act=logout">退出系统</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-10">
                    <div>
                        <!-- <div class="title">后台管理</div> -->
                        <!-- 嵌套网页开始 -->
                        <iframe name="mainFrame" width="100%" height="600px"></iframe>
                        <!-- 嵌套网页结束 -->
                    </div>
                </div>
            </div>
        </div>

        <!-- Start Script -->
        <script src="assets/js/jquery-1.11.0.min.js"></script>
        <script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/templatemo.js"></script>
        <script src="assets/js/custom.js"></script>
        <!-- End Script -->
	</body>
</html>