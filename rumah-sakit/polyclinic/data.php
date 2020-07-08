<?php include_once('../_header.php') ?>

<div class="box">
	<h1 class="h3 mb-0 text-gray-800 mb-4">Polyclinic</h1>
	<a href="generate.php" class="btn btn-primary mb-3"><i class="fas fa-fw fa-plus"> </i> Add New polyclinic</a>
	<button class="btn btn-success mb-3 ml-2" onclick="edit()"><i class="fas fa-fw fa-edit"></i> Edit Data</button>
	<button class="btn btn-danger mb-3 ml-2" onclick="hapus()"><i class="fas fa-fw fa-trash"></i> Delete Data</button>
	<form method="post" name="proses">
		<div class="table-responsive">
			<table class="table table-hover table-bordered" id="dataTable">
				<thead>
					<tr>
						<th class="text-center">#</th>
						<th class="text-center">Name</th>
						<th class="text-center">Building</th>
						<th class="text-center">
							<input type="checkbox" id="select_all" value="" style="margin-left: 17px; width: 14px; height: 14px">
						</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$no = 1;
					$sql_poli = mysqli_query($con, "SELECT * FROM tb_poliklinik ORDER BY nama_poli ASC") or die (mysqli_error($con));
					if (mysqli_num_rows($sql_poli) > 0) {
						while ($data = mysqli_fetch_array($sql_poli)) { ?>
						<tr>
							<td class="text-center"><?= $no++ ?></td>
							<td class="text-center"><?= $data['nama_poli'] ?></td>
							<td class="text-center"><?= $data['gedung'] ?></td>
							<td class="text-center">
								<input type="checkbox" name="checked[]" class="check" value="<?= $data['id_poli'] ?>" style="width: 14px; height: 14px">
							</td>
						</tr>
					<?php
						}
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

	function edit() {
		document.proses.action = 'edit.php'
		document.proses.submit()
	}

	function hapus() {
		var conf = confirm('Are You Sure Want to Delete Selected Data?')
		if (conf) {
			document.proses.action = 'del.php'
			document.proses.submit()
		}
	}
</script>

<?php include_once('../_footer.php') ?>