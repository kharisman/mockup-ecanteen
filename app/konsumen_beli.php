<?php
// Simulasi data layanan PPOB
$layananPPOB = [
    "PLN",
    "Pulsa",
    "PDAM",
    "Internet",
    "TV Kabel",
    "Asuransi",
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
                                <h5 class="mt-4">Pembelian PPOB</h5>
                                <hr>
                                <div class="row">
                                    <!-- Daftar Layanan PPOB -->
                                    <div class="col-md-6">
                                        <h6>Pilih Layanan PPOB:</h6>
                                        <form id="layananForm" action="proses_pembelian.php" method="post">
                                            <div class="form-check">
                                                <?php foreach ($layananPPOB as $layanan) { ?>
                                                    <input class="form-check-input" type="radio" name="layanan_ppob" id="<?php echo strtolower($layanan); ?>" value="<?php echo $layanan; ?>">
                                                    <label class="form-check-label" for="<?php echo strtolower($layanan); ?>">
                                                        <?php echo $layanan; ?>
                                                    </label><br>
                                                <?php } ?>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- Opsi Pembayaran -->
                                    <div class="col-md-6">
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
        var layananPPOB = document.querySelector('input[name="layanan_ppob"]:checked');
        var metodePembayaran = document.querySelector('input[name="metode_pembayaran"]:checked').value;

        if (layananPPOB === null) {
            alert('Silakan pilih layanan PPOB terlebih dahulu.');
            return;
        }

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
