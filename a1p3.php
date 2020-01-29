<!-- Aakash Patel-->
<!-- 8622564 -->
<!-- part 3(A) -->
<?php
$text ="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
 Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
 Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
 Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum";
$part_array = explode(" ",$text); 
asort($part_array);
$part_array = implode (" <br>", $part_array);
echo "<strong>Sorted Array :</strong> <br> $part_array"
?>


















<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Enter Text</title>
	<style type="text/css">
	label {
		font-weight: bold;
		color: #300ACC;
	}
	</style>
</head>
<body>




<!-- Aakash Patel-->
<!-- 8622564 -->
<!-- part 3(B) -->

<?php

function myduplicate($str){
for($x = 0; $x <strlen($str);$x++)
{
	for($y = $x +1;$y < strlen($str) ; $y++) 
	{
		if($str[$x] == $str[$y])
		{
			return true;
		}
	}
}
}
$text =$_POST['firstname'];
$result = myduplicate($text);
if($result == 'true'){
	echo "<br><br>String is Duplicate Characters";
}
else
{
	echo "<br><br>string is no duplicate characters";
}

?>



<form method="post">

	<p><label>Input String: <input type="text" name="firstname"></label></p>
	<p align="center"><input type="submit" name="submit" value="Submit String"></p>

</form>

</body>
</html>