<?php
//routes/index.php

$f3->route('GET /', function($f3){
    require('setting.php');

    $f3->mset([
        'blogTitle'=>$setting['blogTitle'],
        'description'=>$setting['description'],
        'pageTitle'=>'ទំព័រ​ដើម',
        'message'=>'ស្វាគមន៍​មក​កាន់​ទំព័រ​មុខ!',
        'date'=>$setting['date']
    ]);
    
    $view = new View;
    echo $view->render('views/index.php');
});