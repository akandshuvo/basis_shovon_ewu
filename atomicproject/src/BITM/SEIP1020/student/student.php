<?php

namespace App\BITM\SEIP1020\student;

use \App\BITM\SEIP1020\Utility\Utility;

class student{
    
    public $id = "";
    public $name = "";
    public $email = "";
    public $bitmid = "";
    //public $created = "";
    ///public $modified = "";
    // public $created_by = "";
    // public $modified_by = "";
    // public $deleted_at = ""; //soft delete
    
    public function __construct($data = false){
        $this->name = $data['name'];
        $this->email = $data['email'];
        $this->bitmid = $data['bitmid'];
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
        
        $query = "INSERT INTO `atomicproject`.`student` ( `name`,`email`,`bitmid`) VALUES ( '".$this->name."','".$this->email."','".$this->bitmid."')";
        //echo $query;
        //echo $query;
        //die();
        $result = mysql_query($query);
        
        if($result){
            echo "<script>alert('Uploaded Successfull!!!!y')</script>";
            header("Refresh:2; url=../student/create.php");
        }else{
            echo "<script>alert('Uploading not Successfull!!!!!!!')</script>";
            header("Refresh:2; url=../student/create.php");
        }
        
        //Utility::redirect('index.php');
    }
}
