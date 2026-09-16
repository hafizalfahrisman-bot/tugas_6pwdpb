<html>
<head>
<title>Tiket Online Jakarta - Malaysia</title>
</head>
<body>

<table border="1" cellpadding="20" cellspacing="0" width="600" style="border-color:blue;">
<tr>
<td>

<b>TIKET ONLINE JAKARTA - MALAYSIA</b>
<br><br><br>

<form method="post" action="proses.php">
<table cellpadding="5">
	<tr>
		<td>Nama</td>
		<td><input type="text" name="nama"></td>
	</tr>
	<tr>
		<td>Pilih Kode Pesawat</td>
		<td>
			<select name="kode">
				<option value="GRD">GRD</option>
				<option value="MPT">MPT</option>
				<option value="BTV">BTV</option>
			</select>
		</td>
	</tr>
	<tr>
		<td valign="top">Pilih Kelas</td>
		<td>
			<input type="radio" name="kelas" value="Eksekutif" checked>Eksekutif<br>
			<input type="radio" name="kelas" value="Bisnis">Bisnis<br>
			<input type="radio" name="kelas" value="Ekonomi">Ekonomi
		</td>
	</tr>
	<tr>
		<td>Jumlah Tiket</td>
		<td>
			<select name="jumlah">
			<?php
			for($i=1; $i<=10; $i++){
				echo "<option value='$i'>$i</option>";
			}
			?>
			</select>
		</td>
	</tr>
</table>
<br>
<input type="submit" value="SIMPAN">
<input type="reset" value="BATAL">
</form>

</td>
</tr>
</table>

</body>
</html>
