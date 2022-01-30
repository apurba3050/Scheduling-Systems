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
	
	// Time Slot validation	
	if(strlen($_POST['time_slot']) === 0){
		$errors['time_slot'] = "* Select a time slot";
	}


	if(count($errors) === 0){
		$umid = mysqli_real_escape_string($con, $_POST['umid']);		
		$time_slot = mysqli_real_escape_string($con, $_POST['time_slot']);	
		
		$search_query = mysqli_query($con, "SELECT * FROM reg WHERE umid = '$umid'");
		$num_row = mysqli_num_rows($search_query);
		if($num_row >= 1){		
			
			 $update = "UPDATE reg SET time_slot='$time_slot' WHERE umid=$umid";
			
			if (mysqli_query($con, $update)) {
				echo "Record updated successfully";
			  } else {
				echo "Error updating record: " . mysqli_error($con);
			  }	
			

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

<?php include 'showdata.php';?>

<br><br>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>
    <link type="text/css" rel="stylesheet" href="css/style.css">
</head>
<body>
   
    <div>
         <form method="post" id="form" action="update.php">
        	<table>            	
				<tr">
                	<td><b>UMID</b><br><input type="text" name="umid" id="umid" placeholder="UMID" 
					 value="<?php if(isset($_POST['umid'])){echo $_POST['umid'];} ?>">(must be 8 digit)</td>
                </tr> 
                <tr>
                    <td><?php if(isset($errors['umid'])){echo "<h2>" .$errors['umid']. "</h2>"; } ?></td>
                </tr>
				              		
            </table>		
					
			<!-- time slot -->
			<h4>Select only one time slot</h4>
			<div  id="time_slot">				
            	<select  name="time_slot" id="slot"  size="6" multiple="" value="<?php if(isset($_POST['time_slot'])){echo $_POST['time_slot'];} ?>">
                	<option value="slot1">Slot-1 (12/01/21, 6:00 PM–7:00 PM)<?php echo" [ Empty Slot = $empty1 ]"; ?></option>				
                	<option value="slot2">Slot-2 (12/01/21, 7:00 PM–8:00 PM)<?php echo" [ Empty Slot = $empty2 ]"; ?></option>
            		<option value="slot3">Slot-3 (12/01/21, 8:00 PM–9:00 PM)<?php echo" [ Empty Slot = $empty3 ]"; ?></option>
            		<option value="slot4">Slot-4 (12/02/21, 6:00 PM–7:00 PM)<?php echo" [ Empty Slot = $empty4 ]"; ?></option>
            		<option value="slot5">Slot-5 (12/02/21, 7:00 PM–8:00 PM)<?php echo" [ Empty Slot = $empty5 ]"; ?></option>
            		<option value="slot6">Slot-6 (12/02/21, 8:00 PM–9:00 PM)<?php echo" [ Empty Slot = $empty6 ]"; ?></option>
					<?php if(isset($errors['time_slot'])){echo "<h2>" .$errors['time_slot']. "</h2>"; } ?>
       			</select>			
    		</div><br>	
			
			<div>
				<input type="submit" name="submit" id="submit" value="Update">
			</div>		 

		</form> 
		
<?php include 'footer.php';?>
	
    
</body>
</html>