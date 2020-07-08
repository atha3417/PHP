<?php include_once('../_header.php'); 
$chk = @$_POST['id'];
if (!isset($chk)) {
	echo "<script>alert('Enter The Amount of Data to be Added First!'); window.location='generate.php'</script>";
} else { ?>

<h1 class="h3 mb-0 text-gray-800 mb-4">Add New Polyclinic</h1>

<div class="row">
	<div class="col-lg-8">
		<form action="proses.php" method="post">
			<input type="hidden" name="total" value="<?= @$_POST['count_add'] ?>">
			<table class="table">
				<tr>
					<th>No.</th>
					<th>Name</th>
					<th>Building</th>
				</tr>
				<?php 
				for ($i = 1; $i <= $_POST['count_add']; $i++) { ?>
					<tr>
						<td><?= $i ?></td>
						<td>
							<input type="text" name="nama-<?= $i ?>" class="form-control" required autofocus>
						</td>
						<td>
							<input type="text" name="gedung-<?= $i ?>" class="form-control" required>
						</td>
					</tr>	
				<?php } ?>
			</table>
			<div>
				<a href="data.php" class="btn btn-danger">Cancel</a>
				<a href="generate.php" class="btn btn-success">Add Data Again</a>
				<input type="submit" name="add" value="Add Polyclinic" class="btn btn-primary">
			</div>
		</form>
	</div>
</div>

<?php 
include_once('../_footer.php');
} ?>