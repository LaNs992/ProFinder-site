<?php

$con = mysqli_connect('localhost', 'root','');

$sql = "CREATE DATABASE all_in_all";
if ($con->query($sql) === TRUE) {
} 

$conn = mysqli_connect('localhost', 'root','','all_in_all');


?>