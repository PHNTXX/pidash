# pidash (API for getting Information about your Single Board Computer!)
pidash pushes the cpu temperature, cpu usage, available as well as used sd-card and ram space to a json file.
credit goes to [this post](https://www.raspberrypi.org/forums/viewtopic.php?f=32&t=22180)

## base-api branch

### installation - the apache2-way
This part will cover how to install the api on your raspberry pi using apache2.

WARNING : this api only works on raspberry pis running raspbian so far.

* Download and install Apache2, the webserver used for getting the json file into the net `sudo apt-get install -y apache2`
* Clone the "base-api"-branch of this repo using `git clone -b base-api https://github.com/PHNTXX/pidash.git`
* Go into the directory of the newly cloned branch and use `sudo mv api.json /var/www/html/` to move the api.json file to the folder that apache2 uses
* Move the update.py file to a convenient location for you
* Run `crontab -e` and select the 2nd option (crontab will be used for running the update.py file repeatedly)
* type `*/1 * * * * python /<LOCATION OF UPDATE.PY>/update.py`
* Reboot.

### installation - the node.js-way

This part will cover how to install the api on your raspberry pi using node.js, specifically http-server.

* Download and install nodejs v6.2.2 or later as well as http-server, the webserver used for getting the json file into the net

* For Raspberry Pi 1:
* `wget http://nodejs.org/dist/v6.2.2/node-v6.2.2-linux-armv6l.tar.gz`
* `tar -xvf node-v6.2.2-linux-armv6l.tar.gz`
* `cd node-v6.2.2-linux-armv6l/`
* `sudo cp -R * /usr/local/`
* `sudo npm -g install http-server`

* For Raspberry Pi 2 and 3:
* `wget http://nodejs.org/dist/v6.2.2/node-v6.2.2-linux-armv6l.tar.gz`
* `tar -xvf node-v6.2.2-linux-armv6l.tar.gz`
* `cd node-v6.2.2-linux-armv6l/`
* `sudo cp -R * /usr/local/`
* `sudo npm -g install http-server`

* Clone the "base-api"-branch of this repo using `git clone -b base-api https://github.com/PHNTXX/pidash.git`
* Move the api.json file to a convenient location for you.
* Change the path in update.py to the path of your api.json-file.(line 51)
* Move the update.py file to a convenient location for you
* Run `crontab -e` and select the 2nd option (crontab will be used for running the update.py file repeatedly)
* type `*/1 * * * * python /<LOCATION OF UPDATE.PY>/update.py`
* type `* * * * * http-server <LOCATION OF API.JSON>` (if you want to run it under a specific port add `-p <PORT>`)
* Reboot.


### installation - the pine64 way

This part will cover how to install the api on your pine64 using node.js, specifically http-server.

* Download and install nodejs v6.2.2 or later as well as http-server, the webserver used for getting the json file into the net

* `curl -sL https://deb.nodesource.com/setup_6.x | sudo -e bash -`
* `sudo apt-get install -y nodejs`
* `sudo apt-get install -y build-essential`
* `sudo npm -g install http-server`

* Clone the "base-api"-branch of this repo using `git clone -b base-api https://github.com/PHNTXX/pidash.git`
* Move the api.json file to a convenient location for you.
* Change the path in update64.py to the path of your api.json-file.(line 51)
* Move the update64.py file to a convenient location for you
* Run `crontab -e` and select the 2nd option (crontab will be used for running the update.py file repeatedly)
* type `*/1 * * * * python /<LOCATION OF UPDATE64.PY>/update.py`
* type `* * * * * http-server <LOCATION OF API.JSON>` (if you want to run it under a specific port add `-p <PORT>`)
* Reboot.

