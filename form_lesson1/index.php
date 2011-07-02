<?php

    if( !empty( $_REQUEST['name'] ) ) {        
        echo "Hello {$_REQUEST['name']} you are {$_REQUEST['age']} years old!";
    }

?>
<html>
    <head>
    </head>
    <body>
        <h1>Hello Ron!</h1>
        <form>
            <label>
                Name:
                <input type='text' name='name' >
            </label>
            
            <label>
                Age:
                <input type='text' name='age' >
            </label>

            <input type='submit' >
        </form>

        

    </body>
</html>