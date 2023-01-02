<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Content Row -->
    <div class="row">
        <div class="col-md">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="d-sm-flex align-items-center justify-content-between">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Data Monitoring Ibu <?= $monitoring_ibuhamil[0]['nama_lengkap'] ?></div>
                        <a href="<?= base_url('administrator/tambah_data_monitoring/' . $monitoring_ibuhamil[0]['id_ibuhamil']) ?>" class="btn btn-primary mb-4">Tambah Data</a>
                    </div>
                    <?= $this->session->flashdata('message') ?>
                    <div class="table">
                        <table class="table table-bordered" id="dataTable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Tanggal Monitoring</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($monitoring_ibuhamil as $mi) : ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= date('d M Y', strtotime($mi['tanggal_monitoring'])) ?></td>
                                        <td>
                                            <div class="d-flex justify-content-center align-items-center">
                                                <a href="<?= base_url('administrator/detail_monitoring_ibuhamil/' . $mi['id_ibuhamil'] . '/' . $mi['id']) ?>" class="badge badge-info mr-2"><i class="fas fa-info-circle"></i> Lihat detail monitoring</a>
                                                <a href="<?= base_url('administrator/hapus_monitoring_ibuhamil/' . $mi['id_ibuhamil'] . '/' . $mi['id']) ?>" class="badge badge-danger" onclick="return confirm('Apakah anda yakin ingin menghapusnya?')"><i class="fas fa-trash"></i> Hapus </a>
                                            </div>
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