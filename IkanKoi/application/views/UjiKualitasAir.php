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
                        <h1 class="mt-4">Uji Kualitas Air</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Uji Kualitas Air</li>
                        </ol>
                        <div class="row">
                            
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
