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
                        <!-- <form>
                            <div class="row mb-4 mt-5">
                                <div class="col">
                                    <input type="number" class="form-control" placeholder="Suhu">
                                </div>
                                <div class="col">
                                    <input type="number" class="form-control" placeholder="TDS">
                                </div>
                                <div class="col">
                                    <input type="number" class="form-control" placeholder="d.o">
                                </div>
                            </div>
                        </form>
                        <div class="col-md-5"> -->
                        <!-- tombol simpan -->
                        <!-- <button type="submit" value="upload" name="tambah" class="btn btn-primary center-block">Tambah Data</button> -->
                        <fieldset>                
                <div class="form-group row">
                    <label class="col-md-4 control-label text-right" for="jarak">Jarak Kos</label>
                    <div class="col-md-4">
                        <input id="jarak" name="jarak" type="number" placeholder="Jarak" class="form-control input-md">
                    </div>
                    <label class="control-label text-left" for="km">km</label>
                </div>

                <div class="form-group row">
                    <label class="col-md-4 control-label text-right" for="ukuran">Ukuran Kamar</label>
                    <div class="col-md-4">
                        <input id="ukuran" name="ukuran" type="number" placeholder="Ukuran kamar" class="form-control input-md">
                    </div>
                    <label class="control-label text-left" for="m">m<sup>2</sup></label>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label text-right" for="fasilitasKos">Fasilitas</label>
                    <div class="col-md-4">
                        <div class="checkbox">
                            <label for="fasilitas-0">
                            <input type="checkbox" name="fasilitas" id="fasilitas-0" value="8">
                            Tempat Tidur
                            </label>
                        </div>
                        <div class="checkbox">
                            <label for="fasilitas-1">
                            <input type="checkbox" name="fasilitas" id="fasilitas-1" value="8">
                            Almari
                            </label>
                        </div>
                        <div class="checkbox">
                            <label for="fasilitas-2">
                            <input type="checkbox" name="fasilitas" id="fasilitas-2" value="8">
                            Meja
                            </label>
                        </div>
                        <div class="checkbox">
                            <label for="fasilitas-3">
                            <input type="checkbox" name="fasilitas" id="fasilitas-3" value="10">
                            Kamar Mandi Dalam
                            </label>
                        </div>
                        <div class="checkbox">
                            <label for="fasilitas-4">
                            <input type="checkbox" name="fasilitas" id="fasilitas-4" value="10">
                            Dapur
                            </label>
                        </div>
                        <div class="checkbox">
                            <label for="fasilitas-5">
                            <input type="checkbox" name="fasilitas" id="fasilitas-5" value="11">
                            Wi-Fi
                            </label>
                        </div>
                        <div class="checkbox">
                            <label for="fasilitas-6">
                            <input type="checkbox" name="fasilitas" id="fasilitas-6" value="11">
                            TV
                            </label>
                        </div>
                        <div class="checkbox">
                            <label for="fasilitas-7">
                            <input type="checkbox" name="fasilitas" id="fasilitas-7" value="12">
                            AC
                            </label>
                        </div>
                        <div class="checkbox">
                            <label for="fasilitas-8">
                            <input type="checkbox" name="fasilitas" id="fasilitas-8" value="11">
                            Meja dan Kursi Belajar
                            </label>
                        </div>
                        <div class="checkbox">
                            <label for="fasilitas-9">
                            <input type="checkbox" name="fasilitas" id="fasilitas-9" value="11">
                            Laundry
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 text-center">
                    <button type="submit" id="proses" class="proses">PROSES</button>
                </div>

                <div class="col-lg-6 text-center">
                    <h3 style="display: inline">Hasil Prediksi</h3>
                    <input type="text" name="hasil" id="hasil" class="hasil" style=" border:none" />
                    
                </div>
                 <!-- <div >
                    <table id="z-result" style="align: center">
                        
                    </table>  
                </div> -->
                <a href = 'javascript:prediksiHarga()'>Click Here</a> to execute the javascript function.
            </fieldset>
                        </div>
                    </div>
                </main>
                <!-- <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Uji coba kualitas air</div>
                        </div>
                    </div>
                </footer> -->
            </div>
        </div>
        <!-- JS MEMANGGIL JS YANG ADA DI includes/js.php -->
        <?php $this->load->view("includes/js.php") ?>
    </body>
</html>
