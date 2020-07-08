<?php 
include_once('../_header.php');
?>

<div class="box">
	<h1 class="h3 mb-0 text-gray-800 mb-4">Edit Doctor</h1>
	<div class="row">
		<div class="col-lg-6 col-lg-offset-3">
			<form action="proses.php" method="post">
				<?php 
				$id = @$_GET['id'];
				$sql_dokter = mysqli_query($con, "SELECT * FROM tb_dokter WHERE id_dokter = '$id'") or die (mysqli_error($con));
				$data = mysqli_fetch_array($sql_dokter);
				?>
				<div class="form-group">
					<label for="nama">Name</label>
					<input type="hidden" name="id" value="<?= $data['id_dokter'] ?>">
					<input type="text" id="nama" name="nama" value="<?= $data['nama_dokter'] ?>" class="form-control" required autofocus>
				</div>
				<div class="form-group">
					<label for="spesialis">Specialist</label>
					<input type="text" id="spesialis" name="spesialis" value="<?= $data['spesialis'] ?>" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="alamat">Address</label>
					<textarea id="alamat" name="alamat" class="form-control" required><?= $data['alamat'] ?></textarea>
				</div>
				<div class="form-group">
					<label for="telp">Phone</label>
					<input type="number" id="telp" name="telp" value="<?= $data['no_telp'] ?>" class="form-control" required>
				</div>
				<div class="form-group">
					<a href="data.php" class="btn btn-danger">Cancel</a>
					<input type="submit" name="edit" value="Save Changes" class="btn btn-primary">
				</div>
			</form>
		</div>
	</div>
</div>
<?php include_once('../_footer.php'); ?>