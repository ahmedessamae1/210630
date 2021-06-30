<?php

$a = 'localhost';
$b = 'root';
$c = '';
$d = 'cbt_playground';

$connection = mysqli_connect($a, $b, $c, $d);
if(!$connection) {
    die('Database connection error.');
}

$query = "SELECT * FROM users";
$query_exe = mysqli_query($connection, $query);

if(!$query_exe) {
    die("Database error.");
}

while($rows = mysqli_fetch_assoc($query_exe)) {
    echo $rows['name'] . " --- " . $rows['email'] . '<br>';
}

