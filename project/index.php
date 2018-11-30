<?php session_start();?>
<?php include('../common/nav.php');?> 
<!---  ####### Body content begins ####### -->
<div class="jumbotron">
        <div class="container text-center">
            <h1>Group Buying Calculator</h1>
        </div>
    </div>
    <div class="container text-center">
        <div class="row">
            <div class="col-sm-12 panel panel-default text-left">
                <div  class="panel-body">
              <h2>Save money by buying in bulk as a group.</h2>
              <h3>Our Calculator makes it easy to figure out how much to purchase.</h3>
                    <p><b>Scenario:</b>It's harvest time and your group of friends wants to do some home canning and make homemade applesauce.
                        You've been charged with purchasing apples for everyone. 
                        Your group decides that a full portion is $50 worth of apples (this is the full portion budget). 
                        Some people want full portions and others want half portions. Others may want double or triple portions.
                        You need to figure how many boxes of apples to purchase for the group based on the # of portions requested</p>
                        <?php if (!isset($_SESSION['client'])){
                        echo "<h3><a href='/register.php'>Register Now</a> or <a href='/login.php'>Login</a> to get started. </h3>
                        ";}?>
                   
            </div>
            </div>

   


            <!-- Center column -->
           
            <?php 

if (isset($_SESSION['client'])){ echo "
            <div class='col-sm-12'>

                <div class='row'>
                    <div class='col-sm-12'>
                        <div class='panel panel-default text-left well'>
                            <div class='panel-body'>"; }?>     
<!-- Directs customer to create co-op-->
<?php 

if (isset($_SESSION['client'])){
if (!isset($_SESSION['coop']['coop_name'])){
                    echo "<h3>First step:<a href='co-op.php'> Create your Co-op</a></h3>";
                    }else {
                        echo "<h2>What would you like to do?</h2><h3><a href='order-form.php'>Place a new order</a></h3>
                        <h3><a href='dashboard.php'>See past orders</a></h3>";
                        
                    } 
                }
                    
                    
                    ?>
                
                <?php 

if (isset($_SESSION['client'])){ echo " 
                            </div>
                        </div>
                    </div>
                </div>


            </div>";} ?>
<!--end center column-->
</div> 
</div>        
       
    <script src ="../scripts/functions.js"></script>
 <?php include($_SERVER["DOCUMENT_ROOT"] . '/project/common/footer.php');?> 