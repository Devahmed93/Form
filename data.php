<?php
include ('connection.php');
$sql_insert = "INSERT INTO data (SD,LECN) VALUES ('2','ahmed')";
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