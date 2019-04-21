<?php
header('Content-Type: application/json');

// Uncomment the following line and add a password if you want one.
// $password =

// Return current CPU temperature
function getCPUTemperature () {
  return (exec('cat /sys/class/thermal/thermal_zone0/temp')) / 1000;
}

// Return current RAM usage. [total, used, free, shared, buff/cache, available]
function getRAMUsage () {
  exec('free -h', $usage);
  preg_match_all('/\s+([0.00-9.00]+([A-Z]|[%]))/', $usage[1], $value);
  return array($value[1][0], $value[1][1], $value[1][2], $value[1][3], $value[1][4], $value[1][5]);
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
    'ram_total' => getRAMUsage()[0],
    'ram_used' => getRAMUsage()[1],
    'ram_free' => getRAMUsage()[2],
    'ram_shared' => getRAMUsage()[3],
    'ram_buff' => getRAMUsage()[4],
    'ram_available' => getRAMUsage()[5],
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
