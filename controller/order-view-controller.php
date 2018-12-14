<?php session_start();
require('connection.php');
                                foreach ($db->query('SELECT * FROM orders INNER JOIN item ON orders.orders_id = item.item_orders_id 
                                WHERE orders_id = '.$_GET['id']) as $row)
                                    {
                                        if ($row['orders_account_id']=$account_id){
                                            echo "<h3>Order Id #" . $row['orders_id'] . " </h3> ";
                                            echo "<p><b>Order Date:</b>".$row['orders_date']."</p>";
                                            echo "<p><b>".$row['orders_full_qty']."</b> people ordered full portions</p>";
                                            echo "<p><b>".$row['orders_half_qty']."</b> people ordered half portions</p><h2 class='brown'>Item Details</h2>";
                                            echo "<h4>".$row['item_order_qty']." boxes of ".$row['item_count']." ".$row['item_unit']." ".$row['item_name']."</h4>";
                                            echo "<p><b>Sub-total: </b>$".$row['item_order_cost']."</p>";
                                            echo "<p><b>Grand Total: </b>$".$row['orders_total']."</p><hr/>";
                                           
                                            
                                
                                        } else {
                                            echo "<p>No orders could be found</p>";
                                        }
                                     
                            
                                }
                                ?>