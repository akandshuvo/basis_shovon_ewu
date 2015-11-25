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
        echo "<pre>";
        var_dump($array);
        echo "</pre>";
        echo "<br>";

//Example 1
$array1=array("name"=>"shovon","id"=>"108012",'BASIS web Development');
        echo "<pre>";
        var_dump($array1);
        echo "</pre>";
        echo "<br>";
//Example 2
$array2=array("name"=>"shovon","id"=>"108012",10=>'BASIS web Development','language'=>'php','batch-13');
        echo "<pre>";
        var_dump($array2);
        echo "</pre>";
        echo "<br>";        
        
        //
        $loop = array('0' =>'shovon','1'=>'mamun','2'=>'suzon');
        for($i=0;$i<=2;$i++){
                echo "<pre>";
                $a=$loop[$i];
                var_dump($a);
                echo "</pre>";
        }

         ?>


</body>
</html>