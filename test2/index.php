<?php
include('db.php');

?>

<!DOCTYPE html>
<html>
<head>
	<title>Shree Hari Emporium & Menswear</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<style >
		.pent{
			width:100% !important;

		}
		</style>
</head>
<body style="background-color: #DFEBEB">

	<div class="container">
	<h2 class="text-center">Shree Hari Emporium & Menswear</h2><br><br>
	<a href="#" class="btn btn-primary"><i class="fa fa-arrow-circle-left"></i> Back</a>
	<button class="btn btn-primary" type="button" data-toggle="modal" data-target="#myModal">
  <i class="fa fa-plus"></i> Add New Customer
  </button>
  <a href="#" class="btn btn-success pull-right"><span class="glyphicon glyphicon-print"></span> Print PDF</a>
  <hr>
		<table class="table table-bordered table-striped table-hover" id="myTable">
		<thead>
			<tr>
			   <th class="text-center" scope="col">ID</th>
				<th class="text-center" scope="col">Name</th>
				<!-- <th class="text-center" scope="col">Surname</th> -->
				<th class="text-center" scope="col">PhoneNo</th>
				
				<th class="text-center" scope="col">View</th>
				<th class="text-center" scope="col">Edit</th>
				<th class="text-center" scope="col">Delete</th>
			</tr>
		</thead>
			<?php

        	$get_data = "SELECT * FROM data order by 1 desc";
        	$run_data = mysqli_query($con,$get_data);
			$i = 0;
        	while($row = mysqli_fetch_array($run_data))
        	{
				$sl = ++$i;
				$id = $row['ID'];
				$sno = $row['SNO'];
				$name = $row['Name'];
				$surname = $row['Surname'];
				$phoneno = $row['PhoneNo'];
				

        		echo "

				<tr>
				<td class='text-center'>$id</td>
				<td class='text-left'>$name   $surname</td>
				<td class='text-left'>$phoneno</td>
				
			
				<td class='text-center'>
					<span>
					<a href='#' class='btn btn-success mr-3 profile' data-toggle='modal' data-target='#view$sno' title='Prfile'><i class='fa fa-address-card-o' aria-hidden='true'></i></a>
					</span>
					
				</td>
				<td class='text-center'>
					<span>
					<a href='#' class='btn btn-warning mr-3 edituser' data-toggle='modal' data-target='#edit$sno' title='Edit'><i class='fa fa-pencil-square-o fa-lg'></i></a>

					     
					    
					</span>
					
				</td>
				<td class='text-center'>
					<span>
					
						<a href='#' class='btn btn-danger deleteuser' title='Delete'>
						     <i class='fa fa-trash-o fa-lg' data-toggle='modal' data-target='#$sno' style='' aria-hidden='true'></i>
						</a>
					</span>
					
				</td>
			</tr>


        		";
        	}

        	?>

			
			
		</table>
		<form method="post" action="export.php">
     <input type="submit" name="export" class="btn btn-success" value="Export Data" />
    </form>
	</div>


	<!---Add in modal---->

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
		<!-- <center><img src="https://codingcush.com/uploads/logo/logo_61b79976c34f5.png" width="300px" height="80px" alt=""></center> -->
        <h4 class="modal-title text-center">Add New Data</h4>
      </div>
      <div class="modal-body">
        <form action="add.php" method="POST" enctype="multipart/form-data">
			
			<!-- This is test for New Card Activate Form  -->
			<!-- This is Address with email id  -->
<div class="form-row">
<div class="form-group col-md-6">
<label for="inputEmail4"> Id</label>
<input type="text" class="form-control" name="id" placeholder="Enter Id." maxlength="12" required>
</div>
<div class="form-group col-md-6">
<label for="inputPassword4">Mobile No.</label>
<input type="phone" class="form-control" name="phoneno" placeholder="Enter 10-digit Mobile no." maxlength="10" required>
</div>
</div>


<div class="form-row">
<div class="form-group col-md-6">
<label for="firstname">First Name</label>
<input type="text" class="form-control" name="name" placeholder="Enter First Name">
</div>
<div class="form-group col-md-6">
<label for="lastname">Last Name</label>
<input type="text" class="form-control" name="surname" placeholder="Enter Last Name">
</div>
</div>

<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
	<!-- <center><img src="https://codingcush.com/uploads/logo/logo_61b79976c34f5.png" width="300px" height="80px" alt=""></center> -->
	<h4 class="modal-title text-center">Shirt Measurement</h4>
</div>
<div class="form-row">
<div class="form-group col-md-6">

<label for="heights">Length</label>
<input type="text" class="form-control" name="length_s" placeholder="Enter measurement">
</div>
<div class="form-group col-md-6">
<label for="widths">Chest</label>
<input type="text" class="form-control" name="chest_s" placeholder="Enter measurement ">
</div>
<div class="form-group col-md-6">
<label for="widths">Pet</label>
<input type="text" class="form-control" name="pet_s" placeholder="Enter measurement ">
</div>
<div class="form-group col-md-6">
<label for="widths">Sit</label>
<input type="text" class="form-control" name="sit_s" placeholder="Enter measurement ">
</div>
<div class="form-group col-md-6">
<label for="widths">Front</label>
<input type="text" class="form-control" name="front_s" placeholder="Enter measurement ">
</div>
<div class="form-group col-md-6">
<label for="widths">Shoulder</label>
<input type="text" class="form-control" name="shoulder_s" placeholder="Enter measurement ">
</div>
<div class="form-group col-md-6">
<label for="widths">Bay</label>
<input type="text" class="form-control" name="bay_s" placeholder="Enter measurement ">
</div>
<div class="form-group col-md-6">
<label for="widths">Coler</label>
<input type="text" class="form-control" name="coler_s" placeholder="Enter measurement ">
</div>
<div class="form-group col-md-6">
<label for="widths">Extra</label>
<input type="text" class="form-control" name="text_s" placeholder="Extra Details ">
</div>
</div>
<br>

<div class="form-row">
<div class="modal-header col-md-12" >
    <button type="button" class="close" data-dismiss="modal">&times;</button>
	<!-- <center><img src="https://codingcush.com/uploads/logo/logo_61b79976c34f5.png" width="300px" height="80px" alt=""></center> -->
	<h4 class="modal-title text-center">Pent Measurement</h4>
</div>
<div class="form-group col-md-6">

<label for="heightp">Kamar</label>
<input type="text" class="form-control" name="kamar" placeholder="Enter measurement">
</div>
<div class="form-group col-md-6">
<label for="widthp">Sit</label>
<input type="text" class="form-control" name="sit" placeholder="Enter measurement ">
</div>
<div class="form-group col-md-6">
<label for="widthp">Length</label>
<input type="text" class="form-control" name="length" placeholder="Enter measurement ">
</div>
<div class="form-group col-md-6">
<label for="widthp">Moli</label>
<input type="text" class="form-control" name="moli" placeholder="Enter measurement ">
</div>
<div class="form-group col-md-6">
<label for="widthp">Ghutan</label>
<input type="text" class="form-control" name="ghutan" placeholder="Enter measurement ">
</div>
<div class="form-group col-md-6">
<label for="widthp">Galo</label>
<input type="text" class="form-control" name="galo" placeholder="Enter measurement ">
</div>
<div class="form-group col-md-6">
<label for="widthp">Jhang</label>
<input type="text" class="form-control" name="jhang" placeholder="Enter measurement ">
</div>
<div class="form-group col-md-6">
<label for="widthp">Extra</label>
<input type="text" class="form-control" name="text_p" placeholder="Extra Details ">
</div>

</div>


<div class="col-md-6 d-flex justify-content-center">

<input type="submit" name="submit" class="btn btn-info btn-large " value="Submit">
		</div>
		<div class="modal-footer " style="display: block;"><br>
	  
        <button type="button" class="btn btn-default col-md-2" data-dismiss="modal">Close</button>
      </div>
</form>
</div>
		 

    </div>

  </div>
</div>


<!------DELETE modal---->




<!-- Modal -->
<?php

$get_data = "SELECT * FROM data";
$run_data = mysqli_query($con,$get_data);

while($row = mysqli_fetch_array($run_data))
{
	$sno = $row['SNO'];
	echo "

<div id='$sno' class='modal fade' role='dialog'>
  <div class='modal-dialog'>

    <!-- Modal content-->
    <div class='modal-content'>
      <div class='modal-header'>
        <button type='button' class='close' data-dismiss='modal'>&times;</button>
        <h4 class='modal-title text-center'>Are you want to sure??</h4>
      </div>
      <div class='modal-body'>
        <a href='delete.php?sno=$sno' class='btn btn-danger' style='margin-left:250px'>Delete</a>
      </div>
      
    </div>

  </div>
</div>


	";
	
}


?>


<!-- View modal  -->
<?php 

// <!-- profile modal start -->
$get_data = "SELECT * FROM data";
$run_data = mysqli_query($con,$get_data);

while($row = mysqli_fetch_array($run_data))
{	
	$sno = $row['SNO'];
	$id = $row['ID'];
	$name = $row['Name'];
	$surname = $row['Surname'];
	$phoneno = $row['PhoneNo'];
	$kamar = $row['Kamar'];
	$sit = $row['Sit'];
	$length = $row['Length'];
	$moli = $row['Moli'];
	$ghutan = $row['Ghutan'];
	$galo = $row['Galo'];
	$jhang = $row['Jhang'];
	$length_s = $row['Length_s'];
	$chest_s = $row['Chest_s'];
	$pet_s = $row['Pet_s'];
	$sit_s = $row['Sit_s'];
	$shoulder_s = $row['shoulder_s'];
	$bay_s = $row['Bay_s'];
	$coler_s = $row['Coler_s'];
	$front_s = $row['Front_s'];
	$text_s = $row['Text_s'];
	$text_p = $row['Text_p'];
	
	echo "

		<div class='modal fade' id='view$sno' tabindex='-1' role='dialog' aria-labelledby='userViewModalLabel' aria-hidden='true'>
		<div class='modal-dialog modal-lg'>
			<div class='modal-content'>
			<div class='modal-header'>
				<h5 class='modal-title' id='exampleModalLabel'>Profile <i class='fa fa-user-circle-o' aria-hidden='true'></i></h5>
				<button type='button' class='close' data-dismiss='modal' aria-label='Close'>
				<span aria-hidden='true'>&times;</span>
				</button>
			</div>
			<div class='modal-body'>
			<div class='container' id='profile'> 
				<div class='row'>
					<div class='col-sm-4 col-md-2'>
						
						<i class='fa fa-phone' aria-hidden='true'></i> $phoneno  
						<h3 class='text-primary'>$name $surname</h3>
					</div>
					<div class='col-sm-1 col-md-5'>
						<br>
						<br>
						<p class='text-secondary'>
						<h3 class='text-primary'>Shirt Measurement</h3>
						</p>
						<table class='table table-bordered table-striped table-hover' >
						<thead>
							<tr>
			  					<th class='text-center' scope='col'>No</th>
								<th class='text-center' scope='col'>Name</th>
								<th class='text-center' scope='col'>Value</th>					
							</tr>
						</thead>
						<tr>
							<b><td class='text-center'>1</td></b>
							<td class='text-center'>Length</td>
							<td class='text-center	'>$length_s</td>
						</tr>
						<tr>
							<b><td class='text-center'>2</td></b>
							<td class='text-center'>Chest</td>
							<td class='text-center	'>$chest_s</td>
						</tr>
						<tr>
							<b><td class='text-center'>3</td></b>
							<td class='text-center'>pet</td>
							<td class='text-center	'>$pet_s</td>
						</tr>
						<tr>
							<b><td class='text-center'>4</td></b>
							<td class='text-center'>Sit</td>
							<td class='text-center	'>$sit_s</td>
						</tr>
						<tr>
							<b><td class='text-center'>5</td></b>
							<td class='text-center'>Shoulder</td>
							<td class='text-center	'>$shoulder_s</td>
						</tr>
						<tr>
							<b><td class='text-center'>6</td></b>
							<td class='text-center'>Bay</td>
							<td class='text-center	'>$bay_s</td>
						</tr>
						<tr>
							<b><td class='text-center'>7</td></b>
							<td class='text-center'>Coler</td>
							<td class='text-center	'>$coler_s</td>
						</tr>
						<tr>
							<b><td class='text-center'>7</td></b>
							<td class='text-center'>Front</td>
							<td class='text-center	'>$front_s</td>
						</tr>
						<tr>
							<b><td class='text-center'>8</td></b>
							<td class='text-center'>Text</td>
							<td class='text-center	'>$text_s</td>
						</tr>
						</table>
						
						<p class='text-secondary'>
						<h3 class='text-primary'>Pent Measurement</h3>
						</p>
						<table class='table table-bordered table-striped table-hover' >
						<thead>
							<tr>
			  					<th class='text-center' scope='col'>No</th>
								<th class='text-center' scope='col'>Name</th>
								<th class='text-center' scope='col'>Value</th>					
							</tr>
						</thead>
						<tr>
							<b><td class='text-center'>1</td></b>
							<td class='text-center'>Kamar</td>
							<td class='text-center	'>$kamar</td>
						</tr>
						<tr>
							<b><td class='text-center'>2</td></b>
							<td class='text-center'>Sit</td>
							<td class='text-center	'>$sit</td>
						</tr>
						<tr>
							<b><td class='text-center'>3</td></b>
							<td class='text-center'>Length</td>
							<td class='text-center	'>$length</td>
						</tr>
						<tr>
							<b><td class='text-center'>4</td></b>
							<td class='text-center'>Moli</td>
							<td class='text-center	'>$moli</td>
						</tr>
						<tr>
							<b><td class='text-center'>5</td></b>
							<td class='text-center'>Ghutan</td>
							<td class='text-center	'>$ghutan</td>
						</tr>
						<tr>
							<b><td class='text-center'>6</td></b>
							<td class='text-center'>Galo</td>
							<td class='text-center	'>$galo</td>
						</tr>
						<tr>
							<b><td class='text-center'>7</td></b>
							<td class='text-center'>Jhang</td>
							<td class='text-center	'>$jhang</td>
						</tr>
						<tr>
							<b><td class='text-center'>7</td></b>
							<td class='text-center'>Text</td>
							<td class='text-center	'>$text_p</td>
						</tr>
						</table>

						<!-- Split button -->
					</div>
				</div>

			</div>   
			</div>
			<div class='modal-footer'>
				<button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
			</div>
			</form>
			</div>
		</div>
		</div> 


    ";
}


// <!-- profile modal end -->


?>





<!----edit Data--->

<?php

$get_data = "SELECT * FROM data";
$run_data = mysqli_query($con,$get_data);

while($row = mysqli_fetch_array($run_data))
{
	$id = $row['ID'];
	$sno = $row['SNO'];
	$name = $row['Name'];
	$surname = $row['Surname'];
	$phoneno = $row['PhoneNo'];
	$kamar = $row['Kamar'];
	$sit = $row['Sit'];
	$length = $row['Length'];
	$moli = $row['Moli'];
	$ghutan = $row['Ghutan'];
	$galo = $row['Galo'];
	$jhang = $row['Jhang'];
	$length_s = $row['Length_s'];
	$chest_s = $row['Chest_s'];
	$pet_s = $row['Pet_s'];
	$sit_s = $row['Sit_s'];
	$shoulder_s = $row['shoulder_s'];
	$bay_s = $row['Bay_s'];
	$coler_s = $row['Coler_s'];
	$front_s = $row['Front_s'];
	$text_s = $row['Text_s'];
	$text_p = $row['Text_p'];
	echo "

<div id='edit$sno' class='modal fade' role='dialog'>
  <div class='modal-dialog'>

    <!-- Modal content-->
    <div class='modal-content'>
      <div class='modal-header'>
             <button type='button' class='close' data-dismiss='modal'>&times;</button>
             <h4 class='modal-title text-center'>Edit your Data</h4> 
      </div>

      <div class='modal-body'>
        <form action='edit.php?sno=$sno' method='post' enctype='multipart/form-data'>

		<div class='form-row'>
<div class='form-group col-md-6'>
<label for='inputEmail4'> Id</label>
<input type='text' class='form-control' name='id' value='$id' maxlength='12' required>
</div>
<div class='form-group col-md-6'>
<label for='inputPassword4'>Mobile No.</label>
<input type='phone' class='form-control' name='phoneno' value='$phoneno' maxlength='10' required>
</div>
</div>


<div class='form-row'>
<div class='form-group col-md-6'>
<label for='firstname'>First Name</label>
<input type='text' class='form-control' name='name' value='$name'>
</div>
<div class='form-group col-md-6'>
<label for='lastname'>Last Name</label>
<input type='text' class='form-control' name='surname' value='$surname'>
</div>
</div>

<div class='modal-header'>
    <button type='button' class='close' data-dismiss='modal'>&times;</button>
	<!-- <center><img src='https://codingcush.com/uploads/logo/logo_61b79976c34f5.png' width='300px' height='80px' alt=''></center> -->
	<h4 class='modal-title text-center'>Shirt Measurement</h4>
</div>
<div class='form-row'>
<div class='form-group col-md-6'>

<label for='heights'>Length</label>
<input type='text' class='form-control' name='length_s' value='$length_s' >
</div>
<div class='form-group col-md-6'>
<label for='widths'>Chest</label>
<input type='text' class='form-control' name='chest_s' value='$chest_s'>
</div>
<div class='form-group col-md-6'>
<label for='widths'>Pet</label>
<input type='text' class='form-control' name='pet_s'value='$pet_s'>
</div>
<div class='form-group col-md-6'>
<label for='widths'>Sit</label>
<input type='text' class='form-control' name='sit_s' value='$sit_s' >
</div>
<div class='form-group col-md-6'>
<label for='widths'>Shoulder</label>
<input type='text' class='form-control' name='shoulder_s' value='$shoulder_s'>
</div>
<div class='form-group col-md-6'>
<label for='widths'>Bay</label>
<input type='text' class='form-control' name='bay_s' value='$bay_s'>
</div>
<div class='form-group col-md-6'>
<label for='widths'>Coler</label>
<input type='text' class='form-control' name='coler_s' value='$coler_s'>
</div>
<div class='form-group col-md-6'>
<label for='widths'>Front</label>
<input type='text' class='form-control' name='front_s' value='$front_s'>
</div>
<div class='form-group col-md-6'>
<label for='widths'>Extra</label>
<input type='text' class='form-control' name='text_s' value='$text_s'>
</div>
</div>

<div class='modal-header'>
    <button type='button' class='close' data-dismiss='modal'>&times;</button>
	<!-- <center><img src='https://codingcush.com/uploads/logo/logo_61b79976c34f5.png' width='300px' height='80px' alt=''></center> -->
	<h4 class='modal-title text-center'>Pent Measurement</h4>
</div>
<div class='form-row'>
<div class='form-group col-md-6'>

<label for='heights'>Kamar</label>
<input type='text' class='form-control' name='kamar' value='$kamar' >
</div>
<div class='form-group col-md-6'>
<label for='widths'>Sit</label>
<input type='text' class='form-control' name='sit' value='$sit'>
</div>
<div class='form-group col-md-6'>
<label for='widths'>Length</label>
<input type='text' class='form-control' name='length'value='$length'>
</div>
<div class='form-group col-md-6'>
<label for='widths'>Moli</label>
<input type='text' class='form-control' name='moli' value='$moli' >
</div>
<div class='form-group col-md-6'>
<label for='widths'>Ghutan</label>
<input type='text' class='form-control' name='ghutan' value='$ghutan'>
</div>
<div class='form-group col-md-6'>
<label for='widths'>Galo</label>
<input type='text' class='form-control' name='galo' value='$galo'>
</div>
<div class='form-group col-md-6'>
<label for='widths'>Jhang</label>
<input type='text' class='form-control' name='jhang' value='$jhang'>
</div>
<div class='form-group col-md-6'>
<label for='widths'>Extra</label>
<input type='text' class='form-control' name='text_p' value='$text_p'>
<input type='hidden' name='sno' value='$sno'>
</div>
</div>
        	
        	
			 <div class='modal-footer'>
			 <input type='submit' name='submit' class='btn btn-info btn-large' value='Submit'>
			 <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
		 </div>


        </form>
      </div>

    </div>

  </div>
</div>


	";
}


?>

<script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  <script>
    $(document).ready(function () {
      $('#myTable').DataTable();

    });
  </script>

</body>
</html>
