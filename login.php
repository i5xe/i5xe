<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/signin.css">

    <script type="text/javascript" src="../assets/js/jquery-3.4.1.slim.min.js"></script>
    <script type="text/javascript" src="../assets/js/popper.min.js"></script>
    <script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>

</head>
<body class="text-center">
    <form class="form-signin" method="POST">
        <h1 class="h3 mb-3 font-weight-normal"> lets go login</h1>
        <input class="form-control" type="email" name="username" placeholder="Email" autocomplite="off">
        <input class="form-control" type="password" name="password" placeholder ="Password">
        <button class="btn btn-block btn-primary" type="submit">masuk mas</button>

        <?php
        session_start();
        if(isset($_SESSION['username'])) {
            header("location:http://localhost/BOOTSTRAP/BELAJAR_WEB/contents/index.php");
        }
        if(isset($_POST['username']) && isset($_POST['password'])) {
            require 'koneksi.php';
            
            $conn = buka_koneksi();

            $query = "SELECT * FROM admin WHERE username ='$_POST[username]' AND password_hash =MD5('$_POST[password]')";

            $hasil = mysqli_query($conn,$query);

            if($isi= mysqli_fetch_assoc($hasil)) {
                $_SESSION['username'] = $isi['username'];
                header("location:http://localhost/BOOTSTRAP/BELAJAR_WEB/contents/index.php");
            }
            else {
                echo '<div class="alert alert-danger" role="alert">Username dan password tidak valid</div>';
            }

        }
?>
    </form>
</body>
</html>