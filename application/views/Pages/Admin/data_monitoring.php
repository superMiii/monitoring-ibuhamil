<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Content Row -->
    <div class="row">
        <div class="col-md">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="d-sm-flex align-items-center justify-content-between">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-4">
                            Data Monitoring Ibu Hamil</div>
                    </div>
                    <?= $this->session->flashdata('message') ?>
                    <div class="table">
                        <table class="table table-bordered" id="dataTable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama</th>
                                    <th>Umur</th>
                                    <th>No. WA</th>
                                    <th>Tempat Lahir</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Alamat</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($ibuhamil as $ih) : ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $ih['nama_lengkap'] ?></td>
                                        <td><?= $ih['umur'] ?></td>
                                        <td><?= $ih['no_wa'] ?></td>
                                        <td><?= $ih['tempat_lahir'] ?></td>
                                        <td><?= date('d M Y', strtotime($ih['tanggal_lahir'])) ?></td>
                                        <td><?= $ih['alamat'] ?></td>
                                        <td>
                                            <a href="<?= base_url('administrator/detail_monitoring/' . $ih['id_ibuhamil']) ?>" class="badge badge-info"><i class="fas fa-info-circle"></i> Lihat Monitoring</a>
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