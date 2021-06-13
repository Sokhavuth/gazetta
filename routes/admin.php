<?php
//routes/admin.php

$f3->route('GET /admin', function($f3){
    require('controllers/admin/index.php');
    index($f3);
});