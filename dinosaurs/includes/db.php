<?php

// opens a connection to mySQL database
// shared between all the php files in our application

$user ='root';
$pass ='root';
$data_source ='mysql:host=localhost;dbname=duni0004';

// PDO: PHP Data Objects
//allows us to connect to many diff kinds of databases
$db = new PDO($data_source, $user, $pass);

// force the connection to communicate in UTF-8
//and support many human languages
$db->exec('SET NAMES utf8');

