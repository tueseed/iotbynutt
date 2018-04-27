<?php
    // $servername = "localhost";
    // $username = "root";
    // $password = "";
    // $db = "voc";
    // // Create connection
    // $conn = new mysqli($servername, $username, $password, $db);
    // // Check connection
    // if ($conn->connect_error) {
    //     die("Connection failed: " . $conn->connect_error);
    // }
    // mysqli_query($conn, "SET NAMES utf8");
   // $url = parse_url(getenv("CLEARDB_DATABASE_URL"));
    $server = "us-cdbr-iron-east-05.cleardb.net";
    $username = "b85a84aef3cda9";
    $password = "978e64c3";
    $db = "heroku_c12b0636aaef1dd";
    $conn = new mysqli($server, $username, $password, $db);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    mysqli_query($conn, "SET NAMES utf8");
