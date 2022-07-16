<?php
    $koneksi = mysqli_connect('localhost', 'root', '', 'login_pengguna');
    if(!$koneksi){
        echo "Koneksi Gagal";
    }
?>