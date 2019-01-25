<?php 

require_once 'App/init.php';

$produk1 = new Komik("Doraemon", "Nobuyuki Fujimoto", "Shogakuka", 150000,100);
$produk2 = new Game("Minions", "Brian Lynch", "sergio pablos", 10000,50);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk( $produk1 );
$cetakProduk->tambahProduk( $produk2 );
echo $cetakProduk->cetak();

echo "<hr>";

new coba();



 ?>