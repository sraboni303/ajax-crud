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
	
	

	<div class="wrap-table">
		<a data-toggle="modal" class="btn btn-sm btn-success" href="#modal-box">Add New</a>
		<br><br>
		<div class="card shadow">
			<div class="card-body">
				<h2>All Data</h2>
				<table class="table table-striped">
					<thead>
						<tr>
							<th>#</th>
							<th>Name</th>
							<th>Email</th>
							<th>Cell</th>
							<th>Photo</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>

						<tr>
							<td>1</td>
							<td>Asraful Haque</td>
							<td>haq@gmail.com</td>
							<td>01717700811</td>
							<td><img src="assets/media/img/pp_photo/istockphoto-615279718-612x612.jpg" alt=""></td>
							<td>
								<a class="btn btn-sm btn-info" href="#">View</a>
								<a class="btn btn-sm btn-warning" href="#">Edit</a>
								<a class="btn btn-sm btn-danger" href="#">Delete</a>
							</td>
						</tr>					

					</tbody>
				</table>
			</div>
		</div>
	</div>
	

<!-- add new Modal -->
<div id="modalbox" class="modal fade">
	<div class="notice"></div>
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Add New User</h4>
				<button class="close" data-dismiss="modal">&times;</button>
			</div>
			<div class="modal-body">
				<form action="" method="POST">
					<div class="form-group">
						<label for="">Name</label>
						<input class="form-control" type="text" name="name" id="">
					</div>
					<div class="form-group">
						<label for="">E-mail</label>
						<input class="form-control" type="text" name="email" id="">
					</div>
					<div class="form-group">
						<label for="">Cell</label>
						<input class="form-control" type="text" name="cell" id="">
					</div>
					<div class="form-group">
						<label for="">Upload Image</label> <br>
						<input style="display: none;" class="form-control-file" type="file" name="photo" id="image-icon">
						<label for="image-icon"><img src="assets/media/img/camera.png" alt="" style="width: 50px; cursor: pointer;"></label>
					</div>
					<div class="form-group">
						<input class="btn btn-primary" type="submit" value="Add" name="" id="">
					</div>
				</form>
			</div>
			<div class="modal-footer"></div>
		</div>
	</div>
</div>




	<!-- JS FILES  -->
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>
	<script>
		
		$('form#modalbox').submit(function(e){
			e.preventDefault();


			$.ajax({
				url : 'register.php',
				method : 'POST',
				data : new FormData(this),
				contentType : false,
				processData : false,
				success : function(data){
					$('.notice').html(data);
				}
			});
		});









	</script>
</body>
</html>