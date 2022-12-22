<?php
//database connection
include('db.php');

//adding data to the database
if(isset($_POST['submit'])){
	$id = $_POST['id'];
	$name = $_POST['name'];
	$surname = $_POST['surname'];
	$phoneno = $_POST['phoneno'];
	$kamar = $_POST['kamar'];
	$sit = $_POST['sit'];
	$length = $_POST['length'];
	$moli = $_POST['moli'];
	$ghutan = $_POST['ghutan'];
	$galo = $_POST['galo'];
	$jhang = $_POST['jhang'];
	$length_s = $_POST['length_s'];
	$chest_s = $_POST['chest_s'];
	$pet_s = $_POST['pet_s'];
	$sit_s = $_POST['sit_s'];
	$shoulder_s = $_POST['shoulder_s'];
	$bay_s = $_POST['bay_s'];
	$coler_s = $_POST['coler_s'];
	$front_s = $_POST['front_s'];
	$text_s = $_POST['text_s'];
	$text_p = $_POST['text_p'];
	
	
	
	

	
	$insert_data = "INSERT INTO data(Name,Surname,PhoneNo,Kamar,Sit,Length,Moli,Ghutan,Galo,Jhang,Length_s,Chest_s,Pet_s,Sit_s,shoulder_s,Bay_S,Coler_s,Front_s,Text_s,Text_p,ID) VALUES 
	('$name','$surname','$phoneno','$kamar','$sit','$length','$moli','$ghutan','$galo','$jhang','$length_s','$chest_s','$pet_s','$sit_s','$shoulder_s',
	'$bay_s','$coler_s','$front_s','$text_s','$text_p','$id')";
  	$run_data = mysqli_query($con,$insert_data);

  	if($run_data){
  		header('location:index.php');
  	}else{
  		echo "Data not insert";
  	}

}

?>
