<?php
include "inc/header.php" ;
?>
  <div class="pcoded-main-container">
        <div class="pcoded-content">
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <!-- <h5 class="m-b-10">Order Analytics</h5> -->
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="#!">Order</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <!-- <div class="card-header">
                            <h5>Order Tabs</h5>
                        </div> -->
                        <div class="card-body">
                            <ul class="nav nav-tabs mb-3" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link text-uppercase active" id="order-menunggu-tab" data-toggle="tab" href="#order-menunggu" role="tab" aria-controls="order-menunggu" aria-selected="true">Sedang diproses</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-uppercase" id="order-selesai-tab" data-toggle="tab" href="#order-selesai" role="tab" aria-controls="order-selesai" aria-selected="false">Order Selesai</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-uppercase" id="order-batal-tab" data-toggle="tab" href="#order-batal" role="tab" aria-controls="order-batal" aria-selected="false">Order Batal</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="order-menunggu" role="tabpanel" aria-labelledby="order-menunggu-tab">
                                    <h4>Order Menunggu</h4>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>ID Order</th>
                                                <th>Nama Pelanggan</th>
                                                <th>Tanggal Pesanan</th>
                                                <th>Waktu Pesanan</th>
                                                <th>Nominal Order</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            // Dummy data untuk Order Menunggu
                                            $orderMenunggu = [
                                                ["12345", "John Doe", "2023-09-21", "10:30 AM", "$50.00", "Menunggu Konfirmasi"],
                                                ["54321", "Jane Smith", "2023-09-20", "2:45 PM", "$30.50", "Menunggu Pengiriman"],
                                                // Tambahkan data lainnya sesuai kebutuhan
                                            ];

                                            foreach ($orderMenunggu as $order) {
                                                echo "<tr>";
                                                echo "<td>" . $order[0] . "</td>";
                                                echo "<td>" . $order[1] . "</td>";
                                                echo "<td>" . $order[2] . "</td>";
                                                echo "<td>" . $order[3] . "</td>";
                                                echo "<td>" . $order[4] . "</td>";
                                                echo "<td>" . $order[5] . "</td>";
                                                echo "</tr>";
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane fade" id="order-selesai" role="tabpanel" aria-labelledby="order-selesai-tab">
                                    <h4>Order Selesai</h4>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>ID Order</th>
                                                <th>Nama Pelanggan</th>
                                                <th>Tanggal Pesanan</th>
                                                <th>Waktu Pesanan</th>
                                                <th>Nominal Order</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            // Dummy data untuk Order Selesai
                                            $orderSelesai = [
                                                ["67890", "Alice Johnson", "2023-09-19", "9:15 AM", "$75.25", "Selesai"],
                                                ["98765", "Bob Wilson", "2023-09-18", "3:30 PM", "$42.75", "Selesai"],
                                                // Tambahkan data lainnya sesuai kebutuhan
                                            ];

                                            foreach ($orderSelesai as $order) {
                                                echo "<tr>";
                                                echo "<td>" . $order[0] . "</td>";
                                                echo "<td>" . $order[1] . "</td>";
                                                echo "<td>" . $order[2] . "</td>";
                                                echo "<td>" . $order[3] . "</td>";
                                                echo "<td>" . $order[4] . "</td>";
                                                echo "<td>" . $order[5] . "</td>";
                                                echo "</tr>";
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane fade" id="order-batal" role="tabpanel" aria-labelledby="order-batal-tab">
                                    <h4>Order Batal</h4>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>ID Order</th>
                                                <th>Nama Pelanggan</th>
                                                <th>Tanggal Pesanan</th>
                                                <th>Waktu Pesanan</th>
                                                <th>Nominal Order</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            // Dummy data untuk Order Batal
                                            $orderBatal = [
                                                ["54321", "Jane Smith", "2023-09-17", "11:00 AM", "$20.00", "Dibatalkan"],
                                                ["12345", "John Doe", "2023-09-16", "1:45 PM", "$10.75", "Dibatalkan"],
                                                // Tambahkan data lainnya sesuai kebutuhan
                                            ];

                                            foreach ($orderBatal as $order) {
                                                echo "<tr>";
                                                echo "<td>" . $order[0] . "</td>";
                                                echo "<td>" . $order[1] . "</td>";
                                                echo "<td>" . $order[2] . "</td>";
                                                echo "<td>" . $order[3] . "</td>";
                                                echo "<td>" . $order[4] . "</td>";
                                                echo "<td>" . $order[5] . "</td>";
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
    </div>
<?php
include "inc/footer.php" ;
?>

