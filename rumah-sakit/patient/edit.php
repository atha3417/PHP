<?php 
include_once('../_header.php');
?>

<div class="box">
	<h1 class="h3 mb-0 text-gray-800 mb-4">Edit Patient</h1>
	<div class="row">
		<div class="col-lg-6 col-lg-offset-3">
			<?php 
			$id = @$_GET['id'];
			$sql_pasien = mysqli_query($con, "SELECT * FROM tb_pasien WHERE id_pasien = '$id'") or die (mysqli_error($con));
			$data = mysqli_fetch_array($sql_pasien);
			?>
			<form action="proses.php" method="post">
				<div class="form-group">
					<input type="hidden" name="id" value="<?= $data['id_pasien'] ?>">
					<label for="identitas">Identity Number</label>
					<input type="number" id="identitas" name="identitas" class="form-control" value="<?= $data['nomor_identitas'] ?>" required autofocus>
				</div>
				<div class="form-group">
					<label for="nama">Name</label>
					<input type="text" id="nama" name="nama" class="form-control" value="<?= $data['nama_pasien'] ?>" required>
				</div>
				<div class="form-group mb-1">
					<label for="">Gender</label>
				</div>
				<div class="form-check form-check-inline">
				  	<input class="form-check-input" type="radio" name="jk" id="jk" value="L" <?= $data['jenis_kelamin'] == "L" ? "checked" : null ?>>
				  	<label class="form-check-label" for="jk">Men</label>
				</div>
				<div class="form-group form-check form-check-inline">
				  	<input class="form-check-input" type="radio" name="jk" id="jk" value="P" <?= $data['jenis_kelamin'] == "P" ? "checked" : null ?>>
				  	<label class="form-check-label" for="jk">Woman</label>
				</div>
				<div class="form-group">
					<label for="alamat">Address</label>
					<textarea id="alamat" name="alamat" class="form-control" required><?= $data['alamat'] ?></textarea>
				</div>
				<div class="form-group">
					<label for="telp">Phone</label>
					<input type="number" id="telp" name="telp" class="form-control" value="<?= $data['no_telp'] ?>" required>
				</div>
				<div class="form-group">
					<a href="data.php" class="btn btn-danger">Cancel</a>
					<input type="submit" name="edit" value="Add Patient" class="btn btn-primary">
				</div>
			</form>
		</div>
	</div>
</div>
<?php include_once('../_footer.php'); ?>