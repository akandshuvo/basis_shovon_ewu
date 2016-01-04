<?php

namespace App\BITM\SEIP108012\organization;

use \App\BITM\SEIP108012\Utility\Utility;

class Organization {
    
    public $id = "";
    public $org_name = "";
    public $org_description = "";
    
    public function __construct($data = false){
        $this->org_name = $data['org_name'];
        $this->org_description = $data['org_description'];
    }
    
    public function index(){
        
        $organization = array();
        
        $conn = mysql_connect("localhost","root","") or die("Cannot connect database.");
        $lnk = mysql_select_db("atomicproject13") or die("Cannot select database.");

        
        $query = "SELECT * FROM `organization`";
        $result = mysql_query($query);
        
        while($row = mysql_fetch_object($result)){
            $organization[] = $row;
        }
        return $organization;
    }
    
    
    public function store(){
       
        $conn = mysql_connect("localhost","root","") or die("Cannot connect database.");

        $lnk = mysql_select_db("atomicproject13") or die("Cannot select database.");

        
        $query = "INSERT INTO `atomicproject13`.`organization` ( `org_name`,`org_description`) VALUES ( '".$this->org_name."','".$this->org_description."')";

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
