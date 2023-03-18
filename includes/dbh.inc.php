<?php
# Database variables.
$server_name = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "cs3500_final_db";

# Establish database connection.
$conn = mysqli_connect($server_name, $db_username, $db_password, $db_name);

# Error if could not connect to database.
if (!$conn) 
{
    die("[ERROR] SQL db connection failed: " . mysqli_connect_error());
}