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
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Fuzzy</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Fuzzy Tsukimoto</li>
                        </ol>
                        <div class="row">
                            <p>Metode Fuzzy Tsukamoto adalah metode yang memiliki toleransi pada data dan sangat fleksibel.
                             Kelebihan dari metode Tsukamoto yaitu bersifat intuitif dan dapat memberikan tanggapan berdasarkan informasi yang bersifat kualitatif, 
                             tidak akurat, dan ambigu (Thamrin, 2012). Pada metode Tsukamoto, setiap Rule direpresentasikan dengan suatu himpunan Fuzzy dengan fungsi
                             keanggotaan yang monoton isebut dengan fuzzifikasi. Sebagai hasilnya, keluaran hasil dari tiap-tiap aturan berupa nilai tegas (crisp) 
                             berdasarkan α-predikat atau nilai minimum dari tiap Rule dan nilai z. Hasil akhirnya diperoleh dengan melakukan defuzzifikasi rata-rata berbobot (Pujiyanta, 2012)</p>
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
