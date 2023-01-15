<?php
$hostname = "localhost"; //132.111.54.3
$username = "root"; //sdjalkdjkasjdkaj
$password = ""; //sdkjdkagfuagfu
$db_name = "absensidc";

$db = new mysqli($hostname, $username, $password, $db_name);

if ($db->connect_error) {
    echo "error connection";
}
// else {
//     echo "connection success!";
// }

?>