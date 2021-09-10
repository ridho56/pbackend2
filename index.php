<?php
interface model {
    public function warna();
  }
class Fruit {
  public $nama;
  public $warna;

  function __construct($nama, $warna) {
    $this->nama = $nama;
    $this->warna = $warna;
  }
  function __destruct() {
    echo "buah ini adalah {$this->nama} dan warnanya adalah {$this->warna}.";
    echo "<br>";
  }
  public function intro() {
    echo "buah ini adalah {$this->nama} dan warnanya adalah {$this->warna}.";
    echo "<br>";
  }
}

// Strawberry is inherited from Fruit
class Strawberry extends Fruit {
  public function message() {
    echo "aku adalah buah atau bery? ";
    echo "<br>";
  }
}
class greeting {
    public static function welcome() {
      echo "SELAMAT DATANG";
      echo "<br>";
    }
  }
  
  class melon implements model {
    public function warna() {
      echo "hijau";
      echo "<br>";
    }
  }
  function printIterable(iterable $myIterable) {
    foreach($myIterable as $item) {
      echo $item;
      echo "<br>";
    }
  }

  greeting::welcome();
  $arr = ["merah", "kuning", "hijau"];
  printIterable($arr);
  $strawberry = new Strawberry("Strawberry", "merah");
  $strawberry->message();
  $strawberry->intro();
  $melon = new melon("melon");
  $melon->warna();
?>