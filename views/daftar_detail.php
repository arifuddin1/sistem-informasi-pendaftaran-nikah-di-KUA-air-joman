<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Informasi Detail Daftar Nikah</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail daftar nikah-->
                    <?php
                    $sql = "SELECT *FROM tbl_daftar WHERE no_daftar ='" . $_GET ['id'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>   

                    <!--dalam tabel--->
                    <table class="table table-bordered table-striped table-hover"> 
                        <tr>
                            <td width="200">No Daftar</td> <td><?= $data['no_daftar'] ?></td>
                        </tr>
                        <tr>
                            <td>Tanggal Nikah</td> <td><?= $data['tgl_nikah'] ?></td>
                        </tr>
                        <tr>
                            <td>Lokasi Nikah</td> <td><?= $data['lokasi_nikah'] ?></td>
                        </tr>
						<tr>
                            <td>Nik Pengantin</td> <td><?= $data['nik_pengantin'] ?></td>
                        </tr>
                        <tr>
                            <td>Nama Pengantin</td> <td><?= $data['nama_pengantin'] ?></td>
                        </tr>
                        <tr>
                            <td>Wali Nikah</td> <td><?= $data['wali_nikah'] ?></td>
                        </tr>
                    </table>
				
                </div> <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=daftar&actions=tampil" class="btn btn-success btn-sm">
                        Kembali ke Data Daftar Nikah </a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>

