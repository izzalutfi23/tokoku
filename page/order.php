<!DOCTYPE html>
<html>
<head>
	<link href="css/order.css" type="text/css" rel="stylesheet">
	<title></title>
</head>
<body>
	<div class="row-conten">
		<div class="order">
			<h2>Pembelian barang</h2>
				<form class="order-form" action="inc/input.php?input=inputform" method="post">
				<table border="0" cellpadding="8" align="center">
					
					<tr>
						<td>Nama</td> <td>:</td> <td><input class="t" type="text" name="name" value="<?php echo $us['nama']; ?>"></td>
					</tr>
					<tr>
						<td>E-mail</td> <td>:</td> <td><input class="t" name="email" type="text" value="<?php echo $us['email']; ?>"></td>
					</tr>
					<tr>
						<td>No Telp</td> <td>:</td> <td><input class="t" type="text" name="phone" value="<?php echo $us['no_telp']; ?>"></td>
					</tr

					<tr>
						<td>Alamat</td> <td>:</td> <td><input class="t" type="text" name="address" value="<?php echo $us['alamat']; ?>"></td>
					</tr>
				</table>
				
			<fieldset>
				<legend>Barang yang akan di beli</legend>
				<table cellspacing="0" border="0" width="100%" align="center" cellpadding="6">
				<tr>
					<th>No</th>
					<th>Foto</th>
					<th>Nama</th>
					<th>Jumlah</th>
					<th>Harga</th>
					<th>Subtotal</th>
				</tr>
				<?php
										$sid = session_id();
										$no = 1;
										$sql = mysqli_query($koneksi,"SELECT * FROM keranjang, tb_barang where id_session='$sid' AND keranjang.id_brg=tb_barang.id_brg");
										$hitung = mysqli_num_rows($sql);
										if ($hitung < 1){
										echo"<script>window.alert('Cart is Empty....');
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
					<td>Rp.<?php echo number_format($za['harga']); ?></td>
					<td>Rp.<?php echo number_format($subtotal); ?></td>
				
				</tr>
				<?php 
			}
				 ?>
				<tr>
					<td colspan="4">Jumlah harga beli</td>	<td><h2 id="harga-order">Rp.<?php echo number_format($total); ?></h2></td>
				</tr>
				<tr>
					<td colspan="7"><center><input type="submit" value="beli"></center></td>
				</form>
				</tr>
				
			</table>
			</fieldset>
		</div>
	</div>
</body>
</html>