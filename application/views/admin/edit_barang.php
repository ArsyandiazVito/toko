<div class="container-fluid">
    <h3>Edit Barang</h3>
    <form action="<?= site_url('data_barang/update'); ?>" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $barang->id ?>">
        <div class="form-group">
            <label>Nama Barang</label>
            <input type="text" class="form-control" name="namabarang" value="<?= $barang->namabarang ?>" required>
        </div>
        <div class="form-group">
            <label>Harga</label>
            <input type="number" class="form-control" name="harga" value="<?= $barang->harga ?>" required>
        </div>
        <div class="form-group">
            <label>Stok</label>
            <input type="number" class="form-control" name="stok" value="<?= $barang->stok ?>" required>
        </div>
        <div class="form-group">
            <label>Deskripsi</label>
            <textarea class="form-control" name="deskripsi" required><?= $barang->deskripsi ?></textarea>
        </div>
        <div class="form-group">
            <label>Gambar</label><br>
            <img src="<?= base_url('img/' . $barang->gambar) ?>" width="100"><br><br>
            <input type="file" class="form-control" name="gambar">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>