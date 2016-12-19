<?php
header('Content-Type: application/json');
if($_GET["passwd"] == "none") { //change "none" to your preferred password, the app uses "none" when there is no custom password
  $input = shell_exec('python update.py');
  $array = explode("\n", $input);
  $ipaddr = $_SERVER['SERVER_ADDR'];
  $output = array('temperature' => $array[0], 'ram_free' => $array[1], 'ram_used' => $array[2],'ram_perc' => $array[6], 'space_free' => $array[3], 'space_used' => $array[4], 'space_perc' => $array[5], 'webserver' => $ipaddr);
} else {
  $output = array('temperature' => "NO", 'ram_free' => "PASSWORD", 'ram_used' => "INVALID", 'space_free' => "PASSWORD", 'space_used' => "INVALID", 'webserver' => "INVALID");
}
echo json_encode($output);
?>
