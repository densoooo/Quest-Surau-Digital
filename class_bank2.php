<?php
  class Bank {
    var $id_bank;
    var $nama_bank;
    var $alamat;
    var $no_telepon;

    function setId_bank($id_bank) {
      $this->id_bank = $id_bank;
    }

    function getId_bank() {
      return $this->id_bank;
    }

    function setNama_bank($nama_bank) {
      $this->nama_bank = $nama_bank;
    }

    function getNama_bank() {
      return $this->nama_bank;
    }

    function setAlamat($alamat) {
      $this->alamat = $alamat;
    }

    function getAlamat() {
      return $this->alamat;
    }

    function setNo_telepon($no_telepon) {
      $this->no_telepon = $no_telepon;
    }

    function getNo_telepon() {
      return $this->no_telepon;
    }

  }

  $nama_bank = new Bank();
  $nama_bank->setId_bank($_POST['id_bank']);
  $nama_bank->setNama_bank($_POST['nama_bank']);
  $nama_bank->setAlamat($_POST['alamat']);
  $nama_bank->setNo_telepon($_POST['no_telepon']);
  echo "ID Bank = ".$nama_bank->getId_bank()."</br>";
  echo "Nama Bank = ".$nama_bank->getNama_bank()."</br>";
  echo "Alamat = ".$nama_bank->getAlamat()."</br>";
  echo "Nomor Telepon = ".$nama_bank->getNo_telepon()."</br>";
?>
