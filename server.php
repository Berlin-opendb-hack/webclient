<?php
require __DIR__ . '/vendor/autoload.php';

use JsonRPC\Client;

  $bitcoin = new Client('http://rpc:rpc@127.0.0.1:18332/');

  echo "<pre>\n";
  print_r($bitcoin->listtransactions()); echo "\n";
  echo "</pre>";
