<?php session_start();
$account_id=$_SESSION['client']['account_id'];
   
?>
<?php include($_SERVER["DOCUMENT_ROOT"] . '/common/nav.php');?> 
<!---  ####### Body content begins ####### -->
<div class="box">
           
                <div class="card text-left">
                    <div class="card-header full green">
                    <h2> <?php echo $_SESSION['coop']['coop_name'];?> Order Form</h2>
                    </div>
                <div  class='card-body'>
                    <p> <?php
                            require('connection.php');
                                foreach ($db->query('SELECT * FROM orders INNER JOIN item ON orders.orders_id = item.item_orders_id 
                                WHERE orders_id = '.$_GET['id']) as $row)
                                    {
                                        if ($row['orders_account_id']=$account_id){
                                            echo "<h3>Order Id #" . $row['orders_id'] . " </h3> ";
                                            echo "<p><b>Order Date:</b>".$row['orders_date']."</p>";
                                            echo "<p><b>".$row['orders_full_qty']."</b> people ordered full portions</p>";
                                            echo "<p><b>".$row['orders_half_qty']."</b> people ordered half portions</p><h2 class='btn-primary'>Item Details</h2>";
                                            echo "<h4>".$row['item_order_qty']." boxes of ".$row['item_count']." ".$row['item_unit']." ".$row['item_name']."</h4>";
                                            echo "<p><b>Sub-total: </b>$".$row['item_order_cost']."</p>";
                                            echo "<p><b>Grand Total: </b>$".$row['orders_total']."</p><hr/>";
                                           
                                            
                                
                                        } else {
                                            echo "<p>No orders could be found</p>";
                                        }
                                     
                            
                                }
                              ?>
                           
                            </p>
                            <button onclick="pagePrint()" class="btn-primary">Print this page</button>
            </div>
           

           

           
</div> 
</div>        
       
<script src ="/scripts/functions.js"></script>
    <?php include($_SERVER["DOCUMENT_ROOT"] . '/common/footer.php');?> 