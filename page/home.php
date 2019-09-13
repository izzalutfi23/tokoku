<?php 
	include "inc/koneksi.php";
 ?>
<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript" src="js/js.js"></script>
	<title></title>
</head>
<body>	
		
 		
 		<?php 
 			$inputan= $_POST['inputan'];
 			if($_POST['fcari']){
 				?>
 			<div id="hasil-cari" class="row-conten">	
 			<div class="brg">
						<h1 class="caption-cari">Hasil Pencarian barang "<?php echo $inputan; ?>"</h1>

							<?php 
								$id_kat =$kat['id_cat'];
								$qbrg_cari = mysqli_query($koneksi,"SELECT * FROM tb_barang WHERE nama LIKE '%$inputan%' ");
								$cek = mysqli_num_rows($qbrg_cari);
									echo "<h3 class='caption-cari'> Jumalah hasil cari : ".$cek." Barang</h3>";	
								if($cek < 1){
									echo "<h2 class='caption-cari'> Maaf Barang yang anda cari tidak tersedia !</h2>";
								} else {	

								while($new = mysqli_fetch_array($qbrg_cari)){
					 		?>			
								<a href="?page=detail&id_brg=<?php echo $new['id_brg']; ?>"><div class="brg-can">
								<img src="img-brg/<?php echo $new['foto']; ?>">	
								<span><?php echo $new['nama']; ?></span> <br>
								<p class="harga">Rp.<?php echo number_format($new['harga']); ?></p>	
						</div></a>
						<?php } } ?>
			</div>	
			</div>

 				<?php
 			}
 			else {

 				?>

 		
 	<div class="row-conten">
		<div class="slide-area">
		<div class="left-slide">
			<div>
				<img src="img-brg/slide1.jpg">
			</div>
			<div>
				<img src="img-brg/slide2.png">
			</div>
			<div>
				<img src="img-brg/slideshow.png">
			</div>
		</div>
		
		<div class="rigth-slide">
			<span class="head-kategori">
			Semua kategori
			</span>	
				<ul>
					<?php 
						$q = mysqli_query($koneksi,"SELECT * FROM tb_kategori");
						while($data = mysqli_fetch_array($q)){
						?>
					<a href="#"><li><?php echo $data['nama_cat'] ?></li></a>
					<?php } ?>	
				</ul>
		</div>
		</div>

		<div class="brg">
			<div class="head-brg"> <span>Terbaru</span>	</div>
			<?php 
				$qbrg_new = mysqli_query($koneksi,"SELECT * FROM tb_barang LIMIT 15,20");
				while($new = mysqli_fetch_array($qbrg_new)){
			 ?>			
				<a href="?page=detail&id_brg=<?php echo $new['id_brg']; ?>"><div class="brg-can">
					<img src="img-brg/<?php echo $new['foto']; ?>">	
					<span><?php echo $new['nama']; ?></span> <br>
					<p class="harga">Rp.<?php echo $new['harga']; ?></p>	
				</div></a>
				<?php } ?>
		</div>

		<!-- perulangan berdasarkan kategori barang -->
		<?php 
			$qkat = mysqli_query($koneksi,"SELECT * FROM tb_kategori LIMIT 0,4");
		 	while($kat=mysqli_fetch_array($qkat)){
		 ?>
		<div class="brg">
			<div class="head-brg"> <span><?php echo $kat['nama_cat']; ?></span>	</div>
			<?php 
				$id_kat =$kat['id_cat'];
				$qbrg_new = mysqli_query($koneksi,"SELECT * FROM tb_barang WHERE id_cat='$id_kat' LIMIT 0,10");
				while($new = mysqli_fetch_array($qbrg_new)){
			 ?>			
				<a href="?page=detail&id_brg=<?php echo $new['id_brg']; ?>"><div class="brg-can">
					<img src="img-brg/<?php echo $new['foto']; ?>">	
					<span><?php echo $new['nama']; ?></span> <br>
					<p class="harga">Rp.<?php echo $new['harga']; ?></p>	
				</div></a>
				<?php } ?>
		</div>		
		<?php } ?>

	</div> 		

	<?php
 			}
 	
 		 ?>	
</body>
</html>
<script type="text/javascript">
	
	$(".left-slide > div:gt(0)").hide();
	setInterval(function() {
  	$('.left-slide > div:first')
    .fadeOut(1000)
    .next()
    .fadeIn(1000)
    .end()
    .appendTo('.left-slide');
	}, 4000);	
</script>