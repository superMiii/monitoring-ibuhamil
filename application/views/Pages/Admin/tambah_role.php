<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Content Row -->
    <div class="row">
        <div class="col-md">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        Tambah Data Role</div>
                    <a href="<?= base_url('administrator/role') ?>" class="badge badge-primary mb-4">
                        < Kembali</a>
                            <form action="<?= base_url('administrator/add_role') ?>" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="role">role</label>
                                    <input type="text" class="form-control" id="role" name="role" placeholder="role">
                                    <?= form_error('role', '<small class="text-danger ml-2">', '</small>') ?>
                                </div>
                                <div class="row">
                                    <div class="col md-6">
                                        <button type="submit" class="btn btn-primary btn-block">Save</button>
                                    </div>
                                    <div class="col md-6">
                                        <button type="reset" class="btn btn-secondary btn-block">Reset</button>
                                    </div>
                                </div>
                            </form>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->