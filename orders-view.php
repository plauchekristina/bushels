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
                <div  class='card-body' id="print-area">
                    <p> <?php include ('controller/order-view-controller.php');
                       
                              ?>
                           
                            </p>
                            <button onclick="pagePrint()" class="btn-primary">Print this page</button>          
            </div>
           
           

           

           
</div> 
</div>        
       
<script src ="/scripts/functions.js"></script>
    <?php include($_SERVER["DOCUMENT_ROOT"] . '/common/footer.php');?> 