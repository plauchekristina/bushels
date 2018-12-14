<?php
session_start();
/*
 * Library of Functions
 */
require('../connection.php');



////check Email
function checkEmail($email) {
    $valEmail = filter_var($email, FILTER_VALIDATE_EMAIL);
    return $valEmail;
}

function checkPassword($user_password) {
    $pattern = '/^(?=.*[[:digit:]])(?=.*[[:punct:]])[[:print:]]{8,}$/';
    return preg_match($pattern, $user_password);
}


   

?>