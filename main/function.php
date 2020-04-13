<?php
$conn = mysqli_connect("localhost", "root", "", "");
//fungsi hapus
function hapus($id) {
	global $conn;
	mysqli_query($conn,"DELETE FROM sales WHERE transaction_id= :id");
			return mysqli_affected_rows($conn);
}

?>