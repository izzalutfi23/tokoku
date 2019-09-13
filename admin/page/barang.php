<?php 
	include("../inc/koneksi.php");
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<?php 
	$per_hal=4;
	$jumlah_record=mysqli_query($koneksi,"select * from tb_barang");
	$jum=mysqli_num_rows($jumlah_record);
	$halaman=ceil($jum/$per_hal);
	$page=(isset($_GET['g'])) ? $_GET['g']:1;
	$posisi=($page - 1) * $per_hal;
 ?>
<body>
	<div class="caption-menu">Home > <small>Barang</small></div>
	<h1>Halaman barang Untuk Pelanggan</h1>
	<a class="btn-default" href="#tambah">Inputkan barang ke pelanggan</a> <a class="btn-default" href="#tam">Tambah Kategori</a><div class="paging-jum-data">Jumlah Data : <?php echo  $jum ?></div>
		<!--kategori-->
			<div class="add" id="tam">
				<div>
					<div class="add-header">
						<div class="add-header-font">Tambah Kategori</div>
					</div>
					<form method="post" action="../inc/aksi.php?proses=add_cat">
					<table class="ber">
						<tr>
							<td width="30%"><div class="add-judul">Nama Kategori</div></td>
							<td><input type="text" name="nama_cat"></td>
						</tr>	
						<tr>
							<td colspan="2">
							<a href="#"><div class="btn-add-tutup">Tutup</div></a>
							<input type="submit" class="btn-add" value="Tambah">
							</td>
						</tr>
					</table>
					</form>
					<font color="#FFF">a</font>
				</div>
			</div>
		<!--end-->
		<!--tambah berita-->
			<div class="add" id="tambah">
				<div>
					<div class="add-header">
						<div class="add-header-font">Tambah Barang</div>
					</div>
					<form method="post" enctype="multipart/form-data" action="../inc/aksi.php?proses=add_bgg">
					<table class="ber">
						<tr>
							<td width="30%"><div class="add-judul">Nama Barang</div></td>
							<td><input type="text" name="nama"></td>
						</tr>
						<tr>
							<td width="30%"><div class="add-judul">Harga</div></td>
							<td><input type="text" name="harga"></td>
						</tr>
						<tr>
							<td width="30%"><div class="add-judul">Foto</div></td>
							<td><input type="file" name="foto"></td>
						</tr>
						<tr>
							<td width="30%"><div class="add-judul">Kategori</div></td>
							<td><select name="id_cat">
									<option value="1">--Pilih Kategori--</option>
									<?php 
										$sele=mysqli_query($koneksi,"select * from tb_kategori");
										while($s=mysqli_fetch_array($sele)){
									 ?>
									 <option value="<?php echo $s['id_cat']; ?>"><?php echo $s['nama_cat']; ?></option>
									 <?php 
									}
									  ?>
								</select>	
							</td>
						</tr>
						<tr>
							<td width="30%"><div class="add-judul">Detail</div></td>
							<td><textarea name="detail"></textarea></td>
						</tr>
						<tr>
							<td colspan="2">
							<a href="#"><div class="btn-add-tutup">Tutup</div></a>
							<input type="submit" class="btn-add" value="Tambah">
							</td>
						</tr>
					</table>
					</form>
				</div>
			</div>
		<!---end tambah berita-->
		<table width="100%" class="tb" cellpadding="4" cellspacing="0" >
			<tr>
				<th width="6%">No</th>
				<th width="19%">Nama Barang</th>
				<th width="13%"> Harga </th>
				<th width="10%">Foto</th>
				<th width="40%">Detail</th>
				<th>Pilihan</th>
			</tr>
			<?php 
				$no=1+$posisi;
				$qbar=mysqli_query($koneksi,"select * from tb_barang limit $posisi,$per_hal");
				while($b=mysqli_fetch_array($qbar)){
			 ?>
			<tr bgcolor="<?php if($no%2){echo "#F8F8F8";} ?>">
				<td align="center"><font face="Arial" size="2"><?php echo $no++ ?></font></td>
				<td><font face="Arial" size="2"><?php echo $b['nama']; ?></font></td>
				<td><font face="Arial" size="2">Rp.<?php echo $b['harga']; ?></font></td>
				<td><img name="brg" src="../img-brg/<?php echo $b['foto']; ?>"></td>
				<td><font face="Arial" size="2"><?php echo substr($b['detail'], 0,100) ?>...</font></td>
				<td><a href="#ed<?php echo $b['id_brg']; ?>"><div class="btn-edit">Edit</div></a><a href="#dele<?php echo $b['id_brg']; ?>"><div class="btn-trash">Hapus</div></a></td>
			</tr>
					<div class="del" id="dele<?php echo $b['id_brg']; ?>">
                        <div>
                        <div class="head">
                        	<div class="tul">Hapus</div>
                        </div>
                        <div class="tengah">
                        	<div class="atten">Data dengan judul <i><?php echo $b['nama']; ?></i> akan dihapus..!</div>
                        </div>
                        
                        <div class="bat">
                        	<a href="#tutup"><div class="hap-font">Batal</div></a>
                        </div>
                        <div class="hap">
                        	<?php echo "<a href='../inc/aksi.php?proses=hapus_brg&id_brg=$b[id_brg]'><div class='hap-font'>Hapus</div></a>" ?>
                        </div>
                        
                        </div>
                    </div>
                    <!--edit-->
				<div class="add" id="ed<?php echo $b['id_brg']; ?>">
				<div>
					<div class="add-header">
						<div class="add-header-font">Tambah Barang</div>
					</div>
					<form method="post" enctype="multipart/form-data" action="../inc/aksi.php?proses=edit_bar">
						<div class="kot">
							<div class="kot-left">
								<div class="add-judul">Nama Barang</div>
							</div>
							<div class="kot-right">
								<input type="hidden" name="id_brg" value="<?php echo $b['id_brg']; ?>">
								<input type="text" name="nama" value="<?php echo $b['nama']; ?>">
							</div>
							<div class="kot-left">
								<div class="add-judul">Harga</div>
							</div>
							<div class="kot-right">
								<input type="text" name="harga" value="<?php echo $b['harga']; ?>">
							</div>
							<div class="kot-left">
								<div class="add-judul">Foto</div>
							</div>
							<div class="kot-right">
								<input type="file" name="foto">
							</div>
							
							<div class="kot-left">
								<div class="add-judul">Detail</div>
							</div>
							<div class="kot-right-text">
								<textarea name="detail">
									<?php echo $b['detail']; ?>
								</textarea>
								<a href="#"><div class="btn-add-tutup">Tutup</div></a>
							<input type="submit" class="btn-add" value="Edit">
							</div>

						</div>
						<div style="clear:both">
					</form>
					<font color="#FFF">a</font>
				</div>
			</div>
			<!---end-->
			<?php 
		}
			 ?>
		</table>
		

			<div class="bottom">
		<?php 
			for($x=1;$x<=$halaman;$x++){
		 ?>
		<ul class="paging">
		 <a <?php if($x==$page){echo "class='active-paging'";} ?> href="?page=barang&g=<?php echo $x ?>">
		
			<?php echo $x; ?>
		</a>
		</ul>
		<?php 
	}
		 ?>
		 </div>
</body>
</html>