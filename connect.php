<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "miss") or die("ERROR: Could not connect. " );
  
// Check connection


mysqli_set_charset($link,"utf8");
  ?>