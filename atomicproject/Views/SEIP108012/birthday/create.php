<!DOCTYPE html>
<html>
    <head>
        <title>Create</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    </head>
    <body>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-center">
              <h2>BIRTHDAY</h2>
            </div>
            <hr>
          </div>
          <div class="col-md-5 col-md-offset-4">
            
                <form action="store.php" method="post">
                    <div class="form-group">
                      <label for="name">Name</label>
                      <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                    </div>  


                    <div class="form-group">
                      <label for="birth_date">Organization Name</label>
                      <input type="date" class="form-control" id="org_name" name="org_name" placeholder="Organization Name" required>
                    </div>   
                          
                    <button class="btn btn-success" type="submit">Save</button>
                    <button class="btn btn-warning" type="reset">Reset</button>
                </form> 
          </div>
        </div>
        
      </div>
        
    </body>
</html>


