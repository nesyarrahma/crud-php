<?php
include "koneksi.php";

$id = $_GET['id'];
$nama = $_GET['name'];
$harga = $_GET['price'];

$query = "UPDATE product SET product_name='$nama',harga='$harga'
          WHERE id='$id'";
$result = mysqli_query($connect,$query);

if($result){
    header("Location: bootstrapCRUD.php");
exit;
}
else{
    echo"gagal update data".mysqli_error($connect);
}
?>