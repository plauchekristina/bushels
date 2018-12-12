<?php
session_start();
/*
 * Library of Functions
 */
require('../connection.php');
//var_dump($_POST);
//echo "SESSION DUMP STARTS HERE:";
//var_dump($_SESSION);
//session start
//$userSession = $_POST["username"];

$account_id= $_SESSION['client']['account_id'];


  $first_name= htmlspecialchars($_POST ['first_name']);
  $last_name= htmlspecialchars($_POST ['last_name']);
  $email= htmlspecialchars($_POST ['email']);
  $username= htmlspecialchars($_POST ['username']);
  //$user_password= htmlspecialchars($_POST ['user_password']); 
  //$hashedPassword = password_hash($user_password, PASSWORD_DEFAULT);
  

   
    // The SQL statement
    $sql = 'UPDATE account 
    SET 
    first_name = :first_name, 
    last_name = :last_name, 
    email = :email, 
    username = :username 
    WHERE 
    account_id ='.$account_id;
    // Create the prepared statement using the db connection
    $stmt = $db->prepare($sql);
    // The next four lines replace the placeholders in the SQL
    // statement with the actual values in the variables
    // and tells the database the type of data it is
    $stmt->bindValue(':first_name', $first_name, PDO::PARAM_STR);
    $stmt->bindValue(':last_name', $last_name, PDO::PARAM_STR);
    $stmt->bindValue(':email', $email, PDO::PARAM_STR);
    $stmt->bindValue(':username', $username, PDO::PARAM_STR);
    try {
        $stmt->execute();
    }
       catch (Exception $e) {
        //echo $e;
    }


    
      // The SQL statement
      $sql = 'SELECT account_id, first_name, last_name, username,email FROM account WHERE username = :username';
      // Create the prepared statement using the db connection
      $stmt = $db->prepare($sql);
      // The next lines replace the placeholders in the SQL
      // statement with the actual values in the variables
      // and tells the database the type of data it is
      $stmt->bindValue(':username', $username, PDO::PARAM_STR);
      // Insert the data
      try {
          $stmt->execute();
          $client= $stmt->fetch();
          $_SESSION['client']=$client;
        
      }
         catch (Exception $e) {
         // echo $e;
      }
   header('Location:../account.php');
   exit("Unable to connect to the site");
?>
