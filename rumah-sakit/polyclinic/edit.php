<?php 
$chk = @$_POST['checked'];
if (!isset($chk)) {
	echo "<script>alert('No Data Selected!'); window.location='data.php'</script>";
} else{

include_once('../_header.php'); 
?>

<h1 class="h3 mb-0 text-gray-800 mb-4">Edit Polyclinic</h1>

<div class="row">
	<div class="col-lg-8">
		<form action="proses.php" method="post">
			<input type="hidden" name="total" value="<?= @$_POST['count_add'] ?>">
			<table class="table" id="dataTable">
				<tr>
					<th>No.</th>
					<th>Name</th>
					<th>Building</th>
				</tr>
				<?php 
				$no = 1;
				foreach($chk as $id) { 
					$sql_poli = mysqli_query($con, "SELECT * FROM tb_poliklinik WHERE id_poli = '$id'") or die (mysqli_error($con));
					while ($data = mysqli_fetch_array($sql_poli)) { ?>
					<tr>
						<td><?= $no++ ?></td>
						<td>
							<input type="hidden" name="id[]" value="<?= $data['id_poli'] ?>">
							<input type="text" name="nama[]" value="<?= $data['nama_poli'] ?>" class="form-control" required autofocus>
						</td>
						<td>
							<input type="text" name="gedung[]" value="<?= $data['gedung'] ?>" class="form-control" required>
						</td>
					</tr>	
				<?php
					}
				}
				?>
			</table>
			<div>
				<a href="data.php" class="btn btn-danger">Cancel</a>
				<input type="submit" name="edit" value="Save Changes" class="btn btn-primary">
			</div>
		</form>
	</div>
</div>

<?php 
include_once('../_footer.php'); } ?>