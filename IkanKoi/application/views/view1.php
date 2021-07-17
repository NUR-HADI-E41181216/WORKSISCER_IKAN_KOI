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
                <h1 class="mt-4">Ikan Koi Kohaku</h1>
                <div class="card-body">
                    <div class="form-group">
                        <label for="jenis_ikan">Jenis Ikan :</label>
                        <input type="text" class="form-control" name="jenis_ikan" id="jenis_ikan" value="Ikan Koi Kohaku" readonly>
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi :</label>
                        <p class="fa-align-left">
                            <img src="<?= base_url() ?>/assets/img/Kohaku.jpg" class="rounded float-left" alt="Shiro pict" height="200" align="left" />
                            Varietas koi yang paling representatif dari 80+ varietas adalah Kohaku yang memiliki pola merah pada tubuh putih.
                            Kohaku adalah salah satu perwakilan varietas ikan Koi, dan mereka dicintai oleh orang-orang dari seluruh dunia.
                            Seperti anjing dan kucing, orang menganggap garis keturunan Koi sangat serius, dan nama peternak koi merupakan faktor penting.
                        </p>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">Parameter</th>
                                    <th scope="col">Baik</th>
                                    <th scope="col">Kurang Baik</th>
                                    <th scope="col">Buruk</th>
                                    <th scope="col">Sangat Buruk</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">pH</th>
                                    <td>7,5 - 8,5</td>
                                    <td>7,0 - 8,7</td>
                                    <td>55,-7;8,7-8,9</td>
                                    <td>0-5;>9</td>
                                </tr>
                                <tr>
                                    <th scope="row">TDS</th>
                                    <td>75 - 100</td>
                                    <td>0 - 150</td>
                                    <td>200 - 300</td>
                                    <td>> 400</td>
                                </tr>
                                <tr>
                                    <th scope="row">DO</th>
                                    <td>> 7</td>
                                    <td>5 - 6</td>
                                    <td>3 - 4</td>
                                    <td>> 2</td>
                                </tr>
                            </tbody>
                        </table>
                        <center>
                            <button onclick="goBack()" class="btn btn-dark">Kembali</button>
                        </center>
                        <script>
                            function goBack() {
                                window.history.back();
                            }
                        </script>
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