<?php
//routes/admin.php

$f3->route('GET /admin/@id', function($f3){
    echo 'Parameter ដែល​ត្រូវ​បាន​ផ្តល់​អោយ​ទៅ​ផ្លូវ​នេះជា​លេខ '.$f3->get('PARAMS.id');
});