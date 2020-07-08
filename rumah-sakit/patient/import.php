<?php 
include_once('../_header.php');
?>

<div class="box">
	<h1 class="h3 mb-0 text-gray-800 mb-4">Import Patient Data</h1>
	<div class="row">
		<div class="col-lg-6 col-lg-offset-3">
			<form action="proses.php" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label for="">Excel File</label>
					<div class="custom-file">
					    <label class="custom-file-label" for="file">Choose file</label>
						<input type="file" class="custom-file-input" name="file" id="file" aria-describedby="inputGroupFileAddon01">
					</div>
				</div>
				<div class="form-group">
					<a href="data.php" class="btn btn-danger">Cancel</a>
					<a href="../_assets/_file/example/example.xlsx" target="_blank" class="btn btn-success">Download Sample</a>
					<input type="submit" name="import" value="Import File" class="btn btn-primary">
				</div>
			</form>
		</div>
	</div>
</div>

<?php include_once('../_footer.php'); ?>