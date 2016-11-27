<?php
  $input = shell_exec('python update.py');
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
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 class="brand-heading">PiDash</h1>
                        <button id="temperature" class="btn btn-default btn-lg">Temperature: <?php echo $array[0]; ?>°C</button>
                        <hr>
                        <button id="ramfree" class="btn btn-default btn-lg"><?php echo $array[1]; ?>MB RAM Free.</button>
                        <button id="ramused" class="btn btn-default btn-lg"><?php echo $array[2]; ?>MB RAM Used.</button>
                        <hr>
                        <button id="spacefree" class="btn btn-default btn-lg"><?php echo $array[3]; ?>B Space Free.</button>
                        <button id="spaceused" class="btn btn-default btn-lg"><?php echo $array[4]; ?>B Space Used.</button>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <footer>
        <div class="container text-center">
            <p>Copyright &copy; phntxx, Design by StartBootstrap.</p>
        </div>
    </footer>
    <script src="https://blackrockdigital.github.io/startbootstrap-grayscale/vendor/jquery/jquery.js"></script>
    <script src="https://blackrockdigital.github.io/startbootstrap-grayscale/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>
    <script src="https://blackrockdigital.github.io/startbootstrap-grayscale/js/grayscale.min.js"></script>
  </body>
</html>
