<?php 
	session_start();
	if($_SESSION['username']==""){
		header("location:../index.php?page=login");
	}
 ?>

<!DOCTYPE html>
<html>
<head>
	<link href="../css/admin.css" type="text/css" rel="stylesheet">
	<title>Dashboard admin</title>
</head>
<body>
	<div class="wrap">
		<div class="nav-top">
			<a href="index.php">
				<span class="heading">
					<h4>TOKOKU<font color="#093">.COM</font></h4>
				</span>
			</a>
			
			
		<a onclick="return confirm('Anda akan keluar ?')" class="btn-logout" href="../inc/logout.php">Logout</a>
	</div>

	<div class="nav-left">
		<div class="img-admin"><span>Admin</span></div>
		<ul>	<?php 
				@$p = $_GET['page'];
		 ?>
				<a href="?page=home"><li <?php if($p=="home" || $p=="") { echo"class='active'"; }  ?> >Dashboard</li></a>	
				<a href="?page=berita"><li  <?php if($p=="berita") { echo"class='active'"; }  ?> >Berita</li></a>
				<a href="?page=barang"><li  <?php if($p=="barang") { echo"class='active'"; }  ?> >Barang</li></a>
				<a href="?page=pembelian"><li  <?php if($p=="pembelian") { echo"class='active'"; }  ?> >Pembelian</li></a>
					
		</ul>	
	</div>

	<div class="right">
		<div class="row-conten">
			<?php 
				error_reporting(0);
				switch ($_GET['page']) {
					case 'home':
							include "page/dashboard.php";
						break;
					case 'berita':
					include "page/berita.php";
					break;
					case 'pembelian':
					include "page/pembelian.php";
					break;	
					case 'barang':
					include "page/barang.php";
					break;
					default:
							include "page/dashboard.php";
						break;
				}
			 ?>
		</div>	
	</div>

	<div class="footer">
		<span>Copy Right 2017 . SMK UFA</span>
	</div>

	 <!-- nav top-->
	</div>
</body>
</html>