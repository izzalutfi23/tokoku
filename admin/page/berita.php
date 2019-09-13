<?php 
	include("../inc/koneksi.php");
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="caption-menu">Home > <small>Berita</small></div>
	<h1>Halaman Berita Untuk Pelanggan</h1>
	<a class="btn-default" href="#tambah">Inputkan berita ke pelanggan</a>
		<!--tambah berita-->
			<div class="add" id="tambah">
				<div>
					<div class="add-header">
						<div class="add-header-font">Tambah Berita</div>
					</div>
					<form method="post" action="">
					<table class="ber">
						<tr>
							<td width="30%"><div class="add-judul">Judul Berita</div></td>
							<td><input type="text" name="judul"></td>
						</tr>
						<tr>
							<td width="30%"><div class="add-judul">Isi Berita</div></td>
							<td><textarea name="isi"></textarea></td>
						</tr>
						<input type="hidden" name="tgl" value="<?php echo date('y-m-d'); ?>">
							
						<tr>
							<td colspan="2">
							<a href="#"><div class="btn-add-tutup">Tutup</div></a>
							<input type="submit" name="tam" class="btn-add" value="Tambah">
							</td>
						</tr>
					</table>
					</form>
					<font color="#FFF">a</font>
				</div>
			</div>
			<?php 
				if(isset($_POST['tam'])){
					$qadd=mysqli_query($koneksi,"insert into tb_berita (judul,isi,tgl) VALUE ('$_POST[judul]','$_POST[isi]','$_POST[tgl]')");
					if($qadd){
						echo '
							<meta http-equiv="refresh" content="0;index.php?page=berita">
						';
					}
				}
			 ?>
		<!---end tambah berita-->
		<table width="100%" class="tb" cellpadding="4" cellspacing="0" >
			<tr>
				<th width="6%">No</th>
				<th width="15%">Judul Berita</th>
				<th>Isi Berita </th>
				<th width="10%">Tgl input</th>
				<th width="15%">pilihan</th>
			</tr>
			<?php 
				$no=1;
				$qtam=mysqli_query($koneksi,"select * from tb_berita");
				while($r=mysqli_fetch_array($qtam)){
			 ?>
			<tr bgcolor="<?php if($no%2){echo "#F8F8F8";} ?>">
				<td align="center"><font face="Arial" size="2"><?php echo $no++ ?></font></td>
				<td><font face="Arial" size="2"><?php echo $r['judul']; ?></font></td>
				<td><font face="Arial" size="2"><?php echo substr($r['isi'], 0,100); ?>..</font></td>
				<td><font face="Arial" size="2"><?php echo $r['tgl']; ?></font></td>
				<td><a href="#dele<?php echo $r['id_berita']; ?>"><div class="btn-trash">Hapus</div></a></td>
			</tr>
					<div class="del" id="dele<?php echo $r['id_berita']; ?>">
                        <div>
                        <div class="head">
                        	<div class="tul">Hapus</div>
                        </div>
                        <div class="tengah">
                        	<div class="atten">Data dengan judul <i><?php echo $r['judul']; ?></i> akan dihapus..!</div>
                        </div>
                        
                        <div class="bat">
                        	<a href="#tutup"><div class="hap-font">Batal</div></a>
                        </div>
                        <div class="hap">
                        	<?php echo "<a href='../inc/aksi.php?proses=hapus_berita&id_berita=$r[id_berita]'><div class='hap-font'>Hapus</div></a>" ?>
                        </div>
                        <div style="clear:both">
                        </div>
                    </div>
			<?php 
		}
			 ?>
		</table>
</body>
</html>