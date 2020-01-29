<!-- Aakash Patel-->
<!-- 8622564 -->

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Simple HTML Form</title>
	<style type="text/css">
	label {
		font-weight: bold;
		color: #300ACC;
	}
	</style>
</head>
<body>
<?php
	// Validate the firstname:
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
$age = $_POST['age'];
	
   if (!empty($_POST['firstname'])) {
     $firstname = $_POST['firstname'];
   } else {
     $firstname = NULL;
      echo '<p>You forgot to
        enter your first name!</p>';
 }

   // Validate the lastname:
  if (!empty($_POST['lastname'])) {
      $lastname = $_POST['lastname'];
  } else {
      $lastname = NULL;
     echo '<p>You forgot to
        enter your lastname !</p>';
   }

   // Validate the age:
  if  (empty($age)) {
	echo '<p>You forgot to
	enter your age!</p>';
     
   }
   
   else{
	   if(!is_numeric($age)){
		   echo "age should be number";
	   } else {

		echo "<p>Thank you,<strong><br>Firstname: $firstname<br>lastname:$lastname<br>Age: $age</p>
		   </strong>\n";
   
	   
	  }
	 }
   
    
    }
 
 ?>


	<!-- Action to - a1p2.php -->
	<form method="post" action="a1p2.php">

	<fieldset><legend>Account Creation:</legend>
	<!-- making Sticky by value = php if (isset($_POST['firstname'])) {
  	$firstname = $_POST['firstname'];?> -->
	<p><label>First Name: <input type="text" name="firstname" size="20" maxlength="40" value="<?php 
	if (isset($_POST['firstname'])) 
	{ 
		$fname = $_POST['firstname'];
		 echo $fname;
	}?>">
		 </label></p>
	
	<p><label>Last Name: <input type="text" name="lastname" size="20" maxlength="40"></label></p>

	<p><label>Age: <input type="text" name="age" size="20" maxlength="40"></label></p>
	
	<p><label for="newsletter">Subscribe to newsletter: </label><input type="radio" name="newsletter" value="Y"> Yes <input type="radio" name="newsletter" value="N"> No</p>

	</fieldset>

	<p style = "align=center"><input type="submit" name="submit" value="Submit My Information"></p>

</form>

</body>
</html>