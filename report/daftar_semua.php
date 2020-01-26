<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Semua Data Nikah </title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>  
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        ?>   

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2>Sistem Informasi Manajemen Nikah Kecamatan Air Joman </h2>
                        <h4>Jalan Besar Protokol, Kel. Binjai Serbangan<br>Kecamatan Air Joman, Kabupaten Asahan, Sumatera Utara, 21263</h4>
                        <hr>
                        <h3>SELURUH DATA NIKAH</h3>
                        <table class="table table-bordered table-striped table-hover"> 
                        <tbody>
                                <thead>
								 <tr>
                                <th>No.</th><th>No. Daftar</th><th>Tanggal Nikah</th><th>Lokasi Nikah</th><th>NIK Pengantin</th><th>Nama Pengantin</th><th>Wali Nikah</th>
                            </tr>
								</thead>
							<tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM tbl_daftar";
                            $query = mysqli_query($koneksi, $sql) or die("SQL Anda Salah");
                            //Baca hasil query dari databse, gunakan perulangan untuk 
                            //Menampilkan data lebh dari satu. disini akan digunakan
                            //while dan fungdi mysqli_fecth_array
                            //Membuat variabel untuk menampilkan nomor urut
                            $nomor = 0;
                            //Melakukan perulangan u/menampilkan data
                            while ($data = mysqli_fetch_array($query)) {
                                $nomor++; //Penambahan satu untuk nilai var nomor
                                ?>
                                <tr>
                                    <td><?= $nomor ?></td>
									<td><?= $data['no_daftar'] ?></td>
                                    <td><?= $data['tgl_nikah'] ?></td>
                                    <td><?= $data['lokasi_nikah'] ?></td>
                                    <td><?= $data['nik_pengantin'] ?></td>
                                    <td><?= $data['nama_pengantin'] ?></td>
									 <td><?= $data['wali_nikah'] ?></td>
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
							</tbody>
                        </tbody>
                            <tfoot> 
                                <tr>
                                    <td colspan="8" class="text-right">
                                        Air Joman  <?= date("d-m-Y") ?>
                                        <br><br><br><br>
                                        <u>Junaidi,S.Ag<strong></u><br>
                                        NIP.197005051998031005
									</td>
								</tr>
							</tfoot> 
                        </table>
                    </div>
                </div>
            </div>
    </body>
</html>