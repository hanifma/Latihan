<?php
	$host="localhost";
	$user="root";
	$password="";

	$email=$_POST ['email'];
	$passwd=$_POST ['passwd'];
	$retypee=$_POST ['retypee'];

	echo"<table><tr><td>Email</td><td>:</td><td>$email</td></tr>";
	echo"<tr><td>Password</td><td>:</td><td>$passwd</td></tr>";
	echo"<tr><td>Retype</td><td>:</td><td>$retypee</td></tr></table>";

	if($email)
	{
		$conn=mysqli_connect($host,$user,$password);
		mysqli_select_db($conn,'latihan');
		$sql="insert into tlatihan values('$email','$passwd')";
		$hasil=mysqli_query($conn,$sql);
		echo "Berhasil Disimpan";
	}
	else{
		echo "Gagal Disimpan";
	}
?>