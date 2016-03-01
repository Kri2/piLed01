<html>
<head>
</head>
<body style="font-size:x-large;">
	<p>Ten kod jest wygenerowany z czystego HTML</p>
	<button type="button" onclick=fB1()>Test0</button>
	<input type="button" style="width:10%;height:10%;" value="ToggleLED" onclick="location='index.php'" />
<!--	<input type="button" value="diodeOFF" onclick="location='ledOff.php'" /> -->
</body>

<?php 
	echo "hello world from Chris! "; 
	echo date('Y-m-d H:i:s'); 
	echo "<p>=== TEST NA DZIALANIE SHELLa, wynik whoami:  ";	
	echo exec('whoami');
	echo "<p>";
	$output1  = shell_exec('sudo chown www-data -R /var/www'); 
	$output1 .= system( 'python /var/www/gpioInit.py' );
	echo "</p>";
	echo "<p>Wynik python to $output1, using system() </p>";
	echo "</p>"
?> 

</html>

