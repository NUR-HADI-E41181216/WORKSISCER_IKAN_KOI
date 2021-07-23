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
                <br>
                <div class="row">
                    <div class="card text-center">
                        <div class="card-header">
                            <h3>Detail Hasil Identifikasi Kualitas Air Kolam Ikan Koi</h3>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Grade : <?php echo $uji['hasil'] ?></h4>
                            <h4 class="card-title">Score : <?php echo $uji['score'] ?></h4>

                            <br>
                            <!-- <input type="text" value=""> -->
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>Data</th>
                                        <th>Nilai</th>
                                        <th>η Baik</th>
                                        <th>η Sedang</th>
                                        <th>η Buruk</th>
                                        <th>η Sangat Buruk</th>
                                    </tr>
                                    <tr>
                                        <th>Suhu</th>
                                        <td><?php echo $uji['suhu'] ?></td>
                                        <td><?php echo $suhu['baik'] ?></td>
                                        <td><?php echo $suhu['sedang'] ?></td>
                                        <td><?php echo $suhu['buruk'] ?></td>
                                        <td><?php echo $suhu['sangat_buruk'] ?></td>
                                    </tr>
                                    <tr>
                                        <th>TDS</th>
                                        <td><?php echo $uji['tds'] ?></td>
                                        <td><?php echo $tds['baik'] ?></td>
                                        <td><?php echo $tds['sedang'] ?></td>
                                        <td><?php echo $tds['buruk'] ?></td>
                                        <td><?php echo $tds['sangat_buruk'] ?></td>
                                    </tr>
                                    <tr>
                                        <th>Do</th>
                                        <td><?php echo $uji['do'] ?></td>
                                        <td><?php echo $do['baik'] ?></td>
                                        <td><?php echo $do['sedang'] ?></td>
                                        <td><?php echo $do['buruk'] ?></td>
                                        <td><?php echo $do['sangat_buruk'] ?></td>
                                    </tr>
                                </tbody>
                            </table>
                            <br>
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>Ikan Koi Kohaku</th>
                                        <th>Ikan Koi Sanke</th>
                                        <th>Ikan Koi Sowa</th>
                                        <th>Ikan Koi Shiro</th>
                                        <th>Ikan Koi Ogan</th>
                                        <th>Ikan Koi Yamabuki</th>
                                    </tr>
                                    <tr>
                                        <td><?php echo $hasil['kohaku'] ?></td>
                                        <td><?php echo $hasil['sanke'] ?></td>
                                        <td><?php echo $hasil['sowa'] ?></td>
                                        <td><?php echo $hasil['shiro'] ?></td>
                                        <td><?php echo $hasil['ogan'] ?></td>
                                        <td><?php echo $hasil['yamabuki'] ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer text-muted">
                            <?php echo $uji['tanggal'] ?>
                        </div>
                        <br>
                        <div>
                            <a class="btn btn-secondary" href="<?php echo site_url('history') ?>">
                                Kembali
                            </a>
                        </div>

                    </div>
                    <br>
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