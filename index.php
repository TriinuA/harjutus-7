<!DOCTYPE HTML>
<html>
	<head>
		<title>Harjutus 7</title>
		<meta charset="utf-8">
	  	<style type="text/css">
	  		.contact{
	  			background-color: #FF790A;
	  			padding: 12px;
	  		}

	  		.contact_info{
	  			background-color: #F6892E;
	  			font-family: arial;
	  			width: 40px;
	  		}

	  		.info{
	  			font-weight: bold;

	  		}
	  		.info, .data{
	  			padding: 20px;
	  		}

	  	</style>
	</head>
	<body>
		<h2>Tsüklid</h2>
		<h3>While tsükkel (while loop)</h3>

		 <?php 
		 /* 
			$count=1;
			while ( $count <= 10) {
				echo $count, " ";
				$count +=1; 

			}
			*/  
		 ?>                                                     
		 <p>Väljasta while tsüklit kasutades numbrid 10 - 100.</p>
		 <?php 
			$count=10;
			while ( $count < 101) {
				echo $count, ", ";
				$count +=1;

			}
		 ?>
		 <p>Lisa selle tsükli alla veel üks tsükkel, milles väljastatakse numbrid 100, 200, 300, 400, 500, ..., 1000</p>
		 <?php 
			$count=100;
			while ( $count < 1001) {
				echo $count, ", ";
				$count +=100;

			}
		 ?>

		 <h3>Lõpmatu while tsükkel (infinite while loop)</h3>
		 <?php 
			/*$count=1;
			while ( $count <= 10) {
				echo $count, " ";
				

			}*/
		 ?>  

		 <h3>Tingimuslaused tsükli sees (Conditional statements in while loop)</h3>
		 <?php 
		 	$count = 1;

		 	while ( $count <= 10) {
		 		if ($count == 3) {
		 			echo "kolm, ";
		 		}
		 		elseif ($count == 5) {
		 			echo "viis, ";
		 		}
		 		elseif ($count == 10){
		 			echo $count, ".";
		 		}

		 		else
					echo $count, ", ";
				$count +=1;
				}
 		  ?>
 		  <h2>For tsükkel (for loop)</h2>
 		  <?php 
 		  		for ($count = 1; $count < 21; $count += 1) {
        			if ($count % 2 == 0){
        				echo "Number {$count} on paaris arv. \n <br>" ;
        			}
        			else 
        				echo "Number {$count} on paaritu arv.\n <br> ";
   					 }
 		   ?>
 		   <h2>Foreach tsükkel (foreach loop)</h2>
 		   <h4>Harjutus 1</h4>
 		   <ul>
 		   <?php 
 		   		$companies = array("Whirlpool", "Bosch", "Beko", "Electrolux", "Siemens" );
 		   		foreach ($companies as $company) {
 		   			echo "<li>{$company}</li>";
 		 		}
			?>
			</ul>
			<h4>Harjutus 2</h4>
			<ul>
			<?php

					$subjects = array("Veebiarendus" , "Serveripoolsete veebirakenduste programmeerimine" , "Kolmemõõtmelise arvutigraafika (3D) alused" , "Veebikujundus" , "Sisuhaldussüsteemide kasutamine" );
					$serial_num = 1;
					foreach ($subjects as $subject) {
						 echo "<li>{$serial_num} {$subject}</li>";
						 $serial_num++;
					}

			 ?>
			 </ul>
			 <h2>Foreach tsükkel assotsiatiivse jadaga</h2>
			 <h4>Harjutus 3</h4>

			  <table class="contact">

			  	<tbody>
					 <?php 
					 	$birth_year	= 1979;
					 	$this_year	= date('Y');
					 	$contacts = array("first_name" =>"Triinu" , 
					 					 "last_name" =>"Ausmees", 
					 					 "e-mail" =>"triinu.ausmees@khk.ee", 
					 					 "age" =>$this_year - $birth_year );
					 	foreach ($contacts as $contact => $data) {
					 		$data_formatted = ucfirst(str_replace("_", " ", $contact));
					 			echo"<tr class='contact_info'>
							  			<td class='info'>{$data_formatted}</td>
							  			<td class='data'>{$data}</td>
			  						</tr> ";
					 	}
					  ?>
				</tbody>
			  </table>
			



	</body>
</html>