# sbcdash (API for getting Information about your Single Board Computer!)
sbcdash pushes the cpu temperature, cpu usage, available as well as used sd-card and ram space to a webserver.
credit goes to [this post](https://www.raspberrypi.org/forums/viewtopic.php?f=32&t=22180) for the base python script and to startbootstrap for [this template](https://startbootstrap.com/template-overviews/grayscale/) which is used for the index.php - site.

## master branch

This branch serves the main API / code that will be running on the device you want to get information from.

### installation

* Download and install apache2, php5 and python, the webserver used for getting the json file into the net and the package that makes both the update-file and the file used on the webserver run `sudo apt-get install -y python apache2 php5 libapache2-mod-php5`
* Clone the "base-api"-branch of this repo using `git clone https://github.com/PHNTXX/sbcdash-server.git`
* _If you are running on a Debian-Based System, like Raspbian for the Rapsberry Pi, go into the directory of your newly cloned branch and use `sudo mv api.php update.py /var/www/html/` to move the api.php file as well as the update.py file to the folder that apache2 uses
* _If you are running an Ubuntu-Based System, like ARMBuntu for the NanoPi Neo or Ubuntu on Pine64, also go into the directory of the cloned branch, and use `sudo mv api.php update64.py /var/www/html/` and `sudo mv /var/www/html/update64.py /var/www/html/update.py` to achieve the same thing.
* Add www-data to the sudoers list by typing `sudo visudo` and then adding `www-data ALL=NOPASSWD: ALL` to the file. This will allow the php-script to execute its commands.
* (OPTIONAL) Reboot.

## sbcdash mobile client

The mobile companion-app to this API can be found [here](https://github.com/phntxx/sbcdash-client/).
