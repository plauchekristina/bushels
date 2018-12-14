<?php session_start();
require('../connection.php');
require('../library/functions.php');  



$first_name= htmlspecialchars($_POST ['first_name']);
$last_name= htmlspecialchars($_POST ['last_name']);
$email= htmlspecialchars($_POST ['email']);
$username= htmlspecialchars($_POST ['username']);
$user_password= htmlspecialchars($_POST ['user_password']); 
$hashedPassword = password_hash($user_password, PASSWORD_DEFAULT);

$email = checkEmail($email);

// Check for existing email address in the table

$existingEmail = checkExistingEmail($email);

if($existingEmail){
 $message = '<p class="notice">That email address already exists. Do you want to login instead?</p>';
 include '../login.php';
 exit;
}

// Check for missing data
if(empty($first_name) || empty($last_name) || empty($email) || empty($user_password)){
    $message = '<div class="fail-message"><p>*Please provide information for all empty form fields.</p></div>';
    include '../register.php';
    exit; 
   }

?>