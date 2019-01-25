<?php 


class Produk {
	private $judul,
			$penulis,
			$penerbit,
			$harga,
			$diskon = 0;



	public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0 ) {
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
	}

	
	public function setJudul( $judul) {
		if( !is_string($judul) ) {
			throw new Exception("Judul harus string");
			
		}
		$this->judul = $judul;
	}


	public function getJudul() {
		return $this->judul;
	}

	public function penulis( $penulis ) {
		$this->penulis = $penulis;
	}


	public function getPenulis() { 
		return $this->penulis;

	}

	public function getPenerbit() {
		return $this->penerbit;
	}

	public function setDiskon( $diskon ) {
		$this->diskon = $diskon;
	}

	public function getDiskon() {
		return $this->diskon;
	}

	public function setHarga() {

	}

	public function getHarga() {
		return $this->harga - ( $this->harga * $this->diskon / 100 );
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

		parent::__construct ( $judul, $penulis, $penerbit, $harga);

		$this->jmlHalaman = $jmlHalaman;
	}

	public function getInfoProduk() {
		$str = "Komik : " . parent::getInfoProduk() . " - {$this->jmlHalaman} Halaman.";
		return $str;

		}
	}



class Game extends Produk {
	public $waktuMain;
	
	public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga =0, $waktuMain = 0 ) {
		
		parent::__construct( $judul, $penulis, $penerbit, $harga);

		$this->waktuMain = $waktuMain;
	}


	public function getInfoProduk() {
		$str = "Game : ". parent::getInfoProduk() ."~ {$this->waktuMain} jam.";
			return $str;
	}
}

class CetakInfoProduk {
	public $daftarProduk = array();

	public function tambahProduk( Produk $produk ) {
		$this->daftarProduk[] = $produk;

	}
	
	public function cetak() {
		$str = "DAFTAR PRODUK : <br>";

		foreach ($this->daftarProduk as $p ) {
			$str .= "- {$p->getInfoProduk()} <br>";
		}

		return $str;
	}
}

$produk1 = new Komik("Doraemon", "Nobuyuki Fujimoto", "shogakuka", 150000, 100, 0, "Komik");
$produk2 = new Game("Minions", "Brian Lynch", "sergio pablos", 100000, 0, 50, "Game");


$CetakProduk = new CetakInfoProduk();
$CetakProduk->tambahProduk( $produk1 );
$CetakProduk->tambahProduk( $produk2 );
echo $CetakProduk->cetak();


?>