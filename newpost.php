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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>newpost</title>
</head>
<body>
<div class="container">
        <br>
        <h1 style="text-align:center;">Webboard KakKak</h1> 
    <?php include "nav.php" ?>
    <br>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
<div class="card text-dark bg-white border-info">
    <div class="card-header bg-info text-white">ตั้งกระทู้ใหม่</div>
    <div class="card-body">
        <form action="newpost_save.php" method="post">
            <div class="row mb-3">
                <label class="col-lg-3 col-form-label">หมวดหมู่ :</label>
                <div class="col-lg-9">
                    <select name="category" class="form-select">
                        <option value="general">เรื่องทั่วไป</option>
                        <option value="general">เรื่องเรียน</option>
                        <?php
                            $conn=new PDO("mysql:host=localhost:dbname=webboard;charset=utf8","root","");
                            $sql="SELECT *FROM category";
                            foreach($conn->query($sql) as $row){
                                echo "<option value=$row[id]>$row[name]</option>";
                            }
                            $conn=null;
                        ?>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-lg-3 col-form-label">หัวข้อ :</label>
                <div class="col-md-9">
                    <input type="text" name="topic" class="form-control" required> 
                </div>
                </div>
            <div class="row mb-3">
                <label class="col-lg-3 col-form-label">เนื้อหา:</label>
                <div class="col-md-9">
                    <textarea class="form-control" name="comment" rows="8" required></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <center>
                    <button type="submit" class="btn btn-info btn-sm text-white">
                        <i class="bi bi-caret-right-square me-1"></i>บันทึกข้อความ</button>
                    </center>
                </div>
            </div>
        </form>

    </div>

</div>

    </div>
</body>
</html>