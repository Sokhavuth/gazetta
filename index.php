<?php
//index.php

require 'vendor/autoload.php';
$f3 = \Base::instance();

require_once('routes/index.php');
require_once('routes/admin.php');

//$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
//$dotenv->load();

$cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$cleardb_host = $cleardb_url["host"];
$cleardb_username = $cleardb_url["user"];
$cleardb_password = $cleardb_url["pass"];
$cleardb_db = substr($cleardb_url["path"],1);
$active_group = 'default';
$query_builder = TRUE;

$db = new DB\SQL(
    'mysql:host='.$cleardb_host.';port=3306;dbname='.$cleardb_db,
    $cleardb_username,
    $cleardb_password
);

$f3->set('CACHE',TRUE);
new \DB\SQL\Session($db);

$f3->set('DB', $db);

$f3->run();