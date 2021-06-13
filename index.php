<?php
//index.php

require 'vendor/autoload.php';
$f3 = \Base::instance();

require_once('routes/index.php');
require_once('routes/admin.php');

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$db = new DB\SQL(
    'mysql:host='.$_ENV['HOST'].';port='.$_ENV['PORT'].';dbname='.$_ENV['DATABASE'],
    $_ENV['USERNAME'],
    $_ENV['PASSWORD']
);

$f3->set('CACHE',TRUE);
new \DB\SQL\Session($db);

$f3->set('DB', $db);

$f3->run();