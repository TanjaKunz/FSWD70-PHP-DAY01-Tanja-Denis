<!DOCTYPE html>
<html>
<head>
	<title></title>
	
	<!----- Required meta tag ----->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <!-------- Bootstrap CSS -------->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

   <!-------- Font Awesamoe -------->
   <script src="https://kit.fontawesome.com/649b84c193.js"></script>

   <!------- additional CSS ------->
   <link rel="stylesheet" type="text/css" href="css/style.css">

   <!------- jQuery ------->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>
<body>
	<?php $name="Tanja Kunz";
	echo "<h1>My name is " . $name . "!</h1>"; echo "<br>";

	$day=date("D");
	if ($day=="Mon")
	echo "<p>Happy Monday!</p>";
	else
	echo	
	"<p>Have a nice day!</p>"; echo "<br>";


	$day2="";
	if ($day2=="Mon")
	echo "<p>Happy Monday!</p>";
	else if ($day2=="Tue")
	echo	
	"<p>Happy Tuesday!</p>";
	else if ($day2=="Wed")
	echo	
	"<p>Happy Wednesday!</p>";
	else if ($day2=="Thu")
	echo	
	"<p>Happy Thursday!</p>";
	else if ($day2=="Fri")
	echo	
	"<p>Happy Friday!</p>";
	// else if ($day2=="Sat")
	// echo	
	// "<p>Happy Saturday!</p>";
	// else if ($day2=="Sun")
	// echo	
	// "<p>Happy Sunday!</p>";
	else
	echo	
	"<p>Have a nice weekend!</p>"; echo "<br>";
	?>
	<div class="row">
		<div class="col-4" id="for">
		<?php
			for($i=0; $i<10; $i++) 
				echo $name . "<br>"			
		?>			
		</div>


		<div class="col-4" id="while">
		<?php
			$m=1;
			while ($m<11) {			
			echo $name . "<br>";
			$m++;}
		?>			
		</div>


		<div class="col-4" id="do_while">
		<?php
			$m=1;
			do{
			echo $name . "<br>";
			$m++;} 
			while ($m<11); echo "<br>";
		?>			
		</div>


		<div class="col-4">
		<?php
			$arr = array('one','two','three','four','five','six','seven','eight','nine','ten');
			foreach( $arr as $value){
				echo "Value is $value <br>";
			}
		?>			
		</div>


		<div class=" col-4">
		<?php
			$names = array(
				"Tom" => array
				("name" => "Tom",
				"age" => 35,
				"surname" => "Smith",
				"city" => "Vienna"
				),
				"Ann" => array
				("name" => "Ann",
				"age" => 20,
				"surname" => "Walker",
				"city" => "Innsbruck"
				),
				"John" => array				 
				("name" => "John",
				"age" => 21,
				"surname" => "Doe",
				"city" => "Graz"
				));

			foreach ($names as $name){
				echo $name['name'] . " ";
				echo $name['surname']. "<br>";
				echo "is " . $name['age'] ." years old and<br>";				
				echo "lives in " . $name['city'] ."<br><br>";
			}			
		?>
		</div>


		<div class="col-4">
		<?php
		function multiply($a, $b){
  		return $a * $b;
  		}

		

		?>
			

		</div>


		

	</div>

</body>
</html>