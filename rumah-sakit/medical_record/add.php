<?php 
include_once('../_header.php');
?>

<div class="box">
	<h1 class="h3 mb-0 text-gray-800 mb-4">Add New Medical Record</h1>
	<div class="row">
		<div class="col-lg-6 col-lg-offset-3">
			<form action="proses.php" method="post">
				<div class="form-group">
					<label for="pasien">Patient</label>
					<select name="pasien" id="pasien" class="custom-select" class="form-control" required>
						<option value="">-- Select Patient --</option>
						<?php 
						$sql_pasien = mysqli_query($con, "SELECT * FROM tb_pasien ORDER BY nama_pasien ASC") or die (mysqli_error($con));
						while ($data = mysqli_fetch_array($sql_pasien)) {
						    echo '<option value="'.$data['id_pasien'].'">'.$data['nama_pasien'].'</option>';
						} ?>
					</select>
				</div>
				<div class="form-group">
					<label for="keluhan">Complaint</label>
					<textarea id="keluhan" name="keluhan" class="form-control" required></textarea>
				</div>
				<div class="form-group">
					<label for="dokter">Doctor</label>
					<select name="dokter" id="dokter" class="custom-select" class="form-control" required>
						<option value="">-- Select Doctor --</option>
						<?php 
						$sql_dokter = mysqli_query($con, "SELECT * FROM tb_dokter ORDER BY nama_dokter ASC") or die (mysqli_error($con));
						while ($data = mysqli_fetch_array($sql_dokter)) {
						    echo '<option value="'.$data['id_dokter'].'">'.$data['nama_dokter'].'</option>';
						} ?>
					</select>
				</div>
				<div class="form-group">
					<label for="diagnosa">Diagnosis</label>
					<textarea id="diagnosa" name="diagnosa" class="form-control" required></textarea>
				</div>
				<div class="form-group">
					<label for="poli">Polyclicic</label>
					<select name="poli" id="poli" class="custom-select" class="form-control" required>
						<option value="">-- Select Polyclinic --</option>
						<?php 
						$sql_poli = mysqli_query($con, "SELECT * FROM tb_poliklinik ORDER BY nama_poli ASC") or die (mysqli_error($con));
						while ($data = mysqli_fetch_array($sql_poli)) {
						    echo '<option value="'.$data['id_poli'].'">'.$data['nama_poli'].'</option>';
						} ?>
					</select>
				</div>
				<div class="form-group">
					<label for="obat">Medicine</label>
					<select name="obat[]" id="obat" class="custom-select" class="form-control" multiple size="3" required>
						<?php 
						$sql_obat = mysqli_query($con, "SELECT * FROM tb_obat ORDER BY nama_obat ASC") or die (mysqli_error($con));
						while ($data = mysqli_fetch_array($sql_obat)) {
						    echo '<option value="'.$data['id_obat'].'">'.$data['nama_obat'].'</option>';
						} ?>
					</select>
				</div>
				<div class="form-group">
					<label for="tgl">Check Data</label>
					<input type="date" id="tgl" name="tgl" class="form-control" value="<?= date('Y-m-d') ?>" required>
				</div>
				<div class="form-group">
					<a href="data.php" class="btn btn-danger">Cancel</a>
					<input type="submit" name="add" value="Add Medical Record" class="btn btn-primary">
				</div>
			</form>
			<script>
				CKEDITOR.replace('keluhan', {
					uiColor: '#ec971f'
				});
				CKEDITOR.replace('diagnosa',{
					uiColor: '#ec971f'
				});
			</script>
		</div>
	</div>
</div>
<?php include_once('../_footer.php'); ?>