<?php 
include_once('../_header.php');
?>

<div class="box">
	<h1 class="h3 mb-0 text-gray-800 mb-4">Edit Medicine</h1>
	<div class="row">
		<div class="col-lg-6 col-lg-offset-3">
			<?php 
			$id = @$_GET['id'];
			$sql_obat = mysqli_query($con, "SELECT * FROM tb_obat WHERE id_obat = '$id'") or die (mysqli_error($con));
			$data = mysqli_fetch_array($sql_obat);
			?>
			<form action="proses.php" method="post">
				<div class="form-group">
					<input type="hidden" name="id" value="<?= $data['id_obat'] ?>">
					<label for="nama">Name</label>
					<input type="text" id="nama" name="nama" value="<?= $data['nama_obat'] ?>" class="form-control" required autofocus>
				</div>
				<div class="form-group">
					<label for="ket">Information</label>
					<textarea id="ket" name="ket" class="form-control" required><?= $data['ket_obat'] ?></textarea>
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