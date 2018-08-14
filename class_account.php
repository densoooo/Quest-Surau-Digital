<?php

  session_start();

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

  if (!isset($_SESSION['id_account'])) {
    $_SESSION['id_account'] = array();
    $_SESSION['nama'] = array();
    $_SESSION['alamat'] = array();
    $_SESSION['ballance'] = array();
    $_SESSION['id_bank'] = array();
  }

  $Account = new Account();
  $Account->setId_account($_POST['id_account']);
  $Account->setNama($_POST['nama']);
  $Account->setAlamat($_POST['alamat']);
  $Account->setBallance($_POST['ballance']);
  $Account->setId_bank($_POST['id_bank']);

  array_push($_SESSION['id_account'], $Account->getId_account());
  array_push($_SESSION['nama'], $Account->getNama());
  array_push($_SESSION['alamat'], $Account->getAlamat());
  array_push($_SESSION['ballance'], $Account->getBallance());
  array_push($_SESSION['id_bank'], $Account->getId_bank());

  echo 'You are visitor number ' . $_SESSION['page_count'];
?>
