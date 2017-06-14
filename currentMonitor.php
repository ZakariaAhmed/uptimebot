<!DOCTYPE html>
<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<?php  
include 'config.php'; 

 $result = $conn->query("SELECT url, statuscode, lastupdate FROM uptimebot WHERE url = '$url'");

	while($row = $result->fetch_assoc()) {
		$url= $row["url"];
	 	$statuscode = $row["statuscode"];
	 	$lastupdate = $row["lastupdate"];
	 	
	}
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
    <td><?php echo $url; ?></td>
    <td><?php echo $statuscode; ?></td>
    <td><?php echo $lastupdate; ?></td>
    </tr>
  </tbody>
</table>


</body>
</html>