<?php
  class Bank {

    // property declaration
    public $id_bank = '123';
    public $nama_bank;
    public $alamat = 'Jl. Jauh';
    public $nomor_telepon = '087785292717';

    public function __construct($nama)
    {
      $this->nama_bank = $nama;
    }

    // method declaration
    public function cetakNamaBank() {
        echo $this->nama_bank;
    }
  }

  $bank = new Bank($_POST['nama_bank']);
  $bank->cetakNamaBank();
?>
