
<?php
// fungsi pengecekan level untuk menampilkan menu sesuai dengan hak akses
// jika hak akses = super admin, tampilkan menu
if ($_SESSION['hak_akses']=='superadmin') { ?>
	<!-- sidebar menu start -->
    <ul class="sidebar-menu">
        <li class="header">MAIN MENU</li>

	<?php
	// fungsi untuk pengecekan menu aktif
	// jika menu home dipilih, menu home aktif
	if ($_GET["module"]=="home") { ?>
		<li class="active">
			<a href="?module=home"><i class="fa fa-home"></i> Beranda </a>
	  	</li>
	<?php
	}
	// jika tidak, menu home tidak aktif
	else { ?>
		<li>
			<a href="?module=home"><i class="fa fa-home"></i> Beranda </a>
	  	</li>
	<?php
	}

  // jika menu inventaris dipilih, menu inventaris aktif
  if ($_GET["module"]=="learning" || $_GET["module"]=="form_inventaris") { ?>
    <li class="active">
      <a href="?module=learning"><i class="fa fa-folder"></i> Learning </a>
      </li>
  <?php
  }
  // jika tidak, menu paket tidak aktif
  else { ?>
    <li>
      <a href="?module=learning"><i class="fa fa-folder"></i> Learning </a>
      </li>
  <?php
  }

  // jika menu peminjaman inventaris dipilih, menu peminjaman inventaris aktif
  if ($_GET["module"]=="partnership" || $_GET["module"]=="form_peminjamaninventaris") { ?>
    <li class="active">
      <a href="?module=partnership"><i class="fa fa-folder"></i> Partnership </a>
      </li>
  <?php
  }
  // jika tidak, menu paket tidak aktif
  else { ?>
    <li>
      <a href="?module=partnership"><i class="fa fa-folder"></i> Partnership</a>
      </li>
  <?php
  }



	// jika menu transaksi dipilih, menu pengembalian aktif
	if ($_GET["module"]=="investor" || $_GET["module"]=="form_pengembalian") { ?>
		<li class="active">
			<a href="?module=investor"><i class="fa fa-check-square"></i> Investor </a>
	  	</li>
	<?php
	}
	// jika tidak, menu pengembalian tidak aktif
	else { ?>
		<li>
			<a href="?module=investor"><i class="fa fa-check-square"></i> Investor </a>
	  	</li>
	<?php
	}

  // jika menu peminjaman inventaris dipilih, menu peminjaman inventaris aktif
  if ($_GET["module"]=="user" || $_GET["module"]=="form_user") { ?>
    <li class="active">
      <a href="?module=user"><i class="fa fa-folder"></i> Manajemen User </a>
      </li>
  <?php
  }
  // jika tidak, menu paket tidak aktif
  else { ?>
    <li>
      <a href="?module=user"><i class="fa fa-folder"></i> Manajemen User</a>
      </li>
  <?php
  }

	?>
	</ul>
	<!--sidebar menu end-->
<?php
}
// jika hak akses = user, tampilkan menu
elseif ($_SESSION['hak_akses']=='user') { ?>
	<!-- sidebar menu start -->
    <ul class="sidebar-menu">
        <li class="header">MAIN MENU</li>

	<?php
	// fungsi untuk pengecekan menu aktif
	// jika menu home dipilih, menu home aktif
	if ($_GET["module"]=="home") { ?>
		<li class="active">
			<a href="?module=home"><i class="fa fa-home"></i> Beranda </a>
	  	</li>
	<?php
	}
	// jika tidak, menu home tidak aktif
	else { ?>
		<li>
			<a href="?module=home"><i class="fa fa-home"></i> Beranda </a>
	  	</li>
	<?php
	}

  // jika menu inventaris dipilih, menu inventaris aktif
  if ($_GET["module"]=="learning" || $_GET["module"]=="form_inventaris") { ?>
    <li class="active">
      <a href="?module=learning"><i class="fa fa-folder"></i> Learning </a>
      </li>
  <?php
  }
  // jika tidak, menu paket tidak aktif
  else { ?>
    <li>
      <a href="?module=learning"><i class="fa fa-folder"></i> Learning </a>
      </li>
  <?php
  }
	?>
	</ul>
	<!--sidebar menu end-->
<?php
}
?>
