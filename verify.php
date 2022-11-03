<?php
    session_start();
    if(isset($_SESSION['id'])){
        header("Location: index.php");
    }
?>
<?php
    $user = $_POST['user'];
    $password = $_POST['pass'];

    $conn=new PDO("mysql:host=localhost;dbname=webboard;charset=utf8","root","");
    $sql="SELECT * FROM user where login='$user' and password=sha1('$password')";
    $result=$conn->query($sql);
    if($result->rowCount()==1){
        $data=$result->fetch(PDO::FETCH_ASSOC);
        $_SESSION["username"]=$data["login"];
        $_SESSION["role"]=$data["role"];
        $_SESSION["user_id"]=$data["id"];
        $_SESSION["id"]=session_id();
        header("Location:index.php");
        die();
    }else{
        $_SESSION['error']='error';
        header("Location:login.php");
        die();
    }
    $conn=null;
?>
</body>
</html>


