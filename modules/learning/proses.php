<?php
session_start();

// Panggil koneksi database.php untuk koneksi database
require_once "../../config/database.php";

// fungsi untuk pengecekan status login user
// jika user belum login, alihkan ke halaman login dan tampilkan pesan = 1
if (empty($_SESSION['username']) && empty($_SESSION['password'])){
    echo "<meta http-equiv='refresh' content='0; url=index.php?alert=1'>";
}
// jika user sudah login, maka jalankan perintah untuk insert, update, dan delete
else {
  if ($_GET['act']=='insert') {
      if (isset($_POST['simpan'])) {


          $course_name     =   mysqli_real_escape_string($mysqli,trim($_POST['courseName']));
          $course_video    = mysqli_real_escape_string($mysqli,trim($_POST['courseVideo']));
          $course_category =   mysqli_real_escape_string($mysqli,trim($_POST['courseCategory']));
          $course_info     =   mysqli_real_escape_string($mysqli,trim($_POST['courseInfo']));


          $query = mysqli_query($mysqli,"INSERT INTO courses(course_name,course_category,course_info,course_video) VALUES ('$course_name', '$course_category', '$course_info','$course_video')")
          or die('Ada kesalahan pada query insert : '.mysqli_error($mysqli));

          // cek query
          if ($query) {
              // jika berhasil tampilkan pesan berhasil simpan data
              header("location: ../../main.php?module=learning&alert=1");
          }

          }
        }
        elseif ($_GET['act']=='insertcontent') {
            if (isset($_POST['simpan'])) {
                if (isset($_POST['course_id'])) {// ambil data hasil submit dari form

                  $video_title = mysqli_real_escape_string($mysqli,trim($_POST['video_title']));
                  $video_link = mysqli_real_escape_string($mysqli,trim($_POST['video_link']));
                  $course_id = mysqli_real_escape_string($link, $_POST["course_id"]);

                // perintah query untuk menyimpan data ke tabel
                $query = mysqli_query($mysqli,"INSERT INTO courses_content(course_id,video_title,video_link) VALUES ('$course_id','$video_title', '$video_link')")
                or die('Ada kesalahan pada query insert : '.mysqli_error($mysqli));

                // cek query
                if ($query) {
                    // jika berhasil tampilkan pesan berhasil simpan data
                    header("location: ../../main.php?module=learning&alert=1");
                }
            }
        }
      }
    }

?>
