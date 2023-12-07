<?php
$con = mysqli_init();
mysqli_ssl_set($con,NULL,NULL, "{path to CA cert}", NULL, NULL);
mysqli_real_connect($conn, "dunduwebapp1-server.mysql.database.azure.com", "root", "Dundappa@123", "bookstore", 3306, MYSQLI_CLIENT_SSL);
?>
