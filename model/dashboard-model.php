<?php
session_start();
/*
 * Library of Functions
 */
require('../connection.php');
//var_dump($_POST);
//session start
//$userSession = $_POST["username"];


  $username= htmlspecialchars($_POST ['username']);
  $user_password= htmlspecialchars($_POST ['user_password']); 
  
  

    //$db = dbConnect();
    // The SQL statement
    $sql = 'SELECT (account_id) FROM account WHERE username = :username)';
    // Create the prepared statement using the db connection
    $stmt = $db->prepare($sql);
    // The next four lines replace the placeholders in the SQL
    // statement with the actual values in the variables
    // and tells the database the type of data it is
    $stmt->bindValue(':username', $username, PDO::PARAM_STR);
    $stmt->bindValue(':user_password', $user_password, PDO::PARAM_STR);
    // Insert the data
    try {
        $stmt->execute();
        $_SESSION['user_id']=$userId;
    }
       catch (Exception $e) {
       // echo $e;
    }
header('Location: ../dashboard.php');
die(); 
    
    
?>
