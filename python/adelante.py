Import RPi.GPIO as GPIO
GPIO.setmode(GPIO.BCM)

GPIO.setup(20,GPIO.OUT)
GPIO.setup(21,GPIO.OUT)

GPIO.setup(16,GPIO.OUT)
GPIO.setup(26,GPIO.OUT)

GPIO.output(20,True)
GPIO.output(21,False)

GPIO.output(16,False)
GPIO.output(26,True)