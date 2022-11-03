<?php
session_start();
if (isset($_SESSION['id'])) {
    header("Location: index.php");
    die();
}

$login = $_POST['login'];
$pass = $_POST['pass'];
$name = $_POST['name'];
$gender = $_POST['gender'];
$email = $_POST['email'];

include "PDO.php";
$pass = sha1($pass);
$sql = "SELECT * FROM user where login='$login'";
$result = $conn->query($sql);
if ($result->rowCount() == 1) {
    $_SESSION['add_login'] = 'error';
} else {
    $sql = "INSERT INTO user (login, password, name, gender, email, role) 
        VALUES ('$login','$pass','$name','$gender','$email', 'm')";
    $conn->exec($sql);
    $_SESSION['add_login']="success";
    
}
    $conn=null;
    header("Location: register.php");
    die();
?>