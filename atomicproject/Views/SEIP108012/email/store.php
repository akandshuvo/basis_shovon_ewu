<?php
ini_set('display_errors','Off');
include_once("../../../vendor/autoload.php"); //using relative path
//include_once($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'AtomicProject'.DIRECTORY_SEPARATOR.'vendor'.DIRECTORY_SEPARATOR.'autoload.php'); //using absolute path

use \App\BITM\SEIP108012\Email\Email;
use  \App\BITM\SEIP108012\Utility\Utility;
//var_dump($_POST);
//die();
$obj = new Email($_POST);
//Utility::dd($obj);


$obj->store();