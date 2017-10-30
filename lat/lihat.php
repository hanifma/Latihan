<?php
	$koneksi=mysqli_connect("localhost","root","","lat") or die("Gagal Connect ke Server");
?>
<center>
	<table>
		<tr>
			<td>Email</td>
			<td>Passwd</td>
		</tr>

		<?php
			$sql="select * form tlatihan";
			$hasil=mysqli_query($sql,$koneksi)or die("Gagal melakukan Query");
			while ($row=mysqli_fetch_array($hasil)) 
			{
		?>
				<tr>
					<td><?php echo $row['Email']; ?></td>
					<td><?php echo $row['Passwd']; ?></td>
				</tr>
				<?php
			}
			mysqli_close($koneksi);
			?>
	</table>
</center>