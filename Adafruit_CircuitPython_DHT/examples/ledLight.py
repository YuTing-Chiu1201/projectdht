import time
import RPi.GPIO as GPIO 
import sys


LED_PIN = 16

print('welcome')
print([sys.argv, len(sys.argv)])
if (len(sys.argv) > 1):
    print(sys.argv[1] == '0')
    GPIO.setwarnings(False)
    #GPIO.setmode(GPIO.BOARD)
    #GPIO.setup(LED_PIN, GPIO.OUT)
    print(sys.argv[1] == '0')
    if (sys.argv[1] == '0'):
        print(sys.argv[1] == '0')
        GPIO.output(LED_PIN, GPIO.LOW) 
        print('off th light')
    elif (sys.argv[1] == '1'):
        GPIO.output(LED_PIN, GPIO.HIGH) 
        print('on th light')
'''
'''
#print([sys.argv, len(sys.argv)])
#GPIO.cleanup()

'''
try:
    while True:
        print("LED is on")
        GPIO.output(LED_PIN, GPIO.HIGH)
        time.sleep(1)
        print("LED is off")
        GPIO.output(LED_PIN, GPIO.LOW)
        time.sleep(1)

except KeyboardInterrupt:
    print("Exception: KeyboardInterrupt")

finally:
    GPIO.cleanup()    

    '''
# you can pass DHT22 use_pulseio=False if you wouldn't like to use pulseio.
# This may be necessary on a Linux single board computer like the Raspberry Pi,
# but it will not work in CircuitPython.


