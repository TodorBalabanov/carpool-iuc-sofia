<?php
  $database_host = 'localhost';
  $database_port = '5432';
  $database_name = 'carpool';
  $database_user = 'postgres';
  $database_password = 'postgres';

  $link = pg_connect("host=".$database_host." port=".$database_port." dbname=".$database_name." user=".$database_user." password=".$database_password."");
  unset($database_host, $database_port, $database_name, $database_user, $database_password);
?>
