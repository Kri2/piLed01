<html>
<head>
<?php
echo 'PHP is online';
//if(isset($_POST['LEDButton'])){//seems that submit is enough
	echo 'post otrzymany';
	exec('sudo python /var/www/gpioInit.py');
//}
?>
</head>
<body>
	<h1>SMALL LED CONTROLLER</h1>
	<form methon="post" action="index2.php">
		<button type="submit" name="LEDButton">TOGGLELED</button>
	</form>	
</body>
