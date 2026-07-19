<html>
        <head>
                <title>Data Product</title>
                <link rel="stylesheet" href="bootstrap-5.3.8-dist/css/bootstrap.min.css">
        </head>
        <body>
        <!--HEADER-->
        <header class="bg-primary py-4 mb-4">
                <div class="container">
                <h1 class="display-5 text-white">Data Product</h1>
                </div>
        </header>

        <div class="container">

        <!--TOMBOL TAMBAH-->
        <a href="insertForm.html" class="btn btn-success mb-3">
                + Tambah Data
        </a>

        <!--TABEL-->
        <table class="table table-bordered table-striped">
                <thead class="table-dark">
                <tr>
                <th>Id</th>
                <th>Nama Produk</th>
                <th>Harga</th>
                <th>Aksi</th>
                </tr>
                </thead>

                <tbody>
                <?php
                include "koneksi.php";

                $query = "SELECT * FROM product";
                $result = mysqli_query ($connect, $query);

                if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_array($result)){
                ?>

                <tr>
                     <td> <?= $row["id"] ?></td>
                     <td> <?= $row["product_name"] ?></td>
                     <td> <?= $row["harga"] ?></td>
                     <td>
                        <!--EDIT-->
                        <a href="editForm.php?id=<?= $row['id']; ?>"
                           class="btn btn-warning btn-sm">
                           Edit
                        </a>
                        <!-- HAPUS -->
                        <a href="hapus.php?id=<?= $row['id']; ?>"
                           class="btn btn-danger btn-sm"
                           onclick="return confirm('Yakin hapus data?' )">
                           Hapus
                        </a>
                    </td>
                </tr>
                <?php
                        }
                } else {
                    echo "<tr><td colspan='4'>0 result</td></tr>";
                }
                ?>
                </tbody>
         </table>
   </div>
<!-- Bootstrap JS -->
<script src="bootstrap-5.3.8-dist/js/bootstrap.min.js"></script>
</body>
</html>