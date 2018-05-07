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
    $server = "us-cdbr-iron-east-04.cleardb.net";
    $username = "bd2d540402f8a6";
    $password = "3994dd0c";
    $db = "heroku_6268f8d29d18898";
    $conn = new mysqli($server, $username, $password, $db);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    mysqli_query($conn, "SET NAMES utf8");
