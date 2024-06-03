<?php
$server = "mysql://hostname=localhost;dbname=OMDA";
$username = "root";
$password = getenv('DB_PASSWORD');
$db = new PDO($server,$username,$password,array(
    PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
));
