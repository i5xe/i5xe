<?php
function buka_koneksi() {
    $host="localhost";
    $username="root";
    $password="";
    $databasename="belajar_php";

    $koneksi = mysqli_connect ($host, $username, $password, $databasename);

    if (mysqli_connect_errno()) {
        die ("GAGAL KONEK : " . mysqli_connect_error());
    }
    return $koneksi;
}
?>