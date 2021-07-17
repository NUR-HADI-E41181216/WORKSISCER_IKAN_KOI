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
            <br>
            <div class="container-fluid px-4">
                <div>
                    <div class="card mb-4">
                        <div class="card-header">
                            <h3 class="mt-4">Cara Kerja</h3>
                        </div>
                        <div class="card-body" style="margin: 0 auto; text-align:justify">
                            <div class="row">
                                <h5>1. Geser halam ke paling akhir untuk menemukan tombol untuk Uji Coba Kualitas Air, atau klik menu "Uji Kualitas Air" yang ada di samping</h5>
                                <img src="<?= base_url() ?>/assets/img/c1.jpg" class="rounded float-left"/>
                                <h4>Menentukan Fungsi Keanggotaan</h4>
                                <h5>Fungsi Keanggotaan Fungsi keanggotaan yang akan digunakan untuk memberikan nilai pada himpunan fuzzy adalah kurva trapesium untuk input dan kurva segitiga untuk output. Pada studi kali ini, digunakan 3 parameter air untuk di identifikasi, yaitu suhu (temperatur), Tds (jumlah partikel zat terlarut dalam ait), dan do (kadar oksigen dalam air). Parameter air dikembangkan dalam basis sistem fuzzy yang menggunakan FIS sebagai proses untuk menentukan hasil akhir Sedangkan variabel lainnya tidak melakukan proses fuzzifikasi karena bersifat non-fuzzy.
                                </h5>
                                <h4>Pembuatan Aturan Fuzzy</h4>
                                <h5> Aturan yang diterapkan direpresentasikan dalam bentuk kaidah produksi if – then dan menghubungkan antar premisnya dengan operator “and” sedangkan derajat keanggotaan yang dipilih pada setiap parameter merupakan nilai paling besar karena menggunakan operator “or” dan ditanyatakan dalam tabel menggunakan tanda garis miring (/). Komposisi antar rule menggunakan fungsi agregasi dengan mengambil semua nilai dalam rule. Adapun rule yang berlaku untuk kualitas air kolam ikan koi berjumlah 1024 rule, banyaknya rule didapat berdasarkan hasil kombinasi himpunan dan variabel, pembuatan rule sengaja tidak dreduksi agar mendapatkan nilai kontradiksi yang benar benar akurat.
                                </h5>
                                </h5>
                                <h4>Penalaran Fuzzy</h4>
                                <h5> Metode berfikir fuzzy berdasarkan evaluasi setiap aturan sebelum dapat disimpulkan(defuzzyfikasi), pada tahap ini nilai derajat keanggotaan parameter air yang telah dicari akan digunakan sebagai informasi masukan setiap aturan yang telah dibuat, tentunya aturan yang digunakan adalah aturan yang hanya memiliki hubungan antara keanggotaan fuzzy dengan rule. Nantinya proses ini akan menghasilkan nilai keluaran berdasarkan fungsi keanggotaan output setiap aturan.
                                </h5>
                                <h4>Defuzzifikasi</h4>
                                <h5> Proses output ditandai dengan
                                    dilakukannya tahap defuzzifikasi untuk menghasilkan satu nilai crisp dari beberapa output fuzzy hasil evaluasi aturan pada basis pengetahuan. Metode defuzzifikasi yang digunakan pada penelitian ini adalah weighted average method, nantinya hasil ini
                                    akan dijadikan sebagai kriteria penilaian kualitas air.
                                </h5>
                            </div>
                        </div>
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