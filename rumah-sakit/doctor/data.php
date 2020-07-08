<?php include_once('../_header.php') ?>

<div class="box">
	<h1 class="h3 mb-0 text-gray-800 mb-4">Doctor</h1>
	<a href="add.php" class="btn btn-primary mb-3"><i class="fas fa-fw fa-plus"> </i> Add New Doctor</a>
	<button class="btn btn-danger mb-3 ml-2" onclick="hapus()"><i class="fas fa-fw fa-trash"></i> Delete Data</button>
	<form method="post" name="proses">
		<div class="table-responsive">
			<table class="table table-hover table-bordered" id="dataTable">
				<thead>
					<tr>
						<th class="text-center" width="15px">
							<input type="checkbox" id="select_all" value="" style="margin-left: 17px; width: 14px; height: 14px">
						</th>
						<th class="text-center">No.</th>
						<th class="text-center">Name</th>
						<th class="text-center">Specialist</th>
						<th class="text-center">Address</th>
						<th class="text-center">Phone</th>
						<th class="text-center"><i class="fas fa-fw fa-cog"></i></th>
					</tr>
				</thead>
				<tbody>
					<?php
					$no = 1;
					$sql_poli = mysqli_query($con, "SELECT * FROM tb_dokter") or die (mysqli_error($con));
					while ($data = mysqli_fetch_array($sql_poli)) { ?>
					<tr>
						<td class="text-center">
							<input type="checkbox" name="checked[]" class="check" value="<?= $data['id_dokter'] ?>" style="width: 14px; height: 14px">
						</td>
						<td class="text-center"><?= $no++ ?></td>
						<td class="text-center"><?= $data['nama_dokter'] ?></td>
						<td class="text-center"><?= $data['spesialis'] ?></td>
						<td class="text-center"><?= $data['alamat'] ?></td>
						<td class="text-center"><?= $data['no_telp'] ?></td>
						<td class="text-center">
							<a href="edit.php?id=<?= $data['id_dokter'] ?>" class="badge badge-pill badge-success">&nbsp;edit&nbsp;</a>
						</td>
					</tr>
					<?php
					}
					?>
				</tbody>
			</table>
		</div>
	</form>
</div>
<script>
	$(document).ready(function() {
		$('#select_all').on('click', function() {
			if (this.checked) {
				$('.check').each(function() {
					this.checked = true;
				})
			} else {
				$('.check').each(function() {
					this.checked = false;
				})
			}
		})

		$('.check').on('click', function() {
			if ($('.check:checked').length == $('.check').length) {
				$('#select_all').prop('checked', true)
			} else {
				$('#select_all').prop('checked', false)
			}
		})
	})

	function hapus() {
		var conf = confirm('Are You Sure Want to Delete Selected Data?')
		if (conf) {
			document.proses.action = 'del.php'
			document.proses.submit()
		}
	}
</script>

<?php include_once('../_footer.php') ?>