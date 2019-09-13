<?php 
	include("inc/koneksi.php");
	session_start();
	@$user=$_SESSION['username'];
	$quser=mysqli_query($koneksi,"select * from tb_pelanggan where username='$user'");
	$us=mysqli_fetch_array($quser);
	$nama=$us['nama'];
 ?>
<!DOCTYPE html>
<html>
<head>	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script type="text/javascript" src="js/js.js"></script>
	<link href="css/index.css" type="text/css" rel="stylesheet">
	<title>TOKOKU.com</title>
</head>
<body>
	<a name="atas"></a>
	<div class="top">
		<div class="row">
			<span class="tgl"><?php echo date('D,d-M-Y'); ?></span>
			<ul class="btn-top">
			<?php 
				if(@$_SESSION['username']==""){
					echo "
						<li><a href='#'>Login</a></li>
						<li><a href='#'>Daftar</a></li>
						<li><a href='#'>Bantuan</a></li>
					";
				}
				else{
					echo "<div class='font-user'>Welcome <font color='#8BCB7F'>$nama</font></div>";
				}
			 ?>
				
			</ul>
		</div>
	</div>
	<div class="nav-top">
		
		<div class="row">
			<a href="index.php">
				<span class="heading"><h4><font color="#90F8A8">TOKO</font><font color="#F5C489">ku</font><i class="com"><small>.com</small></i></h4>
					<p>Situs jual beli aman, mudah dan sederhana.</p> 
				</span>
			</a>
			
			<form class="form-search" method="post">
				
				<input type="text" required name="inputan" placeholder="Cari barang anda di sini...">
				<input type="submit" name="fcari" value="cari barang" class="">
				
			</form>

				

			<div class="btn-group">	
				<?php 
					if(@$_SESSION['username']==""){
						echo "<a href='?page=login' class='btn btn-success'>Login <small>(punya akun)</small></a>
				<a href='?page=daftar' class='btn btn-danger'>Daftar <small>(belum punya akun)</small> </a>";
					}
					else{
						?>
						<div class="tombol-menu">
								<div></div>
								<div></div>
								<div></div>
						</div>
						<?php 
							$qkera=mysqli_query($koneksi,"SELECT * FROM keranjang");
							$ju=mysqli_num_rows($qkera);
						 ?>
						<div class="menu-pelanggan">
							
							<a class="btn-berita" href='?page=profil'>Profil</a>
							<a class="btn-berita" href='?page=berita'>Berita Terbaru</a>
							<a class="btn-berita" href='?page=riwayat'>Riwayat Pembelian</a>
							<a class="btn-berita" href='?page=keranjang'>Keranjang <span class='jml_ker'><?php echo $ju; ?></span></a>
							<a onclick="return confirm('anda akan keluar ?')" class='btn-logout' href='inc/logout.php'>logout</a>	
						</div>

						<?php
						}?>

						<script type="text/javascript">
							$(function(){
									$('.tombol-menu').click(function(){
										$('.menu-pelanggan').slideToggle("fast");
									});
									$('.row-conten').hover(function(){
										$('.menu-pelanggan').slideUp("slow");
									});
									$('.row').hover(function(){
										$('.menu-pelanggan').slideUp("slow");
									});
							});
						</script>
				 
			</div>
			<br>



		</div>

	</div> <!-- nav top-->

	<div class="conten">
		<?php 
			error_reporting(0);
			switch ($_GET['page']) {
				case 'daftar':
					include "page/daftar.php";
					break;
				
				case 'login':
				include "page/login.php";
				break;

				case 'detail':
				include "page/detail.php";
				break;

				case 'daftar' :
				include "page/daftar.php";
				break;	

				case 'berita' :
				include "page/berita.php";
				break;

				case 'profil' :
				include "page/profil.php";
				break;

				case 'keranjang';
				include 'page/keranjang.php';
				break;

				case 'riwayat';
				include 'page/riwayat.php';
				break;

				case 'order';
				include 'page/order.php';
				break;
				

				default:
					include "page/home.php";
					break;
			}
	 	?>
	</div>

	<div class="footer-1">
		<div class="row">
			<div class="ran-footer1">
				<span class="head-f">Belanja di TOKOKU.COM</span>
				<ul>
					<li>Mendaftar diri sebagai pelanggan</li>
					<li>Membut transaksi</li>
					<li>Metode pembayaran</li>
					<li>FAQ</li>
				</ul>	
			</div>

			<div class="ran-footer1">
				<span class="head-f">Berjualan di TOKOKU.COM</span>
				<ul>
					<li>Pembukaan toko</li>
					<li>Melisting Produk</li>
					<li>Persetujuan penjual</li>
					<li>Affiliate program</li>
				</ul>	
			</div>

			<div class="ran-footer1">
				<span class="head-f">Informasi Belanja</span>
				<ul>
					<li>Ketentuan dan kebijaksanaan</li>
					<li>kebijakan privasi</li>
					<li>Syarat</li>
					<li>Pengembalian barang</li>
				</ul>	
			</div>

			<div class="ran-footer1">
				<span class="head-f">Layanan Pelanggan</span>
				<ul>
					<li>089 507 359 899</li>
					<li>@tokoku</li>
				</ul>	
			</div>

			<div class="ran-footer1">
				<span class="head-f">Daftar Isi</span>
				<ul>
					<li>Login</li>
					<li>Daftar</li>
					<li>Keranjang</li>
				</ul>	
			</div>

		</div>
	</div>

	<div class="temukan">
		<div class="row">
		<span>Temukan kami di : 
			<a class="icon-temukan" href="#">f</a>
			<a class="icon-temukan" href="#">t</a>
			<a class="icon-temukan" href="#">In</a>	
		</span>
		</div>
	</div>

	<div class="footer-2">
		<div class="row">
			<span class="isi-footer2">Copy rigth 2017, UFA. www.smktiufa.sch.id</span>
		</div>
	</div>

	<a href="#atas"><div class="btn-up">
	^
	</div></a>

</body>
</html>

<script type="text/javascript">
	// sticky menu
	$(document).ready(function() {
var stickyNavTop = $('.nav-top').offset().top;
 
var stickyNav = function(){
var scrollTop = $(window).scrollTop();
      
if (scrollTop > stickyNavTop) { 
    $('.nav-top').addClass('sticky');
} else {
    $('.nav-top').removeClass('sticky'); 
}
};
 
stickyNav();
 
$(window).scroll(function() {
  stickyNav();
});
});
// end sticky menu


// scrolling moot
$(function() {
  $('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 2000);
        return false;
      }
    }
  });
});	
</script>