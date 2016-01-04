<?php
    ini_set('display_errors','Off');
    include_once("../../../vendor/autoload.php");
    
    use \App\BITM\SEIP108012\organization\organization;
    
    $organization = new Organization();
    $organization = $organization->index();
    
    
    
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Organization Information</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    </head>
    <body>
        <div class="text-center"><h1>Organization Information</h1><hr></div>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <a href="create.php" class="pull-right"><button class="btn btn-success">ADD NEW</button></a><br><br>
                    <table class=" table table-bordered">
                        <thead>
                            <tr>
                                <th>Sl</th>
                                <th>Name</th>
                                <th>SUMMARY</th>
                                <th>Action</th>
                            </tr>
                        </thead>                       
                            <?php
                               $serialno =1;
                               foreach($organization as $organization){
                               ?>
                                <tr>
                                    <td><?php echo $serialno; ?></td>
                                    <td><?php echo $organization->org_name; ?></td>
                                    
                                    <td><?php echo $organization->org_description; ?></td>
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
