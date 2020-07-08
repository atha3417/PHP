<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <div class="row">
        <div class="col-lg-6">
            <h6>On User : <?= $userM['name']; ?></h6>
            <hr class="sidebar-divider d-none d-md-block">
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <?= $this->session->flashdata('message'); ?>
            <form action="" method="post">
                <input type="hidden" name="id" value="<?= $userM['id']; ?>">
                <div class="form-group">
                    
                    
                    <label for="name">Full Name</label>
                    <input type="text" class="form-control mb-3" id="name" name="name" value="<?= $userM['name']; ?>" readonly>

                    <label for="email">Email</label>
                    <input type="email" class="form-control mb-3" id="email" name="email" value="<?= $userM['email']; ?>" readonly>

                    <label for="image">Image</label>
                    <input type="text" class="form-control mb-3" id="image" name="image" placeholder="Image" value="<?= $userM['image']; ?>" readonly>

                    <label for="role_id">Role Id</label>
                    <input type="text" class="form-control mb-3" id="role_id" name="role_id" value="<?= $userM['role_id']; ?>">

                    <label for="is_active">Active Status</label>
                    <input type="text" class="form-control mb-3" id="is_active" name="is_active" value="<?= $userM['is_active']; ?>">
                </div>

                <div class="form-group">
                    <a href="http://localhost/wpu-login/admin/usermanagement" class="btn btn-danger btn-icon-split">
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