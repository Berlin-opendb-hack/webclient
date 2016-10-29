<?php
require __DIR__ . '/vendor/autoload.php';

use JsonRPC\Client;

  $bitcoin = new Client('http://bitcoinrpc:44sCpMzWlXvVnKVlNW2V8LKtB0Lbvw2yBHOs5N8yoBNZu@127.0.0.1:18332/');

  echo "<pre>\n";
  print_r($bitcoin->listtransactions()); echo "\n";
  echo "</pre>";
