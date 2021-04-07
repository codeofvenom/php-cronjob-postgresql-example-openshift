<?php 
	include "koneksi.php";
	$sql="UPDATE accounts SET kode=2 WHERE user_id=1";
	$result = pg_query($connection, $sql) or die('Query failed: ' . pg_last_error());

?>
