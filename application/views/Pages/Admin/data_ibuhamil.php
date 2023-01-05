<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Content Row -->
    <div class="row">
        <div class="col-md">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="d-sm-flex align-items-center justify-content-between">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Data Ibu Hamil</div>
                        <a href="<?= base_url(($this->session->userdata('role') == 1) ? 'administrator/add_ibuhamil' : 'user/add_ibuhamil') ?>" class="btn btn-primary mb-4">Tambah Data</a>
                    </div>
                    <?= $this->session->flashdata('message') ?>
                    <div class="table">
                        <table class="table table-bordered w-100" id="dataTable">
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
                                            <a href="<?= base_url(($this->session->userdata('role') == 1) ? 'administrator/edit_ibuhamil/' . $ih['id_ibuhamil'] : 'user/edit_ibuhamil/' . $ih['id_ibuhamil']) ?>" class="badge badge-warning"><i class="fas fa-edit"></i> + monitoring</a> <br>
                                            <a href="<?= base_url(($this->session->userdata('role') == 1) ? 'administrator/hapus_ibuhamil/' . $ih['id_ibuhamil'] : 'user/hapus_ibuhamil/' . $ih['id_ibuhamil']) ?>" onclick="return confirm('Apakah anda yakin ingin menghapusnya?')" class="badge badge-danger"><i class="fas fa-trash"></i></a>
                                            <a href="<?= base_url(($this->session->userdata('role') == 1) ? 'administrator/detail_ibuhamil/' . $ih['id_ibuhamil'] : 'user/detail_ibuhamil/' . $ih['id_ibuhamil']) ?>" class="badge badge-info"><i class="fas fa-info-circle"></i></a>
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