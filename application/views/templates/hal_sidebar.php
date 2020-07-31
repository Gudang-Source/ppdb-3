<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url(); ?>">
        <div class="sidebar-brand-icons">
            <i class="fas fa-school"></i>
        </div>
        <div class="sidebar-brand-text mx-3">PPDB<br>SMAN 1 DIPATIUKUR</div>
    </a>

    <?php if ($role == 1) { ?>
    <!-- Divider -->
    <hr class="sidebar-divider">

    <div class="sidebar-heading">
        Admin
    </div>

    <!-- Nav Item - Dashboard -->
    <li class="nav-item ">
        <a class="nav-link pb-0" href="<?= base_url() . 'admin' ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>
    
    <?php } ?>

    <div class="sidebar-heading">
        user
    </div>

    <!-- SUB-MENU-->

    <!-- Nav Item - Dashboard -->
    <li class="nav-item ">
        <a class="nav-link pb-0" href="<?= base_url() . 'user' ?>">
            <i class="fas fa-fw fa-user"></i>
            <span>My profile</span></a>
    </li>
    <li class="nav-item ">
        <a class="nav-link pb-0" href="<?= base_url() . 'user/edit' ?>">
            <i class="fas fa-fw fa-edit"></i>
            <span>Edit Profile</span></a>
    </li>
    <li class="nav-item ">
        <a class="nav-link pb-0" href="<?= base_url() . 'user/changepassword' ?>">
            <i class="fas fa-fw fa-key"></i>
            <span>Change Password</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider mt-3">
    <div class="sidebar-heading">
        Pendaftaran
    </div>

    <!-- SUB-MENU-->

    <!-- Nav Item - Dashboard -->
    <?php if ($role == 1) { ?>
        <li class="nav-item ">
            <a class="nav-link pb-0" href="<?= base_url() . 'seleksi' ?>">
                <i class="fab fa-fw fa-wpforms"></i>
                <span>Daftar Pendaftar</span></a>
        </li>
        <li class="nav-item ">
            <a class="nav-link pb-0" href="<?= base_url() . 'seleksi/hasilseleksi' ?>">
                <i class="fas fa-fw fa-users"></i>
                <span>Hasil Seleksi</span></a>
        </li>
    <?php } ?>
    <?php if ($role == 2) { ?>
        <li class="nav-item ">
            <a class="nav-link pb-0" href="<?= base_url() . 'pendaftaran' ?>">
                <i class="fas fa-fw fa-file-alt"></i>
                <span>Biodata</span></a>
        </li>
        <li class="nav-item ">
            <a class="nav-link pb-0" href="<?= base_url() . 'pendaftaran/biodata' ?>">
                <i class="far fa-fw fa-edit"></i>
                <span>Isi biodata</span></a>
        </li>
        <li class="nav-item ">
            <a class="nav-link pb-0" href="<?= base_url() . 'pendaftaran/raport' ?>">
                <i class="fab fa-fw fa-wpforms"></i>
                <span>Raport</span></a>
        </li>

        <!-- SELEKSI -->
        <hr class="sidebar-divider mt-3">
        <div class="sidebar-heading">
            Seleksi
        </div>

        <!-- SUB-MENU-->

        <!-- Nav Item - Dashboard -->
        <li class="nav-item ">
            <a class="nav-link pb-0" href="<?= base_url() . 'seleksi/hasiluser' ?>">
                <i class="fas fa-fw fa-file-alt"></i>
                <span>Hasil Seleksi</span></a>
        </li>
        <!-- END SELEKSI -->
    <?php } ?>



    <!-- Divider -->
    <hr class="sidebar-divider mt-3">


    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url() . 'login/logout' ?>">
            <i class="fas fa-sign-out-alt"></i>
            <span>Logout</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>