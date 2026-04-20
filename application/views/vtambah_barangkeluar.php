<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <div class="card mx-4 mt-3">
                <div class="card-header">
                    <a href="<?php echo site_url('dashboard_tokokue/lihat_barangkeluar') ?>"
                        class="btn btn-outline-primary btn-sm">
                        <i class="fas fa-arrow-left"></i> Kembali
                    </a>
                </div>
                <div class="card-body">

                    <form action="<?php echo site_url('dashboard_tokokue/simpan_barangkeluar') ?>" method="post">

                        <div class="form-group">
                            <label>No Transaksi</label>
                            <input type="text" class="form-control" name="no_transaksi" required>
                        </div>

                        <div class="form-group">
                            <label>Tanggal</label>
                            <input type="date" class="form-control" name="tanggal" required>
                        </div>

                        <div class="form-group">
                            <label>Customer</label>
                            <select name="customer" class="form-control" required>
                                <option value="">-- Pilih Customer --</option>
                                <?php foreach ($customer as $c) { ?>
                                    <option value="<?= $c->id_customer ?>"><?= $c->nama_customer ?></option>
                                <?php } ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Produk</label>
                            <select name="produk" class="form-control" required>
                                <option value="">-- Pilih Produk --</option>
                                <?php foreach ($produk as $p) { ?>
                                    <option value="<?= $p->id_produk ?>"><?= $p->nama_produk ?></option>
                                <?php } ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Jumlah Barang</label>
                            <input type="number" class="form-control" name="jumlah" required>
                        </div>

                        <div class="form-group mt-3">
                            <button type="submit" class="btn btn-primary">Tambah</button>
                            <button type="reset" class="btn btn-secondary">Batal</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </main>     