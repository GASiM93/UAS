<!DOCTYPE html>
<html>
<head>
	<title>Data Covid</title>
</head>
<body>

	
	<p><a href="index.php">Beranda</a>
	
	<h3>Edit Data Covid</h3>
	
	<?php
	//proses mengambil data ke database untuk ditampilkan di form edit berdasarkan siswa_id yg didapatkan dari GET id -> edit.php?id=siswa_id
	
	//include atau memasukkan file koneksi ke database
	include('koneksi.php');
	
	//melakukan query ke database dg SELECT table siswa dengan kondisi WHERE siswa_id = '$id'
	$show = mysqli_query($koneksi, "SELECT * FROM pasien_covid");
	
	?>
	
	<form action="edit-proses.php" method="post">
    <table align="center" border="0" cellpadding="0" cellspacing="0">
<tr align="center">
<td><h3>Input Data Pemantauan Covid-19<br></h3><td>
</tr>


<table width="450" border="0" cellpadding="0" cellspacing="1" align="center">
<td>Nama Mahasiswa	</td>
<td><input type=”text” name="nama" width=”75" value=""/></td>
</tr>
<tr>
<td>Nim </td>
<td><input type=”text” name="nim" width=”75" value="" /></td>
</tr>
<td>Nama Wilayah : </td>
<td>
<select name="wilayah" >
<option value="">- Pilih wilayah -</option>
<option value="DKI Jakarta">DKI JAKARTA</option>
<option value="Jawa Barat">JAWA BARAT</option>
<option value="Banten">BANTEN</option>
<option value="Jawa Tengah">JAWA TENGAH</option>
</select></td>

<tr>
<td>Jumlah Positif: </td>
<td><input type=”text” name="positif" width=”75" ></td>
</tr>
<tr>
<td>Jumlah Dirawat : </td>
<td><input type=”text” name="dirawat" width=”75" ></td>
</tr>
<tr>
<td>Jumlah Sembuh : </td>
<td><input type=”text” name="sembuh" width=”75" ></td>
</tr>
<tr>
<td>Jumlah Meninggal : </td>
<td><input type=”text” name="meninggal" width=”75" ></td>
</tr>
			<tr>
				<td>&nbsp;</td>
				<td></td>
				<td><input type="submit" name="simpan" value="simpan"></td>
			</tr>
		</table>
	</form>
</body>
</html>