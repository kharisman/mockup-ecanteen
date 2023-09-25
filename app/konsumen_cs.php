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
                                <h5 class="mt-4">Customer Service</h5>
                                <hr>

                                <!-- Daftar FAQ -->
                                <h6>Frequently Asked Questions (FAQ)</h6>
                                <ul>
                                    <li>
                                        <strong>Q: Apa itu Kantin Favorit?</strong><br>
                                        A: Kantin Favorit adalah platform untuk mencari kantin favorit berdasarkan lokasi Anda.
                                    </li>
                                    <li>
                                        <strong>Q: Bagaimana cara mencari kantin terdekat?</strong><br>
                                        A: Anda dapat menggunakan opsi "Terdekat" pada menu Urutan Berdasarkan.
                                    </li>
                                    <li>
                                        <strong>Q: Bagaimana cara melakukan pembelian?</strong><br>
                                        A: Silakan pilih kantin, pilih produk, dan klik "Beli" untuk memulai proses pembelian.
                                    </li>
                                    <li>
                                        <strong>Q: Apa metode pembayaran yang tersedia?</strong><br>
                                        A: Kami menerima berbagai metode pembayaran, termasuk pembayaran di tempat, saldo, VA Account, QRIS, Dana, dan Gopay.
                                    </li>
                                    <li>
                                        <strong>Q: Bagaimana jika ada masalah dengan pesanan saya?</strong><br>
                                        A: Anda dapat menghubungi customer service kami untuk bantuan lebih lanjut.
                                    </li>
                                </ul>

                                <!-- Form Pertanyaan -->
                                <h6>Tanyakan Sesuatu</h6>
                                <form action="proses_pertanyaan.php" method="post">
                                    <div class="mb-3">
                                        <label for="nama">Nama:</label>
                                        <input type="text" class="form-control" id="nama" name="nama" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="email">Email:</label>
                                        <input type="email" class="form-control" id="email" name="email" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="pertanyaan">Pertanyaan:</label>
                                        <textarea class="form-control" id="pertanyaan" name="pertanyaan" rows="4" required></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Kirim Pertanyaan</button>
                                </form>
                            </div>
                        </div>
                        <!-- [ Main Content ] end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include "inc/konsumen_footer.php"; ?>
