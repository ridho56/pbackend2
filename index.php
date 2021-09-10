<?php

// Interface
interface Model {
    public function Warna();
}
// interable
function getIterable():iterable {
  return ["Selamat ", "Datang"," Di"," toko buah"," Amanah"];
  
}
$myIterable = getIterable();
foreach($myIterable as $item) {
  echo $item;
  
}
// class
class buah {
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
class buah2 extends buah implements Model{
    public  function Warna (){
        echo "<hr>Buah yang ada di toko kami yaitu";
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
        echo "Apel <br> Melon <br> Mangga <br> Semangka <br> Naga ";
        echo "<hr>";
    }
}

// objek
$buah1 = new buah2("Melon, Mangga , Semangka", "Kuning", 30000);
$buah2 = new buah2("Apel, Naga", "merah", 50000);
$buah2 -> Warna();
Stok::staticMethod();
echo "Untuk buah Apel Terjual : " . Terjual::$satu;
echo "<br> Untuk buah Melon Terjual : " . Terjual::$dua;
echo "<br> Untuk buah Mangga Terjual : " . Terjual::$tiga;
echo "<br> Untuk buah semangka Terjual : " . Terjual::$empat;
echo "<br> Untuk buah Naga Terjual : " . Terjual::$lima;
echo "<hr>";


