<!DOCTYPE html>
<html lang="en">

<head>
    <title>Icewine-shop</title>
    <meta charset="utf-8">
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
    	// 引入头部
		include 'front-top.php';
	?>
    <div class="container py-5">
        <div class="row">

            <div class="col-lg-3">
                <h1 class="h2 pb-4">Categories</h1>
                <ul class="list-unstyled templatemo-accordion">
                    <li class="pb-3">
                        <a class="collapsed d-flex justify-content-between h3 text-decoration-none" href="#">
                            Classification
                            <i class="fa fa-fw fa-chevron-circle-down mt-1"></i>
                        </a>
                        <ul class="collapse show list-unstyled pl-3">
                            <li><a class="text-decoration-none" href="#">冰红葡萄酒</a></li>
                            <li><a class="text-decoration-none" href="#">冰白葡萄酒</a></li>
                        </ul>
                    </li>
                    <li class="pb-3">
                        <a class="collapsed d-flex justify-content-between h3 text-decoration-none" href="#">
                            Sale
                            <i class="pull-right fa fa-fw fa-chevron-circle-down mt-1"></i>
                        </a>
                        <ul id="collapseTwo" class="collapse list-unstyled pl-3">
                            <li><a class="text-decoration-none" href="#">normal</a></li>
                            <li><a class="text-decoration-none" href="#">Luxury</a></li>
                        </ul>
                    </li>
                    <li class="pb-3">
                        <a class="collapsed d-flex justify-content-between h3 text-decoration-none" href="#">
                            Place Of Origin
                            <i class="pull-right fa fa-fw fa-chevron-circle-down mt-1"></i>
                        </a>
                        <ul id="collapseThree" class="collapse list-unstyled pl-3">
                            <li><a class="text-decoration-none" href="#">Canada</a></li>
                            <li><a class="text-decoration-none" href="#">France</a></li>
                            <li><a class="text-decoration-none" href="#">China</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

    	<?php 
	    	//从数据库中读取信息并输出到浏览器表格中
	    	//1.导入配置文件
	    	require_once "dbconfig.php" ;
	    		
	    	// 当前页
	    	if(!isset($_GET["page"])){
	    		$page=1;
	    	}else{
	    		$page=$_GET["page"];
	    	}
	    		
	    	// 数据从第几行开始
	    	$temp=($page-1)*$front_list_num=3;
	    		
	    	// 搜索关键字
	    	if(!isset($_GET['searchword'])){
	    		$searchword = "";
	    	}else{
	    		$searchword = trim($_GET['searchword']);
	    	}
	    		
	    		
	    	//2. 操作数据库
	    		
	    	$sql_count = "select count(*) as total from goods where 1";
	    	if($searchword){
	    		$sql_count.= " and name like '%{$searchword}%'";
	    	}
	    	$result = mysql_query($sql_count);
	    	if($result){
	    		$res = mysql_fetch_array($result);
	    		$num=$res['total'];
	    	}else{
	    		$num = 0;
	    	}
	    	
	    	$p_count=ceil($num/$front_list_num);					//总页数为总条数除以每页显示数
	    	
	    	//3. 执行商品信息查询
	    	$sql = "select * from goods where 1 ";
	    	if($searchword){
	    		$sql .=  " and name like '%{$searchword}%'";
	    	}
	    	$sql .= " limit {$temp},{$front_list_num}";
	    	$result = mysql_query($sql);
	    	//4. 解析商品信息（解析结果集）
	    	while($result && $row = mysql_fetch_assoc($result)){
    	?>
            <div class="col-md-3">
                <div class="card mb-3 product-wap rounded-0">
                    <div class="card rounded-0">
                        <img class="card-img rounded-0 img-fluid" src="uploads/<?php echo $row['pic'];?>">
                        <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                            <ul class="list-unstyled">
                                <li><a class="btn btn-success text-white" href="goodsDetail.php?id=<?php echo $row['id'];?>"><i class="far fa-heart"></i></a></li>
                                <li><a class="btn btn-success text-white mt-2" href="goodsDetail.php?id=<?php echo $row['id'];?>"><i class="far fa-eye"></i></a></li>
                                <li><a class="btn btn-success text-white mt-2" href="goodsDetail.php?id=<?php echo $row['id'];?>"><i class="fas fa-cart-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body">
                        <a href="goodsDetail.php?id=<?php echo $row['id'];?>" class="h3 text-decoration-none"><?php echo $row['name'];?></a>
                        <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                            <li class="pt-2">
                                <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                                <span class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                                <span class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                                <span class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                                <span class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                            </li>
                        </ul>
                        <ul class="list-unstyled d-flex justify-content-center mb-1">
                            <li>
                                <i class="text-warning fa fa-star"></i>
                                <i class="text-warning fa fa-star"></i>
                                <i class="text-warning fa fa-star"></i>
                                <i class="text-muted fa fa-star"></i>
                                <i class="text-muted fa fa-star"></i>
                            </li>
                        </ul>
                        <p class="text-center mb-0">￥<?php echo $row['price'];?></p>
                    </div>
                </div>
            </div>
    	<?php 
	    	}
    	?>
        </div>
    </div>
    	</ul>
    	<div class="page_contain">
    		<?php 
			// 分页
			if($num > 0){
				$prev_page=$page-1;						//定义上一页为该页减1
				$next_page=$page+1;						//定义下一页为该页加1
				//echo "next_page=".$next_page.",p_count=".$p_count;
				echo "<p align=\"center\"> ";
				if ($page<=1)								//如果当前页小于等于1只有显示
				{
					echo "首页 | ";
				}
				else										//如果当前页大于1显示指向第一页的连接
				{
					echo "<a href='".$_SERVER['PHP_SELF']."?page=1&searchword={$searchword}'>首页</a> | ";
				}
				if ($prev_page<1)							//如果上一页小于1只显示文字
				{
					echo "上一页 | ";
				}
				else										//如果大于1显示指向上一页的连接
				{
					echo "<a href='".$_SERVER['PHP_SELF']."?page=$prev_page&searchword={$searchword}'>上一页</a> | ";
				}
				if ($next_page>$p_count)						//如果下一页大于总页数只显示文字
				{
					echo "下一页 | ";
				}
				else										//如果小于总页数则显示指向下一页的连接
				{
					echo "<a href='".$_SERVER['PHP_SELF']."?page=$next_page&searchword={$searchword}' class='underline'>下一页</a> | ";
				}
				if ($page>=$p_count)						//如果当前页大于或者等于总页数只显示文字
				{
					echo "尾页</p>\n";
				}
				else										//如果当前页小于总页数显示最后页的连接
				{
					echo "<a href='".$_SERVER['PHP_SELF']."?page=$p_count&searchword={$searchword}'>尾页</a></p>\n";
				}
			}else{
				echo "<P align='center'>No record yet!</p>";
			}
			?>
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