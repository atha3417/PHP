<?php include_once('../_header.php') ?>

<div class="box">
	<h1 class="h3 mb-0 text-gray-800 mb-4">Patient</h1>
	<a href="add.php" class="btn btn-primary mb-3"><i class="fas fa-fw fa-plus"> </i> Add New Patient</a>
	<a href="import.php" class="btn btn-success mb-3"><i class="fas fa-fw fa-file-upload"> </i> Import Excel File</a>
	<div class="table-responsive">
		<h6 class="text-gray-800">Export Data</h6>
		<table class="table table-hover table-bordered" id="pasien">
			<thead>
				<tr>
					<th class="text-center">Identity</th>
					<th class="text-center">Name</th>
					<th class="text-center">Gender</th>
					<th class="text-center">Address</th>
					<th class="text-center">Phone</th>
					<th class="text-center"><i class="fas fa-fw fa-cog"></i></th>
				</tr>
			</thead>
			<tbody>
				<?php
				$sql_pasien = mysqli_query($con, "SELECT * FROM tb_pasien") or die (mysqli_error($con));
				while ($data = mysqli_fetch_array($sql_pasien)) { ?>
				    <tr>
						<td class="text-center"><?= $data['nomor_identitas'] ?></td>
						<td class="text-center"><?= $data['nama_pasien'] ?></td>
						<td class="text-center"><?= $data['jenis_kelamin'] == 'L' ? "Man" : "Women" ?></td>
						<td class="text-center"><?= $data['alamat'] ?></td>
						<td class="text-center"><?= $data['no_telp'] ?></td>
						<td class="text-center">
							<a href="del.php?id=<?= $data['id_pasien'] ?>" class="btn btn-sm btn-danger"><i class="fas fa-fw fa-trash"></i></a>
						</td>
					</tr>
				<?php 
				}
				?>
			</tbody>
		</table>
	</div>
	<script>
		$(document).ready(function() {
		    $('#pasien').DataTable({
		        dom : 'Bfrtip',
		        buttons: [
		        	{
		        		extend : 'pdf',
		        		oriented : 'portrait',
		        		pageSize : 'Legal',
		        		title : 'Patient Data',
		        		download : 'open'
		        	},
		        	'csv', 'excel', 'print', 'copy'
		        ],
		        columnDefs : [
		        	{
		        		"searchable" : false,
		        		"orderable" : false,
		        		"targets" : 5,
		        	}
		        ]
		    })
		})
	</script>
</div>

<?php include_once('../_footer.php') ?>