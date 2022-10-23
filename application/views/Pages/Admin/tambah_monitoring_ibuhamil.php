<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Content Row -->
    <div class="row">
        <div class="col-md">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        Tambah Data Monitoring Ibu <?= $ibuhamil['nama_lengkap'] ?></div>
                    <a href="<?= base_url('administrator/detail_monitoring/' . $ibuhamil['id_ibuhamil']) ?>" class="badge badge-primary mb-4">
                        < Kembali</a>
                            <form action="<?= base_url('administrator/tambah_data_monitoring/' . $ibuhamil['id_ibuhamil']) ?>" method="POST" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="tanggal_monitoring">Tanggal Monitoring</label>
                                            <input type="date" class="form-control" id="tanggal_monitoring" name="tanggal_monitoring" placeholder="No KK" value="<?= date('Y-m-d') ?>">
                                            <?= form_error('tanggal_monitoring', '<small class="text-danger ml-2">', '</small>') ?>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="tekanan_darah">Tekanan Darah</label>
                                            <input type="text" class="form-control" id="tekanan_darah" name="tekanan_darah" placeholder="contoh: 110/90">
                                            <?= form_error('tekanan_darah', '<small class="text-danger ml-2">', '</small>') ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="tinggi_badan">Tinggi Badan</label>
                                            <input type="number" class="form-control" id="tinggi_badan" name="tinggi_badan" placeholder="Tinggi Badan" max="10">
                                            <?= form_error('tinggi_badan', '<small class="text-danger ml-2">', '</small>') ?>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="berat_badan">Berat Badan</label>
                                            <input type="number" class="form-control" id="berat_badan" name="berat_badan" placeholder="Berat Badan" max="10">
                                            <?= form_error('berat_badan', '<small class="text-danger ml-2">', '</small>') ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="lingkar_lengan_atas">lingkar Lengan Atas</label>
                                            <input type="number" class="form-control" id="lingkar_lengan_atas" name="lingkar_lengan_atas" placeholder="lingkar lengan atas" max="10">
                                            <?= form_error('lingkar_lengan_atas', '<small class="text-danger ml-2">', '</small>') ?>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="leopold">Leopold</label>
                                            <input type="text" class="form-control" id="leopold" name="leopold" placeholder="leopold">
                                            <?= form_error('leopold', '<small class="text-danger ml-2">', '</small>') ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="tinggi_fundus_uteri">Tinggi Fundus Uteri</label>
                                            <input type="number" class="form-control" id="tinggi_fundus_uteri" name="tinggi_fundus_uteri" placeholder="Tinggi fundus_uteri" max="10">
                                            <?= form_error('tinggi_fundus_uteri', '<small class="text-danger ml-2">', '</small>') ?>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="denyut_jantung_janin">Denyut Jantung Janin</label>
                                            <input type="number" class="form-control" id="denyut_jantung_janin" name="denyut_jantung_janin" placeholder="denyut jantung janin" max="10">
                                            <?= form_error('denyut_jantung_janin', '<small class="text-danger ml-2">', '</small>') ?>
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