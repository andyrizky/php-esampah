<?php $thisPage = "Member" ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?php echo $thisPage; ?></title>
    <link rel="stylesheet" href="member.css">
  </head>
  <body>
    <?php include "dashboard.php"; ?>
    <div class="content">
      <?php echo "Member / Admin"; ?>
    </div>
    <div class="form_member">
      <form action="#" method="post">
          <center><legend>Member</legend></center>
          <label for="tipe">Tipe </label>
          <label><input type="radio" name="radio-tipe" value="individu" class="radio-tipe"> Individu</label>
          <label><input type="radio" name="radio-tipe" value="instansi" class="radio-tipe"> Instansi</label>
          <label><input type="radio" name="radio-tipe" value="grup-area" class="radio-tipe"> Grup Area</label>
          <br>
          <br>
          <input type="text" name="instansi-grup" placeholder="Masukkan Instansi atau Grup .." class="input-standart">
          <br>
          <label for="nama">Nama </label>
          <input type="text" name="nama" class="input-standart2">
          <br>
          <label for="norek">No. Rekening</label>
          <input type="text" name="norek" class="input-standart3">
          <br>
          <label for="alamat">Alamat</label>
          <textarea name="alamat" rows="8" cols="50" class="input-area"></textarea>
          <br>
          <label for="telp">Telepon</label>
          <input type="number" name="telp" class="input-standart4">
          <br>
          <label for="provinsi">Provinsi</label>
          <input type="text" name="provinsi" class="input-standart5">
          <br>
          <label for="kota">Kota</label>
          <input type="text" name="kota" class="input-standart6">
          <br>
          <label for="kecamatan">Kecamatan</label>
          <input type="text" name="kecamatan" class="input-standart7">
          <br>
          <label for="desa-kelurahan">Desa/Kelurahan</label>
          <input type="text" name="desa-kelurahan" class="input-standart8">
      </form>
    </div>

  </body>
</html>
