<?php
header('Content-Type: application/json');

// Uncomment the following line and add a password if you want one.
// $password =

// Return current CPU temperature
function getCPUTemperature () {
  return (exec('cat /sys/class/thermal/thermal_zone0/temp')) / 1000;
}

// Return current RAM usage. [free, used]
function getRAMUsage () {
  exec('free', $usage);
  preg_match_all('/\s+([0-9]+)/', $usage[1], $value);
  return array($value[1][1], $value[1][2]);
}

// Return current disk usage. [size, used, available, usage]
function getDiskUsage () {
  exec ('df -h /', $usage);
  preg_match_all('/\s+([0.00-9.00]+([A-Z]|[%]))/', $usage[1], $value);
  return $value[1];
}

function returnData () {
  return json_encode(array(
    'temperature' => getCPUTemperature(),
    'ram_free' => getRAMUsage()[0],
    'ram_used' => getRAMUsage()[1],
    'ram_perc' => (getRAMUsage()[1] / getRAMUsage()[0]),
    'disk_free' => getDiskUsage()[2],
    'disk_used' => getDiskUsage()[1],
    'disk_perc' => getDiskUsage()[3],
    'webserver' => $_SERVER['SERVER_ADDR']
  ));
}

if (isset($password)) {
  if ($_GET['password'] == $password) {
    echo returnData();
  } else {
    echo json_encode(array(
      'error' => '403: invalid password.'
    ));
  }
} else {
  echo returnData();
}

?>
