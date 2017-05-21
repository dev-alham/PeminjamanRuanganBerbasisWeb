<?php
include 'MySQL.php';
$mysql = new MySQL();
$mysql->connect();
if(isset($_POST['ruang'])){
    echo $_POST['ruang'];
}
if(isset($_POST['jurusan'])){
    echo $_POST['jurusan'];
}
echo $_POST['tanggal'];
echo $_POST['jumlah'];
echo $_POST['alasan'];
$mysql->execute("INSERT INTO peminjaman (id_peminjaman,ruangan,jurusan,tanggal_peminjaman,jumlah,alasan) VALUES (1,'".$_POST['ruang']."','".$_POST['jurusan']."','".$_POST['tanggal']."','".$_POST['jumlah']."','".$_POST['alasan']."')");
$mysql->close_connection();
header('location: menu_user.php');
    
?>