<?php



require "head.php";

require "config.php";

$time = $_POST['time'];


session_start();


 $NAME=$_SESSION["n"];

$ID=$_SESSION["i"];


$EMAIL=$_SESSION["e"];


$MOBILE=$_SESSION["m"];


$REASON=$_SESSION["r"];

$date=$_SESSION["d"];

$sql = "insert into Bookings(b_date,b_stid,b_name,b_email,b_phone,b_starttime,b_purpose,b_type) 

			VALUES ('$date', '$ID', '$NAME','$EMAIL','$MOBILE','$time','$REASON','student')";

	//execute the query

	if($dbo -> query($sql))

	{



		echo "<h1></h1>";

		echo "<h2>Your appointment is sucessfully booked<h2>";
        
    $sql1="Select * from Bookings where b_date='$date' AND b_starttime='$time'";
   
   foreach ($dbo->query($sql1) as $row)
    {
       $bkid=$row[b_id];
      
    }

                   
      $message=
      " Your booking with Brett is confirmed.Please note the Booking Id.
        
        Your bookind id is : $bkid 
        Date : $date
        Time : $time
        Click the link below to see the details and to cancel the appointment
        http://portal.ictatjcub.com/managebookings.html ";
      mail($EMAIL,"Appointment Confirmed with Brett",$message,"From:Do not reply@breet.com");
      
     echo "A confirmation mail has been send to your Mail ID ";
        
      


	}

			

else {

	echo " Please try again ";

}




session_destroy();





?>