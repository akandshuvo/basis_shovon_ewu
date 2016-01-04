<?php
    ini_set('display_errors','Off');
    include_once("../../../vendor/autoload.php");
    
    use \App\BITM\SEIP108012\Email\Email;
    
    $email = new Email();
    $email = $email->index();
    
    
    
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Email subscription Test</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    </head>
    <body>
        <div class="text-center"><h1>Email Subscription List</h1><hr></div>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <a href="create.php" class="pull-right"><button class="btn btn-success">ADD NEW</button></a><br><br>
                    <table class=" table table-bordered">
                        <thead>
                            <tr>
                                <th>Sl</th>
                                <th>Name</th>
                                <th>EMAIL</th>
                                <th>ADDRESS</th>
                                <th>Action</th>
                            </tr>
                        </thead>                       
                            <?php
                               $serialno =1;
                               foreach($email as $email){
                               ?>
                                <tr>
                                    <td><?php echo $serialno; ?></td>
                                    <td><?php echo $email->user_name; ?></td>
                                    <td><?php echo $email->email; ?></td>
                                    <td><?php echo $email->address; ?></td>
                                    <td>
                                        <a href=""><button class="btn btn-success">EDIT</button></a>
                                        <a href=""><button class="btn btn-danger">DELETE</button></a>
                                    </td>
                                </tr>
                            <?php
                           $serialno++;
                            }
                            ?>
                    </table>
                </div>
            </div>
        </div>
        
    </body>
</html>
