<?php

class Lingkaran
{
    const PHI = 3.14;
    public $jari_jari;

    public function luas() : float {
        return self::PHI*$this->jari_jari*$this->jari_jari;
    }

    public function keliling() : float {
        return 2*self::PHI*$this->jari_jari;
    }
}

class Bola
{
    const PHI = 3.14;
    public $jari_jari;
    public function volume() : float {
        return (4/3)*self::PHI*pow($this->jari_jari,3);
    }
}

class Tabung
{
    const PHI = 3.14;
    public $jari_jari;
    public $tinggi;
    public function volume() : float {
        return self::PHI*pow($this->jari_jari,2)*$this->tinggi;
    }
}

class Kerucut
{
    const PHI = 3.14;
    public $jari_jari;
    public $tinggi;

    public function volume() : float {
        return (1/3)*self::PHI*pow($this->jari_jari,2)*$this->tinggi;
    }
}

$nasi_tumpeng = new Kerucut();
$nasi_tumpeng->jari_jari = 4;
$nasi_tumpeng->tinggi = 10;
echo "Volume nasi tumpeng tersebut adalah " . $nasi_tumpeng->volume();

$lapangan = new Lingkaran();
$lapangan->jari_jari = 25;
echo "\nLuas keliling lapagan tersebut adalah " . $lapangan->luas();
echo "\nKeliling lapangan tersebut adalah " . $lapangan->keliling();

$bola_basket = new Bola();
$bola_basket->jari_jari = 15;
echo "\nVolume bola baket tersebut adalah " . $bola_basket->volume();

$botol = new Tabung(24,30);
$botol->jari_jari = 24;
$botol->tinggi = 30;
echo "\nVolume botol minum tersebut adalah " . $botol->volume();

?>