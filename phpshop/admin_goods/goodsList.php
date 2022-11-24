<!DOCTYPE html>
<html lang="en">
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
            <div class="card rounded-0">
                <form action="<?php echo $_SERVER['PHP_SELF'];?>">
                    <div class="input-group mb-1">
                        <input type="text" class="form-control" name="keyword" value="<?php if(isset($_GET['keyword'])) echo $_GET['keyword'];?>" placeholder="搜索商品名称...">
                        <button type="submit" class="input-group-text bg-success text-light">
                            <i class="fa fa-fw fa-search text-white"></i>
                        </button>
                    </div>
                </form>
            </div>
			<table class="table table-light table-striped">
				<tr>
                    <th>产品编号</th>
                    <th>产品名称</th>
                    <th>产品图片</th>
                    <th>产品价格</th>
                    <th>产品数量(库存)</th>
                    <th>添加时间</th>
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
					$temp=($page-1)*$list_num=4;
					
					// 搜索关键字
					if(!isset($_GET['keyword'])){
						$keyword = "";
					}else{
						$keyword = trim($_GET['keyword']);
					}
					
					
				//2. 连接数据库，并选择数据库
					
					$sql_count = "select count(*) as total from goods where 1";
					if($keyword){
						$sql_count.= " and name like '%{$keyword}%'";
					}
					$result = mysql_query($sql_count);
					$res = mysql_fetch_array($result);
					$num=$res['total'];
					$p_count=ceil($num/$list_num);					//总页数为总条数除以每页显示数
				
				//3. 执行商品信息查询
					$sql = "select * from goods where 1 ";
					if($keyword){
						$sql .=  " and name like '%{$keyword}%'";
					}
					$sql .= " limit {$temp},{$list_num}";
					$result = mysql_query($sql);
					
					
					
					
				//4. 解析商品信息（解析结果集）
					while($row = mysql_fetch_assoc($result)){
						echo "<tr>";
						echo "<td>{$row['id']}</td>";
						echo "<td>{$row['name']}</td>";
						echo "<td><img src='../uploads/s_{$row['pic']}'/></td>";
						echo "<td>{$row['price']}</td>";
						echo "<td>{$row['total']}</td>";
						echo "<td>".date("Y-m-d H:i:s",$row['addtime'])."</td>";
						echo "<td class='word-break:keep-all' display: inline> 
								<a href='goodsAction.php?action=del&id={$row['id']}&picname={$row['pic']}' class='button'>删除</a> 
								<a href='editGoods.php?id={$row['id']}' class='button'>修改</a></td>";
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
					echo "上一页 | ";
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
				echo "<P align='center'>暂无商品信息!</p>";
			}
			?>
	</body>
</html>