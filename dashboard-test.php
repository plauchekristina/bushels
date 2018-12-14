<?php session_start();
$account_id=$_SESSION['client']['account_id'];
if (!isset($_SESSION['client'])){
    header('Location:login.php'); 
}
?>
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
                               <?php   echo $testVar;?>
                 
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
                             <?php  include ('controller/orders-controller.php');
                             
                   

                              echo "orders controller"
                              ?>
                              

                              <div id="print-area">This area will print </div>
                            </div>
                        </div>
                    </div>
                </div>

                <button onclick="pagePrint()" class="btn-primary">Print this page</button>
            </div>
<!--end center column-->
</div> 
</div>        
       
<script src ="/scripts/functions.js"></script>
    <?php include($_SERVER["DOCUMENT_ROOT"] . '/common/footer.php');?> 