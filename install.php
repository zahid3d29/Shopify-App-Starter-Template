<?php

// Set variables for our request
$shop = $_GET['shop'];
$api_key = "ed924a81e4313ac36a1675d3c5579d24"; // put your app API key here
$scopes = "read_orders,write_orders,read_products,write_products,read_themes,write_themes,write_script_tags";
$redirect_uri = "https://dev.btcinfluencer.com/token.php"; // put redirect url here. you will get it from your app

// Build install/approval URL to redirect to
$install_url = "https://" . $shop . "/admin/oauth/authorize?client_id=" . $api_key . "&scope=" . $scopes . "&redirect_uri=" . urlencode($redirect_uri);

// Redirect
header("Location: " . $install_url);
die();