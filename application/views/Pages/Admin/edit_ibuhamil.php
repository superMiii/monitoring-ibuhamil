<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Content Row -->
    <div class="row">
        <div class="col-md">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        Edit Data Ibu Hamil <?= $ibuhamil['nama_lengkap'] ?></div>
                    <a href="<?= base_url('administrator/data_ibuhamil') ?>" class="badge badge-primary mb-4">
                        < Kembali</a>
                            <form action="<?= base_url('administrator/edit_ibuhamil/' . $ibuhamil['id_ibuhamil']) ?>" method="POST" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="no_kk">No KK</label>
                                            <input type="number" class="form-control" id="no_kk" name="no_kk" value="<?= $ibuhamil['no_kk'] ?>" placeholder="No KK">
                                            <?= form_error('no_kk', '<small class="text-danger ml-2">', '</small>') ?>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="nik">No NIK</label>
                                            <input type="number" class="form-control" id="nik" name="nik" value="<?= $ibuhamil['nik'] ?>" placeholder="No NIK">
                                            <?= form_error('nik', '<small class="text-danger ml-2">', '</small>') ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="nama_lengkap">Nama Lengkap</label>
                                    <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" value="<?= $ibuhamil['nama_lengkap'] ?>" placeholder="Nama lengkap">
                                    <?= form_error('nama_lengkap', '<small class="text-danger ml-2">', '</small>') ?>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="tempat_lahir">Tempat Lahir</label>
                                            <input type="text" class="form-control" id="tempat_lahir" value="<?= $ibuhamil['tempat_lahir'] ?>" name="tempat_lahir" placeholder="Tempat Lahir">
                                            <?= form_error('tempat_lahir', '<small class="text-danger ml-2">', '</small>') ?>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="tanggal_lahir">Tanggal Lahir</label>
                                            <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="<?= $ibuhamil['tanggal_lahir'] ?>">
                                            <?= form_error('tanggal_lahir', '<small class="text-danger ml-2">', '</small>') ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="umur">Umur</label>
                                            <input type="number" class="form-control" id="umur" name="umur" value="<?= $ibuhamil['umur'] ?>" placeholder="umur">
                                            <?= form_error('umur', '<small class="text-danger ml-2">', '</small>') ?>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="no_wa">No WA (aktif)</label>
                                            <input type="number" class="form-control" id="no_wa" name="no_wa" value="<?= $ibuhamil['no_wa'] ?>" placeholder="wa aktif">
                                            <?= form_error('no_wa', '<small class="text-danger ml-2">', '</small>') ?>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="agama">Agama</label>
                                            <select class="form-control" id="agama" name="agama">
                                                <option value="<?= $ibuhamil['agama'] ?>"><?= $ibuhamil['agama'] ?></option>
                                                <hr>
                                                <option value="Islam">Islam</option>
                                                <option value="Protestan">Protestan</option>
                                                <option value="Katolik">Katolik</option>
                                                <option value="Hindu">Hindu</option>
                                                <option value="Buddha">Buddha</option>
                                                <option value="Khonghucu">Khonghucu</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="pendidikan">Pendidikan</label>
                                            <select class="form-control" id="pendidikan" name="pendidikan">
                                                <option value="<?= $ibuhamil['pendidikan'] ?>"><?= $ibuhamil['pendidikan'] ?></option>
                                                <hr>
                                                <option value="Tidak/Belum Sekolah">Tidak/Belum Sekolah</option>
                                                <option value="Belum Tamat SD/Sederajat">Belum Tamat SD/Sederajat</option>
                                                <option value="SD/Sederajat">SD/Sederajat</option>
                                                <option value="SLTP/Sederajat">SLTP/Sederajat</option>
                                                <option value="SLTA/Sederajat">SLTA/Sederajat</option>
                                                <option value="Diploma I/II">Diploma I/II</option>
                                                <option value="Akademi/Diploma III">Akademi/Diploma III</option>
                                                <option value="Diploma IV/Strata I">Diploma IV/Strata I</option>
                                                <option value="Strata II">Strata II</option>
                                                <option value="Strata III">Strata III</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="gol_darah">Gol. Darah</label>
                                            <select class="form-control" id="gol_darah" name="gol_darah">
                                                <option value="<?= $ibuhamil['gol_darah'] ?>"><?= $ibuhamil['gol_darah'] ?></option>
                                                <hr>
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option value="AB">AB</option>
                                                <option value="O">O</option>
                                                <option value="Tidak Diketahui">Tidak Diketahui</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="tinggi_badan">Tinggi Badan (cm)</label>
                                            <input type="number" class="form-control" id="tinggi_badan" name="tinggi_badan" value="<?= $ibuhamil['tinggi_badan'] ?>" placeholder="cm">
                                            <?= form_error('tinggi_badan', '<small class="text-danger ml-2">', '</small>') ?>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="berat_badan">Berat Badan (kg)</label>
                                            <input type="number" class="form-control" id="berat_badan" name="berat_badan" value="<?= $ibuhamil['berat_badan'] ?>" placeholder="kg">
                                            <?= form_error('berat_badan', '<small class="text-danger ml-2">', '</small>') ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <textarea class="form-control" id="alamat" name="alamat" rows="5"><?= $ibuhamil['alamat'] ?></textarea>
                                    <?= form_error('alamat', '<small class="text-danger ml-2">', '</small>') ?>
                                </div>
                                <div class="row">
                                    <div class="col md-6">
                                        <button type="submit" class="btn btn-primary btn-block">Update</button>
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