
<?php include 'main.php';?>

<!DOCTYPE html>
<html>
<head>
<link type="text/css" rel="stylesheet" href="css/style.css">
<title>CIS 525 project</title>
</head>
<body>
	 <!-- header -->
     <header>
        <img src="css/logo.jpg" alt=" logo">
        <h3>CIS 525 Mini Project 3</h3>
        <h3>APURBA SAHA</h3>
    </header>

	<!-- registration form -->
	<div id="container">  
		
		<h3>Please Provide information for Sign up</h3>		
        
        <form method="post" id="form" action="index.php">
        	<table>
            	<tr>
                	<td><?php if(isset($successful)){ echo $successful; } ?></td>
                </tr>

				<tr">
                	<td><b>UMID</b><br><input type="text" name="umid" id="umid" placeholder="UMID" 
					 value="<?php if(isset($_POST['umid'])){echo $_POST['umid'];} ?>">(must be 8 digit)</td>
                </tr>
                <tr>
                    <td><?php if(isset($errors['umid'])){echo "<h2>" .$errors['umid']. "</h2>"; } ?></td>
                </tr>

            	<tr>
                	<td><b>First Name</b><br><input type="text" name="fname" id="fname" placeholder="First Name" 
					value="<?php if(isset($_POST['fname'])){echo $_POST['fname'];} ?>">(alpha letters only)</td>					                    
                </tr>
				<tr>                	
					<td><?php if(isset($errors['fname'])){echo "<h2>" .$errors['fname']. "</h2>"; } ?></td>                    
                </tr>
                <tr>
					<td><b>Last Name</b><br><input type="text" name="lname" id="lname" placeholder="Last Name" 
					value="<?php if(isset($_POST['lname'])){echo $_POST['lname'];} ?>">(alpha letters only)</td>                   
                </tr>
				<tr>					
                    <td><?php if(isset($errors['lname'])){echo "<h2>" .$errors['lname']. "</h2>"; } ?></td>
                </tr>
				<tr">
                	<td><b>Project Title</b><br><input type="text" name="project" id="project" placeholder="Project Title" 
					value="<?php if(isset($_POST['project'])){echo $_POST['project'];} ?>">(letter and digits only)</td>
                </tr>
                <tr>
                    <td><?php if(isset($errors['project'])){echo "<h2>" .$errors['project']. "</h2>"; } ?></td>
                </tr>
                <tr">
                	<td><b>Email</b><br><input type="text" name="email" id="email" placeholder="E-mail Address" 
					value="<?php if(isset($_POST['email'])){echo $_POST['email'];} ?>">(valid E-mail only)</td>
                </tr>
                <tr>
                    <td><?php if(isset($errors['email'])){echo "<h2>" .$errors['email']. "</h2>"; } ?></td>
                </tr>

				<tr">
                	<td><b>Phone No</b><br><input type="text" name="phone" id="phone" placeholder="Phone Number" 
					value="<?php if(isset($_POST['phone'])){echo $_POST['phone'];} ?>">(999-999-9999 format)</td>
                </tr>
                <tr>
                    <td><?php if(isset($errors['phone'])){echo "<h2>" .$errors['phone']. "</h2>"; } ?></td>
                </tr>							
				              			
            </table>

			
					
			<!-- time slot -->
			<h4>Select only one slot that has empty slot</h4>
			<div  id="time_slot">				
            	<select  name="time_slot" id="slot"  size="6" multiple="" value="<?php if(isset($_POST['time_slot'])){echo $_POST['time_slot'];} ?>">
                	<option value="slot1">Slot-1 (12/01/21, 6:00 PM–7:00 PM)<?php echo" [ Empty Slot = $empty1 ]"; ?></option>				
                	<option value="slot2">Slot-2 (12/01/21, 7:00 PM–8:00 PM)<?php echo" [ Empty Slot = $empty2 ]"; ?></option>
            		<option value="slot3">Slot-3 (12/01/21, 8:00 PM–9:00 PM)<?php echo" [ Empty Slot = $empty3 ]"; ?></option>
            		<option value="slot4">Slot-4 (12/02/21, 6:00 PM–7:00 PM)<?php echo" [ Empty Slot = $empty4 ]"; ?></option>
            		<option value="slot5">Slot-5 (12/02/21, 7:00 PM–8:00 PM)<?php echo" [ Empty Slot = $empty5 ]"; ?></option>
            		<option value="slot6">Slot-6 (12/02/21, 8:00 PM–9:00 PM)<?php echo" [ Empty Slot = $empty6 ]"; ?></option>					
       			</select>
				   <?php if(isset($errors['time_slot'])){echo "<h2>" .$errors['time_slot']. "</h2>"; } ?>
				   <?php if(isset($_POST['submit'])){echo 'You have chosen ='.$_POST['time_slot'] ; }?>			
    		</div><br>	
			
			<div>
				<input type="submit" name="submit" id="submit" value="Register">
			</div>		 

		</form> 			   
        
    </div>	
	<br><br>

	<!-- Show Data Page -->	
	<h3>Please click the list button to view registerd student list </h3>
	<input type="button" value="Registered List" class="homebutton" id="submit" 
	onClick="document.location.href='showdata.php'" />
	<br><br><br>

	 <!-- Footer -->	
	 <footer>
		<p>&copy; Apurba Saha, CIS-525, Project 3</p>
    </footer>
</body>
</html>
