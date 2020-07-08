<?php include_once('../_header.php') ?>

<div class="box">
	<h1 class="h3 mb-0 text-gray-800 mb-4">Medical Record</h1>
	<a href="add.php" class="btn btn-primary mb-3"><i class="fas fa-fw fa-plus"> </i> Add New Medical Record</a>
	<form method="post" name="proses">
		<div class="table-responsive">
			<table class="table table-hover table-bordered" id="dataTable">
				<thead>
					<tr>
						<th class="text-center">No.</th>
						<th class="text-center">Patient</th>
						<th class="text-center">Doctor</th>
						<th class="text-center">Medicine</th>
						<th class="text-center">Date</th>
						<th class="text-center"><i class="fas fa-fw fa-cog"></i></th>
					</tr>
				</thead>
				<tbody>
					<?php 
					$no = 1;
					$query = "SELECT * FROM tb_rekammedis 
							INNER JOIN tb_pasien ON tb_rekammedis.id_pasien = tb_pasien.id_pasien 
							INNER JOIN tb_dokter ON tb_rekammedis.id_dokter = tb_dokter.id_dokter 
							INNER JOIN tb_poliklinik ON tb_rekammedis.id_poli = tb_poliklinik.id_poli";
					$sql_rm = mysqli_query($con, $query) or die (mysqli_error($con));
					while ($data = mysqli_fetch_array($sql_rm)) { ?>
					    <tr>
					    	<td class="text-center" width="10"><?= $no++ ?>.</td>
					    	<td class="text-center" width="250"><?= $data['nama_pasien'] ?></td>
					    	<td class="text-center" width="250"><?= $data['nama_dokter'] ?></td>
					    	<td class="text-center">
						    	<?php 
						    	$sql_obat ="SELECT * FROM tb_rm_obat 
						    		INNER JOIN tb_obat 
						    		ON tb_rm_obat.id_obat = tb_obat.id_obat 
						    		WHERE id_rm = '$data[id_rm]'";
						    	$sql_rm_obat = mysqli_query($con, $sql_obat) or die (mysqli_error($con));
						    	while ($data_obat = mysqli_fetch_array($sql_rm_obat)) {
						    	    echo "- ".$data_obat['nama_obat']."<br>";
						    	}
						    	?>
						    </td>
					    	<td class="text-center" width="100"><?= indo_date($data['tanggal_periksa']) ?></td>
					    	<td class="text-center">
					    		<a href="" class="badge badge-pill badge-secondary" id="set_dtl" 
						      	data-toggle="modal" 
						      	data-target="#modal-detail" 
						      	data-pasien="<?= $data['nama_pasien'] ?>" 
						      	data-keluhan="<?= $data['keluhan'] ?>" 
						      	data-dokter="<?= $data['nama_dokter'] ?>" 
						      	data-diagnosa="<?= $data['diagnosa'] ?>" 
						      	data-poli="<?= $data['nama_poli'] ?>" 
						      	data-date="<?= indo_date($data['tanggal_periksa']); ?>">
						      	details
					             </a>
					             <a href="del.php?id=<?= $data['id_rm'] ?>" class="badge badge-pill badge-danger" onclick="return confirm('Are You Sure Want to Delete <?= $data['nama_pasien'] ?>')">delete</a>
					    	</td>
					    </tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</form>
</div>

<script>
  $(document).ready(function() {
    $(document).on('click', '#set_dtl', function() {
      var pasien = $(this).data('pasien');
      var keluhan = $(this).data('keluhan');
      var dokter = $(this).data('dokter');
      var diagnosa = $(this).data('diagnosa');
      var poli = $(this).data('poli');
      var date = $(this).data('date');
      $('#pasien').text(pasien);
      $('#keluhan').text(keluhan);
      $('#dokter').text(dokter);
      $('#diagnosa').text(diagnosa);
      $('#poli').text(poli);
      $('#date').text(date);
    })
  })
</script>

<?php include_once('../_footer.php') ?>

<div class="modal fade" id="modal-detail" tabindex="-1" role="dialog" aria-labelledby="rmModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="rmModalLabel"><strong>Medical Record Details</strong></h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body table-responsive">
        <table class="table table-hover" id="pagination">
          <tbody>
            <tr>
              <th scope="row">Patient</th>
              <td><span id="pasien"></span></td>
            </tr>
            <tr>
              <th scope="row">Complaint</th>
              <td><span id="keluhan"></span></td>
            </tr>
            <tr>
              <th scope="row">Doctor</th>
              <td><span id="dokter"></span></td>
            </tr>
            <tr>
              <th scope="row">Diagnosis</th>
              <td><span id="diagnosa"></span></td>
            </tr>
            <tr>
              <th scope="row">Polyclinic</th>
              <td><span id="poli"></span></td>
            </tr>
            <tr>
              <th scope="row">Medicine</th>
              <td>
              	<?php
				$query = "SELECT * FROM tb_rekammedis 
						INNER JOIN tb_pasien ON tb_rekammedis.id_pasien = tb_pasien.id_pasien 
						INNER JOIN tb_dokter ON tb_rekammedis.id_dokter = tb_dokter.id_dokter 
						INNER JOIN tb_poliklinik ON tb_rekammedis.id_poli = tb_poliklinik.id_poli";
				$sql_rm = mysqli_query($con, $query) or die (mysqli_error($con));
				while ($data = mysqli_fetch_array($sql_rm)) {
			    	$sql_obat = "SELECT * FROM tb_rm_obat 
			    			INNER JOIN tb_obat 
			    			ON tb_rm_obat.id_obat = tb_obat.id_obat 
			    			WHERE id_rm = '$data[id_rm]'";
			    	$sql_rm_obat = mysqli_query($con, $sql_obat) or die (mysqli_error($con));
			    	while ($data_obat = mysqli_fetch_array($sql_rm_obat)) {
			    	    echo "- ".$data_obat['nama_obat']."<br>";
			    	}
				} ?>
            </tr>
            <tr>
              <th scope="row">Date</th>
              <td><span id="date"></span></td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    </div>
  </div>
</div>