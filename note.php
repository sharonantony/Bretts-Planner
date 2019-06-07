

<?php



require "config.php";



require "head.php";

echo"<head>



<div class=header>



</a>



</div>



</head>";











echo "<style>











* {box-sizing: border-box;}







body { 



  margin: 0;

 color:white;

  font-family: Arial, Helvetica, sans-serif;







  background-image: url(7.jpg);



  background-color: #cccccc;







}







.header {



  overflow: hidden;







  padding: 5px ;



	border-radius: 5px;



}







.header a {



  float: left;



  color: white;



  text-align: center;



  padding: 8px;



  text-decoration: none;



  font-size: 18px; 



  line-height: 25px;



  border-radius: 10px;

  



	



}











  .header a.img { 



  border: 4px rgba(41,81,103,0.16);



  border-radius: 4px;



  padding: -50px;



  width: 140px;



 position: absolute;



}



	



	











.header a:hover {



  background-color: rgba(97,95,95,0.49);



  color: whitesmoke;



}







.header a.active {



  background-color: dodgerblue;



  color: white;



}







.header-right {



 

  float: right;

  padding: 5px;

  

 

  

	



}







@media screen and (max-width: 500px) {



  .header a {



    float: none;



    display: block;



    text-align: left;

    



	  



	  



  }



  



  .header-right {



    float: none;



     



  }



}



/* Create three unequal columns that floats next to each other */



.column {



  float: left;



  padding: 10px;



}



















/* Middle column */



.column.middle {



  width: 50%;



}







/* Clear floats after the columns */



.row:after {



  



  display: table;



  clear: both;



}







/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */



@media screen and (max-width: 600px) {



  .column.side, .column.middle {



    width: 100%;



  }



}



	



























.ui-state-default, .ui-widget-content .ui-state-default, .ui-widget-header .ui-state-default {







    color: green;







    background: lightgreen;







}







.ui-widget { font-family: Trebuchet MS, Tahoma, Verdana, Arial, sans-serif; font-size: 40px;   }







.ui-state-disabled .ui-state-default {







    color: white;



	



	











    background: grey;







}







.ui-datepicker-week-end a {



   background-color: grey;



   color: grey !important;



}











<?php include 'rwd.css'; ?>















.na_dates {















    background-color: grey !important;















    background-image :none !important;















    color: #f70404 !important;















}







.ui-datepicker-week-end a {



   background-color: grey;



}







     











</style></head><body>





<div class=header>



<a><img src=jcu3.png alt= Paris style= width:140px ></a>



  <div class=header-right>





    



 

	<a href=display.php>View Calendar</a>

   <a class=active href=note.php>Personal Notes</a>



    <a href=calenderr.php>Personal Appointment</a>

    <a href=managebookingp.html>Manage Booking</a>




    <a href=login.php>Logout</a>



  </div>



</div>























";

















	if(isset($_POST['task'])) {



		



		$t = $_POST['task'];



		



		$sql = "insert into tasks(task) VALUES ('$t')";







	//execute the query







	if($dbo -> query($sql))







	{







	}







			







}







else {







	





}



if (isset($_GET['del_task'])) {

	$id = $_GET['del_task'];



        $s2 = "DELETE FROM tasks WHERE id=$id";







	







	$dbo -> query($s2);





}





?>











<!DOCTYPE html>



<html>



<head>



	<title>Notes</title>



	<link rel="stylesheet" type="text/css" href="style3.css">



</head>



<body>



	<div class="heading">



		<h2 style="font-style: 'Hervetica';">Notes</h2>



	</div>



	<form method="post" action="" class="input_form">



		<?php if (isset($errors)) { ?>



	<p><?php echo $errors; ?></p>



<?php } ?>



		<input type="text" name="task" class="task_input">



		<button type="submit" name="submit" id="add_btn" class="add_btn">Add Task</button>



	</form>



	<table>



	<thead>



		<tr>



			<th></th>



			<th>Tasks</th>



			<th style="width: 60px;">Action</th>



		</tr>



	</thead>







	<tbody>



		<?php 



		// select all tasks if page is visited or refreshed



                $s1="select * from tasks";

                 $i=1;



                foreach ($dbo->query($s1) as $row) {

                 



			echo "<tr>



				<td> $i </td>



				<td class=task>$row[task]</td>



				<td class=delete> 



					<a href=note.php?del_task=$row[id]>x</a> 



				</td>



			</tr>";



		$i=$i+1;

               } ?>	



	</tbody>



</table>



</body>



</html>

<?Php



echo "<style >







/* Style the footer */



.footer {



  background: rrgba(55,89,92,0.31);

 margin-top:25%;

  padding: 10px;



  text-align: center;

color: white;



	border-radius: 0px;



}



</style>







<body>

<footer>

<div class=footer>



  &copy; Copyright 2019 Brett's Planner



</div>

</footer>;





</body>";







