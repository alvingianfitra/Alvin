<?php

include 'barangmasuk.blade.php';

if (isset($_POST['input'])){

    $Kode_Barang = $_POST['kode_barang'];
    $Nama_Barang = $_POST['Nama_Barang'];
    $Jenis_Barang = $_POST['jenis_barang'];
    $Jumlah = $_POST['jumlah'];

    $query = "INSERT INTO tb_barangmasuk VALUES ('$Kode_Barang', '$Nama_Barang','$Jenis_Barang','$Jumlah')";
    $result = mysqli_query($link, $query);

    if(!$result){
        die("Query gagal dijalankan: " . mysqli_errno($link) .
            " _ " . mysqli_error($link));
    }
}


header("location:barangmasuk.blade.php");
?>