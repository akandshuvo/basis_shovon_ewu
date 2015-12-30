<?php
ini_set('display_errors','Off');
include_once("../../../vendor/autoload.php"); //using relative path
//include_once($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'AtomicProject'.DIRECTORY_SEPARATOR.'vendor'.DIRECTORY_SEPARATOR.'autoload.php'); //using absolute path

use \App\BITM\SEIP1020\student\student;
use  \App\BITM\SEIP1020\Utility\Utility;
//var_dump($_POST);
//die();
$obj = new student($_POST);
//Utility::dd($obj);


$obj->store();