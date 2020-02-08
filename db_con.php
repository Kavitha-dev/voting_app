<?php
$con=mysqli_connect("localhost:3306","root","");
if (!$con) 
{
    die('Could not connect: ' . mysql_error());
}
mysqli_select_db($con,"votes");
?>