
<?php
include.once('config.php');
?>
<html>
<link href="jQueryAssets/jquery.ui.core.min.css" rel="stylesheet" type="text/css">
<link href="jQueryAssets/jquery.ui.theme.min.css" rel="stylesheet" type="text/css">
<link href="jQueryAssets/jquery.ui.datepicker.min.css" rel="stylesheet" type="text/css">
<link href="jQueryAssets/jquery.ui.button.min.css" rel="stylesheet" type="text/css">
<script src="jQueryAssets/jquery-1.11.1.min.js"></script>
<script src="jQueryAssets/jquery.ui-1.10.4.datepicker.min.js"></script>
<script src="jQueryAssets/jquery.ui-1.10.4.button.min.js"></script>
<head>
	<style>
	.ui-datepicker td.ui-state-disabled>span{background:#c30;}
.ui-datepicker td.ui-state-disabled{opacity:100;}	
	</style>
<link href="css/master.css" rel="stylesheet" type="text/css"/>
<meta charset="utf-8">
<title>Calender</title>
</head>

<body>
hello
<?php
 if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
else
{
echo "suc"
}
$sql="SELECT Name FROM Student";
$result=mysqli_query($conn,$sql); 
$row=mysqli_fetch_array($result,MYSQLI_BOTH);
printf ("%s\n",$row[0]);

?>

<div id="Holder">
	<br>
<h2> Select the date</h2>
  <div id="Datepicker1"></div> 
	<h2> Select the time</h2>
<div id="mainselection">
  <select>
    <option>7:30 am</option>
    <option>8:30 am</option>
	<option>9:30 am</option>
	<option>10:30 am</option>
	<option>11:30 am</option>
	<option>12:30 pm</option>
	<option>2:30 pm</option>
	 <option>3:30 pm</option>
	  
	  
  </select>
</div>
  
</div>

<script type="text/javascript">
var unavailableDates = ["8-1-2019" ];

function unavailable(date) {
	
	dmy = date.getDate() + "-" + (date.getMonth() + 1) + "-" + date.getFullYear();
	
	if($.inArray(dmy, unavailableDates) == -1) {
		
		return [true, ""];
		
	}else {
		
		return [false, "", "Unavailable"];
	}
}
$(function() {
	$("#Datepicker1").datepicker({
		numberOfMonths:1,
		beforeShowDay: function(dt)  
          {  
            return [dt.getDay() == 0 || dt.getDay() == 6 ? false : true];  
          } ,minDate: new Date()
	}); 
});



</script>
</body>
</html>