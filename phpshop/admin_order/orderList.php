<!doctype html>
<html>
	<head>
		<title>Order information management</title>
        <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="../assets/css/templatemo.css">
        <link rel="stylesheet" href="../assets/css/custom.css">

        <!-- Load fonts style after rendering the layout styles -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
        <link rel="stylesheet" href="../assets/css/fontawesome.min.css"><link rel="stylesheet" href="../css/mystyle.css" type="text/css"/>
	</head>
	<body>
		
			<h3>订单列表</h3>
            <div class="card rounded-0">
                <form action="<?php echo $_SERVER['PHP_SELF'];?>">
                    <div class="input-group mb-1">
                        <input type="text" class="form-control" name="keyword" value="<?php if(isset($_GET['keyword'])) echo $_GET['keyword'];?>" placeholder="搜索产品名称...">
                        <button type="submit" class="input-group-text bg-success text-light">
                            <i class="fa fa-fw fa-search text-white"></i>
                        </button>
                    </div>
                </form>
            </div>
			<table class="table table-light table-striped">
				<tr>
					<th style="width: 10px">订单号</th>
					<th>用户名</th>
					<th>商品名称</th>
					<th>商品图片</th>
					<th>价格</th>
					<th>收货人</th>
					<th>收货地址</th>
					<th>订单生成时间</th>
					<th>操作</th>
				</tr>
				<?php
				
				
				//从数据库中读取信息并输出到浏览器表格中
				//1.导入配置文件 
					require("../dbconfig.php");
					
					// 当前页
					if(!isset($_GET["page"])){
						$page=1;
					}else{
						$page=$_GET["page"];
					}
					
					// 数据从第几行开始
					$temp=($page-1)*$list_num=5;
					
					// 搜索关键字
					if(!isset($_GET['keyword'])){
						$keyword = "";
					}else{
						$keyword = trim($_GET['keyword']);
					}
					
					
				//2. 连接数据库，并选择数据库
					
					$sql_count = "SELECT count(*) as total FROM tb_order a, `user` b, goods c WHERE a.user_id=b.id AND a.goods_id=c.id ";
					if($keyword){
						$sql_count.= " and c.`name` like '%{$keyword}%'";
					}
					$result = mysql_query($sql_count);
					$res = mysql_fetch_array($result);
					$num=$res['total'];
					$p_count=ceil($num/$list_num);					//总页数为总条数除以每页显示数
				
				//3. 执行订单信息查询
					$sql = "SELECT a.*,b.username,c.`name` as `goods_name`,c.pic FROM tb_order a, `user` b, goods c WHERE a.user_id=b.id AND a.goods_id=c.id ";
					if($keyword){
						$sql .=  " and c.`name` like '%{$keyword}%'";
					}
					$sql .= " limit {$temp},{$list_num}";
					$result = mysql_query($sql);
					
					
					
					
				//4. 解析订单信息（解析结果集）
					while($row = mysql_fetch_assoc($result)){
						echo "<tr>";
						echo "<td>{$row['order_sn']}</td>";
						echo "<td>{$row['username']}</td>";
						echo "<td>{$row['goods_name']}</td>";
						echo "<td><img src='../uploads/s_{$row['pic']}'/></td>";
						echo "<td>{$row['order_money']}</td>";
						echo "<td>{$row['consignee']}({$row['phone']})</td>";
						echo "<td>{$row['address']}</td>";
						echo "<td>".$row['createtime']."</td>";
						echo "<td width='20%'> 
								<a href='orderAction.php?action=del&id={$row['id']}' class='button'>删除</a> 
								<a href='editOrder.php?id={$row['id']}' class='button'>更新</a></td>";
						echo "</tr>";
					}
					
				
				
				//5. 释放结果集，关闭数据库
		
				
				?>
			</table>
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
					echo "<a href='".$_SERVER['PHP_SELF']."?page=1&keyword={$keyword}'>Home</a> | ";
				}
				if ($prev_page<1)							//如果上一页小于1只显示文字
				{
					echo "上一页| ";
				}
				else										//如果大于1显示指向上一页的连接
				{
					echo "<a href='".$_SERVER['PHP_SELF']."?page=$prev_page&keyword={$keyword}'>上一页</a> | ";
				}
				if ($next_page>$p_count)						//如果下一页大于总页数只显示文字
				{
					echo "下一页 | ";
				}
				else										//如果小于总页数则显示指向下一页的连接
				{
					echo "<a href='".$_SERVER['PHP_SELF']."?page=$next_page&keyword={$keyword}' class='underline'>下一页</a> | ";
				}
				if ($page>=$p_count)						//如果当前页大于或者等于总页数只显示文字
				{
					echo "尾页</p>\n";
				}
				else										//如果当前页小于总页数显示最后页的连接
				{
					echo "<a href='".$_SERVER['PHP_SELF']."?page=$p_count&keyword={$keyword}'>尾页</a></p>\n";
				}
			}else{
				echo "<P align='center'>暂无订单信息记录</p>";
			}
			?>
	</body>
</html>