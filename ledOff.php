<?php
echo " <p> This page shuts the LED off </p>";
echo shell_exec('ls -l');
echo system('sudo python /var/www/gpioOff.py');
?>
