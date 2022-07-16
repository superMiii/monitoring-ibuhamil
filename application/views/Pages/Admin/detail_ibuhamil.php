<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Content Row -->
    <div class="row">
        <div class="col-md">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <a href="<?= base_url('administrator/data_ibuhamil') ?>" class="badge badge-primary mb-4">
                        < Kembali</a>
                            <table class="table table-responsive">
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
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->