<?php
//routes/index.php

$f3->route('GET /', function($f3){
    require('controllers/index.php');
    index($f3);
});

$f3->route('GET /login', function($f3){
    require('controllers/login.php');
    login($f3);
});