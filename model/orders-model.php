<?php session_start();
/*
 * Library of Functions
 */
require('../connection.php');
//var_dump($_POST);
//var_dump($_SESSION);

$account_id=htmlspecialchars($_POST ['account_id']);


// The SQL statement
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
    $coop_id= $_SESSION['coop']['coop_id']; 
}
   catch (Exception $e) {
    //echo $e;
}





$orders_total=htmlspecialchars($_POST ['grand-total']);
$orders_full_qty=htmlspecialchars($_POST ['full-count']);
$orders_full_budget=htmlspecialchars($_POST ['full-budget']);
$orders_half_qty=htmlspecialchars($_POST ['half-count']);
$orders_half_budget=htmlspecialchars ($_POST ['half-budget']);
$orders_date=htmlspecialchars ($_POST ['order-date']);
 
$item_name=htmlspecialchars($_POST ['item-name']);
$item_count=htmlspecialchars($_POST ['item-count']);
$item_unit=htmlspecialchars($_POST ['item-unit']);
$item_price=htmlspecialchars($_POST ['item-price']);
$item_full_qty=htmlspecialchars($_POST ['per-full']);
$item_half_qty=htmlspecialchars($_POST ['per-half']);
$item_order_qty=htmlspecialchars($_POST ['item-quantity']);
$item_order_cost=htmlspecialchars($_POST ['item-total']);


  

      // The SQL statement
      $sql = 'INSERT INTO orders (orders_account_id, orders_coop_id, orders_total, orders_full_qty, orders_half_qty, orders_full_budget, orders_half_budget, orders_date)
          VALUES (:orders_account_id, :orders_coop_id, :orders_total, :orders_full_qty, :orders_half_qty, :orders_full_budget, :orders_half_budget, :orders_date)';
      // Create the prepared statement using the db connection
      $stmt = $db->prepare($sql);
      // The next lines replace the placeholders in the SQL
      // statement with the actual values in the variables
      // and tells the database the type of data it is
      $stmt->bindValue(':orders_account_id', $account_id, PDO::PARAM_INT);
      $stmt->bindValue(':orders_coop_id', $coop_id, PDO::PARAM_INT);
      $stmt->bindValue(':orders_total', $orders_total, PDO::PARAM_INT);
      $stmt->bindValue(':orders_full_qty', $orders_full_qty, PDO::PARAM_INT);
      $stmt->bindValue(':orders_half_qty', $orders_half_qty, PDO::PARAM_INT);
      $stmt->bindValue(':orders_full_budget', $orders_full_budget, PDO::PARAM_INT);
      $stmt->bindValue(':orders_half_budget', $orders_half_budget, PDO::PARAM_INT);
      $stmt->bindValue(':orders_date', $orders_date, PDO::PARAM_STR);
      // Insert the data
      try {
        $stmt->execute();
         $last_id = $db->lastInsertId();
      }
         catch (Exception $e) {
          //echo $e;
      }



      // The SQL statement
      $sql = 'INSERT INTO item (item_orders_id, item_name, item_count, item_unit, item_price, item_full_qty, item_half_qty, item_order_qty, item_order_cost)
      VALUES (:item_orders_id, :item_name, :item_count, :item_unit, :item_price, :item_full_qty, :item_half_qty, :item_order_qty, :item_order_cost)';
  // Create the prepared statement using the db connection
  $stmt = $db->prepare($sql);
  // The next lines replace the placeholders in the SQL
  // statement with the actual values in the variables
  // and tells the database the type of data it is
  $stmt -> bindValue(':item_orders_id', $last_id, PDO::PARAM_INT);
  $stmt -> bindValue(':item_name', $item_name, PDO::PARAM_STR);
  $stmt-> bindValue(':item_count', $item_count, PDO::PARAM_INT);
  $stmt-> bindValue(':item_unit', $item_unit, PDO::PARAM_STR);
  $stmt-> bindValue(':item_price', $item_price, PDO::PARAM_INT);
  $stmt-> bindValue(':item_full_qty', $item_full_qty, PDO::PARAM_INT);
  $stmt-> bindValue(':item_half_qty', $item_half_qty, PDO::PARAM_INT);
  $stmt-> bindValue(':item_order_qty', $item_order_qty, PDO::PARAM_INT);
  $stmt-> bindValue(':item_order_cost', $item_order_cost, PDO::PARAM_INT);
  // Insert the data
  try {
      $stmt->execute();
     
  }
     catch (Exception $e) {
     // echo $e;
  }

 header('Location:../dashboard.php');
 die();
?>