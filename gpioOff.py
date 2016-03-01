import RPi.GPIO as GPIO
print "starting python LED off function";
GPIO.setwarnings(False)
GPIO.setmode(GPIO.BOARD)
GPIO.setup(3,GPIO.OUT)
GPIO.setup(5,GPIO.OUT)
GPIO.output(3,False)
GPIO.output(5,False)
print " GPIO OFF WYKONANE!"
print " LED status is now: "
print GPIO.input(5)
