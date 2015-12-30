<?php

namespace App\BITM\SEIP1020\Book;

use \App\BITM\SEIP1020\Utility\Utility;

class Book {
    
    public $id = "";
    public $title = "";
    public $author = "";
    //public $created = "";
    ///public $modified = "";
    // public $created_by = "";
    // public $modified_by = "";
    // public $deleted_at = ""; //soft delete
    
    public function __construct($data = false){
        $this->title = $data['title'];
        $this->author = $data['author'];
    }
    
    public function index(){
        
        $books = array();
        
        $conn = mysql_connect("localhost","root","") or die("Cannot connect database.");
        $lnk = mysql_select_db("atomicproject") or die("Cannot select database.");

        
        $query = "SELECT * FROM `books`";
        $result = mysql_query($query);
        
        while($row = mysql_fetch_object($result)){
            $books[] = $row;
        }
        return $books;
    }
    
    
    public function store(){
       
        $conn = mysql_connect("localhost","root","") or die("Cannot connect database.");
        //echo $conn;
        //die();
        $lnk = mysql_select_db("atomicproject") or die("Cannot select database.");
        //echo $lnk;
        
        $query = "INSERT INTO `atomicproject`.`books` ( `title`,`author`) VALUES ( '".$this->title."','".$this->author."')";
        //echo $query;
        //echo $query;
        //die();
        $result = mysql_query($query);
        
        echo $result;
        
        
        if($result){
            $_message = "Book title is added successfully.";
        }else{
            $_message =  "There is an error while saving data. Please try again later.";
        }
        
        //Utility::redirect('index.php');
    }
}
