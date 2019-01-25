<?php 


class Produk{
	public $judul = "judul",
			$penulis = "penulis",
			$penerbit = "penerbit",
			$harga = 0;

	public function getlabel() {
		return "$this->penulis, $this->penerbit";
	}

} 

// $produk1 = new Produk();
// $produk1->judul = "Doraemon";
// var_dump($produk1);

// $produk2 = new produk();
// $produk2->judul = "Minion";
// $produk2->tambahproperty = "pisang";
// var_dump($produk2);

$produk3 = new Produk();
$produk3->judul = "Doraemon";
$produk3->penulis = "Nobuyuki Fujimoto";
$produk3->penerbit = "shogakukan";
$produk3->harga = "150000";

$produk4 = new Produk();
$produk4->judul = "Minions";
$produk4->penulis = "Brian Lynch";
$produk4->penerbit = "Sergio pablos";
$produk4->harga = "100000";

echo "Komik : " . $produk3->getlabel();
echo "<br>";
echo "Game : " . $produk4->getlabel();







?>