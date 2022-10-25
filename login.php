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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>login</title>
</head>
<body>
    <div class="container">
    <h1 style="text-align: center;">Webboard KakKak</h1>
    <?php include "nav.php"; ?>
    <br>
    <div class="row">
      <div class="col-md-4"></div>
      <div class="col-md-4">
        <?php
        if(isset($_SESSION['error'])){
          echo "<div class='alert alert-danger'>ชื่อบัญชีหรือรหัสผ่านไม่ถูกต้อง</div>";
        }  
        unset($_SESSION['error']);
        ?>
       <div class="card text-dark bg-light">
        <div class="card-header">เข้าสู่ระบบ</div>
        <div class="card-body">
          <form action="verify.php" method="POST">
            <div class="form-group mb-3">
            <lable for="login">Login:</label>
            <input type="text" name="login" class="form-control mt-2">
        </div>
        <div class="form-group mb-3">
            <lable for="Pwd">Password:</label>
            <input type="text" name="Pwd" class="form-control mt-2">
        </div>
        <center><button type="submit" class="btn btn-secondary btn-sm">Login</button></center>
        </form>
      </div>
    </div>
    <div class="col-md-4"></div>
    <div align="center">
        ถ้ายังไม่ได้เป็นสมาชิก <a href="register.php">กรุณาสมัครสมาชิก</a>
    </div>
    </div>
</body>
</html>