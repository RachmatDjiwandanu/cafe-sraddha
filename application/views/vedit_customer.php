<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <div class="card mx-4 mt-3">
                <div class="card-header">
                    <a href="<?php echo site_url('dashboard_tokokue/lihat_customer') ?>"
                        class="btn btn-outline-primary btn-sm"><i class="fas fa-arrow-left"></i> Kembali</a>
                </div>
                <div class="card-body">
                    <?php foreach ($customer as $c) { ?>
                        <form action="<?php echo site_url('dashboard_tokokue/update_customer') ?>" method="post"
                            enctype="multipart/form-data">
                            <input type="hidden" id="" name="id_customer" value="<?php echo $c->id_customer ?>">
                            <div class="form-group">
                                <label for="kode_customer">Kode customer</label>
                                <input type="text" class="form-control" id="kode_customer" name="kode_customer"
                                    value="<?php echo $c->kode_customer ?>">
                            </div>
                            <div class="form-group">
                                <label for="nama_customer">Nama customer</label>
                                <input type="text" class="form-control" id="nama_customer" name="nama_customer"
                                    value="<?php echo $c->nama_customer ?>">
                            </div>
                            <div class="form-group">
                                <label for="address">Alamat</label>
                                <textarea class="form-control" id="address" name="address"><?php echo $c->address ?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="kota">Kota customer</label>
                                <input class="form-control" id="kota" name="kota"
                                    value="<?php echo $c->kota ?>">
                            </div>
                            <div class="form-group">
                                </br><button type="submit" class="btn btn-primary">Update</button>
                                <button type="reset" class="btn btn-secondary">Batal</button>
                            </div>
                        </form>
                    <?php } ?>
                </div>
            </div>
        </div>
    </main>