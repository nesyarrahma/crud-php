<?php
include "koneksi.php";

$id = $_GET['id'];

$query = "DELETE FROM product WHERE id='$id'";
$result = mysqli_query($connect,$query);

if($result){
    echo"data berhasil dihapus";
?>
<a href="bootstrapCRUD.php">Lihat Data</a>
<?php
}
else{
    echo"data gagal dihapus".mysqli_error($connect);
}
?>