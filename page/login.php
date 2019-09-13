
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="login">
	<div class="row">

		<div class="panel">
			<h2 class="h2">Login </h2>
				<p class="log-cap">
				Lengkapi form dengan benar dan anda benar yakin bahwa data tersebut benar !	
				</p>
				
				
				<form class="form-daftar" method="post">
					<table cellpadding="4" width="100%">
						<td><label>Username</label></td> <td><input type="text" name="username" placeholder="Username"></td>
					</tr>
					<tr>
						<td><label>Password</label></td> <td><input type="password" name="password" placeholder="Password"></td>
					</tr>
											
					<tr>
						<td></td> <td><input type="submit" class="btn btn-success" name="flogin" value="Masuk"><input type="reset" name="Bersihkan" class="btn btn-danger"></td>
					</tr>

					</table>
					
				</form>

				<?php 
					if(isset($_POST['flogin'])){
						$username=$_POST['username'];
						$password=$_POST['password'];
						$qlog=mysqli_query($koneksi,"select * from tb_pelanggan where username='$username' and password=md5('$password')");
						$row=mysqli_num_rows($qlog);
						$data=mysqli_fetch_array($qlog);
						$level=$data['typeuser'];
						if($row==1){
							$_SESSION['username']=$username;
							$_SESSION['type']=$level;
							if($level=="admin"){
								header("location:admin/index.php");
							}
							else if($level=="pelanggan"){
								header("location:index.php");
							}
						}
						else{
							?>
								<script type="text/javascript">
									alert('Gagal Login !');
								</script>
							<?php
						}
					}
					
				 ?>

		</div>
	</div>
	</div>
</body>
</html>