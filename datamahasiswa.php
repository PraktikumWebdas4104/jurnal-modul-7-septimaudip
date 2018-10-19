<body bgcolor="#7FFFD4">
<h1>CARI DATA MAHASISWA</h1><hr>
<form method="POST" enctype="multipart/form-data">
	<table>
		<tr>
			<td>CARI</td>
			<td>:</td>
			<td><input type="text" name="nim" placeholder="ketik NIM ...."></td>
			<td><input type="submit" name="cari" value="CARI"></td>
		</tr>
	</table>
</form>

<?php 
	if (isset($_POST['cari'])) {
		include 'koneksi.php';
		$nim=$_POST['nim'];

		$query = mysqli_query($koneksi,"SELECT*FROM datamhs2 WHERE nim ='".$nim."'");
		$row1 = mysqli_fetch_array($query);

		echo "<table border=1>
				<tr>
					<th>Nim</th>
					<th>Nama</th>
					<th>Jenis Kelamin</th>
					<th>Program Studi</th>
					<th>Fakultas</th>
					<th>Alamat</th>
					<th>Motto Hidup</th>
					<th>Action</th>
				</tr>";	
		foreach ($query as $row) {
			echo "<tr>
					<td>$row[nim]</td>
					<td>$row[nama]</td>
					<td>$row[gender]</td>
					<td>$row[prodi]</td>
					<td>$row[fakultas]</td>
					<td>$row[alamat]</td>
					<td>$row[motto]</td>
					<td><button style='height:30px;background-color:#ccbbbe;'><a href='hapus.php?nim=".$row1['nim']."'>HAPUS</a></button></td>
				  </tr>
				  ";
				
		}
	}

 ?>