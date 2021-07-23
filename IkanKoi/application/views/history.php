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
                <h1 class="mt-4">History</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">history</li>
                </ol>
                <div class="row">
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Data History Uji Coba
                        </div>
                        <input type="text" id="idu" value="<?php echo $this->session->userdata("id_user") ?>">
                        <div class="card-body">

                            <!-- tabel ini digunakan untuk menampilkan data uji coba dari database -->
                            <table id="datatablesSimple" class="table table-striped">
                                <thead>
                                    <tr>
                                        <!-- <th scope="col">No</th> -->
                                        <th scope="col">Tanggal</th>
                                        <th scope="col">Suhu</th>
                                        <th scope="col">TDS</th>
                                        <th scope="col">Do</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1;
                                    foreach ($uji as $detUji) :
                                    ?>
                                        <?php
                                        if ($detUji->id_user == $this->session->userdata("id_user")) :
                                        ?>
                                            <tr>
                                                <!-- <th scope="row"><?= $i ?></th> -->
                                                <td><?= $detUji->tanggal ?></td>
                                                <td><?= $detUji->suhu ?></td>
                                                <td><?= $detUji->tds ?></td>
                                                <td><?= $detUji->do ?></td>
                                                <td><a href="<?= base_url() ?>history/detail/<?= $detUji->id_uji_coba ?>">Lihat Detail</a></td>
                                            </tr>
                                        <?php
                                        endif;
                                        ?>
                                    <?php $i++;
                                    endforeach; ?>
                                </tbody>
                            </table>

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