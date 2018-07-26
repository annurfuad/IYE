
 <?php
// fungsi untuk pengecekan tampilan form
// jika form add data yang dipilih
if ($_GET['form']=='add') { ?>
  <!-- tampilan form add data -->
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <i style="margin-right:7px" class="fa fa-edit"></i> Create Course
    </h1>
    <ol class="breadcrumb">
      <li><a href="?module=home"><i class="fa fa-home"></i> Beranda </a></li>
      <li><a href="?module=learning"> Learning </a></li>
      <li class="active"> Tambah </li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <!--Course Creation Form Code -->
        					<div class="col-md-12 animate-box">
        						<h3 class="text-center">Let's get started!</h3>
        						<p class="text-center">Fill out the form to add details about the new course.&nbsp;After you are done, you will be directed to the course management page where you can add lectures, handouts, and much more!
        						<br>Kindly note that all the fields are mandatory unless stated otherwise.</p> <br>

        						<form role="form" class="form-horizontal"  action="modules/learning/proses.php?act=insert" method="POST">
        							<div class="row form-group">
        								<div class="col-md-12">
        									<i class="fa fa-graduation-cap"></i>&nbsp;&nbsp;Course Name
        									<input type="text" id="courseName" name="courseName" class="form-control" placeholder="Enter the course name" required>
        								</div>
        							</div>

                      <div class="col-md-12">
                        <i class="fa fa-link"></i>&nbsp;&nbsp;Course Video
                        <input type="text" id="courseVideo" name="courseVideo" class="form-control" placeholder="For example, type 'xzjoXwCpBU4' for the video link 'https://www.youtube.com/watch?v=xzjoXwCpBU4'" required>
                      </div>
                    </div>

        							<div class="row form-group">
        								<div class="col-md-12">
        									<i class="fa fa-book"></i>&nbsp;&nbsp;Course Category
        									<select class="form-control" name="courseCategory" id="courseCategory" required>
        										<option>-- Choose course category --</option>
              									<option value="Business">Business</option>
              									<option value="Health and Psychology">Health &amp; Psychology</option>
              									<option value="Accounting">Accounting</option>
              									<option value="Science and Technology">Science &amp; Technology</option>
        	      								<option value="Artand Media">Art &amp; Media</option>
        										<option value="Real Estate">Real Estate</option>
        										<option value="Language">Language</option>
        										<option value="Web and Programming">Web &amp; Programming</option>
            								</select>
        								</div>
        							</div>

        							<div class="row form-group">
        								<div class="col-md-12">
        									<i class="fa fa-pencil"></i>&nbsp;&nbsp;Course Information
        									<textarea name="courseInfo" id="courseInfo" cols="30" rows="15" class="form-control" placeholder="Enter a detailed information about the course." maxlength="300" required></textarea>
        								</div>
        							</div>

        							<div class="row form-check form-group">
        								<div class="col-md-12">
        	    						<input class="form-check-input" type="checkbox" required>
        	    						&nbsp;&nbsp;I agree to the <a href="#">terms and conditions</a>.
        								</div>
        							</div>

        							<div class="form-group">
        								<div class="text-center">
        									<input type="submit" name="simpan" value="Submit" class="btn btn-primary">
        								</div>
        							</div>

        						</form>
        					</div>
        				</div>
        	<!--Course Creation Code ends -->

      </div><!--/.col -->
    </div>   <!-- /.row -->
  </section><!-- /.content -->
  <?php
  }
// jika form edit data yang dipilih
// isset : cek data ada / tidak
elseif ($_GET['form']=='view') {
  if (isset($_GET['id'])) {
      // fungsi query untuk menampilkan data dari tabel user
      $query = mysqli_query($mysqli, "SELECT * FROM courses WHERE course_id='$_GET[id]'")
                                      or die('Ada kesalahan pada query tampil User : '.mysqli_error($mysqli));
      $data  = mysqli_fetch_assoc($query);

?>

  <!-- tampilan form edit data -->
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <i style="margin-right:7px" class="fa fa-edit"></i> Learning Course
    </h1>
    <ol class="breadcrumb">
      <li><a href="?module=home"><i class="fa fa-home"></i> Beranda </a></li>
      <li><a href="?module=learning"> Learning </a></li>
      <li class="active"> View Course</li>
    </ol>
  </section>


    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="box box-primary">
              <div class="box-body">

<?php
      echo '<br><iframe type="center" width="560" height="315" src="https://www.youtube.com/embed/' . stripslashes($data['course_video']) . '" frameborder="0" allowfullscreen></iframe>';
?>
          </div>
          </div>
      </div>
     </section>

<?php
}

}

?>
