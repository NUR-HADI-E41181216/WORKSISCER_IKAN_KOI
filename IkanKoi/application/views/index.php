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
                </ol>
                <center>
                    <div class="row">
                        <div class="col-xl-4 col-sm-12 mb-3">
                            <div class="card text-white">
                                <button class="btn btn-warning d-flex align-items-center justify-content-between" data-toggle="modal" data-target="#view1">
                                    <a class="small text-white stretched-link" style="text-decoration:none">
                                        <h5>Kohaku</h5>
                                    </a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </button>
                            </div>
                        </div>
                        <div class="col-xl-4 col-sm-12 mb-3">
                            <div class="card text-white">
                                <button class="btn btn-success d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" style="text-decoration:none">
                                        <h5>Sanke</h5>
                                    </a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </button>
                            </div>
                        </div>
                        <div class="col-xl-4 col-sm-12 mb-3">
                            <div class="card text-white">
                                <button class="btn btn-danger d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" style="text-decoration:none">
                                        <h5>Sowa</h5>
                                    </a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </button>
                            </div>
                        </div>
                        <div class="col-xl-4 col-sm-12 mb-3">
                            <div class="card text-white">
                                <button class="btn btn-secondary d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" style="text-decoration:none">
                                        <h5>Shiro</h5>
                                    </a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </button>
                            </div>
                        </div>
                        <div class="col-xl-4 col-sm-12 mb-3">
                            <div class="card text-white">
                                <button class="btn btn-info d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" style="text-decoration:none">
                                        <h5>Ogan</h5>
                                    </a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </button>
                            </div>
                        </div>
                        <div class="col-xl-4 col-sm-12 mb-3">
                            <div class="card text-white">
                                <button class="btn btn-dark d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" style="text-decoration:none">
                                        <h5>Yamabuki</h5>
                                    </a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </button>
                            </div>
                        </div>
                    </div>
                    <hr />
                </center>
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

                <center>
                    <button type="button" class="btn btn-success mb-3">UJI COBA SEKARANG</button>
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

    <form action="<?= base_url() ?>index/view1" method="post">
        <div class="modal fade" id="view1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add New Product</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <div class="form-group">
                            <label>Product Name</label>
                            <input type="text" class="form-control" name="product_name" placeholder="Product Name">
                        </div>

                        <div class="form-group">
                            <label>Price</label>
                            <input type="text" class="form-control" name="product_price" placeholder="Product Price">
                        </div>

                        <div class="form-group">
                            <label>Category</label>
                            <select name="product_category" class="form-control">
                                <option value="">-Select-</option>
                                <?php foreach ($category as $row) : ?>
                                    <option value="<?= $row->category_id; ?>"><?= $row->category_name; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>

</html>