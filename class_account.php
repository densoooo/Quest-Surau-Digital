<?php
  class Account {
    public $id_account;
    public $nama;
    public $alamat;
    public $ballance;
    public $id_bank;

    function setId_account($id_account) {
      $this->id_account = $id_account;
    }

    function getId_account() {
      return $this->id_account;
    }

    function setNama($nama) {
      $this->nama = $nama;
    }

    function getNama() {
      return $this->nama;
    }

    function setAlamat($alamat) {
      $this->alamat = $alamat;
    }

    function getAlamat() {
      return $this->alamat;
    }

    function setBallance($ballance) {
      $this->ballance = $ballance;
    }

    function getBallance() {
      return $this->ballance;
    }

    function setId_bank($id_bank) {
      $this->id_bank = $id_bank;
    }

    function getId_bank() {
      return $this->id_bank;
    }
  }

  $Account = new Account();
  $Account->setId_account($_POST['id_account']);
  $Account->setNama($_POST['nama']);
  $Account->setAlamat($_POST['alamat']);
  $Account->setBallance($_POST['ballance']);
  $Account->setId_bank($_POST['id_bank']);
  echo $Account->getId_account()."</br>";
  echo $Account->getNama()."</br>";
  echo $Account->getAlamat()."</br>";
  echo $Account->getBallance()."</br>";
  echo $Account->getId_bank()."</br>";
?>
