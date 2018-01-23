<?php
    $conn=  mysql_connect('localhost', 'root', 'mysqlphp');
    if(!$conn){
        die("Can not Connect".mysql_error());
        
    }
    $db=  mysql_select_db('roofingStock',$conn);
    
?>