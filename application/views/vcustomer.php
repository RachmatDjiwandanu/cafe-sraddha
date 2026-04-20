<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <div class="card mx-3 mt-3">
                <div class="card-header">
                    <a href="<?php echo site_url('dashboard_tokokue/tambah_customer') ?>"
                        class="btn btn-outline-primary btn-sm"> <i class="fas fa-plus"></i> Tambah customer</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kode customer</th>
                                    <th>Nama customer</th>
                                    <th>Alamat</th>
                                    <th>Kota</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($customer as $c) {
                                    ?>
                                    <tr>
                                        <td><?php echo $no++ ?></th>
                                        <td><?php echo $c->kode_customer ?></td>
                                        <td><?php echo $c->nama_customer ?></td>
                                        <td><?php echo $c->address ?></td>
                                        <td><?php echo $c->kota ?></td>
                                        <td>
                                            <a href="<?php echo site_url('dashboard_tokokue/edit_customer/' . $c->id_customer) ?>"
                                                class="btn btn-warning btn-sm" title="Edit customer"><i
                                                    class="fas fa-pencil"></i> </a>
                                            <a href="<?php echo site_url('dashboard_tokokue/hapus_customer/' . $c->id_customer) ?>"
                                                class="btn btn-danger btn-sm" title="Hapus customer"
                                                onclick="return confirm('Yakin ingin menghapus customer ini?')"><i
                                                    class="fas fa-trash"></i> </a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- Pustaka DataTables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

    <!-- Script JS DataTable -->
    <script>
        $(document).ready(function () {
            $('#dataTable').DataTable({
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.13.4/i18n/Indonesian.json"
                }
            });
        });
    </script>