<!DOCTYPE html>
<html>
<head>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<?php  
// THIS WAY DOES NOT WORK WELL, BETTER USE FRAMEWORK
include 'config.php'; 
?>
	<title>Monitoring Status Codes</title>
</head>
<body>
<h1 class="text-center">
	Currently Monitoring Links
</h1>

<table class="table table-striped table-inverse">
  <thead>
    <tr>
      <th>URL</th>
      <th>StatusCode</th>
      <th>Last Updated</th>
    </tr>
  </thead>
  
  <tbody>
    <tr>
    <?php 
	$result = $conn->query("SELECT urlID, url, statuscode, lastupdate FROM uptimebot");

	while($row = $result->fetch_assoc()) {
		//$id = $row["urlID"];
	 	$url = $row["url"];
	 	$statuscode = $row["statuscode"];
	 	$lastupdate = $row["lastupdate"];
	 	//echo "id ".$id."</br>";
	 	print_r("<td>".$url."</td>");
	 	print_r("<td>".$statuscode."</td>");
	 	print_r("<td>".$lastupdate."</td>");
	}
	 ?>
    </tr>
  </tbody>
</table>




</body>
</html>