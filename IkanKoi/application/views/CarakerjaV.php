<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("includes/head.php") ?>
</head>

<body class="sb-nav-fixed">
    <?php $this->load->view("includes/navbar.php") ?>
    <?php $this->load->view("includes/sidebar.php") ?>
    <div id="layoutSidenav_content">
        <main>
            <br>
            <div class="container-fluid px-4">
                <div>
                    <div class="card mb-4">
                        <div class="card-header">
                            <h3 class="mt-4">Cara Menggunakan Website</h3>
                        </div>
                        <div class="card-body" style="margin: 0 auto; text-align:justify">
                            <div class="row">
                                <h5 class="mb-4">1. Geser halam ke paling akhir untuk menemukan tombol untuk Uji Coba Kualitas Air, atau klik menu "Uji Kualitas Air" yang ada di samping hingga muncul halaman Uji Coba Air</h5>
                                <div class="text-center mb-4">
                                    <img src="<?= base_url() ?>/assets/img/tombol_uji.png" class="rounded float-left" width="600" height="280" />
                                </div>
                                <h5 class="mb-4">2. Setelah berada di halaman "Uji Kualitas Air", selanjutnya masukkan nilai data yang sudah didapatkan (Suhu, TDS, dan DO), kemudian pilih tombol "Proses" </h5>
                                <div class="text-center mb-4">
                                    <img src="<?= base_url() ?>/assets/img/input_data.png" class="rounded float-left" width="600" height="240" />
                                </div>
                                <h5 class="mb-4">3. Hasil perhitungan Uji Kualitas Air akan langsung ditampilkan dan untuk uji kualitas air tiap jenis ikan juga akan ditampilkan. Pilih tombol "Simpan" jika ingin menyimpan data hasil uji kualitas air.</h5>
                                <div class="text-center mb-4">
                                    <img src="<?= base_url() ?>/assets/img/hasil.png" class="rounded float-left" width="600" height="300" />
                                </div>
                                <h5 class="mb-4">4. Setelah menyimpan data hasil uji kualitas air, data tersebut dapat dilihat pada menu "History".</h5>
                                <div class="text-center mb-4">
                                    <img src="<?= base_url() ?>/assets/img/history.png" class="rounded float-left" width="600" height="300" />
                                </div>
                                <h5 class="mb-4">5. Pada menu History, ditampilkan data yang pernah diujikan. Pada menu history, juga dapat melihat detail per data lengkap dengan hasil grade pada tiap jenis ikan koi.</h5>
                                <div class="text-center">
                                    <img src="<?= base_url() ?>/assets/img/detail_history.png" class="rounded float-left" width="600" height="300" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid px-4">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Copyright &copy; Uji coba kualitas air</div>
                </div>
            </div>
        </footer>
    </div>
    </div>
    <!-- JS MEMANGGIL JS YANG ADA DI includes/js.php -->
    <?php $this->load->view("includes/js.php") ?>
</body>

</html>