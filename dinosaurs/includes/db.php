<?php

// opens a connection to mySQL database
// shared between all the php files in our application

$user = getenv('DB_USER'); // THE MYSQL username
$pass =  getenv('DB_PASS'); // THE MYSQL password
$data_source = getenv('DATA_SOURCE');

// PDO: PHP Data Objects
//allows us to connect to many diff kinds of databases
$db = new PDO($data_source, $user, $pass);

// force the connection to communicate in UTF-8
//and support many human languages
$db->exec('SET NAMES utf8');

