<!-- Begin Page Content -->
<div class="container-fluid">

    <?php if ($this->session->userdata('role') == 1) : ?>

        <!-- Content Row -->
        <div class="text-lg font-weight-bold text-primary text-uppercase mb-1">
            Total</div>
        <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Data Ibu Hamil</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $count_all_ibuhamil ?> Orang</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-hand-holding-heart fa-2x text-primary"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                    Data Monitoring</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $count_all_monitoring ?> Data</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-heartbeat fa-2x text-success"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                    Total User dan Role</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $count_all_user ?> Data</div>
                                <!-- <div class="h5 mb-0 font-weight-bold text-gray-800">Role : <?= $count_all_role ?></div> -->
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-users-cog fa-2x text-warning"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <?php endif; ?>


    <!-- Content Row -->
    <div class="text-lg font-weight-bold text-primary text-uppercase mb-1">
        Menu</div>
    <div class="row justify-content-center">
        <div class="col-xl-4 col-lg-6 mb-4">
            <div class="card dashboard border-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <a href="<?= base_url('administrator/data_ibuhamil'); ?>" class="text-primary" style="text-decoration:none;">Data Ibu Hamil</a>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-hand-holding-heart fa-2x text-primary"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-lg-6 mb-4">
            <div class="card dashboard border-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <a href="<?= base_url('administrator/data_monitoring'); ?>" class="text-success" style="text-decoration:none;">Data Monitoring</a>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-heartbeat fa-2x text-success"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php if ($this->session->userdata('role') == 1) : ?>
            <div class="col-xl-4 col-lg-6 mb-4">
                <div class="card dashboard border-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                    <a href="<?= base_url('administrator/user'); ?>" class="text-warning" style="text-decoration:none;">Data User</a>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-users fa-2x text-warning"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- <div class="col-xl-4 col-lg-6 mb-4">
                <div class="card dashboard border-danger shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                    <a href="<?= base_url('administrator/role'); ?>" class="text-danger" style="text-decoration:none;">Data Role</a>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-people-arrows fa-2x text-danger"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        <?php endif; ?>
    </div>

</div>
<!-- /.container-fluid -->