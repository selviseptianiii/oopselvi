<?php 


class Produk{
	public $judul,
			$penulis,
			$penerbit,
			$harga,
			$jmlHalaman,
			$waktuMain;

	public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0 ) {
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
		$this->jmlHalaman = $jmlHalaman;
		$this->waktuMain = $waktuMain;
	}

	public function getlabel() {
		return "$this->penulis, $this->penerbit";
	}

	public function getInfoLengkap() {
		$str = "{$this->judul} | {$this->getlabel()} (Rp. {$this->harga})";

		return $str;

	}
} 

class Komik extends Produk {
	public function getInfoProduk() {
		$str = "Komik : " . parent::getInfoProduk() . " - {$this->jmlHalaman} Halaman.";
		return $str;
	}

}

class Game extends Produk {
	public function getInfoProduk() {
		$str = "Game :{$this->judul} | {$produk->getlabel()} (Rp. {$produk->harga}) ~ {$this->waktuMain} Jam.";
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


echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();



?>