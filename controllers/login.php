<?php
//controllers/login.php

function login($f3){
    require_once('setting.php');
    require_once('controllers/admin/users/table.php');
    table($f3);

    $f3->mset([
        'blogTitle'=>$setting['blogTitle'], 
        'description'=>$setting['description'],
        'pageTitle'=>'ទំព័រ​ចុះ​ឈ្មោះ', 
        'date'=>$setting['date'],
        'message'=>$setting['message']
    ]);

    $view=new View;
    echo $view->render('views/login.php');
}