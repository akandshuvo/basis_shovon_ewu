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
            <div class="col-md-5 col-md-offset-3">
                <form action="store.php" method="POST">

                  <div class="form-group">
                    <label for="student_name">You Name</label>
                    <input type="text" class="form-control" id="student_name" name="name" placeholder="NAME">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Email">
                  </div>

                  <div class="form-group">
                    <label for="bitmid">BITM ID</label>
                    <input type="number" class="form-control" id="bitmid" name="bitmid" placeholder="Bitm ID">
                  </div>
                  
                  
                  <button type="submit" class="btn btn-default">Submit</button>
                </form>
            </div>
          </div>
        </div>
    </body>
</html>


