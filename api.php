<?php
header('Content-Type: application/json');

$input = shell_exec('python /var/www/html/pidash/update.py');
$array = explode("\n", $input);
$output = array('temperature' => $array[0], 'ram_free' => $array[1], 'ram_used' => $array[2], 'space_free' => $array[3], 'space_used' => $array[4]);
echo json_encode($output);

?>
