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
			<h1>Data Riwayat Pembelian barang</h1>
			<table cellspacing="0" border="0" width="80%" align="center" cellpadding="6">
				<tr>
					<th>No</th>
					<th>nama barang</th>
					<th>Tanggal</th>
					<th>Harga barang</th>
					
				</tr>
				<?php 
					$no=1;
					$q = mysqli_query($koneksi,"SELECT * FROM tb_beli, tb_barang WHERE tb_beli.id_brg=tb_barang.id_brg");
					while($d =mysqli_fetch_array($q)){
				 ?>	
				<tr bgcolor="<?php if($no%2){echo"#E7F2E8";} ?>">
					<td><?php echo $no++; ?></td>
					<td><?php echo $d['nama']; ?></td>
					<td><?php echo $d['tanggal']; ?></td>
					<td><?php echo $d['harga']; ?></td>

				</tr>			
				<?php } ?>
			</table>

	</div>		
</div>
</body>
</html>