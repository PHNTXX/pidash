# pidash (API for getting Information about your Single Board Computer!)
pidash pushes the cpu temperature, cpu usage, available as well as used sd-card and ram space to a json file.
credit goes to [this post](https://www.raspberrypi.org/forums/viewtopic.php?f=32&t=22180)

## base-api branch

### installation

Installation only differs in the version of update.py which is needed. If you are using a pine64, you need to use update64.py; if you are using a raspberry pi, update.py will do.

* Download and install Apache2, the webserver used for getting the json file into the net `sudo apt-get install -y apache2`
* Clone the "base-api"-branch of this repo using `git clone -b base-api https://github.com/PHNTXX/pidash.git`
* Go into the directory of the newly cloned branch and use `sudo mv api.json /var/www/html/` to move the api.json file to the folder that apache2 uses
* Move the update.py file to a convenient location for you
* Run `crontab -e` and select the 2nd option (crontab will be used for running the update.py file repeatedly)
* type `*/1 * * * * python /<LOCATION OF UPDATE.PY>/update.py`
* Reboot.
