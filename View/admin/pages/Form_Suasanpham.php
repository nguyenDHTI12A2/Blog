<?php
	$id = $_GET['pro_id'];


	
	$conn = mysqli_connect("localhost","root","","danguitar");

	mysqli_query($conn,"SET danguitar 'utf8'");
	$sql = "Select * from `tbl_product` where `pro_id` = '$id' ";
	$kq = mysqli_query($conn, $sql);

	while($row = mysqli_fetch_assoc($kq))
		{
			$id = $row["pro_id"];
			$ten = $row['pro_name'];
			$loai = $row['cat_id'];
			$gia = $row['price'];
			$anh = $row['image'];
			$mota = $row['description'];
		}
?>

<!DOCTYPE html>
<html>
	<head>
		<link rel="shortcut icon" href="image/avt.ico" />
		<title>Thêm thông tin sản phẩm</title>
		<style type="text/css">
			body{
				width: 1200px;
				margin: auto;
			}
			#chu-chay{
				width: 1024px;
				margin-left: 150px;
				color: red;
				font-size: 20px;
				font-weight: bold;
				background: white;
				margin-top: -3.4px;
				text-align: center;
			}
			#main form{
				margin-top: 100px;
				margin-left: 400px;
			}
		</style>
	</head>
	<body>
		<div id="chu-chay">
			<marquee>Sửa sản phẩm!</marquee>
		</div>
		<div id="main">
			<form action="../../../Controller/admin/Suasanpham.php" method="post" >
				<table style="width:500px;height: 50px" border="1px">
					<tr>
						<th style="width: 100px;">
							Pro_ID : 
						</th>
						<th>
							<input style="width: 400px;" type="text" name="id" value="<?php echo $id ?>" readonly><br>
						</th>
					</tr>
					<tr>
						<th>
							Tên : 
						</th>
						<th >
							<input style="width: 400px;" type="text" name="ten" value="<?php echo $ten ?>"><br>
						</th>
					</tr>
					<tr>
						<th>
							Loại SP: 
						</th>
						<th>
							<input style="width: 400px;" type="text" name="loai" value="<?php echo $loai ?>"><br>
						</th>
					</tr>
					<tr>
						<th>
							Giá SP : 
						</th>
						<th>
							<input style="width: 400px;" type="text" name="gia" value="<?php echo $gia ?>"><br>
						</th>
					</tr>
					<tr>
						<th>
							Ảnh : 
						</th>
						<th>
							<input style="width: 400px;" type="text" name="anh" value="<?php echo $anh ?>">							
						</th>
					</tr>
					<tr>
						<th>
							Mô tả : 
						</th>
						<th>
							<input style="width: 400px;" type="text" name="mota" value="<?php echo $mota ?>">							
						</th>
					</tr>
					<tr>
						<th>
							<input type="submit" name="them" value="Sửa">
						</th>
						<th>
							<button>
								<a href='Sanpham.php' title='Quay lại'>Quay lại</a> 
							</button>
						</th>
					</tr>
				</table>
			</form>
		</div>
		<div class="Menu">
			

			<?php
				$conn = mysqli_connect("localhost","root","","danguitar");
				mysqli_query($conn,"SET danguitar 'utf8'");
	                //tạo chuỗi sql
				$sql1 = "SELECT * FROM tbl_category";
	                //Thực hiện query truy vấn
				$kq1=mysqli_query($conn,$sql1);
			?>

			<ul>
				<h3> Danh sách loại Sản Phẩm: </h3>
				<?php
				$j=0;
				while(($row1 = mysqli_fetch_array($kq1))&&($j<10))
					{   $j++;
						?>
						<li>
							<a style="font-size: 20px; text-decoration: none;" href="">
								<?php
								echo $row1['cat_id'];
								echo "---";
								 echo $row1['cat_name'];
								?>
							</a>
						</li>
						<?php           
					}
					?>
				</ul>
		</div>
	</body>
</html>