<?php

    require_once("inc/functions.php");
    
    $requests = $_GET;
    $hmac = $_GET['hmac'];
    $serializeArray = serialize($requests);
    $requests = array_diff_key($requests, array('hmac' => ''));
    ksort($requests);
    
    $token = ""; // your app's access Token
    
    $url = parse_url('https://' . $requests['shop'] );
    $host = explode('.', $url['host']);
    $shop = $host[0];
    
    


?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>RedApple = Apps </title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/css/bootstrap-grid.min.css" rel="stylesheet">
  <link href="vendor/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/css/main.css" rel="stylesheet">

</head>

<body>

 <!-- Page Content -->
 <div class="container p-3">
   <div class="row">
     <div class="col-lg-12 text-center">
       <h1 class="mt-5">Welcome! to my app</h1>
       <hr>
       <?php
            // write php code here
       ?>
     </div>
   </div>
 </div>
 

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/js/jquery.min.js"></script>
  <script src="vendor/js/bootstrap.min.js"></script>

</body>

</html>
