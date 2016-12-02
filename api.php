<?php
header('Content-Type: application/json');

if($_GET["passwd"] == "none") {
  $input = shell_exec('python update.py');
  $array = explode("\n", $input);
  $output = array('temperature' => $array[0], 'ram_free' => $array[1], 'ram_used' => $array[2], 'space_free' => $array[3], 'space_used' => $array[4]);
} else {
  $output = array('ram_free' => 'password invalid.');
}
  echo json_encode($output);
?>
