<?php
include 'MySQL.php';
$mysql = new MySQL();

$_POST['nama'];
$_POST['umur'];
$_POST['username'];
$_POST['password'];
$_POST['email'];

if(empty($_POST['nama'])){
    
}else{
    $mysql->connect();
    $mysql->execute("INSERT INTO user (id_user,nama,umur,email,user_name,password) VALUES ('1','".$_POST['nama']."','".$_POST['umur']."','".$_POST['email']."','".$_POST['username']."','".$_POST['password']."')");
    $mysql->close_connection();
    header('location: index.php?status=done');
}
?>