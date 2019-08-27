<html>
<!--Function to get the person age. Will provide date and in output need number of years. -->
<head><title>Age</title></head>
<body>
<form action = "" method = "POST">
<h2>Please Select Date</h2>
 
<input type = date max = 2019-08-31 name = date1> <br><br>
<input type = submit value = submit name = submit>


</form>
</body>
</html>
<?php
if(isset($_POST['submit'])){
$date1 = $_POST['date1'];
//$date2 = $_POST['date2'];


$diff = abs(strtotime("now") - strtotime($date1));

$years = floor($diff / (365*60*60*24));
$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));

echo "Your age is ".$years ." years ";
cho "You are ".$years. " old";
}
?>