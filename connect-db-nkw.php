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
    $username = "bde447b744111c";
    $password = "e35fa8d6";
    $db = "heroku_58997c1013c3e1";
    $conn = new mysqli($server, $username, $password, $db);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    mysqli_query($conn, "SET NAMES utf8");
