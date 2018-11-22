<?php

    $environment = "production";
    $environment = "";

    if ( $environment == "production" ){

      $create_db = false;
      $log = false;

      $user = "bot";
      $password = "bot123";
      $servername = "localhost";
      $dbname = "mapexchanges";

    } else {

      $user = "root";
      $password = "123";
      $servername = "localhost";
      $dbname = "calculadorabitcoin";

    }

    $bootstrap['user'] = $user;
    $bootstrap['database'] = $dbname;
    $bootstrap['password'] = $password;
    $bootstrap['servername'] = $servername;
?>
