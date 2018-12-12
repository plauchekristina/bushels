<?php
session_start();
/*
 * Library of Functions
 */
require('../connection.php');
//var_dump($_POST);


    $coop_user_id=htmlspecialchars($_POST ['account_id']);
    $coop_name= htmlspecialchars($_POST ['coop_name']);
    $contact_name= htmlspecialchars($_POST ['contact_name']);
    $contact_email= htmlspecialchars($_POST ['contact_email']);
    $full_budget= htmlspecialchars($_POST ['full_portion_budget']);
    $half_budget= htmlspecialchars($_POST ['half_portion_budget']); 
    
    
   
  
      //$db = dbConnect();
      // The SQL statement
      $sql = 'INSERT INTO coop (coop_user_id, coop_name, coop_contact_name, coop_contact_email, coop_full_budget, coop_half_budget)
          VALUES (:coop_user_id, :coop_name, :coop_contact_name, :coop_contact_email, :coop_full_budget, :coop_half_budget)';
      // Create the prepared statement using the db connection
      $stmt = $db->prepare($sql);
      // The next four lines replace the placeholders in the SQL
      // statement with the actual values in the variables
      // and tells the database the type of data it is
      $stmt->bindValue(':coop_user_id', $coop_user_id, PDO::PARAM_STR);
      $stmt->bindValue(':coop_name', $coop_name, PDO::PARAM_STR);
      $stmt->bindValue(':coop_contact_name', $contact_name, PDO::PARAM_STR);
      $stmt->bindValue(':coop_contact_email', $contact_email, PDO::PARAM_STR);
      $stmt->bindValue(':coop_full_budget', $full_budget, PDO::PARAM_INT);
      $stmt->bindValue(':coop_half_budget', $half_budget, PDO::PARAM_INT);
      // Insert the data
      try {
          $stmt->execute();
      }
         catch (Exception $e) {
          //echo $e;
      }

      ///get coop data as array
$account_id= $_SESSION['client']['account_id'];

    // The SQL statement for pulling the co-op data to save to the session
$sql = 'SELECT * FROM coop WHERE coop_user_id = :account_id';
// Create the prepared statement using the db connection
$stmt = $db->prepare($sql);
// The next four lines replace the placeholders in the SQL
// statement with the actual values in the variables
// and tells the database the type of data it is
$stmt->bindValue(':account_id', $account_id, PDO::PARAM_INT);
// Insert the data
try {
    $stmt->execute();
    $coop_data= $stmt->fetch();
    $_SESSION['coop'] = $coop_data; 
}
   catch (Exception $e) {
    //echo $e;
}
      header('Location: ../dashboard.php'); 
      exit("Unable to connect to the site");
?>

