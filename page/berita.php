<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="berita">
		<?php 
			$qam= mysqli_query($koneksi,"SELECT * FROM tb_berita");
			$jmlah = mysqli_num_rows($qam);
			$j=$jmlah-1;
			$q = mysqli_query($koneksi,"SELECT * FROM tb_berita LIMIT $j,1");
			while($d_berita = mysqli_fetch_array($q)){

		 ?>
		<div class="row-conten">
			<h1>Berita Terbaru Dari Administrator</h1>
		
			<div class="berita-left">
				<h2><?php echo $d_berita['judul']; ?></h2>
				<p><?php echo $d_berita['isi']; ?></p>
			</div>

			<div class="berita-right">
				<h3>Rincian Berita</h3>
				
				<table>
					<tr>
						<td>Tanggal Keluar </td> <td>:</td> <td><?php echo $d_berita['tgl']; ?></td>
					</tr>

					<tr>
						<td>Judul Berita </td> <td>:</td> <td><?php echo $d_berita['judul']; ?></td>
					</tr>
					<tr>
						<td>Pemberi Berita </td> <td>:</td> <td>Admin TOKOKU</td>
					</tr>
				</table>

			</div>
			<?php
		}
			?>
			<div class="berita-lain">
				<div class="head-brg"> <span>Berita Lainya</span>	</div>
				<?php
					$qberita = mysqli_query($koneksi,"SELECT * FROM tb_berita LIMIT 0,4");
					while($blain= mysqli_fetch_array($qberita) ){
				?>

				<div class="bagi-berita">
					<span class="pengirim">Administrator</span>
					<h4 id="judul-berita"><?php echo $blain['judul']; ?></h4> <span class="tgl-berita"><?php echo $blain['tgl']; ?></span>
					<p><?php echo substr($blain['isi'], 0,100); ?>,,,,</p>
					<a class="redmi" href="#">Read More</a>
				</div>
				<?php } ?>
			</div>


		</div>
	</div>
</body>
</html>