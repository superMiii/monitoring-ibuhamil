<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Content Row -->
    <div class="row">
        <div class="col-md">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <a href="<?= base_url('administrator/detail_monitoring/' . $monitoring_ibuhamil['id_ibuhamil']) ?>" class="badge badge-primary mb-4">
                        < Kembali</a>
                            <h5>Data Monitoring Tanggal <?= date('d M Y', strtotime($monitoring_ibuhamil['tanggal_monitoring'])) ?></h5>
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Data Pribadi</div>
                            <div class="table">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>Nama Lengkap</td>
                                            <td>: <?= $monitoring_ibuhamil['nama_lengkap'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Tempat/Tanggal lahir</td>
                                            <td>: <?= $monitoring_ibuhamil['tempat_lahir'] ?>, <?= date('d M Y', strtotime($monitoring_ibuhamil['tanggal_lahir'])) ?></td>
                                        </tr>
                                        <tr>
                                            <td>Usia</td>
                                            <td>: <?= $monitoring_ibuhamil['umur'] ?> Tahun</td>
                                        </tr>
                                        <tr>
                                            <td>No WA</td>
                                            <td>: <?= $monitoring_ibuhamil['no_wa'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Alamat</td>
                                            <td>: <?= $monitoring_ibuhamil['alamat'] ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <hr>
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Data Hasil Monitoring</div>
                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>Tekanan Darah</td>
                                            <td>: <?= $monitoring_ibuhamil['tekanan_darah'] ?> mmHg</td>
                                        </tr>
                                        <tr>
                                            <td>Tinggi Badan</td>
                                            <td>: <?= $monitoring_ibuhamil['tinggi_badan'] ?> cm</td>
                                        </tr>
                                        <tr>
                                            <td>Berat Badan</td>
                                            <td>: <?= $monitoring_ibuhamil['berat_badan'] ?> kg</td>
                                        </tr>
                                        <tr>
                                            <td>Lingkar Lengan Atas</td>
                                            <td>: <?= $monitoring_ibuhamil['lingkar_lengan_atas'] ?> cm</td>
                                        </tr>
                                        <tr>
                                            <td>Leopold</td>
                                            <td>: <?= $monitoring_ibuhamil['leopold'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Tinggi Fundus Uteri</td>
                                            <td>: <?= $monitoring_ibuhamil['tinggi_fundus_uteri'] ?> cm</td>
                                        </tr>
                                        <tr>
                                            <td>Denyut Jantung Janin</td>
                                            <td>: <?= $monitoring_ibuhamil['denyut_jantung_janin'] ?> x/menit</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->