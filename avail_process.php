<?php



echo "<style>


  
	</style>";



require "config.php";



$frarray = array("09:30:00","09:45:00","10:00:00","10:15:00" ,"10:30:00","10:45:00","11:00:00","11:15:00","11:30:00","11:45:00","12:00:00","12:15:00","13:30:00","13:45:00","14:00:00","14:15:00","14:30:00","14:45:00","15:00:00","15:15:00","15:30:00","15:45:00","16:00:00");



//print_r($array);



echo "<br>";




$date=$_GET["selDate"];



$date = new DateTime($date);



$date=$date->format('Y-m-d');



//$bkarray=array("09:30:00","09:45:00","10:00:00");



echo $date;



$sql="select b_starttime from Bookings where b_date='$date'";





 $bkarray=array();







	

	foreach ($dbo->query($sql) as $row) {





		$bkarray[]=$row[b_starttime];



	}

	

if (empty($bkarray)){

	 $bkarray=array();

	}



echo "<br>";



$availarray=array();







$availarray = array_diff($frarray,$bkarray);



//print_r($availarray);
echo " <form action = register.php method = POST>";

echo "<h2> Available time slots please select one to proceed booking </h2>";


echo "<select name=time>";

 foreach($availarray as $availval)
{
echo "<option>$availval</option>";
}

echo "</select>";


echo "<input type=submit value=Confirm> </form> ";



session_start();


$_SESSION["d"] = $date;






?>