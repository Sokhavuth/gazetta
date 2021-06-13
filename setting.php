<?php
//setting.php

require_once('tool.php');

$_tool = new Tool();
date_default_timezone_set("Asia/Phnom_Penh");
$date = $_tool->getKhDate(date('Y/m/d'));

$setting = [];

$setting['date'] = $date;
$setting['message'] = '';
$setting['blogTitle'] = 'កាសែត​យើង';
$setting['description'] = 'ព័ត៌មាន​ពិត​ឥត​លំអៀង';