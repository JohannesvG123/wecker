#!C:\Python310\python.exe
# pip install schedule (https://howchoo.com/pi/how-to-make-a-raspberry-pi-smart-alarm-clock#install-the-python-i2c-driver)

import schedule
import subprocess
import time
import sys
import cgi

#get values
form = cgi.FieldStorage()
link = form.getvalue('linkBox')
wakeupTime = form.getvalue('timeBox')

#download mp3
#todo von download py

#running pys= get-wmiobject Win32_process -filter "Name='python.exe'" | foreach -process {$_.CommandLine}
#ACHTUNG alarm klingelt gerade nur einmal
def job():
    subprocess.call(['teschd.mp3'], shell=True)
    sys.exit()

schedule.every().day.at(wakeupTime).do(job)

while True:
    schedule.run_pending()
    time.sleep(1) #kann höher gesetzt werden
