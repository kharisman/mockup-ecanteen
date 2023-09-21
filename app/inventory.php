<?php
include "inc/header.php" ;
function formatRupiah($nominal) {
    return "Rp " . number_format($nominal, 2, ',', '.');
}
?>
 <div class="pcoded-main-container">
        <div class="pcoded-content">
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <!-- <h5 class="m-b-10">Inventory</h5> -->
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="#!">Inventory</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <h4>List Inventory</h4>
                            <div class="mb-3">
                                <a href="#modalTambah" class="btn btn-primary" data-toggle="modal">Tambah</a>
                            </div>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>SKU</th>
                                        <th>Nama Produk</th>
                                        <!-- <th>Jumlah</th> -->
                                        <th>Harga</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    // Dummy data untuk Inventory menu
                                    $inventoryMenu = [
                                        ["SKU123", "Produk A", 100, 50000],
                                        ["SKU456", "Produk B", 50, 30500],
                                        ["SKU789", "Produk C", 75, 75000],
                                        // Tambahkan menu inventaris lainnya sesuai kebutuhan
                                    ];

                                    foreach ($inventoryMenu as $item) {
                                        echo "<tr>";
                                        echo "<td>" . $item[0] . "</td>";
                                        echo "<td>" . $item[1] . "</td>";
                                        // echo "<td>" . $item[2] . "</td>";
                                        echo "<td>" . formatRupiah($item[3]) . "</td>"; // Menggunakan fungsi formatRupiah()
                                        echo "<td><a href='#'>Edit</a> | <a href='#'>Hapus</a></td>";
                                        echo "</tr>";
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <!-- Modal Tambah Item -->
    <div class="modal fade" id="modalTambah" tabindex="-1" role="dialog" aria-labelledby="modalTambahLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTambahLabel">Tambah Item ke Inventory</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Form untuk menambah item baru -->
                    <form action="proses_tambah_item.php" method="post">
                        <div class="form-group">
                            <label for="sku">SKU</label>
                            <input type="text" class="form-control" id="sku" name="sku" required>
                        </div>
                        <div class="form-group">
                            <label for="nama_produk">Nama Produk</label>
                            <input type="text" class="form-control" id="nama_produk" name="nama_produk" required>
                        </div>
                        <div class="form-group">
                            <label for="jumlah">Jumlah</label>
                            <input type="number" class="form-control" id="jumlah" name="jumlah" required>
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga (Rp)</label>
                            <input type="number" class="form-control" id="harga" name="harga" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

   

<?php
include "inc/footer.php" ;
?>

