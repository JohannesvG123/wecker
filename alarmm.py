#!C:\Python310\python.exe
# pip install schedule (https://howchoo.com/pi/how-to-make-a-raspberry-pi-smart-alarm-clock#install-the-python-i2c-driver)

import sys

i = 0
while True:
    # time.sleep(1)
    i += 1
    print(i)
    if i == 10:
        sys.exit()
