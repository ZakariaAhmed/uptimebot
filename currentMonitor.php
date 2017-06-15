<!DOCTYPE html>
<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<title>Monitoring Status Codes</title>
</head>
<?php include_once 'config.php'; ?>

<body>
<h1 class="text-center">
	Customers
</h1>

<table class="table table-striped table-inverse">
  <thead>
    <tr>
      <th>URL</th>
      <th>StatusCode</th>
      <th>Redirect</th>
      <th>Last Updated</th>
    </tr>
  </thead>
  
  <tbody>
  <?php  
    $url = 'www.mcdonalds.dk';
    $result = $conn->query("SELECT url, statuscode, redirectstatus, lastupdate FROM uptimebot");

    while($row = $result->fetch_assoc()) {
      $url= $row["url"];
      $statuscode = $row["statuscode"];
      $redirect = $row["redirectstatus"];
      $lastupdate = $row["lastupdate"];
      echo "<tr>
      <td>".$url."</td>
      <td>".$statuscode."</td>
      <td>".$redirect."</td>
      <td>".$lastupdate."</td>

      </tr>";
    
    }
    ?>
  </tbody>
</table>


</body>
</html>