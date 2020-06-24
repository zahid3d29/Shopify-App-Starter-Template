<?php

// Set variables for our request
$shop = $_GET['shop'];
$api_key = ""; // put your app API key here
$scopes = "read_orders,write_products,read_themes,write_themes,write_script_tags";
$redirect_uri = ""; // put redirect url here. you will get it from your app

// Build install/approval URL to redirect to
$install_url = "https://" . $shop . ".myshopify.com/admin/oauth/authorize?client_id=" . $api_key . "&scope=" . $scopes . "&redirect_uri=" . urlencode($redirect_uri);

// Redirect
header("Location: " . $install_url);
die();