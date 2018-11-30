<?php
$servername = "localhost";
$dbname = "tplauche_bushels";
$username = "tplauche_bushels";
$password = "deM6D6nG*zgiTyioLcBL";

try {
    $db = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully"; 
    }
catch(PDOException $e)
    {
    //echo "Connection failed: " . $e->getMessage();
    die();
    }
?>