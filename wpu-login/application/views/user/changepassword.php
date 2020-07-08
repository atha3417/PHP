<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

	
	<div class="row">
		<div class="col-lg-6">

			<?= $this->session->flashdata('message'); ?>
			<form action="<?= base_url('user/changepassword'); ?>" method="post">
				<div class="form-group">
				    <label for="current_password">Current Password</label>
				    <input type="password" class="form-control form-password" id="current_password" name="current_password">
				    <?= form_error('current_password', '<small class="text-danger pl-3">', '</small>'); ?>
  				</div>
  				<div class="form-group">
				    <label for="new_password1">New Password</label>
				    <input type="password" class="form-control form-password" id="new_password1" name="new_password1">
				    <?= form_error('new_password1', '<small class="text-danger pl-3">', '</small>'); ?>
  				</div>
  				<div class="form-group">
				    <label for="new_password2">Confirm Password</label>
				    <input type="password" class="form-control form-password" id="new_password2" name="new_password2">
				    <?= form_error('new_password2', '<small class="text-danger pl-3">', '</small>'); ?>
				    <input type="checkbox" class="form-checkbox mt-3 ml-2">&nbsp;Show password
  				</div>
  				<div class="form-group">
  					<button type="submit" class="btn btn-primary">Change Password</button>
  				</div>
			</form>

		</div>
	</div>



</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->