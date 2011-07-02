<?php

    function create_sql( $data ) {
        
       foreach( $data AS $key => $value ) {
            if( in_array( $key, array('submit', 'upload') ) ) continue;
            //$value = mysql_real_escape_string( $value );
            $setData[] = "{$key} = '{$value}'";                 
        }

        $setData = implode( ', ', $setData );
        $sql = "INSERT INTO blogs SET {$setData};";
        // print $sql;
        return( $sql );
        
    }