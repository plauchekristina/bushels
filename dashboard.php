<?php session_start();
$account_id=$_SESSION['client']['account_id'];
if (!isset($_SESSION['client'])){
    header('Location:login.php');
}?>
<?php include('/common/nav.php');?> 
<!---  ####### Body content begins ####### -->
<div class="jumbotron">
        <div class="container text-center">
            <h1>Orders Dashboard</h1>
        </div>
    </div>
    <div class="container text-center">
        <div class="row">
            <div class="col-sm-12 panel panel-default text-left">
                <div  class="panel-body">
                <h2>
                        <?php echo "Welcome, ".$_SESSION['client']['first_name'];?>
</h2>
<p> 
                    <?php 
                    echo "<strong>Today is:</strong> ".date("m/d/Y");?></p>        
            </div>
            </div>

   

            <!-- Left column -->
            <div class="col-sm-3 well">
                <div class="well">
                    <h2><?php echo $_SESSION['coop']['coop_name'];?></h2>
<?php if (!isset($_SESSION['coop']['coop_name'])){ echo "<h3>Please <a href='co-op.php'>create your co-op</a></h3>";}?>
        <p><b>Full Budget:</b> <?php echo "$".$_SESSION['coop']['coop_full_budget'];?></p>
        <p><b>Half Budget:</b> <?php echo "$".$_SESSION['coop']['coop_half_budget'];?></p>
                          
        <form action="order-form.php">
        <input type="submit" name="submit" id="regbtn" value="New Order" class="btn-success">
</form>
                           
                            
                            
            
                </div>


            </div>

            <!-- Center column -->
            <div class="col-sm-9">

                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel panel-default text-left well">
                            <div class="panel-body">
                            <h2>Past orders:</h2>
                        
                              <!-- Join Query-->
                               <?php
                            require('connection.php');
                                foreach ($db->query('SELECT * FROM orders INNER JOIN item ON orders.orders_id = item.item_orders_id 
                                WHERE orders_account_id = '.$account_id) as $row)
                                    {
                                        if ($row['orders_account_id']=$account_id){
                                            echo "<h3><b>Order #</b>" . $row['orders_id'] . " Details </h3> ";
                                            echo "<p><b>Order Date:</b>".$row['orders_date']."</p>";
                                            echo "<p><b>".$row['orders_full_qty']."</b> people ordered full portions</p>";
                                            echo "<p><b>".$row['orders_half_qty']."</b> people ordered half portions</p><h4>Item Details</h4>";
                                            echo "<h4>".$row['item_order_qty']." boxes of ".$row['item_count']." ".$row['item_unit']." ".$row['item_name']."</h4>";
                                            echo "<p><b>Sub-total: </b>$".$row['item_order_cost']."</p>";
                                            echo "<p><b>Grand Total: </b>$".$row['orders_total']."</p><hr/>";
                                            echo "<p><a href='./orders-view.php?id=".$row['orders_id']."'>View</a></p>";
                                            
                                
                                        } else {
                                            echo "<p>No orders could be found</p>";
                                        }
                                     
                    
                                }
                              ?>

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