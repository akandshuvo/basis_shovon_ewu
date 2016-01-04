<?php

namespace App\BITM\SEIP108012\Email;

use \App\BITM\SEIP108012\Utility\Utility;

class Email {
    
    public $id = "";
    public $email = "";
    public $user_name = "";
    public $address = "";
    
    public function __construct($data = false){
        $this->email = $data['email'];
        $this->user_name = $data['user_name'];
        $this->address = $data['address'];
    }
    
    public function index(){
        
        $email = array();
        
        $conn = mysql_connect("localhost","root","") or die("Cannot connect database.");
        $lnk = mysql_select_db("atomicproject13") or die("Cannot select database.");

        
        $query = "SELECT * FROM `email`";
        $result = mysql_query($query);
        
        while($row = mysql_fetch_object($result)){
            $email[] = $row;
        }
        return $email;
    }
    
    
    public function store(){
       
        $conn = mysql_connect("localhost","root","") or die("Cannot connect database.");

        $lnk = mysql_select_db("atomicproject13") or die("Cannot select database.");

        
        $query = "INSERT INTO `atomicproject13`.`email` ( `email`,`user_name`,`address`) VALUES ( '".$this->email."','".$this->user_name."','".$this->address."')";

        $result = mysql_query($query);
        
        
         if ( $result ) {
            echo '<script>alert("Sucess!!!")</script>';
            header("Refresh:0; url=index.php");
          } else {
            die("Error: {$mysqli->errno} : {$mysqli->error}");
          }
        
        //Utility::redirect('index.php');
    }
}
