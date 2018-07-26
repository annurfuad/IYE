<?php

// Panggil koneksi database.php untuk koneksi database
require_once "config/database.php";


      if (isset($_POST['register'])) {
          // ambil data hasil submit dari form

          $username  = mysqli_real_escape_string($mysqli, trim($_POST['username']));
          $password  = md5(mysqli_real_escape_string($mysqli, trim($_POST['password'])));
          $nama_user = mysqli_real_escape_string($mysqli, trim($_POST['nama_user']));
          $hak_akses = mysqli_real_escape_string($mysqli, trim($_POST['hak_akses']));

          // perintah query untuk menyimpan data ke tabel user
          $query = mysqli_query($mysqli, "INSERT INTO is_user(username,password,nama_user,hak_akses)
                                          VALUES('$username','$password','$nama_user','$hak_akses')")
                                          or die('Ada kesalahan pada query insert : '.mysqli_error($mysqli));
          // cek query
          if ($query) {
              // jika berhasil tampilkan pesan berhasil simpan data
              header("Location: index.php?alert=1");
      }
}
