<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <?php if (isset($message) && $message): ?>
                <div class="alert alert-success alert-dismissible fade show mx-3 mt-3" role="alert">
                    <?php echo $message; ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            <?php endif; ?>
            <?php if (isset($error) && $error): ?>
                <div class="alert alert-danger alert-dismissible fade show mx-3 mt-3" role="alert">
                    <?php echo $error; ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            <?php endif; ?>
            <div class="card mx-3 mt-3">

                <div class="card-header">
                    <a href="<?php echo site_url('dashboard_tokokue/tambah_barangkeluar') ?>"
                        class="btn btn-outline-primary btn-sm"> <i class="fas fa-plus"></i> Tambah barang keluar</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>NO Transaksi</th>
                                    <th>Tanggal</th>
                                    <th>Customer</th>
                                    <th>Produk</th>
                                    <th>Jumlah barang</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($barang_keluar as $b) {
                                    ?>
                                    <tr>
                                        <td><?php echo $no++ ?></th>
                                        <td><?php echo $b->no_transaksi ?></td>
                                        <td><?php echo date('d/m/Y', strtotime($b->tanggal)); ?></td>
                                        <td><?php echo htmlspecialchars($b->nama_customer ?? ''); ?></td>
                                        <td><?php echo htmlspecialchars($b->nama_produk ?? ''); ?></td>
                                        <td><?php echo $b->jumlah_barang ?></td>
                                        <td>
                                            <a href="<?php echo site_url('dashboard_tokokue/edit_barangkeluar/' . $b->id_barang_keluar) ?>"
                                                class="btn btn-warning btn-sm" title="Edit barangkeluar"><i
                                                    class="fas fa-pencil"></i> </a>
                                            <a href="<?php echo site_url('dashboard_tokokue/hapus_barangkeluar/' . $b->id_barang_keluar) ?>"
                                                class="btn btn-danger btn-sm" title="Hapus barang keluar"
                                                onclick="return confirm('Yakin ingin menghapus barang keluar ini?')"><i
                                                    class="fas fa-trash"></i> </a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
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
                responsive: true,
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.13.4/i18n/Indonesian.json"
                },
                columnDefs: [
                    { orderable: false, targets: [0, 6] }
                ]
            });
        });
    </script>