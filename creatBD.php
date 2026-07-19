<?php
$hostname ="localhost";
$username ="root";
$password ="";

$connect = mysqli_connect($hostname,$username,$password);

if($connect){
    echo "koneksi ke MySQL berhasil <br>";
}
else {
    echo "Koneks ke MySQL gagal <br>". mysqli_connect_error();
}

$sql = "CREATE DATABASE prakwebdb";
if (mysqli_query($connect,$sql)){
    echo "Database berhasil dibuat";
}
else{
    echo "Database gagal di buat <br>". mysqli_error($connect);
}
mysqli_close($connect);
?>

