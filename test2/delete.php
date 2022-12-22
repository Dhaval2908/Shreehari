<?php

include('db.php');
$sno = $_GET['sno'];

$delete = "DELETE FROM data WHERE SNO = '$sno'";
$run_data = mysqli_query($con,$delete);

if($run_data){
	// echo "Delete success";
	header('location:index.php');
}else{
	echo "Donot Delete";
}


?>