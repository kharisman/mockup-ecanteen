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
                                <!-- <h5 class="m-b-10">Laporan</h5> -->
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="#!">Laporan</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <h4>Summary</h4>
                            <div class="mb-3">
                                <label for="filter">Filter:</label>
                                <select id="filter" class="form-control">
                                    <option value="semua">Semua Order</option>
                                    <option value="berhasil">Order Berhasil</option>
                                    <option value="batal">Order Batal</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="tanggal-periode">Tanggal Periode:</label>
                                <input type="date" id="tanggal-periode" class="form-control">
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Tipe Order</th>
                                            <th>Jumlah Order</th>
                                            <th>Total Nominal</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        // Dummy data untuk summary laporan
                                        $summaryData = [
                                            ["Semua Order", 100, 2000000], // Jumlah Order dan Total Nominal sembarang
                                            ["Order Berhasil", 75, 1500000],
                                            ["Order Batal", 25, 500000],
                                        ];

                                        foreach ($summaryData as $data) {
                                            echo "<tr>";
                                            echo "<td>" . $data[0] . "</td>";
                                            echo "<td>" . $data[1] . "</td>";
                                            echo "<td>" . formatRupiah($data[2]) . "</td>"; // Menggunakan fungsi formatRupiah()
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
    </div>
<?php
include "inc/footer.php" ;
?>

