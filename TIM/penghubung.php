<?php
    include 'koneksi.php';

    if(isset($_POST['input'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $data = mysqli_query($koneksi, "SELECT * FROM login WHERE username='$username' AND password='$password'");
        
        $cek = mysqli_num_rows($data);

        if($cek==1){
            $_SESSION['userweb']=$username;
            header("location:index.html");
            exit;
        }else{
            echo"Login Gagal";
        }
    }
?>