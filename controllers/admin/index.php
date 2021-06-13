<?php
//controllers/home.php

function index($f3){
    require_once('setting.php');

    $f3->mset([
        'blogTitle'=>$setting['blogTitle'], 
        'description'=>$setting['description'],
        'pageTitle'=>'ទំព័រ​ដើម', 
        'date'=>$setting['date']
    ]);

    $view=new View;
    echo $view->render('views/admin/index.php');
}