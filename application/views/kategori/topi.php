<div class="container-fluid">

    <!-- Topbar -->
    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

        <!-- Sidebar Toggle (Topbar) -->
        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
        </button>
        <h1 class="h3 mb-2 text-gray-800"><?= $judul; ?></h1>

        <!-- Topbar Navbar -->
        <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
                <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-search fa-fw"></i>
                </a>
                <!-- Dropdown - Messages -->
                <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                    <form class="form-inline mr-auto w-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" ariahaspopup="true" aria-expanded="false">
                    <span class="mr-2 d-none d-lg-inline textgray-600 small"><?= $user['nama']; ?> </span>
                    <img class="img-profile rounded-circle" src="<?= base_url('assets/img/profile/') . $user['image']; ?>">
                </a>
                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="<?= base_url('admin/da'); ?>">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>

                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?= base_url('autentifikasi/logout'); ?>" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
            </li>

        </ul>

    </nav>
    <!-- End of Topbar -->
    <div class="row text-center">
        <?php foreach ($topi as $b) : ?>
            <div class="col-md-3 mb-3 d-flex align-items-stretch">
                <div class="card ml-3" style="width: 16rem;">
                    <div class="card-img-top-wrapper" style="height: 200px; display: flex; align-items: center; justify-content: center;">
                        <img src="<?php echo base_url() . 'img/' . $b->gambar ?>" class="card-img-top img-fluid" style="max-height: 100%; max-width: 100%; object-fit: contain;" alt="...">
                    </div>
                    <div class="card-body d-flex flex-column">
                        <h4 class="card-title text-center mb-1"><?php echo $b->namabarang ?></h4>
                        <p class="card-text">Rp.<?php echo number_format($b->harga, 0, ',', '.') ?></p>
                        <!-- <a href="#" class="btn btn-primary mt-auto">Detail</a> -->
                        <?php echo anchor('beranda/detail/' . $b->id, '<div class= "btn btn-sm btn-success">Detail</div>') ?>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>