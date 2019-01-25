<?php 

class Produk {
	public $judul = "judul",
			$penulis = "penulis",
			$penerbit = "penerbit",
			$harga = 0;


	public function __construct( $judul = "judul", $penulis= "penulis", $penerbit = "penerbit",$harga = 0 )
		{
			$this->judul = $judul;
			$this->penulis = $penulis;
			$this->penerbit = $penerbit;
			$this->harga = $harga;
		}

		public function getlabel() {
			return "$this->penulis, $this->penerbit";
		}
} 


$produk1 = new Produk("Doraemon", "Nobuyuki Fujimoto", "shogakuka", 150000);
$produk2 = new Produk("Minions", "Brian Lynch", "Sergio pablos", 100000);
$produk3 = new Produk("Clash Off Clean");




echo "Komik : " . $produk1->getlabel();
echo "<br>";
echo "Game : " . $produk2->getlabel();
echo "<br>";
var_dump($produk3);



?>