<?php 
	include("../inc/koneksi.php");
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<?php 
	$per_hal=6;
	$jumlah_record=mysqli_query($koneksi,"select * from tb_beli");
	$jum=mysqli_num_rows($jumlah_record);
	$halaman=ceil($jum / $per_hal);
	$page=(isset($_GET['g'])) ? $_GET['g']:1;
	$posisi=($page - 1) * $per_hal;
 ?>
<body>
	<div class="caption-menu">Home > <small>Pembelian</small></div>
	<h1>Halaman Pembelian Barang</h1>
	<div class="paging-jum-data">Jumlah Data : <?php echo  $jum ?></div>
		<table width="100%" class="tb" cellpadding="4" cellspacing="0" >
			<tr>
				<th width="6%">No</th>
				<th width="20%">Nama Pembeli</th>
				<th>Nama Barang</th>
				<th width="19%"> Email </th>
				<th width="18%">Alamat</th>
				<th width="10%">No Telp</th>
				<th>Jumlah</th>
				<th>Pilihan</th>
			</tr>
			<?php 
				$no=1+$posisi;
				$qbar=mysqli_query($koneksi,"SELECT * FROM tb_beli, tb_barang WHERE tb_beli.id_brg=tb_barang.id_brg limit $posisi,$per_hal");
				while($b=mysqli_fetch_array($qbar)){
			 ?>
			<tr bgcolor="<?php if($no%2){echo "#F8F8F8";} ?>">
				<td align="center"><font face="Arial" size="2"><?php echo $no++ ?></font></td>
				<td><font face="Arial" size="2"><?php echo $b['name']; ?></font></td>
				<td><font face="Arial" size="2"><?php echo $b['nama']; ?></font></td>
				<td><font face="Arial" size="2">Rp.<?php echo $b['email']; ?></font></td>
				<td><font face="Arial" size="2"><?php echo $b['address']; ?></font></td>
				<td><font face="Arial" size="2"><?php echo $b['phone']; ?></font></td>
				<td><font face="Arial" size="2"><?php echo $b['jumlah']; ?></font></td>
				<td><a href="#dele<?php echo $b['id']; ?>"><div class="btn-trash">Hapus</div></a></td>
			</tr>
					<div class="del" id="dele<?php echo $b['id']; ?>">
                        <div>
                        <div class="head">
                        	<div class="tul">Hapus</div>
                        </div>
                        <div class="tengah">
                        	<div class="atten">Data dengan judul <i><?php echo $b['name']; ?></i> akan dihapus..!</div>
                        </div>
                        
                        <div class="bat">
                        	<a href="#tutup"><div class="hap-font">Batal</div></a>
                        </div>
                        <div class="hap">
                        	<?php echo "<a href='../inc/aksi.php?proses=hapus_pembelian&id=$b[id]'><div class='hap-font'>Hapus</div></a>" ?>
                        </div>
                        
                        </div>
                    </div>

			<?php 
		}
			 ?>
		</table>
		

			<div class="bottom">
		<?php 
			for($x=1;$x<=$halaman;$x++){
		 ?>
		<ul class="paging">
		 <a <?php if($x==$page){echo "class='active-paging'";} ?> href="?page=pembelian&g=<?php echo $x ?>">
		
			<?php echo $x; ?>
		</a>
		</ul>
		<?php 
	}
		 ?>
		 </div>
</body>
</html>