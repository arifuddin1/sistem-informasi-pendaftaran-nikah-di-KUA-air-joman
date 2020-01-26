<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM tbl_daftar WHERE no_daftar ='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Update Data Daftar Nikah</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        
                        <div class="form-group">
                            <label for="no_daftar" class="col-sm-3 control-label">Nomor Daftar</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_daftar" value="<?=$data['no_daftar']?>"class="form-control" id="inputEmail3" placeholder="Nomor Daftar">
                            </div>
                        </div>
						<div class="form-group">
                            <label for="tgl_nikah" class="col-sm-3 control-label">Tanggal Nikah</label>
                            <div class="col-sm-3">
                                <input type="date" name="tgl_nikah" value="<?=$data['tgl_nikah']?>"class="form-control" id="inputEmail3" placeholder="Tanggal Nikah">
                            </div>
                        </div>
						<div class="form-group">
                            <label for="lokasi_nikah" class="col-sm-3 control-label">Lokasi Nikah</label>
                            <div class="col-sm-9">
                                <input type="text" name="lokasi_nikah" value="<?=$data['lokasi_nikah']?>"class="form-control" id="inputEmail3" placeholder="Lokasi Nikah">
                            </div>
                        </div>
						<div class="form-group">
                            <label for="nik_pengantin" class="col-sm-3 control-label">Nik Pengantin</label>
                            <div class="col-sm-9">
                                <input type="text" name="nik_pengantin" value="<?=$data['nik_pengantin']?>"class="form-control" id="inputEmail3" placeholder="Nik Pengantin">
                            </div>
                        </div>
							<div class="form-group">
                            <label for="nama_pengantin" class="col-sm-3 control-label">Nama Pengantin</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_pengantin" value="<?=$data['nama_pengantin']?>"class="form-control" id="inputEmail3" placeholder="Nama Pengantin" >
                            </div>
                        </div>
						<div class="form-group">
                            <label for="wali_nikah" class="col-sm-3 control-label">Wali Nikah</label>
                            <div class="col-sm-9">
                                <input type="text" name="wali_nikah" value="<?=$data['wali_nikah']?>"class="form-control" id="inputEmail3" placeholder="Wali Nikah" >
                            </div>
                        </div>
                        
                       
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data Daftar Nikah</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=daftar&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Daftar Nikah
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
    $sql="UPDATE tbl_daftar SET no_daftar='$nodaftar',tgl_nikah='$tglnikah',lokasi_nikah='$lokasinikah',nik_pengantin='$nikpengantin',nama_pengantin='$namapengantin',
	wali_nikah='$walinikah' WHERE no_daftar ='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=daftar&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



