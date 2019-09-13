<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
		<div class="daftar">
	<div class="row">
		<div class="panel">
			<h2 class="h2">Pendaftaran pelanggan</h2>
				<p class="log-cap">	
								Lengkapi form dengan benar dan anda benar yakin bahwa data tersebut benar !
				
				</p>
				
				<form class="form-daftar" method="post">
					<table cellpadding="4" width="100%">
					<tr>
						<td width="20%"><label>Nama pelanggan</label></td> <td><input type="text" name="nama" placeholder="Nama anda"></td>
					</tr>
					<tr>
						<td><label>Alamat</label></td> <td><textarea placeholder="alamat lengkap" name="alamat" rows="5"></textarea></td>
					</tr>
					<tr>
						<td><label>No Telp</label></td> <td><input type="text" name="no_telp" placeholder="telp"></td>
					</tr>
					<tr>
						<td><label>E-mail</label></td> <td><input type="text" name="email" placeholder="E-mail pelanggan"></td>
					</tr>
					
					<tr>
						<td><label>User TOKOKU</label></td> <td><input type="text" name="username" placeholder="Username"></td>
					</tr>
					<tr>
						<td><label>Password</label></td> <td><input type="password" name="password" placeholder="Password">
											<input type="hidden" name="typeuser" value="pelanggan">
						</td>
					</tr>
					<tr>
						<td></td> <td><input type="submit" class="btn btn-success" name="daftar" value="Daftar"><input type="reset" name="Bersihkan" class="btn btn-danger"></td>
					</tr>

					</table>
					<?php 
						if(isset($_POST['daftar'])){
							$qtambah=mysqli_query($koneksi,"insert into tb_pelanggan (nama,alamat,no_telp,email,username,password,typeuser) VALUES ('$_POST[nama]','$_POST[alamat]','$_POST[no_telp]','$_POST[email]','$_POST[username]',MD5('$_POST[password]'),'$_POST[typeuser]')");
							if($qtambah){
						 
					}
						}
					 ?>
				</form>
				 <div class="modal" id="open">
				 	<div>
				 		<a href="#">close</a>
				 	</div>
				 </div>
		</div>
	</div>	
	</div>
</body>
</html>