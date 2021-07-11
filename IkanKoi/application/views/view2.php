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
                <h1 class="mt-4">Ikan Koi Sanke</h1>
                <div class="card-body">
                    <div class="form-group">
                        <label for="jenis_ikan">Jenis Ikan :</label>
                        <input type="text" class="form-control" name="jenis_ikan" id="jenis_ikan" value="Ikan Koi Sanke" readonly>
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi :</label>
                        <p class="fa-align-left">
                            <img src="<?= base_url() ?>/assets/img/Sanke.jpg" class="rounded float-left" alt="Shiro pict" height="200" align="left" />
                            Taisho Sanshoku, juga disebut Taisho Sanke dan Sanke, dikembangkan dari Kohaku sekitar 80 tahun yang lalu pada tahun 1918 di era Taisho.
                            Varietas Sanshoku akan memiliki 3 warna berbeda: putih, merah, dan hitam. Ada dua varietas " Showa Sanshoku " dan "Taisho Sanshoku". Nama "Sanshoku" menandakan 3 warna dalam bahasa Jepang, keduanya Sanshoku akan menjadi Koi tiga warna. Mereka perlu dibedakan karena 2 varietas ini memiliki pola dan latar belakang yang berbeda.
                            Umumnya, Sanke tidak memiliki warna hitam di kepalanya.
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
                                <td>6,8-7,4</td>
                                <td>6,5-7,5</td>
                                <td>5,5-6,5 ; 7,5-8</td>
                                <td>0-5 ; >8,5</td>
                            </tr>
                            <tr>
                                <th scope="row">TDS</th>
                                <td>250 - 300</td>
                                <td>0 - 350</td>
                                <td>400 - 450</td>
                                <td>> 500</td>
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