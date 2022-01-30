<?php
	$con = mysqli_connect("localhost","root","","project");	
	$errors = array();
	$time_slot = array();
	
	// UMID validation
	if($_SERVER['REQUEST_METHOD'] == 'POST'){

	if(strlen($_POST['umid']) < 8 || strlen($_POST['umid']) > 8 ){
			$errors['umid'] = "* Not a valid UMID";
	}
	if(!preg_match('/^[0-9]*$/', $_POST['umid']) ){
		$errors['umid'] = "* Not a valid UMID";
	}

	// First and Last name validation
	if(!preg_match("/^[a-zA-Z]*$/", $_POST['fname'])){
		$errors['fname'] = "* First Name is invalid.";
	}
	if( strlen($_POST['fname']) === 0){
		$errors['fname'] = "* First Name is invalid.";
	}
	if(!preg_match("/^[a-zA-Z]*$/", $_POST['lname'])){
		$errors['lname'] = "* Last Name is invalid.";
	}
	if(strlen($_POST['lname']) === 0){
		$errors['lname'] = "* Last Name is invalid.";
	}

	// Project title validation
	if(!preg_match("/^[a-zA-Z0-9]*$/", $_POST['project'])){
		$errors['project'] = "* Project title is invalid.";
	}
	if(strlen($_POST['project']) === 0){
		$errors['project'] = "* Project title is invalid.";
	}

	// E-mail validation
	if(preg_match("/.+@.+\..+/", $_POST['email']) === 0){
		$errors['email'] = "* Not a valid e-mail address.";
	}
		
	// Phone nuber validation
	if(!preg_match("/^\d{3}-\d{3}-\d{4}$/", $_POST['phone'])){
		$errors['phone'] = "* Not a valid phone number.";
	}

	if(isset($_POST['submit'])){		
		if(empty($_POST['time_slot'])) {
		$errors['time_slot'] = "* Select onle one time slot";
		echo 'Please select the value.';
		}else {
			//echo 'You have chosen ='.$_POST['time_slot'] ;
		}
	}
	
	
	if(count($errors) === 0){
		$umid = mysqli_real_escape_string($con, $_POST['umid']);
		$fname = mysqli_real_escape_string($con, $_POST['fname']);
		$lname = mysqli_real_escape_string($con, $_POST['lname']);
		$project = mysqli_real_escape_string($con, $_POST['project']);
		$email = mysqli_real_escape_string($con, $_POST['email']);
		$phone = mysqli_real_escape_string($con, $_POST['phone']);
		$time_slot = mysqli_real_escape_string($con, $_POST['time_slot']);	
		
		$search_query = mysqli_query($con, "SELECT * FROM reg WHERE umid = '$umid'");
		$num_row = mysqli_num_rows($search_query);
		if($num_row >= 1){						
			 echo "<script>alert('You are registered already, Do you wanna change your time?');				
			window.location.href='update.php'</script>"; 			

		 // Inserting values to the database
		}else{
			$sql = "INSERT INTO reg(`umid`,`fname`, `lname`, `project`, `email`, `phone`, `time_slot`) VALUES ('$umid','$fname', '$lname', '$project', '$email', '$phone', '$time_slot')";
			$query = mysqli_query($con, $sql);
			$_POST['fname'] = '';
			$_POST['lname'] = '';
			$_POST['email'] = '';
			
			$successful = "<h3> You are successfully registered.</h3>";
		}
	}
}

// PhP Code to generate the Empty time slot values for registration /

$slot1 = mysqli_query($con, "SELECT count(time_slot) FROM reg WHERE time_slot = 'slot1' ");			
$slot1_row = mysqli_fetch_array($slot1);
$empty1 = 6 - $slot1_row[0];	
			
$slot2 = mysqli_query($con, "SELECT count(time_slot) FROM reg WHERE time_slot = 'slot2' ");			
$slot2_row = mysqli_fetch_array($slot2);
$empty2 = 6 - $slot2_row[0];

$slot3 = mysqli_query($con, "SELECT count(time_slot) FROM reg WHERE time_slot = 'slot3' ");			
$slot3_row = mysqli_fetch_array($slot3);
$empty3 = 6 - $slot3_row[0];

$slot4 = mysqli_query($con, "SELECT count(time_slot) FROM reg WHERE time_slot = 'slot4' ");			
$slot4_row = mysqli_fetch_array($slot4);
$empty4 = 6 - $slot4_row[0];

$slot5 = mysqli_query($con, "SELECT count(time_slot) FROM reg WHERE time_slot = 'slot5' ");			
$slot5_row = mysqli_fetch_array($slot5);
$empty5 = 6 - $slot5_row[0];

$slot6 = mysqli_query($con, "SELECT count(time_slot) FROM reg WHERE time_slot = 'slot6' ");			
$slot6_row = mysqli_fetch_array($slot6);
$empty6 = 6 - $slot6_row[0];

?>