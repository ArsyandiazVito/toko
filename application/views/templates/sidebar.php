<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3"> Toko Pak Lubis <sup>2</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">

                <a class="nav-link" href="<?php echo base_url('beranda') ?>">
                    <span>Beranda</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider my-0"><br>
            <!-- Heading -->
            <div class="sidebar-heading">
                Kategori Produk
            </div>
            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('kategori/baju'); ?>">
                    <i class="fas fa-tshirt fa-sm fa-fw mr-2 text-gray-400"></i>
                    <span>Baju</span>
                </a>
            </li>

            <!-- Nav Item - Celana -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('kategori/celana'); ?>">
                    <i class="fas fa-box fa-sm fa-fw mr-2 text-gray-400"></i>
                    <span>Celana</span>
                </a>
            </li>

            <!-- Nav Item - Topi -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('kategori/topi'); ?>">
                    <i class="fas fa-hat-cowboy fa-sm fa-fw mr-2 text-gray-400"></i>
                    <span>Topi</span>
                </a>
            </li>
            <!-- Heading -->
            <div class="sidebar-heading">
                Simpan
            </div>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('user/index') ?>">
                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                    <span>Setting</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->