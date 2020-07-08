<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <div class="row">
        <div class="col-lg-6">
            <h6>On Menu : <?= $tugas['menu']; ?></h6>
            <hr class="sidebar-divider d-none d-md-block"> 
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <?= $this->session->flashdata('message'); ?>
            <form action="" method="post">
                <input type="hidden" name="id" value="<?= $tugas['id']; ?>">
                <div class="form-group">
                	<label for="menu">Menu Name</label>
                    <input type="text" class="form-control" id="menu" name="menu" value="<?= $tugas['menu']; ?>">
                    <?= form_error('menu', '<small class="text-danger">', '</small>'); ?>
                </div>

                <div class="form-group">
                    <a href="http://localhost/wpu-login/menu/" class="btn btn-danger btn-icon-split">
                        <span class="icon text-white-50">
                            <i class="fas fa-fw fa-arrow-left"></i>
                        </span>
                        <span class="text">Cancel</span>
                    </a>
                    <button type="submit" class="btn btn-primary btn-icon-split">
                        <span class="icon text-white-50">
                            <i class="fas fa-fw fa-edit"></i>
                        </span>
                        <span class="text">Save Changes</span>
                    </button>
                </div>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content