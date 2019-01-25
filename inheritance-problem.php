<?php 


class Produk{
	public $judul = "judul",
			$penulis = "penulis",
			$penerbit = "penerbit",
			$harga = 0,
			$jmlHalaman,
			$waktuMain,
			$tipe;

	public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0, $tipe )
	{
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
		$this->jmlHalaman = $jmlHalaman;
		$this->waktuMain = $waktuMain;
		$this->tipe = $tipe;
	}

	public function getlabel() {
		return "$this->penulis, $this->penerbit";
	}

	public function getInfoLengkap() {
		// Komik : Doraemon | Nobuyuki Fujimoto, Brian Jump (Rp. 150000) - 100 Halaman.
		$str = "{$this->tipe} : {$this->judul} | {$this->getlabel()} (Rp. {$this->harga})";
		if( $this->tipe == "Komik" ) {
			$str .= " - {$this->jmlHalaman} Halaman.";
		} else if( $this->tipe == "Game"){
			$str .= " ~ {$this->waktuMain} jam.";
		}

		return $str;

	}
} 

class CetakInfoProduk {
	public function cetak( Produk $produk ) {
		$str = "{$produk->judul} | {$produk->getlabel()} (Rp. {$produk->harga})";
		return $str;
	}
}


$produk1 = new Produk("Doraemon", "Nobuyuki Fujimoto", "shogakuka", 150000, 100, 0, "Komik");
$produk2 = new Produk("Minions", "Brian Lynch", "sergio pablos", 100000, 0, 50, "Game");


echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();



?>