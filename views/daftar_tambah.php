<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Pendaftaran Nikah</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                        </div>
						 <div class="form-group">
                            <label for="no_daftar" class="col-sm-3 control-label">Nomor Daftar</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_daftar" class="form-control" id="inputEmail3" placeholder="Inputkan Nomor Daftar" required>
                            </div>
                        </div>
						  <div class="form-group">
                            <label for="tgl_nikah" class="col-sm-3 control-label">Tanggal Nikah</label>
                            <div class="col-sm-3">
                                <input type="date" name="tgl_nikah" class="form-control" id="inputEmail3" placeholder="Inputkan Tanggal Daftar" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="lokasi_nikah" class="col-sm-3 control-label">Lokasi Nikah</label>
                            <div class="col-sm-9">
                                <input type="text" name="lokasi_nikah" class="form-control" id="inputEmail3" placeholder="Inputkan Lokasi Nikah" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="nik_pengantin" class="col-sm-3 control-label">NIK Pengantin</label>
                            <div class="col-sm-9">
                                <input type="text" name="nik_pengantin" class="form-control" id="inputEmail3" placeholder="Inputkan NIK Pengantin" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nama_pengantin" class="col-sm-3 control-label">Nama Pengantin</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_pengantin"class="form-control" id="inputEmail3" placeholder="Inputkan Nama Pengantin" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="wali_nikah" class="col-sm-3 control-label">Wali Nikah</label>
                            <div class="col-sm-9">
                                <input type="text" name="wali_nikah" class="form-control" id="inputEmail3" placeholder="Inputkan Wali Nikah" required>
                            </div>
                        </div>
						
                     

 

                       
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Daftar</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=daftar&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Daftar Nikah
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
  $nodaftar=$_POST['no_daftar'];
	$tglnikah=$_POST['tgl_nikah'];
	$lokasinikah=$_POST['lokasi_nikah'];
	$nikpengantin=$_POST['nik_pengantin'];
  $namapengantin=$_POST['nama_pengantin'];
	$walinikah=$_POST['wali_nikah'];
    //buat sql
    $sql="INSERT INTO tbl_daftar (no_daftar,tgl_nikah,lokasi_nikah,nik_pengantin,nama_pengantin,wali_nikah) VALUES ('$nodaftar','$tglnikah','$lokasinikah','$nikpengantin','$namapengantin','$walinikah')";
    $query=mysqli_query($koneksi, $sql) or die ("SQL Simpan Daftar Nikah Error");
    if ($query){
        echo "<script>window.location.assign('?page=daftar&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
