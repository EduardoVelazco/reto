Import RPi.GPIO as GPIO
GPIO.setmode(GPIO.BCM)

GPIO.setup(20,GPIO.OUT)
GPIO.setup(21,GPIO.OUT)

GPIO.setup(16,GPIO.OUT)
GPIO.setup(26,GPIO.OUT)

GPIO.output(20,False)
GPIO.output(21,True)

GPIO.output(16,True)
GPIO.output(26,False)