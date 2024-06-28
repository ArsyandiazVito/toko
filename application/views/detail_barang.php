<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            Detail Produk
        </div>
        <div class="card-body">
            <?php foreach ($barang as $b) : ?>
                <div class="row">
                    <div class="col md-4">
                        <img src="<?php echo base_url() . 'img/' . $b->gambar ?>">
                    </div>
                    <div class="col md-8">
                        <table class="table">
                            <tr>
                                <td>Nama Produk</td>
                                <td><?php echo $b->namabarang ?></td>
                            </tr>
                            <tr>
                                <td>Harga</td>
                                <td>Rp. <?php echo $b->harga ?></td>
                            </tr>
                            <tr>
                                <td>Nama Produk</td>
                                <td><?php echo $b->stok ?></td>
                            </tr>
                            <tr>
                                <td>Deskripsi</td>
                                <td><?php echo $b->deskripsi ?></td>
                            </tr>
                        </table>
                        <?php echo anchor('beranda/detail/' . $b->id, '<div class= "btn btn-sm btn-success">Detail</div>') ?>
                        <?php echo anchor('beranda', '<div class= "btn btn-sm btn-warning">Kembali</div>') ?>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</div>