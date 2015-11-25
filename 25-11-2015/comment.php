<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>comment</title>
</head>
<body>
	
 		<?php
 		// one line comment
 		// Printing Variable value
            $print =5;
            echo $print;
        ?>

        <br>

        <%
        	#c Shell Comment
        	# Printing using ASP tag
            echo "ASP tag";
        %>

        <br>

        <?
        	/*	
        		>> Multiline Comment
        		>> Taking variable with value.
        		>> Adding the variables value.
        		>> Printing sum
        	*/
            $a=10;
            $b=20;
            $c=$a+$b;
            echo $c;
        ?>

        <br>
        
        <script language="php">
   			/*
   				>> Multiline Comment
				>> Take string in variables
				>> print them
   			*/	
            $name="Shovon Rahman";
            $id ="108012";

            echo $name."&nbsp;".">>>".$id
        </script>


</body>
</html>