<?php
  $input = shell_exec('python /var/www/html/pidash/update.py');
  $array = explode("\n", $input);
  $output = array('temperature' => $array[0], 'ram_free' => $array[1], 'ram_used' => $array[2], 'space_free' => $array[3], 'space_used' => $array[4]);
?>

<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>PiDash</title>

    <link href="https://blackrockdigital.github.io/startbootstrap-grayscale/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://blackrockdigital.github.io/startbootstrap-grayscale/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://blackrockdigital.github.io/startbootstrap-grayscale/css/grayscale.min.css" rel="stylesheet">
  </head>
  <body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h3 class="brand-heading">PiDash</h1>
                        <p class="intro-text">The best tool for your raspi-sysinfo desires.<p>
                        <br>
                        <h2>System Information:</h2>
                        <p class="btn btn-default btn-lg">Temperature: <?php echo $array[0]; ?></p>
                        <hr>
                        <p class="btn btn-default btn-lg"><?php echo $array[1]; ?>MB RAM Free.</p>
                        <p class="btn btn-default btn-lg"><?php echo $array[2]; ?>MB RAM Used.</p>
                        <hr>
                        <p class="btn btn-default btn-lg"><?php echo $array[3]; ?>B Space Free.</p>
                        <p class="btn btn-default btn-lg"><?php echo $array[4]; ?>B Space Used.</p>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <footer>
        <div class="container text-center">
            <p>Copyright &copy; phntxx 2016; Credit goes to <a href="https://startbootstrap.com/template-overviews/grayscale/">Start Bootstrap</a></p>
        </div>
    </footer>
    <script src="https://blackrockdigital.github.io/startbootstrap-grayscale/vendor/jquery/jquery.js"></script>
    <script src="https://blackrockdigital.github.io/startbootstrap-grayscale/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>
    <script src="https://blackrockdigital.github.io/startbootstrap-grayscale/js/grayscale.min.js"></script>
  </body>
</html>

