<?php
$SERVER = "localhost";
$USER = "root";
$PASSWORD = "";
$nama_database = "dbrpl2";
$db = mysqli_connect($SERVER, $USER, $PASSWORD, $nama_database);
if(!$db){
    die("Gagal terhubung dengan databse: ".mysqli_connect_error());
}
?>