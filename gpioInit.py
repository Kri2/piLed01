import RPi.GPIO as GPIO
GPIO.setwarnings(False)
GPIO.setmode(GPIO.BOARD)
print "<p style=\"color:blue;\">gpioInit01: Uruchomiono python'a.</p>"
GPIO.setup(5,GPIO.OUT)
print "<p style=\"color:blue;\">gpioInit02: setup GPIO zrobiony.</p>"
if GPIO.input(5):
	GPIO.output(5, False)
else:
	GPIO.output(5, True)


print "<p style=\"color:blue;\">gpioInit03: Wyjscia ustawione.</p>"
print "Stan WE5:(LED) "
print GPIO.input(5)


#GPIO.cleanup();
