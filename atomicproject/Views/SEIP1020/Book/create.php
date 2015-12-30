<!DOCTYPE html>
<html>
    <head>
        <title>Create</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <form action="store.php" method="post">
            <fieldset>
                <legend>Add Book Title</legend>
                
                <div>
                    <label>Enter Book Title</label>
                    <input autofocus="autofocus" 
                    
                           placeholder="Enter the title of your favorite book" 
                           type="text" 
                           name="title"
                     
                           required="required"
                      
                           />
                 </div>
                <div>
                    <label>Enter Author</label>
                    <input placeholder="Enter author name" 
                           type="text" 
                           name="author"
                           required="required"
                      
                           />
                </div>
                <button  type="submit">Save</button>
                <button  type="submit">Save & Add Again</button>
<!--                <input type="submit" value="Save" />-->
                <input type="reset" value="Reset" />
            </fieldset>
        </form> 
        <nav>
            <li><a href="index.php">Go to List</a></li>
            <li><a href="javascript:history.go(-1)">Back</a></li>
        </nav>
    </body>
</html>


