<?php
//membuat query untuk hapus data
$sql="DELETE FROM tbl_daftar WHERE no_daftar ='".$_GET['id']."'";
$query=mysqli_query($koneksi, $sql) or die ("SQL Hapus Error");
if($query){
    echo"<script> window.location.assign('?page=daftar&actions=tampil');</script>";
}else{
    echo"<script> alert ('Maaf !!! Data Tidak Berhasil Dihapus') window.location.assign('?page=daftar&actions=tampil');</scripr>";
}

