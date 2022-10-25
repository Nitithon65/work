<?php
session_start();
if(isset($_SESSION['id'])){
    header("location:index.php");
    die();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify</title>
</head>

    <div align="center">
        <?php
            if($_POST['login'] == "admin" && $_POST['Pwd'] == "ad1234" ){
                        $_SESSION['username']='admin';
                        $_SESSION['role']='a';
                        $_SESSION['id']=session_id();
                        header("location:index.php");
                        die();
            }
             elseif ($_POST['login'] == "member" && $_POST['Pwd'] == "mem1234" ){
                        $_SESSION['username']='member';
                        $_SESSION['role']='m';
                        $_SESSION['id']=session_id();
                        header("location:index.php");
                        die();
            } 
            else{
                $_SESSION['error']='error';
                header("location:login.php");
                die();
            }
        ?>

    </div>