<?php
//routes/index.php

$f3->route('GET /', function($f3){
    $f3->set('blogTitle','Khmer Web');

    $f3->mset([
        'pageTitle'=>'ទំព័រ​ដើម',
        'message'=>'ស្វាគមន៍​មក​កាន់​ទំព័រ​មុខ!'
    ]);
    
    $view = new View;
    echo $view->render('views/index.php');
});