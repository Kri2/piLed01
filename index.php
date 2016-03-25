<html>
<head>
<title>RPi page</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
 
</head>
<body style="font-size:x-large;">
  <div id="container" style="font-size:large;width:50%;margin-left:auto;margin-right:auto;">
	<p>Ten kod jest wygenerowany z czystego HTML</p>
	<form method="post">
		<button class="btn btn-default btn-lg btn-block disabled" type="button" onclick=fB1()>Test0</button>
		<input type="button" name="LEDToggleButton" class="btn btn-primary btn-lg btn-block" value="ToggleLEDs" onclick="location='index.php'" style="height:15%; font-size:3em;/>
  	</form>  
  </div>
  <br/><br/>
<!--	<input type="button" value="diodeOFF" onclick="location='ledOff.php'" /> -->

<!-- Latest compilerd and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>



<?php 
	echo "hello world from Chris! "; 
	echo date('Y-m-d H:i:s'); 
	echo "<p>=== TEST NA DZIALANIE SHELLa, wynik whoami:  ";	
	echo exec('whoami');
	echo "<p>";
	$output1  = shell_exec('sudo chmod 777 /dev/gpiomem');
	$output1 .= shell_exec('sudo chown www-data -R /var/www'); 
	$output1 .= system( 'python /var/www/gpioInit.py' );
	echo "</p>";
	echo "<p>Wynik python to $output1, using system() </p>";
	echo "</p>"



	




?> 

</html>

