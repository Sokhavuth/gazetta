<?php
//index.php

require 'vendor/autoload.php';
$f3 = \Base::instance();

require_once('routes/index.php');
require_once('routes/admin.php');

$f3->run();