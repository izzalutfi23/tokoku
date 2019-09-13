<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
		$id_produk = $_GET['id_brg'];
		$q = mysqli_query($koneksi,"SELECT * FROM tb_barang WHERE id_brg='$id_produk'");
		while($data = mysqli_fetch_array($q)){
	 ?>
	<div class="detail">
		<div class="row-conten">
			
				<div class="left-detail">
					<h4>Bagaimana berbelanja di tokoku ?</h4>
					<p>Untuk berbelanja di tokoku ini , anda harus memiliki user dari tokoku. Jika anda belum memilikinya, anda bisa langsung mendaftarkan diri anda. Silahkan klik DAFTAR. </p>
					<p>
						Lalu isikan sesuai dengan data anda , dan pastikan data tersebut benar.Nah sekarang anda telah terdaftar di tokoku sebagai PELANGGAN.

					</p>
					<p>
						Silahkan Log in dengan username dan password tadi yang anda buat. lalu silahkan anda telah bisa membeli barang . dengan memilih barang dan silahkan memilih meode pembayaran .
					</p>	
				</div>

				<div class="middle-detail">
					<h2><?php echo $data['nama']; ?> </h2>
					<span class="harga-detail">Rp.<?php echo number_format($data['harga']); ?></span>
					 	<form method="post">
					 	<input name="fkeranjang" type="submit" class="btn-tm-ker" value="Tambah ke keranjang">
					 	</form>
					 <?php 

					 	if($_POST['fkeranjang']){

					 	if($_SESSION['username']==""){
					 		?>
					 			<script type="text/javascript">
					 				alert('Anda harus log in dulu !');
					 			</script>
					 		<?php
					 	}
					 	else {
					 		?>
					 			<script type="text/javascript">
					 				document.location.href="inc/input.php?input=add&id=<?php echo $id_produk ?>";
					 			</script>
					 		<?php
					 	}
					  	}
					  ?>

				</div>
				<div class="img-detail">
					<img src="img-brg/<?php echo $data['foto']; ?>">
				</div>
		</div>
	</div>
	<?php } ?>
</body>
</html>