<!-- 21091397038 Ahmed Nur Sidik -->

<?php

class Katak{
    protected $umur, $nama;
    public function __construct($umur, $nama){
        $this->umur = $umur;
        $this->nama = $nama;
    }
    public function getUmur(){
        return $this->umur;
    }
    public function getNama(){
        return $this->nama;
    }
    public function caraBergerak(){
        return 'Melompat';
    }
}

class Kecebong extends Katak{
    private $panjangEkor;
    public function __construct($umur, $nama, $ekor){
    $this->panjangEkor = $ekor;
    parent::__construct($umur, $nama);
    }
    public function getpanjangekor(){
        return $this->panjangEkor;
    }
    public function carabergerak(){
        return 'Berenang';
    }
}

$katak = new katak(9, 'Kodok');
$kecebong = new kecebong(5, 'Junior Kodok', 10);
?>