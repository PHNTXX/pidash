# sbcDash-server

<div align="center">
  :thinking: <b>know what your single-board computers are up to</b> :thinking:

  a project by bastian "phntxx" meissner
</div>

<br>

## About

sbcDash is a little tool that outputs information like CPU temperature, RAM and disk (or SD-card) usage
in neat and tidy json.

## Features

- :arrows_counterclockwise: Updates with each API-call
- :lock: Option to add a password

## Installation

To use sbcDash, the only things you're gonna need are a web server and php.
sbcDash was tested using Apache, so it is recommended - though not required - to run with Apache2.

1. Install Apache2 and php5:   
`sudo apt-get install -y apache2 php5 libapache2-mod-php5`

2. Clone the sbcdash repository into the /var/www/html directory (standard directory for Apache2):   
`git clone https://github.com/phntxx/sbcdash-server /var/www/html`

And you're done! Now open up a web browser and navigate to
`http://<IP of your single-board computer>/sbcdash-server/api.php`

## Adding a password

sbcDash also supports adding a password for extra security. To add one, simply follow the instructions
inside of 'api.php'.
