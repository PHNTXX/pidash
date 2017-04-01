# sbcdash (API for getting Information about your Single Board Computer!)
sbcdash pushes the cpu temperature, cpu usage, available as well as used sd-card and ram space to a webserver.
credit goes to [this post](https://www.raspberrypi.org/forums/viewtopic.php?f=32&t=22180) for the base python script and to startbootstrap for [this template](https://startbootstrap.com/template-overviews/grayscale/) which is used for the index.php - site.

### master branch
This branch serves the main API / code that will be running on the device you want to get information from.

## installation

### raspberry pi
1. install your webserver of choice, php5 and the python compiler. SBCDash was tested to run on apache2, so type `sudo apt-get install -y python apache2 php5 libapache2-mod-php5`
2. clone this repo using `git clone https://github.com/PHNTXX/sbcdash-server.git`
3. go to the directory of your newly cloned repo and use `sudo mv api.php index.php update.py /var/www/html/` to move the required files into the required location of apache2
4. add www-data to the sudoers list by typing `sudo visudo` and then adding `www-data ALL=NOPASSWD: ALL` to the file. this will allow the php-script to execute its commands.

### pine64 / nanopi neo
1. install your webserver of choice, php5 and the python compiler. SBCDash was tested to run on apache2, so type `sudo apt-get install -y python apache2 php5 libapache2-mod-php5`
2. clone this repo using `git clone https://github.com/PHNTXX/sbcdash-server.git`
3. go to the directory of your newly cloned repo and use `mv api.php index.php /var/www/html/` to move the required files into the required location of apache2
4. rename update64.py to update.py and then move it to /var/www/html/ as well by typing `mv update64.py /var/www/html/update.py`
5. add www-data to the sudoers list by typing `sudo visudo` and then adding `www-data ALL=NOPASSWD: ALL` to the file. this will allow the php-script to execute its commands.

## usage
* open your web-browser of choice and type "http://" and the ip-address of your single-board-computer.
* from here, you can look at the CPU-temperature, ram-usage and space-usage of your sbc.
* to update the site, just hit the refresh button in your browser.

## sbcdash mobile client (pre-alpha!)
The mobile companion-app to this API can be found [here](https://github.com/phntxx/sbcdash-client/).
