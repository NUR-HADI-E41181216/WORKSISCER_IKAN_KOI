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
                                <h5>1. Geser halam ke paling akhir untuk menemukan tombol untuk Uji Coba Kualitas Air, atau klik menu "Uji Kualitas Air" yang ada di samping hingga muncul halaman Uji Coba Air</h5>
                                <img src="<?= base_url() ?>/assets/img/c1.jpg" class="rounded float-left" />
                                <h5>1. Geser halam ke paling akhir untuk menemukan tombol untuk Uji Coba Kualitas Air, atau klik menu "Uji Kualitas Air" yang ada di samping hingga muncul halaman Uji Coba Air</h5>
                                <img src="<?= base_url() ?>/assets/img/c1.jpg" class="rounded float-left" />

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