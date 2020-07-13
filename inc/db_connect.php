<?php


    $host = "localhost";
    $username = "php_login_user";
    $password = "rfku.6TbZ~Wi";
    $dbname = "shopify_apps_dev";
    
    $conn = mysqli_connect($host, $username, $password, $dbname);
    
    
    // checking db connection 
    
    if( !$conn){
        die("Error database connection" . mysqli_connect_error() );
    }