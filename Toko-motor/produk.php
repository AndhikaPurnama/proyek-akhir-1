<?php
    session_start();
    include 'koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Speed Shop</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
</head>
<body>
    <!--header-->
    <header>
        <div class="container">
            <h1><a href="dashboard.php">Speed Shop</a></h1>
            <ul>
                <li><a href="keluar.php">Keluar</a></li>
            </ul>
        </div>
    </header>

    <!--content-->
    <div class="section">
        <div class="container">
            <h3>Data Produk</h3>
            <div class="box">
              <table border="1" cellspacing="0" class="table">
                <thead>
                    <tr>
                        <th width="60px">No</th>
                        <th>Nama Produk</th>
                        <th>Deskripsi</th>
                        <th>Harga</th>
                        <th>Gambar</th>
                        <th width="150px">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $no = 1;
                        $produk = mysqli_query($koneksi, "SELECT * FROM tb_produk ORDER BY id DESC");
                        if(mysqli_num_rows($produk) > 0){
                        while($row = mysqli_fetch_array($produk)){
                    ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $row['nama_produk'] ?></td>
                        <td><?php echo $row['deskripsi'] ?></td>
                        <td>Rp. <?php echo number_format($row['harga_beli']) ?></td>
                        <td><a href="gambar/<?php echo $row['gambar_produk'] ?>" target="_blank"><img src="gambar/<?php echo $row['gambar_produk'] ?>" width="50px"></a></td>
                        <td>
                            <a href="cart.php?id=<?php echo $row['id'] ?>">Beli</a> 
                        </td>
                    </tr>
                    <?php }}else{ ?>
                        <tr>
                            <td colspan="6">Tidak ada data</td>
                        </tr>

                    <?php } ?>   
                </tbody>
              </table>
            </div>
        </div>
    </div>

    <!--footer-->
    <footer>
        <div class="container">
            <small>Copyright &copy; 2022 - Toko motor</small>
        </div>
    </footer>
</body>
</html>

<style>
.table {
    width: 100%;
    border-collapse: collapse;
}
.table tr {
    height: 30px;
}
.table tr td {
    padding: 5px 10px;
}
</style>