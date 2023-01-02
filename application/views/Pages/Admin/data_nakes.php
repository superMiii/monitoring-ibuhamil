<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Content Row -->
    <div class="row">
        <div class="col-md">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="d-sm-flex align-items-center justify-content-between">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Data Nakes</div>
                    </div>
                    <?= $this->session->flashdata('message') ?>
                    <div class="table">
                        <table class="table table-bordered w-100" id="dataTable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama</th>
                                    <th>Jabatan</th>
                                    <th>Date Created</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($nakes as $u) : ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $u['nama'] ?></td>
                                        <td><?= $u['role'] == 2 ? 'Nakes' : '' ?></td>
                                        <td><?= date('d M Y h:i:sa', strtotime($u['created_at'])) ?></td>
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