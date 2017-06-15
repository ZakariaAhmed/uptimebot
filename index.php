<!DOCTYPE html>
<html>
<head>
	<title>UptimeBot</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="app.js"></script>

</head>
<body>
<h1 class="text-center">UptimeBot</h1>
<form action="test.php" method="get">
 <div class="form-group">
    <label for="exampleSelect2">Choose Customer</label>
    <select multiple class="form-control" id="customerlist">
      <option>Mcdonalds</option>
      <option>Bang Og Olufsen</option>
      <option>x</option>
      <option>x</option>
      <option>x</option>
    </select>
  </div>
  <div class="form-group">
    <label>Add Url</label>
    <input type="text" class="form-control" name="urlName">
    <input type="submit" value="submit" />
</div>
  <label for="formGroupExampleInput">When to call</label>
  <select name="cronselect" id="list"></select>
  </form>




</body>
</html>