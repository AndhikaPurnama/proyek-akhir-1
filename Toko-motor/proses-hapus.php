<?php

    include 'koneksi.php';

    if(isset($_GET['idk'])){
        $delete = mysqli_query($koneksi, "DELETE FROM kategori WHERE kategori_id = '".$_GET['idk']."' ");
        echo '<script>window.location="data-kategori.php"</script>';
    }

    if(isset($_GET['idp'])){
        $produk = mysqli_query($koneksi, "SELECT gambar_produk FROM tb_produk WHERE id = '".$_GET['idp']."' ");
        $p = mysqli_fetch_object($produk);

        unlink('.gambar/'.$p->gambar_produk);

        $delete = mysqli_query($koneksi, "DELETE FROM tb_produk WHERE id = '".$_GET['idp']."' ");
        echo '<script>window.location="data-produk.php"</script>';
    }
?>