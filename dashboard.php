<?php session_start();
$account_id=$_SESSION['client']['account_id'];
if (!isset($_SESSION['client'])){
    header('Location:login.php');
    include('controller/orders-controller.php');
}?>
<?php include($_SERVER["DOCUMENT_ROOT"] . '/common/nav.php');?> 
<!---  ####### Body content begins ####### -->

    <div class="container text-center">
        <div class="row">
            <div class="col-sm-12 panel panel-default text-left">
                <div  class="panel-body">
                <h1 class="red">Past Orders</h1>

                        <h2><?php echo $_SESSION['coop']['coop_name'];?></h2>
                        <?php if (!isset($_SESSION['coop']['coop_name'])){ echo "<h3>Please <a href='co-op.php'>create your co-op</a></h3>";}?>
                                <p><b>Full Budget:</b> <?php echo "$".$_SESSION['coop']['coop_full_budget'];?></p>
                                <p><b>Half Budget:</b> <?php echo "$".$_SESSION['coop']['coop_half_budget'];?></p>
                               
                 
                               <!--  <form action="order-form.php">
                                <input type="submit" name="submit" id="regbtn" value="New Order" class="btn-primary">
                        </form> -->
                            
            </div>
            </div>
            <!-- Top column end-->
          
            <!-- Center column -->
            <div class="col-sm-12">

                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel panel-default text-left">
                            <div class="panel-body">
                              <!-- Join Query-->
                               <?php
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