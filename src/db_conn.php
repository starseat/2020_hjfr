<?php
    //header("Access-Control-Allow-Headers: X-Requested-With, X-Prototype-Version");
    
	$servername = "127.0.0.1";
	$username = "hjfr_user";
	$password = "hjfr_pw";
    $dbname = "hjfrdb";
    $dbport = 3307;

	$conn = mysqli_connect($servername, $username, $password, $dbname, $dbport);

	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
    }
