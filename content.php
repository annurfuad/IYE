<?php
/* panggil file database.php untuk koneksi ke database */
require_once "config/database.php";
/* panggil file fungsi tambahan */



// fungsi untuk pengecekan status login user
// jika user belum login, alihkan ke halaman login dan tampilkan message = 1
if (empty($_SESSION['username']) && empty($_SESSION['password'])){
	echo "<meta http-equiv='refresh' content='0; url=index.php?alert=1'>";
}
// jika user sudah login, maka jalankan perintah untuk pemanggilan file halaman konten
else {
	// jika halaman konten yang dipilih home, panggil file view home
	if ($_GET['module'] == 'home') {
		include "modules/beranda/view.php";
	}

	// jika halaman konten yang dipilih inventaris, panggil file view inventaris
	elseif ($_GET['module'] == 'learning') {
		include "modules/learning/view.php";
	}

	// jika halaman konten yang dipilih form paket, panggil file form paket
	elseif ($_GET['module'] == 'form_learning') {
		include "modules/learning/form.php";
	}
	// -----------------------------------------------------------------------------
	// jika halaman konten yang dipilih  peminjaman inventaris, panggil file view inventaris
	elseif ($_GET['module'] == 'partnership') {
		include "modules/partnership/view.php";
	}

	// jika halaman konten yang dipilih form peminjaman inventaris, panggil file form peminjaman inventaris
	elseif ($_GET['module'] == 'form_partnership') {
		include "modules/partnership/form.php";
	}
	// -----------------------------------------------------------------------------

	// jika halaman konten yang dipilih paket, panggil file view paket
	elseif ($_GET['module'] == 'investor') {
		include "modules/investor/view.php";
	}

	// jika halaman konten yang dipilih form paket, panggil file form paket
	elseif ($_GET['module'] == 'form_investor') {
		include "modules/investor/form.php";
	}
	// -----------------------------------------------------------------------------
	// jika halaman konten yang dipilih user, panggil file view user
	elseif ($_GET['module'] == 'user') {
		include "modules/user/view.php";
	}

	// jika halaman konten yang dipilih form user, panggil file form user
	elseif ($_GET['module'] == 'form_user') {
		include "modules/user/form.php";
	}
	// -----------------------------------------------------------------------------

	// jika halaman konten yang dipilih password, panggil file view password
	elseif ($_GET['module'] == 'password') {
		include "modules/password/view.php";
	}
}
?>
