<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Content Row -->
    <div class="row">
        <div class="col-md">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="d-sm-flex align-items-center justify-content-between">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Data User</div>
                        <a href="<?= base_url('administrator/add_user') ?>" class="btn btn-primary mb-4">Tambah Data</a>
                    </div>
                    <?= $this->session->flashdata('message') ?>
                    <div class="table">
                        <table class="table table-bordered" id="dataTable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama</th>
                                    <th>Username</th>
                                    <th>Password</th>
                                    <th>Role</th>
                                    <th>Date Created</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($user as $u) : ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $u['nama'] ?></td>
                                        <td><?= $u['username'] ?></td>
                                        <td>**********</td>
                                        <td><?= $u['role'] == 1 ? 'Admin' : 'Nakes' ?></td>
                                        <td><?= date('d M Y h:i:sa', strtotime($u['created_at'])) ?></td>
                                        <td>
                                            <a href="<?= base_url('administrator/edit_user/' . $u['id']) ?>" class="badge badge-warning"><i class="fas fa-edit"></i></a>
                                            <?php if ($this->session->userdata('id') != $u['id']) : ?>
                                                <a href="<?= base_url('administrator/delete_user/' . $u['id']) ?>" onclick="return confirm('Apakah anda yakin ingin menghapusnya?')" class="badge badge-danger"><i class="fas fa-trash"></i></a>
                                            <?php endif; ?>
                                            <a class="badge badge-success" href="<?= base_url('administrator/resetpassuser/' . $u['id']); ?>" onclick="return confirm('Apakah anda yakin ingin mereset password user ini?');"><i class="fas fa-key"></i></a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->