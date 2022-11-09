<?php

$config = include __DIR__.'/config.php';

$db = call_user_func_array('mysqli_connect', $config);

return [
  $db
];