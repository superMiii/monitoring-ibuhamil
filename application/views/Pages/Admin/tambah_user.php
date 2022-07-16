<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Content Row -->
    <div class="row">
        <div class="col-md">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        Tambah Data User</div>
                    <a href="<?= base_url('administrator/data_user') ?>" class="badge badge-primary mb-4">
                        < Kembali</a>
                            <form action="<?= base_url('administrator/add_user') ?>" method="POST" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="username">Username</label>
                                            <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                                            <?= form_error('username', '<small class="text-danger ml-2">', '</small>') ?>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="nama">Nama</label>
                                            <input type="text" class="form-control" id="nama" name="nama" placeholder="nama">
                                            <?= form_error('nama', '<small class="text-danger ml-2">', '</small>') ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                            <?= form_error('password', '<small class="text-danger ml-2">', '</small>') ?>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="password2">Password Confirmation</label>
                                            <input type="password" class="form-control" id="password2" name="password2" placeholder="Password confirm">
                                            <?= form_error('password2', '<small class="text-danger ml-2">', '</small>') ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md">
                                        <div class="form-group">
                                            <label for="role">Role</label>
                                            <select class="form-control" id="role" name="role">
                                                <?php foreach ($role as $r) : ?>
                                                    <option value="<?= $r['id'] ?>"><?= $r['role'] ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
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