<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace App\BITM\SEIP1020\Utility;

class Utility{
    
    
    static public function d($param=false){
        echo "<pre>";
        var_dump($param);
        echo "</pre>";
    }
    
    static public function dd($param=false){
        self::d($param);
        die();
    }
    
    static public function redirect($url="/AtomicProject/Views/SEIP1020/Book/index.php"){
        header("Location:".$url);
    }
}