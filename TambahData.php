<?php
include 'KoneksiDatabase.php';

if(isset($_POST['submit'])){
    $nama = $_POST['nama'];
    $email = $_POST['email'];

    $query = "INSERT INTO users (nama, email) VALUES ('$nama', '$email')";
    $hasil = mysqli_query($koneksi, $query);

    if($hasil){
        echo "Data berhasil ditambahkan!";
    } else {
        echo "Gagal menambah data.";
    }
}
?>
