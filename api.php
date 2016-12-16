<?php
header('Content-Type: application/json');
<<<<<<< Updated upstream
if($_GET["passwd"] == "none") {
  $input = shell_exec('python update.py');
  $array = explode("\n", $input);
  $output = array('temperature' => $array[0], 'ram_free' => $array[1], 'ram_used' => $array[2], 'space_free' => $array[3], 'space_used' => $array[4]);
} else {
  $output = array('ram_free' => 'password invalid.');
=======
if($_GET["passwd"] == "osmc") {
  $input = shell_exec('python update.py');
  $array = explode("\n", $input);
  $ipaddr = $_SERVER['SERVER_ADDR'];
  $output = array('temperature' => $array[0], 'ram_free' => $array[1], 'ram_used' => $array[2],'ram_perc' => $array[6], 'space_free' => $array[3], 'space_used' => $array[4], 'space_perc' => $array[5], 'webserver' => $ipaddr);
} else {
  $output = array('temperature' => "NO", 'ram_free' => "PASSWORD", 'ram_used' => "INVALID", 'space_free' => "PASSWORD", 'space_used' => "INVALID", 'webserver' => "INVALID");
>>>>>>> Stashed changes
}
echo json_encode($output);
?>
