<?php
//declare(strict_types=1);
//
//require_once __DIR__ . '/App/autoLoad.php';
//
//
//$ctrl = $_GET['ctrl'] ?? 'Index';
//
//
//try {
//
//    $class = '\App\Controllers\\' . $ctrl;
//    $ctrl = new $class;
//    $ctrl();
//} catch (\App\DbException $error){
//    echo 'ERROR_DB: Invalid request (' . $error->getQuery() .')! ' . $error->getMessage();
//    die();
//}


$arrayFile = include __DIR__ . '/arrayTest.php';

/** @var arrayFile $arrayTest */
var_dump($arrayTest);