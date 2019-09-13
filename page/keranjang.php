<?php 
	include("inc/koneksi.php");
	error_reporting(0);
	session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
		<link href="css/keranjang.css" type="text/css" rel="stylesheet">
		<title></title>
</head>
<body>
<div class="row-conten">
	<div class="keranjang">
			<h1>Data barang dalam keranjang anda</h1>
			<table cellspacing="0" border="0" width="70%" align="center" cellpadding="6">
				<tr>
					<th>No</th>
					<th>Foto</th>
					<th>Nama</th>
					<th>Jumlah</th>
					<th>Harga</th>
					<th>Subtotal</th>
					<th>Pilihan</th>
				</tr>
				<?php
										$sid = session_id();
										$no = 1;
										$sql = mysqli_query($koneksi,"SELECT * FROM keranjang, tb_barang where id_session='$sid' AND keranjang.id_brg=tb_barang.id_brg");
										$hitung = mysqli_num_rows($sql);
										if ($hitung < 1){
										echo"<script>window.alert('Keranjang belanja kosong....');
										window.location=('index.php')</script>";
								}
											while($za=mysqli_fetch_array($sql)){
											$subtotal=$za['qty'] * $za['harga'];
											$total=$total + $subtotal;
				?>
				<tr>
					<td><?php echo $no++ ?></td>
					<td><img width="40px" height="40px" src="img-brg/<?php echo $za['foto']; ?>"></td>
					<td><?php echo $za['nama']; ?></td>
					<td><?php echo $za['qty']; ?></td>
					<td>Rp.<?php echo $za['harga']; ?></td>
					<td>Rp.<?php echo number_format($subtotal); ?></td>
					<td><a class="hapus" onclick="return confirm('anda akan menghapusnya ?')" href="inc/input.php?input=delete&id=<?php echo $za['id_keranjang']; ?>">Hapus</a></td>
				
				</tr>
				<?php 
			}
				 ?>
				<tr>
					<td colspan="5">Jumlah harga beli</td>	<td colspan="2">Rp.<?php echo number_format($total); ?></td>
				</tr>
				<tr>
					<td colspan="7"><center><a href="index.php" id="beli">Belanja lagi</a>|<a href="?page=order" id="beli">Beli</a></center></td>
				</tr>
				
			</table>

	</div>		
</div>
</body>
</html>