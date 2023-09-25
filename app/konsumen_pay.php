<?php
// Simulasi data item yang diorder
$items = [
    ["Nama Produk 1", "Rp. 10,000"],
    ["Nama Produk 2", "Rp. 15,000"],
    ["Nama Produk 3", "Rp. 12,000"],
];

// Simulasi data opsi pembayaran
$metodePembayaran = [
    "Bayar_ditempat",
    "Saldo",
    "VA_Account",
    "QRIS",
    "Dana",
    "Gopay",
];

// Simulasi data metode pengambilan
$metodePengambilan = [
    "Ambil_sendiri",
    "Ojek_online",
];
?>

<?php include "inc/konsumen_header.php"; ?>

<div class="pcoded-main-container">
    <div class="pcoded-wrapper container">
        <div class="pcoded-content">
            <div class="pcoded-inner-content">
                <div class="main-body">
                    <div class="page-wrapper">
                        <!-- [ Main Content ] start -->
                        <div class="row">
                            <div class="col-xl-12">
                                <h5 class="mt-4">Pembayaran</h5>
                                <hr>
                                <div class="row">
                                    <!-- Daftar Item yang diorder -->
                                    <div class="col-md-4">
                                        <h6>Item yang diorder:</h6>
                                        <ul>
                                            <?php foreach ($items as $item) { ?>
                                                <li><?php echo $item[0]; ?> - <?php echo $item[1]; ?></li>
                                            <?php } ?>
                                        </ul>
                                    </div>

                                    <!-- Metode Pengambilan -->
                                    
                                    <div class="col-md-4">
                                        <h6>Pilih Metode Pengambilan:</h6>
                                        <form id="pengambilanForm" action="proses_pengambilan.php" method="post">
                                            <div class="form-check">
                                                <?php foreach ($metodePengambilan as $pengambilan) { ?>
                                                    <input class="form-check-input" type="radio" name="metode_pengambilan" id="<?php echo strtolower($pengambilan); ?>" value="<?php echo $pengambilan; ?>">
                                                    <label class="form-check-label" for="<?php echo strtolower($pengambilan); ?>">
                                                        <?php echo str_replace('_', ' ', $pengambilan); ?>
                                                    </label><br>
                                                <?php } ?>
                                            </div>
                                        </form>
                                    </div>

                                    <!-- Opsi Pembayaran -->
                                    <div class="col-md-4">
                                        <h6>Pilih Metode Pembayaran:</h6>
                                        <form id="pembayaranForm" action="proses_pembayaran.php" method="post">
                                            <div class="form-check">
                                                <?php foreach ($metodePembayaran as $metode) { ?>
                                                    <input class="form-check-input" type="radio" name="metode_pembayaran" id="<?php echo strtolower($metode); ?>" value="<?php echo $metode; ?>">
                                                    <label class="form-check-label" for="<?php echo strtolower($metode); ?>">
                                                        <?php echo str_replace('_', ' ', $metode); ?>
                                                    </label><br>
                                                <?php } ?>
                                            </div>
                                            <button type="button" class="btn btn-primary mt-3" id="btnBayar">Bayar</button>
                                        </form>
                                    </div>
                                </div>

                                
                            </div>
                        </div>
                        <!-- [ Main Content ] end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Detail Pembayaran -->
<div class="modal fade" id="modalDetailPembayaran" tabindex="-1" role="dialog" aria-labelledby="modalDetailPembayaranLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalDetailPembayaranLabel">Detail Pembayaran</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Konten Detail Pembayaran -->
                <?php foreach ($metodePembayaran as $metode) { ?>
                    <div id="detail<?php echo $metode; ?>" style="display: none;">
                        <p>Metode Pembayaran: <?php echo str_replace('_', ' ', $metode); ?></p>
                        <!-- Tambahkan detail pembayaran untuk <?php echo str_replace('_', ' ', $metode); ?> -->
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>

<?php include "inc/konsumen_footer.php"; ?>

<script>
    // Tampilkan modal detail pembayaran saat tombol "Bayar" ditekan
    document.getElementById('btnBayar').addEventListener('click', function() {
        var metodePembayaran = document.querySelector('input[name="metode_pembayaran"]:checked').value;

        // Sembunyikan semua detail pembayaran
        document.querySelectorAll('.modal-body > div').forEach(function(element) {
            element.style.display = 'none';
        });

        // Tampilkan detail pembayaran sesuai dengan metode yang dipilih
        document.getElementById('detail' + metodePembayaran).style.display = 'block';

        // Tampilkan modal
        $('#modalDetailPembayaran').modal('show');
    });
</script>
