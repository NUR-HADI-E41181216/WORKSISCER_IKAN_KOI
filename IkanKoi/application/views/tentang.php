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
                            <h3 class="mt-4">Pengertian</h3>
                        </div>
                        <div class="card-body" style="margin: 0 auto; text-align:justify">
                            <h5>Algoritma Fuzzy Tsukamoto adalah metode yang memiliki toleransi pada data dan sangat fleksibel.
                                Kelebihan dari metode Tsukamoto yaitu bersifat intuitif dan dapat memberikan tanggapan kerdasarkan informasi yang bersifat kualitatif, tidak akurat, dan ambigu (Thamrin, 2012). Pada metode Tsukamoto, setiap Rule direpresentasikan dengan suatu himpunan Fuzzy dengan fungsi keanggotaan yang monoton isebut dengan fuzzifikasi. Sebagai hasilnya, keluaran hasil dari tiap-tiap aturan berupa nilai tegas (crisp) berdasarkan α-predikat atau nilai minimum dari tiap Rule dan nilai z. Hasil akhirnya diperoleh dengan melakukan defuzzifikasi rata-rata berbobot (Pujiyanta, 2012)</h5>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="card mb-4">
                        <div class="card-header">
                            <h3 class="mt-4">Tahapan</h3>
                        </div>
                        <div class="card-body" style="margin: 0 auto; text-align:justify">
                            <div class="row">
                                <h4>Fuzifikasi </h4>
                                <h5>Fuzzifikasi dilakukan untuk membagi variabel menjadi beberapa himpunan fuzzy yang nantinya akan digunakan dalam pembuatan aturan. Pada studi kali ini, digunakan 3 parameter air untuk di identifikasi, yaitu suhu (temperatur), Tds (jumlah partikel zat terlarut dalam ait), dan do (kadar oksigen dalam air). Fuzzifikasi dilakukan untuk membagi variabel menjadi beberapa himpunan fuzzy yang nantinya akan digunakan dalam pembuatan aturan. Parameter air dikembangkan dalam basis sistem fuzzy yang menggunakan FIS sebagai proses untuk menentukan hasil akhir. Sedangkan variabel lainnya tidak melakukan proses fuzzifikasi karena bersifat non-fuzzy.
                                </h5>
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