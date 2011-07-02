<?php

    // phpinfo();    
    error_reporting( E_ALL );
    ini_set("display_errors", 1); 

    // include functions
    require( 'functions.php' );

    // Connect to database
    $link = mysql_connect('localhost', 'root', 'root');
    if (!$link) {
        die('Could not connect: ' . mysql_error());
    } else {
        mysql_select_db( 'blog', $link );
    }
    
    // Process submitted data     
    if( isset($_REQUEST['submit']) ) {

        // Handle file uploads        
        if( $_REQUEST['upload'] == 1 ) {
            
            $success = move_uploaded_file( $_FILES['image']['tmp_name'], "images/{$_FILES['image']['name']}");
            if( $success ) {
                // store in DB
                $sql = "INSERT INTO images SET filename='{$_FILES['image']['name']}';";
                mysql_query( $sql );
            } else {
                die('Error');
            }
            
            // We dont need image_id anymore
            unset( $_REQUEST['image_id'] );
            
        }
 
        // Insert submitted data
        $sql = create_sql( $_REQUEST );               
        $result = mysql_query( $sql );               
        if( mysql_error() ) die( mysql_error() );
        
        // Redirect script after submission
        header( "Location:{$_SERVER['PHP_SELF']}" );
        exit;
                
    }
    
    // Populate dropdown data
    $result = mysql_query( 'SELECT * FROM images' );
    while ( $row = mysql_fetch_assoc ( $result ) ) {
        $images[$row['id']] = $row['filename'];
    }
     
?>
<html>
    <head>
        <link href='screen.css' rel='stylesheet' type='text/css' />
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script> 
        <script type="text/javascript" src="javascript.js"></script> 
    </head>
    <body>
        <h1>PHP Form Data</h1>
        <form method='post' enctype='multipart/form-data'>
            
            <label>Title:
                <input type='text' name='title' />
            </label>
            
            <label>Article:
                <input type='text' name='article' />
            </label>

            <label>Notes:
                <textarea name='notes'></textarea>
            </label>
            
            <label class='uploadImage'>
                Image:
                <label>
                    <input type='radio' name='upload' value='0' checked='checked' />
                    Pick an existing file
                </label>
                
                <label>
                    <input type='radio' name='upload' value='1' />
                    Upload a new file instead
                </label>

                <label class='uploadFile'>
                    File:
                    <input type='file' name='image' />
                </label>

                <label class='selectImage'>File:
                    <select name='image_id'>
                        <?php foreach( $images AS $key => $image ) : ?>
                            <option value='<?php echo $key; ?>'><?php echo $image ?></option> 
                        <?php endforeach; ?>
                    </select>
                </label>

            </label>
                    
            <input type='submit' name='submit' />
        </form>
    </body>
</html>