<?php
session_start();
include "koneksi/koneksi.php";

//var_dump($_POST); exit();
$username_login=$_POST['username'];
$password_login=MD5($_POST['password']);

if (empty($username_login)){
echo "<script>alert('Username belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=login.php'>";
}else if (empty($password_login)){
echo "<script>alert('Password belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=login.php'>";
}else{  
	
$sql = "select `id_admin` from `admin` where username='$username_login' and password='$password_login'";
//var_dump($sql); exit();
$query = mysqli_query($koneksi, $sql);
$jumlah = mysqli_num_rows($query);
if ($jumlah > 0) {
		while($data = mysqli_fetch_row($query)){
		$_SESSION['id_admin']= $data[0];
		header("location:admin/index.php");
		}
} else{
echo "<script>alert('Username atau Password salah')</script>";
echo "<meta http-equiv='refresh' content='1 url=login.php'>";
}
}

?>