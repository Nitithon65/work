<?php
session_start();
if(!isset($_SESSION['id'])){
    header(("location:index.php"));
    die();
}

$cate=$_POST['category'];
$top=$_POST['topic'];
$comm=$_POST['comment'];
$user=$_SESSION['user_id'];

$conn=new PDO("mysql:host=localhost;dbname=webboard;
    charset=utf8","root","");
$sql="INSERT INFO post (title,content,post_data,cat_id,user_id)
    VALUES ('$top','$comm',NOW(),'$cate','$user')";
$conn=exec($sql);
$conn=null;
header("location:index.php");
die();
?>