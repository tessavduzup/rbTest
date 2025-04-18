<?php
$psw = "oewPdjmGYehKPgxn4o";
$connection = mysqli_connect("localhost", "root",
                    "", "rbtest");

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
