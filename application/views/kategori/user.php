<div class="container-fluid mt-2">
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src=" <?php echo base_url('assets/img/aa1.jpeg') ?>" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="..." class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="..." class="d-block w-100" alt="...">
            </div>
        </div>
    </div>
    <div class="row text-center mt-3">
        <?php foreach ($barang as $b) : ?>
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
<