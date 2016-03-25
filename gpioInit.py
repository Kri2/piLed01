import RPi.GPIO as GPIO
GPIO.setwarnings(False)
GPIO.setmode(GPIO.BOARD)
print "<p style=\"color:blue;\">gpioInit01: Uruchomiono python'a.</p>"
GPIO.setup(5,GPIO.OUT)	#zolta
GPIO.setup(3,GPIO.OUT)	#biala
GPIO.setup(11,GPIO.OUT)	#czerwona
GPIO.setup(12,GPIO.OUT)	#zielona

print "<p style=\"color:blue;\">gpioInit02: setup GPIO zrobiony.</p>"
if GPIO.input(5):
	GPIO.output(5, False)
	GPIO.output(3, False)
	GPIO.output(11,True)
	GPIO.output(12,True)	
else:
	GPIO.output(5, True)
	GPIO.output(3, True)
	GPIO.output(11,False)
	GPIO.output(12,False)


print "<p style=\"color:blue;\">gpioInit03: Wyjscia ustawione.</p>"
print "Stan WE5:(LED) "
print GPIO.input(5)


#GPIO.cleanup();
