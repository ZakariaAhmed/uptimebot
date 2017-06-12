<!DOCTYPE html>
<html>
<head>
<?php  
// THIS WAY DOES NOT WORK WELL, BETTER USE FRAMEWORK
include 'config.php'; 
?>
	<title>Monitoring Status Codes</title>
</head>
<body>
<h1>
	Currently Monitoring Sites
</h1>

<ul>
	<?php 
	$result = $conn->query("SELECT urlID, url, statuscode, lastupdate FROM uptimebot");

	while($row = $result->fetch_assoc()) {
		$id = $row["urlID"];
	 	$url = $row["url"];
	 	$statuscode = $row["statuscode"];
	 	$lastupdate = $row["lastupdate"];
	 	echo "id ".$id."</br>";
	 	echo "url ".$url."</br>";
	 	echo "statuscode ".$statuscode."</br>";
	 	echo "last update ".$lastupdate."</br>";
	 	echo "</br>";
	 	
	 	
	}
	 ?>

</ul>


</body>
</html>