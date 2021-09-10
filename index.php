<?php
// Interface
interface Model {
    public function Warna();
}
// interable
function getIterable():iterable {
  return ["Selamat ", "Datang"," Di"," toko buah","Amanah"];
  
}
$myIterable = getIterable();
foreach($myIterable as $item) {
  echo $item;
  
}
// class
class Produk {
    // Access modifiers Public
    // properti
  public $nama,
            $warna,
            $harga;

  // contruktor
  function __construct ($nama, $warna, $harga) {
    $this->nama = $nama;
    $this->warna = $warna;
    $this->harga = $harga;
  }
  // destructor
  function __destruct() {
    echo "Nama Buah : Nama : {$this->nama} | warna : {$this->warna} | Harga : {$this->harga}.";
    echo "<br>";
  }
  
}

// Inheritance
class Produk2 extends Produk implements Model{
    public  function Warna (){
        echo "<hr>Produk yang ada di toko kami yaitu";
        echo "<br>";
    }
}
// Static Property
class Terjual {
    public static $satu = 50, $dua = 30, $tiga = 100, $empat = 280, $lima = 300;
}
// Static Methods
class Stok{
    public static function staticMethod (){
        echo "Apel <br> Melon <br> Mangga <br> semangka <br> Naga ";
        echo "<hr>";
    }
}

// objek
$produk1 = new Produk2("Melon, Mangga , semangka", "Kuning", 30000);
$produk2 = new Produk2("Apel, Naga", "merah", 50000);
$produk2 -> Warna();
Stok::staticMethod();
echo "Untuk Produk Apel Terjual : " . Terjual::$satu;
echo "<br> Untuk Produk Melon Terjual : " . Terjual::$dua;
echo "<br> Untuk Produk Mangga Terjual : " . Terjual::$tiga;
echo "<br> Untuk Produk semangka Terjual : " . Terjual::$empat;
echo "<br> Untuk Produk Naga Terjual : " . Terjual::$lima;
echo "<hr>";