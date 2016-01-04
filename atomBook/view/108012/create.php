<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Create a New item</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<body>
	
	<h1>Create New Content</h1>
<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<form action="store.php">
			  <div class="form-group">
			    <label for="title">ENter Book Title</label>
			    <input type="text" class="form-control" id="title" name="title"  placeholder="Book Title">
			  </div>

			  
			  <button type="submit" class="btn btn-default">SAVE</button>
			  <button type="submit" class="btn btn-default">Save and Create Again</button>
			  <button type="reset" class="btn btn-default">Reset</button>
			</form>
		</div>
	</div>
</div>
	

</body>
</html>