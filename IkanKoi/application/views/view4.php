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
                <h1 class="mt-4">Ikan Koi Shiro</h1>
                <div class="card-body">
                    <div class="form-group">
                        <label for="jenis_ikan">Jenis Ikan :</label>
                        <input type="text" class="form-control" name="jenis_ikan" id="jenis_ikan" value="Ikan Koi Shiro" readonly>
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi :</label>
                        <p class="fa-align-left">
                            <img src="<?= base_url() ?>/assets/img/Shiro1.jpg" class="rounded float-left" alt="Shiro pict" height="200" align="left" />
                            Dalam bahasa Jepang, "Shiro" berarti "Putih".
                            Ini mengacu pada skala reflektif metalik yang terlihat pada koi ini. Kelompok ohgon berisi sejumlah jenis koi lain selain yamabuki, termasuk ohgon biasa dan gin.
                            Oghon "biasa" memiliki warna emas ditambah dengan skala reflektif, sedangkan gin oghon memiliki warna platinum metalik atau keperakan.
                        </p>
                    </div>
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
                                <td>7,5-8,5</td>
                                <td>7-8,7</td>
                                <td>5,5-7 ; 8,7-8,9</td>
                                <td>0-5 ; >9</td>
                            </tr>
                            <tr>
                                <th scope="row">TDS</th>
                                <td>300 - 350</td>
                                <td>0 - 400</td>
                                <td>450 - 500</td>
                                <td>> 550</td>
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