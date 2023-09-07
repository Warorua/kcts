<?php
$servername = "45.84.206.68";
$username = "tsavosit_kakamega";
$password = "zSC1OL)*R(ln";
$dbname = "tsavosit_kakamega";


$conn2 = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn2) {
    die("Connection failed: " . mysqli_connect_error());
}


?>