<!doctype html>
<html>
<head>
	<title>Kalkulator Sederhana Dengan PHP</title>
</head>
<body background="images.jpg">
<form name="form" method ="post" action = "hitung_kalkulator.php">
<tr>
    <font color="#0000FF">
    <h1><center>
			<p>KALKULATOR</p>
		</center>
	</h1>
	</font>
        <center>
              <table width="259" border="1" bgcolor="#333333">
	<tr><td colspan="5"><center>
	<table width="260" border=3 bgcolor="#FFFFFF">
	<tr><td>Nilai Pertama:</td>
        <td><input size="16" name="bil1" type="text" /></td></tr>
	<tr><td>Niilai Kedua:</td>
        <td><input size="16" name="bil2" type="text" /></td></tr>
	<tr><td>Hasil :</td>
        <td><input size="16" name="bil3" type="text" value="<?php if (isset($_GET['bil3'])) echo $_GET['bil3']?>" /></td></tr>
	</table></center></td></tr>
	<center>
		<tr>
                  <td width="31"><input value="+"  type="submit" name ="tambah" /></td>
                  <td width="27"><input value="-"  type="submit" name = "kurang" /></td>
                  <td width="31"><input value="*"  type="submit" name = "kali" /></td>
                  <td width="27"><input value="/"  type="submit" name = "bagi" /></td>
                  <td width="94"><input value="Bersihkan" type="submit" name = "input" /></td>
        </tr>
	</center>
</table>
</center>
</form></body></html>
