<html>

<!-- Create date and time picker, apply validations, after select the dates it show the differences -->
<head><title>Date Picker</title></head>
<body>
<form action = "" method = "POST">
<h2>Please Select Date</h2>
 <input type = date min = 2000-12-31 max = 2019-08-31 name = date1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type = date min = 2000-12-31 max = 2019-08-31 name = date2> <br><br>
<input type = submit value = submit name = submit>


</form>
</body>
</html>
<?php
if(isset($_POST['submit'])){
$date1 = $_POST['date1'];
$date2 = $_POST['date2'];

if($date1 < $date2){
$diff = abs(strtotime($date2) - strtotime($date1));

$years = floor($diff / (365*60*60*24));
$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));

echo $years ." years ". $months ." months " .$days. " days.";
}else{
	echo "Second Date sholud be smaller then First date.";
	}
}
?>
