<?php 

	require_once "app/autoload.php"


 ?>




<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Development Area</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>


	<?php 

		if ( isset($_POST['padd'])) {

			//Value get

			     $pname = $_POST['pname'];
				 $pprice = $_POST['pprice'];
				 $pquan = $_POST['pquan'];
				 $total = $pprice * $pquan;
			//Product Photo Upload

				 $file =fileUpload($_FILES['pphoto'], 'products/');
				 $photo_name = $file['file_name'];

			//Product upload
				 $sql ="INSERT INTO products (photo, product_name, product_price, quantity, total) VALUES ('$photo_name','$pname','$pprice','$pquan','$total')";
				 $connection -> query($sql);
		}





	 ?>
	
	

	<div class="wrap-table ">
		<div class="card w-50 mx-auto">
			<div class="card-body">
				<h3>Add Product</h3>
				
				<form action="" method="POST" enctype="multipart/form-data">

					<div class="form-group">
						<input name="pname" class="form-control"type="text" placeholder="Product Name">
					</div>

					<div class="form-group">
						<input name="pprice" class="form-control"type="text" placeholder="Product Price">
					</div>

					<div class="form-group">
						<input name="pquan" class="form-control"type="text" placeholder="Product Quantity" name="">
					</div>
					<div class="form-group">
						<input name="pphoto" class="form-control"type="File" >
					</div>
					<div class="form-group">
						<input name="padd" class="btn btn-primary btn-block" type="Submit" value="Add Product">s
					</div>


				</form>

			</div>

		</div>
		<div class="card shadow-sm">
			<div class="card-body">
				<h2>Products Management </h2>
				<table class="table table-striped ">
					<thead>
						<tr>
							<th>#</th>
							<th>Photo</th>
							<th>Product Name</th>
							<th>Price</th>
							<th>Quantity</th>
							<th>Total</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>1</td>
							<td><img src="assets/media/img/pp_photo/istockphoto-615279718-612x612.jpg" alt=""></td>
							<td>Biriyani</td>
							<td>220</td>
							<td>10</td>
							<td>2200</td>
							<td style="width:70px;">
								
								<a class="btn btn-sm btn-danger" href="#">Delete</a>
							</td>
						</tr>

						<tr id ="amo">
							<td class="text-right" colspan="5">Total=</td>
							<td class="text-left">12000</td>
						</tr>
						
						

					</tbody>
				</table>
			</div>
		</div>
	</div>

	
	<br>
	<br>
	<br>
	<br>
	<br>
    <br>






	<!-- JS FILES  -->
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>
</body>
</html>