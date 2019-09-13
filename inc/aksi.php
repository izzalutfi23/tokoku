<?php 
	include("koneksi.php");
	session_start();
	@$proses=$_GET['proses'];
	if($proses=='hapus_berita'){
		mysqli_query($koneksi,"delete from tb_berita where id_berita='$_GET[id_berita]'");
		header("location:../admin/index.php?page=berita");
	}
	else if($proses=='add_bgg'){
		$lokasi_file	=$_FILES['foto']['tmp_name'];
		$tipe_file		=$_FILES['foto']['type'];
		$nama_file		=$_FILES['foto']['name'];
		move_uploaded_file($lokasi_file, "../img-brg/$nama_file");
		mysqli_query($koneksi,"insert into tb_barang (nama,harga,foto,id_cat,detail) VALUES ('$_POST[nama]','$_POST[harga]','$nama_file','$_POST[id_cat]','$_POST[detail]')");
		header("location:../admin/index.php?page=barang");
	}
	else if($proses=='hapus_brg'){
		mysqli_query($koneksi,"delete from tb_barang where id_brg='$_GET[id_brg]'");
		header("location:../admin/index.php?page=barang");
	}
	else if($proses=='add_cat'){
		mysqli_query($koneksi,"insert into tb_kategori (nama_cat) VALUES ('$_POST[nama_cat]')")or die(mysqli_error());
		header("location:../admin/index.php?page=barang");
	}
	else if($proses=='edit_bar'){
		$lokasi_file	=$_FILES['foto']['tmp_name'];
		$tipe_file		=$_FILES['foto']['type'];
		$nama_file		=$_FILES['foto']['name'];
		move_uploaded_file($lokasi_file, "../img-brg/$nama_file");
		if(empty($lokasi_file)){
			mysqli_query($koneksi,"update tb_barang set nama='$_POST[nama]',harga='$_POST[harga]',detail='$_POST[detail]' where id_brg='$_POST[id_brg]'");
		}
		else{
			mysqli_query($koneksi,"update tb_barang set nama='$_POST[nama]',harga='$_POST[harga]',foto='$nama_file',detail='$_POST[detail]' where id_brg='$_POST[id_brg]'");
		}
		header("location:../admin/index.php?page=barang");
	}
	else if($proses=='hapus_pembelian'){
		mysqli_query($koneksi,"delete from tb_beli where id='$_GET[id]'");
		header("location:../admin/index.php?page=pembelian");
	}
 ?>