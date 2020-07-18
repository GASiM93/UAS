<?php
$server="localhost";
$user="root";
$password="";
$db="db_covid";

$koneksi= mysqli_connect($server, $user, $password,$db);
if($koneksi) {

	echo "";
	echo "<br>";
}else{
	echo "server  tidak terkoneksi";
	echo "<br>";
}

?>