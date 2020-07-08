<?php include_once('../_header.php') ?>

<div class="box">
	<h1 class="h3 mb-0 text-gray-800 mb-4">Medicine</h1>
	<a href="add.php" class="btn btn-primary mb-3"><i class="fas fa-fw fa-user-plus"> </i> Add New Medicine</a>
	<div class="table-responsive">
		<table class="table table-hover table-bordered" id="dataTable">
			<thead>
				<tr>
					<th class="text-center">#</th>
					<th class="text-center">Name</th>
					<th class="text-center">Information</th>
					<th class="text-center"><i class="fas fa-fw fa-cog"></i></th>
				</tr>
			</thead>
			<tbody>
				<?php 
				$no = 1;
				$sql_obat = mysqli_query($con, "SELECT * FROM tb_obat") or die (mysqli_error($con));
				if (mysqli_num_rows($sql_obat) > 0) {
					while ($data = mysqli_fetch_array($sql_obat)) { ?>
						<tr>
							<td class="text-center"><?= $no++ ?></td>
							<td class="text-center"><?= $data['nama_obat'] ?></td>
							<td class="text-center"><?= $data['ket_obat'] ?></td>
							<td class="text-center">
								<a href="edit.php?id=<?= $data['id_obat'] ?>" class="badge badge-pill badge-success">&nbsp;&nbsp;edit&nbsp;&nbsp;</a>
								<a href="del.php?id=<?= $data['id_obat'] ?>" class="badge badge-pill badge-danger" onclick="return confirm('Are You Sure Want to Delete <?= $data['nama_obat'] ?>')">&nbsp;delete&nbsp;</a>
							</td>
						</tr>
				<?php	    
					}
				} else {
					echo '<tr><td colspan="4">No data available in table</td></tr>';
				}
				?>
			</tbody>
		</table>
	</div>
</div>

<?php include_once('../_footer.php') ?>