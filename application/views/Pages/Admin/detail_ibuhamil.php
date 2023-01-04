<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Content Row -->
    <div class="row">
        <div class="col-md">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <a href="<?= $this->session->userdata('role') == 1 ? base_url('administrator/data_ibuhamil') : base_url('user/data_ibuhamil') ?>" class="badge badge-primary mb-4">
                        < Kembali</a>
                            <a href="<?= $this->session->userdata('role') == 1 ? base_url('administrator/print/' . $ibuhamil['id_ibuhamil']) : base_url('user/print/' . $ibuhamil['id_ibuhamil']) ?>" class="badge badge-info mb-4">
                                <i class="fas fa-print"></i> Print</a>
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>Nama Lengkap</td>
                                        <td>: <?= $ibuhamil['nama_lengkap'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>NIK</td>
                                        <td>: <?= $ibuhamil['nik'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>No KK</td>
                                        <td>: <?= $ibuhamil['no_kk'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Tempat/Tanggal lahir</td>
                                        <td>: <?= $ibuhamil['tempat_lahir'] ?>, <?= date('d M Y', strtotime($ibuhamil['tanggal_lahir'])) ?></td>
                                    </tr>
                                    <tr>
                                        <td>Usia</td>
                                        <td>: <?= $ibuhamil['umur'] ?> Tahun</td>
                                    </tr>
                                    <tr>
                                        <td>Pendidikan Terakhir</td>
                                        <td>: <?= $ibuhamil['pendidikan'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Agama</td>
                                        <td>: <?= $ibuhamil['agama'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>No WA</td>
                                        <td>: <?= $ibuhamil['no_wa'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Tinggi Badan</td>
                                        <td>: <?= $ibuhamil['tinggi_badan'] ?> cm</td>
                                    </tr>
                                    <tr>
                                        <td>Berat Badan</td>
                                        <td>: <?= $ibuhamil['berat_badan'] ?> kg</td>
                                    </tr>
                                    <tr>
                                        <td>Gol. Darah</td>
                                        <td>: <?= $ibuhamil['gol_darah'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Alamat</td>
                                        <td>: <?= $ibuhamil['alamat'] ?></td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="table table-bordered w-100" id="dataTable">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Tanggal Monitoring</th>
                                        <th>Tekanan Darah</th>
                                        <th>Tinggi Badan</th>
                                        <th>Berat Badan</th>
                                        <th>Lingkar Lengan Atas</th>
                                        <th>Leopold</th>
                                        <th>Tinggi Fundus Uteri</th>
                                        <th>Denyut Jantung Janin</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($monitoring_ibuhamil as $mi) : ?>
                                        <tr>
                                            <td class="text-sm"><?= $no++; ?></td>
                                            <td class="text-sm"><?= date('d M Y', strtotime($mi['tanggal_monitoring'])) ?></td>
                                            <td class="text-sm"><?= $mi['tekanan_darah'] ?> mmHg</td>
                                            <td class="text-sm"><?= $mi['tinggi_badan'] ?> cm</td>
                                            <td class="text-sm"><?= $mi['berat_badan'] ?> kg</td>
                                            <td class="text-sm"><?= $mi['lingkar_lengan_atas'] ?> cm</td>
                                            <td class="text-sm">Leopold <?= $mi['leopold'] ?></td>
                                            <td class="text-sm"><?= $mi['tinggi_fundus_uteri'] ?> cm</td>
                                            <td class="text-sm"><?= $mi['denyut_jantung_janin'] ?> x/menit</td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->