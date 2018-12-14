<?php session_start();
$account_id=$_SESSION['client']['account_id'];
/*
 * Library of Functions
 */
require('../connection.php');

    foreach ($db->query('SELECT * FROM orders INNER JOIN item ON orders.orders_id = item.item_orders_id 
    WHERE orders_id = '.$_GET['id']) as $row)
        {
            if ($row['orders_account_id']=$account_id){
                $orderList= "<h3><b>Order #</b>" . $row['orders_id'] . " Details </h3> ";
                $orderList.= "<p><b>Order Date:</b>".$row['orders_date']."</p>";
                $orderList.=  "<p><b>".$row['orders_full_qty']."</b> people ordered full portions</p>";
                $orderList.=  "<p><b>".$row['orders_half_qty']."</b> people ordered half portions</p><h4>Item Details</h4>";
                $orderList.= "<h4>".$row['item_order_qty']." boxes of ".$row['item_count']." ".$row['item_unit']." ".$row['item_name']."</h4>";
                $orderList.=  "<p><b>Sub-total: </b>$".$row['item_order_cost']."</p>";
                $orderList.=  "<p><b>Grand Total: </b>$".$row['orders_total']."</p><hr/>";
               

            } else {
                $message =  "<p>No orders could be found</p>";
            }
            
            //include '../dashboard.php';
            break;
    }

   

?>