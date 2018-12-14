<?php session_start();
/* $account_id=$_SESSION['client']['account_id']; */



    require('connection.php');
    foreach ($db->query('SELECT * FROM orders INNER JOIN item ON orders.orders_id = item.item_orders_id 
    WHERE orders_account_id = '.$account_id) as $row)
        {
            if ($row['orders_account_id']=$account_id){
                echo "<h3 class='green'><b>Order #</b>" . $row['orders_id'] . " Details </h3> ";
                echo "<p><b>Order Date:</b>".$row['orders_date']."</p>";
                echo "<p><b>".$row['orders_full_qty']."</b> people ordered full portions</p>";
                echo "<p><b>".$row['orders_half_qty']."</b> people ordered half portions</p><h4>Item Details</h4>";
                echo "<h4>".$row['item_order_qty']." boxes of ".$row['item_count']." ".$row['item_unit']." ".$row['item_name']."</h4>";
                echo "<p><b>Sub-total: </b>$".$row['item_order_cost']."</p>";
                echo "<p><b>Grand Total: </b>$".$row['orders_total']."</p>";
                echo "<p><a href='./orders-view.php?id=".$row['orders_id']."'class='btn btn-primary'>View</a></p><hr/>";
                
    
            } else {
                echo "<p>No orders could be found</p>";
            }

    } 



?>