<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <div class="row">
        <div class="col-lg-6">
            <h6>On Submenu : <?= $mahasiswa['title']; ?></h6>
            <hr class="sidebar-divider d-none d-md-block"> 
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <?= $this->session->flashdata('message'); ?>
            <form action="" method="post">
                <input type="hidden" name="id" value="<?= $mahasiswa['id']; ?>">
                <div class="form-group">

					<label for="title">Title</label>
                    <input type="text" class="form-control mb-3" id="title" name="title" value="<?= $mahasiswa['title']; ?>">

					<label for="menu_id">Menu Id</label>
                    <input type="number" min="1" class="form-control mb-3" id="menu_id" name="menu_id" value="<?= $mahasiswa['menu_id']; ?>">

					<label for="url">Url</label>
                    <input type="text" class="form-control mb-3" id="url" name="url" value="<?= $mahasiswa['url']; ?>">

					<label for="icon">Icon</label>
                    <input type="text" class="form-control mb-3" id="icon" name="icon" value="<?= $mahasiswa['icon']; ?>">

					<label for="is_active">Active</label>
                    <input type="text" class="form-control mb-3" id="is_active" name="is_active" value="<?= $mahasiswa['is_active']; ?>">
                </div>

                <div class="form-group">
                    <a href="http://localhost/wpu-login/menu/submenu" class="btn btn-danger btn-icon-split">
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