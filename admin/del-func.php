<?php 
require 'session.php';
$id = $_GET["id"];
if( hapus($id) > 0 ) {
	echo "<p>Data has been deleted</p>";
	echo header("Location: data.php");
}
function hapus($id) {
	global $conn;
	mysqli_query($conn, "DELETE FROM link WHERE id = $id");
	return mysqli_affected_rows($conn);
}
?>