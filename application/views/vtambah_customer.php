<div id="layoutSidenav_content">
<main>
    <div class="container-fluid px-4">
     <div class="card mx-4 mt-3">
        <div class="card-header">
         <a href="<?php echo site_url('dashboard_tokokue/lihat_customer')?>" class="btn btn-outline-primary btn-sm"><i class="fas fa-arrow-left"></i> Kembali</a> 
        </div>   
            <div class="card-body">
              <form action="<?php echo site_url('dashboard_tokokue/simpan_customer')?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="kode_customer">Kode customer</label>
                    <input type="text" class="form-control" id="kode_customer" name="kode_customer" required>
                </div>
              <div class="form-group">
                    <label for="nama_customer">Nama customer</label>
                    <input type="text" class="form-control" id="nama_customer" name="nama_customer" required>
                </div>
                <div class="form-group">
                    <label for="address">Alamat</label>
                    <textarea type="text" class="form-control" id="address" name="address" required></textarea>
                </div>
                <div class="form-group">
                    <label for="kota">Kota customer</label>
                    <input class="form-control" id="kota" name="kota" required>
                </div>
                <div class="form-group">
                    </br><button type="submit" class="btn btn-primary">Tambah</button>
                    <button type="reset" class="btn btn-secondary">Batal</button>
                </div>
              </form>
            </div>
     </div>
    </div>
</main>