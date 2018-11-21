<?php session_start();
$account_id=$_SESSION['client']['account_id'];
   
?>
<?php include($_SERVER["DOCUMENT_ROOT"] . '/common/nav.php');?> 
<!---  ####### Body content begins ####### -->

    <div class="container text-center">
        <div class="row">
            <div class="col-sm-12 panel panel-default text-left">
                <div  class="panel-body">
                    <p> <?php
                            require('connection.php');
                                foreach ($db->query('SELECT * FROM orders INNER JOIN item ON orders.orders_id = item.item_orders_id 
                                WHERE orders_id = '.$_GET['id']) as $row)
                                    {
                                        if ($row['orders_account_id']=$account_id){
                                            echo "<h3><b>Order #</b>" . $row['orders_id'] . " Details </h3> ";
                                            echo "<p><b>Order Date:</b>".$row['orders_date']."</p>";
                                            echo "<p><b>".$row['orders_full_qty']."</b> people ordered full portions</p>";
                                            echo "<p><b>".$row['orders_half_qty']."</b> people ordered half portions</p><h4>Item Details</h4>";
                                            echo "<h4>".$row['item_order_qty']." boxes of ".$row['item_count']." ".$row['item_unit']." ".$row['item_name']."</h4>";
                                            echo "<p><b>Sub-total: </b>$".$row['item_order_cost']."</p>";
                                            echo "<p><b>Grand Total: </b>$".$row['orders_total']."</p><hr/>";
                                           
                                            
                                
                                        } else {
                                            echo "<p>No orders could be found</p>";
                                        }
                                     
                            
                                }
                              ?></p>
                   
            </div>
            </div>

   

            <!-- Left column -->
            <div class="col-sm-3 well">
                <div class="well">
                    <h2>
                        <?php echo "Welcome, ".$_SESSION['client']['first_name'];?>
</h2>
                    
<br><p> 
                    <?php 
                    echo "<strong>Today is:</strong> ".date("m/d/Y");?></p>
                </div>
<?php  echo "<br/>Id: ".$_SESSION['client']['account_id'];?>

            </div>

            <!-- Center column -->
            <div class="col-sm-9">

                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel panel-default text-left well">
                            <div class="panel-body">
                            <p>Past orders:</p>
                           

                            </div>
                        </div>
                    </div>
                </div>


            </div>
<!--end center column-->
</div> 
</div>        
       
<script src ="/scripts/functions.js"></script>
    <?php include($_SERVER["DOCUMENT_ROOT"] . '/common/footer.php');?> 