<?php
include "../koneksi.php"; 

    $sqllist = "SELECT * FROM tb_pengguna ORDER BY id_pengguna ASC";
	$result = $conn->query($sqllist);

	if ($result->num_rows >0) {
		 // output data of each row
		 while($row[] = $result->fetch_assoc()) {
			 $tem = $row;
			 $json = json_encode($tem);	 
		 }		 
	} else {
		 echo "kosong";
	}		
	echo $json;
	mysqli_close($conn)
?>