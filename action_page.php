<?php
include ('connection.php');
$sql_insert = "INSERT INTO data (email,pass) VALUES ('".$_POST["email"]."', '".$_POST["psw"]."')";
if(mysqli_query($con,$sql_insert))
{
echo "Done";
mysqli_close($con);
}
else
{
echo "error is ".mysqli_error($con );
}
?>


