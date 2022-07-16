<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Content Row -->
    <div class="row">
        <div class="col-md">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="d-sm-flex align-items-center justify-content-between">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Data Role</div>
                        <a href="<?= base_url('administrator/add_role') ?>" class="btn btn-primary mb-4">Tambah Data</a>
                    </div>
                    <?= $this->session->flashdata('message') ?>
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Role</th>
                                    <th>Date Created</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($role as $u) : ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $u['role'] ?></td>
                                        <td><?= date('d M Y h:i:sa', strtotime($u['created_at'])) ?></td>
                                        <td>
                                            <a href="<?= base_url('administrator/edit_role/' . $u['id']) ?>" class="badge badge-warning"><i class="fas fa-edit"></i></a>
                                            <a href="<?= base_url('administrator/delete_role/' . $u['id']) ?>" onclick="return confirm('Apakah anda yakin ingin menghapusnya?')" class="badge badge-danger"><i class="fas fa-trash"></i></a>
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