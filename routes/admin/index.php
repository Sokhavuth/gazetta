<?php
//routes/admin.php

$f3->route('GET /admin', function($f3){
    require('controllers/admin/index.php');
    index($f3);
});

$f3->route('GET /admin_logout', function($f3){
    $f3->clear('SESSION');
    $f3->reroute('./');
});