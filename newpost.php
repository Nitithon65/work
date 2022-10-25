<?php
    session_start();
    if(!isset($_SESSION["id"])){
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
    <title>newpost</title>
</head>
<body>
    <h1><center>Webboard KakKak</center></h1>
    <hr>
    
    <?php
        $us = $_SESSION['username'];
        echo "ผู้ใช้ : $us <br>"; 
    ?>

    <table>
        <form action="index.php" method="POST"></form>    
        <tr><td> หมวดหมู่ : </td>
        <td><select name="subject">
            <option value="all">--ทั้งหมด--</option>
            <option value="general">เรื่องทั่วไป</option>
            <option value="study">เรื่องเรียน</option>
        </select></td> </tr>   
        <tr><td>หัวข้อ :</td><td><textarea name="" id="" cols="40" rows="1"></textarea></td></tr> 
        <tr><td>เนื้อหา :</td><td><textarea name="" id="" cols="40" rows="3"></textarea></td></tr>
        <tr><td>       </td><td><input type="submit" value="บันทึกข้อความ"></td></tr>
        </form>
    </table>
</body>
</html>