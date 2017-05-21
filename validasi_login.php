<?php
session_start();
include 'MySQL.php';
$mysql = new MySQL();
    
if(empty($_POST['username']) || empty($_POST['password'])){
    if(empty($_POST['username']) && empty($_POST['password'])){
            echo 'Input Username And Password';
            header('location: index.php?status=userpassep');
    }else if(empty($_POST['username'])){
        echo 'Input User Name';
        header('location: index.php?status=userrp');
    }else if(empty($_POST['password'])){
        echo 'Input Password';
        header('location: index.php?status=passep');
    }
}else{
    if(isset($_POST['username']) && isset($_POST['password'])){
        $user = $_POST['username'];
        $user_password = $_POST['password'];
        $mysql->connect();
        $mysql->execute("SELECT user_name,nama,password FROM user WHERE user_name='".$user."'");
        while ($row = $mysql->get_array()){
            if(($row['user_name'] == $user) && ($row['password'] == $user_password)){
                $_SESSION['nama_user'] = $row['nama'];
                header('location: menu_user.php');
            }else{
                if($row['user_name'] != $user){
                    header('location: index.php?status=usereq');
                }
                if($row['password'] != $user_password){
                    header('location: index.php?status=passeq');
                }
                if(($row['user_name'] == $user) && ($row['password'] == $user_password)){
                    header('location: index.php?status=nodata');
                }
            }
        }
        if($mysql->get_num_rows() == null){
            header('location: index.php?status=nodata');
        }
    }
}
    
?>