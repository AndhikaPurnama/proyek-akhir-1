<?php
  include('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
  
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Speed Shop</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
    <!--header-->
    <header>
        <div class="container">
            <h1><a href="design.php">Speed Shop</a></h1>
            <ul>
                <li><input type="text" name="search" placeholder="Cari Produk"></li>
                <li><input type="submit" name="cari" value="Cari Produk"></li>
                <li><a href="produk.php">Produk</a></li>
                <li><a href="keluar.php">Keluar</a></li>
            </ul>
        </div>
    </header>
    <br>
    <br>


	<!--search-->
    <div class="search">
        <div class="container">
            
        </div>
    </div>


    <!--new product-->
    <div class="section">
        <div class="container">
            <h3>Produk Terbaru</h3>
            <div class="box">
                <?php
                    $produk = mysqli_query($koneksi, "SELECT * FROM tb_produk ORDER BY id DESC
                        LIMIT 8");
                    if(mysqli_num_rows($produk) > 0){
                        while($p = mysqli_fetch_array($produk)){
                ?>
                    <a href="detail-produk.php?id=<?php echo $p['id'] ?>">
                        <div class="col-4">
                            <img src="gambar/<?php echo $p['gambar_produk'] ?>" width=" %">
                            <p class="nama"><?php echo $p['nama_produk'] ?></p>
                            <p class="harga">Rp. <?php echo number_format($p['harga_beli'],0,',','.'); ?></p>
                            <a href="cart.php"><input type="submit" value="Buy Now"></a>
                        </div>
                    </a>
                <?php }}else{ ?>
                    <p>Produk tidak ada</p>
                <?php } ?>
            </div>
        </div>
    </div>

    <!--footer-->
    <div class="footer">
        <div class="container">
            <h4>Alamat</h4>
            <p>Jl Pattimura</p>

            <h4>Email</h4>
            <p>andhikaprnm261@gmail.com</p>

            <h4>No Hp</h4>
            <p>0895600549415</p>
            <small>Copyright &copy; 2022 - Toko motor   </small>
        </div>
    </div>
</body>
</html>
	 