
<?php

$conn = mysqli_connect("localhost", "root", "", "Bank");
//mysqli_connect(servername,username,password,database_name)

if (!$conn) {
  die("Could not connect to the database due to the following error --> " . mysqli_connect_error());
}

//Import .sql file in myphpadmin
?>


