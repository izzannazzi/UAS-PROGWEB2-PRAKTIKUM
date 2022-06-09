<?php
if(isset($_POST['tambahproduk'])){
	$msg = "";

	$nama_produk = $_POST['nama_produk'];
    $deskripsi = $_POST['deskripsi'];
    $harga = $_POST['harga'];
    $stock = $_POST['stock'];

    $insert_produk = mysqli_query($koneksi,"INSERT INTO produk (nama_produk, deskripsi, harga, stock) VALUES ('$nama_produk',
    '$deskripsi', '$harga', '$stock')");

    if($insert_produk){
        header('location:stock.php');
    } else {
        echo '
        <script>

        alert("Gagal Tambah Produk")
        window.location.href="stock.php"

        </script>';
    }
}
?>