<div class="container-fluid">
    <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_barang">
        Tambah barang
    </button>
    <table class="table table-bordered">
        <tr>
            <td>NO</td>
            <td>Gambar</td>
            <td>Nama Barang</td>
            <td>Kategori</td>
            <td>Harga</td>
            <td>Stok</td>
            <td>Deskripsi</td>
            <td colspan="2">Pilihan</td>
        </tr>
        <?php
        $no = 1;
        foreach ($barang as $b) : ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><img class="img-fluid img-thumbnail" alt="..." style="width:60px;height:80px;" src="<?php echo base_url() . 'img/' . $b->gambar ?>"></td>
                <td><?php echo $b->namabarang ?></td>
                <td><?php echo $b->kategori ?></td>
                <td><?php echo $b->harga ?></td>
                <td><?php echo $b->stok ?></td>
                <td><?php echo $b->deskripsi ?></td>
                <td>
                    <a href="<?php echo site_url('data_barang/edit/' . $b->id); ?>" class="btn btn-primary btn-sm">Edit</a>
                    <a href="<?php echo site_url('data_barang/hapus/' . $b->id); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus barang ini?');">Hapus</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>

<!-- Modal -->
<div class="modal fade" id="tambah_barang" tabindex="-1" role="dialog" aria-labelledby="tambahBarangLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahBarangLabel">Tambah Barang</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= site_url('data_barang/tambahaksi'); ?>" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <label>Nama Barang</label>
                        <input type="text" class="form-control form-control-user" id="namabarang" name="namabarang" placeholder="Masukkan nama barang" required>
                    </div>
                    <div class="form-group">
                        <label>Kategori</label>
                        <select name="kategori" id="kategori" class="form-control">
                            <option value="baju">Baju</option>
                            <option value="celana">Celana</option>
                            <option value="topi">Topi</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Harga</label>
                        <input type="number" class="form-control form-control-user" id="harga" name="harga" placeholder="Masukkan harga" required>
                    </div>
                    <div class="form-group">
                        <label>Stok Barang</label>
                        <input type="number" class="form-control form-control-user" id="stok" name="stok" placeholder="Masukkan stok" required>
                    </div>
                    <div class="form-group">
                        <label>Deskripsi</label>
                        <textarea class="form-control form-control-user" id="deskripsi" name="deskripsi" placeholder="Masukkan deskripsi" required></textarea>
                    </div>
                    <div class="form-group">
                        <label>Gambar</label>
                        <input type="file" class="form-control form-control-user" id="gambar" name="gambar" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>