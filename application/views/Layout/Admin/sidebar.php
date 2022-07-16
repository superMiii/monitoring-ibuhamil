<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-heartbeat"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Monitoring Ibu Hamil</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Navigation
    </div>

    <!-- Nav Item - Dashboard -->
    <li class="nav-item <?= ($title === 'Dashboard' ? 'active' : '') ?>">
        <a class="nav-link" href="<?= base_url('administrator'); ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item <?= ($title === 'Data Ibu Hamil' || $title === 'Data Monitoring Ibu Hamil' ? 'active' : '') ?>">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-book-medical"></i>
            <span>Data Pelayanan</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Pelayanan:</h6>
                <a class="collapse-item <?= ($title === 'Data Ibu Hamil' ? 'active' : '') ?>" href="<?= base_url('administrator/data_ibuhamil'); ?>">Data Ibu Hamil</a>
                <a class="collapse-item <?= ($title === 'Data Monitoring Ibu Hamil' ? 'active' : '') ?>" href="<?= base_url('administrator/data_monitoring'); ?>">Monitoring Ibu Hamil</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Dashboard -->
    <li class="nav-item <?= ($title === 'Data Nakes' ? 'active' : '') ?>">
        <a class="nav-link" href="<?= base_url('administrator/nakes'); ?>">
            <i class="fas fa-fw fa-user"></i>
            <span>Data Nakes</span></a>
    </li>
    <?php if ($this->session->userdata('role') == 1) : ?>
        <li class="nav-item <?= ($title === 'Data User' || $title === 'Data Role' ? 'active' : '') ?>">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse" aria-expanded="true" aria-controls="collapse">
                <i class="fas fa-table"></i>
                <span>Data Master</span>
            </a>
            <div id="collapse" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Master Data:</h6>
                    <a class="collapse-item <?= ($title === 'Data User' ? 'active' : '') ?>" href="<?= base_url('administrator/user'); ?>">Data User</a>
                    <a class="collapse-item <?= ($title === 'Data Role' ? 'active' : '') ?>" href="<?= base_url('administrator/role'); ?>">Data Role</a>
                </div>
            </div>
        </li>
    <?php endif; ?>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->