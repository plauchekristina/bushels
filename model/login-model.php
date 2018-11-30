<?php
session_start();
/*
 * Library of Functions
 */
require('../connection.php');
//var_dump($_POST);
//echo "####SESSION DUMP STARTS HERE";
//var_dump($_SESSION);
//session start
//$userSession = $_POST["username"];


  $username= htmlspecialchars($_POST ['username']);
  $user_password= htmlspecialchars($_POST ['user_password']); 
  $hashedPassword = password_hash($user_password, PASSWORD_DEFAULT);


    //$db = dbConnect();
    // The SQL statement
    $sql = 'SELECT * FROM account WHERE username = :username';
    // Create the prepared statement using the db connection
    $stmt = $db->prepare($sql);
    // The next four lines replace the placeholders in the SQL
    // statement with the actual values in the variables
    // and tells the database the type of data it is
    $stmt->bindValue(':username', $username, PDO::PARAM_STR);
    // Insert the data
    try {
        $stmt->execute();
        $client= $stmt->fetch();
        $_SESSION['username'] = $username;
        $_SESSION['client']=$client;
      
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
//getting logged in part
    $session_username= $_SESSION['client']['username'];
    $session_password= $_SESSION['client']['user_password'];

  
    /* // See the password_hash() example to see where this came from.
    $hash = '$2y$07$BCryptRequires22Chrcte/VlQH0piJtjXl.0t1XkA8pw9dMXTpOq';
    
    if (password_verify($user_password, $session_password)) {
        echo 'Password is valid! Hurray!';
    } else {
        echo 'Invalid password.';
        echo  $user_password= htmlspecialchars($_POST ['user_password']);
        echo $session_password= $_SESSION['client']['user_password'];
    }
    
    if (password_verify('rasmuslerdorf', $hash)) { 
        echo '<p>sample code Password is valid!</p>'; 

    } else { 
        echo 'Invalid password.'; 
    }  */

if (password_verify($user_password, $session_password)){
   //$_SESSION['client']['user_password']=NULL;
 
} 
$message = "Login successful.";
$_SESSION['message']=$message;
header('Location:../dashboard.php');
die();

/* if (!password_verify($user_password, $session_password)){
$message = "<p class='alert'>Your username and password didn't match. Please try again.</p>";
$_SESSION['message']=$message;
header('Location:../login.php');
die();} */
  
?>
