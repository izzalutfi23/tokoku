<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="row-conten">
		<div class="profil">
			<br>
				<h2>Profil Anda</h2>
			<div class="left-profil">
					<h1><?php echo $us['nama']; ?></h1>
				<table cellpadding="6">
					
					<tr>
						<td>Telp </td> <td>:</td> <td><?php echo $us['no_telp']; ?></td>
					</tr>
					<tr>
						<td>E-mail </td> <td>:</td> <td><?php echo $us['email']; ?></td>
					</tr>
					<tr>
						<td>Alamat anda </td> <td>:</td> <td><?php echo $us['alamat']; ?></td>
					</tr>
				</table>
					<button id="btnedit">Edit informasi tentang saya</button>
						<button id="batal">Batal edit data</button>
						
					
						<fieldset class="editinfo">
							<table>
							<form class="edit-form" method="post">
								
							<tr>
								<td><label>No telp</label></td>	<td><input name="telp" type="text" value="<?php echo $us['no_telp']; ?>"></td>
							</tr>
							<tr>
								<td><label>E-mail</label></td>	<td><input name="email" type="text" value="<?php echo $us['email']; ?>"></td>
							</tr>
							<tr>
								<td><label>Alamat</label></td>	<td><textarea name="alamat"><?php echo $us['alamat']; ?></textarea></td>
							</tr>
							<tr>
								<td><input type="submit" name="fedit" value="Simpan data"></td> <td></td>
							</tr>
							</form>

								<?php 
									if($_POST['fedit']){
										$telp = $_POST['telp'];
										$email = $_POST['email'];
										$alamat = $_POST['alamat'];
										mysqli_query($koneksi,"UPDATE tb_pelanggan SET no_telp='$telp',email='$email',alamat='$alamat' WHERE id_pelanggan='$us[id_pelanggan]'");
										?>
											<script type="text/javascript">
												alert('Data berhasil di rubah !');
												document.location.href="index.php?page=profil";
											</script>
										<?php
									}
								 ?>

							</table>
						</fieldset>
					

					<script type="text/javascript">
						$(function(){
							$('#btnedit').click(function(){
								$(".editinfo").slideDown(500);
								$("#batal").slideDown(500);
							});
							$('#batal').click(function(){
								$(".editinfo").slideUp("fast");
								$("#batal").slideUp("fast");
								});
						});
						
						
					</script>

			</div>
			
			<div class="right-profil">
				<h4>Edit Username dan password anda !</h4>

				<fieldset>
					<legend>Edit username</legend>
					<table>
						<form class="edit-form" method="post">
							
						<tr>
							<td><input type="text" value="<?php echo $us['username']; ?>"></td>
						</tr>
						<tr>
							<td><input type="text" name="user_baru" placeholder="username baru"></td>
						</tr>
						<tr>
								<td><input type="password" name="pass" placeholder="Masukkan password anda saat ini"></td>
							</tr>
						<tr>
							<td><input type="submit" name="fuser" value="Simpan username"></td>
						</tr>

					</form>
						<?php 
							if($_POST['fuser']){
									
								if(md5($_POST['pass']) != $us['password']){
									?>
										<script type="text/javascript">
											alert('Maaf password salah !');
										</script>
									<?php
								}
								else if(md5($_POST['pass']) == $us['password']){
									mysqli_query($koneksi,"UPDATE tb_pelanggan SET username='$_POST[user_baru]' WHERE id_pelanggan='$us[id_pelanggan]'");
									?>
										<script type="text/javascript">
										alert('Username berhasil dirubah, Silahkan login kembali !');
										document.location.href="inc/logout.php";
										</script>
									<?php
								}
							}
						 ?>
					</table>
				</fieldset>
				<br>
				<fieldset>
					<legend>Edit Password</legend>
					<table>
						<form class="edit-form" method="post">
							<tr>
								<td><input type="password" name="pass_awal" placeholder="Masukkan password anda saat ini"></td>
							</tr>
							<tr>
								<td><input minlength="8" type="password" name="passnew1" placeholder="password baru"></td>
							</tr>
							<tr>
								<td><input minlength="8" type="password" name="passnew2" placeholder="Ulangi password baru"></td>
							</tr>
							<tr>
								<td><input type="submit" name="fpass" value="Simpan password"></td>
							</tr>
						</form>
						<?php 
							if($_POST['fpass']){
									
								if(md5($_POST['pass_awal']) != $us['password']){
									?>
										<script type="text/javascript">
											alert('Maaf password saat ini yang anda masukkan salah !');
										</script>
									<?php
								}
								else if(md5($_POST['pass_awal']) == $us['password']){
									
									if(md5($_POST['passnew1']) != md5($_POST['passnew2'])){
										?>
										<script type="text/javascript">
											alert('Maaf password baru yang anda ulangi tidak cocok !');
										</script>
										<?php
									}
									else {
										mysqli_query($koneksi,"UPDATE tb_pelanggan SET password=md5('$_POST[passnew1]') WHERE id_pelanggan='$us[id_pelanggan]'");
									?>
										<script type="text/javascript">
										alert('Password berhasil dirubah, Silahkan login kembali !');
										document.location.href="inc/logout.php";
										</script>
									<?php		
									}	

								}
							}
						 ?>
					</table>
				</fieldset>

			</div>
		</div>
	</div>
</body>
</html>