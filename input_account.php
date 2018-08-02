<html>
  <body>
    <div class="wrapper">
      <form method="post" action="class_account.php">
        <div>
          <label>ID Account</label>
          <input type="text" name="id_account"/>
        </div>
        <div>
          <label>Nama</label>
          <input type="text" name="nama"/>
        </div>
        <div>
          <label>Alamat</label>
          <input type="text" name="alamat"/>
        </div>
        <div>
          <label>Ballance</label>
          <input type="text" name="ballance"/>
        </div>
        <div>
          <label>ID Bank</label>
          <input type="text" name="id_bank"/>
        </div>
        <div>
          <input type="submit" name="submit" value="kirim"/>
        </div>
      </from>
    </div>
  </body>

  <style>
    .wrapper label {
      float: left;
      margin-right: 10px;
    }
    .wrapper div {
      margin-bottom: 15px;
    }
  </style>
</html>
