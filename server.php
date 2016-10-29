<?php
require __DIR__ . '/vendor/autoload.php';

header("Access-Control-Allow-Origin: *");

use JsonRPC\Client;

  $bitcoin = new Client('http://rpc:rpc@127.0.0.1:18332/');

  echo json_encode( $bitcoin->listtransactions() );
  if(isset($_GET['amount'])){
      $bitcoin->sendtoaddress("n4Md8cEyiVdzu1QMRMKp6gYm461PA9UvQ9",$_GET['amount']);
  }
