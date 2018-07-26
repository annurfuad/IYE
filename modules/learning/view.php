<?php

if ($_SESSION['hak_akses']=='superadmin') { ?>

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    <i class="fa fa-user icon-title"></i> Manajemen Learning Course

    <a class="btn btn-primary btn-social pull-right" href="?module=form_learning&form=add">
      <i class="fa fa-plus"></i> New Course
    </a>
  </h1>

</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-12">

    <?php
    // fungsi untuk menampilkan pesan
    // jika alert = "" (kosong)
    // tampilkan pesan "" (kosong)
    if (empty($_GET['alert'])) {
      echo "";
    }
    // jika alert = 1
    // tampilkan pesan Sukses "User baru berhasil disimpan"
    elseif ($_GET['alert'] == 1) {
      echo "<div class='alert alert-success alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-check-circle'></i> Sukses!</h4>
              User baru berhasil disimpan.
            </div>";
    }
    // jika alert = 2
    // tampilkan pesan Sukses "User berhasil diubah"
    elseif ($_GET['alert'] == 2) {
      echo "<div class='alert alert-success alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-check-circle'></i> Sukses!</h4>
              User berhasil diubah.
            </div>";
    }
    // jika alert = 3
    // tampilkan pesan Sukses "User berhasil dihapus"
    elseif ($_GET['alert'] == 3) {
      echo "<div class='alert alert-success alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-check-circle'></i> Sukses!</h4>
              User berhasil dihapus.
            </div>";
    }
    ?>

      <div class="box box-primary">
        <div class="box-body">
          <!-- tampilan tabel user -->
          <table id="dataTables1" class="table table-bordered table-striped table-hover">
            <!-- tampilan tabel header -->
            <thead>
              <tr>
                <th class="center">No.</th>
                <th class="center">Course Name</th>
                <th class="center">Course Info</th>
                <th class="center">Course Category</th>
                <th class="center">Course Video Link</th>

                <th></th>
              </tr>
            </thead>
            <!-- tampilan tabel body -->
            <tbody>
            <?php
            $no = 1;
            // fungsi query untuk menampilkan data dari tabel user
            $query = mysqli_query($mysqli, "SELECT * FROM courses ORDER BY course_id DESC")
                                            or die('Ada kesalahan pada query tampil : '.mysqli_error($mysqli));

            // tampilkan data
            while ($data = mysqli_fetch_assoc($query)) {
              // menampilkan isi tabel dari database ke tabel di aplikasi
              echo "<tr>
                      <td width='40' class='center'>$no</td>
                      <td width='200' class='center'>$data[course_name]</td>
                      <td width='200' class='center'>$data[course_info]</td>
                      <td width='100' class='center'>$data[course_category]</td>
                      <td width='200' class='center'>$data[course_video]</td>

                      <td width='40' class='center'><a href='?module=form_learning&form=view&id=$data[course_id]'><button class='btn btn-primary'><i class='fa fa-pencil-square-o'></i>&nbsp;&nbsp;View</button></a></td>
                        <div>

                          </a>"?>

            <?php
              echo "    </div>
                      </td>
                    </tr>";
              $no++;
            }
            ?>
            </tbody>
          </table>
        </div><!-- /.box-body -->
      </div><!-- /.box -->
    </div><!--/.col -->
  </div>   <!-- /.row -->

</section><!-- /.content -->

  <?php
  }
  else {
?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-user icon-title"></i> Learning Course

      </h1>

    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">

          <div class="box box-primary">
            <div class="box-body">
              <!-- tampilan tabel user -->
              <table id="dataTables1" class="table table-bordered table-striped table-hover">
                <!-- tampilan tabel header -->
                <thead>
                  <tr>
                    <th class="center">No.</th>
                    <th class="center">Course Name</th>
                    <th class="center">Course Info</th>
                    <th class="center">Course Category</th>
                    <th class="center">Course Video Link</th>

                    <th></th>
                  </tr>
                </thead>
                <!-- tampilan tabel body -->
                <tbody>
                <?php
                $no = 1;
                // fungsi query untuk menampilkan data dari tabel user
                $query = mysqli_query($mysqli, "SELECT * FROM courses ORDER BY course_id DESC")
                                                or die('Ada kesalahan pada query tampil : '.mysqli_error($mysqli));

                // tampilkan data
                while ($data = mysqli_fetch_assoc($query)) {
                  // menampilkan isi tabel dari database ke tabel di aplikasi
                  echo "<tr>
                          <td width='40' class='center'>$no</td>
                          <td width='200' class='center'>$data[course_name]</td>
                          <td width='200' class='center'>$data[course_info]</td>
                          <td width='100' class='center'>$data[course_category]</td>
                          <td width='200' class='center'>$data[course_video]</td>

                          <td width='40' class='center'><a href='?module=form_learning&form=view&id=$data[course_id]'><button class='btn btn-primary'><i class='fa fa-pencil-square-o'></i>&nbsp;&nbsp;View</button></a></td>
                            <div>

                              </a>"?>

                <?php
                  echo "    </div>
                          </td>
                        </tr>";
                  $no++;
                }
                ?>
                </tbody>
              </table>
            </div><!-- /.box-body -->
          </div><!-- /.box -->
        </div><!--/.col -->
      </div>   <!-- /.row -->

    </section><!-- /.content -->
  }
  <?php } ?>
