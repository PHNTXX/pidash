# raspberrypi-json
pushes cpu temperature, cpu usage, available as well as used sd-card and ram space to a json file.
credit goes to [this post](https://www.raspberrypi.org/forums/viewtopic.php?f=32&t=22180),

## installation

* set up your pi so that it can access the internet.
* install apache2 on your pi using the command "sudo apt-get install -y apache2"
* download the two files "update.py" and "api.json" from this repository
* create a new folder named "jobs" in your root directory (not essential, you can use a different directory if you like, but change the cronjob that's set up later accordingly)
* move update.py into this newly created directory
* move api.json to /var/www/html/ (essential, apache2 won't recognize it otherwise.)
* run the command "crontab -e" and select "2"
* on the very bottom of the file, insert the following :
  "*/1 * * * * python /jobs/update.py" (you would have to edit the location of the python script if you used a different directory)
* THE API HAS SUCCESSFULLY BEEN INSTALLED ! IT WILL NOW REFRESH ALL THE DATA EVERY MINUTE!

