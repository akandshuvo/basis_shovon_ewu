<?php
    ini_set('display_errors','Off');
    include_once("../../../vendor/autoload.php");
    
    use \App\BITM\SEIP1020\Book\Book;
    
    $book = new Book();
    $books = $book->index();
    
    
    
?>

<!DOCTYPE html>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            #utility{
                float:right;
                width:60%;
            }
        </style>
    </head>
    <body>
        <h1>Book Title</h1>
        <div><span>Search / Filter </span> 
            <span id="utility">Download as PDF | XL  <a href="create.php">Add New</a></span>
            <select>
                <option>10</option>
                <option>20</option>
                <option>30</option>
                <option>40</option>
                <option>50</option>
            </select>
        </div>
        <table border="1">
            <thead>
                <tr>
                    <th>Sl.</th>
                    <th>ID</th>
                    <th>Book Title &dArr;</th>
                     <th>Author &dArr;</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
               <?php
               $slno =1;
               foreach($books as $book){
               ?>
                <tr>
                    <td><?php echo $slno;?></td>
                    <td><?php echo $book->id;?></td>
                    <td><a href="#"><?php echo $book->title;?></a></td>
                    <td><?php echo $book->author;?></td>
                    <td>View | Edit | Delete | Trash/Recover | Email to Friend </td>
                </tr>
            <?php
           $slno++;
            }
            ?>
            </tbody>
        </table>
        <div><span> prev  1 | 2 | 3 next </span></div>
    </body>
</html>
