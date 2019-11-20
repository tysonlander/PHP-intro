<?php
  # $_SERVER SUPERGLOBAL

  // Create Server Array
  $server = [
    'Host Server Name' => $_SERVER['SERVER_NAME'],
    'Host Header' => $_SERVER['HTTP_HOST']
  ];

  echo $server['Host Header'];
  // Create Client Array

?>