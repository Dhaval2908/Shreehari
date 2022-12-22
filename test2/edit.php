<?php
include('db.php');

$sno = $_GET['sno'];

//Fetching privious image to update
if(isset($_GET['sno'])){
    $edit_sno = $_GET['sno'];
    $edit_query = "SELECT * FROM data WHERE SNO = $edit_sno";
    $edit_query_run = mysqli_query($con, $edit_query);
    if(mysqli_num_rows($edit_query_run) > 0){
        $edit_row = mysqli_fetch_array($edit_query_run);
      
        
     
    }
    else{
        // header('location: index.php');
        echo "Error1";
    }
}
else{
    // header("location: index.php");
    echo "Error2";
}

//Data Updating
if(isset($_POST['submit']))
{
	$id = $_POST['id'];
    $sno = $_POST['sno'];
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


	$update = "UPDATE data SET ID='$id', Name = '$name', Surname = '$surname', PhoneNo = '$phoneno',Kamar='$kamar',
    Sit = '$sit', Length = '$length',Moli='$moli',Ghutan = '$ghutan', Galo = '$galo',Jhang = '$jhang',Length_s='$length_s',
    Chest_s = '$chest_s', Pet_s = '$pet_s',Sit_s='$sit_s',shoulder_s = '$shoulder_s', Bay_s = '$bay_s',Coler_s='$coler_s',Front_s = '$front_s',
    Text_s = '$text_s',Text_p='$text_p'     WHERE SNO='$sno' ";
	$run_update = mysqli_query($con,$update);

	if($run_update){
           move_uploaded_file($_FILES['image']['tmp_name'], $target);
           echo "<script>
            alert('Success! Data has been successfully updated!');
            window.location.href='index.php';
            </script>";
	}else{
		echo "Data not update";
	}
}

?>
