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
                <h1 class="mt-4">Dashboard</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">jenis Ikan</li>
                    <input type="hidden" value="<?php echo $this->session->userdata("id_user") ?>">
                </ol>
                <!-- bagian ini berisi tombol yang mengarahkan pengguna menuju spesifikasi masing masing jenis ikan koi -->
                <center>
                    <div class="row">
                        <div class="col-xl-4 col-sm-12 mb-3">
                            <div class="card text-white ">
                                <a href="<?= base_url() ?>index/view1" class="btn btn-warning text-white d-flex align-items-center justify-content-between">
                                    <h5>Kohaku</h5>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-sm-12 mb-3">
                            <div class="card text-white">
                                <a href="<?= base_url() ?>index/view2" class="btn btn-success text-white d-flex align-items-center justify-content-between">
                                    <h5>Sanke</h5>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-sm-12 mb-3">
                            <div class="card text-white">
                                <a href="<?= base_url() ?>index/view3" class="btn btn-danger text-white d-flex align-items-center justify-content-between">
                                    <h5>Sowa</h5>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-sm-12 mb-3">
                            <div class="card text-white">
                                <a href="<?= base_url() ?>index/view4" class="btn btn-secondary text-white d-flex align-items-center justify-content-between">
                                    <h5>Shiro</h5>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-sm-12 mb-3">
                            <div class="card text-white">
                                <a href="<?= base_url() ?>index/view5" class="btn btn-info text-white d-flex align-items-center justify-content-between">
                                    <h5>Ogan</h5>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-sm-12 mb-3">
                            <div class="card text-white">
                                <a href="<?= base_url() ?>index/view6" class="btn btn-dark text-white d-flex align-items-center justify-content-between">
                                    <h5>Yamabuki</h5>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <hr />
                </center>
                <!-- bagian ini berisi fungsi keanggotaan fuzzy parameter suhu, tds, do dan keanggotaan baik, sedang, buruk, sangat buruk -->
                <div>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-chart-area me-1"></i>
                            Fungsi Keanggotaan Suhu
                        </div>
                        <div class="card-body" id="suhu" style="margin: 0 auto"></div>

                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6">
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-chart-area me-1"></i>
                                Fungsi Keanggotaan TDS
                            </div>
                            <div class="card-body" id="tds"></div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-chart-bar me-1"></i>
                                Fungsi Keanggotaan DO
                            </div>
                            <div class="card-body" id="dos"></div>
                        </div>
                    </div>
                </div>
                <hr />
                <!-- bagian ini berisi card penjelasan tentang 3 parameter -->
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Indikator Kualitas Air</li>
                </ol>
                <div class="row">
                    <div class="col-xl-4 col-md-6">
                        <div class="card bg-primary text-white mb-4">
                            <div class="card-body">
                                Keasaman (pH)
                                <p>
                                    keasaman (pH) dapat dilakukan dengan pH meter digital.
                                    Cara pengukurannya adalah dengan memasukkan ujung bawah
                                    pH meter ke dalam air tanpa menyentuh dasarnya.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="card bg-primary text-white mb-4">
                            <div class="card-body">
                                Total Dissolved Solid (TDS)
                                <p>
                                    TDS adalah istilah untuk menandakan jumlah padatan terlarut dalam
                                    air. TDS digambarkan dengan jumlah zat terlarut dalam Part Per Million
                                    (PPM) atau sama dengan mg/L
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="card bg-primary text-white mb-4">
                            <div class="card-body">
                                Oksigen Terlarut (DO/Dissolved Oxygen)
                                <p>
                                    Oksigen terlarut(Dissolved Oxygen/DO) adalah salah satu parameter penting dalam
                                    analisis kualitas air yang diukur dalam bentuk konsentrasi jumlah oksigen yang tersedia
                                    dalam air
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- bagian ini berisi tombol yang mengarahkan ke form uji coba -->
                <center>
                    <a href="<?= base_url() ?>uji" class="btn btn-success mb-3 col-md-2">
                        UJI COBA
                        <div class="small text-white">SEKARANG!</div>
                    </a>
                </center>
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