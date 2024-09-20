<?php

namespace App\Admin;

class Pegawai 
{
  public $nip;
  public $nama;
  protected $no_hp;
  public $alamat;

  public function __construct($nip, $nama, $no_hp, $alamat) 
  {
    $this->nip = $nip;
    $this->nama = $nama;
    $this->no_hp = $no_hp;
    $this->alamat = $alamat;
  }

  public function cekin() 
  {
    return true;
  }

  public function cekOut() 
  {
    return true;
  }

  public function getNoHp() 
  {
    return $this->no_hp;
  }

  public function setNoHp($newNoHp) 
  {
    $this->no_hp = $newNoHp;
    echo "Nomor Telepon diganti menjadi: " . $this->no_hp; 
  }
}

?>