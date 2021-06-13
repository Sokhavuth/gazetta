<?php
//controllers/admin/users/checkUser.php

function checkUser($f3){
    require_once 'setting.php';

    $f3->mset([
        'blogTitle'=>$setting['blogTitle'], 
        'pageTitle'=>'ទំព័រ​គ្រប់គ្រង', 
        'date'=>$setting['date'],
        'message'=>$setting['message']
    ]);
    
    $sql = 'SELECT email FROM users WHERE email=?';
    $email = $f3->get('DB')->exec($sql, $f3->get('POST.email'));
        
    if($email){
        $sql = 'SELECT password FROM users WHERE password=?';
        $password = $f3->get('DB')->exec($sql, $f3->get('POST.password'));
        if($password){
            $f3->set('SESSION.email', $email[0]['email']);

            $view = new View;
            echo $view->render('views/admin/index.php');
        }else{
            $f3->set('message', 'ពាក្យ​សំងាត់​មិនត្រឹមត្រូវ​ទេ');
            $view = new View;
            echo $view->render('views/login.php');
        }
    }else{
        $f3->set('message', 'Email ​មិនត្រឹមត្រូវ​ទេ');
        $view = new View;
        echo $view->render('views/login.php');
    }
}