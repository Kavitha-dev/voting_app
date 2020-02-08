<?php
extract($_POST);
include "db_con.php";

if(isset($submit)) 
{
	if (isset($_POST['lan']))
	{
	/*$uid=$_POST['lan'];
	$r="update poll set num_votes = num_votes+1 where id='$uid'"; or*/
  $r="update poll set num_votes = num_votes+1 where id=".$_POST['lan']; // this
  $result=mysqli_query($con,$r);
  if($result)
  {
header('location:result.php');
  }
}
}
if(isset($_GET['results']))
{
	
	$get_votes="select *from votes_tbl";
	$run_votes=mysqli_query($con,$get_votes);
	$row=mysqli_fetch_array($run_votes);
	$php=$row['php'];
	$java=$row['java'];
	$javascript=$row['javascript'];
	$python=$row['python'];
	
	$count=$php+$java+$javascript+$python;
	$per_php=round($php*100/$count)."%";
	$per_java=round($java*100/$count)."%";
	$per_js=round($javascript*100/$count)."%";
	$per_python=round($python*100/$count)."%";
	echo"<p><b>php:</b>$php($per_php)</p>
	<p><b>Java:</b>$java($per_java)</p>
	<p><b>Java:</b>$javascript($per_js)</p>
	<p><b>Java:</b>$python($per_python)</p>
	";
}
 
?>
<html>
<body>
<form method="POST" action="">
<div align="center">
<input type="radio" name="lan" value="1">Php<br/>
<input type="radio" name="lan" value="2">Java<br/>
<input type="radio" name="lan" value="3">JavaScript<br/>
<input type="radio" name="lan" value="4">Python<br/><br/>
<input type="submit" name="submit" value="submit">
</div>
</form>
</body>
</html>
