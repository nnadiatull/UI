<?php
include("config.php");
if($_SERVEER['REQUEST_METHOD'] == "POST"){
    //ambil data dari form
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jenis_kelamin'];
    $no_telp = $_POST['no_telp'];
    $kelas = $_POST['kelas' ];
    //buat query update
    $sql = "UPDATE db_siswa SET nis='$nis', nama='$nama', alamat='$alamat',
    jenis_kelamin='$jk', no_telepon='$no_telp', kelas='$kelas' WHERE nis = $nis";
    $query = mysqli_query($db,$sql) or die(mysqli_error($db));
    //apakah update berhasil
    if ($query){
        //kalau berhasil,alihkan ke halaman index.php  dengan status=sukses
        header('location:index.php?status=sukses');
}else{
     //kalau berhasil,alihkan ke halaman index.php  dengan status=gagal
     header('location:index.php?status=gagal');
}
}else{
    die("akses dilarang...");

}
?>