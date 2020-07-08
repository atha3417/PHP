<?php 
include_once('../_header.php');
?>

<div class="box">
	<h1 class="h3 mb-0 text-gray-800 mb-4">Add New Patient</h1>
	<div class="row">
		<div class="col-lg-6 col-lg-offset-3">
			<form action="proses.php" method="post">
				<div class="form-group">
					<label for="identitas">Identity Number</label>
					<input type="number" id="identitas" name="identitas" class="form-control" required autofocus>
				</div>
				<div class="form-group">
					<label for="nama">Name</label>
					<input type="text" id="nama" name="nama" class="form-control" required>
				</div>
				<div class="form-group mb-1">
					<label for="">Gender</label>
				</div>
				<div class="form-check form-check-inline">
				  	<input class="form-check-input" type="radio" name="jk" id="jk" value="L">
				  	<label class="form-check-label" for="jk">Men</label>
				</div>
				<div class="form-group form-check form-check-inline">
				  	<input class="form-check-input" type="radio" name="jk" id="jk" value="P">
				  	<label class="form-check-label" for="jk">Woman</label>
				</div>
				<div class="form-group">
					<label for="alamat">Address</label>
					<textarea id="alamat" name="alamat" class="form-control" required></textarea>
				</div>
				<div class="form-group">
					<label for="telp">Phone</label>
					<input type="number" id="telp" name="telp" class="form-control" required autofocus>
				</div>
				<div class="form-group">
					<a href="data.php" class="btn btn-danger">Cancel</a>
					<input type="submit" name="add" value="Add Patient" class="btn btn-primary">
				</div>
			</form>
		</div>
	</div>
</div>
<?php include_once('../_footer.php'); ?>