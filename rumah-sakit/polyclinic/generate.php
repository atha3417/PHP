<?php include_once('../_header.php'); ?>

<h1 class="h3 mb-0 text-gray-800 mb-4">Polyclinic</h1>

<div class="row">
	<div class="col-lg-6">
		<form action="add.php" method="post">
			<div class="form-group">
				<input type="hidden" id="id" name="id[]" value="Atha">
				<label for="count_add">a Lot of Data Will be Added</label>
				<input type="text" id="count_add" name="count_add" maxlength="2" pattern="[0-9]+" class="form-control" required>
			</div>
			<div class="">
				<a href="data.php" class="btn btn-danger">Cancel</a>
				<input type="submit" name="generate" value="Generate" class="btn btn-primary">
			</div>
		</form>
	</div>
</div>

<?php include_once('../_footer.php'); ?>