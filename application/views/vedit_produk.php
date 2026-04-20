<div id="layoutSidenav_content">
    <div class="container-fluid px-4">
        <div class="card mx-4 mt-3">
            <div class="card-header">
                <a href="<?php echo site_url('dashboard_tokokue/lihat_produk') ?>"
                    class="btn btn-outline-primary btn-sm"><i class="fas fa-arrow-left"></i> Kembali</a>
            </div>
            <div class="card-body">
                <?php foreach ($produk as $p) { ?>

                    <form action="<?php echo site_url('dashboard_tokokue/update_produk') ?>" method="post"
                        enctype="multipart/form-data">
                        <input type="hidden" id="" name="id_produk" value="<?php echo $p->id_produk ?>">

                </div>
                <div class="form-group mb-2">
                    <label>Kode Produk</label>
                    <input type="text" class="form-control" name="kode_produk" value="<?php echo $p->kode_produk ?>">
                </div>

                <div class="form-group mb-2">
                    <label>Nama Produk</label>
                    <input type="text" class="form-control" name="nama_produk" value="<?php echo $p->nama_produk ?>">
                </div>

                <div class="form-group mb-2">
                    <label>Stok</label>
                    <input type="text" class="form-control" name="stok" value="<?php echo $p->stok ?>">
                </div>

                <div class="form-group mb-2">
                    <label>Deskripsi Produk</label>
                    <textarea class="form-control" name="deskripsi"><?php echo $p->deskripsi ?></textarea>
                </div>

                <div class="form-group mb-2">
                    <label>Harga</label>
                    <input type="text" name="harga" value="<?php echo $p->harga ?>" class="form-control">
                </div>

                <div class="form-group mb-3">
                    <label>Gambar saat ini</label><br>
                    <img src="<?php echo base_url('assets/uploads/' . $p->gambar); ?>" width="100">
                </div>

                <div class="form-group mb-3">
                    <label>Upload Gambar Baru</label>
                    <input type="file" name="gambar" class="form-control">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-warning btn-sm me-2">Update</button>
                    <button type="reset" class="btn btn-secondary btn-sm">Reset</button>
                </div>
                </form>
            <?php } ?>
        </div>
    </div>

