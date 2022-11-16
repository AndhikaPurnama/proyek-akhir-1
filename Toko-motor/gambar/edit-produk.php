<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Toko Motor</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
    <script src="https://cdn.ckeditor.com/4.20.0/standard/ckeditor.js"></script>
<body>
    <!--header-->
    <header>
        <div class="container">
            <h1><a href="dashboard.php">Toko motor</a></h1>
            <ul>
                <li><a href="dashboard.php">Dashboard</a></li>
                <li><a href="profil.php">Profil</a></li>
                <li><a href="data-kategori.php">Data Kategori</a></li>
                <li><a href="data-produk.php">Data Produk</a></li>
                <li><a href="keluar.php">Keluar</a></li>
            </ul>
        </div>
    </header>

 
	<h3>Edit Data Produk</h3>
 
	<?php
	include 'db.php';
	$product_id = $_GET['id'];
	$produk = mysqli_query($conn,"select * from tb_product where product_id='".$_GET['id']."' ");
	while($d = mysqli_fetch_object($produk)){
		?>
		<form method="post" action="fungsi_edit_dokter.php">
                    <input type="text" name="nama" class="input-control" placeholder="Nama Produk" value="<?php echo $d->product_name ?>" required>
                    <input type="text" name="harga" class="input-control" placeholder="Harga" value="<?php echo $d->product_price ?>" required>

                    <img src="produk/<?php echo $d->product_image ?>" width="100px">
                    <input type="hidden" name="foto" value="<?php echo $d->product_image ?>">
                    <input type="file" name="gambar" class="input-control">
                    <textarea class="input-control" name="deskripsi" placeholder="Deskripsi" value="<?php echo $d->product_description ?>"></textarea><br>
                    <select class="input-control" name="status">
                        <option value="">--Pilih--</option>
                        <option value="1" <?php echo ($d->product_status == 1)? 'selected':''; ?>>Aktif</option>
                        <option value="0" <?php echo ($p->product_status == 0)? 'selected':''; ?>>Tidak Aktif</option>
                    </select>
                    <input type="submit" name="submit" value="Submit" class="btn">
        </form> 
		<?php 
	}
	?>
 
</body>
</html>