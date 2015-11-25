<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <title>array</title>
</head>
<body>
        <?php 
// Associative array
        $array=array("name"=>"shovon","id"=>"108012");
        echo " Associative array";
        echo "<pre>";
        var_dump($array);
        echo "</pre>";
        echo "<br>";

//Example 1
$array1=array("name"=>"shovon","id"=>"108012",'BASIS web Development');
        echo "EXAMPLE #1";
        echo "<pre>";
        var_dump($array1);
        echo "</pre>";
        echo "<br>";
//Example 2
$array2=array("name"=>"shovon","id"=>"108012",10=>'BASIS web Development','language'=>'php','batch-13');
        echo "EXAMPLE #2";
        echo "<pre>";
        var_dump($array2);
        echo "</pre>";
        echo "<br>";
//Example 3
$array3=array(false=>"shovon",true=>"108012",2.10=>'BASIS','language'=>'Web developmet in php','batch-13');
        echo "EXAMPLE #3";
        echo "<pre>";
        var_dump($array3);
        echo "</pre>";
        echo "<br>";                
//Example 4
$array4=array(false=>"shovon",true=>"108012",2.10=>'BASIS',2=>'BASIS Web developmet in php','batch-13');
        echo "EXAMPLE #4";  
        echo "<pre>";
        var_dump($array4);
        echo "</pre>";
        echo "<br>";         
        //
        $loop = array('0' =>'shovon','1'=>'mamun','2'=>'suzon');
        echo "Print Array value using for loop";
        for($i=0;$i<=2;$i++){
                echo "<pre>";
                $a=$loop[$i];
                var_dump($a);
                echo "</pre>";
        }

         ?>


</body>
</html>