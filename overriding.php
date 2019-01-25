<?php 


class Produk{
	public $judul,
			$penulis,
			$penerbit,
			$harga;



	public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0 ) {
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
	}

	public function getlabel() {
		return "$this->penulis, $this->penerbit";
	}

	public function getInfoProduk() {
		$str = "{$this->judul} | {$this->getlabel()} (Rp. {$this->harga})";

		return $str;

	}
} 

class Komik extends Produk {
	public $jmlHalaman;

	public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga =0, $jmlHalaman = 0 ) {

		parent::__construct ( $judul, $penulis , $penerbit , $harga);
		$this->jmlHalaman = $jmlHalaman;

	}

	public function getInfoProduk() {
		$str = "Komik : " . parent::getInfoProduk() . " - {$this->jmlHalaman} Halaman.";
		return $str;
	}

}


class CetakInfoProduk {
	public function cetak( Produk $produk ) {
		$str = "{$produk->judul} | {$produk->getlabel()} (Rp. {$produk->harga})";
		return $str;
	}
}


$produk1 = new Komik("Doraemon", "Nobuyuki Fujimoto", "shogakuka", 150000, 100, 0, "Komik");
$produk2 = new Produk("Minions", "Brian Lynch", "sergio pablos", 100000, 0, 50, "Game");


echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();



?>