<?php 


abstract class Produk{
	public $judul,
			$penulis,
			$penerbit;

	protected $diskon = 0;


	private $harga;





	public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0 ) {
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
	}

	
	public function getHarga() {
		return $this->harga - ( $this->harga * $this->diskon / 100 );
	}


	public function getlabel() {
		return "$this->penulis, $this->penerbit";
	}

	abstract public function getInfoProduk();


	public function getInfo() { 
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
		$str = "Komik : " . $this->getInfo() . " - {$this->jmlHalaman} Halaman.";
		return $str;
	}

}


class Game extends Produk {
	public $waktuMain;
	
	public function __construct( $judul = "judul", $penulis = "penulis",$penerbit = "penerbit", $harga =0, $waktuMain =0 ) {
		parent::__construct($judul, $penulis, $penerbit, $harga);

		$this->waktuMain = $waktuMain;
	}

	public function setDiskon( $diskon ) {
		$this->diskon = $diskon;
	}

	public function getInfoProduk() {
		$str = "Game : ". $this
		->getInfo() ."~ {$this->waktuMain} jam.";
	}
}

class CetakInfoProduk {
	public function cetak( Produk $produk ) {
		$str = "{$produk->judul} | {$produk->getlabel()} (Rp. {$produk->harga})";
		return $str;
	}
}


$produk1 = new Komik("Doraemon", "Nobuyuki Fujimoto", "shogakuka", 150000, 100, 0, "Komik");
$produk2 = new Game("Minions", "Brian Lynch", "sergio pablos", 100000, 0, 50, "Game");


echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<hr>";

$produk2->setDiskon(50);
echo $produk2->getHarga();



?>